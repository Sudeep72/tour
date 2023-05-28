<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TH | Testimonial </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/testimonials.css">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<?php include('includes/header.php');?>

<div class="testimonials">
		<h1>Testimonials</h1>
		<p>Read what our customers have to say about their experiences with us!</p>

		<div class="testimonial">
			<img src="images/testimonials/i6.png" alt="Avatar">
			<p>"I had an amazing time on my tour with this company! The guide was knowledgeable and friendly, and the sights were breathtaking. I would highly recommend this tour to anyone looking to explore this beautiful region."</p>
			<p class="customer-name">- Charlotte</p>
		</div>

		<div class="testimonial">
			<img src="images/testimonials/i4.jpg" alt="Avatar">
			<p>"I had a wonderful experience on my tour with this company! The itinerary was well-planned and allowed us to see all the top sights in the area. The guide was also very helpful in recommending local restaurants and activities. I would definitely book with them again."</p>
			<p class="customer-name">- Eden</p>
		</div>

		<div class="testimonial">
			<img src="images/testimonials/i5.png" alt="Avatar">
			<p>"This was my first time booking a tour with a company, and I couldn't be happier with my experience. The guide was engaging and informative, and the tour itself was well-organized and exceeded my expectations. I can't wait to book my next tour with this company!"</p>
			<p class="customer-name">- Sarah Johnson</p>
		</div>
	</div>

<!--- /contact ---->
<?php include('includes/footer.php');?>
<!-- sign -->
<?php include('includes/signup.php');?>	
<!-- signin -->
<?php include('includes/signin.php');?>	
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>	
<!-- //write us -->
</body>
</html>