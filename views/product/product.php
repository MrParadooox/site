
					<?php
					foreach($model as $m){
					}
					?>

<div class="page-large-title">
		<div class="container">
			<h1 class="title">Adios Fashion Girl</h1>
			<nav class="woocommerce-breadcrumb">
				<a class="home" href="#">Home</a> / <a href="#">Women Fashion</a> / <span>Adios Fashion Girl</span>
			</nav>
		</div><!-- .container -->
	</div><!-- .page-large-title -->
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 section-common">
				<div class="row">
					<div class="col-md-6">
						<div class="product-detail product-single">
							<div class="product">
								<div class="images js__gallery">
									<a href="#" class="woocommerce-main-image zoom js__zoom_popup" data-target="#zoomPopup" data-zoom="http://placehold.it/385x530">
									<?php
									foreach($modelPhoto as $photo ){
										if($photo['position']==0){
											?>
										<img src="<?=$photo['url']?>" alt="" />
									</a><!-- .woocommerce-main-image -->
									<div class="thumbnails">
									<a href="#" class="zoom js__thumb" data-images="<?=$photo['url']?>" data-zoom="<?=$photo['url']?>" ><img src="<?=$photo['url']?>" alt="" /></a>
										<?php
								} else {
									?>
										<a href="#" class="zoom js__thumb" data-images="<?=$photo['url']?>" data-zoom="<?=$photo['url']?>" ><img src="<?=$photo['url']?>" alt="" /></a>
									<?php
											}
										
										}
										?>
									</div><!-- .thumbnails -->
									<div class="hidden">
										<img src="http://placehold.it/435x590" alt="" />
										<img src="http://placehold.it/435x590" alt="" />
										<img src="http://placehold.it/435x590" alt="" />
										<img src="http://placehold.it/435x590" alt="" />
									</div><!-- load images zone -->
								</div><!-- .images -->
							</div><!-- .product -->
						</div><!-- .product-detail -->
					</div><!-- col -->


					<div class="col-md-6">
						<div class="summary summary-single">
							<h2 class="product_title">Adios Fashion Girl</h2>
							<div class="summary-top">
								<div class="star-rating">
									<span class="js__width" data-width="80%"><strong class="rating">4.00</strong> out of 5</span>
								</div>
								<a href="#">Have 25 reviews</a> <span>/</span> <a href="#">Add your review</a>
							</div>
							<p class="price"><span class="amount">$<?=$m->price?></span></p>
							<ul class="product_meta">
								<li><span>Brand:</span> <?=$m->price?></li>
								<li><span>Available:</span> In stock</li>
								<li><span>Product code:</span> ABC 123 456</li>
							</ul>
							<div class="description">
								<p><?=$m->smallDesc?></p>
							</div>
							<ul class="variants">
								<li class="variant-size">
									<span class="text">Size</span>
									<label class="lbl-variant"><input type="radio" name="radio-size" class="lbl-radio"><span class="lbl-text">S</span></label>
									<label class="lbl-variant"><input checked type="radio" name="radio-size" class="lbl-radio"><span class="lbl-text">M</span></label>
									<label class="lbl-variant"><input type="radio" name="radio-size" class="lbl-radio"><span class="lbl-text">L</span></label>
								</li>
								<li class="variant-color">
									<span class="text">Colors</span>
									<label class="lbl-variant"><input type="radio" name="radio-color" class="lbl-radio"><span class="lbl-text js__background_color" data-background-color="#fea500"></span></label>
									<label class="lbl-variant"><input type="radio" name="radio-color" class="lbl-radio"><span class="lbl-text js__background_color" data-background-color="#9fbedb"></span></label>
									<label class="lbl-variant"><input type="radio" name="radio-color" class="lbl-radio"><span class="lbl-text js__background_color" data-background-color="#f3db06"></span></label>
									<label class="lbl-variant"><input type="radio" name="radio-color" class="lbl-radio"><span class="lbl-text js__background_color" data-background-color="#00b261"></span></label>
								</li>
							</ul>
							<form class="cart">
								<div class="quantity js__number"><input type="number" class="js__target" value="1" /><button type="button" class="js__plus fa-plus fa"></button><button type="button" class="js__minus fa-minus fa"></button></div>
								<button type="submit" class="single_add_to_cart_button">Add to cart</button>
							</form>
							<div class="summary-bottom">
								<div class="text-list"><strong>Share:</strong> <a href="#">Facebook</a><span class="split">/</span><a href="#">Twitter</a><span class="split">/</span><a href="#">Google</a><span class="split">/</span><a href="#">Linkedin</a></div>
								<div class="text-list"><strong>Tags:</strong> <a href="#">Wonmen</a>, <a href="#">T-Shirt</a>, <a href="#">Blue</a>, <a href="#">Girl</a></div>
							</div>
						</div><!-- .summary -->
					</div><!-- col -->
					<div class="col-xs-12 section-common">
						<div class="woocommerce-tabs js__tab">
							<ul class="tabs">
								<li><a href="#" class="js__tab_control js__active">Description</a>					</li>
								<li><a href="#" class="js__tab_control">Free Shipping</a></li>
								<li><a href="#" class="js__tab_control">Reviews (0)</a></li>
							</ul>
							<div class="panel entry-content js__tab_content js__active">
								<div class="text-content">
									<p><?=$m->description?></p>
									<ul>
										<li>Typi non habent qui claritatem insitam.</li>
										<li>Est usus legentis in iis qui facit eorum claritatem.</li>
										<li>Investigationes demonstraverunt lectores.</li>
										<li>Legere ut me lius quod qua legunt zzril delenit.</li>
										<li>Augue duis dolore saepius delenit augue duis dolore.</li>
									</ul>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam quis nostrud exerci tation, ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat vulputate velit esse molestie consequat mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima quinta decima.</p>
									<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposue rit litterarum formas humanitatis per seacula quarta decima et quinta decima. </p>
								</div>
							</div>
							
							<div class="panel entry-content js__tab_content">
								<div class="text-content">
									<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. </p>
								</div>
							</div>
							
							<div class="panel entry-content js__tab_content">
								<div id="comments" class="comments">
									<h2 class="section-title">28 Comments</h2>
									<div class="clear"></div>
									<ol class="comment-list">
										<li class="comment">
											<div class="comment-body">
												<div class="comment-meta">
													<div class="comment-author vcard">
														<img alt="" src="http://placehold.it/80"  class="avatar">
														<b class="fn"><a href="#" rel="external nofollow" class="url">John Doe</a></b>
													</div>
													<!-- .comment-author -->
													<div class="comment-metadata">
														<a href="#"><span class="date">30 Apr, 2016</span> <span class="split">/</span> About 1 hour ago</a>
													</div>
													<!-- .comment-metadata -->
												</div>
												<!-- .comment-meta -->
												<div class="comment-content">
													<div class="text-content">
														<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
													</div>
												</div>
												<!-- .comment-content -->
												<div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
											</div>
										</li><!--- .comment-->
										<li class="comment">
											<div class="comment-body">
												<div class="comment-meta">
													<div class="comment-author vcard">
														<img alt="" src="http://placehold.it/80"  class="avatar">
														<b class="fn"><a href="#" rel="external nofollow" class="url">Barbara</a></b>
													</div>
													<!-- .comment-author -->
													<div class="comment-metadata">
														<a href="#"><span class="date">30 Apr, 2016</span> <span class="split">/</span> About 15 minutes</a>
													</div>
													<!-- .comment-metadata -->
												</div>
												<!-- .comment-meta -->
												<div class="comment-content">
													<div class="text-content">
														<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram.</p>
													</div>
												</div>
												<!-- .comment-content -->
												<div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
											</div>
											<ol class="children">
												<li class="comment">
													<div class="comment-body">
														<div class="comment-meta">
															<div class="comment-author vcard">
																<img alt="" src="http://placehold.it/80"  class="avatar">
																<b class="fn"><a href="#" rel="external nofollow" class="url">Thomas Alex</a></b>
															</div>
															<!-- .comment-author -->
															<div class="comment-metadata">
																<a href="#"><span class="date">28 Apr, 2016</span> <span class="split">/</span> 2 days ago</a>
															</div>
															<!-- .comment-metadata -->
														</div>
														<!-- .comment-meta -->
														<div class="comment-content">
															<div class="text-content">
																<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore feugiat nulla facilisis at vero eros et accumsan et iusto odio.</p>
															</div>
														</div>
														<!-- .comment-content -->
														<div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
													</div>
													<ol class="children">
														<li class="comment">
															<div class="comment-body">
																<div class="comment-meta">
																	<div class="comment-author vcard">
																		<img alt="" src="http://placehold.it/80"  class="avatar">
																		<b class="fn"><a href="#" rel="external nofollow" class="url">Barbara</a></b>
																	</div>
																	<!-- .comment-author -->
																	<div class="comment-metadata">
																		<a href="#"><span class="date">28 Apr, 2016</span> <span class="split">/</span> 2 days ago</a>
																	</div>
																	<!-- .comment-metadata -->
																</div>
																<!-- .comment-meta -->
																<div class="comment-content">
																	<div class="text-content">
																		<p>Vestibulum a nisl ipsum. Curabitur aliquet nec felis quis convallis. Quisque et auctor dui, id adipiscing nunc. Etiam et dui lobortis, volutpat justo ac, tempor lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus purus nisi, porttitor ac adipiscing ac, cursus eu massa. </p>
																	</div>
																</div>
																<!-- .comment-content -->
																<div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
															</div>
														</li>
													</ol>
												</li>
											</ol>
										</li><!--- .comment-->
										<li class="comment">
											<div class="comment-body">
												<div class="comment-meta">
													<div class="comment-author vcard">
														<img alt="" src="http://placehold.it/80"  class="avatar">
														<b class="fn"><a href="#" rel="external nofollow" class="url">Eva Elizabeth</a></b>
													</div>
													<!-- .comment-author -->
													<div class="comment-metadata">
														<a href="#"><span class="date">12 Jan, 2016</span> <span class="split">/</span> 4 months ago</a>
													</div>
													<!-- .comment-metadata -->
												</div>
												<!-- .comment-meta -->
												<div class="comment-content">
													<div class="text-content">
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
													</div>
												</div>
												<!-- .comment-content -->
												<div class="reply"><a class="comment-reply-link" href="#">Reply</a></div>
											</div>
										</li><!--- .comment-->
									</ol><!--- .comment-list-->
									<a href="#" class="btn-ajax-loading"><i class="fa fa-refresh"></i> <span>View more all comments ...</span></a>
									<div id="respond" class="comment-respond frm-comment">
										<h2 id="reply-title" class="comment-reply-title section-title small-spacing">Leave a Reply</h2>
										<div class="clear"></div>
										<form action="#" method="post" id="commentform" class="comment-form frm-contact">
											<div class="row">
												<div class="col-sm-6 col-xs-12">
													<label class="controls">
														<span class="lbl">Full Name <span class="required">*</span></span>
														<input type="text" name="name-inp" id="name-inp" class="inp-text" placeholder="Your Name">
													</label>
												</div>
												<div class="col-sm-6 col-xs-12">
													<label class="controls">
														<span class="lbl">Email Address <span class="required">*</span></span>
														<input type="email" name="email-inp" id="email-inp" class="inp-text" placeholder="Email Address">
													</label>
												</div>
												<div class="col-xs-12">
													<label class="controls">
														<span class="lbl">Write Message</span>
														<textarea name="comment-inp" id="comment-inp" class="inp-text inp-textarea auto-resize-textarea" placeholder="Please let us know your thoughts on this article..."></textarea>
													</label>
													<div class="controls">
														<input type="submit" class="inp-submit" value="SEND MESSAGE">
													</div>
												</div>
											</div>
										</form>
									</div><!--- .comment-respond-->
								</div><!--- .comments-->
							</div>
						</div><!-- .woocommerce-tabs -->
					</div><!-- col -->
					<div class="col-xs-12 section-featured-product section-common upsells">
						<h2 class="section-title">Related Products</h2>
						<div class="clear"></div>
						<div class="slick-wrap">
							<div class="products products-grid slick-middle-arrow js__slickslider" data-arrows="true" data-dots="false" data-show="4" data-responsive="{'992':2,'650':1}">
								<div class="slick-slide">
									<div class="product-grid">
										<div class="thumb">
											<a href="#"><img src="http://placehold.it/270x350" alt=""></a>
											<ul class="controls">
												<li><a href="#"><i class="fa fa-heart"></i><span>LIKE IT</span></a></li>
												<li><a href="#"><i class="fa fa-exchange"></i><span>COMPARE</span></a></li>
												<li><a href="#" class="js__popup_open" data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
											</ul>
										</div>
										<a href="#" class="content">
											<h2 class="title">French Connection T-Shirt</h2>
											<span class="category">Men</span>
												<span class="price">
												<span class="amount">$0.9</span>
											</span>
										</a>
									</div>
								</div><!-- product -->
								<div class="slick-slide">
									<div class="product-grid">
										<div class="thumb">
											<a href="#"><img src="http://placehold.it/270x350" alt=""></a>
											<ul class="controls">
												<li><a href="#"><i class="fa fa-heart"></i><span>LIKE IT</span></a></li>
												<li><a href="#"><i class="fa fa-exchange"></i><span>COMPARE</span></a></li>
												<li><a href="#" class="js__popup_open" data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
											</ul>
											<a href="#" class="add_to_cart_button">Add to cart</a>
										</div>
										<a href="#" class="content">
											<h2 class="title">Sunshine In My Soul</h2>
											<span class="category">Women</span>
											<span class="price">
												<span class="amount">$49.00</span>
											</span>
										</a>
									</div>
								</div><!-- product -->
								<div class="slick-slide">
									<div class="product-grid with-timer">
										<div class="thumb">
											<a href="#"><img src="http://placehold.it/270x350" alt=""></a>
											<ul class="controls">
												<li><a href="#"><i class="fa fa-heart"></i><span>LIKE IT</span></a></li>
												<li><a href="#"><i class="fa fa-exchange"></i><span>COMPARE</span></a></li>
												<li><a href="#" class="js__popup_open" data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
											</ul>
											<div id="countbox_1" class="js__count_down_box timer-view" data-date-now="07/07/16 11:53:25 PM" data-date-then="07/12/16 09:59:00 PM"></div>
											<a href="#" class="add_to_cart_button">Add to cart</a>
										</div>
										<a href="#" class="content">
											<h2 class="title">Grey Sweater</h2>
											<span class="category">Women</span>
											<span class="price">
												<del><span class="amount">$60.00</span></del>
												<ins><span class="amount">$49.00</span></ins>
											</span>
										</a>
									</div>
								</div><!-- product -->
								<div class="slick-slide">
									<div class="product-grid">
										<div class="thumb">
											<a href="#"><img src="http://placehold.it/270x350" alt=""></a>
											<ul class="controls">
												<li><a href="#"><i class="fa fa-heart"></i><span>LIKE IT</span></a></li>
												<li><a href="#"><i class="fa fa-exchange"></i><span>COMPARE</span></a></li>
												<li><a href="#" class="js__popup_open" data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
											</ul>
											<a href="#" class="add_to_cart_button">Add to cart</a>
										</div>
										<a href="#" class="content">
											<h2 class="title">Amaza Kid</h2>
											<span class="category">Men</span>
											<span class="price">
												<span class="amount">$49.00</span>
											</span>
										</a>
									</div>
								</div><!-- product -->
								<div class="slick-slide">
									<div class="product-grid">
										<div class="thumb">
											<a href="#"><img src="http://placehold.it/270x350" alt=""></a>
											<ul class="controls">
												<li><a href="#"><i class="fa fa-heart"></i><span>LIKE IT</span></a></li>
												<li><a href="#"><i class="fa fa-exchange"></i><span>COMPARE</span></a></li>
												<li><a href="#" class="js__popup_open" data-target="#quickViewPopup"><i class="fa fa-arrows-alt"></i><span>QUICK VIEW</span></a></li>
											</ul>
											<a href="#" class="add_to_cart_button">Add to cart</a>
										</div>
										<a href="#" class="content">
											<h2 class="title">Men Summer</h2>
											<span class="category">Men</span>
											<span class="price">
												<span class="amount">$49.00</span>
											</span>
										</a>
									</div>
								</div><!-- product -->
							</div><!-- .products -->		
						</div><!-- .slick-wrap -->		
					</div><!-- col -->
				</div><!-- .row -->
			</div><!-- col -->
		</div><!-- .row -->
	</div><!-- .container -->
	
