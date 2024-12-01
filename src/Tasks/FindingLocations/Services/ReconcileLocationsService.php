<?php

namespace TomEasterbrook\AdventOfCode\Tasks\FindingLocations\Services;

class ReconcileLocationsService
{
    public static function calculateDistance(array $firstLocations, array $secondLocations): int
    {
        $distance = 0;

        $firstLocations = collect($firstLocations)->sort()->flatten();
        $secondLocations = collect($secondLocations)->sort()->flatten();

        foreach ($firstLocations as $key => $location) {
            $distance += abs($location - $secondLocations[$key]);
        }

        return $distance;

    }

    public static function calculateSimilarityScore(array $firstLocations, array $secondLocations): int
    {
        $totals = [];
        foreach ($firstLocations as $firstLocation) {
            $occurrences = 0;
            array_map(function ($value) use (&$occurrences, $firstLocation) {
                $occurrences += (int) ($firstLocation === $value);
            }, $secondLocations);

            $totals[] = $occurrences;
        }

        $score = 0;
        foreach ($totals as $index => $total) {
            $score += ($firstLocations[$index] * $total);
        }

        return $score;

    }
}
