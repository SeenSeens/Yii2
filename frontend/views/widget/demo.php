<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="no-js">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody([
    'options' => [
        'class' => [
            'home-4',
            'home-5'
        ]
    ],
]) ?>

<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->

<!-- header start -->
<header>
    <!-- header-top-area start -->
    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <!-- logo start -->
                <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
                    <div class="logo">
                        <a href="index.html"><img src="/img/logo/logo.png" alt="" /></a>
                    </div>
                    <div class="email-content">
                        <span>admin@bootexperts.com</span>
                    </div>
                </div>
                <!-- logo end -->
                <!-- header-menu-cart start -->
                <div class="col-lg-5 col-md-5 col-sm-4 col-xs-12">
                    <div class="header-menu-cart">
                        <div class="cart-total">
                            <ul>
                                <li><a href="cart.html"><span class="cart-icon"><i class="fa fa-shopping-cart"></i></span> <span class="cart-no">2</span></a>
                                    <div class="mini-cart-content">
                                        <div class="cart-img-details">
                                            <div class="cart-img-photo">
                                                <a href="#"><img src="img/product/total-cart.jpg" alt="" /></a>
                                                <span class="quantity">1</span>
                                            </div>
                                            <div class="cart-img-contaent">
                                                <a href="#"><h4>Ornare sed consequat</h4></a>
                                                <span>£515.00</span>
                                            </div>
                                            <div class="pro-del"><a href="#"><i class="fa fa-times-circle"></i></a></div>
                                        </div>
                                        <div class="clear"></div>
                                        <div class="cart-img-details">
                                            <div class="cart-img-photo">
                                                <a href="#"><img src="img/product/total-cart2.jpg" alt="" /></a>
                                                <span class="quantity">1</span>
                                            </div>
                                            <div class="cart-img-contaent">
                                                <a href="#"><h4>Aenean eu tristique</h4></a>
                                                <span>£70.00</span>
                                            </div>
                                            <div class="pro-del"><a href="#"><i class="fa fa-times-circle"></i></a></div>
                                        </div>
                                        <p class="total">Subtotal: <span class="amount">£585.00</span></p>
                                        <div class="clear"></div>
                                        <p class="cart-button-top"><a href="checkout.html">Checkout</a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="header-top-menu">
                            <ul>
                                <li><a href="#">English <i class="fa fa-caret-down"></i></a>
                                    <ul>
                                        <li><a href="#">Spanish</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- header-menu-cart end -->
            </div>
        </div>
    </div>
    <!-- header-top-area end -->
    <!-- mainmenu-area start -->
    <div class="mainmenu-area">
        <div class="container">
            <div class="menu-container-bg">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="mainmenu">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Home <span><i class="fa fa-caret-down"></i></span></a>
                                        <ul class="sub-menu">
                                            <li><a href="index-2.html">Home Shop 2</a></li>
                                            <li><a href="index-3.html">Home Shop 3</a></li>
                                            <li><a href="index-4.html">Home Shop 4</a></li>
                                            <li><a href="index-5.html">Home Shop 5</a></li>
                                            <li><a href="index-6.html">Home Shop 6</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Shop <span><i class="fa fa-caret-down"></i></span></a>
                                        <div class="mega-menu">
											<span>
												<a class="mega-menu-title" href="#">Shop Layouts</a>
												<a href="#">Full Width</a>
												<a href="#">Sidebar Left</a>
												<a href="#">Sidebar Right 	</a>
												<a href="#">Sidebar Right</a>
												<a href="shop-list.html">List View</a>
											</span>
                                            <span>
											  <a class="mega-menu-title" href="#">Shop Pages</a>
												<a href="#">Category </a>
												<a href="#">My Account </a>
												<a href="#">Wishlist</a>
												<a href="cart.html">Shopping Cart</a>
												<a href="checkout.html">Checkout</a>
											</span>
                                            <span>
												<a class="mega-menu-title" href="#">Product Types </a>
												<a href="product.html">Simple Product</a>
												<a href="product-variable.html">Variable Product</a>
												<a href="#">Grouped Product</a>
												<a href="#">Downloadable</a>
												<a href="#">External Product</a>
												<a href="#">Virtual Product</a>
											</span>
                                        </div>
                                    </li>
                                    <li><a href="blog-nosidebar.html">Blog <span><i class="fa fa-caret-down"></i></span></a>
                                        <div class="mega-menu">
											<span>
												<a class="mega-menu-title" href="#">Blog Layouts </a>
												<a href="blog-nosidebar.html">None Sidebar</a>
												<a href="blog-fullwidth.html">Full Width</a>
												<a href="blog-left-sidebar.html">Sidebar Left</a>
												<a href="blog-right-sidebar.html">Sidebar Right</a>
											</span>
                                            <span>
											  <a class="mega-menu-title" href="#">Blog Pages</a>
												<a href="blog-author.html">Author</a>
												<a href="blog-archive.html">Archive</a>
												<a href="blog-category.html">Category </a>
												<a href="blog-tag.html">Blog Tag</a>
											</span>
                                            <span>
												<a class="mega-menu-title" href="#">Post Formats</a>
												<a href="blog-post-image.html">Image Format</a>
												<a href="blog-post-gallery.html">Gallery Format </a>
												<a href="blog-post-audio.html">Audio Format </a>
												<a href="blog-post-video.html">Video Format</a>
											</span>
                                        </div>
                                    </li>
                                    <li><a href="#">Pages <span><i class="fa fa-caret-down"></i></span></a>
                                        <ul class="sub-menu">
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="product.html">Simple Product</a></li>
                                            <li><a href="product-variable.html">Variable Product</a></li>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-list.html">shop-list</a></li>
                                            <li><a href="404.html">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Buy Now</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-search">
                            <div class="top-category">
                                <ul>
                                    <li><a href="#">All Categories</a>
                                        <ul>
                                            <li><a href="#">All Categories</a></li>
                                            <li><a href="#">Accessories</a></li>
                                            <li><a href="#">Digital</a></li>
                                            <li><a href="#">_Camera</a></li>
                                            <li><a href="#">_Refrigerator</a></li>
                                            <li><a href="#">_Smart Phone</a></li>
                                            <li><a href="#">Kids</a></li>
                                            <li><a href="#">Shoes</a></li>
                                        </ul>
                                    </li>
                                    <li class="search-top">
                                        <form action="#">
                                            <input type="text" placeholder="Search product..." />
                                            <button type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- mobile menu start -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav>
                                <ul id="mobile-menu">
                                    <li><a href="index.html">Home</a>
                                        <ul>
                                            <li><a href="index-2.html">Home Shop 2</a></li>
                                            <li><a href="index-3.html">Home Shop 3</a></li>
                                            <li><a href="index-4.html">Home Shop 4</a></li>
                                            <li><a href="index-5.html">Home Shop 5</a></li>
                                            <li><a href="index-6.html">Home Shop 6</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Shop</a>
                                        <ul>
                                            <li><a href="#">Shop Layouts</a>
                                                <ul>
                                                    <li><a href="#">Full Width</a></li>
                                                    <li><a href="#">Sidebar Left</a></li>
                                                    <li><a href="#">Sidebar Right</a></li>
                                                    <li><a href="#">Sidebar Right</a></li>
                                                    <li><a href="shop-list.html">List View</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Shop Pages</a>
                                                <ul>
                                                    <li><a href="#">Category </a></li>
                                                    <li><a href="#">My Account </a></li>
                                                    <li><a href="#">Wishlist</a></li>
                                                    <li><a href="cart.html">Shopping Cart</a></li>
                                                    <li><a href="checkout.html">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Product Types</a>
                                                <ul>
                                                    <li><a href="product.html">Simple Product</a></li>
                                                    <li><a href="product-variable.html">Variable Product</a></li>
                                                    <li><a href="#">Grouped Product</a></li>
                                                    <li><a href="#">Downloadable</a></li>
                                                    <li><a href="#">External Product</a></li>
                                                    <li><a href="#">Virtual Product</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="blog-nosidebar.html">Blog</a>
                                        <ul>
                                            <li><a href="#">Blog Layouts</a>
                                                <ul>
                                                    <li><a href="blog-nosidebar.html">None Sidebar</a></li>
                                                    <li><a href="blog-fullwidth.html">Full Width</a></li>
                                                    <li><a href="blog-left-sidebar.html">Sidebar Left</a></li>
                                                    <li><a href="blog-right-sidebar.html">Sidebar Right</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Blog Pages</a>
                                                <ul>
                                                    <li><a href="blog-author.html">Author</a></li>
                                                    <li><a href="blog-archive.html">Archive</a>	</li>
                                                    <li><a href="blog-category.html">Category </a></li>
                                                    <li><a href="blog-tag.html">Blog Tag</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Post Formats</a>
                                                <ul>
                                                    <li><a href="blog-post-image.html">Image Format</a></li>
                                                    <li><a href="blog-post-gallery.html">Gallery Format </a></li>
                                                    <li><a href="blog-post-audio.html">Audio Format </a></li>
                                                    <li><a href="blog-post-video.html">Video Format</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="product.html">Simple Product</a></li>
                                            <li><a href="product-variable.html">Variable Product</a></li>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-list.html">shop-list</a></li>
                                            <li><a href="404.html">Error 404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Buy Now</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- mobile menu end -->
            </div>
        </div>
    </div>
    <!-- mainmenu-area end -->
