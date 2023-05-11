<?php
session_start();
error_reporting(0);
include('../includes/config.php');
?>

    

<?php $sql = "SELECT * from tbltourpackages where PackageName = 'Indonesia'";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div id="abc">
				<div class="col-md-3 room-left wow fadeInLeft animated " data-wow-delay=".5s">
				<img src="../admin/pacakgeimages/<?php echo htmlentities($result->PackageImage);?>" class="img-responsive" alt="" style="height:20rem;position:absolute;left:30rem">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4 style="position:absolute;left:17rem;top:5rem"><b>Package Name:</b> <?php echo htmlentities($result->PackageName);?></h4>
					<!-- <h6>Package Type : <?php echo htmlentities($result->PackageType);?></h6> -->
                 
					<h4 style="position:absolute;left:16.8rem;top:13rem"><b>Package Location :</b> <?php echo htmlentities($result->PackageLocation);?></h4>
					<!-- <p><b>Features</b> <?php echo htmlentities($result->PackageFetures);?></p> -->
				</div>
				<div class="col-md-5 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h4 style="position:absolute;right:-27rem;top:8rem"><b>INR</b> <?php echo htmlentities($result->PackagePrice);?></h4>
					<!-- <a href="package-details.php?pkgid=<?php echo htmlentities($result->PackageId);?>" class="view">Details</a> -->
				</div>
                
				<div class="clearfix"></div>
			</div>
            

<?php }} ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Travel Hive</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="abc.css" rel="stylesheet">
<link href="../css/font-awesome.css" rel="stylesheet">
<script src="../js/jquery-1.12.0.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<style>
   

    #paypal-payment-button{
        width: 2rem;
        position:absolute;
        bottom:30rem;
        left: 56rem;
    }
    #abc{
        /* background:black; */
        width:100%;
        position:absolute;
        top:15.5rem;}
    .head{
        text-align:auto;
        position: absolute;
        display:flex;
        left:60rem;
        top:3rem;
        }
    
        @media screen and (max-width: 768px) {
            #paypal-payment-button{
         width: 1rem;
        position:absolute;
        align:left;
        }
    }
</style>
</head>
<body>
    <div class="container">
    <h2 class="head"><b>Checkout</b></h2>
    <div id="paypal-payment-button"></div>
    </div>
    <div id="note" style="background-color:white;position:absolute;bottom:15rem;left:46rem">
        <h5><b> Note: </b>Your booking will be confirmed once the payment is confirmed by the admin!</t> </h5>
    </div>
    <img src="../images/t22.gif" style="height:12rem">
    
</div>
<div>
    <img src="../images/t1.png" style="height:80%;position:absolute;right:0rem;top:2rem">
</div>



<script src="https://www.paypal.com/sdk/js?client-id=ATqJoT8uledW83BN2RvdA4o9tptMnGw4EUVlV1na6YHhKgqXEHcJXE8t0EZLGsDr4mybfMJ5nXxL10vQ&disable-funding=credit,card"></script>
<script src="index.js"></script>
</body>
</html>
			
