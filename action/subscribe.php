<?php
require_once "../include/config.php";

$mail = $_POST['mail'];

$query = "INSERT INTO `subscribed`(`email`) VALUES ('$mail')";
mysqli_query($link, $query);

header('location: ../#footer');
