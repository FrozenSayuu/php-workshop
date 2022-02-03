<?php

function db_init(){
    //return new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER, DB_PASSWORD);
    return new PDO("sqlite:test.db");
}

?>