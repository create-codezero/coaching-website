<div class="pop signin<?php
                         if (!isset($_SESSION['username'])) {
                              if (isset($_SESSION['wrong'])) {
                                   echo ' active';
                              }
                         }
                         ?>">
     <div class="container d-flex justify-center ">

          <div class="form-card">

               <h1>Sign In</h1>

               <?php
               if (isset($_SESSION['wrong'])) {
                    echo '<p style="color:red; margin-bottom:10px;">' . $_SESSION['wrong'] . '</p>';
               }
               ?>

               <form method="post" style="margin: 50px 0;" action="./action/user.php">
                    <input type="hidden" name="login_user" value="set">


                    <label>Username</label>
                    <div class="input">
                         <input type="text" placeholder="Username" name="username" minlength="8" required>
                    </div>

                    <label>Password</label>
                    <div class="input">
                         <input type="password" placeholder="Password" name="password" minlength="8" required>
                    </div>

                    <button class="btn btn-red" onclick="pop(this)" id="signin">
                         <a href="javascript:void(0)">
                              Close
                         </a>
                    </button>
                    <button class="btn btn-primary" name="login_user" type="submit" >
                    <a>
                              Submit
                         </a>
                    </button>

               </form>

          </div>

     </div>
</div>


<div class="pop signup<?php
                         if (!isset($_SESSION['username'])) {
                              if (isset($_SESSION['user_exist'])) {
                                   echo ' active';
                              }
                         }
                         ?>">
     <div class="container d-flex justify-center ">

          <div class="form-card">

               <h1>Sign Up</h1>
               <?php
               if (isset($_SESSION['user_exist'])) {
                    echo '<p style="color:red; margin-bottom:10px;">' . $_SESSION['user_exist'] . '</p>';
               }
               ?>

               <form method="post" action="./action/user.php">
                    <input type="hidden" name="reg_user" value="set">

                    <label>Username</label>
                    <div class="input">
                         <input type="text" placeholder="Username" name="username" minlength="8" required>
                    </div>

                    <label>E-mail</label>
                    <div class="input">
                         <input type="email" placeholder="Email" name="email" required>
                    </div>

                    <label>Password</label>
                    <div class="input">
                         <input type="password" placeholder="Password" name="password_1" minlength="8" required>
                    </div>

                    <label>Re-Password</label>
                    <div class="input">
                         <input type="password" placeholder="Re-type Password" name="password_2" minlength="8" required>
                    </div>

                    <button class="btn btn-red" onclick="pop(this)" id="signup">
                         <a href="javascript:void(0)">
                              Close
                         </a>
                    </button>
                    <button class="btn btn-primary" name="reg_user" type="submit">
                        <a>
                         Submit
                         </a>
                    </button>


               </form>

          </div>

     </div>
</div>