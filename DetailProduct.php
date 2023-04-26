<?php
session_start();
include 'ConnectDB.php';
$products = ConnectDB();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
	<title>Document</title>
	<title>Spike shoes Website Template | Home :: w3layouts</title>
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	</script>
	<!----webfonts---->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!----//webfonts---->
	<!----start-alert-scroller---->
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easy-ticker.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#demo').hide();
			$('.vticker').easyTicker();
		});
	</script>
	<!----start-alert-scroller---->
	<!-- start menu -->
	<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="js/megamenu.js"></script>
	<script>
		$(document).ready(function() {
			$(".megamenu").megamenu();
		});
	</script>
	<script src="js/menu_jquery.js"></script>
	<!-- //End menu -->
	<!---slider---->
	<link rel="stylesheet" href="css/slippry.css">
	<script src="js/jquery-ui.js" type="text/javascript"></script>
	<script src="js/scripts-f0e4e0c2.js" type="text/javascript"></script>
	<script>
		jQuery('#jquery-demo').slippry({
			// general elements & wrapper
			slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
			// options
			adaptiveHeight: false, // height of the sliders adapts to current slide
			useCSS: false, // true, false -> fallback to js if no browser support
			autoHover: false,
			transition: 'fade'
		});
	</script>
	<!----start-pricerage-seletion---->
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<script type='text/javascript'>
		//<![CDATA[ 
		$(window).load(function() {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 500,
				values: [100, 400],
				slide: function(event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>  
	</script>
	<!----//End-pricerage-seletion---->
	<!---move-top-top---->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1200);
			});
		});
	</script>
	<!---//move-top-top---->
	<style>
		.Buy {
			position: absolute;
			top: 0px;
			left: 80%;
			width: 40px;
			height: 29px;
		}
	</style>
	<?php
	include "register.php";
	$kq = coDB("SELECT * FROM datacustomer");

	?>
	</script>
	<!----webfonts---->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<!----//webfonts---->
	<!----start-alert-scroller---->
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easy-ticker.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('#demo').hide();
			$('.vticker').easyTicker();
		});
	</script>
	<link rel="stylesheet" href="css/slippry.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
	<style>
		.Buy {
			position: absolute;
			top: 0px;
			left: 80%;
			width: 40px;
			height: 29px;
		}
	</style>
</head>

