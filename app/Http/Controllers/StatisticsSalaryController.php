<?php

namespace App\Http\Controllers;

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
    private const EXPERIENCE_OPTIONS = [
        'Without Experience',
        '1-3 Years',
        '3-5 Years',
        '5+'
    ];
    public function index(string $position=null, string $technology=null, $country=null)
    {
        $data = json_decode(Storage::disk('local')->get('Salary_Survey_Dataset.json'), true);
        $filteredData = [];
        foreach ($data as $sample) {
            $is_accepted = true;
            foreach (self::FilterOptions as $key=>$translatedKey) {
                if (array_key_exists($key, $_GET) && array_key_exists($translatedKey, $sample) && $sample[$translatedKey] !== $_GET[$key]) {
                    $is_accepted = false;
                }
            }
            if ($is_accepted) {
                $filteredData[] = $sample;
            }
        }
        return view('index', ['exp_options' => self::EXPERIENCE_OPTIONS]);
    }
}
