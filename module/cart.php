<?php
	if($_REQUEST['product_id']){
		$cartQuantity = $_REQUEST['quantity'] ? $_REQUEST['quantity'] : 1;
		$cartProduct = $_REQUEST['product_id'];
		if($_SESSION['cart'][$cartProduct]){
			$_SESSION['cart'][$cartProduct] += $cartQuantity;
		}
		else{
			$_SESSION['cart'][$cartProduct] += $cartQuantity;
		}
	    header('location:'.$urlFontEnd.'cart');

	    //khi header duoi localhost ko chay xai do cai nay =))
	    $gotourl = $urlFontEnd.'cart';
	    echo '<a id="goto"  href="'.$gotourl.'"></a>';
	    ?>
	     <script>
	        document.getElementById('goto').click();
	    </script>
	    <?php
	}
	elseif($_REQUEST['action'] =='delete' && $_REQUEST['product_delete']){
	    unset($_SESSION['cart'][$_REQUEST['product_delete']]);
	    header('location:'.$urlFontEnd.'cart');

	    //khi header duoi localhost ko chay xai do cai nay =))
	    $gotourl = $urlFontEnd.'cart';
	    echo '<a id="goto"  href="'.$gotourl.'"></a>';
	    ?>
	     <script>
	        document.getElementById('goto').click();
	    </script>
	    <?php
	}


	if($_SESSION['cart']){
		foreach ($_SESSION['cart'] as $product_id=>$quantity) {
			$productSingle = $queryObj->queryDBFirst("SELECT * FROM product where product_id = ".$product_id);
			$listCart .= 	'
							<tr>
                                <td>
                                    <a href="'.$urlFontEnd.'product_single/'.$productSingle['product_url'].'"><img src="'.$urlFontEnd.'resource/image_product/'.$productSingle['product_images'].'" alt="Cart Product Image" title="Cas Meque Metus" class="img-thumbnail"></a>
                                </td>
                                <td>
                                    <a href="'.$urlFontEnd.'product_single/'.$productSingle['product_url'].'">'.$productSingle['product_name'].'</a>
                                    <span>Delivery Date: 2018-04-22</span>
                                </td>
                                <td>
                                    <div class="input-group btn-block">
                                        <input type="text" name="quantity" value="'.$quantity.'" size="1" class="form-control">
                                        <span class="input-group-btn">
                                            <button type="submit" data-toggle="tooltip" data-direction="top" class="btn btn-primary" data-original-title="Update"><i class="fa fa-refresh"></i></button>
                                            <button type="button" data-toggle="tooltip" data-direction="top" class="btn btn-danger pull-right" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
                                        </span>
                                    </div>
                                </td>
                                <td>$'.$productSingle['product_price'].'.00</td>
                                <td>$'.$productSingle['product_price']*$quantity.'.00</td>
                            </tr>
	                        ';
		}
	}
