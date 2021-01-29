<!doctype html>
<html lang="en-US">
<?php

	 include("header.php")?>
      <?php
      if($_SESSION['user_id'])
{
 //$msg = " user already login"; 
}
else 
{
 echo "<meta http-equiv='refresh' content='0;url=my-account-login.php'>";
}

     
require_once("../../../config/connection.php");

       
      ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script	type="text/javascript">
$( document ).ready(function() {
		<?php 
										$oid=$_GET['oid'];
											
											if($uid!='' & $oid!='')
											{
                                   $sql1 = "UPDATE `order` SET `payment`='paypal1' WHERE order_id='".$oid."' ";
                                   $result1=mysqli_query($conn,$sql1);
											
                                             }

?>
});
</script>

	
<!-- Mirrored from tk-themes.net/html-organik/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 06:28:08 GMT -->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" href="images/favicon.ico"/>
		<title>Agricluture Hub &#8211; Order | </title>

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
		
		<div class="site">
			
			<div id="main">
				<div class="section section-bg-10 pt-11 pb-17">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h2 class="page-title text-center">Order</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="section border-bottom pt-2 pb-2">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<ul class="breadcrumbs">
									<li><a href="index.php">Home</a></li>
									
									<li>My Order</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="section pt-7 pb-7">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="wishlist-wrap">
									
										
											
											

<center>
                                    
                                   <h2><font color="green" > Payment Process Successfully Done.</font></h2>
                                           

                                               <br><br><br>
										<a class="organik-btn green" href="http://localhost/agricluturehub/client/tk-themes.net/html-organik/order.php">Return Back To My Order</a>
								
 </center>      								
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

<!-- Mirrored from tk-themes.net/html-organik/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 06:28:08 GMT -->
</html>