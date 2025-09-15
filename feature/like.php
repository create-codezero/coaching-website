<?php
session_start();
require_once '../include/config.php';
if (isset($_POST['asset_id']) && !empty($_POST['user_id'])) {
     $asset_id = $_POST['asset_id'];
     $user_id = $_POST['user_id'];
     $check = "SELECT * FROM `asset_like_dislike` WHERE `user_id` = '$user_id' AND `asset_id` = '$asset_id'";
     $check_fire = mysqli_query($link, $check);
     if (mysqli_num_rows($check_fire) > 0) {
          $sql = "DELETE FROM `asset_like_dislike` WHERE `user_id` = '$user_id' AND `asset_id` = '$asset_id'";
          $fire = mysqli_query($link, $sql);
     } else {
          $sql = "INSERT INTO `asset_like_dislike`(`user_id`, `asset_id`) VALUES ('$user_id','$asset_id')";
          $fire = mysqli_query($link, $sql);
     }

     $count = "SELECT * FROM `asset_like_dislike` WHERE `asset_id` = '$asset_id'";
     $count_fire = mysqli_query($link, $count);
     echo mysqli_num_rows($count_fire);
}
