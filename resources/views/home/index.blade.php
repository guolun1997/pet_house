@extends('layout.public')

@section("slider")

    <div id="slider" class="slider-area home">
        <div class="slider-wrap">
            <div class="bend niceties">
                <div id="ensign-nivoslider" class="slides">
                    <img src="/hom/img/slider/bg-1.jpg" alt="" title="#slider-direction-1"/>
                    <img src="/hom/img/slider/bg-2.jpg" alt="" title="#slider-direction-2"/>
                    <img src="/hom/img/slider/bg-3.jpg" alt="" title="#slider-direction-3"/>
                </div>
                <!-- slider-direction-1 -->
                <div id="slider-direction-1" class="slider-direction slide-1">
                    <!-- layer-1 -->
                    <div class="layer-1-1">
                        <h1 class="title1">new food for your pet</h1>
                        <h1 class="big-title">natural</h1>
                    </div>
                    <!-- layer-2 -->
                    <div class="layer-1-2">
                        <h1 class="title2">%<span>20</span>&nbsp;0ff</h1>
                    </div>
                    <!-- layer-3 -->
                    <div class="layer-1-3">
                        <img src="/hom/img/slider/product-1.png" alt="" />
                    </div>
                    <!-- layer-4 -->
                    <div class="layer-1-4">
                        <img src="/hom/img/slider/product-2.png" alt="" />
                    </div>
                    <!-- layer-5 -->
                    <div class="layer-1-5">
                        <img src="/hom/img/slider/product-3.png" alt="" />
                    </div>
                    <!-- layer-6 -->
                    <div class="layer-1-6">
                        <h1 class="title3"><small>Fr</small>&nbsp;$<span>36</span>.99</h1>
                    </div>
                </div>
                <!-- slider-direction-2 -->
                <div id="slider-direction-2" class="slider-direction slide-2">
                    <!-- layer-1 -->
                    <div class="layer-2-1">
                        <h1 class="title1">your dog</h1>
                    </div>
                    <!-- layer-2 -->
                    <div class="layer-2-2">
                        <h1 class="title2">deserves the best</h1>
                    </div>
                    <!-- layer-3 -->
                    <div class="layer-2-3">
                        <p>We know your concerns when you are looking<br/>for a chewing treat for your dog.</p>
                    </div>
                    <!-- layer-4 -->
                    <div class="layer-2-4">
                        <h1 class="title3">$<span>36</span>.99</h1>
                    </div>
                    <!-- layer-5 -->
                    <div class="layer-2-5">
                        <img src="/hom/img/slider/slide-2.png" alt="" />
                    </div>
                </div>
                <!-- slider-direction-3 -->
                <div id="slider-direction-3" class="slider-direction slide-3">
                    <!-- layer-1 -->
                    <div class="layer-3-1">
                        <h1 class="title1">health</h1>
                    </div>
                    <!-- layer-2 -->
                    <div class="layer-3-2">
                        <h1 class="title2">nutrition</h1>
                    </div>
                    <!-- layer-3 -->
                    <div class="layer-3-3">
                        <h2 class="title3">for dogs and cats</h2>
                    </div>
                    <!-- layer-4 -->
                    <div class="layer-3-4">
                        <h1 class="title4"><small>Save up To </small>%<span>30</span>.off</h1>
                    </div>
                    <!-- layer 5 -->
                    <div class="layer-3-5">
                        <img src="/hom/img/slider/slide-3.png" alt="" />
                    </div>
                </div>
            </div>
        </div><!-- /.slider-wrap -->
    </div>


@endsection


