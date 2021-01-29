<!doctype html>
<html lang="en-US">
<?php 
	// session_start();
 //  $uid = $_SESSION['user_id'];
//$pid = $_GET['product_id'];
	 include("header.php")?>
      <?php
     
require_once("../../../config/connection.php");

       
      ?>

	
<!-- Mirrored from tk-themes.net/html-organik/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 06:28:08 GMT -->
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" href="images/favicon.ico"/>
		<title>Organik Shop &#8211; Wishlist | Organik HTML Template</title>

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
							<li><a href="checkout.html">Check Out</a></li>
							<li class="active"><a href="wishlist.html">Wishlist</a></li>
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
		<div class="site">
			
			<div id="main">
				<div class="section section-bg-10 pt-11 pb-17">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<h2 class="page-title text-center">Wishlist</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="section border-bottom pt-2 pb-2">
					<div class="container">
						<div class="row">
							<div class="col-sm-12">
								<ul class="breadcrumbs">
									<li><a href="index.html">Home</a></li>
									<li><a href="shortcodes.html">Shop</a></li>
									<li>Wishlist</li>
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
									<table class="table shop-cart">
										<thead>
											<tr class="cart_item">
												<td class="product-remove">&nbsp;</td>
												<td class="product-thumbnail">&nbsp;</td>
												<td class="product-info">Product Name</td>
												<td class="product-subtotal">Unit Price</td>
												<td class="product-stock">Stock Status</td>
												<td>&nbsp;</td>
											</tr>
										</thead>
										<tbody>
											<?php 
											// $uid = $row['user_id'];
											if($uid!='')
											{
											$sql="SELECT w.wishlist_id,w.w_qty,w.w_amount, p.product_id, p.product_name,p.product_price, i.image_path FROM product p LEFT JOIN productimage i ON p.product_id = i.p_image_id INNER JOIN wishlist w ON w.product_id = p.product_id INNER JOIN user u ON w.user_id = u.user_id AND u.user_id = '".$uid."'";
											//"select * from `wishlist`  w JOIN `product` p JOIN `user` u where w.product_id=p.product_id and w.user_id=u.user_id and u.user_id='".$uid."'";
                         // echo $sql;
                          //$die;


                                    $result=mysqli_query($conn,$sql);
        
								while ($row=mysqli_fetch_array($result)) {
									# code...
									 $id = $row ['wishlist_id'];
									 $w_qty = $row ['w_qty'];
									 $pid= $row['product_id'];
							
								?>
											
											<tr class="cart_item">
												<td class="product-remove">
													<a href="remove-wishlist.php?id=<?php echo $id?>" class="remove">×</a>
												</td>
												<td class="product-thumbnail">
													<a href="shop-detail.php?id=<?php  echo    $pid ?>">
														<img src="../../../image/product/<?php echo $row['image_path'];?>" alt="">
													</a>
												</td>
												<td class="product-info">
													<a href="shop-detail.php?id=<?php  echo    $pid ?>"><?php echo $row['product_name']?></a>
													<!--<span class="sub-title">Consequat Quismassa</span>-->
													<span class="amount">&#8377;<?php echo $row['product_price']?></span>
												</td>
												<td class="product-subtotal">
													<span class="amount">&#8377;<?php echo $row['w_amount']; ?></span>
												</td>
												<td class="product-stock">
													<span class="color">In Stock</span>
												</td>
												<td>
													<a class="organik-btn small" href="insert-wishlist-to-cart.php?product_id=<?php echo $pid ?>&qty=<?php echo $w_qty ?>"> Add to cart </a>
												</td>
											</tr>
											<?php
                                              }
                                          }
											?>
										</tbody>

									</table>
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