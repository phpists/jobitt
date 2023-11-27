<?php

namespace App\Http\Controllers;

use App\Enums\ExperienceOptions;
use App\Enums\LocationOptions;
use App\Enums\SeniorityOptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StatisticsSalaryController extends Controller
{
    private const FilterOptions = [
        'position' => 'Job Role',
        'seniority' => 'Seniority',
        'experience' => 'Years of Experience',
        'location' => 'Location'
    ];
    public function index(Request $request, string $position=null, string $technology=null, $country=null)
    {
        $positions = [];
        $technologies = [];
        $data = json_decode(Storage::disk('local')->get('roles.json'), true);
        foreach ($data as $job_role=>$job_technologies) {
            if ($position === null) {
                return redirect(route('salaries', ['position' => $job_role]));
            }
            $positions[] = $job_role;
            if ($position === $job_role) {
                foreach ($job_technologies as $job_technology) {
                    $technologies[] = $job_technology;
                }            }
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
            'location_options' => $location_options,
            'seniority_options' => $seniority_options,
            'positions' => $positions,
            'technologies' => $technologies,
            'selected_position' => $position,
            'selected_technology' => $technology,
            'selected_experience' => $request->get('experience'),
            'selected_location' => $request->get('location'),
            'selected_seniority' => $request->get('seniority')
        ]);
    }

    public function filter_data(Request $request)
    {
        $positions = [];
        $filteredData = [];
        $position = $request->get('position');
        $technology = $request->get('technology');
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
        return response()->json($filteredData);
    }
}
