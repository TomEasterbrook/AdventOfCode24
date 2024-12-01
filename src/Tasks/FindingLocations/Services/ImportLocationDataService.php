<?php

namespace TomEasterbrook\AdventOfCode\Tasks\FindingLocations\Services;

class ImportLocationDataService
{
    public static function importLocations(): array
    {
        $data = file_get_contents(__DIR__.'/../Input/locations.txt');
        $locations = explode("\n", $data);

        $leftLocations = [];
        $rightLocations = [];

        foreach ($locations as $key => $location) {
            $location = explode('   ', $location);
            $leftLocations[] = $location[0];
            $rightLocations[] = $location[1];
        }

        return [$leftLocations, $rightLocations];
    }
}
