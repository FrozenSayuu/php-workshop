<?php

require('incl/config.php');
require('incl/db.php');

$dbh = db_init();

$query = $dbh->prepare("SELECT * FROM students");
$query->execute();

$students_assoc = $query->fetchAll(PDO::FETCH_ASSOC);
/*
echo "<pre>";
echo "<h2>Students Assoc</h2>";
var_dump($students_assoc);
echo "</pre>";

$query->execute();
*/
$students_obj = $query->fetchAll(PDO::FETCH_OBJ);

echo "<pre>";
echo "<h2>Students Object</h2>";
var_dump($students_obj);
echo "</pre>";