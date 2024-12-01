<?php

namespace TomEasterbrook\AdventOfCode\Tasks\FindingLocations;

use TomEasterbrook\AdventOfCode\Tasks\FindingLocations\Services\ImportLocationDataService;
use TomEasterbrook\AdventOfCode\Tasks\FindingLocations\Services\ReconcileLocationsService;
use TomEasterbrook\AdventOfCode\Tasks\Task;

use function Laravel\Prompts\info;

class CalculateDistanceTask extends Task
{
    public function run(): void
    {
        [$leftLocations, $rightLocations] = ImportLocationDataService::importLocations();

        info('The distance between the two lists is: '.ReconcileLocationsService::calculateDistance($leftLocations, $rightLocations));

    }

    public function getName(): string
    {
        return 'Calculate Distance between two location lists';
    }

    public function getDay(): int
    {
        return 1;
    }
}
