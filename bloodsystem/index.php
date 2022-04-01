<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | home page"; ?>
<?php require 'head.php'; ?>
<body>
    <div class="susan">
        <img src="image/blood.png">
    </div>
    <?php require 'header.php'; ?>

    <div class="container cont">
    
      <?php require 'message.php'; ?>

        <div class="row justify-content-center">
            
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-xs-6 mb-5" style="width: 60%">
                <div class="card">
                    <img src="image/bg.png" class="card-img-top">
                </div>
            </div>

            <div class="col-lg-9">
            <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center" style="color: darkred;">A+</div>
                    <div class="card-body">
                        If you are A+: You can give blood to A+ and AB+. You can receive blood from A+, A-, O+ and O-
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center" style="color: darkred;">A-</div>
                    <div class="card-body">
                        If you are A-: You can give blood to A-, A+, AB- and AB+. You can receive blood from A- and O-. 
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center" style="color: darkred;">B+</div>
                    <div class="card-body">
                         You can give blood to A+ and AB+. You can receive blood from A+, A-, O+ and O-.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center" style="color: darkred;">B-</div>
                    <div class="card-body">
                        If you are B-: You can give blood to B-, B+, AB+ and AB-, You can receive blood from B- and O-.You can give blood to B+ and AB+.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center" style="color: darkred;">AB+</div>
                    <div class="card-body">
                         People with AB+ blood can receive red blood cells from any blood type. This means that demand for AB+ can donate with AB only.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center" style="color: darkred;">AB-</div>
                    <div class="card-body"> 
                         AB- patients can receive red blood cells from all negative blood types.
                         AB- can give red blood cells to both AB- and AB+ blood types.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center" style="color: darkred;">O+</div>
                    <div class="card-body">
                        Blood O+ can donate to A+, B+, AB+ and O+ Blood
                        Group O can donate red blood cells to anybody. It's the universal donor.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center" style="color: darkred;" style="color: darkred;">O-</div>
                    <div class="card-body">
                        O- can donate to A+, A-, B+, B-, AB+, AB-, O+ and O- Blood
                        People with O negative blood can only receive red cell donations from O negative donors.
                    </div>
                </div>
            </div>
            
            </div>
            </div>

        </div>
        
    </div>
    

        <!-- <div class="row">
            <div class="col-lg-6 rounded mb-5">

            </div>
            <div class="col-lg-6 rounded mb-5">
                 </div>
        </div> -->

        <div class="container" id="sus">
				<div class="row">
    				<div class="col">
    					<div class="card">
                            <div class="card-header text-center text-danger">
     						Our Vission
                            </div>
                            <div class="card-body">
								<img src="image/binoculars.png" alt="Responsive image" class="img-fluid rounded mx-auto d-block" width="168" height="168">
								<p class="text-center" style="padding-top: 1em;">
									To enhance the well being of patients in our service area by assuring a reliable and economical supply of the safest possible blood, by providing innovative hemotherapy services, and by promoting research and education programs in transfusion medicine.
								</p>
                            </div>
						</div>
    				</div>
    				
    				<div class="col">
    					<div class="card">
                            <div class="card-header text-center text-danger">
     						Our Goal
                            </div>
                            <div class="card-body">
								<img src="image/target.png" alt="Responsive image" class="img-fluid rounded mx-auto d-block" width="168" height="168">
								<p class="text-center" style="padding-top: 1em;">
									To enhance the well being of patients in our service area by assuring a reliable and economical supply of the safest possible blood, by providing innovative hemotherapy services, and by promoting research and education programs in transfusion medicine.
								</p>
                            </div>
						</div>
    				</div>
    			
    				<div class="col">
    					<div class="card">
                            <div class="card-header text-center text-danger">
     						Our Mission
                            </div>
                            <div class="card-body">
								<img src="image/goal.png" alt="Responsive image" class="img-fluid rounded mx-auto d-block" width="168" height="168">
								<p class="text-center" style="padding-top: 1em;">
									To enhance the well being of patients in our service area by assuring a reliable and economical supply of the safest possible blood, by providing innovative hemotherapy services, and by promoting research and education programs in transfusion medicine.
								</p>
                            </div>
						</div>
    				</div>
 			</div>
 		</div>
    </div>
    <?php 
    require 'footer.php';
    ?>

</body>

   
    
</html>