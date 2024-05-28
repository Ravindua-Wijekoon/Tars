
<?php
session_start();


$uocindex = $_SESSION['id'];

echo $uocindex;



header("Location: ../../student/student_dashboard.php");
exit;
?>


