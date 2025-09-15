<?php

session_start();

require_once "../include/config.php";


if (!isset($_SESSION['adminname'])) {
     header('location:./login.php');
}
define('Admin', TRUE);

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin</title>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <link rel="stylesheet" href="./style/main.css">
     <!-- <link rel="stylesheet" href="../css/style.css"> -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>

<body>
     <div class="side-menu">
          <div class="main-div">
               <h1 style="color:green;"><?php echo $_SESSION['adminname']; ?></h1>
                <br>
                <br>
                <br>
               <h1>Controls</h1>

               <ul>
                    <li><a href="?link=./controls/home.php">Home</a></li>
                    <?php

                    //selecting all development assests
                    $sql = "SELECT * FROM `admin-menu`";

                    //firing query
                    $result = mysqli_query($link, $sql);


                    if (mysqli_num_rows($result) > 0) {
                         while ($row = mysqli_fetch_assoc($result)) {

                    ?>

                              <li><a href="?link=<?php echo $row['link']; ?>"><?php echo $row['name']; ?></a> </li>
                    <?php
                         }
                    } else {
                         echo "You have No Controls";
                    }

                    ?> <li><a href="../action/destroy.php" style="color: red;">Sign out</a></li>
               </ul>
          </div>
     </div>
     <script>
          $(document).ready(function () {
               <?php
               $url = $_GET['link'];
               ?>
               $("#load-here").load('<?php echo $url; ?>');
          });
     </script>
     <div class="container" id="load-here">
     </div>
</body>

</html>