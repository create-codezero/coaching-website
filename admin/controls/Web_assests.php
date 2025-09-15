<style>
     @import '../../css/font.css';

     .login-box {
          height: max-content;
          width: 450px;
          box-shadow: 5px 5px 10px rgba(53, 65, 243, 0.37);
          max-width: 600px;
          border: none;
          border-radius: 10px;
          background-color: #fff;
     }

     .card {
          width: 100%;
     }

     .top-header {
          height: max-content;
          background-color: #0011ff;
          text-align: center;
          border-top-left-radius: 10px;
          border-top-right-radius: 10px;
     }

     .top-header h1 {
          font-family: Rubik-Bold;
          font-size: 40px;
          color: #fff;
     }

     .card-main {
          height: max-content;
          text-align: left;
          padding-left: 10px;
          padding-right: 10px;
     }

     .holder {
          height: max-content;
     }

     .holder label {
          font-family: Poppins-Regular;
          font-size: 20px;
          color: #808080;
          margin-left: 5px;
     }

     .holder .input {
          border: 2px solid #808080;
          display: flex;
          justify-content: center;
          align-items: center;
          border-radius: 300px;
          padding-left: 5px;
     }

     .holder .input input {
          width: 90%;
          font-size: 18px;
          background: none;
          height: 35px;
          color: #000;
          font-family: Poppins-Regular;
          border: none;
          padding-left: 5px;
          outline: none;
     }

     .holder .input input:hover {
          outline: none;
     }

     .card-btn {
          text-align: center;
     }

     .btn {
          padding: 10px 30px;
          border: none;
          border-radius: 300px;
          text-decoration: none;
          font-size: 18px;
          font-family: Poppins-Regular;
     }

     .btn-primary {
          background-color: #0011ff;
          color: #fff;
          box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.37);
     }

     .btn-primary:hover {
          background-color: #1a29ff;
     }

     .btn-black {
          background-color: #000;
          color: #fff;
          box-shadow: 2px 5px 10px rgba(37, 37, 37, 0.37);
     }

     .btn-black:hover {
          background-color: #0d0d0d;
     }

     .btn-orange {
          color: #fff;
          background-color: #ffa500;
          box-shadow: 2px 5px 10px rgba(238, 176, 41, 0.37);
     }

     .btn-orange:hover {
          background-color: #ffae1a;
     }

     .btn-yellow {
          color: #fff;
          background-color: #ffff00;
          box-shadow: 2px 5px 10px rgba(224, 212, 44, 0.37);
     }

     .btn-yellow:hover {
          background-color: #ffff1a;
     }

     .text-align-center {
          text-align: center;
          width: 100%;
     }

     .mb-10 {
          margin-bottom: 10px;
     }

     .mb-20 {
          margin-bottom: 20px;
     }

     .none {
          display: none;
     }

     p a {
          font-size: 15px;
     }

     @media (max-width: 500px) {
          .login-box {
               width: 90%;
          }
     }
</style>
<div class="content">
     <div class="div-mini">
          <div class="login-box">
               <form action="./controls/upload.php" method="post" enctype="multipart/form-data">
                    <div class="card">
                         <div class="top-header mb-20">
                              <h1>Web Assests</h1>
                         </div>
                         <div class="card-main mb-20">
                              <div class="holder mb-10">
                                   <label for="username">Name</label>
                                   <div class="input">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <input type="text" name="name_project" id="name" placeholder="Name">
                                   </div>
                              </div>
                              <div class="holder mb-10">
                                   <label for="username">Description</label>
                                   <div class="input">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <input type="text" name="description_project" id="description" placeholder="Description">
                                   </div>
                              </div>
                              <div class="holder mb-10">
                                   <label for="username">Publiser</label>
                                   <div class="input">
                                        <i class="fas fa-lock" aria-hidden="true"></i>
                                        <input type="text" name="owner_project" id="Publiser" placeholder="Publiser">
                                   </div>
                              </div>
                              <div class="holder mb-10">
                                   <label for="username">Assests</label>
                                   <div class="input">
                                        <i class="fas fa-lock" aria-hidden="true"></i>
                                        <input type="file" name="file" id="assests" placeholder="Assests">
                                   </div>
                              </div>
                              <div class="holder mb-10">
                                   <label for="username">Thumbnail</label>
                                   <div class="input">
                                        <i class="fas fa-lock" aria-hidden="true"></i>
                                        <input type="file" name="thumbnail" id="thumbnail" placeholder="Thumbnail">
                                   </div>
                              </div>
                         </div>
                         <div class="card-btn mb-20">
                              <button class="btn btn-primary mb-20" name="web_submit" type="submit">Upload</button>
                         </div>
                    </div>
               </form>
          </div>
     </div>
</div>