<?php

namespace TomEasterbrook\AdventOfCode\Tasks;

abstract class Task
{
    abstract public function run(): void;

    abstract public function getName(): string;

    abstract public function getDay(): int;
}
