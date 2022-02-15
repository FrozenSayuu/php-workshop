<?php

require('./bootstrap/init.php');

use App\Models\User;
use App\Models\Phone;

// here be logic
$users = User::all();

$phones = Phone::all();

// render content
require(ROOT_PATH . '/views/index.view.php');
