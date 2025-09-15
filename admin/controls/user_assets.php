<head>
     <!-- <link rel="stylesheet" href="../css/style.css"> -->
     <style>
          @import '../css/font.css';

          .card-container {
               width: 100%;
               margin-top: 50px;
               padding: 10px;
               height: 520px;
               overflow: auto;
               white-space: nowrap;
               display: grid;
               grid-gap: 0.9em;
               justify-content: center;
               grid-template-columns: repeat(3, auto);
          }

          .card-Team {
               background-color: #ffffff;
               font-family: Poppins-Regular;
               border: none;
               text-align: center;
               padding: 5px;
               border-radius: 2px;
               max-width: 300px;
               box-shadow: 0px 3.5px 7px rgba(231, 231, 231, 0.356);
          }

          .card-Team img {
               border-radius: 2px;
          }

          .card h1,
          p {
               color: #000d55;
          }

          .img-fluid {
               max-width: 100%;
          }

          .btn {
               font-family: Poppins-Regular;
               font-size: 16px;
               border: none;
               margin-top: 20px;
               padding: 10px 20px;
               border-radius: 300px;
          }

          .btn-green {
               background-color: green;
               transition: 1s;
          }

          .btn-red {
               background-color: red;
               transition: 1s;
          }

          @media only screen and (max-width: 950px) {
               .card-container {
                    grid-template-columns: repeat(2, auto);
               }
          }

          @media only screen and (max-width: 550px) {
               .card-container {
                    grid-template-columns: repeat(1, auto);
               }
          }
     </style>
</head>

<body>

     <div class="card-container">
          <?php

          include '../../config/config.php';

          $approve = "no";

          //selecting all development assests
          $q2 = "SELECT * FROM `user_asset` WHERE `approve` = '$approve' ";

          //firing query
          $result2 = mysqli_query($link, $q2);


          if (mysqli_num_rows($result2) > 0) {
               while ($row2 = mysqli_fetch_assoc($result2)) {
          ?>
                    <div class="card-Team">
                         <img src="<?php echo $row2['thumbnail']; ?>" class="img-fluid">
                         <h4 class="fs-20 mt-10 tx-dark-blue"><?php echo $row2['name']; ?></h4>
                         <p class="fs-18 tx-green"> <?php echo $row2['owner']; ?> </p>
                         <p class="fs-18"><?php echo $row2['description']; ?></p>
                         <p class="fs-18"><?php echo $row2['type']; ?></p>
                         <form action="./controls/upload.php" method="post">
                              <input type="hidden" name="id" value="<?php echo $row2['id']; ?>">
                              <button class="btn btn-green mb-10" type="submit" name="approve_asset">Approve</button>
                         </form>
                         <form action="./controls/upload.php" method="post">
                              <input type="hidden" name="id" value="<?php echo $row2['id']; ?>">
                              <button class="btn btn-red mb-10" type="submit" name="canel_asset">Canel</button>
                         </form>
                    </div>
          <?php
               }
          } else {
               echo "There is No Assests Found.";
          }

          ?>
     </div>

</body>