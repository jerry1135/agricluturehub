<!doctype html>
<html lang="en-US">
	
<!-- Mirrored from tk-themes.net/html-organik/shop-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 06:28:16 GMT -->
<head>
	<?php 
//session_start();

      include("header.php")?>

      <?php  
         require_once("../../../config/connection.php");
         if(isset($_GET['id']))
         {
          $sid=$_GET['id'];

          $sql = "select * from `servicepackage`  where  s_package_id='".$sid."'";
          $result = mysqli_query($conn,$sql);
          $row = Mysqli_fetch_array($result);


         }

      ?>
      <?php
				$feedback = "SELECT count(*) as total_feedback FROM `feedback` WHERE s_package_id='".$sid."'"
;
               $result3 = mysqli_query($conn,$feedback);
               $row3 = mysqli_fetch_array($result3);
               $feedback_count = $row3['total_feedback'];

               $sql4 ="select * from `feedback` f JOIN `servicepackage` s JOIN `user` u where f.s_package_id=s.s_package_id and f.user_id=u.user_id and s.s_package_id='".$sid."'";

               // "select * from `feedback` f JOIN `product` p JOIN `user` u where f.product_id=p.product_id and f.user_id=u.user_id='".$uid."' and p.product_id='".$id."'";
               
               
             // echo $sql4;
              // $die;
               $result4 = mysqli_query($conn,$sql4);

				?>
				
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" href="images/favicon.ico"/>
		<title>Agricluture Hub &#8211; Service package Detail |</title>

		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/ionicons.min.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all"/>
		<link rel='stylesheet' href='css/prettyPhoto.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='css/slick.css' type='text/css' media='all'/>
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
							<li><a href="checkout.html">Check Out</a></li>
							<li><a href="wishlist.html">Wishlist</a></li>
							<li><a href="shop.html">Shop</a></li>
							<li><a href="shop-list.html">Shop List</a></li>
							<li class="active"><a href="servicepackage-details.php?id=$id">Single Product</a></li>
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
		<div class="site">
			<div id="main">
				<div class="section section-bg-10 pt-11 pb-17">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h2 class="page-title text-center">Servicepackage Detail</h2>
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
									<li><a href="servicepackage.php">Service</a></li>
									<li>Service Detail</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="section pt-7 pb-7">
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-md-push-3">
								<div class="single-product">
									<div class="col-md-6">
										<div class="image-gallery">
											<div class="image-gallery-inner">
												<div>
													<div class="image-thumb">
														<a href="../../../image/servicepackageimages/<?php echo $row['s_package_image'];?>" data-rel="prettyPhoto[gallery]">
															<img src="../../../image/servicepackageimages/<?php echo $row['s_package_image'];?>" alt="" />
														</a>
													</div>
												</div>
												<div>
													<div class="image-thumb">
														<a href="../../../image/servicepackageimages/<?php echo $row['s_package_image'];?>" data-rel="prettyPhoto[gallery]">
															<img src="../../../image/servicepackageimages/<?php echo $row['s_package_image'];?>" alt="" />
														</a>
													</div>
												</div>
												<div>
													<div class="image-thumb">
														<a href="../../../image/servicepackageimages/<?php echo $row['s_package_image'];?>" data-rel="prettyPhoto[gallery]">
															<img src="../../../image/servicepackageimages/<?php echo $row['s_package_image'];?>" alt="" />
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="image-gallery-nav">
											<div class="image-nav-item">
												<div class="image-thumb">
													<img src="../../../image/product/<?php echo $row['s_package_image'];?>" alt="" />
												</div>
											</div>
											<div class="image-nav-item">
												<div class="image-thumb">
													<img src="../../../image/servicepackageimages/<?php echo $row['s_package_image'];?>" alt="" />
												</div>
											</div>
											<div class="image-nav-item">
												<div class="image-thumb">
													<img src="../../../image/servicepackageimages/<?php echo $row['s_package_image'];?>" alt="" />
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="summary">
											<h1 class="product-title"><?php echo $row['s_package_name'] ?>
												
											</h1>
											<div class="product-rating">
												<div class="star-rating">
													<span style="width:100%"></span>
												</div>
												<i>(<?php echo $feedback_count; ?> customer reviews)</i>
											</div>
											<div class="product-price">
												<del>&#8377; <?php echo  $row['s_package_price'] ?> </del>
												<ins>&#8377; <?php echo  $row['s_package_price'] ?></ins>
											</div>
											
							<?php
							$msg="";
							if(isset($_POST["submit1"])) {
                                 if($_SERVER["REQUEST_METHOD"]=="POST")
                                 { 
                                 	
                                   $date=$_POST['appointment_date'];
                                   $price=$row['s_package_price'];
                               
                                   
                                   if($_POST["appointment_date"]==""){

                                   	 $msg= "Please Select Appointment Date ";
                                 	
                                   }
                                   else{
                                      echo"<meta http-equiv='refresh'content='0;url=booking.php?id=$sid&adate=$date&price=$price'>";
                                }
                               } 
                               } 
							?>
							<?php
								$d = date("Y-m-d");
								$your_date = strtotime("3 day", strtotime($d));
								$new_date = date("Y-m-d", $your_date);
								
							?>
											<form class="cart"  method="POST">

                                                 <h5>BOOK DATE  FOR SERVICE :-</h5>
                                                 
												<input type="date" min="<?php echo $new_date;?>"  name="appointment_date" size="60"/>
												<span style="color: red"><?php echo $msg;?></span>

												<br>
												<br>


												
												<button type="submit"  name="submit1" class="single-add-to-cart">BOOK APPOINTMENT</button>
											</form>
											<!-- <div class="product-tool">
												<a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist"> Browse Wishlist </a>
												<a class="compare" href="#" data-toggle="tooltip" data-placement="top" title="Add to compare"> Compare </a>
											</div>
 -->											<div class="product-meta">
												<table>
													<tbody>
														
														<tr>
															<td class="label">Share</td>
															<td class="share">
																<a target="_blank" href="#"><i class="fa fa-facebook"></i></a> 
																<a target="_blank" href="#"><i class="fa fa-twitter"></i></a> 
																<a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="col-md-12">
										<div class="commerce-tabs tabs classic">
											<ul class="nav nav-tabs tabs">
												<li class="active">
													<a data-toggle="tab" href="#tab-description" aria-expanded="true">Description</a>
												</li>
												<li class="">
													<a data-toggle="tab" href="#tab-reviews" aria-expanded="false">Reviews</a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane fade active in my_class" id="tab-description">
													<p>
														<?php echo nl2br($row['s_package_desc']) ?>
													</p>
												</div>
												<script>
                                        $readMoreJS.init({
                                         target: '.my_class p',
                                         numOfWords: 60,
                                         toggle: true,
                                         moreLink: 'View more..',
                                         lessLink: 'View less..'
                                        });
                                    </script>

												
												<div id="tab-reviews" class="tab-pane fade">
													<div class="single-comments-list mt-0">
														<div class="mb-2">
															<h2 class="comment-title"> <?php echo $feedback_count;?> reviews for <?php echo $row['s_package_name']?></h2>
														</div>
							<?php
										while ($row=mysqli_fetch_array($result4)) {
									    $id = $row['feedback_id'];
									    $id = $row['user_id'];
							                                             

	                         ?>
														<ul class="comment-list">
															<li>
																<div class="comment-container">
																	<div class="comment-author-vcard">
																		<img alt="" src="images/avatar/avatar.png" />
																	</div>
																	<div class="comment-author-info">
																		<span class="comment-author-name"><?php echo $row['user_name']?></span>
																		<a href="#" class="comment-date"><?php echo $row['f_date']?></a>
																		<p>
																		<?php echo $row['f_description']?></p>
																	</div>
																	<div class="reply">
																		<a class="comment-reply-link" href="#">Reply</a>
																	</div>
																</div>
																
															</li>
															
														</ul>
					    <?php 
                           }
					     ?>
													</div>
							<?php
