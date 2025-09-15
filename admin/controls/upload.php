<?php

session_start();

include '../../config/config.php';


if (isset($_POST['android_submit'])) {
     //this is for simple text upload

     $name = $_POST['name_project'];
     $description = $_POST['description_project'];
     $owner = $_POST['owner_project'];
     $type = "Android Development";


     //this is for the file upload

     $filename = $_FILES['file']['name'];
     $file_tempname = $_FILES['file']['tmp_name'];
     $file_folder = "../../all_file/assests/" . $filename;
     $file = "../all_file/assests/" . $filename;
     move_uploaded_file($file_tempname, $file_folder);


     //this is for the thumbnail upload


     $thumbnail_name = $_FILES['thumbnail']['name'];
     $thumbnail_tempname = $_FILES['thumbnail']['tmp_name'];
     $thumbnail_folder = "../../all_file/thumbnail/" . $thumbnail_name;
     $thumbnail = "../all_file/thumbnail/" . $thumbnail_name;
     move_uploaded_file($thumbnail_tempname, $thumbnail_folder);

     //selecting the table from the database

     //$q1 = " SELECT * FROM `assests` WHERE name = $name && description = $description && file = $file_folder && thumbnail = $thumbnail_folder && owner = $owner && type = $type ";




     //from here the inserting php is starts

     $q = " INSERT INTO `assests`(`name`, `description`, `file`, `thumbnail`, `owner`, `type`) VALUES ('$name','$description','$file','$thumbnail','$owner','$type') ";


     //firing the query 

     mysqli_query($link, $q);

     header('location: ../?link=./controls/home.html');
}

if (isset($_POST['web_submit'])) {
     //this is for simple text upload

     $name = $_POST['name_project'];
     $description = $_POST['description_project'];
     $owner = $_POST['owner_project'];
     $type = "Web Development";


     //this is for the file upload

     $filename = $_FILES['file']['name'];
     $file_tempname = $_FILES['file']['tmp_name'];
     $file_folder = "../../all_file/assests/" . $filename;
     $file = "../all_file/assests/" . $filename;
     move_uploaded_file($file_tempname, $file_folder);


     //this is for the thumbnail upload


     $thumbnail_name = $_FILES['thumbnail']['name'];
     $thumbnail_tempname = $_FILES['thumbnail']['tmp_name'];
     $thumbnail_folder = "../../all_file/thumbnail/" . $thumbnail_name;
     $thumbnail = "../all_file/thumbnail/" . $thumbnail_name;
     move_uploaded_file($thumbnail_tempname, $thumbnail_folder);

     //selecting the table from the database

     //$q1 = " SELECT * FROM `assests` WHERE name = $name && description = $description && file = $file_folder && thumbnail = $thumbnail_folder && owner = $owner && type = $type ";




     //from here the inserting php is starts

     $q = " INSERT INTO `assests`(`name`, `description`, `file`, `thumbnail`, `owner`, `type`) VALUES ('$name','$description','$file','$thumbnail','$owner','$type') ";


     //firing the query 

     mysqli_query($link, $q);

     header('location: ../?link=./controls/home.html');
}

if (isset($_POST['delete_user'])) {
     $id = $_POST['id'];

     $q = "DELETE FROM `users` WHERE `id` = $id";

     $fire = mysqli_query($link, $q);

     if ($fire) {
          $_SESSION['done'] = "User is Deleted Successfully !";
          header('location:../?link=./controls/userlist.php');
     } else {
          $_SESSION['done'] = "User is not Deleted Successfully !";
          header('location:../?link=./controls/userlist.php');
     }
}


if (isset($_POST['edit_user'])) {
     $id = $_GET['id'];
     $username = mysqli_real_escape_string($link, $_POST['username']);
     $email = mysqli_real_escape_string($link, $_POST['email']);
     $password_1 = mysqli_real_escape_string($link, $_POST['password_1']);
     $password_2 = mysqli_real_escape_string($link, $_POST['password_2']);

     if ($password_1 == $password_2) {
          $password = md5($password_1);
          $q = "update users set id=$id,username='$username',email='$email',password='$password' where id=$id";
          $result = mysqli_query($link, $q);
          if ($result) {
               header('location:../?link=./controls/userlist.php');
          }
     }
}


if (isset($_POST['approve_asset'])) {
     //this is for simple text upload

     $approve = "yes";

     $id = $_POST['id'];

     $q0 = "SELECT * FROM `user_asset` WHERE id = $id ";

     $result2 = mysqli_query($link, $q0);

     while ($row2 = mysqli_fetch_assoc($result2)) {

          $name = $row2['name'];
          $description = $row2['description'];
          $owner = $row2['owner'];
          $type = $row2['type'];
          $file = $row2['file'];
          $thumbnail = $row2['thumbnail'];

          //Approving here

          $q = " INSERT INTO `assests`(`name`, `description`, `file`, `thumbnail`, `owner`, `type`) VALUES ('$name','$description','$file','$thumbnail','$owner','$type') ";

          //firing approve query

          mysqli_query($link, $q);
     }

     $q3 = "UPDATE `user_asset` SET `approve` = '$approve' WHERE `user_asset`.`id` = $id;";

     mysqli_query($link, $q3);

     header('location: ../?link=./controls/user_assets.php');
}
