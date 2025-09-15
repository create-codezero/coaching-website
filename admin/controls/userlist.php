<?php

// define('Admin', TRUE);

// if (!defined('Admin')) {
//      exit('YOU ARE NOT VALID');
// }

?>
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
                         <th>Username</th>
                         <th>Email</th>
                         <th>Date</th>
                         <th>Edit</th>
                         <th>Delete</th>
                    </tr>
               </thead>
               <tbody>
                    <?php

                    include '../../config/config.php';

                    $q = "SELECT * FROM `users`";

                    $result = mysqli_query($link, $q);

                    while ($rows = mysqli_fetch_assoc($result)) {
                    ?>
                         <tr>
                              <td><?php echo $rows['id']; ?></td>
                              <td><?php echo $rows['username']; ?></td>
                              <td><?php echo $rows['email']; ?></td>
                              <td><?php echo $rows['date']; ?></td>
                              <td>
                                   <form action="../user/edit_user.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $rows['id']; ?>"><button class="btn btn-orange" name="edit_user">Edit</button>
                                   </form>
                              </td>
                              <td>
                                   <form action="./controls/upload.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $rows['id']; ?>"><button class="btn btn-danger" name="delete_user">Delete</button>
                                   </form>
                              </td>
                         </tr>

                    <?php
                    }
                    ?>
               </tbody>
          </table>
     </div>

</body>

</html>