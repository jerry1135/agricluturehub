<?php
$id=$_SESSION['U_ID'];


//getting id of the data from url
/*
	if(isset($_GET['id']) && isset($_GET['area']))
	{
	$id = $_GET['id'];
	$area=$_GET['area'];
*/	
	//select the row from table
	$sql="select * from user where U_ID='".$id."'";
	
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);

	//	}
?>
<?php
$FNameerr = $LNameerr = $PNoerr = $addresserr = $areaerr = $emailerr = $passerr = "";
$FName = $LName = $PNo = $address = $txtarea = $email = $password = "";
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
				if(empty($_POST["LName"]))
				{
					$LNameerr ="<span style='color:red'>*Last Name is required</span>";
				}
				else
				{
					$LName = $_POST["LName"];
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
	<!-- banner-2 -->
	<div class="page-head_agile_info_w3l">

	</div>
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Home</a>
						<i>|</i>
					</li>
					<li>Profile Setting</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<!-- contact page -->
	<div class="contact-w3l">
		<div class="container">
			<!-- tittle heading -->
			<h3 class="tittle-w3l">Profile Setting
				<span class="heading-style">
					<i></i>
					<i></i>
					<i></i>
				</span>
			</h3>
			<!-- //tittle heading -->
			<div class="">
                <div class="col-md-2" >
                    <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
							<?php
							 if($row['GENDER']=="Female")
								{
							?>
                                <img src="images/user1.png" alt="Urban Grocery - Profile Image" />
								<?php }
								else if($row['GENDER']=="Male")
								{?>
							<img src="images/user2.png" alt="Urban Grocery - Profile Image" height='25%' width='100%'/>
								<?php }?>
							</div><br/>
                            <div class="content-area">
                                <h3><?php echo $row['F_NAME']." ".$row['L_NAME']?></h3>  
                            </div>
                        </div>                        
                    </div>
				</div>
            </div>
			<!-- profile -->
			<div class="contact agileinfo-ads-display col-md-9">			
				<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-body modal-body-sub_agile">
						<form method="post"><br/>
							<div class="styled-input agile-styled-input-top">
							<b>First Name</b>
							&nbsp;&nbsp;<span class="error"> <?php echo $FNameerr;?></span>
								<input type="text" value="<?php echo $row['F_NAME']?>" name="FName">
							</div>
							<div class="styled-input">
							<b>Last Name</b>
							&nbsp;&nbsp;
							<span class="error"> <?php echo $LNameerr;?></span>
								<input type="text" value="<?php echo $row['L_NAME']?>" name="LName">
							</div><br/>
							<div class="styled-input">
							<b>Date of Birth</b> &nbsp;
								<input type="date" value="<?php echo $row['DOB']?>" name="dob">
							
							</div><br/><br/>
							<div class="styled-input">
							<b>Gender</b>&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="radio" name="gender" value="Male"  <?php if($row['GENDER']=="Male"){ echo "checked";}?>>Male&nbsp;&nbsp;
								<input type="radio" name="gender" value="Female" <?php if($row['GENDER']=="Female"){ echo "checked";}?>>Female
								
							</div><br/>
							<div class="styled-input">
							<b>Phone No</b>
							&nbsp;&nbsp;
							<span class="error"> <?php echo $PNoerr;?></span>
								<input type="text" value="<?php echo $row['PHONE_NO']?>" name="PNo">
							</div>
							<div class="styled-input">
							<b>Address</b>
							&nbsp;&nbsp;
							<span class="error"> <?php echo $addresserr;?></span>
								<input type="text" value="<?php echo $row['ADDRESS']?>" name="address">
							</div>
							<div class="styled-input">
                            <b>Area </b> <br/><br/>
							<select name="txtarea"  class="form-control">
							<?php
								$query="select * from area";
								$re=mysqli_query($conn,$query);
								while($r1=mysqli_fetch_array($re))
								{
								?>
								<option value='<?php echo $r1['AREA_ID'];?>'
								<?php if($row['AREA_ID']==$r1['AREA_ID'])
								{echo "selected";}?>>
								
								<?php echo $r1['AREA_NAME'];?>
								</option>
								
								<?php
								}
								?>
                              </select>								
							</div><br/>
							
							<div class="styled-input">
							<b>Email</b>
							&nbsp;&nbsp;
							<span class="error"> <?php echo $emailerr;?></span>
								<input type="email" value="<?php echo $row['EMAIL']?>" name="email">
							</div>
							<div class="styled-input">
							<b>Password</b>
							&nbsp;&nbsp;
							<span class="error"> <?php echo $passerr;?></span>
								<input type="password" value="<?php echo $row['PASSWORD']?>" name="password" id="password1">
							</div>
							
							<input type="submit" name="update" value="UPDATE">	
						</form>
					</div>
					<?php
						           
						if ($_SERVER["REQUEST_METHOD"] =="POST")
						{
							if (isset($_POST["FName"]) && isset($_POST["LName"]) && isset($_POST["dob"]) && isset($_POST["gender"]) && isset($_POST["PNo"]) && isset($_POST["address"]) && 
							isset($_POST["txtarea"]) && isset($_POST["password"]))
							{ 
								$firstname=$_POST["FName"];
								$lastname=$_POST["LName"];
								$dob=$_POST["dob"];
								$gender=$_POST["gender"];
								$phoneno=$_POST["PNo"];
								$address=$_POST["address"];
								$area=$_POST["txtarea"];	
								$password=$_POST["password"];
										   
								if($firstname!='' && $lastname!='' && $dob!='' && $gender!='' &&
								$phoneno!='' && $address!='' && $area!='' && $password!='')
								{
									$sql2 = "update user set F_NAME='".$firstname."',L_NAME='".$lastname."', DOB='".$dob."',
									GENDER='".$gender."',PHONE_NO='".$phoneno."', ADDRESS='".$address."',
									AREA_ID='".$area."',PASSWORD='".$password."' where U_ID='".$id."'";
									
									$result2=mysqli_query($conn,$sql2);
											   
									if($result2)
									{
										echo "<meta http-equiv='refresh' content='3;url=profile.php'>";
									}
								}
							}
							else
							{
								echo"value not set";
							}	   
						}
					?>
			</div>
		</div>
	</div>
			<!-- //profile -->
		</div>
 	</div>
	
	  