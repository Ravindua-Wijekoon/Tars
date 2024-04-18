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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];

    $stmt = $con->prepare('UPDATE company_info SET name=?, type=?, location=?, com_email=?, about=?, linkedin=?, twitter=? WHERE email=?');
    $stmt->bind_param('ssssssss', $_POST['comname'], $_POST['type'], $_POST['location'], $_POST['comemail'], $_POST['about'], $_POST['link'], $_POST['twitter'], $user_id);
    $stmt->execute();
    $stmt->close();
}

$con->close();

header("Location: ../../company/company_profile.php");
?>
