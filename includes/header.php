<?php if($_SESSION['login'])
{?>
<div class="top-header" style="background-color:#f6dca8;">
	<div class="container" >
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm" style="color:black;"><a href="page1.php"><i class="fa fa-home" style="color:#333333;"></i></a></li>
			<li class="prnt"><a href="profile.php" style="color:#333333;">My Profile</a></li>
				<li class="prnt"><a href="change-password.php" style="color:#333333;">Change Password</a></li>
			<li class="prnt"><a href="tour-history.php" style="color:#333333;">My Tour History</a></li>
			<li class="prnt"><a href="issuetickets.php" style="color:#333333;">Issue Tickets</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol" style="color:#333333;">Welcome :</li>				
			<li class="sig" style="color:#333333;"><?php echo htmlentities($_SESSION['login']);?></li> 
			<li class="sigi"><a href="logout.php" style="color:#333333;">/ Logout</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div><?php } else {?>
<div class="top-header" style="background-color:#f6dca8;">
	<div class="container">
		<ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
			<li class="hm"><a href="index.php"><i class="fa fa-home" style="color:#333333;"></i></a></li>
				<li class="hm"><a href="adminsig.php" style="color:#333333;">Admin Login</a></li>
		</ul>
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 
			<li class="tol" style="color:#333333;">Toll Number : +91-6380656451</li>				
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" style="color:#333333;">Sign Up</a></li> 
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4"  style="color:#333333;">/ Sign In</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div>
<?php }?>
<!--- /top-header ---->
<!--- header ---->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/style.css" rel="stylesheet">
	<style>

	</style>
</head>
<div class="header" style="background-color:#FDF2E9;">
	<div class="container">
		<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
			<a href="index.php"><span style="color:#333333;">Travel Hive <br>
			<h4>Creating Memories, One Trip At A Time!</h4></span></a>	
		</div>
	
		<div class="lock fadeInDown animated" data-wow-delay=".5s"> 
			<li><i class="fa fa-shield fa-3xl"></i></li>
            <li><div class="securetxt" style="color:#333333;">SAFE &amp; SECURE </div></li>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s" style="background-color:#fcdbc1">
	<div class="container" >
	<div class="navigation">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1" style="background-color:#fcdbc1">
					<nav class="cl-effect-1">
						<ul class="nav navbar-nav">
							<li><a href="page1.php" style="transition: all 0.3s ease-in-out;color:#333333;">Home</a></li>
							<li><a href="page.php?type=aboutus" style="transition: all 0.3s ease-in-out;color:#333333;">About</a></li>
								<li><a href="package-list.php" style="transition: all 0.3s ease-in-out;color:#333333;">Tour Packages</a></li>
								<li><a href="gallery.php" style="transition: all 0.3s ease-in-out;color:#333333;">Gallery</a></li>
								<li><a href="testimonials.php" style="transition: all 0.3s ease-in-out;color:#333333;">Testimonial</a></li>
								<li><a href="page.php?type=privacy" style="transition: all 0.3s ease-in-out;color:#333333;">Privacy Policy</a></li>
								<li><a href="page.php?type=terms" style="transition: all 0.3s ease-in-out;color:#333333;">Terms of Use</a></li>
								<li><a href="page.php?type=contact" style="transition: all 0.3s ease-in-out;color:#333333;">Contact Us</a></li>
								<?php if($_SESSION['login'])
{?>
								<li style="color:#333333;">Need Help? / <a href="#" data-toggle="modal" data-target="#myModal3" style="color:#333333;">Write Us </a>  </li>
								<?php } else { ?>
								<li><a href="enquiry.php"> Enquiry </a>  </li>
								<?php } ?>
								<div class="clearfix"></div>

						</ul>
					</nav>
				</div><!-- /.navbar-collapse -->	
			</nav>
		</div>
		
		<div class="clearfix"></div>
	</div>
</div>