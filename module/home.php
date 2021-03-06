<?php
    $allProduct = $queryObj->queryDB("SELECT * FROM product");
    $htmlListProduct = '';
    $countProduct = 0;
    if($allProduct){
        foreach ($allProduct as $itemProduct) {
            $countProduct ++;
            $so_du = $countProduct % 2;
            if($so_du!=0){
                $htmlListProduct .= '<div class="swiper-slide">';
            }
            $htmlListProduct .= '
                            <div class="product-layout product-grid">
                                <div class="product-thumb">
                                    <div class="product-inner with-bottom-padding">
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
                                                <span class="price-new"> $'.$itemProduct['product_price'].'</span>
                                            </p>
                                        </div><!-- end of product-caption -->
                                    </div><!-- end of product-inner -->
                                </div><!-- end of product-thumb -->
                            </div>';
            if($so_du==0){
                $htmlListProduct .= '</div>';
            }
        }
    }
?>
        <!-- Start of Primary Slider Section -->
        <section class="primary-slider-section mt-half mb0">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <div id="primary_slider" class="swiper-container slider-4">

                            <!-- Slides -->
                            <div class="swiper-wrapper">
                                <div class="swiper-slide bg-img-wrapper">
                                    <div class="slide-inner image-placeholder">
                                        <img src="<?php echo $urlTemplate;?>assets/images/slider/home-4/slide-1.jpg" class="visually-hidden" alt="Slider Image">                          
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="slide-content layer-animation-1">
                                                        <h1>Bower & Wilkins PX Headphones</h1>
                                                        <h2>At a price</h2>                                                        
                                                        <p>$199</p>
                                                        <div class="slide-button">
                                                            <a class="default-btn transparent" href="shop-grid.html" title="Shop Now">Shop Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide bg-img-wrapper">
                                    <div class="slide-inner image-placeholder">
                                        <img src="<?php echo $urlTemplate;?>assets/images/slider/home-4/slide-2.jpg" class="visually-hidden" alt="Slider Image">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="slide-content layer-animation-2">
                                                        <h1>3d vr glasses ledo-vr003</h1>
                                                        <h2>At a price</h2>                                                        
                                                        <p>$199</p>
                                                        <div class="slide-button">
                                                            <a class="default-btn transparent" href="shop-grid.html" title="Shop Now">Shop Now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Slider Navigation -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </section>
        <!-- End of Primary Slider Section -->

        <!-- Start of Main Content Wrapper -->
        <main id="content" class="main-content-wrapper">
            
            <!-- Start of Featured Category -->
            <section class="feature-category mt-full">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="section-title left-aligned with-border">
                                <h2>Featured Categories</h2>
                            </div>
                        </div>
                    </div> <!-- end of row -->

                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="featured-category-wrapper pos-r">
                                <div class="categories-carousel product-carousel" data-visible-slide="3" data-loop="false" data-speed="1000">

                                    <!-- Slides -->
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="single-category-2 media align-items-center">
                                                <div class="media-image mr-xl-3">
                                                    <a href="#"><img src="<?php echo $urlTemplate;?>assets/images/category/fcat-2-1.jpg" alt="Category Image"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h2><a href="#">Cameras</a></h2>
                                                    <ul class="sub-featured-categories list-unstyled">
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">DSLR Cameras</a></li>
                                                        <li><a href="#">Lighting &amp; Studio</a></li>
                                                    </ul>
                                                    <a href="#" class="view-more">See More</a>
                                                </div>
                                            </div> <!-- end of single-category -->
                                            <div class="single-category-2 media align-items-center">
                                                <div class="media-image mr-xl-3">
                                                    <a href="#"><img src="<?php echo $urlTemplate;?>assets/images/category/fcat-2-2.jpg" alt="Category Image"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h2><a href="#">Computers</a></h2>
                                                    <ul class="sub-featured-categories list-unstyled">
                                                        <li><a href="#">Desktop PC</a></li>
                                                        <li><a href="#">laptops</a></li>
                                                        <li><a href="#">Tablets</a></li>
                                                    </ul>
                                                    <a href="#" class="view-more">See More</a>
                                                </div>
                                            </div> <!-- end of single-category -->
                                        </div> <!-- end of swiper-slide -->

                                        <div class="swiper-slide">
                                            <div class="single-category-2 media align-items-center">
                                                <div class="media-image mr-xl-3">
                                                    <a href="#"><img src="<?php echo $urlTemplate;?>assets/images/category/fcat-2-3.jpg" alt="Category Image"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h2><a href="#">Gamepad</a></h2>
                                                    <ul class="sub-featured-categories list-unstyled">
                                                        <li><a href="#">Cameras</a></li>
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">DSLR Cameras</a></li>
                                                    </ul>
                                                    <a href="#" class="view-more">See More</a>
                                                </div>
                                            </div> <!-- end of single-category -->
                                            <div class="single-category-2 media align-items-center">
                                                <div class="media-image mr-xl-3">
                                                    <a href="#"><img src="<?php echo $urlTemplate;?>assets/images/category/fcat-2-4.jpg" alt="Category Image"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h2><a href="#">Headphone</a></h2>
                                                    <ul class="sub-featured-categories list-unstyled">
                                                        <li><a href="#">Audio Headphones</a></li>
                                                        <li><a href="#">Microphones</a></li>
                                                        <li><a href="#">On-Ear Headphones</a></li>
                                                    </ul>
                                                    <a href="#" class="view-more">See More</a>
                                                </div>
                                            </div> <!-- end of single-category -->
                                        </div> <!-- end of swiper-slide -->

                                        <div class="swiper-slide">
                                            <div class="single-category-2 media align-items-center">
                                                <div class="media-image mr-xl-3">
                                                    <a href="#"><img src="<?php echo $urlTemplate;?>assets/images/category/fcat-2-2.jpg" alt="Category Image"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h2><a href="#">Laptop</a></h2>
                                                    <ul class="sub-featured-categories list-unstyled">
                                                        <li><a href="#">Cell Phone Cases</a></li>
                                                        <li><a href="#">Computers</a></li>
                                                        <li><a href="#">Desktop PC</a></li>
                                                    </ul>
                                                    <a href="#" class="view-more">See More</a>
                                                </div>
                                            </div> <!-- end of single-category -->
                                            <div class="single-category-2 media align-items-center">
                                                <div class="media-image mr-xl-3">
                                                    <a href="#"><img src="<?php echo $urlTemplate;?>assets/images/category/fcat-2-5.jpg" alt="Category Image"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h2><a href="#">Mobile</a></h2>
                                                    <ul class="sub-featured-categories list-unstyled">
                                                        <li><a href="#">Carrier Cell Phones</a></li>
                                                        <li><a href="#">Cell Phone Cases</a></li>
                                                        <li><a href="#">Cell Phones</a></li>
                                                    </ul>
                                                    <a href="#" class="view-more">See More</a>
                                                </div>
                                            </div> <!-- end of single-category -->
                                        </div> <!-- end of swiper-slide -->

                                        <div class="swiper-slide">
                                            <div class="single-category-2 media align-items-center">
                                                <div class="media-image mr-xl-3">
                                                    <a href="#"><img src="<?php echo $urlTemplate;?>assets/images/category/fcat-2-1.jpg" alt="Category Image"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h2><a href="#">SmartWatch</a></h2>
                                                    <ul class="sub-featured-categories list-unstyled">
                                                        <li><a href="#">Digital Cameras</a></li>
                                                        <li><a href="#">DSLR Cameras</a></li>
                                                        <li><a href="#">Lighting &amp; Studio</a></li>
                                                    </ul>
                                                    <a href="#" class="view-more">See More</a>
                                                </div>
                                            </div> <!-- end of single-category -->
                                            <div class="single-category-2 media align-items-center">
                                                <div class="media-image mr-xl-3">
                                                    <a href="#"><img src="<?php echo $urlTemplate;?>assets/images/category/fcat-2-6.jpg" alt="Category Image"></a>
                                                </div>
                                                <div class="media-body">
                                                    <h2><a href="#">Tvs</a></h2>
                                                    <ul class="sub-featured-categories list-unstyled">
                                                        <li><a href="#">D-Series TVs</a></li>
                                                        <li><a href="#">LED & LCD TVs</a></li>
                                                        <li><a href="#">OLED TVs</a></li>
                                                    </ul>
                                                    <a href="#" class="view-more">See More</a>
                                                </div>
                                            </div> <!-- end of single-category -->
                                        </div> <!-- end of swiper-slide -->
                                    </div> <!-- end of swiper-wrapper -->

                                    <!-- Navigation -->
                                    <div class="swiper-arrow top-nav next"><i class="fa fa-angle-right"></i></div>
                                    <div class="swiper-arrow top-nav prev"><i class="fa fa-angle-left"></i></div>
                                </div> <!-- end of categories-carousel -->
                            </div> <!-- end of featured-category-wrapper -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of Featured Category -->

            <!-- Start of Best Selling Section -->
            <section class="best-selling-section no-title">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="section-title left-aligned with-border">
                                <h2 class="visually-hidden">Tab Products</h2>
                            </div>
                        </div>
                    </div> <!-- end of row -->

                    <div class="row">
                        <div class="col-12 col-md-12">
                            <div class="best-selling-wrapper pos-r">

                                <!-- Nav Pills -->
                                <ul class="nav nav-pills top-nav-pills type-2 mb-5 justify-content-center" id="best_products" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="nav_bestsellers" data-toggle="pill" href="#category_bestsellers" role="tab" aria-controls="category_bestsellers" aria-selected="true">Best sellers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="nav_featured" data-toggle="pill" href="#category_featured" role="tab" aria-controls="category_featured" aria-selected="false">Featured products</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="nav_new" data-toggle="pill" href="#category_new" role="tab" aria-controls="category_new" aria-selected="false">New arrivals</a>
                                    </li>
                                </ul> <!-- end of nav -->
                                
                                <!-- Tab Contents -->
                                <div class="tab-content" id="best_products_contents">
                                    <div class="tab-pane fade show active" id="category_bestsellers" role="tabpanel" aria-labelledby="nav_bestsellers">
                                        <div class="product-carousel" data-visible-slide="5" data-visible-lg-slide="3" data-loop="true" data-speed="1000">

                                            <!-- Slides -->
                                            <div class="swiper-wrapper">
                                                <?php echo  $htmlListProduct; ?>
                                               
                                            </div> <!-- end of swiper-wrapper -->

                                            <div class="swiper-arrow top-nav next"><i class="fa fa-angle-right"></i></div>
                                            <div class="swiper-arrow top-nav prev"><i class="fa fa-angle-left"></i></div>
                                        </div> <!-- end of product-carousel -->
                                    </div> <!-- end of tab-pane -->

                                    <div class="tab-pane fade" id="category_featured" role="tabpanel" aria-labelledby="nav_featured">
                                        <div class="product-carousel" data-visible-slide="5" data-visible-lg-slide="3" data-loop="true" data-speed="1000">

                                            <!-- Slides -->
                                            <!-- Slides -->
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner with-bottom-padding">
                                                                <div class="product-image">
                                                                    <div class="label-product label-new">New</div>
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-1-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-1-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                    <h4 class="product-name"><a href="single-product.html">Accumsan Elit</a></h4>
                                                                    <p class="product-price">
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new">$120.00</span>
                                                                    </p>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->

                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner">
                                                                <div class="product-image">
                                                                    <div class="label-product label-sale">-64%</div>
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-2-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-2-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                                <li><i class="fa fa-star-o"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <h4 class="product-name"><a href="single-product.html">Aliquam Consequat</a></h4>
                                                                    <p class="product-price">
                                                                        <span class="price-old">$420.00</span>
                                                                        <span class="price-new">$150.00</span>
                                                                    </p>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->
                                                </div> <!-- end of swiper-slide -->

                                                <div class="swiper-slide">
                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner with-bottom-padding">
                                                                <div class="product-image">
                                                                    <div class="label-product label-sale">-44%</div>
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-3-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-3-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->

                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner">
                                                                <div class="product-image">
                                                                    <div class="label-product label-sale">-67%</div>
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-4-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-4-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                    <h4 class="product-name"><a href="single-product.html">Donec Ac Tempus</a></h4>
                                                                    <p class="product-price">
                                                                        <span class="price-old">$430.00</span>
                                                                        <span class="price-new">$100.00</span>
                                                                    </p>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->
                                                </div> <!-- end of swiper-slide -->

                                                <div class="swiper-slide">
                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner with-bottom-padding">
                                                                <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-5-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-5-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                    <h4 class="product-name"><a href="single-product.html">Donec Non Est</a></h4>
                                                                    <p class="product-price">
                                                                        <span class="price-new">$280.00</span>
                                                                    </p>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->

                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner">
                                                                <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-6-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-6-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                    <h4 class="product-name"><a href="single-product.html">Etiam Gravida</a></h4>
                                                                    <p class="product-price">
                                                                        <span class="price-new">$100.00</span>
                                                                    </p>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->
                                                </div> <!-- end of swiper-slide -->

                                                <div class="swiper-slide">
                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner with-bottom-padding">
                                                                <div class="product-image">
                                                                    <div class="label-product label-new">New</div>
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-7-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-7-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                                <li><i class="fa fa-star-o"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <h4 class="product-name"><a href="single-product.html">Fusce Aliquam</a></h4>
                                                                    <p class="product-price">
                                                                        <span class="price-new">$240.00</span>
                                                                    </p>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->

                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner">
                                                                <div class="product-image">
                                                                    <div class="label-product label-new">New</div>
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-8-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-8-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                                <li><i class="fa fa-star-o"></i></li>
                                                                                <li><i class="fa fa-star-o"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <h4 class="product-name"><a href="single-product.html">Fusce Sheam</a></h4>
                                                                    <p class="product-price">
                                                                        <span class="price-new">$180.00</span>
                                                                    </p>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->
                                                </div> <!-- end of swiper-slide -->

                                                <div class="swiper-slide">
                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner with-bottom-padding">
                                                                <div class="product-image">
                                                                    <div class="label-product label-new">New</div>
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-9-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                    <h4 class="product-name"><a href="single-product.html">Letraset Sheets</a></h4>
                                                                    <p class="product-price">
                                                                        <span class="price-new">$260.00</span>
                                                                    </p>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->

                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner">
                                                                <div class="product-image">
                                                                    <div class="label-product label-sale">-53%</div>
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-10-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-10-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                                <li><i class="fa fa-star-o"></i></li>
                                                                                <li><i class="fa fa-star-o"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <h4 class="product-name"><a href="single-product.html">Lorem Ipsum</a></h4>
                                                                    <p class="product-price">
                                                                        <span class="price-old">$430.00</span>
                                                                        <span class="price-new">$200.00</span>
                                                                    </p>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->
                                                </div> <!-- end of swiper-slide -->
                                            </div> <!-- end of swiper-wrapper -->

                                            <!-- Navigation -->
                                            <div class="swiper-arrow top-nav next"><i class="fa fa-angle-right"></i></div>
                                            <div class="swiper-arrow top-nav prev"><i class="fa fa-angle-left"></i></div>
                                        </div> <!-- end of product-carousel -->
                                    </div> <!-- end of tab-pane -->

                                    <div class="tab-pane fade" id="category_new" role="tabpanel" aria-labelledby="nav_new">
                                        <div class="product-carousel" data-visible-slide="5" data-visible-lg-slide="3" data-loop="true" data-speed="1000">

                                            <!-- Slides -->
                                            <!-- Slides -->
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner with-bottom-padding">
                                                                <div class="product-image">
                                                                    <div class="label-product label-new">New</div>
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-1-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-1-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                    <h4 class="product-name"><a href="single-product.html">Accumsan Elit</a></h4>
                                                                    <p class="product-price">
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new">$120.00</span>
                                                                    </p>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->

                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner">
                                                                <div class="product-image">
                                                                    <div class="label-product label-sale">-64%</div>
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-2-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-2-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                                <li><i class="fa fa-star-o"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <h4 class="product-name"><a href="single-product.html">Aliquam Consequat</a></h4>
                                                                    <p class="product-price">
                                                                        <span class="price-old">$420.00</span>
                                                                        <span class="price-new">$150.00</span>
                                                                    </p>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->
                                                </div> <!-- end of swiper-slide -->

                                                <div class="swiper-slide">
                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner with-bottom-padding">
                                                                <div class="product-image">
                                                                    <div class="label-product label-sale">-44%</div>
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-3-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-3-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->

                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner">
                                                                <div class="product-image">
                                                                    <div class="label-product label-sale">-67%</div>
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-4-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-4-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                    <h4 class="product-name"><a href="single-product.html">Donec Ac Tempus</a></h4>
                                                                    <p class="product-price">
                                                                        <span class="price-old">$430.00</span>
                                                                        <span class="price-new">$100.00</span>
                                                                    </p>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->
                                                </div> <!-- end of swiper-slide -->

                                                <div class="swiper-slide">
                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner with-bottom-padding">
                                                                <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-5-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-5-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                    <h4 class="product-name"><a href="single-product.html">Donec Non Est</a></h4>
                                                                    <p class="product-price">
                                                                        <span class="price-new">$280.00</span>
                                                                    </p>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->

                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner">
                                                                <div class="product-image">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-6-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-6-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                    <h4 class="product-name"><a href="single-product.html">Etiam Gravida</a></h4>
                                                                    <p class="product-price">
                                                                        <span class="price-new">$100.00</span>
                                                                    </p>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->
                                                </div> <!-- end of swiper-slide -->

                                                <div class="swiper-slide">
                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner with-bottom-padding">
                                                                <div class="product-image">
                                                                    <div class="label-product label-new">New</div>
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-7-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-7-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                                <li><i class="fa fa-star-o"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <h4 class="product-name"><a href="single-product.html">Fusce Aliquam</a></h4>
                                                                    <p class="product-price">
                                                                        <span class="price-new">$240.00</span>
                                                                    </p>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->

                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner">
                                                                <div class="product-image">
                                                                    <div class="label-product label-new">New</div>
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-8-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-8-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                                <li><i class="fa fa-star-o"></i></li>
                                                                                <li><i class="fa fa-star-o"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <h4 class="product-name"><a href="single-product.html">Fusce Sheam</a></h4>
                                                                    <p class="product-price">
                                                                        <span class="price-new">$180.00</span>
                                                                    </p>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->
                                                </div> <!-- end of swiper-slide -->

                                                <div class="swiper-slide">
                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner with-bottom-padding">
                                                                <div class="product-image">
                                                                    <div class="label-product label-new">New</div>
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-9-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                    <h4 class="product-name"><a href="single-product.html">Letraset Sheets</a></h4>
                                                                    <p class="product-price">
                                                                        <span class="price-new">$260.00</span>
                                                                    </p>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->

                                                    <div class="product-layout product-grid">
                                                        <div class="product-thumb">
                                                            <div class="product-inner">
                                                                <div class="product-image">
                                                                    <div class="label-product label-sale">-53%</div>
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-10-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-10-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                                <li><i class="fa fa-star-o"></i></li>
                                                                                <li><i class="fa fa-star-o"></i></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <h4 class="product-name"><a href="single-product.html">Lorem Ipsum</a></h4>
                                                                    <p class="product-price">
                                                                        <span class="price-old">$430.00</span>
                                                                        <span class="price-new">$200.00</span>
                                                                    </p>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-layout -->
                                                </div> <!-- end of swiper-slide -->
                                            </div> <!-- end of swiper-wrapper -->

                                            <!-- Navigation -->
                                            <div class="swiper-arrow top-nav next"><i class="fa fa-angle-right"></i></div>
                                            <div class="swiper-arrow top-nav prev"><i class="fa fa-angle-left"></i></div>
                                        </div> <!-- end of product-carousel -->
                                    </div> <!-- end of tab-pane -->
                                </div> <!-- end of tab-content -->
                            </div> <!-- end of best-selling-wrapper -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of Best Selling Section -->

            <!-- Start of Banner Section -->
            <div class="banner-section mb-half">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                            <div class="promo-banner hover-effect-1">
                                <a href="#">
                                    <img src="<?php echo $urlTemplate;?>assets/images/banners/banner-15.jpg" alt="Promo Banner">
                                </a>
                            </div> <!-- end of promo-banner -->
                        </div>
                        <div class="col-12 col-sm-12 col-md-5 col-lg-5 order-sm-3">
                            <div class="promo-banner hover-effect-1">
                                <a href="#">
                                    <img src="<?php echo $urlTemplate;?>assets/images/banners/banner-16.jpg" alt="Promo Banner">
                                </a>
                            </div> <!-- end of promo-banner -->
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="promo-banner hover-effect-1 mb0">
                                <a href="#">
                                    <img src="<?php echo $urlTemplate;?>assets/images/banners/banner-17.jpg" alt="Promo Banner">
                                </a>
                            </div>
                        </div> <!-- end of promo-banner -->
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Banner Section -->

            <!-- Start of Product Showcase Section -->
            <section class="product-showcase">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-3 order-2 order-md-2 order-lg-1">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="section-title left-aligned with-border">
                                        <h2>Sale Off</h2>
                                    </div>
                                    <div class="latest-product-wrapper pos-r">
                                        <div class="product-carousel" data-visible-slide="1" data-visible-lg-slide="1" data-visible-md-slide="3" data-visible-sm-slide="2" data-loop="true" data-speed="1000">

                                            <!-- Slides -->
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/deals/product-1-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/deals/product-1-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                </a>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                <h4 class="product-name"><a href="single-product.html">Donec Non Est</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-new">$280.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/deals/product-2-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/deals/product-2-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                </a>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                <h4 class="product-name"><a href="single-product.html">Etiam Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-new">$100.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/deals/product-3-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/deals/product-3-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                </a>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Fusce Aliquam</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-new">$240.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <div class="label-product label-new">New</div>
                                                                <a href="#">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/deals/product-2-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/deals/product-2-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                </a>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Fusce Sheam</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-new">$180.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <div class="label-product label-new">New</div>
                                                                <a href="#">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/deals/product-4-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                </a>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                <h4 class="product-name"><a href="single-product.html">Letraset Sheets</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-new">$260.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->
                                            </div> <!-- end of swiper-wrapper -->

                                            <!-- Navigation -->
                                            <div class="swiper-arrow top-nav next"><i class="fa fa-angle-right"></i></div>
                                            <div class="swiper-arrow top-nav prev"><i class="fa fa-angle-left"></i></div>
                                        </div> <!-- end of product-carousel -->
                                    </div> <!-- end of latest-product-wrapper -->
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="section-title left-aligned with-border pt-full">
                                        <h2>Testimonials</h2>
                                    </div>

                                    <div class="testimonials pos-r">
                                        <div class="testimonial-container">

                                            <!-- Slides -->
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="testimonial-media" data-swiper-parallax="-100">
                                                        <img src="<?php echo $urlTemplate;?>assets/images/testimonial/testimonial-1.jpg" alt="Alva Ono">
                                                    </div>
                                                    <div class="testimonial-content" data-swiper-parallax="-500">
                                                        <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you!</p>
                                                        <div class="client-meta" data-swiper-parallax="-300">
                                                            <h3 class="client-name">Alva Ono</h3>
                                                        </div>
                                                    </div>
                                                </div> <!-- end of swiper-slide -->

                                                <div class="swiper-slide">
                                                    <div class="testimonial-media" data-swiper-parallax="-100">
                                                        <img src="<?php echo $urlTemplate;?>assets/images/testimonial/testimonial-2.jpg" alt="Dewey Tetzlaff">
                                                    </div>
                                                    <div class="testimonial-content" data-swiper-parallax="-500">
                                                        <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you!</p>
                                                        <div class="client-meta" data-swiper-parallax="-300">
                                                            <h3 class="client-name">Dewey Tetzlaff</h3>
                                                        </div>
                                                    </div>
                                                </div> <!-- end of swiper-slide -->

                                                <div class="swiper-slide">
                                                    <div class="testimonial-media" data-swiper-parallax="-100">
                                                        <img src="<?php echo $urlTemplate;?>assets/images/testimonial/testimonial-3.jpg" alt="Amber Laha">
                                                    </div>
                                                    <div class="testimonial-content" data-swiper-parallax="-500">
                                                        <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you!</p>
                                                        <div class="client-meta" data-swiper-parallax="-300">
                                                            <h3 class="client-name">Amber Laha</h3>
                                                        </div>
                                                    </div>
                                                </div> <!-- end of swiper-slide -->
                                            </div> <!-- end of swiper-wrapper -->

                                            <!-- Navigation -->
                                            <div class="swiper-arrow top-nav next testimonial-slide"><i class="fa fa-angle-right"></i></div>
                                            <div class="swiper-arrow top-nav prev testimonial-slide"><i class="fa fa-angle-left"></i></div>
                                        </div> <!-- end of testimonial-container -->
                                    </div> <!-- end of testimonials -->
                                </div>
                            </div>
                        </div> <!-- end of col -->

                        <div class="col-12 col-sm-12 col-md-12 col-lg-9 order-1 order-md-1 order-lg-2">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4 col-lg-4 order-2 order-md-2 order-lg-1">
                                    <div class="promo-banner hover-effect-1">
                                        <a href="#">
                                            <img src="<?php echo $urlTemplate;?>assets/images/banners/banner-5.jpg" alt="Promo Banner">
                                        </a>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-8 col-lg-8 order-1 order-md-1 order-lg-2">
                                    <div class="section-title left-aligned with-border">
                                        <h2>Mostview Products</h2>
                                    </div>
                                    <div class="product-carousel-wrapper pos-r">
                                        <div class="product-carousel" data-visible-slide="2" data-visible-lg-slide="2" data-visible-md-slide="2" data-loop="true" data-speed="1000" data-space-between="20">

                                            <!-- Slides -->
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide product-layout product-list">
                                                    <div class="product-list-single">
                                                        <div class="product-thumb">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-1-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-1-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                </div> <!-- end of product-image -->

                                                                <div class="product-caption media-body">
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex justify-content-start">
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
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new">$120.00</span>
                                                                    </p>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                        <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                    </div>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-list-single -->

                                                    <div class="product-list-single">
                                                        <div class="product-thumb">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-2-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-2-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                </div> <!-- end of product-image -->

                                                                <div class="product-caption media-body">
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex justify-content-start">
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
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new">$120.00</span>
                                                                    </p>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                        <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                    </div>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-list-single -->

                                                    <div class="product-list-single">
                                                        <div class="product-thumb">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-3-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-3-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                </div> <!-- end of product-image -->

                                                                <div class="product-caption media-body">
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex justify-content-start">
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
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new">$120.00</span>
                                                                    </p>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                        <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                    </div>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-list-single -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-list">
                                                    <div class="product-list-single">
                                                        <div class="product-thumb">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-4-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-4-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                </div> <!-- end of product-image -->

                                                                <div class="product-caption media-body">
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex justify-content-start">
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
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new">$120.00</span>
                                                                    </p>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                        <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                    </div>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-list-single -->

                                                    <div class="product-list-single">
                                                        <div class="product-thumb">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-5-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-5-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                </div> <!-- end of product-image -->

                                                                <div class="product-caption media-body">
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex justify-content-start">
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
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new">$120.00</span>
                                                                    </p>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                        <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                    </div>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-list-single -->

                                                    <div class="product-list-single">
                                                        <div class="product-thumb">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-6-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-6-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                </div> <!-- end of product-image -->

                                                                <div class="product-caption media-body">
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex justify-content-start">
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
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new">$120.00</span>
                                                                    </p>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                        <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                    </div>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-list-single -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-list">
                                                    <div class="product-list-single">
                                                        <div class="product-thumb">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-7-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-7-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                </div> <!-- end of product-image -->

                                                                <div class="product-caption media-body">
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex justify-content-start">
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
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new">$120.00</span>
                                                                    </p>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                        <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                    </div>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-list-single -->

                                                    <div class="product-list-single">
                                                        <div class="product-thumb">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-8-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-8-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                </div> <!-- end of product-image -->

                                                                <div class="product-caption media-body">
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex justify-content-start">
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
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new">$120.00</span>
                                                                    </p>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                        <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                    </div>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-list-single -->

                                                    <div class="product-list-single">
                                                        <div class="product-thumb">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-9-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                </div> <!-- end of product-image -->

                                                                <div class="product-caption media-body">
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex justify-content-start">
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
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new">$120.00</span>
                                                                    </p>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                        <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                    </div>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-list-single -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-list">
                                                    <div class="product-list-single">
                                                        <div class="product-thumb">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-10-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-10-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                </div> <!-- end of product-image -->

                                                                <div class="product-caption media-body">
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex justify-content-start">
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
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new">$120.00</span>
                                                                    </p>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                        <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                    </div>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-list-single -->

                                                    <div class="product-list-single">
                                                        <div class="product-thumb">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-1-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-1-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                </div> <!-- end of product-image -->

                                                                <div class="product-caption media-body">
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex justify-content-start">
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
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new">$120.00</span>
                                                                    </p>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                        <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                    </div>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-list-single -->

                                                    <div class="product-list-single">
                                                        <div class="product-thumb">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-2-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-2-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                </div> <!-- end of product-image -->

                                                                <div class="product-caption media-body">
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex justify-content-start">
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
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new">$120.00</span>
                                                                    </p>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                        <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                    </div>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-list-single -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-list">
                                                    <div class="product-list-single">
                                                        <div class="product-thumb">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-5-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-5-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                </div> <!-- end of product-image -->

                                                                <div class="product-caption media-body">
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex justify-content-start">
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
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new">$120.00</span>
                                                                    </p>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                        <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                    </div>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-list-single -->

                                                    <div class="product-list-single">
                                                        <div class="product-thumb">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-8-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-8-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                </div> <!-- end of product-image -->

                                                                <div class="product-caption media-body">
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex justify-content-start">
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
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new">$120.00</span>
                                                                    </p>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                        <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                    </div>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-list-single -->

                                                    <div class="product-list-single">
                                                        <div class="product-thumb">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-10-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-10-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                </div> <!-- end of product-image -->

                                                                <div class="product-caption media-body">
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex justify-content-start">
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
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new">$120.00</span>
                                                                    </p>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                        <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                    </div>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-list-single -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-list">
                                                    <div class="product-list-single">
                                                        <div class="product-thumb">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-3-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-3-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                </div> <!-- end of product-image -->

                                                                <div class="product-caption media-body">
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex justify-content-start">
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
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new">$120.00</span>
                                                                    </p>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                        <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                    </div>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-list-single -->

                                                    <div class="product-list-single">
                                                        <div class="product-thumb">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-4-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-4-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                </div> <!-- end of product-image -->

                                                                <div class="product-caption media-body">
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex justify-content-start">
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
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new">$120.00</span>
                                                                    </p>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                        <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                    </div>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-list-single -->

                                                    <div class="product-list-single">
                                                        <div class="product-thumb">
                                                            <div class="product-inner media align-items-center">
                                                                <div class="product-image mr-3 mr-sm-3 mr-md-2 mr-xl-3">
                                                                    <a href="single-product.html">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-2-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                        <img src="<?php echo $urlTemplate;?>assets/images/products/featured/products-2-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                    </a>
                                                                </div> <!-- end of product-image -->

                                                                <div class="product-caption media-body">
                                                                    <div class="product-ratings">
                                                                        <div class="rating-box">
                                                                            <ul class="rating d-flex justify-content-start">
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
                                                                        <span class="price-old">$330.00</span>
                                                                        <span class="price-new">$120.00</span>
                                                                    </p>
                                                                    <div class="action-links">
                                                                        <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                                        <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                                        <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
                                                                    </div>
                                                                </div><!-- end of product-caption -->
                                                            </div><!-- end of product-inner -->
                                                        </div><!-- end of product-thumb -->
                                                    </div> <!-- end of product-list-single -->
                                                </div> <!-- end of product-layout -->
                                            </div> <!-- end of swiper-wrapper -->

                                            <!-- Navigation -->
                                            <div class="swiper-arrow top-nav next"><i class="fa fa-angle-right"></i></div>
                                            <div class="swiper-arrow top-nav prev"><i class="fa fa-angle-left"></i></div>
                                        </div> <!-- end of product-carousel -->
                                    </div> <!-- end of product-carousel-wrapper -->
                                </div>
                            </div><!-- end of row -->

                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <div class="promo-banner hover-effect-1 mt-half">
                                        <a href="#">
                                            <img src="<?php echo $urlTemplate;?>assets/images/banners/banner-6.jpg" alt="Promo Banner">
                                        </a>
                                    </div>
                                </div>
                            </div><!-- end of row -->

                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="section-title left-aligned with-border pt-half">
                                        <h2>Microphones</h2>
                                    </div>
                                    <div class="single-category-wrapper pos-r">
                                        <div class="product-carousel" data-visible-slide="2" data-visible-lg-slide="2" data-loop="true" data-speed="1000">

                                            <!-- Slides -->
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-1-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-1-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                </a>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                <h4 class="product-name"><a href="single-product.html">Accumsan Elit</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$330.00</span>
                                                                    <span class="price-new">$120.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-2-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-2-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                </a>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Aliquam Consequat</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$420.00</span>
                                                                    <span class="price-new">$150.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-3-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-3-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                </a>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-4-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-4-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                </a>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                <h4 class="product-name"><a href="single-product.html">Donec Ac Tempus</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$430.00</span>
                                                                    <span class="price-new">$100.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-5-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-5-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                </a>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                <h4 class="product-name"><a href="single-product.html">Donec Non Est</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-new">$280.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->
                                            </div> <!-- end of swiper-wrapper -->

                                            <!-- Navigation -->
                                            <div class="swiper-arrow top-nav next"><i class="fa fa-angle-right"></i></div>
                                            <div class="swiper-arrow top-nav prev"><i class="fa fa-angle-left"></i></div>
                                        </div> <!-- end of product-carousel -->
                                    </div> <!-- end of single-category-wrapper -->
                                </div>

                                <div class="col-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="section-title left-aligned with-border pt-half">
                                        <h2>On-Ear</h2>
                                    </div>
                                    <div class="single-category-wrapper pos-r last">
                                        <div class="product-carousel" data-visible-slide="2" data-visible-lg-slide="2" data-loop="true" data-speed="1000">

                                            <!-- Slides -->
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-6-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-6-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                </a>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                <h4 class="product-name"><a href="single-product.html">Etiam Gravida</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-new">$100.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-7-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-7-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                </a>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Fusce Aliquam</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-new">$240.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-8-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-8-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                </a>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Fusce Sheam</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-new">$180.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-9-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                </a>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                <h4 class="product-name"><a href="single-product.html">Letraset Sheets</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-new">$260.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->

                                                <div class="swiper-slide product-layout product-grid">
                                                    <div class="product-thumb">
                                                        <div class="product-inner">
                                                            <div class="product-image">
                                                                <a href="single-product.html">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-10-2.jpg" alt="Proin Lectus Ipsum" class="hover-image">
                                                                    <img src="<?php echo $urlTemplate;?>assets/images/products/best/products-10-1.jpg" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                                                </a>
                                                                <div class="action-links">
                                                                    <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
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
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                            <li><i class="fa fa-star-o"></i></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <h4 class="product-name"><a href="single-product.html">Lorem Ipsum</a></h4>
                                                                <p class="product-price">
                                                                    <span class="price-old">$430.00</span>
                                                                    <span class="price-new">$200.00</span>
                                                                </p>
                                                            </div><!-- end of product-caption -->
                                                        </div><!-- end of product-inner -->
                                                    </div><!-- end of product-thumb -->
                                                </div> <!-- end of product-layout -->
                                            </div> <!-- end of swiper-wrapper -->

                                            <!-- Navigation -->
                                            <div class="swiper-arrow top-nav next"><i class="fa fa-angle-right"></i></div>
                                            <div class="swiper-arrow top-nav prev"><i class="fa fa-angle-left"></i></div>
                                        </div> <!-- end of product-carousel -->
                                    </div> <!-- end of single-category-wrapper -->
                                </div>
                            </div><!-- end of row -->
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of Product Showcase Section -->

            <!-- Start of Bottom Banner Section -->
            <section class="bottom-banner-section bg-img-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="banner-with-text image-placeholder">
                                <img src="<?php echo $urlTemplate;?>assets/images/banners/banner-18.png" class="visually-hidden" alt="Promo Banner">
                                <div class="banner-content">
                                    <h3>Save up to 50% Off!</h3>
                                    <h2>Logitech F70 Wireless Gamepad</h2>
                                    <a class="default-btn transparent" href="shop-grid.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of Bottom Banner Section -->

            <!-- Start of Client Section -->
            <div class="client-section mb-full">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="client-carousel">

                                <!-- Slides -->
                                <div class="swiper-wrapper">
                                    <div class="item-brand swiper-slide">
                                        <img src="<?php echo $urlTemplate;?>assets/images/brand/client-logo-1.jpg" alt="Client Logo">
                                    </div>
                                    <div class="item-brand swiper-slide">
                                        <img src="<?php echo $urlTemplate;?>assets/images/brand/client-logo-2.jpg" alt="Client Logo">
                                    </div>
                                    <div class="item-brand swiper-slide">
                                        <img src="<?php echo $urlTemplate;?>assets/images/brand/client-logo-3.jpg" alt="Client Logo">
                                    </div>
                                    <div class="item-brand swiper-slide">
                                        <img src="<?php echo $urlTemplate;?>assets/images/brand/client-logo-4.jpg" alt="Client Logo">
                                    </div>
                                    <div class="item-brand swiper-slide">
                                        <img src="<?php echo $urlTemplate;?>assets/images/brand/client-logo-5.jpg" alt="Client Logo">
                                    </div>
                                    <div class="item-brand swiper-slide">
                                        <img src="<?php echo $urlTemplate;?>assets/images/brand/client-logo-6.jpg" alt="Client Logo">
                                    </div>
                                    <div class="item-brand swiper-slide">
                                        <img src="<?php echo $urlTemplate;?>assets/images/brand/client-logo-7.jpg" alt="Client Logo">
                                    </div>
                                    <div class="item-brand swiper-slide">
                                        <img src="<?php echo $urlTemplate;?>assets/images/brand/client-logo-8.jpg" alt="Client Logo">
                                    </div>
                                </div>
                            </div> <!-- end of client-carousel -->
                        </div> <!-- end of col -->
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Client Section -->

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
        </main>
        <!-- End of Main Content Wrapper -->
