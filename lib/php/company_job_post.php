<?php

session_start();

$user_id = $_SESSION['id'];

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'tars_db';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


$stmt = $con->prepare('INSERT INTO company_post_job (title, description, location, qualification, type, email) VALUES (?, ?, ?, ?, ?, ?)');
$stmt->bind_param('ssssss', $_POST['title'], $_POST['description'], $_POST['location'], $_POST['qua'], $_POST['type'], $user_id);
$stmt->execute();
$stmt->close();


$con->close();

header("Location: ../../company/company_postjob.php");
?>
