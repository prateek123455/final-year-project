<?php
session_start();
if (isset($_SESSION['hid'])) {
  header("location:bloodrequest.php");
} elseif (isset($_SESSION['rid'])) {
  header("location:sentrequest.php");
} else {
?>
  <!DOCTYPE html>
  <html>
  <?php $title = "Bloodbank | Register"; ?>
  <?php require 'head.php'; ?>

  <body>

    <head>
      <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap');

        .hHeader {
          color: green;
          font-family: 'Ubuntu', sans-serif;
        }
      </style>
    </head>
    <?php include 'header.php'; ?>
    <div class="container cont">

      <?php require 'message.php'; ?>
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-5 col-sm-6 col-xs-7 mb-5">


          <div class="hHeader" style="text-align: center;">
            <h2>Hospital Registration</h2>
          </div>
          <form action="file/hospitalReg.php" method="post" enctype="multipart/form-data">
            <input type="text" name="hname" placeholder="Hospital Name" class="form-control mb-3" required>
            <input type="text" name="hcity" placeholder="Hospital City" class="form-control mb-3" required>
            <input type="tel" name="hphone" placeholder="Hospital Phone Number" class="form-control mb-3" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
            <input type="email" name="hemail" placeholder="Hospital Email" class="form-control mb-3" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            <input type="password" name="hpassword" placeholder="Hospital Password" class="form-control mb-3" required minlength="6">

            <?php require 'map.php' ?>
            <input type="submit" name="hregister" value="Register" class="btn btn-primary btn-block mb-4" style="margin-top: 20px;">
            <div class="text-center"><a href="login.php" title="Click here">Already have account?</a></div>
          </form>



        </div>
      </div>
    </div>


















    <hr style="margin-bottom: 0;">
    <?php require 'footer.php' ?>
  </body>

  </html>
<?php } ?>