@section("pet_list")
    <div id="products" class="our-products-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h1 class="section-title">food</h1>
                        <h6 class="section-subtitle">our products</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="products-carousel" class="all-products">
                    <div class="col-md-3">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="/hom/img/products/7.jpg" class="primary-img" alt="Product Image" />
                                    <img src="/hom/img/products/9.jpg" class="secondary-img" alt="Product Image" />
                                </a>
                                <div class="product-overlay"></div>
                                <a class="quick-view modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-search"></i></a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-name"><a href="product-details.html">Dog food produts</a></h6>
                                <div class="product-price">
                                    <h6 class="special-price">$<span>35</span>.99</h6>
                                    <h6 class="old-price">$<span>40</span>.99</h6>
                                </div>
                                <div class="cart-btn-container">
                                    <a href="#" class="cart-btn">add to cart</a>
                                </div>
                            </div>
                        </div><!-- /.single-product -->
                    </div>
                    <div class="col-md-3">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="/hom/img/products/3.jpg" class="primary-img" alt="Product Image" />
                                    <img src="/hom/img/products/2.jpg" class="secondary-img" alt="Product Image" />
                                </a>
                                <div class="product-overlay"></div>
                                <span class="tag sale">sale</span>
                                <a class="quick-view modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-search"></i></a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-name"><a href="product-details.html">Dog food produts</a></h6>
                                <div class="product-price">
                                    <h6 class="special-price">$<span>35</span>.99</h6>
                                    <h6 class="old-price">$<span>40</span>.99</h6>
                                </div>
                                <div class="cart-btn-container">
                                    <a href="#" class="cart-btn">add to cart</a>
                                </div>
                            </div>
                        </div><!-- /.single-product -->
                    </div>
                    <div class="col-md-3">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="/hom/img/products/6.jpg" class="primary-img" alt="Product Image" />
                                    <img src="/hom/img/products/12.jpg" class="secondary-img" alt="Product Image" />
                                </a>
                                <div class="product-overlay"></div>
                                <a class="quick-view modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-search"></i></a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-name"><a href="product-details.html">Dog food produts</a></h6>
                                <div class="product-price">
                                    <h6 class="regular-price">$<span>30</span>.99</h6>
                                </div>
                                <div class="cart-btn-container">
                                    <a href="#" class="cart-btn">add to cart</a>
                                </div>
                            </div>
                        </div><!-- /.single-product -->
                    </div>
                    <div class="col-md-3">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="/hom/img/products/8.jpg" class="primary-img" alt="Product Image" />
                                    <img src="/hom/img/products/1.jpg" class="secondary-img" alt="Product Image" />
                                </a>
                                <div class="product-overlay"></div>
                                <span class="tag hot">hot</span>
                                <a class="quick-view modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-search"></i></a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-name"><a href="product-details.html">Dog food produts</a></h6>
                                <div class="product-price">
                                    <h6 class="special-price">$<span>22</span>.99</h6>
                                    <h6 class="old-price">$<span>30</span>.99</h6>
                                </div>
                                <div class="cart-btn-container">
                                    <a href="#" class="cart-btn">add to cart</a>
                                </div>
                            </div>
                        </div><!-- /.single-product -->
                    </div>
                    <div class="col-md-3">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="/hom/img/products/5.jpg" class="primary-img" alt="Product Image" />
                                    <img src="/hom/img/products/4.jpg" class="secondary-img" alt="Product Image" />
                                </a>
                                <div class="product-overlay"></div>
                                <a class="quick-view modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-search"></i></a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-name"><a href="product-details.html">Dog food produts</a></h6>
                                <div class="product-price">
                                    <h6 class="special-price">$<span>35</span>.99</h6>
                                    <h6 class="old-price">$<span>40</span>.99</h6>
                                </div>
                                <div class="cart-btn-container">
                                    <a href="#" class="cart-btn">add to cart</a>
                                </div>
                            </div>
                        </div><!-- /.single-product -->
                    </div>
                    <div class="col-md-3">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="/hom/img/products/12.jpg" class="primary-img" alt="Product Image" />
                                    <img src="/hom/img/products/6.jpg" class="secondary-img" alt="Product Image" />
                                </a>
                                <div class="product-overlay"></div>
                                <a class="quick-view modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-search"></i></a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-name"><a href="product-details.html">Dog food produts</a></h6>
                                <div class="product-price">
                                    <h6 class="special-price">$<span>35</span>.99</h6>
                                    <h6 class="old-price">$<span>40</span>.99</h6>
                                </div>
                                <div class="cart-btn-container">
                                    <a href="#" class="cart-btn">add to cart</a>
                                </div>
                            </div>
                        </div><!-- /.single-product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--

