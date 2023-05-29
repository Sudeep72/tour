<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>TH | Gallery </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/gallery.css">
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


	<div class="gallery">
		<h1>Gallery</h1>
		<p>Welcome to our gallery! Below are some of the beautiful places you can visit.</p>
		<div class="gallery-container">
			<div class="gallery-item">
				<img src="images/gallery/tajmahal.jpeg" alt="Image 1" style="border-radius: 10px;">
				<p>Taj Mahal, India</p>
			</div>
			<div class="gallery-item">
				<img src="images/gallery/bavaria.jpeg" alt="Image 2" style="border-radius: 10px;">
				<p>Bavaria, Germany</p>
			</div>
			<div class="gallery-item">
				<img src="images/gallery/coorg.jpeg" alt="Image 3" style="border-radius: 10px;">
				<p>Coorg, India</p>
			</div>
			<div class="gallery-item">
				<img src="images/gallery/egypt.jpeg" alt="Image 4" style="border-radius: 10px;">
				<p>Egypt</p>
			</div>
			<div class="gallery-item">
				<img src="images/gallery/eiffel.jpeg" alt="Image 5" style="border-radius: 10px;">
				<p>Eiffel Tower, France</p>
			</div>
			<div class="gallery-item">
				<img src="images/gallery/indonesia.jpeg" alt="Image 6" style="border-radius: 10px;">
				<p>Indonesia</p>
			</div>
			<div class="gallery-item">
				<img src="images/gallery/kerala.jpeg" alt="Image 7" style="border-radius: 10px;">
				<p>Kerala, India</p>
			</div>
			<div class="gallery-item">
				<img src="images/gallery/kyrgyz.jpeg" alt="Image 8" style="border-radius: 10px;">
				<p>Kyrgyzstan</p>
			</div>
			<div class="gallery-item">
				<img src="images/gallery/manali.jpeg" alt="Image 9" style="border-radius: 10px;">
				<p>Manali, India</p>
			</div>
			<div class="gallery-item">
				<img src="images/gallery/opera.jpeg" alt="Image 10" style="border-radius: 10px;">
				<p>Opera House, Sydney</p>
			</div>
			<div class="gallery-item">
				<img src="images/gallery/philippines.jpeg" alt="Image 11" style="border-radius: 10px;">
				<p>Philippines</p>
			</div>
			<div class="gallery-item">
				<img src="images/gallery/rome.jpeg" alt="Image 12" style="border-radius: 10px;">
				<p>Rome, Italy</p>
			</div>
			<div class="gallery-item">
				<img src="images/gallery/uyuni.jpeg" alt="Image 13" style="border-radius: 10px;">
				<p>Uyuni Salt Flats, Bolivia</p>
			</div>

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