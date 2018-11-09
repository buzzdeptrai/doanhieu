<?php
    $productSingle = $queryObj->getProductByUrl($_REQUEST['idx']);

    $allImages  = $queryObj->queryDB("
                                        SELECT * FROM `product_imgaes`
                                        where product_id = ".$productSingle['product_id']);
    $imagesList = '';
    $imagesListThumb = '';
    if(is_array($allImages))
    foreach ($allImages as $key => $value) {
        $imagesList .= '<figure class="swiper-slide">
                            <a href="'.$urlFontEnd.'resource/image_product/'.$value['images'].'" data-size="800x800">
                                <img src="'.$urlFontEnd.'resource/image_product/'.$value['images'].'" alt="Product Image">
                                <div class="image-overlay"><i class="pe-7s-expand1"></i></div>
                            </a>
                            <figcaption class="visually-hidden">
                                <span>Product Image</span>
                            </figcaption>
                        </figure>';
        $imagesListThumb .= '<div class="swiper-slide">
                                <img src="'.$urlFontEnd.'resource/image_product/'.$value['images'].'" alt="Product Thumbnail Image">
                            </div>';
    }
    //echo "SELECT * FROM product where product_category = ".$productSingle['product_category'];
    $allProduct = $queryObj->queryDB("SELECT * FROM product where product_category = ".$productSingle['product_category']);
    //echo count($allProduct);exit;
    $htmlListProduct = ''; 
    foreach ($allProduct as $key => $value) {
        $htmlListProduct .= '<div class="swiper-slide product-layout product-grid">
                                <div class="product-thumb">
                                    <div class="product-inner">
                                        <div class="product-image">
                                            <a href="'.$urlFontEnd.'product_single/'.$value['product_url'].'">
                                                <img src="'.$urlFontEnd.'resource/image_product/'.$value['product_images'].'" alt="Proin Lectus Ipsum" class="hover-image">
                                                <img src="'.$urlFontEnd.'resource/image_product/'.$value['product_images'].'" alt="Proin Lectus Ipsum" title="Proin Lectus Ipsum">
                                            </a>
                                            <div class="action-links">
                                                <a class="action-btn btn-cart" href="#" title="Add to Cart"><i class="pe-7s-cart"></i></a>
                                                <a class="action-btn btn-wishlist" href="#" title="Add to Wishlist"><i class="pe-7s-like"></i></a>
                                                <a class="action-btn btn-compare" href="#" title="Add to Compare"><i class="pe-7s-refresh-2"></i></a>
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
                                            <h4 class="product-name"><a href="'.$urlFontEnd.'product_single/'.$value['product_url'].'">'.$value['product_name'].'</a></h4>
                                            <p class="product-price">
                                                <span class="price-new">$'.$value['product_price'].'</span>
                                            </p>
                                        </div><!-- end of product-caption -->
                                    </div><!-- end of product-inner -->
                                </div><!-- end of product-thumb -->
                            </div> <!-- end of product-layout -->';
    }                      

    
    //print_r($productSingle);
?>

        <!-- Start of Breadcrumbs -->
        <div class="breadcrumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12">
                        <nav class="breadcrumb">
                            <a class="breadcrumb-item" href="<?php echo $urlFontEnd.'home'; ?>">Home</a>
                            <a class="breadcrumb-item" href="<?php echo $urlFontEnd.'product'; ?>">Shop</a>
                            <span class="breadcrumb-item active"><?php echo $productSingle['product_name']; ?></span>
                        </nav>
                    </div>
                </div> <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <!-- End of Breadcrumbs -->

        <!-- Start of Main Content Wrapper -->
        <div id="content" class="main-content-wrapper">
            
            <!-- Start of Main Product Wrapper -->
            <div class="main-product-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <main id="primary" class="site-main">
                                <div class="single-product-wrapper">
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="product-gallery">
                                                <div class="gallery-with-thumbs">
                                                    <div class="product-full-image main-slider image-popup">

                                                        <!-- Slides -->
                                                        <div class="swiper-wrapper">
                                                            <figure class="swiper-slide">
                                                                <a href="<?php echo $urlFontEnd.'resource/image_product/'.$productSingle['product_images']; ?> " data-size="800x800">
                                                                    <img src="<?php echo $urlFontEnd.'resource/image_product/'.$productSingle['product_images']; ?> " alt="Product Image">
                                                                    <div class="image-overlay"><i class="pe-7s-expand1"></i></div>
                                                                </a>
                                                                <figcaption class="visually-hidden">
                                                                    <span>Product Image</span>
                                                                </figcaption>
                                                            </figure>
                                                            
                                                            <?php echo  $imagesList; ?>
                                                        </div>
                                                    </div> <!-- end of product-full-image -->

                                                    <div class="product-thumb-image pos-r">
                                                        <div class="nav-slider">

                                                            <!-- Slides -->
                                                            <div class="swiper-wrapper">
                                                                <div class="swiper-slide">
                                                                    <img src="<?php echo $urlFontEnd.'resource/image_product/'.$productSingle['product_images']; ?>" alt="Product Thumbnail Image">
                                                                </div>
                                                                <?php echo $imagesListThumb;?>
                                                            </div>
                                                            
                                                            <!-- Navigation -->
                                                            <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                                                            <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                                                        </div> <!-- end of nav-slider -->
                                                    </div> <!-- end of product-thumb-image -->
                                                </div> <!-- end of gallery-with-thumbs -->
                                            </div> <!-- end of product-gallery -->
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-6">
                                            <div class="product-details">
                                                <h3 class="product-name"><?php echo $productSingle['product_name']; ?></h3>
                                                <div class="product-ratings d-flex">
                                                    <ul class="rating d-flex mr-4">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <ul class="comments-advices list-inline d-flex">
                                                        <li class="list-inline-item mr-3"><a href="#">2 Reviews</a></li>
                                                        <li class="list-inline-item"><a href="#">Write a Review</a></li>
                                                    </ul>
                                                </div>
                                                <div class="product-price">
                                                    <p class="d-flex align-items-center">
                                                        <span class="price-old">16.51</span>
                                                        <span class="price-new">$<?php echo $productSingle['product_price']; ?></span>
                                                        <span class="price-discount">-5%</span>
                                                    </p>
                                                </div>
                                                <div class="product-meta">
                                                    <ul class="list-unstyled">
                                                        <li>Brands <a href="#"><span>Canon</span></a></li>
                                                        <li>Product Code: <span>2</span></li>
                                                        <li>Reward Points: <span>200</span></li>
                                                        <li>Availability: <span>In Stock</span></li>
                                                    </ul>
                                                </div>
                                                <div class="product-description">
                                                    <p>The best is yet to come! Give your walls a voice with a framed poster. This aesthethic, optimistic poster will look great in your desk or in an open-space office. Painted wooden frame with passe-partout for more depth.</p>
                                                </div>
                                                <div class="product-actions">
                                                    <h3>Available Options</h3>
                                                    <div class="product-size clearfix">
                                                        <label>Size</label>
                                                        <select class="nice-select">
                                                            <option>S</option>
                                                            <option>M</option>
                                                            <option>L</option>
                                                        </select>
                                                    </div>
                                                    <div class="product-color clearfix">
                                                        <label>color</label>
                                                        <ul class="color-list">
                                                           <li>
                                                                <a class="white" href="#"></a>
                                                            </li>
                                                            <li>
                                                                <a class="orange active" href="#"></a>
                                                            </li>
                                                            <li>
                                                                <a class="paste" href="#"></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-stock">
                                                       <label>Quantity</label>
                                                        <ul class="d-flex flex-wrap align-items-center">
                                                            <li class="box-quantity">
                                                                <form action="#">
                                                                    <input class="quantity" type="number" min="1" value="1">
                                                                </form>
                                                            </li>
                                                            <li>
                                                                <button type="button" class="default-btn">Add to Cart</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="wishlist-compare">
                                                        <button class="btn-wishlist" type="button" title="Add to Wishlist">Add to Wishlist</button>
                                                        <button class="btn-compare" type="button" title="Add to Compare">Add to Compare</button>
                                                    </div>
                                                </div>

                                                <div class="social-sharing d-flex align-items-center mt-half">
                                                    <span>Share</span>
                                                    <ul class="list-inline">
                                                        <li class="list-inline-item"><a href="#" class="bg-facebook" data-toggle="tooltip" data-position="top" data-original-title="Facebook" target="_blank"><i class="fa fa-facebook"></i><span>Share</span></a></li>
                                                        <li class="list-inline-item"><a href="#" class="bg-twitter" data-toggle="tooltip" data-position="top" data-original-title="Twitter" target="_blank"><i class="fa fa-twitter"></i><span>Tweet</span></a></li>
                                                        <li class="list-inline-item"><a href="#" class="bg-gplus" data-toggle="tooltip" data-position="top" data-original-title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i><span>Google+</span></a></li>
                                                        <li class="list-inline-item"><a href="#" class="bg-pinterest" data-toggle="tooltip" data-position="top" data-original-title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i><span>Pinterest</span></a></li>
                                                    </ul>
                                                </div>
                                            </div> <!-- end of product-details -->
                                        </div>
                                    </div> <!-- end of row -->

                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12">
                                            <div class="product-info mt-full">
                                                 <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                                                    <li class="nav-item mr-4">
                                                        <a class="nav-link active" id="nav_desctiption" data-toggle="pill" href="#tab_description" role="tab" aria-controls="tab_description" aria-selected="true">Description</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="nav_review" data-toggle="pill" href="#tab_review" role="tab" aria-controls="tab_review" aria-selected="false">Reviews (2)</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane fade show active" id="tab_description" role="tabpanel" aria-labelledby="nav_desctiption">
                                                        <?php echo $productSingle['product_description']; ?>
                                                    </div>
                                                    <div class="tab-pane fade" id="tab_review" role="tabpanel" aria-labelledby="nav_review">
                                                        <div class="product-review">
                                                            <div class="customer-review">
                                                                <table class="table table-striped table-bordered">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><strong>Ororus Themes</strong></td>
                                                                            <td>09/04/2018</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2">
                                                                                <p>Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
                                                                                <div class="product-ratings d-flex justify-content-center">
                                                                                    <ul class="rating d-flex mr-4">
                                                                                        <li><i class="fa fa-star"></i></li>
                                                                                        <li><i class="fa fa-star"></i></li>
                                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table class="table table-striped table-bordered">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td><strong>John Doe</strong></td>
                                                                            <td>23/05/2018</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2">
                                                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum iusto reiciendis, vitae porro, unde hic debitis, velit facere culpa et nisi adipisci quis in aliquam dolore iure. Iure, dolore praesentium!</p>
                                                                                <div class="product-ratings d-flex justify-content-center">
                                                                                    <ul class="rating d-flex mr-4">
                                                                                        <li><i class="fa fa-star"></i></li>
                                                                                        <li><i class="fa fa-star"></i></li>
                                                                                        <li><i class="fa fa-star"></i></li>
                                                                                        <li><i class="fa fa-star"></i></li>
                                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div> <!-- end of customer-review -->
                                                            <form action="#" class="review-form">
                                                                <h2>Write a review</h2>
                                                                <div class="form-group row">
                                                                    <div class="col">
                                                                        <label class="col-form-label"><span class="text-danger">*</span> Your Name</label>
                                                                        <input type="text" class="form-control" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col">
                                                                        <label class="col-form-label"><span class="text-danger">*</span> Your Review</label>
                                                                        <textarea class="form-control" required></textarea>
                                                                        <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col">
                                                                        <label class="col-form-label"><span class="text-danger">*</span> Rating</label>
                                                                        &nbsp;&nbsp;&nbsp; Worst&nbsp;
                                                                        <input type="radio" value="1" name="rating">
                                                                        &nbsp;
                                                                        <input type="radio" value="2" name="rating">
                                                                        &nbsp;
                                                                        <input type="radio" value="3" name="rating">
                                                                        &nbsp;
                                                                        <input type="radio" value="4" name="rating">
                                                                        &nbsp;
                                                                        <input type="radio" value="5" name="rating" checked>
                                                                        &nbsp;Best
                                                                    </div>
                                                                </div>
                                                                <div class="buttons d-flex justify-content-end">
                                                                    <button class="default-btn" type="submit">Continue</button>
                                                                </div>
                                                            </form> <!-- end of review-form -->
                                                        </div> <!-- end of product-review -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> <!-- end of row -->
                                </div> <!-- end of single-product-wrapper -->
                            </main> <!-- end of #primary -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </div>
            <!-- End of Main Product Wrapper -->

            <!-- Start of Related Products -->
            <section class="related-products">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12">
                            <div class="section-title left-aligned with-border">
                                <h2>Related Products</h2>
                            </div>
                            <div class="latest-product-wrapper pos-r">
                                <div class="product-carousel" data-visible-slide="4" data-visible-lg-slide="4" data-visible-md-slide="3" data-visible-sm-slide="2" data-loop="true" data-speed="1000">

                                    <!-- Slides -->
                                    <div class="swiper-wrapper">
                                        
                                        <?php echo $htmlListProduct;?>

                                        
                                    </div> <!-- end of swiper-wrapper -->

                                    <!-- Navigation -->
                                    <div class="swiper-arrow next"><i class="fa fa-angle-right"></i></div>
                                    <div class="swiper-arrow prev"><i class="fa fa-angle-left"></i></div>
                                </div> <!-- end of product-carousel -->
                            </div> <!-- end of latest-product-wrapper -->
                        </div>
                    </div> <!-- end of row -->
                </div> <!-- end of container -->
            </section>
            <!-- End of Related Products -->

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


<style type="text/css">
    #tab_description img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 80%;
    }
</style>