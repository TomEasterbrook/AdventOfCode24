<?php

namespace TomEasterbrook\AdventOfCode\Tasks\FindingLocations;

use TomEasterbrook\AdventOfCode\Tasks\FindingLocations\Services\ImportLocationDataService;
use TomEasterbrook\AdventOfCode\Tasks\FindingLocations\Services\ReconcileLocationsService;
use TomEasterbrook\AdventOfCode\Tasks\Task;

use function Laravel\Prompts\info;

class CalculateSimilarityTask extends Task
{
    public function run(): void
    {
        [$leftLocations, $rightLocations] = ImportLocationDataService::importLocations();

        info('The Similarity score between the two lists is: '.ReconcileLocationsService::calculateSimilarityScore($leftLocations, $rightLocations));

    }

    public function getName(): string
    {
        return 'Calculate the similarity score of two location lists';
    }

    public function getDay(): int
    {
        return 1;
    }
}
