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
	  	$sql = "SELECT p.product_id,p.product_price, p.product_name,  i.image_path , s.sub_name FROM      product p LEFT JOIN productimage i 
                ON p.product_id = i.p_image_id 
           INNER JOIN subcategory s
           ON p.sub_id = s.sub_id 
            and s.sub_id='".$sid."'";
        

	  	// "select * from `product` p JOIN `subcategory` s where p.sub_id = s.sub_id and s.sub_id='".$sid."'";
	  	//"select * from `product` p JOIN `subcategory` s JOIN `productimage`i where i.p_image_id AND p.sub_id = s.sub_id and s.sub_id='".$sid."'";

	  //	$img="select * from `productimage`  where product_id='".$sid."'  ";
          
	  //	echo $sql;
	  //	$die;

	  }
	  else
	  {
	  $sql ="SELECT p.product_id,p.product_price, p.product_name,  i.image_path , s.sub_name FROM product  p LEFT JOIN productimage i 
           ON p.product_id = i.p_image_id 
           INNER JOIN subcategory s
           ON p.sub_id = s.sub_id";
          // SELECT * FROM product p JOIN productimage i WHERE i.p_image_id=p.product_id

	  //"select * from `product` p JOIN `subcategory` s where p.sub_id = s.sub_id";

	  //"select * from `product` p JOIN `subcategory` s JOIN `productimage`i where i.p_image_id AND p.sub_id = s.sub_id and s.sub_id";
	   

	  //$img="select * from `productimage`  where product_id='".$sid."'  ";
          $result12 = mysqli_query($conn,$sql);
       // $row=mysqli_fetch_array($result12);

      }


	  	if($_SERVER["REQUEST_METHOD"]=="POST")
             {
             	$start=$_POST['min_price'];
             	$end=$_POST['max_price'];

             	$sql="SELECT p.product_id,p.product_price, p.product_name,  i.image_path , s.sub_name FROM product  p LEFT JOIN productimage i 
           ON p.product_id = i.p_image_id 
           INNER JOIN subcategory s
           ON p.sub_id = s.sub_id 
           AND  p.product_price between $start and $end";

             	//"select * from `product` p JOIN `subcategory` s where p.sub_id = s.sub_id  and p.product_price between $start and $end";

             	//echo $sql;
             	//$die;
             	} 
            


	  $result = mysqli_query($conn,$sql);
	 // $result0 = mysqli_query($conn,$img);
      //    $row0 = Mysqli_fetch_array($result0);
         // echo $img;
         // $die;



      ?>
      
      

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" href="images/favicon.ico"/>
		<title>Agricluture Hub &#8211; Shop | </title>

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
								<h2 class="page-title text-center">Shop</h2>
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
									<li><a href="shop.php">Shop</a></li>
									<li>Product Grid</li>
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
										<p class="result-count"></p>
									</div>
									<div class="col-md-6">
										<div class="shop-filter-right">
											<div class="switch-view">
												<a href="shop-list.php" class="switcher" data-toggle="tooltip" data-placement="top" title="" data-original-title="List"><i class="ion-navicon"></i></a> 
												<a href="shop.html" class="switcher active" data-toggle="tooltip" data-placement="top" title="" data-original-title="Grid"><i class="ion-grid"></i></a>
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
									$sql5="select * from `subcategory`";
								    $result5=mysqli_query($conn,$sql5);


									while ($row5=mysqli_fetch_array($result5)) 
								{
									$sid = $row5['sub_id'];
								?>	
									
									 
									<div class="cat-item">
										<div class="cats-wrap" data-bg-color="#f8c9c2">
											<a href="shop.php?id=<?php echo $sid?>">
												<img src="../../../image/product/<?php echo $row5['sub_cate_pic'];?>"alt="" />
												<h2 class="category-title"><?php echo $row5['sub_name'];?> 
												 <mark class="count">(4)</mark>
												</h2>
											</a>
										</div>
									</div>
								<?php
									}
								?>
									
									
								</div>
								<?php 
								$result12 = mysqli_query($conn,$sql);
								while ($row=mysqli_fetch_array($result12)) {
									# code...
									 $id = $row['product_id'];
									// $id = $row ['p_image_id'];
								//while ($row0=mysqli_fetch_array($result0)) {
									//$id= $row0['image_path']
								//	echo "1";
							
								?>
								<div class="product-grid">
									<div class="col-md-4 col-sm-6 product-item text-center mb-3">
										<div class="product-thumb">
											<a href="shop-detail.php?id=<?php  echo    $id ?>">
												
																						<!--../../../image/plants/indoor_plants/-->
												<img src="../../../image/product/<?php echo $row['image_path'];?>" alt="" />
											</a>
											<div class="product-action">
												<span class="add-to-cart">
													<a href="insertcart.php?product_id=<?php echo $id ?>&qty=1" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
												</span>
												<span class="wishlist">
													<a href="insertwishlist.php?product_id=<?php echo $row['product_id'];?>&w_qty=1 "data-toggle="tooltip" data-placement="top" title="Add to wishlist"></a>
												</span>
												<span class="quickview">
													<a href="shop-detail.php?id=<?php  echo    $id ?>" data-toggle="tooltip" data-placement="top" title="Quickview"></a>
												</span>
												<span class="compare">
													<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"></a>
												</span>
											</div>
										</div>
										<div class="product-info">
											<a href= "shop-detail.php?id=<?php echo $id ?>"
												<?php echo $row['product_name'] ?>>
												<h2 class="title"><?php echo $row['product_name'] ?></h2>
												<span class="price">
													<!-- <del>&#8377;200.00</del> --> 
													<ins> 
														&#8377; <?php echo  $row['product_price'] ?>
														
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
											<input type="text" class="search-field" placeholder="Search products…" value="" name="s" />
											<input type="submit" value="Search" />
										</form>
									</div>
									<div class="widget widget-product-categories">
										<h3 class="widget-title">Product Categories</h3>
										<ul class="product-categories">
											<?php 
											$sql1="select * from `category`";
											$p="select * from `subcategory`";
											$re=mysqli_query($conn,$p);
											$r1=mysqli_fetch_array($re);
											

								    $result1=mysqli_query($conn,$sql1);


											while ($row1=mysqli_fetch_array($result1)) { 
                                                    $cid = $row1['category_id'];
                                                    $sid=$r1['sub_id'];

											
											$sql2="SELECT count(*) as total_sub_cate FROM `product` WHERE sub_id='".$sid."'";
											$result2=mysqli_query($conn,$sql2);
											$row2=mysqli_fetch_array($result2);

											$sub_id_count = $row2['total_sub_cate'];

											

												?> 
											<li><a href="shop.php?id=<?php echo $cid?>"> <?php echo $row1['category_name']?></a> <span class="count">4<!-- <?php echo $sub_id_count;?> --></span></li>
											<?php
										}
											?>
										</ul>
									</div>
								<form method="post">
									<div class="widget widget_price_filter">
										<h3 class="widget-title">Filter by price</h3>
										<div class="price_slider_wrapper">
											<div class="price_slider" style="display:none;"></div>
											<div class="price_slider_amount">
												<input type="text" id="min_price" name="min_price" value="" data-min="0" placeholder="Min price"/>
												<input type="text" id="max_price" name="max_price" value="" data-max="3000" placeholder="Max price"/>
												<button type="submit" class="button">Filter</button>
												<div class="price_label" style="display:none;">
													Price:<span class="from"></span> &mdash; <span class="to">
												</div>
												<div class="clear"></div>
											</div>
										</div>
									</div>
								</form>
							<!--		<div class="widget widget-products">
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
											
										</ul>
									</div> -->
									
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