<?php

require('./bootstrap/init.php');

use App\Models\User;
use App\Models\Account;

// here be logic
$users = User::all();
$accs = Account::all();

// here be output
include(ROOT_PATH . '/views/index.view.php');