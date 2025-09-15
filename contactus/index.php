<?php 
$_SESSION['title']= "Contact Us -- Code2hack";
include_once('../include/_header.php');?>
<div id="contactus">
          <h1 class="tx-center heading">Contact Us</h1>
          <div class="container d-flex justify-center ">

               <div class="form-card">

                    <h1>Contact Us Form</h1>
<p style="color:green;">
                    <?php
                    if(isset($_SESSION['sended'])){
                        echo $_SESSION['sended'];
                    }
                    ?>
                    </p>

                    <form method="post" action="/action/contactus.php">

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
<?php include_once('../include/_footer.php');?>