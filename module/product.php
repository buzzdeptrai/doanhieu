<?php
    $allProduct = $queryObj->queryDB("SELECT * FROM product");
    $htmlListProduct = '';
    if($allProduct){
        foreach ($allProduct as $itemProduct) {
            $htmlListProduct .= '
                            <div class="product-layout product-grid col-6 col-sm-6 col-md-4 col-lg-4">
                                <div class="product-thumb">
                                    <div class="product-inner">
                                        <div class="product-image">
                                            <div class="label-product label-new">New</div>
                                            <a href="'.$urlFontEnd.'product_single/'.$itemProduct['product_url'].'">
                                                <img src="'.$urlFontEnd.'resource/image_product/'.$itemProduct['product_images'].'" alt="Proin Lectus Ipsum" class="hover-image">
                                                <img src="'.$urlFontEnd.'resource/image_product/'.$itemProduct['product_images'].'" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                            </a>
                                            <div class="action-links">
                                                <a class="action-btn btn-cart" href="'.$urlFontEnd.'cart/?product_id='.$itemProduct['product_id'].'" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                            </div>
                                        </div> <!-- end of product-image -->

                                        <div class="product-caption">
                                            <div class="product-ratings">
                                                <div class="rating-box">
                                                    <ul class="rating d-flex">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <h4 class="product-name"><a href="'.$urlFontEnd.'product_single/'.$itemProduct['product_url'].'">'.$itemProduct['product_name'].'</a></h4>
                                            <p class="product-price">
                                                <span class="price-old">$330.00</span>
                                                <span class="price-new">$'.$itemProduct['product_price'].'</span>
                                            </p>
                                        </div><!-- end of product-caption -->
                                    </div><!-- end of product-inner -->
                                </div><!-- end of product-thumb -->
                            </div> <!-- end of product-layout -->';
  
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
                            <span class="breadcrumb-item active">Shop</span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->

        <!-- Start of Main Content Wrapper -->
        <div id="content" class="main-content-wrapper">
            
            <!-- Start of Shop Products Wrapper -->
            <div class="shop-products-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-9 order-1 order-md-1 order-lg-2">
                            <main id="primary" class="site-main">
                                <div class="shop-wrapper">
                                   <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="shop-toolbar">
                                                <div class="toolbar-inner">
                                                    <div class="product-view-mode">
                                                        <ul role="tablist" class="nav shop-item-filter-list">
                                                            <li role="presentation" class="active"><a href="#grid" aria-controls="grid" role="tab" data-toggle="tab" class="active show" aria-selected="true"><i class="ion-md-grid"></i></a></li>
                                                            <li role="presentation"><a href="#list" aria-controls="list" role="tab" data-toggle="tab"><i class="ion-md-list"></i></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="toolbar-amount">
                                                        <span>Showing 10 to 18 of 27</span>
                                                    </div>
                                                </div>
                                                <div class="product-select-box">
                                                    <div class="product-show">
                                                        <p>Show:</p>
                                                        <select class="nice-select" name="showing">
                                                            <option value="1">8</option>
                                                            <option value="2">12</option>
                                                            <option value="3">16</option>
                                                            <option value="4">20</option>
                                                            <option value="5">24</option>
                                                        </select>
                                                    </div>
                                                    <div class="product-sort">
                                                        <p>Sort By:</p>
                                                        <select class="nice-select" name="sortby">
                                                            <option value="trending">Default</option>
                                                            <option value="sales">Name (A - Z)</option>
                                                            <option value="sales">Name (Z - A)</option>
                                                            <option value="rating">Price (Low > High)</option>
                                                            <option value="date">Rating (Lowest)</option>
                                                            <option value="price-asc">Model (A - Z)</option>
                                                            <option value="price-asc">Model (Z - A)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end of row -->

                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="shop-products-wrapper">
                                                <div class="tab-content">
                                                    <div id="grid" class="tab-pane fade active show" role="tabpanel">
                                                        <div class="row">
                                                            <?php echo $htmlListProduct;?>

                                                           
                                                        </div>
                                                    </div>
                                                    <div id="list" class="tab-pane fade" role="tabpanel">
                                                        <div class="row">
                                                            <div class="col-12 col-sm-12 col-md-12">
                                                                <div class="product-layout product-list">
                                                                    <div class="product-thumb">
                                                                        <div class="product-inner media align-items-center">
                                                                            <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
                                                                                <div class="label-product label-new">New</div>
                                                                                <a href="single-product.html">
                                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/single/product-shop-1-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/single/product-shop-1-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                                </a>
                                                                                <div class="action-links">
                                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                                </div>
                                                                            </div> <!-- end of product-image -->

                                                                            <div class="product-caption media-body">
                                                                                <div class="product-ratings">
                                                                                    <div class="rating-box">
                                                                                        <ul class="rating d-flex justify-content-md-start">
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <h4 class="product-name"><a href="single-product.html">Accumsan Elit</a></h4>
                                                                                <p class="product-price">
                                                                                    <span class="price-old">$330.00</span>
                                                                                    <span class="price-new">$120.00</span>
                                                                                </p>
                                                                                <p class="product-des">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</p>
                                                                            </div><!-- end of product-caption -->
                                                                        </div><!-- end of product-inner -->
                                                                    </div><!-- end of product-thumb -->
                                                                </div> <!-- end of product-layout -->

                                                                <div class="product-layout product-list">
                                                                    <div class="product-thumb">
                                                                        <div class="product-inner media align-items-center">
                                                                            <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
                                                                                <div class="label-product label-sale">-64%</div>
                                                                                <a href="single-product.html">
                                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/single/product-shop-1-1.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/single/product-shop-1-2.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                                </a>
                                                                                <div class="action-links">
                                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                                </div>
                                                                            </div> <!-- end of product-image -->

                                                                            <div class="product-caption media-body">
                                                                                <div class="product-ratings">
                                                                                    <div class="rating-box">
                                                                                        <ul class="rating d-flex justify-content-md-start">
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <h4 class="product-name"><a href="single-product.html">Aliquam Consequat</a></h4>
                                                                                <p class="product-price">
                                                                                    <span class="price-old">$420.00</span>
                                                                                    <span class="price-new">$150.00</span>
                                                                                </p>
                                                                                <p class="product-des">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</p>
                                                                            </div><!-- end of product-caption -->
                                                                        </div><!-- end of product-inner -->
                                                                    </div><!-- end of product-thumb -->
                                                                </div> <!-- end of product-layout -->

                                                                <div class="product-layout product-list">
                                                                    <div class="product-thumb">
                                                                        <div class="product-inner media align-items-center">
                                                                            <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
                                                                                <div class="label-product label-sale">-44%</div>
                                                                                <a href="single-product.html">
                                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/single/product-shop-2-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/single/product-shop-2-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                                </a>
                                                                                <div class="action-links">
                                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                                </div>
                                                                            </div> <!-- end of product-image -->

                                                                            <div class="product-caption media-body">
                                                                                <div class="product-ratings">
                                                                                    <div class="rating-box">
                                                                                        <ul class="rating d-flex justify-content-md-start">
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <h4 class="product-name"><a href="single-product.html">Cas Meque Metus</a></h4>
                                                                                <p class="product-price">
                                                                                    <span class="price-old">$320.00</span>
                                                                                    <span class="price-new">$180.00</span>
                                                                                </p>
                                                                                <p class="product-des">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</p>
                                                                            </div><!-- end of product-caption -->
                                                                        </div><!-- end of product-inner -->
                                                                    </div><!-- end of product-thumb -->
                                                                </div> <!-- end of product-layout -->

                                                                <div class="product-layout product-list">
                                                                    <div class="product-thumb">
                                                                        <div class="product-inner media align-items-center">
                                                                            <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
                                                                                <div class="label-product label-sale">-67%</div>
                                                                                <a href="single-product.html">
                                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/single/product-shop-2-1.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/single/product-shop-2-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                                </a>
                                                                                <div class="action-links">
                                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                                </div>
                                                                            </div> <!-- end of product-image -->

                                                                            <div class="product-caption media-body">
                                                                                <div class="product-ratings">
                                                                                    <div class="rating-box">
                                                                                        <ul class="rating d-flex justify-content-md-start">
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <h4 class="product-name"><a href="single-product.html">Donec Ac Tempus</a></h4>
                                                                                <p class="product-price">
                                                                                    <span class="price-old">$430.00</span>
                                                                                    <span class="price-new">$100.00</span>
                                                                                </p>
                                                                                <p class="product-des">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</p>
                                                                            </div><!-- end of product-caption -->
                                                                        </div><!-- end of product-inner -->
                                                                    </div><!-- end of product-thumb -->
                                                                </div> <!-- end of product-layout -->

                                                                <div class="product-layout product-list">
                                                                    <div class="product-thumb">
                                                                        <div class="product-inner media align-items-center">
                                                                            <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
                                                                                <a href="#">
                                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/single/product-shop-2-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/single/product-shop-3-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                                </a>
                                                                                <div class="action-links">
                                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                                </div>
                                                                            </div> <!-- end of product-image -->

                                                                            <div class="product-caption media-body">
                                                                                <div class="product-ratings">
                                                                                    <div class="rating-box">
                                                                                        <ul class="rating d-flex justify-content-md-start">
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <h4 class="product-name"><a href="single-product.html">Donec Non Est</a></h4>
                                                                                <p class="product-price">
                                                                                    <span class="price-new">$280.00</span>
                                                                                </p>
                                                                                <p class="product-des">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</p>
                                                                            </div><!-- end of product-caption -->
                                                                        </div><!-- end of product-inner -->
                                                                    </div><!-- end of product-thumb -->
                                                                </div> <!-- end of product-layout -->

                                                                <div class="product-layout product-list">
                                                                    <div class="product-thumb">
                                                                        <div class="product-inner media align-items-center">
                                                                            <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
                                                                                <a href="#">
                                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/single/product-shop-4-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/single/product-shop-4-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                                </a>
                                                                                <div class="action-links">
                                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                                </div>
                                                                            </div> <!-- end of product-image -->

                                                                            <div class="product-caption media-body">
                                                                                <div class="product-ratings">
                                                                                    <div class="rating-box">
                                                                                        <ul class="rating d-flex justify-content-md-start">
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <h4 class="product-name"><a href="single-product.html">Etiam Gravida</a></h4>
                                                                                <p class="product-price">
                                                                                    <span class="price-new">$100.00</span>
                                                                                </p>
                                                                                <p class="product-des">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</p>
                                                                            </div><!-- end of product-caption -->
                                                                        </div><!-- end of product-inner -->
                                                                    </div><!-- end of product-thumb -->
                                                                </div> <!-- end of product-layout -->

                                                                <div class="product-layout product-list">
                                                                    <div class="product-thumb">
                                                                        <div class="product-inner media align-items-center">
                                                                            <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
                                                                                <div class="label-product label-new">New</div>
                                                                                <a href="single-product.html">
                                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/single/product-shop-5-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/single/product-shop-5-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                                </a>
                                                                                <div class="action-links">
                                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                                </div>
                                                                            </div> <!-- end of product-image -->

                                                                            <div class="product-caption media-body">
                                                                                <div class="product-ratings">
                                                                                    <div class="rating-box">
                                                                                        <ul class="rating d-flex justify-content-md-start">
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <h4 class="product-name"><a href="single-product.html">Fusce Aliquam</a></h4>
                                                                                <p class="product-price">
                                                                                    <span class="price-new">$240.00</span>
                                                                                </p>
                                                                                <p class="product-des">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</p>
                                                                            </div><!-- end of product-caption -->
                                                                        </div><!-- end of product-inner -->
                                                                    </div><!-- end of product-thumb -->
                                                                </div> <!-- end of product-layout -->

                                                                <div class="product-layout product-list">
                                                                    <div class="product-thumb">
                                                                        <div class="product-inner media align-items-center">
                                                                            <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
                                                                                <div class="label-product label-new">New</div>
                                                                                <a href="single-product.html">
                                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/single/product-shop-6-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/single/product-shop-6-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                                </a>
                                                                                <div class="action-links">
                                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                                </div>
                                                                            </div> <!-- end of product-image -->

                                                                            <div class="product-caption media-body">
                                                                                <div class="product-ratings">
                                                                                    <div class="rating-box">
                                                                                        <ul class="rating d-flex justify-content-md-start">
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <h4 class="product-name"><a href="single-product.html">Fusce Sheam</a></h4>
                                                                                <p class="product-price">
                                                                                    <span class="price-new">$180.00</span>
                                                                                </p>
                                                                                <p class="product-des">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</p>
                                                                            </div><!-- end of product-caption -->
                                                                        </div><!-- end of product-inner -->
                                                                    </div><!-- end of product-thumb -->
                                                                </div> <!-- end of product-layout -->

                                                                <div class="product-layout product-list">
                                                                    <div class="product-thumb">
                                                                        <div class="product-inner media align-items-center">
                                                                            <div class="product-image mb-4 mb-md-0 mr-md-4 mr-xl-5">
                                                                                <div class="label-product label-new">New</div>
                                                                                <a href="single-product.html">
                                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/single/product-shop-4-1.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/single/product-shop-4-2.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                                </a>
                                                                                <div class="action-links">
                                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                                    <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                                    <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                                    <a class="action-btn btn-quickview" data-toggle="modal" data-target="#product_quick_view" href="#" title="Quick View"><i class="pe-7s-search"></i></a>
                                                                                </div>
                                                                            </div> <!-- end of product-image -->

                                                                            <div class="product-caption media-body">
                                                                                <div class="product-ratings">
                                                                                    <div class="rating-box">
                                                                                        <ul class="rating d-flex justify-content-md-start">
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                            <li><i class="fa fa-star"></i></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div>
                                                                                <h4 class="product-name"><a href="single-product.html">Letraset Sheets</a></h4>
                                                                                <p class="product-price">
                                                                                    <span class="price-new">$260.00</span>
                                                                                </p>
                                                                                <p class="product-des">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend ..</p>
                                                                            </div><!-- end of product-caption -->
                                                                        </div><!-- end of product-inner -->
                                                                    </div><!-- end of product-thumb -->
                                                                </div> <!-- end of product-layout -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end of shop-products-wrapper -->

                                            <div class="pagination-area">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-6 col-md-6">
                                                        <ul class="pagination">
                                                            <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-left"></i></a></li>
                                                            <li class="page-item"><a href="#" class="page-link">1</a></li>
                                                            <li class="page-item active"><span class="page-link">2</span></li>
                                                            <li class="page-item"><a href="#" class="page-link">3</a></li>
                                                            <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-right"></i></a></li>
                                                            <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i>|</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="page-amount d-flex">
                                                            <p>Showing 10 to 18 of 27 (3 Pages)</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end of pagination-area -->
                                        </div>
                                    </div> <!-- end of row -->
                                </div> <!-- end of shop-wrapper -->
                            </main> <!-- end of #primary -->
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 order-2 order-md-2 order-lg-1">
                            <aside id="secondary" class="widget-area">
                                <div class="sidebar-widget price-filter-widget">
                                    <h2 class="widgettitle">Price</h2>
                                    <div class="filter-price-content">
                                        <form action="#" method="post">
                                            <div id="price_slider" class="price-slider"></div>
                                            <div class="filter-price-wrapper">
                                                <div class="filter-content">
                                                    <div class="input-type">
                                                        <input type="text" id="min_price" readonly=""/>
                                                    </div>
                                                    <span>—</span>
                                                    <div class="input-type">
                                                        <input type="text" id="max_price" readonly=""/>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>  
                                    </div>
                                </div> <!-- end of sidebar-widget -->

                                <div class="sidebar-widget list-widget">
                                    <h2 class="widgettitle">Category</h2>
                                    <div class="list-widget-wrapper">
                                        <div class="list-group">
                                            <a href="#">Laptop (198)</a>
                                            <a href="#">Mobile (70)</a>
                                            <a href="#">Accessories (14)</a>
                                            <a href="#">Dresses (10)</a>
                                        </div>
                                    </div>
                                </div> <!-- end of sidebar-widget -->

                                <div class="sidebar-widget list-widget">
                                    <h2 class="widgettitle">Color</h2>
                                    <div class="list-widget-wrapper">
                                        <div class="list-group">
                                            <a href="#">Black (18)</a>
                                            <a href="#">Blue (70)</a>
                                            <a href="#">Green (14)</a>
                                            <a href="#">White (10)</a>
                                        </div>
                                    </div>
                                </div> <!-- end of sidebar-widget -->

                                <div class="sidebar-widget list-widget">
                                    <h2 class="widgettitle">Manufacturer</h2>
                                    <div class="list-widget-wrapper">
                                        <div class="list-group">
                                            <a href="#">Calvin Klein (14)</a>
                                            <a href="#">Diesel (14)</a>
                                            <a href="#">Tommy Hilfiger (14)</a>
                                            <a href="#">Versace (14)</a>
                                        </div>
                                    </div>
                                </div> <!-- end of sidebar-widget -->

                                <div class="sidebar-widget banner">
                                    <div class="promo-banner hover-effect-1 mb0">
                                        <a href="#">
                                            <img src="<?php echo $urlTemplate;?>assets/images/banners/banner-5.jpg" alt="Promo Banner">
                                        </a>
                                    </div>
                                </div> <!-- end of sidebar-widget -->
                            </aside> <!-- end of #secondary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Shop Products Wrapper -->

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