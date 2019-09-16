<div class="section-common container">
		<div  class="checkout woocommerce-checkout">
			<div class="row">
				<div class="col-md-8 col-xs-12 section-last">
					<div class="woocommerce-billing-fields">
						<h2 class="section-title small-spacing">Billing Infomation</h2>
						<div class="clear"></div>
						<div class="row">
							<div class="col-sm-12">
								<p class="form-row form-row-input">
									<label for="company-name">Company Name</label>
									<input class="input-text input-text-common" type="text" name="company-name" id="company-name">
								</p>
							</div>
							<div class="col-sm-6">
								<p class="form-row form-row-input">
									<label for="first-name">First Name <span class="required">*</span></label>
									<input class="input-text input-text-common" type="text" name="first-name" id="first-name">
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
									<input class="input-text input-text-common" type="email" name="email-address" id="email-address">
								</p>
							</div>
							<div class="col-sm-6">
								<p class="form-row form-row-input">
									<label for="phone-number">Phone Number <span class="required">*</span></label>
									<input class="input-text input-text-common" type="tel" name="phone-number" id="phone-number">
								</p>
							</div>
							<div class="col-sm-12">
								<p class="form-row form-row-input">
									<label for="country">Перевозчик <span class="required">*</span></label>
									<span class="select-common">
										<select  name="country" id="delivery2" class="js__select2" data-placeholder="Please Select">
                                            <option value="" label="Country"></option>
                                            <option value="Новая Почта">Новая Почта</option>
                                            <option value="Деливери">Деливери</option>

											
										</select>
									</span>
								</p>
                            </div>

                            <div class="col-sm-12">
								<p class="form-row form-row-input">
									<label for="country">Область <span class="required">*</span></label>
									<span class="select-common">
										<select  name="country" id="obl" class="js__select2" data-placeholder="Please Select">
                                            <option value="" label="Country"></option>

											
										</select>
									</span>
								</p>
                            </div>

                            <div class="col-sm-12">
								<p class="form-row form-row-input">
                                    <label for="country">Город <span class="required">*</span></label>
                                    
                            <input class="input-text input-text-common" id='input-lists' list="browsers" name="browser">
                                <datalist id="browsers">
                                   
                                </datalist>
                                </p>
                            </div>

							<div class="col-sm-12">
								<p class="form-row form-row-input">
									<label for="country">Отделение <span class="required">*</span></label>
									<span class="select-common">
										<select name="country" id="otdelenie" class="js__select2" data-placeholder="Please Select">
											<option value="" label="Country"></option>
											
										</select>
									</span>
								</p>
                            </div>

							<div class="col-sm-12">
								<p class="form-row form-row-input">
									<label for="address">Address <span class="required">*</span></label>
									<input class="input-text input-text-common" type="text" name="address" id="address">
								</p>
							</div>
							<div class="col-sm-12">
								<p class="form-row form-row-input">
									<label for="city">Town / City <span class="required">*</span></label>
									<span class="select-common">
										<select name="city" id="city" class="js__select2" data-placeholder="Please Select">
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
									<label for="state">State <span class="required">*</span></label>
									<input class="input-text input-text-common" type="text" name="state" id="state">
								</p>
							</div>
							<div class="col-sm-6">
								<p class="form-row form-row-input">
									<label for="zip-code">Zip / Postal Code <span class="required">*</span></label>
									<input class="input-text input-text-common" type="text" name="zip-code" id="zip-code">
								</p>
							</div>
						</div><!-- .row -->
					</div><!-- .woocommerce-billing-fields -->
					<div class="woocommerce-shipping-fields js__toggle_slide">
						<div class="tick-box-list">
							<label class="radio-box-common js__toggle_slide_control" data-target="#shipping-fields">
								<input class="input-radio" type="radio" name="tickbox-1" /><span class="lbl">shipping to another address</span>
							</label>
							<label class="radio-box-common js__toggle_slide_control" data-target="#create-account">
								<input class="input-radio" type="radio" name="tickbox-1" /><span class="lbl">Create an account?</span>
							</label>
						</div>
						<div id="shipping-fields" class="display-none js__toggle_slide_content">
							<h2 class="section-title small-spacing">Shipping Infomation</h2>
							<div class="clear"></div>
							<div class="row">
								<div class="col-sm-12">
									<p class="form-row form-row-input">
										<label for="shipping-company-name">Company Name</label>
										<input class="input-text input-text-common" type="text" name="shipping-company-name" id="shipping-company-name">
									</p>
								</div>
								<div class="col-sm-6">
									<p class="form-row form-row-input">
										<label for="shipping-first-name">First Name <span class="required">*</span></label>
										<input class="input-text input-text-common" type="text" name="shipping-first-name" id="shipping-first-name">
									</p>
								</div>
								<div class="col-sm-6">
									<p class="form-row form-row-input">
										<label for="shipping-last-name">Last Name <span class="required">*</span></label>
										<input class="input-text input-text-common" type="text" name="shipping-last-name" id="shipping-last-name">
									</p>
								</div>
								<div class="col-sm-6">
									<p class="form-row form-row-input">
										<label for="shipping-email-address">Email Address <span class="required">*</span></label>
										<input class="input-text input-text-common" type="email" name="shipping-email-address" id="shipping-email-address">
									</p>
								</div>
								<div class="col-sm-6">
									<p class="form-row form-row-input">
										<label for="shipping-phone-number">Phone Number <span class="required">*</span></label>
										<input class="input-text input-text-common" type="tel" name="shipping-phone-number" id="shipping-phone-number">
									</p>
								</div>
								<div class="col-sm-12">
									<p class="form-row form-row-input">
										<label for="shipping-country">Country <span class="required">*</span></label>
										<span class="select-common">
											<select name="shipping-country" id="shipping-country" class="js__select2" data-placeholder="Please Select">
												<option value="" label="Country"></option>
												<option value="American">American</option>
												<option value="Campuchia">Campuchia</option>
												<option value="England">England</option>
												<option value="Japan">Japan</option>
												<option value="Laos">Laos</option>
												<option value="Thailand">Thailand</option>
												<option value="Viet nam">VietNam</option>
											</select>
										</span>
									</p>
								</div>
								<div class="col-sm-12">
									<p class="form-row form-row-input">
										<label for="shipping-address">Address <span class="required">*</span></label>
										<input class="input-text input-text-common" type="text" name="shipping-address" id="shipping-address">
									</p>
								</div>
								<div class="col-sm-12">
									<p class="form-row form-row-input">
										<label for="shipping-city">Town / City <span class="required">*</span></label>
										<span class="select-common">
											<select name="shipping-city" id="shipping-city" class="js__select2" data-placeholder="Please Select">
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
										<input class="input-text input-text-common" type="text" name="shipping-state" id="shipping-state">
									</p>
								</div>
								<div class="col-sm-6">
									<p class="form-row form-row-input">
										<label for="shipping-zip-code">Zip / Postal Code <span class="required">*</span></label>
										<input class="input-text input-text-common" type="text" name="shipping-zip-code" id="shipping-zip-code">
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
										<input class="input-text input-text-common" type="text" name="account-first-name" id="account-first-name">
									</p>
								</div>
								<div class="col-sm-6">
									<p class="form-row form-row-input">
										<label for="account-last-name">Last Name <span class="required">*</span></label>
										<input class="input-text input-text-common" type="text" name="account-last-name" id="account-last-name">
									</p>
								</div>
								<div class="col-sm-6">
									<p class="form-row form-row-input">
										<label for="account-email-address">Email Address <span class="required">*</span></label>
										<input class="input-text input-text-common" type="email" name="account-email-address" id="account-email-address">
									</p>
								</div>
								<div class="col-sm-6">
									<p class="form-row form-row-input">
										<label for="account-password">Password Number <span class="required">*</span></label>
										<input class="input-text input-text-common" type="password" name="account-password" id="account-password">
									</p>
								</div>
								<div class="col-sm-6 col-ip-6 col-xs-12">
									<p class="form-row form-row-link">
										<a href="shop-grid.html" class="back-link">Return to shop</a>
									</p>
								</div>
								<div class="col-sm-6 col-ip-6 pull-left">
									<p class="form-row form-row-button pull-right">
										<input type="button" class="button-black btn-create-account" value="Create an account" />
									</p>
								</div>
							</div><!-- .row -->
						</div><!-- #create-account -->
						<h2 class="section-title small-spacing">additional notes</h2>
						<div class="clear"></div>
						<p class="form-row form-control-row">
							<textarea name="order_comments" class="input-text input-text-common" id="shipping-order_comments" placeholder="Add notes about your order" rows="2" cols="5"></textarea>
						</p>
					</div><!-- .woocommerce-shipping-fields -->
				</div><!-- .col -->
				<div class="col-md-4 col-xs-12 section-last">
					<h2 id="order_review_heading" class="section-title small-spacing">Your Order</h2>
					<div class="clear"></div>
					<div id="order_review" class="woocommerce-checkout-review-order">
						<table class="shop_table woocommerce-checkout-review-order-table">
							<thead>
								<tr>
									<th class="product-name">Product</th>
									<th class="product-total">Total</th>
								</tr>
							</thead>
							<tbody>
								<tr class="cart_item">
									<td class="product-name">Adios Fashion Girl</td>
									<td class="product-total"> <span class="amount">$98.00</span> </td>
								</tr>
								<tr class="cart_item">
									<td class="product-name">Grey Sweater</td>
									<td class="product-total"> <span class="amount">$15.30</span> </td>
								</tr>
								<tr class="cart_item">
									<td class="product-name">Spring Fashion Girl Kid</td>
									<td class="product-total"> <span class="amount">$9.00</span> </td>
								</tr>
							</tbody>
							<tfoot>
								<tr class="cart-subtotal">
									<td>Subtotal products</td>
									<th><span class="amount">$122.30</span></th>
								</tr>
								<tr class="cart-shipping">
									<td>Shipping</td>
									<th><span class="amount">$0.00</span></th>
								</tr>
								<tr class="cart-tax">
									<td>Tax</td>
									<th><span class="amount">$0.00</span></th>
								</tr>
								<tr class="order-total">
									<td>Grand Total</td>
									<th><strong><span class="amount">$122.30</span></strong> </th>
								</tr>
							</tfoot>
						</table>
						
						<div id="payment" class="woocommerce-checkout-payment">
							<ul class="wc_payment_methods">
								<li class="wc_payment_method">
									<input id="payment_method_direct" type="radio" checked="checked" name="payment_method" value="direct-bank">
									<label for="payment_method_direct">Direct Bank Transfer</label> 
									<div class="payment_box">
										<p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
									</div>
								</li>
								<li class="wc_payment_method">
									<input id="payment_method_cheque" type="radio" name="payment_method" value="cheque">
									<label for="payment_method_cheque"> Cheque Payment </label> 
									<div class="payment_box">
										<p>Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
									</div>
								</li>
								<li class="wc_payment_method">
									<input id="payment_method_cash" type="radio" name="payment_method" value="cash">
									<label for="payment_method_cash"> Cash On Delivery </label> 
									<div class="payment_box">
										<p>Pay with cash or check upon delivery.</p>
									</div>
								</li>
								<li class="wc_payment_method">
									<input id="payment_method_paypal" type="radio" class="input-radio" name="payment_method" value="paypal">
									<label for="payment_method_paypal">PayPal<img src="assets/images/paypal-banner.png" alt="" /><a href="#" class="about_paypal" title="What is PayPal">What is PayPal?</a></label> 
									<div class="payment_box">
										<p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
									</div>
								</li>
							</ul>
						</div><!-- #payment -->
						
						<div class="form-row place-order">
							<input type="submit" class="button-green btn-place-order" id="place_order" value="Place your order" data-value="Place order">
						</div>
						
					</div><!-- #order_review -->
				</div><!-- .col -->
			</div><!-- .row -->
</div><!-- .woocommerce-checkout -->
	</div><!-- .container -->