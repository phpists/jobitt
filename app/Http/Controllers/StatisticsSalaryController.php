<?php

namespace App\Http\Controllers;

use App\Enums\ExperienceOptions;
use App\Enums\LocationOptions;
use App\Enums\SeniorityOptions;
use App\Models\EditPage;
use App\Services\LinkTransformService;
use App\Services\StatsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class StatisticsSalaryController extends Controller
{
    private const FilterOptions = [
        'position' => 'Job Role',
        'seniority' => 'Seniority',
        'experience' => 'Years of Experience',
        'location' => 'Location'
    ];

    private function convertYearsExperience(int $years): string
    {
        $exp_name = "";
        switch (true) {
            case $years < 1:
                $exp_name = 'Without Experience';
                break;
            case $years < 3:
                $exp_name = '1-3 Years';
                break;
            case $years < 5:
                $exp_name = '3-5 Years';
                break;
            case $years >= 5:
                $exp_name = '5+ Years';
                break;
        }
        return $exp_name;
    }

    private function calculateStats(array $data, string $position, null|string $technology) {
        $salaryData = [];
        foreach ($data as $sample) {
            $salaryData[] = $sample['Salary (₪)'];
        }
        sort($salaryData);
        $stats = [];
        $stats['field_text'] = $technology ?? $position;
        $stats['mean_salary'] = StatsService::calculateMean($salaryData);
        $stats['median_salary'] = StatsService::calculateMedian($salaryData);
        $stats['min_salary'] = StatsService::calculateMin($salaryData);
        $stats['max_salary'] = StatsService::calculateMax($salaryData);
        $stats['top_three_benefits'] = StatsService::threeMostFrequentBenefits($data);
        $stats['number_respondents'] = sizeof($data);
        return $stats;
    }
    public function index(Request $request, string $position=null, string $technology=null, $selected_location=null)
    {

        $positions = [];
        $technologies = [];
        $data = json_decode(Storage::disk('local')->get('roles.json'), true);
        $survey_data = json_decode(Storage::disk('local')->get('Salary_Survey_Dataset.json'), true);
        $summarized_data = json_decode(Storage::disk('local')->get('Salary_Statistics_Summary.json'), true);
        $salary_by_jobs = rsort($summarized_data['Salary by Job Role']);
        $job_type = 'technical';
        foreach ($data as $job_role=>$job_technologies) {
            if ($position === null) {
                return redirect(route('salaries', ['position' => LinkTransformService::transformPositionName($job_role)]));
            }
            $position = LinkTransformService::redoTransform($position);
            $positions[] = $job_role;
            if ($position === $job_role) {
                foreach ($job_technologies as $job_technology) {
                    $technologies[] = $job_technology;
                }
            }
        }
        if ($technology !== null) {
            $technology = LinkTransformService::redoTransform($technology);
        }
        $page = EditPage::query()->where('route_name', ($technology??$position))->first();
        if ($page === null) {
            $page = EditPage::query()->where('route_name', EditPage::DEFAULT_PAGE)->first();
        }
        $salary_ranges = [];
        foreach (SeniorityOptions::cases() as $option) {
            $salary_ranges[$option->value] = [];
        }
        foreach (LocationOptions::cases() as $option) {
            $salary_ranges[$option->value] = [];
        }
        $salary_ranges['Male'] = [];
        $salary_ranges['Female'] = [];
        $job_statistics = [
            'Gender' => [],
            'Location' => [],
            'Experience' => ['exp_years' => 0, 'exp_name' => '', 'min' => 0, 'max' => 0]
        ];
        foreach ($survey_data as $sample) {
            if ($sample["Role Category"] === $job_type) {
                foreach ($sample as $key=>$value) {
                    if (array_key_exists($value, $salary_ranges)) {
                        $salary_ranges[$value][] = $sample['Salary (₪)'];
                    }
                }
            }
        }
        $filtered_data = $this->filter_data(
            $survey_data,
            $technologies,
            $request->get('seniority'),
            $request->get('location'),
            $request->get('experience'),
            $technology);
        foreach ($filtered_data as $sample) {

            if (!array_key_exists($sample['Gender'], $job_statistics['Gender'])) {
                $job_statistics['Gender'][$sample['Gender']] = ['sum' => 0, 'count' => 0];
            }
            $job_statistics['Gender'][$sample['Gender']]['sum'] += $sample['Salary (₪)'];
            $job_statistics['Gender'][$sample['Gender']]['count'] += 1;
            if (!array_key_exists($sample['Location'], $job_statistics['Location'])) {
                $job_statistics['Location'][$sample['Location']] = ['sum' => 0, 'count' => 0];
            }
            $job_statistics['Location'][$sample['Location']]['sum'] += $sample['Salary (₪)'];
            $job_statistics['Location'][$sample['Location']]['count'] += 1;
            $current_exp = self::convertYearsExperience($sample['Years of Experience']);
            if ($job_statistics['Experience']['exp_years'] < $sample['Years of Experience'] && ($current_exp !== $job_statistics['Experience']['exp_years'])) {
                $job_statistics['Experience'] = [
                    'exp_years' => $sample['Years of Experience'],
                    'exp_name' => $current_exp,
                    'min' => $sample['Salary (₪)'],
                    'max' => $sample['Salary (₪)']
                ];
            }
            elseif ($current_exp === $job_statistics['Experience']['exp_name']) {
                $job_statistics['Experience']['min'] = min([$sample['Salary (₪)'], $job_statistics['Experience']['min']]);
                $job_statistics['Experience']['max'] = max([$sample['Salary (₪)'], $job_statistics['Experience']['max']]);
            }
        }
        foreach ($job_statistics['Gender'] as $gender => $statistic) {
            $job_statistics['Gender'][$gender] = (int)round($statistic['sum'] / $statistic['count']);
        }
        foreach ($job_statistics['Location'] as $location => $statistic) {
            $job_statistics['Location'][$location] = (int)round($statistic['sum'] / $statistic['count']);
        }
        $max_location_salary = max($job_statistics['Location']);
        $max_location = array_search($max_location_salary, $job_statistics['Location']);
        $job_statistics['Location'] = [$max_location => $max_location_salary];
        foreach ($salary_ranges as $key=>$value) {
            $salary_ranges[$key] = (int)(round(array_sum($value)) / max([sizeof($value), 1]));
        }
        $seniority_options = [];
        foreach (SeniorityOptions::cases() as $option) {
            $seniority_options[$option->value] = $option->value;
        }
        $location_options = [];
        foreach (LocationOptions::cases() as $option) {
            $location_options[$option->value] = $option->value;
        }
        return view('index', [
            'exp_options' => [
                ExperienceOptions::NO_EXPERIENCE->value => 'Without Experience',
                ExperienceOptions::ONE_THREE_YEARS->value => '1-3 Years',
                ExperienceOptions::THREE_FIVE_YEARS->value => '3-5 Years',
                ExperienceOptions::FIVE_MORE_YEARS->value => '5+'
            ],
            'salary_ranges' => $salary_ranges,
            'salary_by_jobs' => $salary_by_jobs,
            'location_options' => $location_options,
            'seniority_options' => $seniority_options,
            'positions' => $positions,
            'technologies' => $technologies,
            'selected_position' => $position,
            'selected_technology' => $technology,
            'selected_experience' => $request->get('experience'),
            'selected_location' => $selected_location,
            'selected_seniority' => $request->get('seniority'),
            'job_statistics' => $job_statistics,
            'page' => $page
        ]);
    }

    private function filter_data(array $data, array $positions, string|null $seniority, string|null $location, string|null $experience, string|null $technology): array {
        $filteredData = [];
        foreach ($data as $sample) {
            $is_accepted = true;
            $is_accepted = isset($seniority)?$seniority === $sample[self::FilterOptions['seniority']]: $is_accepted;
            $is_accepted = (isset($location)?$location === $sample[self::FilterOptions['location']]: $is_accepted) && $is_accepted;
            if (isset($technology)) {
                $is_accepted = ($technology === $sample[self::FilterOptions['position']]) && $is_accepted;
            } else {
                $is_accepted = (in_array($sample[self::FilterOptions['position']], $positions)) && $is_accepted;
            }
            if (isset($experience) && $is_accepted) {
                switch ($experience) {
                    case ExperienceOptions::NO_EXPERIENCE->value:
                        $is_accepted = $sample[self::FilterOptions['experience']] === 0;
                        break;
                    case ExperienceOptions::ONE_THREE_YEARS->value:
                        $is_accepted = ($sample[self::FilterOptions['experience']] >=1) && ($sample[self::FilterOptions['experience']] < 3);
                        break;
                    case ExperienceOptions::THREE_FIVE_YEARS->value:
                        $is_accepted = ($sample[self::FilterOptions['experience']] >=3) && ($sample[self::FilterOptions['experience']] < 5);
                        break;
                    case ExperienceOptions::FIVE_MORE_YEARS->value:
                        $is_accepted = $sample[self::FilterOptions['experience']] >= 5;
                        break;
                }
            }
            if ($is_accepted) {
                $filteredData[] = $sample;
            }
        }
        return $filteredData;
    }

    public function stats_data(Request $request)
    {
        $positions = [];
        $position = $request->get('position');
        if ($position === null) {
            return response()->json(['error' => 'position should be passed'], 400);
        }
        $position = LinkTransformService::redoTransform($position);
        $technology = LinkTransformService::redoTransform($request->get('technology'));
        $seniority = $request->get('seniority');
        $experience = $request->get('experience');
        $location = $request->get('location');
        $positions_data = json_decode(Storage::disk('local')->get('roles.json'), true);
        foreach ($positions_data as $job_role => $job_technologies) {
            if ($position === $job_role) {
                $positions[] = $job_role;
                foreach ($job_technologies as $job_technology) {
                    $positions[] = $job_technology;
                }
                break;
            }
        }
        $data = json_decode(Storage::disk('local')->get('Salary_Survey_Dataset.json'), true);
        $filteredData = $this->filter_data($data, $positions, $seniority, $location, $experience, $technology);
        return response()->json([
            'survey_data' => $filteredData,
            'stats' => self::calculateStats($filteredData, $position, $technology)
        ]);
    }
}