</header>
<!-- header end -->
<!-- corporate-area-home-5 start -->
<div class="corporate-area-home-5">
    <div class="container">
        <div class="row">
            <!-- single-corporate start -->
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single-corporate">
                    <div class="corporate-icon">
                        <i class="fa fa-truck"></i>
                    </div>
                    <div class="corporate-text">
                        <h4>FREE SHIPPING & RETURN</h4>
                    </div>
                </div>
            </div>
            <!-- single-corporate end -->
            <!-- single-corporate start -->
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single-corporate">
                    <div class="corporate-icon">
                        <i class="fa fa-usd"></i>
                    </div>
                    <div class="corporate-text">
                        <h4>MONEY BACK GUARANTEE</h4>
                    </div>
                </div>
            </div>
            <!-- single-corporate end -->
            <!-- single-corporate start -->
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="single-corporate">
                    <div class="corporate-icon">
                        <i class="fa fa-life-bouy"></i>
                    </div>
                    <div class="corporate-text">
                        <h4>ONLINE SUPPORT 24/7</h4>
                    </div>
                </div>
            </div>
            <!-- single-corporate end -->
        </div>
    </div>
</div>
<!-- corporate-area-home-5 end -->
<!-- HOME SLIDER -->
<div class="slider-wrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-8">
                <div class="fullwidthbanner-container" >
                    <div class="fullwidthbanner4">
                        <ul>
                            <!-- SLIDE  -->
                            <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/slider/slider-5/1.jpg" alt="slide" >
                                <div class="tp-caption large_black sfr"
                                     data-x="0"
                                     data-y="150"
                                     data-speed="1100"
                                     data-start="1100"
                                     data-easing="easeInOutBack"

                                     style="font-size: 18px; font-weight: bold; text-transform: uppercase; color: #FFF;font-family: Montserrat;"><img src="img/slider/slider-5/2.jpg" alt="">
                                </div>
                                <div class="tp-caption large_black sfr"
                                     data-x="335"
                                     data-y="149"
                                     data-speed="1100"
                                     data-start="1400"
                                     data-easing="easeInOutBack"

                                     style="font-family: Raleway; font-size: 50px; font-weight: 700; line-height:80px;text-transform: uppercase; color: #fff; text-shadow: 0 0 2px rgba(0,0,0,.05)"><img src="img/slider/slider-5/3.jpg" alt="">
                                </div>

                                <div class="tp-caption lfb carousel-caption-inner"
                                     data-x="0"
                                     data-y="280"
                                     data-speed="1300"
                                     data-start="1700"
                                     data-easing="easeInOutBack"

                                     style="font-family: Montserrat; font-size: 12px; font-weight: bold; text-transform: uppercase; color: #F3F3F3;">
                                    <a href="#" target="_blank"><img src="img/slider/slider-1/shopping.jpg" alt=""></a>
                                </div>
                            </li>
                            <!-- SLIDE  -->
                            <li data-transition="random" data-slotamount="7" data-masterspeed="1000">
                                <img src="img/slider/slider-5/4.jpg" alt="slide" >
                                <div class="tp-caption large_black sfr"
                                     data-x="0"
                                     data-y="130"
                                     data-speed="1100"
                                     data-start="1100"
                                     data-easing="easeInOutBack"

                                     style="font-size: 18px; font-weight: bold; text-transform: uppercase; color: #000;font-family: Montserrat;"><img src="img/slider/slider-5/5.png" alt="">
                                </div>
                                <div class="tp-caption lfb carousel-caption-inner"
                                     data-x="300"
                                     data-y="350"
                                     data-speed="1300"
                                     data-start="1700"
                                     data-easing="easeInOutBack"

                                     style="font-family: Montserrat; font-size: 12px; font-weight: bold; text-transform: uppercase; color: #000;">
                                    <a href="#" target="_blank"><img src="img/slider/slider-1/shopping.jpg" alt=""></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 promo-home-5">
                <!-- single-promo start -->
                <div class="single-promo">
                    <a href="#"><img src="img/promotion/1.jpg" alt="" /></a>
                </div>
                <!-- single-promo end -->
                <!-- single-promo start -->
                <div class="single-promo">
                    <a href="#"><img src="img/promotion/2.jpg" alt="" /></a>
                </div>
                <!-- single-promo end -->
            </div>
        </div>
    </div>
