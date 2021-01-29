<!doctype html>
<html lang="en-US">
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

             	$sql="select * from `servicepackage`  where s_package_price between $start and $end";


             	//echo $sql;
             	//$die;
             	} 
            


	  $result = mysqli_query($conn,$sql);


      ?>

	
<!-- Mirrored from tk-themes.net/html-organik/shop-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 06:28:16 GMT -->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" href="images/favicon.ico"/>
		<title>Organik Shop &#8211; Shop List | Organik HTML Template</title>

		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/ionicons.min.css" type="text/css" media="all" />
		<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all"/>
		<link rel='stylesheet' href='css/prettyPhoto.css' type='text/css' media='all'/>
		<link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
		<link rel="stylesheet" href="css/custom.css" type="text/css" media="all"/>
		<script	src="js/readMoreJS.js"></script>
		<script	src="js/readMoreJS.min.js"></script>
		
		<link href="http://fonts.googleapis.com/css?family=Great+Vibes%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet"/>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
			
			
			<div id="main">
				<div class="section section-bg-10 pt-11 pb-17">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h2 class="page-title text-center">Service List</h2>
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
									<li><a href="#">Serivce Package</a></li>
									<li>serivce List</li>
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
									<!-- <div class="col-md-6">
										<p class="result-count"> Showing 1–12 of 23 results</p>
									</div> -->
									<div class="col-md-6">
										<div class="shop-filter-right">
											<div class="switch-view">
												<a href="servicepackage-list.php" class="switcher active" data-toggle="tooltip" data-placement="top" title="" data-original-title="List"><i class="ion-navicon"></i></a> 
												<a href="servicepackage.php" class="switcher" data-toggle="tooltip" data-placement="top" title="" data-original-title="Grid"><i class="ion-grid"></i></a>
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
								<div class="product-list">
									<?php 
								while ($row=mysqli_fetch_array($result)) {
									# code...
									 $id = $row ['s_package_id'];
							
								?>
									<div class="product-item">
										<div class="col-md-4 pl-0">
											<div class="product-thumb">
												<a href="servicepackage-details.php?id=<?php  echo    $id ?>">
													
													<img src="../../../image/servicepackageimages/<?php echo $row['s_package_image'];?>" alt="" />
												</a>
											</div>
										</div>
										<div class="col-md-8">
											<div class="product-info">
												<a href="servicepackage-details.php?id=<?php  echo    $id ?>">
													<h2 class="title"><?php echo $row['s_package_name'] ?></h2>
													<span class="price">
														<del>$15.00</del> 
														<ins>&#8377;<?php echo $row['s_package_price'] ?></ins>
													</span>
												</a>
												<?php
				$feedback = "SELECT count(*) as total_feedback FROM `feedback` WHERE s_package_id='".$id."'";
               $result3 = mysqli_query($conn,$feedback);
               $row3 = mysqli_fetch_array($result3);
               $feedback_count = $row3['total_feedback'];

               				
				?>

												<div class="product-rating">
													<div class="star-rating">
														<span style="width:100%"></span>
													</div>
													<i>(<?php echo $feedback_count;?> customer reviews)</i>
												</div>
												<div class="my_class mb-3">
													<p><?php echo nl2br($row['s_package_desc']) ?></p>
												</div>
												<div class="product-action-list">
													
												<script>
                                        $readMoreJS.init({
                                         target: '.my_class p',
                                         numOfWords: 60,
                                         toggle: true,
                                         moreLink: 'View more..',
                                         lessLink: 'View less..'
                                        });
                                    </script>


							
													<a class="organik-btn small" href="servicepackage-details.php?id=<?php echo $id ?>"> Book Service </a>
												
													
												</div>
											</div>
										</div>
									</div>
								<?php
							}
								?>
									
								</div>
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
										<!-- <form class="form-search">
											<input type="text" class="search-field" placeholder="Search products…" value="" name="s" />
											<input type="submit" value="Search" />
										</form>
 -->									</div>
									<div class="widget widget-product-categories">
										<!-- <h3 class="widget-title">Product Categories</h3> -->
										







									</div>
									<div class="widget widget_price_filter">
							<form method="post">
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
							</form>			
									</div>
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
								<!--	<div class="widget widget-products">
										<h3 class="widget-title">Products</h3>
										<ul class="product-list-widget">
											<li>
												<a href="shop-detail.html">
													<img src="images/shop/thumb/shop_1.jpg" alt="" />
													<span class="product-title">Orange Juice</span>
												</a>
												<del>$15.00</del>
												<ins>$12.00</ins>
											</li>
											<li>
												<a href="shop-detail.html">
													<img src="images/shop/thumb/shop_2.jpg" alt="" />
													<span class="product-title">Aurore Grape</span>
												</a>
												<ins>$9.00</ins>
											</li>
											<li>
												<a href="shop-detail.html">
													<img src="images/shop/thumb/shop_3.jpg" alt="" />
													<span class="product-title">Blueberry Jam</span>
												</a>
												<ins>$15.00</ins>
											</li>
											<li>
												<a href="shop-detail.html">
													<img src="images/shop/thumb/shop_4.jpg" alt="" />
													<span class="product-title">Passionfruit</span>
												</a>
												<ins>$35.00</ins>
											</li>
											<li>
												<a href="shop-detail.html">
													<img src="images/shop/thumb/shop_5.jpg" alt="" />
													<span class="product-title">Carrot</span>
												</a>
												<ins>$12.00</ins>
											</li>
										</ul>
									</div> -->
							<!--		<div class="widget widget-tags">
										<h3 class="widget-title">Product Tags</h3>
										<div class="tagcloud">
											<a href="#">bread</a> <a href="#">food</a> <a href="#">fruits</a> <a href="#">green</a> <a href="#">healthy</a> <a href="#">natural</a> <a href="#">organic store</a> <a href="#">vegatable</a>
										</div> -->
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

		<script type="text/javascript" src="js/core.min.js"></script>
		<script type="text/javascript" src="js/widget.min.js"></script>
		<script type="text/javascript" src="js/mouse.min.js"></script>
		<script type="text/javascript" src="js/slider.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.touch-punch.js"></script>
		<script type="text/javascript" src="js/price-slider.js"></script>
	</body>
	<?php include("footer.php")?>

<!-- Mirrored from tk-themes.net/html-organik/shop-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 06:28:16 GMT -->
</html>