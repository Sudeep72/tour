<?php
session_start();
error_reporting(0);
include('../includes/config.php');
$trd=$_SESSION["trd"];
?>

    

<?php $sql = "SELECT * from tbltourpackages where packagename = '$trd'";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div id="abc" style="display:none">
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
            

<?php 
}} ?>

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
<script>
		setTimeout(function() {
			// hide the first div
			document.getElementById("div1").style.display = "none";
			// show the second div
			document.getElementById("div2").style.display = "block";
            document.getElementById("abc").style.display = "block";
		}, 3000);
	</script> 
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
<div id="div1">

<style>
    #preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #fff;
        z-index: 9999;
        background: #222222;
    }

    #loader {
        display: block;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 100px;
        height: 100px;
        border-radius: 50%;
        border: 8px solid #3498db;
        border-top-color: #fff;
        animation: spin 1s ease-in-out infinite;
    }


    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }


    .chromeframe {
        margin: 0.2em 0;
        background: #ccc;
        color: #000;
        padding: 0.2em 0;
    }


    p {
        line-height: 1.33em;
        color: #7E7E7E;
    }

    h1 {
        color: #EEEEEE;
    }

    #loader-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 1000;
    }

    #loader {
        display: block;
        position: relative;
        left: 50%;
        top: 50%;
        width: 150px;
        height: 150px;
        margin: -75px 0 0 -75px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #3498db;

        -webkit-animation: spin 2s linear infinite;
        /* Chrome, Opera 15+, Safari 5+ */
        animation: spin 2s linear infinite;
        /* Chrome, Firefox 16+, IE 10+, Opera */

        z-index: 1001;
    }

    #loader:before {
        content: "";
        position: absolute;
        top: 5px;
        left: 5px;
        right: 5px;
        bottom: 5px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #e74c3c;

        -webkit-animation: spin 3s linear infinite;
        /* Chrome, Opera 15+, Safari 5+ */
        animation: spin 3s linear infinite;
        /* Chrome, Firefox 16+, IE 10+, Opera */
    }

    #loader:after {
        content: "";
        position: absolute;
        top: 15px;
        left: 15px;
        right: 15px;
        bottom: 15px;
        border-radius: 50%;
        border: 3px solid transparent;
        border-top-color: #f9c922;

        -webkit-animation: spin 1.5s linear infinite;
        /* Chrome, Opera 15+, Safari 5+ */
        animation: spin 1.5s linear infinite;
        /* Chrome, Firefox 16+, IE 10+, Opera */
    }

    @-webkit-keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
            /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(0deg);
            /* IE 9 */
            transform: rotate(0deg);
            /* Firefox 16+, IE 10+, Opera */
        }

        100% {
            -webkit-transform: rotate(360deg);
            /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(360deg);
            /* IE 9 */
            transform: rotate(360deg);
            /* Firefox 16+, IE 10+, Opera */
        }
    }

    @keyframes spin {
        0% {
            -webkit-transform: rotate(0deg);
            /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(0deg);
            /* IE 9 */
            transform: rotate(0deg);
            /* Firefox 16+, IE 10+, Opera */
        }

        100% {
            -webkit-transform: rotate(360deg);
            /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: rotate(360deg);
            /* IE 9 */
            transform: rotate(360deg);
            /* Firefox 16+, IE 10+, Opera */
        }
    }

    #loader-wrapper .loader-section {
        position: fixed;
        top: 0;
        width: 51%;
        height: 100%;
        background: #222222;
        z-index: 1000;
        -webkit-transform: translateX(0);
        /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: translateX(0);
        /* IE 9 */
        transform: translateX(0);
        /* Firefox 16+, IE 10+, Opera */
    }

    #loader-wrapper .loader-section.section-left {
        left: 0;
    }

    #loader-wrapper .loader-section.section-right {
        right: 0;
    }

    /* Loaded */
    .loaded #loader-wrapper .loader-section.section-left {
        -webkit-transform: translateX(-100%);
        /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: translateX(-100%);
        /* IE 9 */
        transform: translateX(-100%);
        /* Firefox 16+, IE 10+, Opera */

        -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
        transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
    }

    .loaded #loader-wrapper .loader-section.section-right {
        -webkit-transform: translateX(100%);
        /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: translateX(100%);
        /* IE 9 */
        transform: translateX(100%);
        /* Firefox 16+, IE 10+, Opera */

        -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
        transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
    }

    .loaded #loader {
        opacity: 0;
        -webkit-transition: all 0.3s ease-out;
        transition: all 0.3s ease-out;
    }

    .loaded #loader-wrapper {
        visibility: hidden;

        -webkit-transform: translateY(-100%);
        /* Chrome, Opera 15+, Safari 3.1+ */
        -ms-transform: translateY(-100%);
        /* IE 9 */
        transform: translateY(-100%);
        /* Firefox 16+, IE 10+, Opera */

        -webkit-transition: all 0.3s 1s ease-out;
        transition: all 0.3s 1s ease-out;
    }

    /* JavaScript Turned Off */
    .no-js #loader-wrapper {
        display: none;
    }

    .no-js h1 {
        color: #222222;
    }

    #content {
        margin: 0 auto;
        padding-bottom: 50px;
        width: 80%;
        max-width: 978px;
    }


    .ir {
        background-color: transparent;
        border: 0;
        overflow: hidden;
        /* IE 6/7 fallback */
        *text-indent: -9999px;
    }

    .ir:before {
        content: "";
        display: block;
        width: 0;
        height: 150%;
    }



    .hidden {
        display: none !important;
        visibility: hidden;
    }



    .visuallyhidden {
        border: 0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }



    .visuallyhidden.focusable:active,
    .visuallyhidden.focusable:focus {
        clip: auto;
        height: auto;
        margin: 0;
        overflow: visible;
        position: static;
        width: auto;
    }


    .invisible {
        visibility: hidden;
    }



    .clearfix:before,
    .clearfix:after {
        content: " ";
        /* 1 */
        display: table;
        /* 2 */
    }

    .clearfix:after {
        clear: both;
    }


    .clearfix {
        *zoom: 1;
    }

    @media only screen and (min-width: 35em) {}

    @media print,
    (-o-min-device-pixel-ratio: 5/4),
    (-webkit-min-device-pixel-ratio: 1.25),
    (min-resolution: 120dpi) {}

    @media print {
        * {
            background: transparent !important;
            color: #000 !important;
            box-shadow: none !important;
            text-shadow: none !important;
        }

        a,
        a:visited {
            text-decoration: underline;
        }

        a[href]:after {
            content: " (" attr(href) ")";
        }

        abbr[title]:after {
            content: " (" attr(title) ")";
        }



        .ir a:after,
        a[href^="javascript:"]:after,
        a[href^="#"]:after {
            content: "";
        }

        pre,
        blockquote {
            border: 1px solid #999;
            page-break-inside: avoid;
        }

        thead {
            display: table-header-group;
        }

        tr,
        img {
            page-break-inside: avoid;
        }

        img {
            max-width: 100% !important;
        }

        @page {
            margin: 0.5cm;
        }

        p,
        h2,
        h3 {
            orphans: 3;
            widows: 3;
        }

        h2,
        h3 {
            page-break-after: avoid;
        }
    }
</style>


    <!-- Preloader -->
    <div id="preloader">
        <div id="loader"></div>
    </div>




</div>

    <div id="div2" class="container" style="display:none">
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
			
