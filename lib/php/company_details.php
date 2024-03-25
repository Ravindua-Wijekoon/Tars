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

$name = $_POST['name'];
$type = $_POST['type'];
$location = $_POST['location'];
$com_email = $_POST['com_email'];
$about = $_POST['about'];
$linkedin = $_POST['linkedin'];
$twitter = $_POST['twitter'];

$email = $_SESSION['email'];


if ($stmt = $con->prepare('UPDATE company_info_temp SET name=?, type=?, location=?, com_email=?, about=?, linkedin=?, twitter=? WHERE email=?')) {
    $stmt->bind_param('ssssssss', $name, $type, $location, $com_email, $about, $linkedin, $twitter, $email);
    $stmt->execute();
    echo 'Successfully updated';
} else {
    echo 'Could not prepare statement!';
}















$con->close();
?>