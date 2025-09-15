<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./style/userlist.css">
</head>

<body>

     <div class="table-container">
          <table>
               <thead>
                    <tr>
                         <th>Id</th>
                         <th>Email</th>
                         <th>time</th>
                    </tr>
               </thead>
               <tbody>
                    <?php

                    include '../../config/config.php';

                    $q = "SELECT * FROM `subscribed`";

                    $result = mysqli_query($link, $q);

                    while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
                         <tr>
                              <td><?php echo $rows['id']; ?></td>
                              <td><?php echo $rows['email']; ?></td>
                              <td><?php echo $rows['time']; ?></td>
                         </tr>

                    <?php
                    }
                    ?>
               </tbody>
          </table>
     </div>

</body>

</html>