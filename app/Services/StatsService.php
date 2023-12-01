<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;

class StatsService
{
    static public function calculateMedian(array $data) {
        if (sizeof($data) === 0) {
            return 0;
        }
        return $data[(int)(sizeof($data)/2)];
    }

    static public function calculateMean(array $data): int
    {
        if (sizeof($data) === 0){
            return 0;
        }
        return (int)round(array_sum($data) / sizeof($data));
    }

    static public function calculateMax(array $data) {
        if (sizeof($data) === 0){
            return 0;
        }
        return $data[sizeof($data) - 1];
    }

    static public function calculateMin(array $data) {
        if (sizeof($data) === 0){
            return 0;
        }
        return $data[0];
    }

    static function threeMostFrequentBenefits($data, $count=3): string
    {
        $key = 'Benefits';
        $biggestFrequency = [
            'name' => null,
            'count' => 0
        ];
        $secondFrequency = [
            'name' => null,
            'count' => 0
        ];
        $thirdFrequency = [
            'name' => null,
            'count' => 0
        ];
        $frequencies = [];

        foreach ($data as $el) {
            $list_benefits = explode(',', $el[$key]);
            foreach ($list_benefits as $benefit) {
                $benefit = trim($benefit);
                if (!array_key_exists($benefit, $frequencies)) {
                    $frequencies[$benefit] = 0;
                }
                $frequencies[$benefit] += 1;
                if ($frequencies[$benefit] > $biggestFrequency['count']) {
                    $biggestFrequency['name'] = $benefit;
                    $biggestFrequency['count'] += 1;
                } elseif ($frequencies[$benefit] > $secondFrequency['count']) {
                    $secondFrequency['name'] = $benefit;
                    $secondFrequency['count'] += 1;
                } elseif ($frequencies[$benefit] > $thirdFrequency['count']) {
                    $thirdFrequency['name'] = $benefit;
                    $thirdFrequency['count'] += 1;
                }
            }
        }

        return join(', ', [$biggestFrequency['name'], $secondFrequency['name'], $thirdFrequency['name']]);
    }
}
