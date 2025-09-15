<?php
require_once "../include/config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$sended = $_SESSION['sended'];
$sended = "Thank You For Contacting Us . Your Message Has Been Send .";

$query = "INSERT INTO contacts (name,email,subject,message) 
					  VALUES('$name', '$email','$subject','$message')";
mysqli_query($link, $query);

$_SESSION['sended'] = $sended;
header('location: ../#contactus');
