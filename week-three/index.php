<?php
error_reporting(-1);
ini_set("display_errors", 1);

require('./bootstrap/init.php');

use App\Models\User;

// here be logic
$users = User::all();

// here be output
include(ROOT_PATH . '/views/index.view.php');