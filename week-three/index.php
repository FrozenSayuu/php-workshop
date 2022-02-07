<?php
error_reporting(-1);
ini_set("display_errors", 1);

require('./bootstrap/init.php');

// here be logic


// here be output
include(ROOT_PATH . '/views/partials/header.php');
?>

	<h1>Welcome to Bank!</h1>

<?php
include(ROOT_PATH . '/views/partials/footer.php');