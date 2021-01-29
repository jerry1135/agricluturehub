<!doctype html>
<html lang="en-US">
<?php
//session_start();
//$uid=$_SESSION['user_id'];
?>

<?php include("header.php")?>
<?php require_once("../../../config/connection.php");?>

<?php
$msg1="";
$msg2="";
$msg3="";
$msg4="";
$msg5="";
$msg6="";
$msg7="";
$msg8="";

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(isset($_POST["user_name"])&& isset($_POST["email"])&& isset($_POST["password"])&& 
		isset($_POST["user_image"])&& isset($_POST["gender"])&& isset($_POST["contact"])&&
		/*isset($_POST["role_id"])&&*/ isset($_POST["area_id"])&& isset($_POST["address"]))

		{ 
								
	   if($_POST["user_name"]=="")
	  {
	     $msg1="Please Enter Name ";
	  }
	  
	  if($_POST["email"]=="")
	  {
	     $msg2="Please Enter email";
	  }
	  if($_POST["password"]=="")
	  {
	     $msg3="Please Enter password ";
	  }
	  
	  if($_POST["gender"]=="")
	  {
	     $msg4="Please Select gender";
	  }
	  if($_POST["contact"]=="")
	  {
	     $msg5="Please Enter Phone Number ";
	  }
	  if($_POST["contact"]!="")
	  {
	    if(preg_match('/^[0-9]{10}+$/', ($_POST["contact"])))
	    {
	    	
	    }
	 	else
	 		$msg5="Please Enter Valid Phone Number";
	  }
	  
	  if($_POST["area_id"]=="")
	  {
	     $msg6="Please Select Area ";
	  }
	  
	  if($_POST["city_id"]=="")
	  {
	     $msg7="Please Select City";
	  }
	  if($_POST["address"]=="")
	  {
	     $msg8="Please Enter Address";
	  }

	
	
								$uname=$_POST["user_name"];
								$email=$_POST["email"];
								$pass=$_POST["password"];
								$uimage=$_POST["user_image"];
								$gen=$_POST["gender"];
								$con=$_POST["contact"];	
								$area_id=$_POST["area_id"];
								$add=$_POST["address"];

												
	/*if (!preg_match("/[6-9]\d{9}$/",$con))
	 {
	 	$msg9="phone number invalid number must be strated with 6,7,8 and 9  and 10 digit required";
	 }*/
				
			
										   
								if($uname!='' &&$email!=''  &&$pass!=''   &&$gen!='' && $con!=''  && $area_id!='' &&$add!='')
								
	{
									
					
			$sql="insert into user
			(user_image,user_name,email,password,gender,contact,role_id,area_id,address)values
			('".$uimage."','".$uname."','".$email."','".$pass."','".$gen."','".$con."',2,'".$area_id."' 
			,'".$add."')";
			//echo $sql;
			//$die;
              
			$result=mysqli_query($conn,$sql);
			echo "result  = " . $result;

 			if($result)

			{
				echo"<meta http-equiv='refresh' content = '0;url=my-account-login.php' />";

			}
		
		else 
		{
			echo "NULL VALUE";
		}
	}
 }

}

?>




							
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
 <script>
 function getcity(val)
 {
     
	 $.ajax({
	   type:"POST",
	   url:"getcity.php",
	   data:'cid='+val,

	   success: function(data){
	     //  alert(data);
	      $("#sublist").html(data);
		  
	    }
	});
 }


  function loadFile(event){
     document.getElementById('output').src=
     URL.createObjectURL(event.target.files[0]);
 };
                       $("#btnfile").click(function(){
                        $("#uploadfile").click();
                        });
   
    function click_the_button(btn){
                                        btn.click();
                                    }
 </script>


	
