<?php

var_dump($brand);
?>
<div class="page-large-title">
		<div class="container">
			<h1 class="title">Shop Three Column With Right Sidebar</h1>
			<nav class="woocommerce-breadcrumb">
				<a class="home" href="#">Home</a> / <a href="#">Pages</a> / <span>Shop</span>
			</nav>
		</div><!-- .container -->
	</div><!-- .page-large-title -->
	
	<div class="container">
		<div class="row">
        <div class="col-md-3 col-xs-12 section-common sidebar">
			
            <aside class="widget widget_search">
                <form action="#" class="searchform">
                    <input type="search" class="inp-search" placeholder="Search for something">
                    <input type="submit" class="btn-search" value="Search">
                </form>
            </aside><!-- .widget_search -->
            
            <aside class="widget widget_categories">
                <h2 class="widget-title section-title">Categories</h2>
                <div class="clear"></div>
                <ul>
				<?php
					foreach ($category as $c) {
				?>
                    <li><a href="/category/index?id=<?=$c->id?>"><?=$c->name?></a> (999)</li>
					<?php
					}
					?>
                </ul>
            </aside><!-- .widget_categories -->
            
            <aside class="widget widget-price-filter js__slider_price_wrap">
                <h2 class="widget-title section-title">Filter By Price</h2>
                <div class="clear"></div>
                <div class="filter-slider js__slider_price" data-output="yes" data-min="0" data-max="200" data-start="25" data-end="85" data-currency="$"></div>
                <form action="#" class="clearfix">
                    <div class="filter-label">Price: <span>$0</span> <span>-</span> <span>$200</span></div>
                    <input type="hidden" value="25" name="min" class="js__input_min" />
                    <input type="hidden" value="85" name="max" class="js__input_max" />
                    <input type="submit" class="filter-submit" value="Filter" />
                </form>
            </aside><!-- .widget-price-filter -->
            
            <aside class="widget widget-color-filter">
                <h2 class="widget-title section-title">Color Options</h2>
                <div class="clear"></div>
                <form action="#" class="clearfix">
                    <div class="color-option">
                        <label class="lbl-variant"><input type="radio" name="radio-color-widget" class="lbl-radio"><span class="lbl-text js__background_color" data-background-color="#fea500"></span></label>
                        <label class="lbl-variant"><input type="radio" name="radio-color-widget" class="lbl-radio"><span class="lbl-text js__background_color" data-background-color="#005baf"></span></label>
                        <label class="lbl-variant"><input type="radio" name="radio-color-widget" class="lbl-radio"><span class="lbl-text js__background_color" data-background-color="#b1159e"></span></label>
                        <label class="lbl-variant"><input type="radio" name="radio-color-widget" class="lbl-radio"><span class="lbl-text js__background_color" data-background-color="#f3db06"></span></label>
                        <label class="lbl-variant"><input type="radio" name="radio-color-widget" class="lbl-radio"><span class="lbl-text js__background_color" data-background-color="#d90030"></span></label>
                        <label class="lbl-variant"><input type="radio" name="radio-color-widget" class="lbl-radio"><span class="lbl-text js__background_color" data-background-color="#441984"></span></label>
                        <label class="lbl-variant"><input type="radio" name="radio-color-widget" class="lbl-radio"><span class="lbl-text js__background_color" data-background-color="#03a9f4"></span></label>
                        <label class="lbl-variant"><input type="radio" name="radio-color-widget" class="lbl-radio"><span class="lbl-text js__background_color" data-background-color="#33691e"></span></label>
                        <label class="lbl-variant"><input type="radio" name="radio-color-widget" class="lbl-radio"><span class="lbl-text js__background_color" data-background-color="#ff1744"></span></label>
                    </div>
                </form>
            </aside><!-- .widget-color-filter -->
            
            <aside class="widget widget_categories">
                <h2 class="widget-title section-title">Select a brand</h2>
                <div class="clear"></div>
                <ul>

				<?php
					foreach ($brand as $b) {
				?>
					<li><a href="/category/index?brandid=<?=$b->id?>"><?=$b->name?></a> (999)</li>
					<?php
					}
					?>

                    
                </ul>
            </aside><!-- .widget_categories -->
            
            <aside class="widget widget-size-filter">
                <h2 class="widget-title section-title">Size Options</h2>
                <div class="clear"></div>
                <form action="#" class="clearfix">
                    <div class="size-option">
                        <label class="lbl-variant"><input type="radio" name="radio-size-widget" class="lbl-radio"><span class="lbl-text">S</span></label>
                        <label class="lbl-variant"><input checked type="radio" name="radio-size-widget" class="lbl-radio"><span class="lbl-text">M</span></label>
                        <label class="lbl-variant"><input type="radio" name="radio-size-widget" class="lbl-radio"><span class="lbl-text">L</span></label>
                        <label class="lbl-variant"><input type="radio" name="radio-size-widget" class="lbl-radio"><span class="lbl-text">XL</span></label>
                    </div>
                </form>
            </aside><!-- .widget-size-filter -->
            
            <aside class="widget widget-images">
                <a href="#" class="light-effect"><img src="http://placehold.it/271x360" alt="" /></a>
            </aside><!-- .widget-images -->
            
        </div><!-- col -->
			<div class="col-md-9 col-xs-12 section-common">
				<a href="#" class="light-effect adv-main-content"><img src="http://placehold.it/870x370" alt=""></a>
				<div class="shop-filter">
					<form class="woocommerce-ordering shop-ordering" action="#">
						<label class="lbl-select">Default sorting:</label>
						<select class="orderby js__select2" data-min-results="Infinity">
							<option value="product-name">Product name</option>
							<option value="rating">Rating</option>
							<option value="date">Newness</option>
							<option value="price">Price: low to high</option>
							<option value="price-desc" selected>Price: high to low</option>
						</select>
					</form><!-- .woocommerce-ordering -->
					<p class="woocommerce-result-count">Showing 1 - 5 from 124 products</p>
					<ul class="shop-type">
						<li><a href="shop-list-with-left-sidebar.html"><img src="http://<?= $_SERVER['HTTP_HOST'] ?>/assets/images/icon-list.png" alt="" /></a></li>
						<li><a href="shop-three-column-with-right-sidebar.html" class="active"><img src="http://<?= $_SERVER['HTTP_HOST'] ?>/assets/images/icon-grid.png" alt="" /></a></li>
					</ul><!-- .shop-type -->
				</div><!-- .shop-filter -->
				<div class="products row row-inline-block text-center" id='produckts'>

										<?php
										foreach ($model as $m) {
											?>
					<div class="col-md-4 col-sm-6 col-ip-6 col-xs-12">
						<div class="product-grid">
							<div class="thumb">
											<?php
												foreach($m->fotos as $photo ){
													if (($photo['productId'] == $m->id) && ($photo['position']==0)){
												?>
								<a href="/product/product?id=<?=$m->id?>"><img src="<?=$photo['url'] ?>" alt="">
								<?php
											}
												}
												?>
									<ul class="attribute-list">
										<li><span class="label-coral">New</span></li>
										<li><span class="label-red">Sale</span></li>
									</ul>
								</a>
								<ul class="controls">
									<li><a href="#"><i class="fa fa-heart"></i><span>LIKE IT</span></a></li>
									<li><a href="#"><i class="fa fa-exchange"></i><span>COMPARE</span></a></li>
									<li class="quicviews" value="<?=$m->id?>">
									<a href="#" data-id='<?=$m->id?>' class="js__popup_open"data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
								</ul>
								<a href="#"  data-id='<?=$m->id?>' class="add_to_cart_button">Add to cart</a>
							</div>
							<a href="#" class="content">
								<h2 class="title"><?= $m->Name ?></h2>
								<span class="category">Men</span>
								<span class="price">
								<span class="amount"><?=$m->id?></span>
								</span>
								<div class="star-rating">
									<span class="js__width" data-width="80%"><strong class="rating">4.00</strong> out of 5</span>
								</div>
							</a>
						</div>
					</div><!-- product -->
					<?php
							}
						?>
<script>

</script>
					
				</div><!-- products -->
				<a href="#" id="btn-ajax-product" class="btn-ajax-loading" data-start='3' data-end='6'><i class="fa fa-refresh"></i> <span>View more (2.450 products) ...</span></a>
			</div><!-- col -->
			
			<div class="col-xs-12 section-common section-last">
				<div class="row">
					<div class="col-sm-4">
						<a href="#" class="item-service-2 red-style light-effect">
							<h2 class="title">Free Shipping</h2>
							<p class="desc">We free Shipping on all orders over $49</p>
						</a>
					</div>
					<div class="col-sm-4">
						<a href="#" class="item-service-2 green-style light-effect">
							<h2 class="title">Fast Delivery</h2>
							<p class="desc">You’ll receive your orders in less than 3 days</p>
						</a>
					</div>
					<div class="col-sm-4">
						<a href="#" class="item-service-2 yellow-style light-effect">
							<h2 class="title">24/7 Customer Service</h2>
							<p class="desc">Support department professional & friendly</p>
						</a>
					</div>
				</div>
			</div><!-- col -->
		</div><!-- .row -->
	</div><!-- .container -->
	
	