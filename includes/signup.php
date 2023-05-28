<?php
error_reporting(0);
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$mnumber=$_POST['mobilenumber'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql="INSERT INTO  tblusers(FullName,MobileNumber,EmailId,Password) VALUES(:fname,:mnumber,:email,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mnumber',$mnumber,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['msg']="Registered Successfully.";
header('location:thankyou.php');
}
else 
{
$_SESSION['msg']="Something went wrong. Please try again.";
header('location:thankyou.php');
}
}
?>

<!--Javascript for check email availabilty-->
<script>
function checkAvailability() {

$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#email").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
<script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 3000);
    </script>
	<style>
  
  .slider{
    width: 270px;
    height: 300px;
    border-radius: 10px;
    overflow: hidden;
  }
  
  .slides{
    width: 500%;
    height: 500px;
    display: flex;
  }
  
  .slides input{
    display: none;
  }
  
  .slide{
    width: 20%;
    transition: 2s;
  }
  
  .slide img{
    width: 270px;
    height: 300px;
  }
  
  /*css for manual slide navigation*/
  
  .navigation-manual{
    position: absolute;
    width: 270px;
    margin-top: -40px;
    display: flex;
    justify-content: center;
  }
  
  .manual-btn{
    border: 2px solid #40D3DC;
    padding: 0px;
    border-radius: 10px;
    cursor: pointer;
    transition: 1s;
  }
  
  .manual-btn:not(:last-child){
    margin-right: 40px;
  }
  
  .manual-btn:hover{
    background: #40D3DC;
  }
  
  #radio1:checked ~ .first{
    margin-left: 0;
  }
  
  #radio2:checked ~ .first{
    margin-left: -20%;
  }
  
  #radio3:checked ~ .first{
    margin-left: -40%;
  }
  
  #radio4:checked ~ .first{
    margin-left: -60%;
  }
  
  /*css for automatic navigation*/
  
  .navigation-auto{
    position: absolute;
    display: flex;
    width: 800px;
    justify-content: center;
    margin-top: 460px;
  }
  
  .navigation-auto div{
    border: 2px solid #40D3DC;
    padding: 5px;
    border-radius: 10px;
    transition: 1s;
  }
  
	</style>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
								<div class="modal-body modal-spa">
									<div class="login-grids">
										<div class="login">
											<div class="login-left">
												
													<div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="images/s1.png" alt="">
        </div>
        <div class="slide">
          <img src="images/s2.jfif" alt="">
        </div>
        <div class="slide">
          <img src="images/s3.jfif" alt="">
        </div>
        <div class="slide">
          <img src="images/s4.jfif" alt="">
        </div>
     
		</div>
    		</div>
        <p style="font-size:large;color:black"><b>Helping people make memories!</b></p>
													
												
											</div>
											<div class="login-right">
												<form name="signup" method="post">
													<h3 style="color:#333333;">Create your account </h3>
					

				<input type="text" value="" placeholder="Full Name" name="fname" autocomplete="off" required="">
				<input type="text" value="" placeholder="Mobile number" minlength="10" maxlength="10" name="mobilenumber" autocomplete="off" required="">
		<input type="text" value="" placeholder="Email id" name="email" id="email" onBlur="checkAvailability()" autocomplete="off"  required="">	
		 <span id="user-availability-status" style="font-size:12px;"></span> 
	<input type="password" value="" placeholder="Password" name="password" required="">	
													<input type="submit" name="submit" id="submit" value="CREATE ACCOUNT" style="color:#333333;">
													<p><input type="checkbox" id="myCheck" name="test" required style="color:#333333;"> By logging in you agree to our <a href="page.php?type=terms" style="color:#333333;">Terms and Conditions</a> and <a href="page.php?type=privacy" style="color:#333333;">Privacy Policy</a></input></p>
												</form>
											</div>
												<div class="clearfix"></div>								
										</div>											
									</div>
								</div>
							</section>
					</div>
				</div>
			</div>