<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','contact');

// get the post records
$txtName = $_POST['Name'];
$txtEmail = $_POST['gmail'];
$txtPhone = $_POST['subject'];
$txtMessage = $_POST['msg'];

// database insert SQL code
$sql = "INSERT INTO contact_form (`Id`, `Name`, `gmail`, `subject`, `msg`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
/*
$Name=$_POST['Name'];
$gmail=$_POST['gmail'];
$subject=$_POST['subject']
$msg=$_POST['msg'];
//DB connection
$con=new mysqli("localhost","root","","test");
if($con->connect_error){
    die("Failed to connect :" $con->connect_error);
}
  if (isset($_POST['name']))
    $name = $_POST['name'];
  if (isset($_POST['gmail']))
    $email = $_POST['gmail'];
    if (isset($_POST['subject']))
    $subject = $_POST['subject'];
  if (isset($_POST['msg']))
    $message = $_POST['msg'];
  if ($name === '') {
    echo "Name cannot be empty.";
    die();
  }
  if ($email === '') {
    echo "Email cannot be empty.";
    die();
  } else {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Email format invalid.";
      die();
    }
  }
  if ($subject === '') {
    echo "Subject cannot be empty.";
    die();
  }
  if ($message === '') {
    echo "Message cannot be empty.";
    die();
  }
  $content = "From: $name \nEmail: $email \nMessage: $message";
  $recipient = "youremail@here.com";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $content, $mailheader) or die("Error!");
  echo "Email sent!";*/
?>