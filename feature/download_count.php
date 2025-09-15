<?php
include '../include/config.php';
$id = $_POST['asset_id'];
$current_down = 0;

if (!empty($id)) {
     $q15 = "SELECT * FROM `assests` WHERE id = $id";
     $fire = mysqli_query($link, $q15);
     while ($row_q15 = mysqli_fetch_assoc($fire)) {
          $q15_id = $row_q15['download_count'];
          $current_down = $q15_id + 1;
          $q15 = "update `assests` set download_count=$current_down where id = $id";
          $fire_q15 = mysqli_query($link, $q15);
     }
}

echo $current_down;