</div>
<!-- HOME SLIDER END -->
<!-- features-area start -->
<div class="features-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="section-heading">
                    <h3>Featured products</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="features-curosel">
                <!-- single-features start -->
                <div class="col-md-3">
                    <div class="single-features">
                        <div class="product-img">
                            <a href="#">
                                <img class="first-img" src="img/product/1.jpg" alt="" />
                                <img class="second-img" src="img/product/2.jpg" alt="" />
                            </a>
                            <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <h5><a href="#">Ornare sed consequat</a></h5>
                            <span class="pro-price">£515.00</span>
                            <div class="action-buttons">
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-features end -->
                <!-- single-features start -->
                <div class="col-md-3">
                    <div class="single-features">
                        <span class="sale-text">Sale</span>
                        <div class="product-img">
                            <a href="#">
                                <img class="first-img" src="img/product/3.jpg" alt="" />
                                <img class="second-img" src="img/product/4.jpg" alt="" />
                            </a>
                            <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                            </div>
                            <h5><a href="#">Etiam molestie</a></h5>
                            <span class="old-price">£230.00</span>
                            <span class="pro-price">£220.00</span>
                            <div class="action-buttons">
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-features end -->
                <!-- single-features start -->
                <div class="col-md-3">
                    <div class="single-features">
                        <span class="sale-text">Sale</span>
                        <div class="product-img">
                            <a href="#">
                                <img class="first-img" src="img/product/5.jpg" alt="" />
                                <img class="second-img" src="img/product/6.jpg" alt="" />
                            </a>
                            <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <h5><a href="#">Aenean eu tristique</a></h5>
                            <span class="old-price">£80.00</span>
                            <span class="pro-price">£70.00</span>
                            <div class="action-buttons">
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-features end -->
                <!-- single-features start -->
                <div class="col-md-3">
                    <div class="single-features">
                        <span class="sale-text">Sale</span>
                        <div class="product-img">
                            <a href="#">
                                <img class="first-img" src="img/product/7.jpg" alt="" />
                            </a>
                            <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                            </div>
                            <h5><a href="#">Feugiat justo lacinia</a></h5>
                            <span class="old-price">£80.00</span>
                            <span class="pro-price">£70.00</span>
                            <div class="action-buttons">
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-features end -->
                <!-- single-features start -->
                <div class="col-md-3">
                    <div class="single-features">
                        <div class="product-img">
                            <a href="#">
                                <img class="first-img" src="img/product/8.jpg" alt="" />
                            </a>
                            <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <h5><a href="#">Vulputate justo</a></h5>
                            <span class="pro-price">£90.00</span>
                            <div class="action-buttons">
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-features end -->
                <!-- single-features start -->
                <div class="col-md-3">
                    <div class="single-features">
                        <span class="sale-text">Sale</span>
                        <div class="product-img">
                            <a href="#">
                                <img class="first-img" src="img/product/10.jpg" alt="" />
                                <img class="second-img" src="img/product/11.jpg" alt="" />
                            </a>
                            <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                            </div>
                            <h5><a href="#">Phasellus vel hendrerit</a></h5>
                            <span class="pro-price">£55.00</span>
                            <div class="action-buttons">
                                <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- single-features end -->
            </div>
        </div>
    </div>