<!-- Mirrored from tk-themes.net/html-organik/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 06:28:07 GMT -->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" href="images/favicon.ico"/>
		<title>Organik Shop &#8211; Checkout | Organik HTML Template</title>

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
		<div class="noo-spinner">
			<div class="spinner">
				<div class="cube1"></div>
				<div class="cube2"></div>
			</div>
		</div>
		<div id="menu-slideout" class="slideout-menu hidden-md-up">
			<div class="mobile-menu">
				<ul id="mobile-menu" class="menu">
					<li class="dropdown">
						<a href="#">Home</a>
						<i class="sub-menu-toggle fa fa-angle-down"></i>
						<ul class="sub-menu">
							<li><a href="index.html">Organik Main</a></li>
							<li><a href="index-fresh.html">Organik Fresh</a></li>
							<li><a href="index-shop.html">Organik Shop</a></li>
							<li><a href="index-store.html">Organik Store</a></li>
							<li><a href="index-farm.html">Organik Farm</a></li>
							<li><a href="index-house.html">Organik House</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#">Pages</a>
						<i class="sub-menu-toggle fa fa-angle-down"></i>
						<ul class="sub-menu">
							<li class="dropdown">
								<a href="#">About Us</a>
								<i class="sub-menu-toggle fa fa-angle-down"></i>
								<ul class="sub-menu">
									<li><a href="about-us.html">About us 01</a></li>
									<li><a href="about-us-2.html">About us 02</a></li>
								</ul>
							</li>
							<li><a href="gallery-freestyle.html">Gallery Freestyle</a></li>
							<li><a href="gallery-grid.html">Gallery Grid</a></li>
							<li><a href="404.html">404</a></li>
						</ul>
					</li>
					<li>
						<a href="shortcodes.html">Shortcodes</a>
					</li>
					<li class="dropdown">
						<a href="#">Shop</a>
						<i class="sub-menu-toggle fa fa-angle-down"></i>
						<ul class="sub-menu">
							<li><a href="my-account.html">My Account</a></li>
							<li><a href="cart-empty.html">Empty Cart</a></li>
							<li><a href="cart.html">Cart</a></li>
							<li class="active"><a href="checkout.html">Check Out</a></li>
							<li><a href="wishlist.html">Wishlist</a></li>
							<li><a href="shop.html">Shop</a></li>
							<li><a href="shop-list.html">Shop List</a></li>
							<li><a href="shop-detail.html">Single Product</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#">Blog</a>
						<i class="sub-menu-toggle fa fa-angle-down"></i>
						<ul class="sub-menu">
							<li><a href="blog.html">Blog List</a></li>
							<li><a href="blog-classic.html">Blog Classic</a></li>
							<li><a href="blog-masonry.html">Blog Masonry</a></li>
							<li><a href="blog-detail.html">Blog Single</a></li>
						</ul>
					</li>
					<li>
						<a href="contact-us.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
			<div id="main">
				<div class="section section-bg-10 pt-11 pb-17">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h2 class="page-title text-center">My Profile</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="section border-bottom pt-2 pb-2">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<ul class="breadcrumbs">
									
									<li><a href="my-account-login.php">log in</a></li>
									<li>Register</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="section section-checkout pt-7 pb-7">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<h3>Profile picture</h3>
							
									<div class="col-md-6 col-sm-12  ">
									
										
											<button name="2" onclick="click_the_button(files);" style="background-color: white; border-style: hidden; ">
								<form method="POST">

												
                                                 <img id="output"  src="../../../image/admin/Profile-Image.png ?>"  />
		
											<input  type="file" id="files" name="user_image" accept="image/*" onchange="loadFile(event)" value="<?php echo $row['user_image']; ?>"
                                            style="display: none;"/>
                                             </button>
                                           
                               
                                            

                                 
											
								</div>		
						     </div>
				
							<div class="col-md-6">
								<h3>Profile details</h3>
									<div class="row">
										<div class="col-md-12">
											<label>Full name </span></label>

											<div class="form-wrap">
												<input type="text" name="user_name"  size="40" />
												<span style="color: red"><?php echo $msg1;?></span>
												
											</div>
										</div>
										
									</div>
									<br>
									
									


									
                                    <div class="row">
										<div class="col-md-6">
											<label>Phone</label>
											<div class="form-wrap">
												<input type="text" name="contact"  size="40" />
												
												<span style="color: red"><?php echo $msg5; ?></span>
												
											</div>
										</div>
										<div class="col-md-6">
											<label>Email <span ></span></label>
											<div class="form-wrap">
												<input type="email" name="email"   size="40" />
												<span style="color: red"><?php echo $msg2;?></span>
											</div>
										</div>
									</div>
									<br>
									
									<div class="row">
										
                                        <div class="col-md-6">
											<label>Gender <span ></span></label>
											<div class="form-wrap">
                                               <input type="radio" name="gender" value="m" checked>  Male&nbsp;&nbsp;
								               <input type="radio" name="gender" value="f">Female
								              
                                              </div>
                                               <span style="color: red"><?php echo $msg4;?></span>
                                         </div>     
                                              
									</div>
									<br>
									
									<div class="row">
										<div class="col-md-12">
											<label>Address </label>
											<div class="form-wrap">
												<input type="text" name="address"  size="40" />
												<span style="color: red"><?php echo $msg8;?></span>
											</div>
											
										</div>
									</div>
									<br>
									
									<div class="row">
										<div class="col-md-12">
											<label>Postcode / ZIP</label>
											<div class="form-wrap" >
												
												<select name="area_id" onchange="getcity(this.value);" >
													
												
												<?php
								$query="select * from area";
								$re=mysqli_query($conn,$query);
								while($r1=mysqli_fetch_array($re))
								{
								?>
								<option value='<?php echo $r1['area_id'];?>'
								<?php if($r1['area_id']==$r1['area_name'])
								{echo "selected";}?>>
								
								<?php echo $r1['area_pincode'];?>
								</option>
								
								<?php
								}
								?>
							</select>
                            
											</div>
										</div>
									</div>
									<br>
									
									<div class="row">
										<div class="col-md-12">
											<label>Town/City</label>
											<span style="color: red"><?php echo $msg7;?></span>
											<div class="form-wrap">
												<select  name="city_id">
													<option id="sublist">
														
													</option>
						                         </select>
													
													
								
							
						
							
											</div>
										</div>
									</div>
									<br>
									
									
									<div class="row">
										<div class="col-md-12">
											<label>Set password </label>
											<div class="form-wrap">
												<input type="password" name="password"    placeholder="Set password" size="40" />
												<span style="color: red"><?php echo $msg3;?>
											</div>
										</div>
									</div>
									<br>
									
									<div class="row">
										<div class="col-md-12">
									
								<input type="submit" name="insert" >
			    </form>
								</div>
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

<?php include("footer.php") ?>

<!-- Mirrored from tk-themes.net/html-organik/checkout.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 06:28:08 GMT -->
</html>