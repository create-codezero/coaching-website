<?php
session_start();
$_SESSION['title'] = "Likhind Group -- The Smart Choice For Your Future ...";
include_once('./include/_header.php');

if (isset($_SESSION['pathishere']) && $_SESSION['notified'] == 0) {
     echo '<script>
     alert("Sign In First");
     </script>';
     $_SESSION['notified'] = 1;
}
?>
<div class="page">
     <div class="container d-flex landing">
          <div class="left-container">
               <div class="box">
                    <h1 class="heading"> <span style="color: blue;"> | </span> Likhind Group</h1>
                    <p class="para">The Smart Choice For Your Future . </p>
                    <?php
                    if (!isset($_SESSION['username'])) {
                         echo '
                         <button class="btn btn-primary" onclick="pop(this)" id="signin">
                         <a href="javascript:void(0)">
                              Sing In
                         </a>
                         </button>
                         <button class=" btn btn-orange" onclick="pop(this)" id="signup">
                              <a href="javascript:void(0)">
                                   Sign Up
                              </a>
                         </button>
                         ';
                    } else {
                         echo '
                         <button class=" btn btn-primary" id="explore">
                              <a href="#feature">
                                   Explore
                              </a>
                         </button>
                         <button class=" btn btn-orange" id="contactusbtn">
                              <a href="#contactus">
                                   Contact Us
                              </a>
                         </button>
                         ';
                    }
                    ?>

               </div>
          </div>
          <div class=" right-container">
               <img src="./img/landing_img.jpg" alt="landing IMG">
          </div>
     </div>
     <div id="feature">
          <h1 class="tx-center heading">Our Services</h1>

          <div class="container d-flex justify-center ">
               <div class="card-container">
                    <div class="card">
                         <h1> Maths </h1>
                         <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, illum eius,
                              harum voluptates unde velit labore fugiat at quia distinctio inventore culpa .</p>

                         <button class="btn btn-primary" id="Android Development">
                              <a href="<?php
                                        if (isset($_SESSION['username'])) {
                                             echo './feature?type=Android+Development';
                                        } else {
                                             echo 'javascript:void(0)';
                                        }
                                        ?>" onclick="<?php
                                                       if (isset($_SESSION['username'])) {
                                                            echo '';
                                                       } else {
                                                            echo 'signinfirst()';
                                                       }
                                                       ?>">
                                   Let's Go
                              </a>
                         </button>
                    </div>
                    <div class="card">
                         <h1> Science </h1>
                         <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, illum eius,
                              harum voluptates unde velit labore fugiat at quia distinctio inventore culpa .</p>
                         <button class="btn btn-primary" id="Web Development" onclick="<?php
                                                                                          if (isset($_SESSION['username'])) {
                                                                                               echo '';
                                                                                          } else {
                                                                                               echo 'signinfirst()';
                                                                                          }
                                                                                          ?>">
                              <a href="<?php
                                        if (isset($_SESSION['username'])) {
                                             echo './feature?type=Web+Development';
                                        } else {
                                             echo 'javascript:void(0)';
                                        }
                                        ?>">
                                   Let's Go
                              </a>
                         </button>
                    </div>
                    <div class="card">
                         <h1>Other Subjects</h1>
                         <p class="para">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, illum eius,
                              harum voluptates unde velit labore fugiat at quia distinctio inventore culpa .</p>
                         <button class="btn btn-primary" onclick="<?php
                                                                      if (isset($_SESSION['username'])) {
                                                                           echo '';
                                                                      } else {
                                                                           echo 'signinfirst()';
                                                                      }
                                                                      ?>">
                              <a href="<?php
                                        if (isset($_SESSION['username'])) {
                                             echo './source';
                                        } else {
                                             echo 'javascript:void(0)';
                                        }
                                        ?>">
                                   Let's Go
                              </a>
                         </button>
                    </div>
               </div>
          </div>
     </div>
     <div id="contactus">
          <h1 class="tx-center heading">Contact Us</h1>
          <div class="container d-flex justify-center ">

               <div class="form-card">

                    <h1>Contact Us Form</h1>
                    <p style="color:green;">
                         <?php
                         if (isset($_SESSION['sended'])) {
                              echo $_SESSION['sended'];
                         }
                         ?>
                    </p>

                    <form method="post" action="./action/contactus.php">

                         <label>Username</label>
                         <div class="input">
                              <input type="text" placeholder="Your Name" name="name" required>
                         </div>

                         <label>E-mail</label>
                         <div class="input">
                              <input type="text" placeholder="Your Email" name="email" required>
                         </div>

                         <label>Subject</label>
                         <div class="input">
                              <input type="text" placeholder="Subject" name="subject" required>
                         </div>

                         <label>Message</label>
                         <div class="textarea">
                              <textarea type="text" placeholder="Message ..." rows="5" name="message" required></textarea>
                         </div>

                         <button class="btn btn-primary" type="submit" style="margin-top: 20px;">
                              <a>
                                   Submit
                              </a>
                         </button>

                    </form>

               </div>

          </div>
     </div>
</div>
<?php
include_once('./include/_user.php');
include_once('./include/_footer.php');
?>