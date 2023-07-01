<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
extract($_POST);
$con = mysqli_connect('localhost', 'root', '','feedback');
// get the post records
$txtName = $_POST['Name'];
$txtEmail = $_POST['gmail'];
$txtPhone = $_POST['subject'];
$txtMessage = $_POST['msg'];

// database insert SQL code
$sql = "INSERT INTO 'feedback'('Id','Name', 'gmail', 'subject', 'msg') VALUES (0,'$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 

if(mysqli_query($con, $sql))
{
	echo "Contact Records Inserted";
}

?>