<!doctype html>
<html lang="en-US">

<?php include("header.php")?>



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


/*if(isset($_GET['id']) && isset($_GET['area']))
	{
	$id = $_GET['id'];
	$area=$_GET['area'];*/

$sql=
//"select * from `user` u JOIN `area` a where u.area_id = a.area_id and a.area_id='".$uid."'";
"select * from user where user_id='".$uid."'";
	
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
	//echo $sql; $die;

	//}
	$uimg = $row ['user_image'];
?>
<script src="jquery-3.2.1.min.js" type="text/javascript"></script>
 <script>
 function getcity(val)
 {
     
	 $.ajax({
	   type:"POST",
	   url:"getcity.php",
	      // alert(val);
	   data:'cid='+val,

	   success: function(data){
	       alert(data);
	      $("#sublist").html(data);
		  
	    }
	});
 }
 </script>
 <script type="text/javascript">
    function loadFile(event){
     document.getElementById('output').src=
     URL.createObjectURL(event.target.files[0]);
 };
                       $("#btnfile").click(function(){
                        $("#uploadfile").click();
                        });
                    

                                
 
</script>


<?php
$FNameerr  = $PNoerr = $addresserr = $areaerr = $emailerr = $passerr = "";
$FName  = $PNo = $address = $txtarea = $email = $password = "";
if(isset($_POST['update']))
			{
				if (empty($_POST["FName"]))
				{
					$FNameerr = "<span style='color:red'>*First Name is required</span>";
				}
				else
				{
					$FName = $_POST["FName"];
				}
				
				
				if (empty($_POST["PNo"]))
				{
					$PNoerr = "<span style='color:red'>*PhoneNo is required</span>";
				}
				else
				{
					$PNo = $_POST["PNo"];
				}
				if (empty($_POST["address"]))
				{
					$addresserr = "<span style='color:red'>*Address is required</span>";
				}
				else
				{
					$address = $_POST["address"];
				}
				
				if (empty($_POST["email"]))
				{
					$emailerr = "<span style='color:red'>*Email is required</span>";
				}
				else
				{
					$email = $_POST["email"];
				}
				if (empty($_POST["password"]))
				{
					$passerr = "<span style='color:red'>*Password is required</span>";
				}
				else
				{
					$password = $_POST["password"];
				}
			}
