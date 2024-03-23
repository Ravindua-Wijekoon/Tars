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
$bio = $_SESSION['bio'];

$_SESSION['github'] = $_POST['github'];
$_SESSION['linkedin'] = $_POST['linkedin'];
$_SESSION['portfolio'] = $_POST['portfolio'];

$github = $_SESSION['github'];
$linkedin = $_SESSION['linkedin'];
$portfolio = $_SESSION['portfolio'];

$uocindex = $_SESSION['uocindex'];

if ($stmt = $con->prepare('UPDATE student_info SET fullname=?, nameinitials=?, bio=?, dob=?, address=?, city=?, zipcode=?, github=?, linkedin=?, portfolio=? WHERE uocindex=?')) {
    $stmt->bind_param('ssssssssssi', $full_name, $name_with_initials, $bio, $date_of_birth, $address, $city_town, $zip_code, $github, $linkedin, $portfolio, $uocindex);
    $stmt->execute();
    echo 'Successfully updated';
} else {
    echo 'Could not prepare statement!';
}

//step 1  :insert initial data of students in student main table

//step 2 :get latest student key

//step 3:fetch education array data

//step 4:check the lengt of of education array in if condition, education array eka for loop ekakata aragena
// education[i]['institute']
// insert query eka gahanna ona for loop eka atule


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //var_dump($_POST);
    //echo $_POST['educationData'];

    //exit(0)
    //Education
    //echo $_POST['educationData'];
    $educationData = $_POST['educationData'];
    $educationArray = json_decode($educationData, true);
    $stmts = $con->prepare("INSERT INTO education_info (institution, sdate, edate, std_id) VALUES (?, ?, ?, ?)");

    $stmts->bind_param("ssss", $institute, $startYear, $endYear, $uocindex);
    echo $uocindex;
    foreach ($educationArray as $edu) {
        
        $institute = $edu['institute'];
        $startYear = $edu['startYear'];
        $endYear = $edu['endYear'];
       
        $stmts->execute();

    }
    $stmts->close();
    echo "Education records inserted successfully";

    //Experience
    


    
} else {
    
    echo 'form submission failure!';
}
















$con->close();
?>