</div>
<!-- features-area end -->
<div class="home-4-sale-product">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h3>sale products</h3>
                </div>
            </div>
            <div class="clear"></div>
            <div class="sale-product-curosel-home-4">
                <!-- product start -->
                <div class="col-lg-4 col-md-4">
                    <div class="single-features">
                        <div class="product-img">
                            <a href="#">
                                <img class="first-img" src="img/product/3.jpg" alt="" />
                            </a>
                            <span class="sale-text">Sale</span>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                            </div>
                            <h5><a href="#">Etiam molestie</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                            <span class="old-price">£230.00</span>
                            <span class="pro-price">£220.00</span>
                            <div class="clear"></div>
                            <div class="timer">
                                <div data-countdown="2016/05/01"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product end -->
                <!-- product start -->
                <div class="col-lg-4 col-md-4">
                    <div class="single-features">
                        <div class="product-img">
                            <a href="#">
                                <img class="first-img" src="img/product/5.jpg" alt="" />
                            </a>
                            <span class="sale-text">Sale</span>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                            </div>
                            <h5><a href="#">Aenean eu tristique</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                            <span class="old-price">£80.00</span>
                            <span class="pro-price">£70.00</span>
                            <div class="timer">
                                <div data-countdown="2016/04/01"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product end -->
                <!-- product start -->
                <div class="col-lg-4 col-md-4">
                    <div class="single-features">
                        <div class="product-img">
                            <a href="#">
                                <img class="first-img" src="img/product/15.jpg" alt="" />
                            </a>
                            <span class="sale-text">Sale</span>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                            </div>
                            <h5><a href="#">Elementum felis</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                            <span class="old-price">£130.00</span>
                            <span class="pro-price">£120.00</span>
                            <div class="timer">
                                <div data-countdown="2016/02/01"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product end -->
                <!-- product start -->
                <div class="col-lg-4 col-md-4">
                    <div class="single-features">
                        <div class="product-img">
                            <a href="#">
                                <img class="first-img" src="img/product/21.jpg" alt="" />
                            </a>
                            <span class="sale-text">Sale</span>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                            </div>
                            <h5><a href="#">Etiam molestie</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                            <span class="old-price">£230.00</span>
                            <span class="pro-price">£220.00</span>
                            <div class="clear"></div>
                            <div class="timer">
                                <div data-countdown="2016/05/01"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product end -->
                <!-- product start -->
                <div class="col-lg-4 col-md-4">
                    <div class="single-features">
                        <div class="product-img">
                            <a href="#">
                                <img class="first-img" src="img/product/20.jpg" alt="" />
                            </a>
                            <span class="sale-text">Sale</span>
                        </div>
                        <div class="product-content">
                            <div class="pro-rating">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-o"></i></a>
                            </div>
                            <h5><a href="#">Aenean eu tristique</a></h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                            <span class="old-price">£80.00</span>
                            <span class="pro-price">£70.00</span>
                            <div class="timer">
                                <div data-countdown="2016/04/01"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- product end -->
            </div>
        </div>
    </div>
