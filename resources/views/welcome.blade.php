 @extends('leyout.main')
 @section('content')
    <div class="slider-with-banner">
    <div class="container">
        <div class="row">

            <!-- ================= SLIDER ================= -->
            <div class="col-lg-8 col-md-8">
                <div class="slider-area">

                    <div class="slider-active owl-carousel">

                        <!-- Slide 1 -->
                        <div class="single-slide align-center-left animation-style-01 bg-1">

                            <div class="slider-progress"></div>

                            <div class="slider-content">

                                <h5>
                                    Sale Offer
                                    <span>-20% Off</span>
                                    This Week
                                </h5>

                                <h2>
                                    Chamcham Galaxy S9 | S9+
                                </h2>

                                <h3>
                                    Starting at
                                    <span>$1209.00</span>
                                </h3>

                                <div class="default-btn slide-btn">
                                    <a class="links" href="{{ url('/shop') }}">
                                        Shopping Now
                                    </a>
                                </div>

                            </div>

                        </div>


                        <!-- Slide 2 -->
                        <div class="single-slide align-center-left animation-style-02 bg-2">

                            <div class="slider-progress"></div>

                            <div class="slider-content">

                                <h5>
                                    Sale Offer
                                    <span>Black Friday</span>
                                    This Week
                                </h5>

                                <h2>
                                    Work Desk Surface Studio 2018
                                </h2>

                                <h3>
                                    Starting at
                                    <span>$824.00</span>
                                </h3>

                                <div class="default-btn slide-btn">
                                    <a class="links" href="{{ url('/shop') }}">
                                        Shopping Now
                                    </a>
                                </div>

                            </div>

                        </div>


                        <!-- Slide 3 -->
                        <div class="single-slide align-center-left animation-style-01 bg-3">

                            <div class="slider-progress"></div>

                            <div class="slider-content">

                                <h5>
                                    Sale Offer
                                    <span>-10% Off</span>
                                    This Week
                                </h5>

                                <h2>
                                    Phantom 4 Pro+ Obsidian
                                </h2>

                                <h3>
                                    Starting at
                                    <span>$1849.00</span>
                                </h3>

                                <div class="default-btn slide-btn">
                                    <a class="links" href="{{ url('/shop') }}">
                                        Shopping Now
                                    </a>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <!-- ================= SLIDER END ================= -->


            <!-- ================= BANNERS ================= -->
            <div class="col-lg-4 col-md-4 text-center pt-xs-30">

                <!-- Banner 1 -->
                <div class="li-banner">

                    <a href="#">
                        <img
                            src="{{ asset('images/banner/1_1.jpg') }}"
                            alt="Banner 1"
                        >
                    </a>

                </div>


                <!-- Banner 2 -->
                <div class="li-banner mt-15 mt-sm-30 mt-xs-30">

                    <a href="#">
                        <img
                            src="{{ asset('images/banner/1_2.jpg') }}"
                            alt="Banner 2"
                        >
                    </a>

                </div>

            </div>
            <!-- ================= BANNERS END ================= -->

        </div>
    </div>
