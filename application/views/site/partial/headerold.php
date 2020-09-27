
<body>
	<!-- HEADER -->
	<header>
		<!-- top Header -->
		<div id="top-header">
			<div class="container">
				<div class="pull-left">
					<span>Welcome to E-shop!</span>
				</div>
				<div class="pull-right">
					<ul class="header-top-links">
						<li><a href="#">Store</a></li>
						<li><a href="#">Newsletter</a></li>
						<li><a href="#">FAQ</a></li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">ENG <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">English (ENG)</a></li>
								<li><a href="#">Russian (Ru)</a></li>
								<li><a href="#">French (FR)</a></li>
								<li><a href="#">Spanish (Es)</a></li>
							</ul>
						</li>
						<li class="dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">USD <i class="fa fa-caret-down"></i></a>
							<ul class="custom-menu">
								<li><a href="#">USD ($)</a></li>
								<li><a href="#">EUR (€)</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /top Header -->

		<!-- header -->
		<div id="header">
			<div class="container">
				<div class="pull-left">
					<!-- Logo -->
					<div class="header-logo">
						<a class="logo" href="#">
							<img src="<?=base_url('assets/uploads/')?>/site/logo.png" alt="">
						</a>
					</div>
					<!-- /Logo -->

					<!-- Search -->
					<div class="header-search">
						<form>
							<input class="input search-input" type="text" placeholder="Enter your keyword">
							<select class="input search-categories">
								<option value="0">All Categories</option>
								<option value="1">Category 01</option>
								<option value="1">Category 02</option>
							</select>
							<button class="search-btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
					<!-- /Search -->
				</div>
				<div class="pull-right">
					<ul class="header-btns">
						<!-- Account -->
						<li class="header-account dropdown default-dropdown">
							<div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
							</div>
							<a href="#" class="text-uppercase">Login</a> / <a href="#" class="text-uppercase">Join</a>
							<ul class="custom-menu">
								<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
								<li><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
								<li><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
								<li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
								<li><a href="#"><i class="fa fa-unlock-alt"></i> Login</a></li>
								<li><a href="#"><i class="fa fa-user-plus"></i> Create An Account</a></li>
							</ul>
						</li>
						<!-- /Account -->

						<!-- Cart -->
						<li class="header-cart dropdown default-dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									<span class="qty">3</span>
								</div>
								<strong class="text-uppercase">My Cart:</strong>
								<br>
								<span>35.20$</span>
							</a>
							<div class="custom-menu">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
												<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
									</div>
									<div class="shopping-cart-btns">
										<button class="main-btn">View Cart</button>
										<button class="primary-btn">Checkout <i class="fa fa-arrow-circle-right"></i></button>
									</div>
								</div>
							</div>
						</li>
						<!-- /Cart -->

						<!-- Mobile nav toggle-->
						<li class="nav-toggle">
							<button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
						</li>
						<!-- / Mobile nav toggle -->
					</ul>
				</div>
			</div>
			<!-- header -->
		</div>
		<!-- container -->
	</header>
	<!-- /HEADER -->