</div>
<!-- home-4-internal-content end -->
<!-- category-area start -->
<div class="category-area-home-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="category-tab">
                    <div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">New arrivals</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">bestseller</a></li>
                            <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Top Rated</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <div class="row">
                                    <div class="category-curosel-home-5">
                                        <!-- single-features start -->
                                        <div class="col-md-4">
                                            <div class="single-features">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src="img/product/5.jpg" alt="" />
                                                        <img class="second-img" src="img/product/6.jpg" alt="" />
                                                    </a>
                                                    <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Aenean eu tristique</a></h5>
                                                    <span class="old-price">£80.00</span>
                                                    <span class="pro-price">£70.00</span>
                                                    <div class="action-buttons">
                                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                                        <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                                        <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-features end -->
                                        <!-- single-features start -->
                                        <div class="col-md-4">
                                            <div class="single-features">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src="img/product/7.jpg" alt="" />
                                                    </a>
                                                    <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                    </div>
                                                    <h5><a href="#">Feugiat justo lacinia</a></h5>
                                                    <span class="old-price">£80.00</span>
                                                    <span class="pro-price">£70.00</span>
                                                    <div class="action-buttons">
                                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                                        <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                                        <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-features end -->
                                        <!-- single-features start -->
                                        <div class="col-md-4">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src="img/product/8.jpg" alt="" />
                                                    </a>
                                                    <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Vulputate justo</a></h5>
                                                    <span class="pro-price">£90.00</span>
                                                    <div class="action-buttons">
                                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                                        <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                                        <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-features end -->
                                        <!-- single-features start -->
                                        <div class="col-md-4">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src="img/product/1.jpg" alt="" />
                                                        <img class="second-img" src="img/product/2.jpg" alt="" />
                                                    </a>
                                                    <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Ornare sed consequat</a></h5>
                                                    <span class="pro-price">£515.00</span>
                                                    <div class="action-buttons">
                                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                                        <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                                        <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-features end -->
                                        <!-- single-features start -->
                                        <div class="col-md-4">
                                            <div class="single-features">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src="img/product/3.jpg" alt="" />
                                                        <img class="second-img" src="img/product/4.jpg" alt="" />
                                                    </a>
                                                    <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                    </div>
                                                    <h5><a href="#">Etiam molestie</a></h5>
                                                    <span class="old-price">£230.00</span>
                                                    <span class="pro-price">£220.00</span>
                                                    <div class="action-buttons">
                                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                                        <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                                        <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-features end -->
                                        <!-- single-features start -->
                                        <div class="col-md-4">
                                            <div class="single-features">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src="img/product/10.jpg" alt="" />
                                                        <img class="second-img" src="img/product/11.jpg" alt="" />
                                                    </a>
                                                    <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Phasellus vel hendrerit</a></h5>
                                                    <span class="pro-price">£55.00</span>
                                                    <div class="action-buttons">
                                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                                        <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                                        <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-features end -->
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="row">
                                    <div class="category-curosel-home-5">
                                        <!-- single-features start -->
                                        <div class="col-md-4">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src="img/product/8.jpg" alt="" />
                                                    </a>
                                                    <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Vulputate justo</a></h5>
                                                    <span class="pro-price">£90.00</span>
                                                    <div class="action-buttons">
                                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                                        <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                                        <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-features end -->
                                        <!-- single-features start -->
                                        <div class="col-md-4">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src="img/product/1.jpg" alt="" />
                                                        <img class="second-img" src="img/product/2.jpg" alt="" />
                                                    </a>
                                                    <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Ornare sed consequat</a></h5>
                                                    <span class="pro-price">£515.00</span>
                                                    <div class="action-buttons">
                                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                                        <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                                        <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-features end -->
                                        <!-- single-features start -->
                                        <div class="col-md-4">
                                            <div class="single-features">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src="img/product/3.jpg" alt="" />
                                                        <img class="second-img" src="img/product/4.jpg" alt="" />
                                                    </a>
                                                    <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                    </div>
                                                    <h5><a href="#">Etiam molestie</a></h5>
                                                    <span class="old-price">£230.00</span>
                                                    <span class="pro-price">£220.00</span>
                                                    <div class="action-buttons">
                                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                                        <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                                        <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-features end -->
                                        <!-- single-features start -->
                                        <div class="col-md-4">
                                            <div class="single-features">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src="img/product/5.jpg" alt="" />
                                                        <img class="second-img" src="img/product/6.jpg" alt="" />
                                                    </a>
                                                    <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Aenean eu tristique</a></h5>
                                                    <span class="old-price">£80.00</span>
                                                    <span class="pro-price">£70.00</span>
                                                    <div class="action-buttons">
                                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                                        <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                                        <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-features end -->
                                        <!-- single-features start -->
                                        <div class="col-md-4">
                                            <div class="single-features">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src="img/product/7.jpg" alt="" />
                                                    </a>
                                                    <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                    </div>
                                                    <h5><a href="#">Feugiat justo lacinia</a></h5>
                                                    <span class="old-price">£80.00</span>
                                                    <span class="pro-price">£70.00</span>
                                                    <div class="action-buttons">
                                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                                        <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                                        <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-features end -->
                                        <!-- single-features start -->
                                        <div class="col-md-4">
                                            <div class="single-features">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src="img/product/10.jpg" alt="" />
                                                        <img class="second-img" src="img/product/11.jpg" alt="" />
                                                    </a>
                                                    <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Phasellus vel hendrerit</a></h5>
                                                    <span class="pro-price">£55.00</span>
                                                    <div class="action-buttons">
                                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                                        <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                                        <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-features end -->
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <div class="row">
                                    <div class="category-curosel-home-5">
                                        <!-- single-features start -->
                                        <div class="col-md-4">
                                            <div class="single-features">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src="img/product/10.jpg" alt="" />
                                                        <img class="second-img" src="img/product/11.jpg" alt="" />
                                                    </a>
                                                    <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Phasellus vel hendrerit</a></h5>
                                                    <span class="pro-price">£55.00</span>
                                                    <div class="action-buttons">
                                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                                        <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                                        <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-features end -->
                                        <!-- single-features start -->
                                        <div class="col-md-4">
                                            <div class="single-features">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src="img/product/5.jpg" alt="" />
                                                        <img class="second-img" src="img/product/6.jpg" alt="" />
                                                    </a>
                                                    <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Aenean eu tristique</a></h5>
                                                    <span class="old-price">£80.00</span>
                                                    <span class="pro-price">£70.00</span>
                                                    <div class="action-buttons">
                                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                                        <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                                        <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-features end -->
                                        <!-- single-features start -->
                                        <div class="col-md-4">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src="img/product/1.jpg" alt="" />
                                                        <img class="second-img" src="img/product/2.jpg" alt="" />
                                                    </a>
                                                    <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Ornare sed consequat</a></h5>
                                                    <span class="pro-price">£515.00</span>
                                                    <div class="action-buttons">
                                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                                        <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                                        <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-features end -->
                                        <!-- single-features start -->
                                        <div class="col-md-4">
                                            <div class="single-features">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src="img/product/3.jpg" alt="" />
                                                        <img class="second-img" src="img/product/4.jpg" alt="" />
                                                    </a>
                                                    <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                    </div>
                                                    <h5><a href="#">Etiam molestie</a></h5>
                                                    <span class="old-price">£230.00</span>
                                                    <span class="pro-price">£220.00</span>
                                                    <div class="action-buttons">
                                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                                        <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                                        <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-features end -->
                                        <!-- single-features start -->
                                        <div class="col-md-4">
                                            <div class="single-features">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src="img/product/5.jpg" alt="" />
                                                        <img class="second-img" src="img/product/6.jpg" alt="" />
                                                    </a>
                                                    <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Aenean eu tristique</a></h5>
                                                    <span class="old-price">£80.00</span>
                                                    <span class="pro-price">£70.00</span>
                                                    <div class="action-buttons">
                                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                                        <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                                        <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-features end -->
                                        <!-- single-features start -->
                                        <div class="col-md-4">
                                            <div class="single-features">
                                                <span class="sale-text">Sale</span>
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src="img/product/7.jpg" alt="" />
                                                    </a>
                                                    <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star-o"></i></a>
                                                    </div>
                                                    <h5><a href="#">Feugiat justo lacinia</a></h5>
                                                    <span class="old-price">£80.00</span>
                                                    <span class="pro-price">£70.00</span>
                                                    <div class="action-buttons">
                                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                                        <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                                        <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-features end -->
                                        <!-- single-features start -->
                                        <div class="col-md-4">
                                            <div class="single-features">
                                                <div class="product-img">
                                                    <a href="#">
                                                        <img class="first-img" src="img/product/8.jpg" alt="" />
                                                    </a>
                                                    <a class="modal-view" href="#" data-toggle="modal" data-target="#productModal">Quick View</a>
                                                </div>
                                                <div class="product-content">
                                                    <div class="pro-rating">
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                        <a href="#"><i class="fa fa-star"></i></a>
                                                    </div>
                                                    <h5><a href="#">Vulputate justo</a></h5>
                                                    <span class="pro-price">£90.00</span>
                                                    <div class="action-buttons">
                                                        <a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i> <span>Add to cart</span></a>
                                                        <a class="favourite" href="#"><i class="fa fa-heart-o"></i></a>
                                                        <a class="compare" href="#"><i class="fa fa-toggle-off"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- single-features end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- category-area end -->
