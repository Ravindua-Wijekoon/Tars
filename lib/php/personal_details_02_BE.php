<?php

session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tars_db';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$full_name = $_SESSION['full_name'];
$name_with_initials = $_SESSION['name_with_initials'];
$date_of_birth = $_SESSION['date_of_birth'];
$address = $_SESSION['address'];
$city_town = $_SESSION['city_town'];
$zip_code = $_SESSION['zip_code'];


$institution_edu = $_SESSION['institution_edu'];
$start_edu = $_SESSION['start_edu'];
$end_edu = $_SESSION['end_edu'];
$institution_exp = $_SESSION['institution_exp'];
$start_exp = $_SESSION['start_exp'];
$end_exp = $_SESSION['end_exp'];
$skills = $_SESSION['skills'];
$language = $_SESSION['language'];





$con->close();
?>
