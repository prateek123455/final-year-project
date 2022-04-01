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
        <head>
            <style>
                @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap');
                 .rHeader{
                color: green;
                font-family: 'Ubuntu', sans-serif;
            }

            </style>
           
        </head>
    <?php $title = "Bloodbank | Register"; ?>
    <?php require 'head.php'; ?>

    <body >
        <?php include 'header.php'; ?>
        <div class="container cont">

            <?php require 'message.php'; ?>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-5 col-sm-6 col-xs-7 mb-5">


                    <div class="rHeader" style="text-align: center;">
                        <h2>Reciever Registration</h2>
                    </div>
                    <form class="myForm" action="file/receiverReg.php" method="post" >
                        <input type="text" name="rname" placeholder="Receiver Name" class="form-control mb-3" required>
                        <select name="rbg" class="form-control mb-3" required>
                            <option disabled="" selected="">Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                        <input type="text" name="rcity" placeholder="Receiver City" class="form-control mb-3" required>
                        <input type="tel" name="rphone" placeholder="Receiver Phone Number" class="form-control mb-3" required pattern="^\d{10}$" title="ContactNo. must have 10 digit">
                        <input type="email" name="remail" placeholder="Receiver Email" class="form-control mb-3" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                        <input type="password" name="rpassword" placeholder="Receiver Password" class="form-control mb-3" required minlength="6">
                        <!-- <input type="hidden" name="latitude"  value="">
                        <input type="hidden" name="longitude" value=""> -->

                        <input type="submit" name="rregister" value="Register" class="btn btn-primary btn-block mb-4" style="margin-top: 20px;">
                        <div class="text-center"><a href="login.php" title="Click here">Already have account?</a></div>

                    </form>
                    
                   

                </div>
            </div>
        </div>
        <!-- <script type="text/javascript">
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition,showError);

        }
    }

    function showPosition(position){
        document.querySelector('.myForm input[name = "latitude"]').value = position.coords.latitude;
        document.querySelector('.myForm input[name = "longitude"]').value = position.coords.longitude;

    }

    function showError(error){
        switch(error.code){
            case error.PERMISSION_DENIED:
            alert("You must allow the request for Geolocation To fill out the form");
            location.reload();
            break;
        }

    }
</script> -->
     
        <hr style="margin-bottom: 0;">
        <?php require 'footer.php' ?>
    </body>

    </html>
<?php } ?>