<!-- recent-post-area start -->
<div class="recent-post-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h3>Recent Posts</h3>
                </div>
            </div>
            <div class="clear"></div>
            <div class="recent-post-curosel">
                <!-- recent-post start -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="recent-post">
                        <div class="post-thumb">
                            <a href="#"><img src="img/blog/r1.jpg" alt="" /></a>
                        </div>
                        <div class="post-info">
                            <span class="recent-post-date">March 10,2015</span>
                            <h3><a href="#">Blog image post layout</a></h3>
                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
                            <a class="read-more" href="#">read more</a>
                            <span class="recent-comment"><a href="#"><i class="fa fa-comment-o"></i> 0 comments</a></span>
                        </div>
                    </div>
                </div>
                <!-- recent-post start -->
                <!-- recent-post start -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="recent-post">
                        <div class="post-thumb">
                            <a href="#"><img src="img/blog/r2.jpg" alt="" /></a>
                        </div>
                        <div class="post-info">
                            <span class="recent-post-date">December 1,2014</span>
                            <h3><a href="#">Post in Gallery format</a></h3>
                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
                            <a class="read-more" href="#">read more</a>
                            <span class="recent-comment"><a href="#"><i class="fa fa-comment-o"></i> 0 comments</a></span>
                        </div>
                    </div>
                </div>
                <!-- recent-post start -->
                <!-- recent-post start -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="recent-post">
                        <div class="post-thumb">
                            <a href="#"><img src="img/blog/r3.jpg" alt="" /></a>
                        </div>
                        <div class="post-info">
                            <span class="recent-post-date">December 1,2014</span>
                            <h3><a href="#">Blog image post layout</a></h3>
                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
                            <a class="read-more" href="#">read more</a>
                            <span class="recent-comment"><a href="#"><i class="fa fa-comment-o"></i> 0 comments</a></span>
                        </div>
                    </div>
                </div>
                <!-- recent-post start -->
                <!-- recent-post start -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="recent-post">
                        <div class="post-thumb">
                            <a href="#"><img src="img/blog/r4.jpg" alt="" /></a>
                        </div>
                        <div class="post-info">
                            <span class="recent-post-date">December 1,2014</span>
                            <h3><a href="#">Post in Video format</a></h3>
                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
                            <a class="read-more" href="#">read more</a>
                            <span class="recent-comment"><a href="#"><i class="fa fa-comment-o"></i> 0 comments</a></span>
                        </div>
                    </div>
                </div>
                <!-- recent-post start -->
                <!-- recent-post start -->
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="recent-post">
                        <div class="post-thumb">
                            <a href="#"><img src="img/blog/r5.jpg" alt="" /></a>
                        </div>
                        <div class="post-info">
                            <span class="recent-post-date">December 1,2014</span>
                            <h3><a href="#">Maecenas ultricies sed odio</a></h3>
                            <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero</p>
                            <a class="read-more" href="#">read more</a>
                            <span class="recent-comment"><a href="#"><i class="fa fa-comment-o"></i> 0 comments</a></span>
                        </div>
                    </div>
                </div>
                <!-- recent-post start -->
            </div>
        </div>
    </div>
