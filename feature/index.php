<?php
session_start();
$type = "";
$_SESSION['title'] = $_GET['type'];
if (!isset($_GET['type'])) {
     header('location: /');
}
$type = $_GET['type'];
require_once "../include/config.php";
if (!isset($_SESSION['username'])) {
     $_SESSION['pathishere'] = "../feature/?type=" . $_GET['type'] . "";
     $_SESSION['notified'] = 0;
     header('location: ../');
}
?>

<?php require_once '../include/_header.php'; ?>

<div class="container">
     <div class="form-card" style="border:none; box-shadow:none; background:none; margin:0;">
          <form action="./" method="get">
               <div class="input" style="display: flex; padding:2px;">
                    <input type="hidden" value="<?php echo $type; ?>" name="type">
                    <input type="text" placeholder="Search Here ..." name="query" required>
                    <button class="btn btn-gray" style="margin: 0; cursor:pointer;" type="submit" tabindex="0"><i class="fa fa-search" aria-hidden="true" style="margin: 0 10px; color: #000055;"></i></button>
               </div>
          </form>
     </div>
</div>

<div class="container">
     <div class="grid">
          <?php

          $sql = "SELECT * FROM `assests` WHERE `type` = '$type'" ?>
          <?php
          if (isset($_GET['query'])) {
               $query = $_GET['query'];
               $sql .= " AND `name` LIKE '%$query%' OR `description` LIKE '%$query%'";
          }
          ?>
          <?php $sql .= " ORDER BY id DESC";

          // echo $sql;

          $result = mysqli_query($link, $sql);


          if (mysqli_num_rows($result) > 0) {
               while ($row = mysqli_fetch_assoc($result)) {
                    $like = "SELECT * FROM `asset_like_dislike` WHERE `asset_id` = '" . $row['id'] . "'";
                    $resultlike = mysqli_query($link, $like);
                    while ($rowss = mysqli_fetch_assoc($resultlike)) {
                         if ($rowss['user_id'] == $_SESSION['id']) {
                              $yes = "liked ";
                              echo '<script>
                                   $(document).ready(function (){
                                   $(".icon'
                                   . $row['id'] . '").addClass("liked");
                                   });
                                   </script>';
                         }
                    }
          ?>
                    <div class="card">
                         <div class="card-img">
                              <img class="img-fluid" src="<?php echo $row['thumbnail']; ?>" alt="Thumnail of This Assets">
                         </div>
                         <div class="card-title">
                              <p class="fs-16"><?php echo $row['name']; ?></p>
                              <p class="fs-10">
                                   <?php echo $row['description']; ?>
                              </p>
                              <a class="fs-10" href="https://www.youtube.com/channel/UCqj5ASTlOZFwMJipHpWpU0g?sub_confirmation=1">
                                   Likhind Group
                              </a>
                         </div>
                         <div class="card-footer">
                              <div style="display: flex;">

                                   <i class="fa fa-thumbs-up like icon<?php echo $row['id']; ?>" onclick="<?php if (isset($_SESSION['id'])) {
                                                                                                                   echo 'like(this)';
                                                                                                              } ?>" id="<?php echo $row['id']; ?>"></i>
                                   <input type="hidden" id="like<?php echo $row['id']; ?>" value="<?php
                                                                                                    echo mysqli_num_rows($resultlike);
                                                                                                    ?>">
                                   <p class="fs-16" style="padding: 15px 0px;" id="likke<?php echo $row['id']; ?>">

                                        <?php
                                        echo mysqli_num_rows($resultlike);
                                        ?>
                                   </p>
                              </div>
                              <button class="download-btn" style="display: flex;" onclick="download(this)" id="<?php echo $row['id']; ?>">
                                   <i class="fa fa-download" style="color: #00ff00; font-size: 17px; margin: 2px 7px;"></i>
                                   <a href="<?php echo $row['file']; ?>" download>
                                        Download
                                   </a>
                                   <p class="fs-16" style="margin: 0 5px; color: #00ff00; font-size: 18px;" id="p<?php echo $row['id']; ?>"> <?php echo $row['download_count']; ?></p>
                              </button>
                              <button class="download-btn" style="display: flex;" onclick="download(this)" id="<?php echo $row['id']; ?>">
                                   <a href="<?php echo $row['file']; ?>" download>
                                        Watch
                                   </a>
                              </button>
                         </div>
                    </div>
          <?php
               }
          } else {
               echo "There is No Assests Found.";
          }

          ?>
     </div>
</div>

<input type="hidden" value="<?php echo $_SESSION['id']; ?>" id="user_id">

<?php
include_once('../include/_user.php');
include_once('../include/_footer.php');
?>