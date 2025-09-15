<?php
session_start();
require_once "../include/config.php";
$errors = array();

// REGISTER USER
if (isset($_POST['reg_user'])) {
     // receive all input values from the form
     $username = mysqli_real_escape_string($link, $_POST['username']);
     $email = mysqli_real_escape_string($link, $_POST['email']);
     $password_1 = mysqli_real_escape_string($link, $_POST['password_1']);
     $password_2 = mysqli_real_escape_string($link, $_POST['password_2']);

     // form validation: ensure that the form is correctly filled
     if (empty($username)) {
          array_push($errors, "Username is required");
          header('location: ./');
     }
     if (empty($email)) {
          array_push($errors, "Email is required");
          header('location: ./');
     }
     if (empty($password_1)) {
          array_push($errors, "Password is required");
          header('location: ./');
     }

     if ($password_1 != $password_2) {
          array_push($errors, "The two passwords do not match");
          header('location: ./');
     }

     $check_user_exist = " SELECT * FROM `users` WHERE username = '$username' ";
     $check_user = mysqli_query($link, $check_user_exist);
     $check_count = mysqli_num_rows($check_user);

     if ($check_count == 0) {
          // register user if there are no errors in the form
          if (count($errors) == 0) {
               $password = md5($password_1); //encrypt the password before saving in the database
               $query = "INSERT INTO users (username, email, password) 
					  VALUES('$username', '$email', '$password')";
               mysqli_query($link, $query);

               $query1 = "SELECT * FROM users WHERE username='$username' AND password='$password'";
               $results = mysqli_query($link, $query1);
               $id = 0;

               while ($a = mysqli_fetch_assoc($results)) {
                    $id = $a['id'];
               }
               $_SESSION['id'] = $id;

               $_SESSION['username'] = $username;
               $_SESSION['success'] = "You are now Registered User Please Sign In";
               $_SESSION['sended'] = "";
               // header('location: ../index.php');
               if (!isset($_SESSION['pathishere'])) {
                    header('location: ../index.php');
               } else {
                    $path = $_SESSION['pathishere'];
                    header('location: ' . $path . '');
               }
          }
     } else {
          $_SESSION['user_exist'] = "Username Already Exists Try Another";
          header('location: ../');
     }
}

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
     $username = mysqli_real_escape_string($link, $_POST['username']);
     $password = mysqli_real_escape_string($link, $_POST['password']);

     if (empty($username)) {
          array_push($errors, "Username is required");
          header('location: ./');
     }
     if (empty($password)) {
          array_push($errors, "Password is required");
          header('location: ./');
     }

     if (count($errors) == 0) {
          $password = md5($password);
          $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
          $results = mysqli_query($link, $query);

          if (mysqli_num_rows($results) == 1) {
               $id = 0;

               while ($a = mysqli_fetch_assoc($results)) {
                    $id = $a['id'];
               }
               $_SESSION['id'] = $id;
               $_SESSION['username'] = $username;
               if (!isset($_SESSION['pathishere'])) {
                    header('location: ../');
               } else {
                    $path = $_SESSION['pathishere'];
                    header('location: ' . $path . '');
               }
          } else {
               $_SESSION['wrong'] = "Wrong username/password combination";
               header('location: ../');
          }
     }
}