?>


	
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
									<li><a href="index.php">Home</a></li>
									
									<li>Profile</li>
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

												<img id="output"  src="../../../image/admin/<?php echo $row['user_image']; ?>"  />

		
											<input  type="file" id="files" name="user_image" accept="image/*" onchange="loadFile(event)" value="<?php echo $row['user_image']; ?>"
                                            style="display: none;"/>
                                             </button>
                                           <script type="text/javascript">
                                    function click_the_button(btn){
                                        btn.click();
                                    }
                                </script>
                               
                                            

                                 
											<!--<div class="desc-wrap">
												<div class="desc">
													<span class="icon ion-android-search"></span>
													<div class="title"> zoom</div>
													<div class="cates"> profile</div>
												</div>
											</div> 
										</a>-->
									</div>
						     
							</div>

						
						
							<div class="col-md-6">
								<h3>Profile details</h3>
				
									<div class="row">
										<div class="col-md-12">
											<label>Full name <span ><?php echo $FNameerr;?></span></label>
											<div class="form-wrap">
												<input type="text" name="user_name" value="<?php echo $row['user_name'] ?>"  size="40" />
											</div>
										</div>
										
									</div>

                                    <br>
									
                                    <div class="row">
										<div class="col-md-6">
											<label>Phone</label>
											<div class="form-wrap">
												<input type="text" name="contact" value="<?php echo $row['contact'] ?>" size="40" />
											</div>
										</div>
										<div class="col-md-6">
											<label>Email <span ></span></label>
											<div class="form-wrap">
												<input type="email" name="email" value="<?php echo $row['email'] ?>"  size="40" />
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										
                                        <div class="col-md-6">
											<label>Gender <span ></span></label>
											<div class="form-wrap">
                                               <input type="radio" name="gender" value="Male" <?php if($row['gender']=="m"){ echo "checked";}?>>Male&nbsp;&nbsp;
								               <input type="radio" name="gender" value="Female"<?php if($row['gender']=="f"){ echo "checked";}?>>Female
                                              </div>
                                         </div>     
                                              
									</div>
									<br>
									<div class="row">
										<div class="col-md-12">
											<label>Address </label>
											<div class="form-wrap">
												<input type="text" name="address" value="<?php echo $row['address']?>" size="40" />
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-12">
											<label>Postcode / ZIP</label>
											<div class="form-wrap" >
												
												<select name="area_id"  onchange="getcity(this.value);">
												<?php
								$query="select * from area";
								$re=mysqli_query($conn,$query);
								while($r1=mysqli_fetch_array($re))
								{
								?>
								<option  value='<?php echo $r1['city_id']; ?>  '
								<?php if($row['area_id']==$r1['area_id'] )
								{echo "selected";}?> >
								
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
											<div class="form-wrap">
												<select  name='city_id'  >
													<option id="sublist"  >
													 
													</option>
						
							                   </select>
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-md-12">
											<label>Change password </label>
											<div class="form-wrap">
												<input type="password" name="password"  value="<?php echo $row['password']?>"   size="40" />
											</div>
										</div>
									</div>
									
									<br>
									<div class="row">
										<div class="col-md-12">
									
								<input type="submit" value="UPDATE">

								</form>

								</div>
			     								
									</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			</div>
		
			<?php
if ($_SERVER["REQUEST_METHOD"]=="POST")
 {
    if(isset($_POST['user_image']) && isset($_POST['user_name']) && isset($_POST['email']) && isset($_POST['gender']) &&isset($_POST['password']) 
       && isset($_POST['contact']) && isset($_POST['area_id']) && isset($_POST['area_id']));
    {
    	
        $uimg=$_POST['user_image'];
        $uname=$_POST['user_name'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $pass=$_POST['password'];
        $con=$_POST['contact'];
        $aid=$_POST['area_id'];
        
        if( $uname!='' && $email!='' &&$gender!='' && $pass!='' && $con!='' && $aid!='' && $cid!='')
        {
            $sql1 = "update user set user_image='".$uimg."', user_name='".$uname."', email='".$email."', gender='".$gender."' ,
                    password='".$pass."', contact='".$con."', area_id='".$aid."' where user_id='".$uid."'";
                    echo $sql1;
                    $die;
            
            $result1 =mysqli_query($conn,$sql1);
        
            echo "result = " . $result1;
            if($result1)
            {
                echo "<meta http-equiv='refresh' content= '0;url=profile1.php'>";
            }
        }
        else
        {
            echo "NULL VALUES";
        }
    }
}
 
?>

			<?php
						           
						/*if ($_SERVER["REQUEST_METHOD"] == "POST")
						{
							if (isset($_POST["user_name"]) && isset($_POST["gender"]) && isset($_POST["contact"]) && isset($_POST["address"]) && 
							isset($_POST["area_id"]) && isset($_POST["password"]))

							{ 
								$user_name=$_POST["user_name"];
								$gender=$_POST["gender"];
								$phoneno=$_POST["contact"];
								$address=$_POST["address"];
								$area=$_POST["area_id"];	
								$password=$_POST["password"];
 }
 else
 {
 	echo "error 1";
 }
										   
								if($user_name!='' && $gender!='' &&
								$phoneno!='' && $address!='' && $area!='' && $password!='')
								{
									$sql2 = "update user set user_name='".$user_name."',
									gender='".$gender."',contact='".$phoneno."', address='".$address."',password='".$password."' where user_id='".$uid."'";
									
									
									$result2=mysqli_query($conn,$sql2);
									echo $sql2;
									$die;
									
								}
								else
								{
									echo "error 2";
								}
											   
									if($result2)
									{
										echo "<meta http-equiv='refresh' content='3;url=index.php'>";
									}
								
							}
							else
							{
								echo"value not set";
							}	   
						*/
					?>

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