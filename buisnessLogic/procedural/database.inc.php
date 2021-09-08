<?php

    $dbHost="localhost";
    $dbUser="root";
    $dbPass="";
    $dbName="sunnynews";

    $conn = mysqli_connect($dbHost,$dbUser,$dbPass,$dbName);

    if (!$conn) {
        die("FATAL:DATABASE CONNECTION FAILED");
    }