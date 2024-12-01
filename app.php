<?php

use function Laravel\Prompts\select;

require_once 'vendor/autoload.php';

$tasks = glob('src/Tasks/*/*.php');
$registeredTasks = collect();
foreach ($tasks as $task) {
    if (str_contains($task, 'Task.php')) {
        $fullClassName = str_replace(['src/', '/', '.php'], ['', '\\', ''], 'TomEasterbrook\\AdventOfCode\\'.$task);
        if (class_exists($fullClassName)) {
            $registeredTasks->add(new $fullClassName);
        }
    }
}

echo "Welcome to Tom's Advent of Code 2024\n";

$options = $registeredTasks->map(fn ($task) => "{$task->getDay()}: {$task->getName()}")->toArray();

$selectedTask = select('Please select a task to run', $options);

$task = $registeredTasks->filter(fn ($task) => "{$task->getDay()}: {$task->getName()}" === $selectedTask)->first();

$task->run();

echo "Task completed\n";
