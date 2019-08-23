<div class="section-common container">
    <form action="#" class="checkout woocommerce-checkout">
        <div class="row">
            <div class="col-md-8 col-xs-12 section-last">
                <div class="woocommerce-billing-fields">
                    <h2 class="section-title small-spacing">Регистрациия</h2>
                    <div class="clear"></div>
                    <div class="row">

                        <div class="col-sm-6">
                            <p class="form-row form-row-input">
                                <label for="first-name">First Name <span class="required">*</span></label>
                                <input class="input-text input-text-common" type="text" name="first-name"
                                    id="first-name">
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="form-row form-row-input">
                                <label for="last-name">Last Name <span class="required">*</span></label>
                                <input class="input-text input-text-common" type="text" name="last-name" id="last-name">
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="form-row form-row-input">
                                <label for="email-address">Email Address <span class="required">*</span></label>
                                <input class="input-text input-text-common" type="email" name="email-address"
                                    id="email-address">
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="form-row form-row-input">
                                <label for="phone-number">Phone Number <span class="required">*</span></label>
                                <input class="input-text input-text-common" type="tel" name="phone-number"
                                    id="phone-number">
                            </p>
                        </div>


                    </div><!-- .row -->
                </div><!-- .woocommerce-billing-fields -->
                <div class="woocommerce-shipping-fields js__toggle_slide">
                    <div class="tick-box-list">
                        <label class="radio-box-common js__toggle_slide_control" data-target="#shipping-fields">
                            <input class="input-radio" type="radio" name="tickbox-1" /><span class="lbl">shipping to
                                another address</span>
                        </label>
                        <label class="radio-box-common js__toggle_slide_control" data-target="#create-account">
                            <input class="input-radio" type="radio" name="tickbox-1" /><span class="lbl">Create an
                                account?</span>
                        </label>
                    </div>
                    <div id="shipping-fields" class="display-none js__toggle_slide_content">
                        <h2 class="section-title small-spacing">Shipping Infomation</h2>
                        <div class="clear"></div>
                        <div class="row">

                            <div class="col-sm-6">
                                <p class="form-row form-row-input">
                                    <label for="shipping-first-name">First Name <span class="required">*</span></label>
                                    <input class="input-text input-text-common" type="text" name="shipping-first-name"
                                        id="shipping-first-name">
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p class="form-row form-row-input">
                                    <label for="shipping-last-name">Last Name <span class="required">*</span></label>
                                    <input class="input-text input-text-common" type="text" name="shipping-last-name"
                                        id="shipping-last-name">
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p class="form-row form-row-input">
                                    <label for="shipping-email-address">Email Address <span
                                            class="required">*</span></label>
                                    <input class="input-text input-text-common" type="email"
                                        name="shipping-email-address" id="shipping-email-address">
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p class="form-row form-row-input">
                                    <label for="shipping-phone-number">Phone Number <span
                                            class="required">*</span></label>
                                    <input class="input-text input-text-common" type="tel" name="shipping-phone-number"
                                        id="shipping-phone-number">
                                </p>
                            </div>

                            <div class="col-sm-12">
                                <p class="form-row form-row-input">
                                    <label for="shipping-address">Address <span class="required">*</span></label>
                                    <input class="input-text input-text-common" type="text" name="shipping-address"
                                        id="shipping-address">
                                </p>
                            </div>
                            <div class="col-sm-12">
                                <p class="form-row form-row-input">
                                    <label for="shipping-city">Town / City <span class="required">*</span></label>
                                    <span class="select-common">
                                        <select name="shipping-city" id="shipping-city" class="js__select2"
                                            data-placeholder="Please Select">
                                            <option value="" label="City"></option>
                                            <option value="England">Ha Noi</option>
                                            <option value="London">London</option>
                                            <option value="New York">New York</option>
                                            <option value="Tokyo">Tokyo</option>
                                        </select>
                                    </span>
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p class="form-row form-row-input">
                                    <label for="shipping-state">State <span class="required">*</span></label>
                                    <input class="input-text input-text-common" type="text" name="shipping-state"
                                        id="shipping-state">
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p class="form-row form-row-input">
                                    <label for="shipping-zip-code">Zip / Postal Code <span
                                            class="required">*</span></label>
                                    <input class="input-text input-text-common" type="text" name="shipping-zip-code"
                                        id="shipping-zip-code">
                                </p>
                            </div>
                        </div><!-- .row -->
                    </div><!-- #shipping-fields -->
                    <div id="create-account" class="display-none js__toggle_slide_content">
                        <h2 class="section-title small-spacing">YOUR PERSONAL INFORMATION</h2>
                        <div class="clear"></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <p class="form-row form-row-input">
                                    <label for="account-first-name">First Name <span class="required">*</span></label>
                                    <input class="input-text input-text-common" type="text" name="account-first-name"
                                        id="account-first-name">
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p class="form-row form-row-input">
                                    <label for="account-last-name">Last Name <span class="required">*</span></label>
                                    <input class="input-text input-text-common" type="text" name="account-last-name"
                                        id="account-last-name">
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p class="form-row form-row-input">
                                    <label for="account-email-address">Email Address <span
                                            class="required">*</span></label>
                                    <input class="input-text input-text-common" type="email"
                                        name="account-email-address" id="account-email-address">
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <p class="form-row form-row-input">
                                    <label for="account-password">Password Number <span
                                            class="required">*</span></label>
                                    <input class="input-text input-text-common" type="password" name="account-password"
                                        id="account-password">
                                </p>
                            </div>
                            <div class="col-sm-6 col-ip-6 col-xs-12">
                                <p class="form-row form-row-link">
                                    <a href="shop-grid.html" class="back-link">Return to shop</a>
                                </p>
                            </div>
                            <div class="col-sm-6 col-ip-6 pull-left">
                                <p class="form-row form-row-button pull-right">
                                    <input type="button" class="button-black btn-create-account"
                                        value="Create an account" />
                                </p>
                            </div>
                        </div><!-- .row -->
                    </div><!-- #create-account -->
                    <h2 class="section-title small-spacing">additional notes</h2>
                    <div class="clear"></div>
                    <p class="form-row form-control-row">
                        <textarea name="order_comments" class="input-text input-text-common"
                            id="shipping-order_comments" placeholder="Add notes about your order" rows="2"
                            cols="5"></textarea>
                    </p>
                </div><!-- .woocommerce-shipping-fields -->
            </div><!-- .col -->
           
        </div><!-- .row -->
    </form><!-- .woocommerce-checkout -->