</div>
<!-- recent-post-area end -->
<!-- logo-testimonial-area start -->
<div class="logo-testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="section-heading">
                    <h3>Testimonial</h3>
                </div>
                <div class="home2-testimonial">
                    <div class="testimonial-home2">
                        <div class="single-testimonial">
                            <!-- testimonial-list start -->
                            <div class="testimonial-list">
                                <div class="test-content">
                                    <span><i class="fa fa-quote-left"></i></span>
                                    <p>Integer tincidunt nisi libero, sed aliquet ipsum fermentum eu. Duis porta egestas tellus sed vestibulum. Nam euismod elit id dolor aliquet, ut blandit massa egestas</p>
                                </div>
                                <div class="test-img">
                                    <img src="img/testimonial/2.jpg" alt="" />
                                    <div class="test-author">
                                        <span class="test-name">Katherine Sullivan</span>
                                        <span class="test-title">CEO of SunPark</span>
                                    </div>
                                </div>
                            </div>
                            <!-- testimonial-list end -->
                            <!-- testimonial-list start -->
                            <div class="testimonial-list">
                                <div class="test-content">
                                    <span><i class="fa fa-quote-left"></i></span>
                                    <p>Etiam rhoncus congue arcu sed interdum. Cras dolor diam, accumsan eu aliquam eu, luctus vehicula velit. Nam eget tortor ut felis fermentum sodales ac eu lacus</p>
                                </div>
                                <div class="test-img">
                                    <img src="img/testimonial/1.jpg" alt="" />
                                    <div class="test-author">
                                        <span class="test-name">Elizabeth Taylor</span>
                                        <span class="test-title">Designer of BootExperts</span>
                                    </div>
                                </div>
                            </div>
                            <!-- testimonial-list start -->
                            <!-- testimonial-list start -->
                            <div class="testimonial-list">
                                <div class="test-content">
                                    <span><i class="fa fa-quote-left"></i></span>
                                    <p>Proin varius erat sed nibh eleifend, scelerisque aliquam sapien malesuada. Donec at eros ex. Etiam tempus ornare nibh vel gravida</p>
                                </div>
                                <div class="test-img">
                                    <img src="img/testimonial/2.jpg" alt="" />
                                    <div class="test-author">
                                        <span class="test-name">Katherine Sullivan</span>
                                        <span class="test-title">Customer</span>
                                    </div>
                                </div>
                            </div>
                            <!-- testimonial-list end -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="section-heading">
                    <h3>Logo brands</h3>
                </div>
                <div class="row">
                    <div class="brand-curosel-home-2">
                        <!-- single-brand start -->
                        <div class="col-md-6">
                            <div class="brand-img">
                                <a href="#"><img src="img/brand/1.jpg" alt="" /></a>
                            </div>
                            <div class="brand-img">
                                <a href="#"><img src="img/brand/2.jpg" alt="" /></a>
                            </div>
                        </div>
                        <!-- single-brand end -->
                        <!-- single-brand start -->
                        <div class="col-md-6">
                            <div class="brand-img">
                                <a href="#"><img src="img/brand/3.jpg" alt="" /></a>
                            </div>
                            <div class="brand-img">
                                <a href="#"><img src="img/brand/4.jpg" alt="" /></a>
                            </div>
                        </div>
                        <!-- single-brand end -->
                        <!-- single-brand start -->
                        <div class="col-md-6">
                            <div class="brand-img">
                                <a href="#"><img src="img/brand/3.jpg" alt="" /></a>
                            </div>
                            <div class="brand-img">
                                <a href="#"><img src="img/brand/4.jpg" alt="" /></a>
                            </div>
                        </div>
                        <!-- single-brand end -->
                        <!-- single-brand start -->
                        <div class="col-md-6">
                            <div class="brand-img">
                                <a href="#"><img src="img/brand/1.jpg" alt="" /></a>
                            </div>
                            <div class="brand-img">
                                <a href="#"><img src="img/brand/2.jpg" alt="" /></a>
                            </div>
                        </div>
                        <!-- single-brand end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- logo-testimonial-area end -->

