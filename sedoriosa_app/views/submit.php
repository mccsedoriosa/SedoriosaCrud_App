<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','students_crud');

// get the post records
$idnumber = $_POST['idnumber'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];

// database insert SQL code
$sql = "INSERT INTO `students` ('id','idnumber', 'name', 'phone', 'address') VALUES ('0', '$idnumber', '$name', '$address', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "student Added";
}

?>