?>
        <!-- Start of Breadcrumbs -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="<?php echo $urlFontEnd.'home'; ?>">Home</a>
                            <span class="breadcrumb-item active">Shopping Cart</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->

        <!-- Start of Main Content Wrapper -->
        <div id="content" class="main-content-wrapper">
            
            <!-- Start of Shopping Cart Wrapper -->
            <div class="shopping-cart-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <main id="primary" class="site-main">
                                <div class="shopping-cart">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="section-title left-aligned with-border">
                                                <h2>Shopping Cart</h2>
                                            </div>

                                            <form action="#">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <td>Image</td>
                                                                <td>Product Name</td>
                                                                <td>Quantity</td>
                                                                <td>Unit Price</td>
                                                                <td>Total</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php echo $listCart;?>
	
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </form>

                                            <div class="cart-accordion-wrapper mt-full">
                                                <h2>What would you like to do next?</h2>
                                                <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
                                                <div id="cart_accordion" class="mt-4" role="tablist">
                                                    <div class="card">
                                                        <div class="card-header" role="tab" id="headingCoupon">
                                                            <h4 class="mb-0">
                                                                <a data-toggle="collapse" href="#collapseCoupon" aria-expanded="false" aria-controls="collapseCoupon">Use Coupon Code<i class="ion ion-ios-arrow-down"></i></a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapseCoupon" class="collapse" role="tabpanel" aria-labelledby="headingCoupon" data-parent="#cart_accordion">
                                                            <div class="card-body">
                                                                <div class="input-group">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-coupon">Enter your coupon here</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <div class="input-group">
                                                                        <input type="text" name="coupon" value="" placeholder="Enter your coupon here" id="input-coupon" class="form-control">
                                                                        <input type="button" value="Apply Coupon" id="button-coupon" class="btn btn-secondary">
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" role="tab" id="headingTax">
                                                            <h4 class="mb-0">
                                                                <a class="collapsed" data-toggle="collapse" href="#collapseTax" aria-expanded="false" aria-controls="collapseTax">Estimate Shipping &amp; Taxes<i class="ion ion-ios-arrow-down"></i></a>
                                                              </h4>
                                                        </div>
                                                        <div id="collapseTax" class="collapse" role="tabpanel" aria-labelledby="headingTax" data-parent="#cart_accordion">
                                                            <div class="card-body">
                                                                <p>Enter your destination to get a shipping estimate.</p>
                                                                <div class="input-group form-group">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-country"><span class="text-danger">*</span> Country</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <select name="country_id" id="input-country" class="form-control nice-select">
                                                                            <option value=""> --- Please Select --- </option>
                                                                            <option value="">Argentina</option>
                                                                            <option value="">Bangladesh</option>
                                                                            <option value="">Belgium</option>
                                                                            <option value="">Brazil</option>
                                                                            <option value="">Germany</option>
                                                                            <option value="">India</option>
                                                                            <option value="">United Kingdom</option>
                                                                            <option value="">United States</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="input-group form-group">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-zone"><span class="text-danger">*</span> Region / State</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <select name="zone_id" id="input-zone" class="form-control nice-select">
                                                                            <option value=""> --- Please Select --- </option>
                                                                            <option value="">Alabama</option>
                                                                            <option value="">Arizona</option>
                                                                            <option value="">California</option>
                                                                            <option value="">Florida</option>
                                                                            <option value="">Newyork</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="input-group form-group mb-5">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-postcode"><span class="text-danger">*</span> Post Code</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control mb-0">
                                                                    </div>
                                                                </div>
                                                                <button type="button" id="button-quote" class="btn btn-secondary">Get Quotes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card">
                                                        <div class="card-header" role="tab" id="headingGift">
                                                            <h4 class="mb-0">
                                                                <a class="collapsed" data-toggle="collapse" href="#collapseGift" aria-expanded="false" aria-controls="collapseGift">Use Gift Certificate<i class="ion ion-ios-arrow-down"></i></a>
                                                              </h4>
                                                        </div>
                                                        <div id="collapseGift" class="collapse" role="tabpanel" aria-labelledby="headingGift" data-parent="#cart_accordion">
                                                            <div class="card-body">
                                                                <div class="input-group">
                                                                    <label class="col-12 col-sm-12 col-md-3" for="input-voucher">Enter your gift certificate code here</label>
                                                                    <div class="col-12 col-sm-12 col-md-9">
                                                                        <div class="input-group">
                                                                            <input type="text" name="voucher" value="" placeholder="Enter your gift certificate code here" id="input-voucher" class="form-control">
                                                                            <input type="button" value="Apply Gift Certificate" id="button-boucher" class="btn btn-secondary">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="cart-amount-wrapper">
                                                <div class="row">
                                                    <div class="col-12 col-sm-12 col-md-4 offset-md-8">
                                                        <table class="table table-bordered">
                                                            <tbody>
                                                                <tr>
                                                                    <td><strong>Sub-Total:</strong></td>
                                                                    <td>$860.00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><strong>Total:</strong></td>
                                                                    <td><span class="primary-color">$860.00</span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="cart-button-wrapper d-flex justify-content-between mt-4">
                                                <a href="shop-list.html" class="btn btn-secondary">Continue Shopping</a>
                                                <a href="checkout.html" class="btn btn-secondary align-self-end">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end of shopping-cart -->
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Shopping Cart Wrapper -->

            <!-- Start of Newsletter Section -->
            <section class="newsletter-section vpadding bgc-offset">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-7">
                            <div class="newsletter-title d-lg-flex justify-content-lg-start">
                                <h6>Subscribe to our Newsletter</h6>
                                <h3>Subscribe to our newsletter and know first about all the promotions and discounts. Be always trendy.</h3>
                            </div>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5">
                            <div class="newsletter-form-wrapper">
                                <form action="http://d29u17ylf1ylz9.cloudfront.net/ororus-v1/index.html" method="post">
                                    <input type="email" name="email" placeholder="Enter you email address here..." value="" required> 
                                    <input type="submit" class="default-btn" name="contact" value="Subscribe">
                                </form>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of Newsletter Section -->
        </div>
        <!-- End of Main Content Wrapper -->