<!-- footer start -->
<footer>
    <!-- footer-top-area start -->
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <!-- footer-widget start -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                    <div class="footer-widget">
                        <h3 class="widget-title">Infomation</h3>
                        <ul class="footer-menu">
                            <li><a href="#">Our Blog</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                        </ul>
                    </div>
                </div>
                <!-- footer-widget end -->
                <!-- footer-widget start -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                    <div class="footer-widget">
                        <h3 class="widget-title">My Account</h3>
                        <ul class="footer-menu">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Shopping cart</a></li>
                        </ul>
                    </div>
                </div>
                <!-- footer-widget end -->
                <!-- footer-widget start -->
                <div class="col-lg-3 col-md-3 hidden-sm">
                    <div class="footer-widget">
                        <h3 class="widget-title">Our services</h3>
                        <ul class="footer-menu">
                            <li><a href="#">Shipping & Returns</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">International Shipping</a></li>
                            <li><a href="#">Affiliates</a></li>
                        </ul>
                    </div>
                </div>
                <!-- footer-widget end -->
                <!-- footer-widget start -->
                <div class="col-lg-3 col-md-3 col-sm-4">
                    <div class="footer-widget widget-contact">
                        <h3 class="widget-title">Contact Us</h3>
                        <ul class="footer-menu">
                            <li><i class="fa fa-map-marker"> </i> <strong>Addresss</strong> : 123 Pall Mall, London England</li>
                            <li><i class="fa fa-phone"> </i> <strong>tel</strong> : (012) 888 8888</li>
                            <li><i class="fa fa-fax"> </i> <strong>fax</strong> : (012) 999 9999</li>
                            <li><i class="fa fa-envelope"> </i> <strong>Email</strong> : admin@bootexperts.com</li>
                        </ul>
                    </div>
                </div>
                <!-- footer-widget end -->
            </div>
        </div>
    </div>
    <!-- footer-top-area end -->
    <!-- footer-middle-area start -->
    <div class="footer-middle-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="header-social-icon">
                        <a href="#" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" title="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" title="tumblr"><i class="fa fa-tumblr"></i></a>
                        <a href="#" title="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" title="dribbble"><i class="fa fa-dribbble"></i></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="newsletter">
                        <h2 class="news-title">Newsletter</h2>
                        <div class="join-us">
                            <form action="#">
                                <input type="text" placeholder="Email"/>
                                <input type="submit" value="Subscribe!" />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-middle-area end -->
    <!-- footer-bootom-area start -->
    <div class="footer-bootom-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="copyright">
                        <p>Copyright © 2015 <a href="http://bootexperts.com/" target="_blank">Bootexperts</a> All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="payment">
                        <img src="img/payment1.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bootom-area end -->
</footer>
<!-- footer end -->

<!-- QUICKVIEW PRODUCT -->
<div id="quickview-wrapper">
    <!-- Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="modal-product">
                        <div class="product-images">
                            <div class="main-image images">
                                <img alt="" src="img/product/13.jpg">
                            </div>
                        </div><!-- .product-images -->

                        <div class="product-info">
                            <h1>Diam quis cursus</h1>
                            <div class="price-box">
                                <p class="price"><span class="special-price"><span class="amount">$132.00</span></span></p>
                            </div>
                            <a href="shop.html" class="see-all">See all features</a>
                            <div class="quick-add-to-cart">
                                <form method="post" class="cart">
                                    <div class="numbers-row">
                                        <input type="number" id="french-hens" value="3">
                                    </div>
                                    <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                </form>
                            </div>
                            <div class="quick-desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.
                            </div>
                            <div class="social-sharing">
                                <div class="widget widget_socialsharing_widget">
                                    <h3 class="widget-title-modal">Share this product</h3>
                                    <ul class="social-icons">
                                        <li><a target="_blank" title="Facebook" href="#" class="facebook social-icon"><i class="fa fa-facebook"></i></a></li>
                                        <li><a target="_blank" title="Twitter" href="#" class="twitter social-icon"><i class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="fa fa-pinterest"></i></a></li>
                                        <li><a target="_blank" title="Google +" href="#" class="gplus social-icon"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a target="_blank" title="LinkedIn" href="#" class="linkedin social-icon"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .product-info -->
                    </div><!-- .modal-product -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- END Modal -->
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