<body>
	<div class="header">
		<div class="top-header">
			<div class="wrap">
				<div class="top-header-left">
					<ul>
						<!---cart-tonggle-script---->
						<script type="text/javascript">
							$(function() {
								var $cart = $('#cart');
								$('#clickme').click(function(e) {
									e.stopPropagation();
									if ($cart.is(":hidden")) {
										$cart.slideDown("slow");
									} else {
										$cart.slideUp("slow");
									}
								});
								$(document.body).click(function() {
									if ($cart.not(":hidden")) {
										$cart.slideUp("slow");
									}
								});
							});
						</script>
						<!---//cart-tonggle-script---->
						<!-- <li>
							<a style="cursor: pointer; display: inline-block;" class="cart" href="cartshoe.php">
								<span id="clickme"></span>
								<p  id="aa" style="color: white; "><?php Appear() ?></p>
							</a>
						</li> -->

						<!---start-cart-bag---->
						<div id="cart">Your Cart is Empty <span></span></div>
						<!---start-cart-bag---->
						<li><a class="info" href="#"><span> </span></a></li>
					</ul>
				</div>
				<div class="top-header-center">
					<div class="top-header-center-alert-left">
						<h3>FREE DELIVERY</h3>
					</div>
					<div class="top-header-center-alert-right">
						<div class="vticker">
							<ul>
								<li>Applies to orders of $50 or more. <label>Returns are always free.</label></li>
							</ul>
						</div>
					</div>
					<div class="clear"> </div>
				</div>
				<div class="top-header-right">
					<ul>
						<li><a href="">Wellcome
								<?php
								foreach ($kq as $k) {
									echo $k['User_Name'];
								}
								?>
							</a></li>
						<li style=" color: red; padding:0px 10px">
						</li>
						<li><a href="login_learn.php">Log out</a></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<!----start-mid-head---->
		<div class="mid-header">
			<div class="wrap">
				<div class="mid-grid-left">
					<form>
						<input type="text" placeholder="What Are You Looking for?" />
					</form>
				</div>
				<div class="mid-grid-right">
					<a class="logo" href="index.html"><span> </span></a>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<!----//End-mid-head---->
		<!----start-bottom-header---->
		<div class="header-bottom">
			<div class="wrap">
				<!-- start header menu -->
				<ul class="megamenu skyblue">
					<li class="grid"><a class="color2" href="#">MEN</a>
						<div class="megapanel">
							<div class="row">
								<div class="col1">
									<div class="h_nav">
										<h4>popular</h4>
										<ul>
											<li><a href="products.html">new arrivals</a></li>
											<li><a href="products.html">men</a></li>
											<li><a href="products.html">women</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">login</a></li>
										</ul>
									</div>
									<div class="h_nav">
										<h4 class="top">man</h4>
										<ul>
											<li><a href="products.html">new arrivals</a></li>
											<li><a href="products.html">men</a></li>
											<li><a href="products.html">women</a></li>
											<li><a href="#">accessories</a></li>
											<li><a href="#">kids</a></li>
											<li><a href="#">style videos</a></li>
										</ul>
									</div>
								</div>
								<div class="col1">
									<div class="h_nav">
										<h4>style zone</h4>
										<ul>
											<li><a href="products.html">men</a></li>
											<li><a href="products.html">women</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">brands</a></li>
										</ul>
									</div>
								</div>
								<div class="col1">
									<div class="h_nav">
										<h4>style zone</h4>
										<ul>
											<li><a href="products.html">men</a></li>
											<li><a href="products.html">women</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">brands</a></li>
										</ul>
									</div>
								</div>
								<div class="col1 men">
									<div class="men-pic">
										<img src="images/men.png" title="" />
									</div>
								</div>
							</div>
						</div>
					</li>
					<li class="active grid"><a class="color4" href="#">women</a>
						<div class="megapanel">
							<div class="row">
								<div class="col1">
									<div class="h_nav">
										<h4>shop</h4>
										<ul>
											<li><a href="products.html">new arrivals</a></li>
											<li><a href="products.html">men</a></li>
											<li><a href="products.html">women</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">brands</a></li>
										</ul>
									</div>
									<div class="h_nav">
										<h4>help</h4>
										<ul>
											<li><a href="products.html">trends</a></li>
											<li><a href="products.html">sale</a></li>
											<li><a href="products.html">style videos</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">style videos</a></li>
										</ul>
									</div>
								</div>
								<div class="col1">
									<div class="h_nav">
										<h4>my company</h4>
										<ul>
											<li><a href="products.html">trends</a></li>
											<li><a href="products.html">sale</a></li>
											<li><a href="products.html">style videos</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">style videos</a></li>
										</ul>
									</div>
								</div>
								<div class="col1">
									<div class="h_nav">
										<h4>account</h4>
										<ul>
											<li><a href="products.html">login</a></li>
											<li><a href="products.html">create an account</a></li>
											<li><a href="products.html">create wishlist</a></li>
											<li><a href="products.html">my shopping bag</a></li>
											<li><a href="products.html">brands</a></li>
											<li><a href="products.html">create wishlist</a></li>
										</ul>
									</div>
								</div>
								<div class="col1">
									<div class="h_nav">
										<h4>my company</h4>
										<ul>
											<li><a href="products.html">trends</a></li>
											<li><a href="products.html">sale</a></li>
											<li><a href="products.html">style videos</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">style videos</a></li>
										</ul>
									</div>
								</div>
								<div class="col1">
									<div class="h_nav">
										<h4>popular</h4>
										<ul>
											<li><a href="products.html">new arrivals</a></li>
											<li><a href="products.html">men</a></li>
											<li><a href="products.html">women</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">style videos</a></li>
										</ul>
									</div>
								</div>
								<div class="col1 women">
									<div class="women-pic">
										<img src="images/women.png" title="" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col2"></div>
								<div class="col1"></div>
								<div class="col1"></div>
								<div class="col1"></div>
								<div class="col1"></div>
							</div>
						</div>
					</li>
					<li><a class="color5" href="#">KIDS</a>
						<div class="megapanel">
							<div class="row">
								<div class="col1">
									<div class="h_nav">
										<h4>popular</h4>
										<ul>
											<li><a href="products.html">new arrivals</a></li>
											<li><a href="products.html">men</a></li>
											<li><a href="products.html">women</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">login</a></li>
										</ul>
									</div>
									<div class="h_nav">
										<h4 class="top">man</h4>
										<ul>
											<li><a href="products.html">new arrivals</a></li>
											<li><a href="products.html">men</a></li>
											<li><a href="products.html">women</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">style videos</a></li>
										</ul>
									</div>
								</div>
								<div class="col1">
									<div class="h_nav">
										<h4>style zone</h4>
										<ul>
											<li><a href="products.html">men</a></li>
											<li><a href="products.html">women</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">brands</a></li>
										</ul>
									</div>
								</div>
								<div class="col1 kids">
									<div class="kids-pic">
										<img src="images/kids1.png" title="" />
									</div>
								</div>
								<div class="col1"></div>
								<div class="col1"></div>
								<div class="col1"></div>
								<div class="col1"></div>
							</div>
						</div>
					</li>
					<li><a class="color6" href="#">SPORTS</a>
						<div class="megapanel">
							<div class="row">
								<div class="col1">
									<div class="h_nav">
										<h4>shop</h4>
										<ul>
											<li><a href="products.html">new arrivals</a></li>
											<li><a href="products.html">men</a></li>
											<li><a href="products.html">women</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">brands</a></li>
										</ul>
									</div>
									<div class="h_nav">
										<h4 class="top">my company</h4>
										<ul>
											<li><a href="products.html">trends</a></li>
											<li><a href="products.html">sale</a></li>
											<li><a href="products.html">style videos</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">style videos</a></li>
										</ul>
									</div>
								</div>
								<div class="col1">
									<div class="h_nav">
										<h4>man</h4>
										<ul>
											<li><a href="products.html">new arrivals</a></li>
											<li><a href="products.html">men</a></li>
											<li><a href="products.html">women</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">style videos</a></li>
										</ul>
									</div>
								</div>
								<div class="col1">
									<div class="h_nav">
										<h4>help</h4>
										<ul>
											<li><a href="products.html">trends</a></li>
											<li><a href="products.html">sale</a></li>
											<li><a href="products.html">style videos</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">style videos</a></li>
										</ul>
									</div>
								</div>
								<div class="col1 sports">
									<div class="sports-pic">
										<img src="images/sport.png" title="" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col2"></div>
								<div class="col1"></div>
								<div class="col1"></div>
								<div class="col1"></div>
								<div class="col1"></div>
							</div>
						</div>
					</li>
					<li><a class="color7" href="#">NIKE SPORTSWEAR</a>
						<div class="megapanel">
							<div class="row">
								<div class="col1">
									<div class="h_nav">
										<h4>shop</h4>
										<ul>
											<li><a href="products.html">new arrivals</a></li>
											<li><a href="products.html">men</a></li>
											<li><a href="products.html">women</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">brands</a></li>
										</ul>
									</div>
									<div class="h_nav">
										<h4>my company</h4>
										<ul>
											<li><a href="products.html">trends</a></li>
											<li><a href="products.html">sale</a></li>
											<li><a href="products.html">style videos</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">style videos</a></li>
										</ul>
									</div>
								</div>
								<div class="col1">
									<div class="h_nav">
										<h4>help</h4>
										<ul>
											<li><a href="products.html">trends</a></li>
											<li><a href="products.html">sale</a></li>
											<li><a href="products.html">style videos</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">style videos</a></li>
										</ul>
									</div>
								</div>
								<div class="col1">
									<div class="h_nav">
										<h4>my company</h4>
										<ul>
											<li><a href="products.html">trends</a></li>
											<li><a href="products.html">sale</a></li>
											<li><a href="products.html">style videos</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">style videos</a></li>
										</ul>
									</div>
								</div>
								<div class="col1">
									<div class="h_nav">
										<h4>account</h4>
										<ul>
											<li><a href="products.html">login</a></li>
											<li><a href="products.html">create an account</a></li>
											<li><a href="products.html">create wishlist</a></li>
											<li><a href="products.html">my shopping bag</a></li>
											<li><a href="products.html">brands</a></li>
											<li><a href="products.html">create wishlist</a></li>
										</ul>
									</div>
								</div>
								<div class="col1 nike">
									<div class="nike-pic">
										<img src="images/nike.png" title="" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col2"></div>
								<div class="col1"></div>
								<div class="col1"></div>
								<div class="col1"></div>
								<div class="col1"></div>
							</div>
						</div>
					</li>
					<li><a class="color8" href="#">NIKEiD</a>
						<div class="megapanel">
							<div class="row">
								<div class="col1">
									<div class="h_nav">
										<h4>style zone</h4>
										<ul>
											<li><a href="products.html">men</a></li>
											<li><a href="products.html">women</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">brands</a></li>
										</ul>
									</div>
								</div>
								<div class="col1">
									<div class="h_nav">
										<h4>popular</h4>
										<ul>
											<li><a href="products.html">new arrivals</a></li>
											<li><a href="products.html">men</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">login</a></li>
										</ul>
									</div>
									<div class="h_nav">
										<h4 class="top">man</h4>
										<ul>
											<li><a href="products.html">new arrivals</a></li>
											<li><a href="products.html">accessories</a></li>
											<li><a href="products.html">kids</a></li>
											<li><a href="products.html">style videos</a></li>
										</ul>
									</div>
									<div class="col1"></div>
									<div class="col1"></div>
									<div class="col1"></div>
									<div class="col1"></div>
								</div>
							</div>
					</li>
				</ul>

			</div>
		</div>
	</div>

	<div class="img-slider">
		<div class="wrap">
			<ul id="jquery-demo">
				<li>
					<a href="#slide1">
						<img src="images/slide-1.jpg" alt="" />
					</a>
					<div class="slider-detils">
						<h3>MENS FOOT BALL <label>BOOTS</label></h3>
						<span>Stay true to your team all day, every day, game day.</span>
						<a class="slide-btn" href="details.html"> Shop Now</a>
					</div>
				</li>
				<li>
					<a href="#slide2">
						<img src="images/slide-4.jpg" alt="" />
					</a>
					<div class="slider-detils">
						<h3>MENS FOOT BALL <label>BOOTS</label></h3>
						<span>Stay true to your team all day, every day, game day.</span>
						<a class="slide-btn" href="details.html"> Shop Now</a>
					</div>
				</li>
				<li>
					<a href="#slide3">
						<img src="images/slide-1.jpg" alt="" />
					</a>
					<div class="slider-detils">
						<h3>MENS FOOT BALL <label>BOOTS</label></h3>
						<span>Stay true to your team all day, every day, game day.</span>
						<a class="slide-btn" href="details.html"> Shop Now</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<div class="clear"> </div>
	<!----//End-image-slider---->
	<!----start-price-rage--->
	<div class="wrap">
		<div class="price-rage">
			<h3>Weekly selection:</h3>
			<div id="slider-range">
			</div>
		</div>
	</div>
	<!----//End-price-rage--->
	<!--- start-content---->
	<div class="content">
		<div class="wrap">
			<div class="content-left">
				<div class="content-left-top-grid">
					<div class="content-left-price-selection">
						<h4>Select Price:</h4>
						<div class="price-selection-tree">
							<span class="col_checkbox">
								<input id="10" class="css-checkbox10" type="checkbox">
								<label class="normal"><i for="10" name="demo_lbl_10" class="css-label10"> </i> 400</label>
							</span>
							<span class="col_checkbox">
								<input id="11" class="css-checkbox11" type="checkbox">
								<label class="active1"><i for="11" name="demo_lbl_11" class="css-label11"> </i>350</label>
							</span>
							<span class="col_checkbox">
								<input id="12" class="css-checkbox12" type="checkbox">
								<label class="normal"><i for="12" name="demo_lbl_12" class="css-label12"> </i> 300</label>
							</span>
							<span class="col_checkbox">
								<input id="13" class="css-checkbox13" type="checkbox">
								<label class="normal"><i for="13" name="demo_lbl_13" class="css-label13"> </i>250</label>
							</span>
							<span class="col_checkbox">
								<input id="14" class="css-checkbox14" type="checkbox">
								<label class="normal"><i for="14" name="demo_lbl_14" class="css-label14"> </i> 200</label>
							</span>
							<span class="col_checkbox">
								<input id="15" class="css-checkbox15" type="checkbox">
								<label class="normal"><i for="15" name="demo_lbl_15" class="css-label15"> </i>150</label>
							</span>
						</div>

					</div>
				</div>
				<div class="content-left-bottom-grid">
					<h4>Boys Football:</h4>
					<div class="content-left-bottom-grids">
						<div class="content-left-bottom-grid1">
							<img src="images/foot-ball.jpg" title="football" />
							<h5><a href="details.html">Nike Strike PL Hi-Vis</a></h5>
							<span> Football</span>
							<label>&#163; 375</label>
						</div>
						<div class="content-left-bottom-grid1">
							<img src="images/jarse.jpg" title="jarse" />
							<h5><a href="details.html">Nike Strike PL Hi-Vis</a></h5>
							<span> Football</span>
							<label>&#163; 375</label>
						</div>
					</div>
				</div>
			</div>
			<div class="content-right">
				<div class="product-grids">
					<!--- start-rate---->
					<script src="js/jstarbox.js"></script>
					<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
					<script type="text/javascript">
						jQuery(function() {
							jQuery('.starbox').each(function() {
								var starbox = jQuery(this);
								starbox.starbox({
									average: starbox.attr('data-start-value'),
									changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
									ghosting: starbox.hasClass('ghosting'),
									autoUpdateAverage: starbox.hasClass('autoupdate'),
									buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
									stars: starbox.attr('data-star-count') || 5
								}).bind('starbox-value-changed', function(event, value) {
									if (starbox.hasClass('random')) {
										var val = Math.random();
										starbox.next().text(' ' + val);
										return val;
									}
								})
							});
						});
					</script>
					<!---//End-rate---->
					<!---caption-script---->
					<!---//caption-script---->
					<?php
					foreach ($products as $index => $product) {
						// echo $product['id'];
					};
					?>
					<?php
					//lưu giữ liệu sản phẩm được chọn vào giỏ hàng 
					if (isset($_POST['submit'])) {
						include("./addtocart.php");
						HandleAmountProductInCart($products[$_POST['index']]);
					}
					?>
					<?php
					// dùng để đếm số lượng sản phẩm được thêm vào giỏ hàng
					function Appear()
					{
						if (isset($_SESSION['Cart'])) {
							$countProductCart = 0;
							if (count($_SESSION['Cart']) > 0) {
								# code...
								foreach (($_SESSION['Cart']) as $key => $product) {
									# code...
									$countProductCart = $countProductCart + $product['amount'];
								}
							}
							echo $countProductCart;
						}
					}
					?>

					<?php
					$products = array(
						array('id' => 'A01', 'image' => 'images/product1.jpg', 'price' => 380, 'amount' => 1),
						array('id' => 'A02', 'image' => 'images/product2.jpg', 'price' => 375, 'amount' => 1),
						array('id' => 'A03', 'image' => 'images/product3.jpg', 'price' => 350, 'amount' => 1),
						array('id' => 'A04', 'image' => 'images/product4.jpg', 'price' => 370, 'amount' => 1),
						array('id' => 'A05', 'image' => 'images/product5.jpg', 'price' => 355, 'amount' => 1),
						array('id' => 'A06', 'image' => 'images/product6.jpg', 'price' => 390, 'amount' => 1),
					);

					$id = $_GET['id'];
					$iindex = -1;
					foreach ($products as $key => $product) {
						if ($product['id'] == $id) {
							$index = $key;
						}
					}

					function  HandleAmountProductInCart($addProduct)
					{ {
							if (count($_SESSION['Cart']) > 0) {
								# code...
								$countCheck = 0;
								foreach ($_SESSION['Cart'] as $key => $product) {
									if ($product['id'] == $addProduct['id']) {
										$product['amount'] += 1;
										$_SESSION['Cart'][$key]['amount'] = $product['amount'];
										break;
										# code...
									} else {
										# code...
										$countCheck++;
									}

									# code...
								}
								if ($countCheck == count($_SESSION['Cart'])) {
									# code...
									$_SESSION['Cart'][] = $addProduct;
								}
							} else {

								# code...
								$_SESSION['Cart'][] = $addProduct;
							}
						}
					};

					if (isset($_POST['submit'])) {
						HandleAmountProductInCart($products[$_POST['index']]);
					}

					echo '
                    <h1>Chi tiết sản phẩm</h1>
						<div onclick="location.href="details.html";" class="product-grid fade">
						<form method="post">
						<input class="Buy" type="submit" name="submit" value="Buy">

							<div class="product-grid-head">
								<ul class="grid-social">
									<li><a class="facebook" href="#"><span> </span></a></li>
									<li><a class="twitter" href="#"><span> </span></a></li>
									<li><a class="googlep" href="#"><span> </span></a></li>
									<div class="clear"> </div>
								</ul>
								<div class="block">
									<div class="starbox small ghosting"> </div> <span> (46)</span>
								</div>
							</div>
							<div class="product-pic">
								<a href=""><img src="' . $products[$index]['image'] . '" title="product-name" /></a>
								<p>
								<a href="#"><small>Nike</small> HYPERVENOM <small>Phantom</small> FG</a>
								<span> Mens Firm-Ground Football Boot </span>
								</p>
							</div>
							<div class="product-info">
								<div class="product-info-cust">
									<a href="details.html">Details</a>
								</div>
								<div class="product-info-price">
									<a href="details.html">' . $products[$index]['price'] . '</a>
								</div>
								<div class="clear"> </div>
							</div>
							<div class="more-product-info">
								<input type="hidden" name="index" value="' . $index . '">
								<span> </span>
							</div>
						</form>
						</div>
							';
					?>
					<div class="clear"> </div>
				</div>
			</div>
			<div class="clear"> </div>
		</div>
	</div>

	<a href="index.php">Home</a>
</body>

</html>