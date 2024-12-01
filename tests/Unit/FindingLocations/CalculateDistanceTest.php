<?php

use Tests\TestCase;
use TomEasterbrook\AdventOfCode\Tasks\FindingLocations\Services\ReconcileLocationsService;

uses(TestCase::class);

test('that the distance between two lists can be correctly calculated', function () {
    $firstLocations = [3, 4, 2, 1, 3, 3];
    $secondLocations = [4, 3, 5, 3, 9, 3];

    $distance = ReconcileLocationsService::calculateDistance($firstLocations, $secondLocations);
    expect($distance)->toBe(11);
});

test('that the similarity score between two lists can be correctly calculated', function () {
    $firstLocations = [3, 4, 2, 1, 3, 3];
    $secondLocations = [4, 3, 5, 3, 9, 3];

    $similarity = ReconcileLocationsService::calculateSimilarityScore($firstLocations, $secondLocations);
    expect($similarity)->toBe(31);
});