<!-- NAVIGATION -->
<div id="navigation">
	<!-- container -->
	<div class="container">
		<div id="responsive-nav">
			<!-- category nav -->
			<div class="category-nav">
				<span class="category-header">Categories <i class="fa fa-list"></i></span>
				<ul class="category-list" id="clickCategory">

					<?php foreach($parrentCategories as $parent_id => $parent):?>
					<li class="dropdown side-dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown"><?=$parent['name']?><i class="fa fa-angle-right"></i></a>
						<div class="custom-menu"style="background-image:url('<?=base_url('assets/uploads/site/')?>banner04.jpg');background-size:cover; ">

							<div class="row">
								<div class="col-md-12">
									<ul class="list-links" id="subCategory">
									<?php foreach( $childCategories[$parent_id] as $child):?>
								 	<li><a href="#"><?=$child['name']?></a></li>
									<?php  endforeach;  ?>
									</ul>
								</div>

							</div>
						</div>
					</li>
					<!-- <li><a href="#">View All</a></li> -->

				<?php  endforeach;  ?>



			</ul>
			</div>
			<!-- /category nav -->

			<!-- menu nav -->
			<div class="menu-nav">
				<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
				<ul class="menu-list">
					<li><a href="#">Home</a></li>
					<li><a href="#">Shop</a></li>
					<li class="dropdown mega-dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Women <i class="fa fa-caret-down"></i></a>
						<div class="custom-menu">
							<div class="row">
								<div class="col-md-4">
									<ul class="list-links">
										<li>
											<h3 class="list-links-title">Categories</h3></li>
										<li><a href="#">Women’s Clothing</a></li>
										<li><a href="#">Men’s Clothing</a></li>
										<li><a href="#">Phones & Accessories</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Bags & Shoes</a></li>
									</ul>
									<hr class="hidden-md hidden-lg">
								</div>
								<div class="col-md-4">
									<ul class="list-links">
										<li>
											<h3 class="list-links-title">Categories</h3></li>
										<li><a href="#">Women’s Clothing</a></li>
										<li><a href="#">Men’s Clothing</a></li>
										<li><a href="#">Phones & Accessories</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Bags & Shoes</a></li>
									</ul>
									<hr class="hidden-md hidden-lg">
								</div>
								<div class="col-md-4">
									<ul class="list-links">
										<li>
											<h3 class="list-links-title">Categories</h3></li>
										<li><a href="#">Women’s Clothing</a></li>
										<li><a href="#">Men’s Clothing</a></li>
										<li><a href="#">Phones & Accessories</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Bags & Shoes</a></li>
									</ul>
								</div>
							</div>
							<div class="row hidden-sm hidden-xs">
								<div class="col-md-12">
									<hr>
									<a class="banner banner-1" href="#">
										<img src="./img/banner05.jpg" alt="">
										<div class="banner-caption text-center">
											<h2 class="white-color">NEW COLLECTION</h2>
											<h3 class="white-color font-weak">HOT DEAL</h3>
										</div>
									</a>
								</div>
							</div>
						</div>
					</li>
					<li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Men <i class="fa fa-caret-down"></i></a>
						<div class="custom-menu">
							<div class="row">
								<div class="col-md-3">
									<div class="hidden-sm hidden-xs">
										<a class="banner banner-1" href="#">
											<img src="<?=base_url('assets/uploads/site/')?>banner06.jpg" alt="">
											<div class="banner-caption text-center">
												<h3 class="white-color text-uppercase">Women’s</h3>
											</div>
										</a>
										<hr>
									</div>
									<ul class="list-links">
										<li>
											<h3 class="list-links-title">Categories</h3></li>
										<li><a href="#">Women’s Clothing</a></li>
										<li><a href="#">Men’s Clothing</a></li>
										<li><a href="#">Phones & Accessories</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Bags & Shoes</a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<div class="hidden-sm hidden-xs">
										<a class="banner banner-1" href="#">
											<img src="./img/banner07.jpg" alt="">
											<div class="banner-caption text-center">
												<h3 class="white-color text-uppercase">Men’s</h3>
											</div>
										</a>
									</div>
									<hr>
									<ul class="list-links">
										<li>
											<h3 class="list-links-title">Categories</h3></li>
										<li><a href="#">Women’s Clothing</a></li>
										<li><a href="#">Men’s Clothing</a></li>
										<li><a href="#">Phones & Accessories</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Bags & Shoes</a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<div class="hidden-sm hidden-xs">
										<a class="banner banner-1" href="#">
											<img src="./img/banner08.jpg" alt="">
											<div class="banner-caption text-center">
												<h3 class="white-color text-uppercase">Accessories</h3>
											</div>
										</a>
									</div>
									<hr>
									<ul class="list-links">
										<li>
											<h3 class="list-links-title">Categories</h3></li>
										<li><a href="#">Women’s Clothing</a></li>
										<li><a href="#">Men’s Clothing</a></li>
										<li><a href="#">Phones & Accessories</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Bags & Shoes</a></li>
									</ul>
								</div>
								<div class="col-md-3">
									<div class="hidden-sm hidden-xs">
										<a class="banner banner-1" href="#">
											<img src="./img/banner09.jpg" alt="">
											<div class="banner-caption text-center">
												<h3 class="white-color text-uppercase">Bags</h3>
											</div>
										</a>
									</div>
									<hr>
									<ul class="list-links">
										<li>
											<h3 class="list-links-title">Categories</h3></li>
										<li><a href="#">Women’s Clothing</a></li>
										<li><a href="#">Men’s Clothing</a></li>
										<li><a href="#">Phones & Accessories</a></li>
										<li><a href="#">Jewelry & Watches</a></li>
										<li><a href="#">Bags & Shoes</a></li>
									</ul>
								</div>
							</div>
						</div>
					</li>
					<li><a href="#">Sales</a></li>
					<li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Pages <i class="fa fa-caret-down"></i></a>
						<ul class="custom-menu">
							<li><a href="index.html">Home</a></li>
							<li><a href="products.html">Products</a></li>
							<li><a href="product-page.html">Product Details</a></li>
							<li><a href="checkout.html">Checkout</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<!-- menu nav -->
		</div>
	</div>
	<!-- /container -->
</div>
<!-- NAVIGATION end-->
