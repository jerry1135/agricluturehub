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
          $id=$_GET['id'];
          $sql = "select * from `servicepackage`  where  s_package_id='".$sid."'";
          $result = mysqli_query($conn,$sql);
          $row = Mysqli_fetch_array($result);


         }

      ?>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" href="images/favicon.ico"/>
		<title>Organik Shop &#8211; Shop Detail | Organik HTML Template</title>

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
							<li class="active"><a href="service-detail.php">Single packages</a></li>
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
									<li><a href="shortcodes.html">Shop</a></li>
									<li>Shop Detail</li>
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
														<a href="images/shop/large/shop_1.jpg" data-rel="prettyPhoto[gallery]">
															<img src="images/shop/shop_1.jpg" alt="" />
														</a>
													</div>
												</div>
												<div>
													<div class="image-thumb">
														<a href="images/shop/large/shop_2.jpg" data-rel="prettyPhoto[gallery]">
															<img src="images/shop/shop_3.jpg" alt="" />
														</a>
													</div>
												</div>
												<div>
													<div class="image-thumb">
														<a href="images/shop/large/shop_3.jpg" data-rel="prettyPhoto[gallery]">
															<img src="images/shop/shop_4.jpg" alt="" />
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="image-gallery-nav">
											<div class="image-nav-item">
												<div class="image-thumb">
													<img src="images/shop/thumb/shop_1.jpg" alt="" />
												</div>
											</div>
											<div class="image-nav-item">
												<div class="image-thumb">
													<img src="images/shop/thumb/shop_3.jpg" alt="" />
												</div>
											</div>
											<div class="image-nav-item">
												<div class="image-thumb">
													<img src="images/shop/thumb/shop_4.jpg" alt="" />
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
												<i>(2 customer reviews)</i>
											</div>
											<div class="product-price">
												<del>&#8377; 150.00</del>
												<ins>&#8377; <?php echo  $row['s_package_price'] ?></ins>
											</div>
											<div class="mb-3">
												
												<p><?php echo  $row['s_package_desc'] ?></p>
											</div>

							<?php
                                 if($_SERVER["REQUEST_METHOD"]=="POST")
                                 {
                                 	if () {
                                 		# code...
                                 	}
                                   $qty=$_POST['qty'];
                                   echo"<meta http-equiv='refresh'content='0;url=insertcart.php?s_package_id=$id&qty=$qty'>"; 

                                 }
							?>
											<form class="cart"  method="POST">
												<div class="quantity-chooser">
													<div class="quantity">
														<span class="qty-minus" data-min="1"><i class="ion-ios-minus-outline"></i></span>
														<input type="text" name="qty" value=<?php echo 
														$row['p_quantity'];?> title="Qty" class="input-text qty text" size="4">
														<span class="qty-plus" data-max="100"><i class="ion-ios-plus-outline"></i></span>
													</div>
												</div>
												<button type="submit" class="single-add-to-cart">ADD TO CART</button>
											</form>
											<div class="product-tool">
												<a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist"> Browse Wishlist </a>
												<a class="compare" href="#" data-toggle="tooltip" data-placement="top" title="Add to compare"> Compare </a>
											</div>
											<div class="product-meta">
												<table>
													<tbody>
														<tr>
															<td class="label">Category</td>
															<td><a href="#">Juice</a></td>
														</tr>
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
												<div class="tab-pane fade active in" id="tab-description">
													<p>
														Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
													</p>
												</div>
												<div id="tab-reviews" class="tab-pane fade">
													<div class="single-comments-list mt-0">
														<div class="mb-2">
															<h2 class="comment-title">2 reviews for Orange Juice</h2>
														</div>
														<ul class="comment-list">
															<li>
																<div class="comment-container">
																	<div class="comment-author-vcard">
																		<img alt="" src="images/avatar/avatar.png" />
																	</div>
																	<div class="comment-author-info">
																		<span class="comment-author-name">admin</span>
																		<a href="#" class="comment-date">July 27, 2016</a>
																		<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
																	</div>
																	<div class="reply">
																		<a class="comment-reply-link" href="#">Reply</a>
																	</div>
																</div>
																<ul class="children">
																	<li>
																		<div class="comment-container">
																			<div class="comment-author-vcard">
																				<img alt="" src="images/avatar/avatar.png" />
																			</div>
																			<div class="comment-author-info">
																				<span class="comment-author-name">admin</span>
																				<a href="#" class="comment-date">July 27, 2016</a>
																				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
																			</div>
																			<div class="reply">
																				<a class="comment-reply-link" href="#">Reply</a>
																			</div>
																		</div>
																	</li>
																</ul>
															</li>
															<li>
																<div class="comment-container">
																	<div class="comment-author-vcard">
																		<img alt="" src="images/avatar/avatar.png" />
																	</div>
																	<div class="comment-author-info">
																		<span class="comment-author-name">admin</span>
																		<a href="#" class="comment-date">July 27, 2016</a>
																		<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
																	</div>
																	<div class="reply">
																		<a class="comment-reply-link" href="#">Reply</a>
																	</div>
																</div>
															</li>
														</ul>
													</div>
													<div class="single-comment-form mt-0">
														<div class="mb-2">
															<h2 class="comment-title">LEAVE A REPLY</h2>
														</div>
														<form class="comment-form">
															<div class="row">
																<div class="col-md-12">
																	<textarea id="comment" name="comment" cols="45" rows="5" placeholder="Message *"></textarea>
																</div>
															</div>
															<div class="row">
																<div class="col-md-4">
																	<input id="author" name="author" type="text" value="" size="30" placeholder="Name *" class="mb-2">
																</div>
																<div class="col-md-4">
																	<input id="email" name="email" type="email" value="" size="30" placeholder="Email *" class="mb-2">
																</div>
																<div class="col-md-4">
																	<input id="url" name="url" type="text" value="" placeholder="Website">
																</div>
															</div>
															<div class="row">
																<div class="col-md-2">
																	<input name="submit" type="submit" id="submit" class="btn btn-alt btn-border" value="Submit">
																</div>
															</div>
														</form>
													</div>
												</div>
											</div>
										</div>
										<div class="related">
											<div class="related-title">
												<div class="text-center mb-1 section-pretitle fz-34">Related</div>
												<h2 class="text-center section-title mtn-2 fz-24">Products</h2>
											</div>
											<div class="product-carousel p-0" data-auto-play="true" data-desktop="3" data-laptop="2" data-tablet="2" data-mobile="1">
												<div class="product-item text-center">
													<div class="product-thumb">
														<a href="shop-detail.html">
															<div class="badges">
																<span class="hot">Hot</span>
															</div>
															<img src="images/shop/shop_5.jpg" alt="" />
														</a>
														<div class="product-action">
															<span class="add-to-cart">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
															</span>
															<span class="wishlist">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist"></a>
															</span>
															<span class="quickview">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Quickview"></a>
															</span>
															<span class="compare">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"></a>
															</span>
														</div>
													</div>
													<div class="product-info">
														<a href="shop-detail.html">
															<h2 class="title">Carrot</h2>
															<span class="price">$12.00</span>
														</a>
													</div>
												</div>
												<div class="product-item text-center">
													<div class="product-thumb">
														<a href="shop-detail.html">
															<span class="outofstock"><span>Out</span>of stock</span>
															<img src="images/shop/shop_6.jpg" alt="" />
														</a>
														<div class="product-action">
															<span class="add-to-cart">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
															</span>
															<span class="wishlist">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist"></a>
															</span>
															<span class="quickview">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Quickview"></a>
															</span>
															<span class="compare">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"></a>
															</span>
														</div>
													</div>
													<div class="product-info">
														<a href="shop-detail.html">
															<h2 class="title">Sprouting Broccoli</h2>
															<span class="price">$6.00</span>
														</a>
													</div>
												</div>
												<div class="product-item text-center">
													<div class="product-thumb">
														<a href="shop-detail.html">
															<img src="images/shop/shop_7.jpg" alt="" />
														</a>
														<div class="product-action">
															<span class="add-to-cart">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
															</span>
															<span class="wishlist">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist"></a>
															</span>
															<span class="quickview">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Quickview"></a>
															</span>
															<span class="compare">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"></a>
															</span>
														</div>
													</div>
													<div class="product-info">
														<a href="shop-detail.html">
															<h2 class="title">Chinese Cabbage</h2>
															<span class="price">$9.00</span>
														</a>
													</div>
												</div>
												<div class="product-item text-center">
													<div class="product-thumb">
														<a href="shop-detail.html">
															<div class="badges">
																<span class="hot">Hot</span>
															</div>
															<img src="images/shop/shop_8.jpg" alt="" />
														</a>
														<div class="product-action">
															<span class="add-to-cart">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Add to cart"></a>
															</span>
															<span class="wishlist">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Add to wishlist"></a>
															</span>
															<span class="quickview">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Quickview"></a>
															</span>
															<span class="compare">
																<a href="#" data-toggle="tooltip" data-placement="top" title="Compare"></a>
															</span>
														</div>
													</div>
													<div class="product-info">
														<a href="shop-detail.html">
															<h2 class="title">Tieton Cherry</h2>
															<span class="price">$9.00</span>
														</a>
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
										<form class="form-search">
											<input type="text" class="search-field" placeholder="Search products…" value="" name="s" />
											<input type="submit" value="Search" />
										</form>
									</div>
									<div class="widget widget-product-categories">
										<h3 class="widget-title">Product Categories</h3>
										<ul class="product-categories">
											<li><a href="#">Dried</a> <span class="count">6</span></li>
											<li><a href="#">Fruits</a> <span class="count">5</span></li>
											<li><a href="#">Juice</a> <span class="count">6</span></li>
											<li><a href="#">Vegetables</a> <span class="count">6</span></li>
										</ul>
									</div>
								<form method="POST">
									<div class="widget widget-products">
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
									</div>

								</form>
									<div class="widget widget-tags">
										<h3 class="widget-title">Product Tags</h3>
										<div class="tagcloud">
											<a href="#">bread</a> <a href="#">food</a> <a href="#">fruits</a> <a href="#">green</a> <a href="#">healthy</a> <a href="#">natural</a> <a href="#">organic store</a> <a href="#">vegatable</a>
										</div>
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
		<script type='text/javascript' src='js/slick.min.js'></script>
		<script type="text/javascript" src="js/script.js"></script>
	</body>
<?php include("footer.php")?>
<!-- Mirrored from tk-themes.net/html-organik/shop-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 28 Dec 2019 06:28:44 GMT -->
</html>