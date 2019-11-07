<?php

class person {
    protected $firstName, $lastName, $id;

    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }

    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}
class Student extends person {
    private $testScores;

    /*
    *   Class Constructor
    *
    *   Parameters:
    *   firstName - A string denoting the Person's first name.
    *   lastName - A string denoting the Person's last name.
    *   id - An integer denoting the Person's ID number.
    *   scores - An array of integers denoting the Person's test scores.
    */
    // Write your constructor here
    public function __construct($first_name, $last_name, $id, $scores)
    {
        parent::__construct($first_name, $last_name, $id);
        $this->testScores = $scores;
    }

    /*
    *   Function Name: calculate
    *   Return: A character denoting the grade.
    */
    // Write your function here
    public function calculate()
    {
        $average = array_sum($this->testScores) / count($this->testScores);

        if (90 <= $average && $average <= 100) {
            return 'O';
        } elseif (80 <= $average && $average < 90) {
            return 'E';
        } elseif (70 <= $average && $average < 80) {
            return 'A';
        } elseif (55 <= $average && $average < 70) {
            return 'P';
        } elseif (40 <= $average && $average < 55) {
            return 'D';
        } elseif ($average < 40) {
            return 'T';
        }
    }
}


$file = fopen("php://stdin", "r");

$name_id = explode(' ', fgets($file));

$first_name = $name_id[0];
$last_name = $name_id[1];
$id = (int)$name_id[2];

fgets($file);

$scores = array_map(intval, explode(' ', fgets($file)));

$student = new Student($first_name, $last_name, $id, $scores);

$student->printPerson();

print("Grade: {$student->calculate()}");