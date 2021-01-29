<!doctype html>
<html lang="en-US">
	 
<!-- Mirrored from tk-themes.net/html-organik/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 06:28:08 GMT -->
<head>

	 <?php 
     // session_start();
      include("header.php")
      ?>
     
	  <?php
	  require_once("../../../config/connection.php");
	 // $sql="select * from product";
	  if(isset($_GET['id']))
	  {
	  	$sid=$_GET['id'];
	  	$sql = "select * from `servicepackage`  where  s_package_id='".$sid."'";
	  	

	  }
	  else
	  {
	  $sql = "select * from `servicepackage`";
      }


	  	if($_SERVER["REQUEST_METHOD"]=="POST")
             {
             	$start=$_POST['min_price'];
             	$end=$_POST['max_price'];

             	$sql="select * from `servicepackage`  where  s_package_id='".$sid."' and s_package_price between $start and $end";

             	//echo $sql;
             	//$die;
             	} 
            


	  $result = mysqli_query($conn,$sql);


      ?>
      
      

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" href="images/favicon.ico"/>
		<title>Organik Shop &#8211; Shop | Organik HTML Template</title>

		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/ionicons.min.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all"/>
		<link rel='stylesheet' href='css/prettyPhoto.css' type='text/css' media='all'/>
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
		<link rel="stylesheet"
		 href="css/custom.css" type="text/css" media="all"/>
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
							<li class="active"><a href="shop.html">Shop</a></li>
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
								<h2 class="page-title text-center">Service Packages</h2>
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
									<!-- <li><a href="#">Service List</a></li> -->
									<li>Service Package Grid</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="section pt-7 pb-7">
					<div class="container">
						<div class="row">
							<div class="col-md-9 col-md-push-3">
								<div class="shop-filter">
									<div class="col-md-6">
										<!-- <p class="result-count"> Showing 1–12 of 23 results</p> -->
									</div>
									<div class="col-md-6">
										<div class="shop-filter-right">
											<div class="switch-view">
												<a href="servicepackage-list.php" class="switcher" data-toggle="tooltip" data-placement="top" title="" data-original-title="List"><i class="ion-navicon"></i></a> 
												<a href="servicepackage.php" class="switcher active" data-toggle="tooltip" data-placement="top" title="" data-original-title="Grid"><i class="ion-grid"></i></a>
											</div>
											<!-- <form class="commerce-ordering">
												<select name="orderby" class="orderby">
													<option value="">Sort by popularity</option>
													<option value="">Sort by average rating</option>
													<option value="" selected="selected">Sort by newness</option>
													<option value="">Sort by price: low to high</option>
													<option value="">Sort by price: high to low</option>
												</select>
											</form> -->
										</div>
									</div>
								</div>
								<div class="category-carousel-2 mb-3" data-auto-play="true" data-desktop="3" data-laptop="3" data-tablet="2" data-mobile="1">
									<?php 
									$sql5="select * from `servicepackage`";
								    $result5=mysqli_query($conn,$sql5);


									while ($row5=mysqli_fetch_array($result5)) 
								{
									$id = $row5['s_package_id'];
								?>	
									
									 
									<div class="cat-item">
										<div class="cats-wrap" data-bg-color="#f8c9c2">
											<a href="servicepackage-details.php?id=<?php  echo    $id ?>">
												<img src="../../../image/servicepackageimages/<?php echo $row5['s_package_image'];?>"alt="" />
												<h2 class="category-title"><?php echo $row5['s_package_name'];?> 
												 <mark class="count"></mark>
												</h2>
											</a>
										</div>
									</div>
								<?php
									}
								?>
								</div>
								<?php 
								while ($row=mysqli_fetch_array($result)) {
									# code...
									 $id = $row ['s_package_id'];
							
								?>
								<div class="product-grid">
									<div class="col-md-4 col-sm-6 product-item text-center mb-3">
										<div class="product-thumb">
											<a href="servicepackage-details.php?id=<?php echo $id ?>">
												<img src="../../../image/servicepackageimages/<?php echo $row['s_package_image'];?>" alt="" />
											</a>
											






											
										</div>
										<div class="product-info">
											<a href= "servicepackage-details.php?id=<?php echo $id ?>"
												<?php echo $row['s_package_name'] ?>>
												<h2 class="title"><?php echo $row['s_package_name'] ?></h2>
												<span class="price">
													<del>&#8377;<?php echo  $row['discount'] ?></del> 
													<ins> 
														&#8377; <?php echo  $row['s_package_price'] ?>
														
													</ins>
												</span>
											</a>
										</div>
									</div>
								</div>
								<?php
							}
								?>
								<div class="pagination"> 
									<a class="prev page-numbers" href="#">Prev</a>
									<a class="page-numbers" href="#">1</a>
									<span class="page-numbers current">2</span> 
									<a class="page-numbers" href="#">3</a> 
									<a class="next page-numbers" href="#">Next</a>
								</div>
							</div>
							<div class="col-md-3 col-md-pull-9">
								<div class="sidebar">
									<div class="widget widget-product-search">
										<form class="form-search">
											<input type="text" class="search-field" placeholder="Search Services…" value="" name="s" />
											<input type="submit" value="Search" />
										</form>
									</div>
								<!--	<div class="widget widget-product-categories">
										<h3 class="widget-title">Product Categories</h3>
										<ul class="product-categories">
											<li><a href="#">Dried</a> <span class="count">6</span></li>
											<li><a href="#">Fruits</a> <span class="count">5</span></li>
											<li><a href="#">Juice</a> <span class="count">6</span></li>
											<li><a href="#">Vegetables</a> <span class="count">6</span></li>
										</ul>
									</div> -->
								<form method="post">
									<div class="widget widget_price_filter">
										<h3 class="widget-title">Filter by price</h3>
										<div class="price_slider_wrapper">
											<div class="price_slider" style="display:none;"></div>
											<div class="price_slider_amount">
												<input type="text" id="min_price" name="min_price" value="" data-min="0" placeholder="Min price"/>
												<input type="text" id="max_price" name="max_price" value="" data-max="2000" placeholder="Max price"/>
												<button type="submit" class="button">Filter</button>
												<div class="price_label" style="display:none;">
													Price: <span class="from"></span> &mdash; <span class="to"></span>
												</div>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</form>
									<div class="widget widget-products">
										<h3 class="widget-title">Service</h3>
										<ul class="product-list-widget">
											<?php
											
                                    

                                   $result = mysqli_query($conn,$sql);
								while ($row=mysqli_fetch_array($result)) {
									# code...
								 $id = $row ['s_package_id'];
								 

							
								?>
											<li>
												<a href="servicepackage-details.php?id=<?php echo $id ?>">
													<img src="../../../image/servicepackageimages/<?php echo $row['s_package_image'];?>" alt="" />
													<span class="product-title"><?php echo $row['s_package_name']; ?></span>
												</a>
												<del>&#8377;<?php echo $row['discount']; ?></del>
												<ins>&#8377;<?php echo $row['s_package_price']; ?></ins>
											</li>
											<?php
                                          }
											?>
										</ul>
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

		<script type="text/javascript" src="js/core.min.js"></script>
		<script type="text/javascript" src="js/widget.min.js"></script>
		<script type="text/javascript" src="js/mouse.min.js"></script>
		<script type="text/javascript" src="js/slider.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.touch-punch.js"></script>
		<script type="text/javascript" src="js/price-slider.js"></script>
	</body>
<?php
 include("footer.php")
 ?>
<!-- Mirrored from tk-themes.net/html-organik/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 06:28:16 GMT -->
</html>