@section("food_list")
    <div id="product" class="our-products-area text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h1 class="section-title">food</h1>
                        <h6 class="section-subtitle">our products</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="products-carousel" class="all-products">
                    <div class="col-md-3">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="/hom/img/products/7.jpg" class="primary-img" alt="Product Image" />
                                    <img src="/hom/img/products/9.jpg" class="secondary-img" alt="Product Image" />
                                </a>
                                <div class="product-overlay"></div>
                                <a class="quick-view modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-search"></i></a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-name"><a href="product-details.html">Dog food produts</a></h6>
                                <div class="product-price">
                                    <h6 class="special-price">$<span>35</span>.99</h6>
                                    <h6 class="old-price">$<span>40</span>.99</h6>
                                </div>
                                <div class="cart-btn-container">
                                    <a href="#" class="cart-btn">add to cart</a>
                                </div>
                            </div>
                        </div><!-- /.single-product -->
                    </div>
                    <div class="col-md-3">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="/hom/img/products/3.jpg" class="primary-img" alt="Product Image" />
                                    <img src="/hom/img/products/2.jpg" class="secondary-img" alt="Product Image" />
                                </a>
                                <div class="product-overlay"></div>
                                <span class="tag sale">sale</span>
                                <a class="quick-view modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-search"></i></a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-name"><a href="product-details.html">Dog food produts</a></h6>
                                <div class="product-price">
                                    <h6 class="special-price">$<span>35</span>.99</h6>
                                    <h6 class="old-price">$<span>40</span>.99</h6>
                                </div>
                                <div class="cart-btn-container">
                                    <a href="#" class="cart-btn">add to cart</a>
                                </div>
                            </div>
                        </div><!-- /.single-product -->
                    </div>
                    <div class="col-md-3">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="/hom/img/products/6.jpg" class="primary-img" alt="Product Image" />
                                    <img src="/hom/img/products/12.jpg" class="secondary-img" alt="Product Image" />
                                </a>
                                <div class="product-overlay"></div>
                                <a class="quick-view modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-search"></i></a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-name"><a href="product-details.html">Dog food produts</a></h6>
                                <div class="product-price">
                                    <h6 class="regular-price">$<span>30</span>.99</h6>
                                </div>
                                <div class="cart-btn-container">
                                    <a href="#" class="cart-btn">add to cart</a>
                                </div>
                            </div>
                        </div><!-- /.single-product -->
                    </div>
                    <div class="col-md-3">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="/hom/img/products/8.jpg" class="primary-img" alt="Product Image" />
                                    <img src="/hom/img/products/1.jpg" class="secondary-img" alt="Product Image" />
                                </a>
                                <div class="product-overlay"></div>
                                <span class="tag hot">hot</span>
                                <a class="quick-view modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-search"></i></a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-name"><a href="product-details.html">Dog food produts</a></h6>
                                <div class="product-price">
                                    <h6 class="special-price">$<span>22</span>.99</h6>
                                    <h6 class="old-price">$<span>30</span>.99</h6>
                                </div>
                                <div class="cart-btn-container">
                                    <a href="#" class="cart-btn">add to cart</a>
                                </div>
                            </div>
                        </div><!-- /.single-product -->
                    </div>
                    <div class="col-md-3">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="/hom/img/products/5.jpg" class="primary-img" alt="Product Image" />
                                    <img src="/hom/img/products/4.jpg" class="secondary-img" alt="Product Image" />
                                </a>
                                <div class="product-overlay"></div>
                                <a class="quick-view modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-search"></i></a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-name"><a href="product-details.html">Dog food produts</a></h6>
                                <div class="product-price">
                                    <h6 class="special-price">$<span>35</span>.99</h6>
                                    <h6 class="old-price">$<span>40</span>.99</h6>
                                </div>
                                <div class="cart-btn-container">
                                    <a href="#" class="cart-btn">add to cart</a>
                                </div>
                            </div>
                        </div><!-- /.single-product -->
                    </div>
                    <div class="col-md-3">
                        <div class="single-product">
                            <div class="product-img">
                                <a href="product-details.html">
                                    <img src="/hom/img/products/12.jpg" class="primary-img" alt="Product Image" />
                                    <img src="/hom/img/products/6.jpg" class="secondary-img" alt="Product Image" />
                                </a>
                                <div class="product-overlay"></div>
                                <a class="quick-view modal-view" href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-search"></i></a>
                            </div>
                            <div class="product-info">
                                <h6 class="product-name"><a href="product-details.html">Dog food produts</a></h6>
                                <div class="product-price">
                                    <h6 class="special-price">$<span>35</span>.99</h6>
                                    <h6 class="old-price">$<span>40</span>.99</h6>
                                </div>
                                <div class="cart-btn-container">
                                    <a href="#" class="cart-btn">add to cart</a>
                                </div>
                            </div>
                        </div><!-- /.single-product -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
--}}
