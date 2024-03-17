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

$_SESSION['institution_edu'] = $_POST['institution_edu'];
$_SESSION['start_edu'] = $_POST['start_edu'];
$_SESSION['end_edu'] = $_POST['end_edu'];
$_SESSION['institution_exp'] = $_POST['institution_exp'];
$_SESSION['start_exp'] = $_POST['start_exp'];
$_SESSION['end_exp'] = $_POST['end_exp'];
$_SESSION['skills'] = $_POST['skills'];
$_SESSION['language'] = $_POST['language'];


$institution_edu = $_SESSION['institution_edu'];
$start_edu = $_SESSION['start_edu'];
$end_edu = $_SESSION['end_edu'];
$institution_exp = $_SESSION['institution_exp'];
$start_exp = $_SESSION['start_exp'];
$end_exp = $_SESSION['end_exp'];
$skills = $_SESSION['skills'];
$language = $_SESSION['language'];


if ($stmt = $con->prepare('INSERT INTO studentdetails (name, namewithinitials, dob, address, citytown, zipcode, institutionedu, startedu, endedu, institutionexp, startexp, endexp, skills, language) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)')) {
    $stmt->bind_param('ssssssssssssss', $full_name, $name_with_initials, $date_of_birth, $address, $city_town, $zip_code, $institution_edu, $start_edu, $end_edu, $institution_exp, $start_exp, $end_exp, $skills, $language);
    $stmt->execute();
    echo 'successfully registered';

} else {
    echo 'Could not prepare statement!';
}




$con->close();
?>
