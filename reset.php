<!doctype html>
<html lang="en-US">
	
<!-- Mirrored from tk-themes.net/html-organik/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 06:28:07 GMT -->
<head>
	
      <?php 

      include("header.php")?>

      <?php 
require_once("../../../config/connection.php"); 
$sql="select * from user";
$result1 = mysqli_query($conn,$sql);
$row = Mysqli_fetch_array($result1);


$msg="";
$msg1="";
$msg2="";
$msg3="";
$msg4="";

//session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	 if($_POST["newpassword"]=="")
        {
            $msg1="Please Enter Newpassword";
        }

        if ($_POST["cpassword"]=="")
        {
            $msg2="Please Enter Conform Password";
        }
		if ($_POST["otp"]=="")
        {
            $msg="Please Enter Valid Otp";
        }

 
 $id=$_SESSION['user_id'];
 $otp=$_POST['otp'];
 $npass=$_POST['newpassword'];
 $cpass=$_POST['cpassword'];

if($id!='' && $otp!='' && $npass!='' && $cpass!=''){

 if($npass != $cpass) {
    $msg3= "New Password & Confirm Password Must Be Same..!";
    
 }
 if($otp != $row['otp']){
    $msg4= "OTP Dose Not Match...!";

}
else{
 $query = "update user set otpused =1, password = '".$npass."' where email='".$id."' and otp ='".$otp."'";

 echo $query;

 $result = mysqli_query($conn, $query);
 if($result) {

    echo "<script>
           alert('password sucessfully reset !');
           window.location='my-account-login.php';
           </script>";
    
 }
}
}
}
?>
       
 

<?php
/*$msg="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST["email"]) && isset($_POST["password"]))
		
	{
		$email = $_POST["email"];
		$pwd = $_POST["password"];
		
		if($email!='' && $pwd!='')
		{
			$sql = "select * from user where email = '".$email."'
			and password = '".$pwd."'";
			
			//echo $sql;
			//die;
			
			$result = mysqli_query($conn,$sql);
				
			if(mysqli_num_rows($result)==1)
			{
				$row = mysqli_fetch_array($result);
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['email'] = $row['user_name'];
				
				//header ("Location:index.php");
				echo"<meta http-equiv='refresh' content='0;url=index.php'>";
			}
			else
			{
				$msg = "Invalid email and password";
			}
		}
		else
		{
			echo "NULL VALUE";
		}
	}
}
}

*/ 
?>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" href="images/favicon.ico"/>
		<title>Agricluture Hub &#8211; Reset Password | </title>

		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/ionicons.min.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all"/>
		<link rel='stylesheet' href='css/prettyPhoto.css' type='text/css' media='all'/>
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="css/custom.css" type="text/css" media="all"/>
		<link href="http://fonts.googleapis.com/css?family=Great+Vibes%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet"/>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="menu-slideout" class="slideout-menu hidden-md-up">
			
		</div>
	    <div class="site">
			<div id="main">
				<div class="section section-bg-10 pt-11 pb-17">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h2 class="page-title text-center">My Account</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="section border-bottom pt-2 pb-2">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<ul class="breadcrumbs">
									<li><a href="index.php">Log in</a></li>
									<li><a href="forgot.php">Forgot Password</a></li>
									<li>Reset Password</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="section pt-7 pb-7">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<div class="commerce">
									<h2>Reset Password</h2>
									<form class="commerce-login-form" method="post">
										<div class="row">
											<div class="col-md-12">
												<span style="color: red"><?php echo $msg3;?></span>
												<label>New Password <span class="required">*</span></label>
												<div class="form-wrap">
													<input type="password" name="newpassword" value="" size="40">
													<span style="color: red"><?php echo $msg1;?></span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<label>Confrom Password <span class="required">*</span></label>
												<div class="form-wrap">
													<input type="password" name="cpassword" value="" size="40">
													<span style="color: red"><?php echo $msg2;?></span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<label>OTP <span class="required">*</span></label>
												<div class="form-wrap">
													<input type="text" name="otp" value="" size="40">
													<span style="color: red"><?php echo $msg;?></span>
													<span style="color: red"><?php echo $msg4;?></span>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-wrap">
													<input type="submit" value="Reset">
													 
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<a href="forgot.php">Resend OTP</a>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>

		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery-migrate.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/modernizr-2.7.1.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/jquery.countdown.min.js"></script>
		<script type='text/javascript' src='js/jquery.prettyPhoto.js'></script>
		<script type='text/javascript' src='js/jquery.prettyPhoto.init.min.js'></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
	<?php include("footer.php")?>

<!-- Mirrored from tk-themes.net/html-organik/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 06:28:07 GMT -->
</html>