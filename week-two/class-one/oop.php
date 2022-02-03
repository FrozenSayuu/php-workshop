<?php
error_reporting(-1);              // Report all type of errors
ini_set("display_errors", 1);

require('incl/config.php');
require('incl/db.php');
require('Models/User.php');
require('Models/Student.php');
require('Models/Employee.php');

$dbh = db_init();

$student_query = $dbh->prepare("SELECT * FROM students");
$student_query->execute();

$students = $student_query->fetchAll(PDO::FETCH_CLASS, Student::class);

$employee_query = $dbh->prepare("SELECT * FROM employees");
$employee_query->execute();

$employees = $employee_query->fetchAll(PDO::FETCH_CLASS, Employee::class);

$people = array_merge($students, $employees);

// show result
echo "<pre>";
echo "<h2>People</h2>";
var_dump($people);
echo "</pre>";
/*
echo "<ul>";
foreach ($people as $person) {
	$class = get_class($person); // get class (as a string) that the object is an instance of

	// is user an Employee?
	if ($person instanceof Employee) {
		if ($person->isExternal()) {
			$class = "external {$class}";
		}
	}

	echo "<li>";
	echo "{$person->getFullName()} ({$person->getEmail()}) is a {$class} with ID {$person->getId()}";
	echo "</li>";
}
echo "</ul>";