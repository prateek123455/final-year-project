<?php
session_start();
require 'file/connection.php';
if (isset($_GET['search'])) {
    $searchKey = $_GET['search'];
    $latitude= $_GET['latitude'];
    $longitude= $_GET['longitude'];
    //echo ("latitude:$latitude, Longitude:$longitude");

    
    //$sql = "select bloodinfo.*, hospitals.* from bloodinfo, hospitals where bloodinfo.hid=hospitals.id && bg LIKE '$searchKey%'";

    
    // $sql = "SELECT id, hname, hcity, ( 3959 * acos( cos( radians($latitude) ) * cos( radians( hlatitude ) ) 
    // * cos( radians( hlongitude ) - radians($longitude) ) + sin( radians($latitude) ) * sin(radians(hlatitude)) ) ) AS distance 
    // FROM hospitals 
    // HAVING distance < 25 
    // ORDER BY distance ;";
   //$sql = "select bloodinfo.*, hospitals.* from bloodinfo, hospitals where bloodinfo.hid=hospitals.id && bg LIKE '$searchKey%'";
   $sql="select bloodinfo.*, hospitals.*, 3959 * 2 * ASIN(SQRT(POWER(SIN(($latitude - abs(hlatitude)) * pi()/180 / 2), 2)
   + COS($latitude * pi()/180 ) * COS(abs(hlatitude) * pi()/180)
   * POWER(SIN(($longitude - hlongitude) * pi()/180 / 2), 2) ))  AS distance
    from hospitals LEFT JOIN bloodinfo ON bloodinfo.hid = hospitals.id WHERE bg = '$searchKey' ORDER BY distance
    ";


} else {
    $sql = "select bloodinfo.*, hospitals.* from bloodinfo, hospitals where bloodinfo.hid=hospitals.id";
}
// if (mysqli_multi_query($conn,$sql) ){
//     do{
//         if($result = MYSQLI_STORE_RESULT($conn)){
//             while($row = mysqli_fetch_row($result){
//                 printf("%s\n", $row[0]);
//             })
//         }
//     }

// }
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<?php $title = "Bloodbank | Available Blood Samples"; ?>
<?php require 'head.php'; ?>

<body onload = "getLocation();">
    <?php require 'header.php'; ?>
    <div class="container cont">

        <?php require 'message.php'; ?>

        <div class="row col-lg-8 col-md-8 col-sm-12 mb-3">
            <form  class="myForm" method="get" action="" style="margin-top:-20px; ">
                <label class="font-weight-bolder">Select Blood Group:</label>
                <select name="search" class="form-control">
                    <option><?php echo @$_GET['search']; ?></option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select><br>
                <input type="hidden" name="latitude"  value="">
                <input type="hidden" name="longitude" value="">
                <a href="abs.php" class="btn btn-info mr-4">Reset</a>
                <input type="submit" name="submit" class="btn btn-info" value="search">
            </form>
        </div>

        <table class="table table-responsive table-striped rounded mb-5">
            <tr>
                <th colspan="8" class="title">Available Blood Samples</th>
            </tr>
            <tr>
                <th>#</th>
                <th>Hospital Name</th>
                <th>Hospital City</th>
                <th>Hospital Email</th>
                <th>Hospital Phone</th>
                <th>Blood Group</th>
                <th>Action</th>

            </tr>

            <div>
                <?php
                if ($result) {
                    $row = mysqli_num_rows($result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                    } else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">Nothing to show.</b>';
                }
                ?>
            </div>

            <?php

            while ($row = mysqli_fetch_array($result)) { ?>

                <tr>
                    <td><?php echo ++$counter; ?></td>
                    <td><?php echo $row['hname']; ?></td>
                    <td><?php echo ($row['hcity']); ?></td>
                    <td><?php echo ($row['hemail']); ?></td>
                    <td><?php echo ($row['hphone']); ?></td>
                    <td><?php echo ($row['bg']); ?></td>
                    


                    <?php $bid = $row['bid']; ?>
                    <?php $hid = $row['hid']; ?>
                    <?php $bg = $row['bg']; ?>
                    <form action="file/request.php" method="post">
                        <input type="hidden" name="bid" value="<?php echo $bid; ?>">
                        <input type="hidden" name="hid" value="<?php echo $hid; ?>">
                        <input type="hidden" name="bg" value="<?php echo $bg; ?>">

                        <?php if (isset($_SESSION['hid'])) { ?>
                            <td><a href="javascript:void(0);" class="btn btn-info hospital">Request Sample</a></td>
                        <?php } else {
                            (isset($_SESSION['rid']))  ?>
                            <td><input type="submit" name="request" class="btn btn-info" value="Request Sample"></td>
                        <?php } ?>

                    </form>
                </tr>

            <?php } ?>
        </table>
    </div>
    <?php require 'footer.php' ?>
</body>

<script type="text/javascript">
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
    $('.hospital').on('click', function() {
        alert("Hospital user can't request for blood.");
    });
</script>