$msg1="";
							if(isset($_POST["submit2"])){
							
if ($_SERVER["REQUEST_METHOD"]=="POST")
 {
    if (isset($_POST["f_description"]) )
    {
       if($_POST["f_description"]=="")
	  {
	     $msg1="Please Enter your massage ";
	  }
		$desc=$_POST["f_description"];
		$d = date("y-m-d");
       
        
         if($desc!=''  )
        {
       	//$uid = $row4['user_id'];

            $sql2 = "insert into feedback (f_date,f_description,user_id,s_package_id)values('".$d."','".$desc."','".$uid."','".$sid."' )";
           // echo $sql2;
            //$die;

            $result2 = mysqli_query($conn,$sql2);
             
           // echo "result2 = " . $result2;
            if($result2)
            {
                echo "<meta http-equiv='refresh' content='0; url=servicepackage-details.php?id=$id'>";
            }
        }
        else
        {
          //  echo "NULL VALUE";
        }
    
    }
  }
}

							
?>
						
													<div class="single-comment-form mt-0">
														<div class="mb-2">
															<h2 class="comment-title">LEAVE A REPLY</h2>
														</div>
														<form class="comment-form" method="POST">
															<div class="row">
																<div class="col-md-12">
																	<textarea id="comment" 
																	name="f_description" cols="45" rows="5" placeholder="Message *"></textarea>
																</div>
																<span style="color: red"><?php echo $msg1;?></span>
															</div>
															
															<div class="row">
																<div class="col-md-2">
																	<input  type="submit" name="submit2" id="submit" class="btn btn-alt btn-border" value="Submit">
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
							<div class="col-md-3 col-md-pull-9">
								<div class="sidebar">
									<div class="widget widget-product-search">
										<!-- <form class="form-search">
											<input type="text" class="search-field" placeholder="Search products…" value="" name="s" />
											<input type="submit" value="Search" />
										</form> -->
									</div>
									
								<form method="POST">
									<div class="widget widget-products">
										<h3 class="widget-title">Services</h3>
										<ul class="product-list-widget">
											

											<?php
											
                                    $service = "select * from `servicepackage`";

                                   $re = mysqli_query($conn,$service);
								while ($r=mysqli_fetch_array($re)) {
									# code...
								 $id = $r ['s_package_id'];
								 

							
								?>
											<li>
												<a href="servicepackage-details.php?id=<?php echo $id ?>">
													<img src="../../../image/servicepackageimages/<?php echo $r['s_package_image'];?>" alt="" />
													<span class="product-title"><?php echo $r['s_package_name']; ?></span>
												</a>
												<del>&#8377;<?php echo $r['discount']; ?></del>
												<ins>&#8377;<?php echo $r['s_package_price']; ?></ins>
											</li>
											<?php
                                          }
											?>

										</ul>
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
		<script type='text/javascript' src='js/slick.min.js'></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
<?php include("footer.php")?>
<!-- Mirrored from tk-themes.net/html-organik/shop-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 06:28:44 GMT -->
</html>