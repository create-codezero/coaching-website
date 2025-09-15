<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Log In / Sign Up</title>
     <link rel="stylesheet" href="./style/login.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>

     <div class="container">
          <div class="login-container">
               <div class="login-box active animated zoomIn">
                    <form action="" method="post">
                         <div class="card">
                              <div class="top-header mb-20">
                                   <h1>Log In</h1>
                              </div>
                              <div class="card-main mb-20">
                                   <div class="holder mb-10">
                                        <label for="username">Username</label>
                                        <div class="input">
                                             <i class="fa fa-user" aria-hidden="true"></i>
                                             <input type="text" name="username" id="username" placeholder="username">
                                        </div>
                                   </div>
                                   <div class="holder mb-10">
                                        <label for="username">Password</label>
                                        <div class="input">
                                             <i class="fas fa-lock" aria-hidden="true"></i>
                                             <input type="password" name="password" id="password" placeholder="password">
                                        </div>
                                   </div>
                              </div>
                              <div class="card-btn mb-20">
                                   <button class="btn btn-primary" name="login_btn">Log In</button>
                              </div>
                         </div>
                    </form>
               </div>
          </div>
     </div>

</body>

</html>

<?php
if (isset($_POST['login_btn'])) {

     session_start();
     require_once "../include/config.php";

     $username = $_POST['username'];
     $password = $_POST['password'];

     $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
     $results = mysqli_query($link, $query);

     if (mysqli_num_rows($results) == 1) {
          $_SESSION['adminname'] = $username;
          header('location: ./index.php?link=./controls/home.php');
     } else {
?>
          <script>
               alert("You Are Not A Admin");
          </script>
<?php
     }
}
?>