</div><!-- .container -->


<div class="section-common section-subscribe fixed-wrapper">
    <div class="background js__background_image js__parallax" data-background-image="url(http://placehold.it/1920x1280">
    </div>
    <div class="container">
        <form action="#" class="subscribe-form">
            <h2 class="section-title">Subscribe</h2>
            <div class="clear"></div>
            <p>Get the last news & promotion program from us</p>
            <div class="inp-controls">
                <input type="email" class="inp-email" placeholder="ENTER YOUR EMAIL">
                <button type="button" class="btn-submit"><span>SUBSCRIBE</span><i
                        class="fa fa-long-arrow-right"></i></button>
            </div>
        </form><!-- .subscribe-form -->
    </div><!-- .container -->
</div><!-- .section-subscribe -->

<footer class="footer">
    <div class="container">
        <div class="top">
            <div class="row">
                <div class="col-md-2 col-sm-4">
                    <div class="widget widget_nav_menu">
                        <h3 class="title">Help</h3>
                        <ul class="menu">
                            <li><a href="#">Track order</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Refunds</a></li>
                            <li><a href="#">Support Online</a></li>
                        </ul>
                    </div>
                </div><!-- col -->
                <div class="col-md-2 col-sm-4">
                    <div class="widget widget_nav_menu">
                        <h3 class="title">Account</h3>
                        <ul class="menu">
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Order history</a></li>
                            <li><a href="#">My Favorites</a></li>
                            <li><a href="#">Gift Vouchers</a></li>
                            <li><a href="#">Specials</a></li>
                        </ul>
                    </div>
                </div><!-- col -->
                <div class="col-md-2 col-sm-4">
                    <div class="widget widget_nav_menu">
                        <h3 class="title">Quick Links</h3>
                        <ul class="menu">
                            <li><a href="#">Best Sellers</a></li>
                            <li><a href="#">Featured Products</a></li>
                            <li><a href="#">Hot Products</a></li>
                            <li><a href="#">Top Rated</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div><!-- col -->
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget_text">
                        <h3 class="title">Contact Us</h3>
                        <p>Please feed free to contact us if you have any question.</p>
                        <ul class="contact-list">
                            <li><a href="mailto:sale@amaza.com"><i class="fa fa-envelope-o"></i>sale@amaza.com</a></li>
                            <li><a href="tel:064888999123"><i class="fa fa-phone"></i>+64 888 999 123</a></li>
                            <li><i class="fa fa-map-marker"></i>22 Baywater Dr, Wentworth Point<br>Australia, WP 2127
                            </li>
                        </ul>
                    </div>
                </div><!-- col -->
                <div class="col-md-3 col-sm-6">
                    <div class="widget widget_subscribe">
                        <h3 class="title">Newsletter Signup</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore.</p>
                        <form action="#" class="join-form">
                            <div class="form-controls">
                                <input type="email" placeholder="Enter your email" class="inp-email">
                                <input type="submit" value="Join" class="inp-submit">
                                <i>We respect your privac</i>
                            </div>
                        </form>
                        <ul class="social-list">
                            <li><a href="#" class="fa fa-twitter"></a></li>
                            <li><a href="#" class="fa fa-facebook"></a></li>
                            <li><a href="#" class="fa fa-google-plus"></a></li>
                            <li><a href="#" class="fa fa-linkedin"></a></li>
                            <li><a href="#" class="fa fa-vimeo"></a></li>
                            <li><a href="#" class="fa fa-pinterest-p"></a></li>
                        </ul>
                    </div>
                </div><!-- col -->
            </div><!-- .row -->
        </div><!-- .top -->
    </div><!-- .container -->
    <div class="bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="copyright">Made with love <i class="fa fa-heart"></i> 2016 <a href="#">Amaza.</a>
                        Designed by <a href="#">NinjaTeam</a></div>
                </div><!-- col -->
                <div class="col-sm-6">
                    <ul class="payment-list">
                        <li><a href="#"><img src="assets/images/payment1.jpg" alt=""></a></li>
                        <li><a href="#"><img src="assets/images/payment2.jpg" alt=""></a></li>
                        <li><a href="#"><img src="assets/images/payment3.jpg" alt=""></a></li>
                        <li><a href="#"><img src="assets/images/payment4.jpg" alt=""></a></li>
                        <li><a href="#"><img src="assets/images/payment5.jpg" alt=""></a></li>
                        <li><a href="#"><img src="assets/images/payment6.jpg" alt=""></a></li>
                    </ul>
                </div><!-- col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .bottom -->
</footer>
<!--/.footer -->
</div>
<!--/#wrapper -->