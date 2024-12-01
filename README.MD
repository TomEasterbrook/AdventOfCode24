# Advent of Code 2024

This is a repository for my solutions to the Advent of Code 2024 puzzles. I will be using PHP to solve the puzzles. I've opted to sprinkle in a bit of Laravel magic via the illuminate/support package to focus on the problem-solving aspect of the puzzles.
Each Day is contained in a separate folder with each part of the puzzle encapsulated in its own Task class. These are automatically registered with the main app which provides a simple CLI interface to run the tasks.

## Installation

1. Clone the repository
2. Run `composer install`
3. run `php app.php` to see the available solutions and run them.

# Requirements
- PHP 8.2
- Composer

# Tests
To run the tests which are built with the sample data provided in the puzzles, run `composer run test`
# License
MIT
```