</div>
     <div class="product-area pt-60 pb-50">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <!-- Product Tabs -->
                     <div class="li-product-tab">
                         <ul class="nav li-product-menu">
                             <li><a class="active show" data-toggle="tab" href="#li-new-product"><span>New
                                         Arrival</span></a></li>
                             <li><a data-toggle="tab" href="#li-bestseller-product"><span>Bestseller</span></a>
                             </li>
                             <li><a data-toggle="tab" href="#li-featured-product"><span>Featured
                                         Products</span></a></li>
                         </ul>
                     </div>
                 </div>
             </div>

             <!-- Tab Content -->
             <div class="tab-content">
                 <!-- New Product Tab -->
                 <div id="li-new-product" class="tab-pane active show" role="tabpanel">
                     <div class="row">
                         <div class="product-active owl-carousel">

                             <!-- Single Product -->
                             <div class="single-product-wrap">
                                 <div class="product-image">
                                     <a href="single-product.html">
                                         <img src="images/product/large-size/1.jpg" alt="Product Image">
                                     </a>
                                     <span class="sticker">New</span>
                                 </div>
                                 <div class="product_desc">
                                     <div class="product_desc_info">
                                         <h5 class="manufacturer">
                                             <a href="shop-left-sidebar.html">Graphic Corner</a>
                                         </h5>
                                         <div class="rating-box">
                                             <ul class="rating">
                                                 <li><i class="fa fa-star-o"></i></li>
                                                 <li><i class="fa fa-star-o"></i></li>
                                                 <li><i class="fa fa-star-o"></i></li>
                                                 <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                 <li class="no-star"><i class="fa fa-star-o"></i></li>
                                             </ul>
                                         </div>
                                         <h4><a class="product_name" href="single-product.html">Accusantium
                                                 dolorem1</a></h4>
                                         <div class="price-box">
                                             <span class="new-price">$46.80</span>
                                         </div>
                                     </div>
                                     <div class="add-actions">
                                         <ul class="add-actions-link">
                                             <li class="add-cart active"><a href="#">Add to cart</a></li>
                                             <li><a class="links-details" href="wishlist.html"><i
                                                         class="fa fa-heart-o"></i></a></li>
                                             <li><a href="#" title="quick view" class="quick-view-btn"
                                                     data-toggle="modal" data-target="#exampleModalCenter"><i
                                                         class="fa fa-eye"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Single Product -->

                             <!-- Another Product -->
                             <div class="single-product-wrap">
                                 <div class="product-image">
                                     <a href="single-product.html">
                                         <img src="images/product/large-size/2.jpg" alt="Product Image">
                                     </a>
                                     <span class="sticker">New</span>
                                 </div>
                                 <div class="product_desc">
                                     <div class="product_desc_info">
                                         <h5 class="manufacturer">
                                             <a href="shop-left-sidebar.html">Studio Design</a>
                                         </h5>
                                         <h4><a class="product_name" href="single-product.html">Mug Today is a good
                                                 day</a></h4>
                                         <div class="price-box">
                                             <span class="new-price">$71.80</span>
                                             <span class="old-price">$77.22</span>
                                             <span class="discount-percentage">-7%</span>
                                         </div>
                                     </div>
                                     <div class="add-actions">
                                         <ul class="add-actions-link">
                                             <li class="add-cart active"><a href="#">Add to cart</a></li>
                                             <li><a class="links-details" href="wishlist.html"><i
                                                         class="fa fa-heart-o"></i></a></li>
                                             <li><a href="#" title="quick view" class="quick-view-btn"
                                                     data-toggle="modal" data-target="#exampleModalCenter"><i
                                                         class="fa fa-eye"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Another Product -->

                         </div>
                     </div>
                 </div>
                 <!-- End New Product Tab -->
             </div>
         </div>
     </div>

     <div class="li-static-banner">
         <div class="container">
             <div class="row">
                 <!-- Begin Single Banner Area -->
                 <div class="col-lg-4 col-md-4 text-center">
                     <div class="single-banner">
                         <a href="#">
                             <img src="images/banner/1_3.jpg" alt="Li's Static Banner">
                         </a>
                     </div>
                 </div>
                 <!-- Single Banner Area End Here -->
                 <!-- Begin Single Banner Area -->
                 <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                     <div class="single-banner">
                         <a href="#">
                             <img src="images/banner/1_4.jpg" alt="Li's Static Banner">
                         </a>
                     </div>
                 </div>
                 <!-- Single Banner Area End Here -->
                 <!-- Begin Single Banner Area -->
                 <div class="col-lg-4 col-md-4 text-center pt-xs-30">
                     <div class="single-banner">
                         <a href="#">
                             <img src="images/banner/1_5.jpg" alt="Li's Static Banner">
                         </a>
                     </div>
                 </div>
                 <!-- Single Banner Area End Here -->
             </div>
         </div>
     </div>


     <section class="product-area li-laptop-product pt-60 pb-45">
         <div class="container">
             <div class="row">
                 <!-- Section Title -->
                 <div class="col-lg-12">
                     <div class="li-section-title">
                         <h2><span>Laptop</span></h2>
                         <ul class="li-sub-category-list">
                             <li class="active"><a href="shop-left-sidebar.html">Prime Video</a></li>
                             <li><a href="shop-left-sidebar.html">Computers</a></li>
                             <li><a href="shop-left-sidebar.html">Electronics</a></li>
                         </ul>
                     </div>
                 </div>
             </div>

             <!-- Product Carousel -->
             <div class="row">
                 <div class="product-active owl-carousel">

                     <!-- Single Product -->
                     <div class="single-product-wrap">
                         <div class="product-image">
                             <a href="single-product.html">
                                 <img src="images/product/large-size/1.jpg" alt="Laptop Product">
                             </a>
                             <span class="sticker">New</span>
                         </div>
                         <div class="product_desc">
                             <div class="product_desc_info">
                                 <h5 class="manufacturer">
                                     <a href="shop-left-sidebar.html">Graphic Corner</a>
                                 </h5>
                                 <div class="rating-box">
                                     <ul class="rating">
                                         <li><i class="fa fa-star-o"></i></li>
                                         <li><i class="fa fa-star-o"></i></li>
                                         <li><i class="fa fa-star-o"></i></li>
                                         <li class="no-star"><i class="fa fa-star-o"></i></li>
                                         <li class="no-star"><i class="fa fa-star-o"></i></li>
                                     </ul>
                                 </div>
                                 <h4><a class="product_name" href="single-product.html">Accusantium dolorem1</a>
                                 </h4>
                                 <div class="price-box">
                                     <span class="new-price">$46.80</span>
                                 </div>
                             </div>
                             <div class="add-actions">
                                 <ul class="add-actions-link">
                                     <li class="add-cart active"><a href="#">Add to cart</a></li>
                                     <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                     </li>
                                     <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal"
                                             data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <!-- End Single Product -->

                     <!-- Another Product -->
                     <div class="single-product-wrap">
                         <div class="product-image">
                             <a href="single-product.html">
                                 <img src="images/product/large-size/2.jpg" alt="Laptop Product">
                             </a>
                             <span class="sticker">New</span>
                         </div>
                         <div class="product_desc">
                             <div class="product_desc_info">
                                 <h5 class="manufacturer">
                                     <a href="shop-left-sidebar.html">Studio Design</a>
                                 </h5>
                                 <h4><a class="product_name" href="single-product.html">Mug Today is a good day</a>
                                 </h4>
                                 <div class="price-box">
                                     <span class="new-price">$71.80</span>
                                     <span class="old-price">$77.22</span>
                                     <span class="discount-percentage">-7%</span>
                                 </div>
                             </div>
                             <div class="add-actions">
                                 <ul class="add-actions-link">
                                     <li class="add-cart active"><a href="#">Add to cart</a></li>
                                     <li><a class="links-details" href="wishlist.html"><i class="fa fa-heart-o"></i></a>
                                     </li>
                                     <li><a href="#" title="quick view" class="quick-view-btn" data-toggle="modal"
                                             data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <!-- End Another Product -->

                 </div>
             </div>
         </div>
     </section>
     <div class="li-static-home">
         <div class="container">
             <div class="row">
                 <div class="col-lg-12">
                     <!-- Begin Li's Static Home Image Area -->
                     <div class="li-static-home-image"></div>
                     <!-- Li's Static Home Image Area End Here -->
                     <!-- Begin Li's Static Home Content Area -->
                     <div class="li-static-home-content">
                         <p>Sale Offer<span>-20% Off</span>This Week</p>
                         <h2>Featured Product</h2>
                         <h2>Meito Accessories 2018</h2>
                         <p class="schedule">
                             Starting at
                             <span> $1209.00</span>
                         </p>
                         <div class="default-btn">
                             <a href="shop-left-sidebar.html" class="links">Shopping Now</a>
                         </div>
                     </div>
                     <!-- Li's Static Home Content Area End Here -->
                 </div>
             </div>
         </div>
     </div>
     <section class="product-area li-trending-product pt-60 pb-45">
         <div class="container">
             <div class="row">
                 <!-- Section Title -->
                 <div class="col-lg-12">
                     <div class="li-product-tab li-trending-product-tab">
                         <h2><span>Trending Products</span></h2>
                         <ul class="nav li-product-menu li-trending-product-menu">
                             <li><a class="active" data-toggle="tab" href="#home1"><span>Sanai</span></a></li>
                             <li><a data-toggle="tab" href="#home2"><span>Camera Accessories</span></a></li>
                             <li><a data-toggle="tab" href="#home3"><span>XailStation</span></a></li>
                         </ul>
                     </div>
                 </div>
             </div>

             <!-- Tab Content -->
             <div class="tab-content li-tab-content li-trending-product-content">
                 <!-- Sanai Tab -->
                 <div id="home1" class="tab-pane fade show active">
                     <div class="row">
                         <div class="product-active owl-carousel">

                             <!-- Single Product -->
                             <div class="single-product-wrap">
                                 <div class="product-image">
                                     <a href="single-product.html">
                                         <img src="images/product/large-size/2.jpg" alt="Trending Product">
                                     </a>
                                     <span class="sticker">New</span>
                                 </div>
                                 <div class="product_desc">
                                     <div class="product_desc_info">
                                         <h5 class="manufacturer">
                                             <a href="shop-left-sidebar.html">Graphic Corner</a>
                                         </h5>
                                         <div class="rating-box">
                                             <ul class="rating">
                                                 <li><i class="fa fa-star-o"></i></li>
                                                 <li><i class="fa fa-star-o"></i></li>
                                                 <li><i class="fa fa-star-o"></i></li>
                                                 <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                 <li class="no-star"><i class="fa fa-star-o"></i></li>
                                             </ul>
                                         </div>
                                         <h4><a class="product_name" href="single-product.html">Accusantium
                                                 dolorem1</a></h4>
                                         <div class="price-box">
                                             <span class="new-price">$46.80</span>
                                         </div>
                                     </div>
                                     <div class="add-actions">
                                         <ul class="add-actions-link">
                                             <li class="add-cart active"><a href="#">Add to cart</a></li>
                                             <li><a class="links-details" href="wishlist.html"><i
                                                         class="fa fa-heart-o"></i></a></li>
                                             <li><a href="#" class="quick-view-btn" data-toggle="modal"
                                                     data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Single Product -->

                             <!-- Another Product -->
                             <div class="single-product-wrap">
                                 <div class="product-image">
                                     <a href="single-product.html">
                                         <img src="images/product/large-size/4.jpg" alt="Trending Product">
                                     </a>
                                     <span class="sticker">New</span>
                                 </div>
                                 <div class="product_desc">
                                     <div class="product_desc_info">
                                         <h5 class="manufacturer">
                                             <a href="shop-left-sidebar.html">Studio Design</a>
                                         </h5>
                                         <h4><a class="product_name" href="single-product.html">Mug Today is a good
                                                 day</a></h4>
                                         <div class="price-box">
                                             <span class="new-price">$71.80</span>
                                             <span class="old-price">$77.22</span>
                                             <span class="discount-percentage">-7%</span>
                                         </div>
                                     </div>
                                     <div class="add-actions">
                                         <ul class="add-actions-link">
                                             <li class="add-cart active"><a href="#">Add to cart</a></li>
                                             <li><a class="links-details" href="wishlist.html"><i
                                                         class="fa fa-heart-o"></i></a></li>
                                             <li><a href="#" class="quick-view-btn" data-toggle="modal"
                                                     data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Another Product -->

                         </div>
                     </div>
                 </div>
                 <!-- End Sanai Tab -->

                 <!-- Camera Accessories Tab -->
                 <div id="home2" class="tab-pane fade">
                     <p>Camera accessories products go here...</p>
                 </div>

                 <!-- XailStation Tab -->
                 <div id="home3" class="tab-pane fade">
                     <p>XailStation products go here...</p>
                 </div>
             </div>
         </div>
     </section>
     <section class="product-area li-trending-product pt-60 pb-45">
         <div class="container">
             <div class="row">
                 <!-- Section Title -->
                 <div class="col-lg-12">
                     <div class="li-product-tab li-trending-product-tab">
                         <h2><span>Trending Products</span></h2>
                         <ul class="nav li-product-menu li-trending-product-menu">
                             <li><a class="active" data-toggle="tab" href="#home1"><span>Sanai</span></a></li>
                             <li><a data-toggle="tab" href="#home2"><span>Camera Accessories</span></a></li>
                             <li><a data-toggle="tab" href="#home3"><span>XailStation</span></a></li>
                         </ul>
                     </div>
                 </div>
             </div>

             <!-- Tab Content -->
             <div class="tab-content li-tab-content li-trending-product-content">
                 <!-- Sanai Tab -->
                 <div id="home1" class="tab-pane fade show active">
                     <div class="row">
                         <div class="product-active owl-carousel">

                             <!-- Single Product -->
                             <div class="single-product-wrap">
                                 <div class="product-image">
                                     <a href="single-product.html">
                                         <img src="images/product/large-size/2.jpg" alt="Trending Product">
                                     </a>
                                     <span class="sticker">New</span>
                                 </div>
                                 <div class="product_desc">
                                     <div class="product_desc_info">
                                         <h5 class="manufacturer">
                                             <a href="shop-left-sidebar.html">Graphic Corner</a>
                                         </h5>
                                         <div class="rating-box">
                                             <ul class="rating">
                                                 <li><i class="fa fa-star-o"></i></li>
                                                 <li><i class="fa fa-star-o"></i></li>
                                                 <li><i class="fa fa-star-o"></i></li>
                                                 <li class="no-star"><i class="fa fa-star-o"></i></li>
                                                 <li class="no-star"><i class="fa fa-star-o"></i></li>
                                             </ul>
                                         </div>
                                         <h4><a class="product_name" href="single-product.html">Accusantium
                                                 dolorem1</a></h4>
                                         <div class="price-box">
                                             <span class="new-price">$46.80</span>
                                         </div>
                                     </div>
                                     <div class="add-actions">
                                         <ul class="add-actions-link">
                                             <li class="add-cart active"><a href="#">Add to cart</a></li>
                                             <li><a class="links-details" href="wishlist.html"><i
                                                         class="fa fa-heart-o"></i></a></li>
                                             <li><a href="#" class="quick-view-btn" data-toggle="modal"
                                                     data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Single Product -->

                             <!-- Another Product -->
                             <div class="single-product-wrap">
                                 <div class="product-image">
                                     <a href="single-product.html">
                                         <img src="images/product/large-size/4.jpg" alt="Trending Product">
                                     </a>
                                     <span class="sticker">New</span>
                                 </div>
                                 <div class="product_desc">
                                     <div class="product_desc_info">
                                         <h5 class="manufacturer">
                                             <a href="shop-left-sidebar.html">Studio Design</a>
                                         </h5>
                                         <h4><a class="product_name" href="single-product.html">Mug Today is a good
                                                 day</a></h4>
                                         <div class="price-box">
                                             <span class="new-price">$71.80</span>
                                             <span class="old-price">$77.22</span>
                                             <span class="discount-percentage">-7%</span>
                                         </div>
                                     </div>
                                     <div class="add-actions">
                                         <ul class="add-actions-link">
                                             <li class="add-cart active"><a href="#">Add to cart</a></li>
                                             <li><a class="links-details" href="wishlist.html"><i
                                                         class="fa fa-heart-o"></i></a></li>
                                             <li><a href="#" class="quick-view-btn" data-toggle="modal"
                                                     data-target="#exampleModalCenter"><i class="fa fa-eye"></i></a></li>
                                         </ul>
                                     </div>
                                 </div>
                             </div>
                             <!-- End Another Product -->

                         </div>
                     </div>
                 </div>
                 <!-- End Sanai Tab -->

                 <!-- Camera Accessories Tab -->
                 <div id="home2" class="tab-pane fade">
                     <p>Camera accessories products go here...</p>
                 </div>

                 <!-- XailStation Tab -->
                 <div id="home3" class="tab-pane fade">
                     <p>XailStation products go here...</p>
                 </div>
             </div>
         </div>
     </section>
 @endsection
