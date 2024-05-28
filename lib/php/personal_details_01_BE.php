
<?php
session_start();


$_SESSION['full_name'] = $_POST['full_name'];
$_SESSION['name_with_initials'] = $_POST['name_with_initials'];
$_SESSION['date_of_birth'] = $_POST['date_of_birth'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['city_town'] = $_POST['city_town'];
$_SESSION['zip_code'] = $_POST['zip_code'];
$_SESSION['bio'] = $_POST['bio'];




header("Location: ../../student/personal_details_02.php");
exit;
?>


