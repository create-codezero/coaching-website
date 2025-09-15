<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="style/header_css.css">
     <link rel="stylesheet" href="style/common_css.css">
     <link rel="stylesheet" href="style/form_css.css">
     <link rel="stylesheet" href="style/index_css.css">
     <link rel="stylesheet" href="style/footer_css.css">
     <link rel="stylesheet" href="style/privacypolicy_css.css">
     <link rel="icon" href="img/logo.png">
     <link rel="stylesheet" href="style/feature_css.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
     <title><?php echo $_SESSION['title']; ?></title>
     <script src="js/jquery.min.js"></script>
     <script src="js/common.js"></script>
</head>

<body>
     <nav>
          <div class="nav-logo">
               <a href="/">
                    <img src="img/logo.png" alt="Logo">
               </a>
          </div>
          <div class="toggle">
               <i class="fas fa-angle-down" onclick="menu()"></i>
          </div>
          <div class="nav-menu">

               <ul>
                    <li><a href="/"> <i class="fa fa-home"></i> Home</a></li>
                    <li><a href="/#feature"> <i class="fas fa-briefcase"></i> Services</a></li>
                    <li><a href="/#contactus"> <i class="fa fa-phone"></i> Contact Us</a></li>
                    <?php
                    if (isset($_SESSION['username'])) {
                         echo '<li><a href="/action/destroy.php"> <i class="fa fa-user"></i> Sing Out </a></li>';
                    } else {
                         echo '<li onclick="pop(this)" id="signup"><a href="javascript:void(0)"> <i class="fa fa-user" style="color: orange;"></i> Sing Up</a></li>
                    <li onclick="pop(this)" id="signin"><a href="javascript:void(0)"> <i class="fa fa-user"></i> Sing In</a></li>';
                    }
                    ?>
               </ul>
          </div>
          <div class="clear-fix"></div>
     </nav>