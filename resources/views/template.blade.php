<!DOCTYPE html>
<html lang="zxx">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <title>Alchemists - Soccer Club & News HTML Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Alchemists - Sports News HTML Template">
    <meta name="author" content="Dan Fisher">
    <meta name="keywords" content="Sports News HTML Template">

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="assets/images/soccer/favicons/favicon.ico">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/soccer/favicons/favicon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/soccer/favicons/favicon-152.png">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0">

    <!-- Google Web Fonts
    ================================================== -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CSource+Sans+Pro:400,700" rel="stylesheet">

    <!-- CSS
    ================================================== -->
    <!-- Preloader CSS -->
    <link href="assets/css/preloader.css" rel="stylesheet">

    <!-- Vendor CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="assets/fonts/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link href="assets/vendor/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
    <link href="assets/vendor/slick/slick.css" rel="stylesheet">

    <!-- Template CSS-->
    <link href="assets/css/content.css" rel="stylesheet">
    <link href="assets/css/components.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Custom CSS-->
    <link href="assets/css/custom.css" rel="stylesheet">

</head>
<body class="template-soccer">

<div class="site-wrapper clearfix">
    <div class="site-overlay"></div>



    <!-- Header
    ================================================== -->

    <!-- Header Mobile -->
    <div class="header-mobile clearfix" id="header-mobile">
        <div class="header-mobile__logo">
            <a href="_soccer_index.html"><img src="assets/images/soccer/logo.png" srcset="assets/images/soccer/logo@2x.png 2x" alt="Alchemists" class="header-mobile__logo-img"></a>
        </div>
        <div class="header-mobile__inner">
            <a id="header-mobile__toggle" class="burger-menu-icon"><span class="burger-menu-icon__line"></span></a>
            <span class="header-mobile__search-icon" id="header-mobile__search-icon"></span>
        </div>
    </div>

    <!-- Header Desktop -->
    <header class="header">

        <!-- Header Top Bar -->
        <div class="header__top-bar clearfix">
            <div class="container">

                <!-- Account Navigation -->
                <ul class="nav-account">
                    <li class="nav-account__item"><a href="#" data-toggle="modal" data-target="#modal-login-register-tabs">Your Account</a></li>
                    <li class="nav-account__item nav-account__item--wishlist"><a href="_soccer_shop-wishlist.html">Wishlist <span class="highlight">8</span></a></li>
                    <li class="nav-account__item"><a href="#">Currency: <span class="highlight">USD</span></a>
                        <ul class="main-nav__sub">
                            <li><a href="#">USD</a></li>
                            <li><a href="#">EUR</a></li>
                            <li><a href="#">GBP</a></li>
                        </ul>
                    </li>
                    <li class="nav-account__item"><a href="#">Language: <span class="highlight">EN</span></a>
                        <ul class="main-nav__sub">
                            <li><a href="#">English</a></li>
                            <li><a href="#">Spanish</a></li>
                            <li><a href="#">French</a></li>
                            <li><a href="#">German</a></li>
                        </ul>
                    </li>
                    <li class="nav-account__item nav-account__item--logout"><a href="_soccer_shop-login.html">Logout</a></li>
                </ul>
                <!-- Account Navigation / End -->

            </div>
        </div>
        <!-- Header Top Bar / End -->

        <!-- Header Secondary -->
        <div class="header__secondary">
            <div class="container">
                <!-- Header Search Form -->
                <div class="header-search-form">
                    <form action="#" id="mobile-search-form" class="search-form">
                        <input type="text" class="form-control header-mobile__search-control" value="" placeholder="Enter your seach here...">
                        <button type="submit" class="header-mobile__search-submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- Header Search Form / End -->
                <ul class="info-block info-block--header">
                    <li class="info-block__item info-block__item--contact-primary">
                        <svg role="img" class="df-icon df-icon--whistle">
                            <use xlink:href="assets/images/icons-soccer.svg#whistle"/>
                        </svg>
                        <h6 class="info-block__heading">Join Our Team!</h6>
                        <a class="info-block__link" href="mailto:tryouts@alchemists.com">tryouts@alchemists.com</a>
                    </li>
                    <li class="info-block__item info-block__item--contact-secondary">
                        <svg role="img" class="df-icon df-icon--soccer-ball">
                            <use xlink:href="assets/images/icons-soccer.svg#soccer-ball"/>
                        </svg>
                        <h6 class="info-block__heading">Contact Us</h6>
                        <a class="info-block__link" href="mailto:info@alchemists.com">info@alchemists.com</a>
                    </li>
                    <li class="info-block__item info-block__item--shopping-cart">
                        <a href="#" class="info-block__link-wrapper">
                            <div class="df-icon-stack df-icon-stack--bag">
                                <svg role="img" class="df-icon df-icon--bag">
                                    <use xlink:href="assets/images/icons-basket.svg#bag"/>
                                </svg>
                                <svg role="img" class="df-icon df-icon--bag-handle">
                                    <use xlink:href="assets/images/icons-basket.svg#bag-handle"/>
                                </svg>
                            </div>
                            <h6 class="info-block__heading">Your Bag (8 items)</h6>
                            <span class="info-block__cart-sum">$256,30</span>
                        </a>

                        <!-- Dropdown Shopping Cart -->
                        <ul class="header-cart">
                            <li class="header-cart__item">
                                <figure class="header-cart__product-thumb">
                                    <a href="_soccer_shop-product.html">
                                        <img src="assets/images/soccer/samples/_soccer_cart-sm-1.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="header-cart__inner">
                                    <span class="header-cart__product-cat">Sneakers</span>
                                    <h5 class="header-cart__product-name"><a href="_soccer_shop-product.html">Sundown Sneaker</a></h5>
                                    <div class="header-cart__product-ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star empty"></i>
                                    </div>
                                    <div class="header-cart__product-sum">
                                        <span class="header-cart__product-price">$28.00</span> x <span class="header-cart__product-count">2</span>
                                    </div>
                                    <div class="fa fa-times header-cart__close"></div>
                                </div>
                            </li>
                            <li class="header-cart__item">
                                <figure class="header-cart__product-thumb">
                                    <a href="_soccer_shop-product.html">
                                        <img src="assets/images/soccer/samples/_soccer_cart-sm-4.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="header-cart__inner">
                                    <span class="header-cart__product-cat">Sneakers</span>
                                    <h5 class="header-cart__product-name"><a href="_soccer_shop-product.html">Atlantik Sneaker</a></h5>
                                    <div class="header-cart__product-ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="header-cart__product-sum">
                                        <span class="header-cart__product-price">$30.00</span> x <span class="header-cart__product-count">4</span>
                                    </div>
                                    <div class="fa fa-times header-cart__close"></div>
                                </div>
                            </li>
                            <li class="header-cart__item">
                                <figure class="header-cart__product-thumb">
                                    <a href="_soccer_shop-product.html">
                                        <img src="assets/images/soccer/samples/_soccer_cart-sm-2.jpg" alt="">
                                    </a>
                                </figure>
                                <div class="header-cart__inner">
                                    <span class="header-cart__product-cat">Sneakers</span>
                                    <h5 class="header-cart__product-name"><a href="_soccer_shop-product.html">Aquarium Sneaker</a></h5>
                                    <div class="header-cart__product-ratings">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star empty"></i>
                                        <i class="fa fa-star empty"></i>
                                    </div>
                                    <div class="header-cart__product-sum">
                                        <span class="header-cart__product-price">$26.00</span> x <span class="header-cart__product-count">1</span>
                                    </div>
                                    <div class="fa fa-times header-cart__close"></div>
                                </div>
                            </li>
                            <li class="header-cart__item header-cart__item--subtotal">
                                <span class="header-cart__subtotal">Cart Subtotal</span>
                                <span class="header-cart__subtotal-sum">$282.00</span>
                            </li>
                            <li class="header-cart__item header-cart__item--action">
                                <a href="_soccer_shop-cart.html" class="btn btn-default btn-block">Go to Cart</a>
                                <a href="_soccer_shop-checkout.html" class="btn btn-primary-inverse btn-block">Checkout</a>
                            </li>
                        </ul>
                        <!-- Dropdown Shopping Cart / End -->

                    </li>
                </ul>
            </div>
        </div>
        <!-- Header Secondary / End -->

        <!-- Header Primary -->
        <div class="header__primary">
            <div class="container">
                <div class="header__primary-inner">

                    <!-- Header Logo -->
                    <div class="header-logo">
                        <a href="_soccer_index.html"><img src="assets/images/soccer/logo.png" srcset="assets/images/soccer/logo@2x.png 2x" alt="Alchemists" class="header-logo__img"></a>
                    </div>
                    <!-- Header Logo / End -->

                    <!-- Main Navigation -->
                    <nav class="main-nav clearfix">
                        <ul class="main-nav__list">
                            <li class="active"><a href="_soccer_index.html">Home</a></li>
                            <li class=""><a href="#">Features</a>
                                <div class="main-nav__megamenu clearfix">
                                    <ul class="col-lg-2 col-md-3 col-xs-12 main-nav__ul">
                                        <li class="main-nav__title">Features</li>
                                        <li><a href="_soccer_features-shortcodes.html">Shortcodes</a></li>
                                        <li><a href="_soccer_features-typography.html">Typography</a></li>
                                        <li><a href="_soccer_features-widgets-blog.html">Widgets - Blog</a></li>
                                        <li><a href="_soccer_features-widgets-shop.html">Widgets - Shop</a></li>
                                        <li><a href="_soccer_features-widgets-sports.html">Widgets - Sports</a></li>
                                        <li><a href="_soccer_features-404.html">404 Error Page</a></li>
                                        <li><a href="_soccer_features-search-results.html">Search Results</a></li>
                                    </ul>
                                    <ul class="col-lg-2 col-md-3 col-xs-12 main-nav__ul">
                                        <li class="main-nav__title">Main Features</li>
                                        <li><a href="_soccer_team-overview.html">Team Overview</a></li>
                                        <li><a href="_soccer_team-roster.html">Team Roster</a></li>
                                        <li><a href="_soccer_player-stats.html">Player Stats</a></li>
                                        <li><a href="_soccer_shop-list.html">Shop Page V1</a></li>
                                        <li><a href="_soccer_shop-grid.html">Shop Page V2</a></li>
                                        <li><a href="_soccer_shop-cart.html">Shopping Cart</a></li>
                                        <li><a href="_soccer_shop-wishlist.html">Wishlist</a></li>
                                        <li><a href="_soccer_shop-checkout.html">Checkout</a></li>
                                    </ul>
                                    <div class="col-lg-4 col-md-3 col-xs-12">

                                        <div class="posts posts--simple-list posts--simple-list--lg">
                                            <div class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The team is starting a new power breakfast regimen</a></h6>
                                                    <time datetime="2017-08-23" class="posts__date">August 23rd, 2017</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                                <div class="posts__footer card__footer">
                                                    <div class="post-author">
                                                        <figure class="post-author__avatar">
                                                            <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                                                        </figure>
                                                        <div class="post-author__info">
                                                            <h4 class="post-author__name">James Spiegel</h4>
                                                        </div>
                                                    </div>
                                                    <ul class="post__meta meta">
                                                        <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
                                                        <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-lg-4 col-md-3 col-xs-12">
                                        <ul class="posts posts--simple-list">
                                            <li class="posts__item posts__item--category-1">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="assets/images/samples/post-img3-xs.jpg" alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
                                                    <time datetime="2016-08-21" class="posts__date">August 21st, 2016</time>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-2">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="assets/images/samples/post-img1-xs.jpg" alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">Injuries</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">Mark Johnson has a Tibia Fracture and is gonna be out</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <figure class="posts__thumb">
                                                    <a href="#"><img src="assets/images/samples/post-img4-xs.jpg" alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The team is starting a new power breakfast regimen</a></h6>
                                                    <time datetime="2016-08-21" class="posts__date">August 21st, 2016</time>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li class=""><a href="#">The Team</a>
                                <ul class="main-nav__sub">
                                    <li><a href="_soccer_game-overview.html">Game Overview</a></li>
                                    <li><a href="_soccer_team-overview.html">Overview</a></li>
                                    <li><a href="_soccer_team-roster.html">Roster</a></li>
                                    <li><a href="_soccer_team-standings.html">Standings</a></li>
                                    <li><a href="_soccer_team-last-results.html">Latest Results</a></li>
                                    <li><a href="_soccer_team-schedule.html">Schedule</a></li>
                                    <li><a href="_soccer_team-gallery.html">Gallery</a>
                                        <ul class="main-nav__sub-2">
                                            <li><a href="_soccer_team-gallery-album.html">Single Album</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="_soccer_player-overview.html">Player Pages</a>
                                        <ul class="main-nav__sub-2">
                                            <li><a href="_soccer_player-overview.html">Overview</a></li>
                                            <li><a href="_soccer_player-stats.html">Full Statistics</a></li>
                                            <li><a href="_soccer_player-bio.html">Biography</a></li>
                                            <li><a href="_soccer_player-news.html">Related News</a></li>
                                            <li><a href="_soccer_player-gallery.html">Gallery</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=""><a href="#">News</a>
                                <ul class="main-nav__sub">
                                    <li><a href="_soccer_blog-1.html">News - version 1</a></li>
                                    <li><a href="_soccer_blog-2.html">News - version 2</a></li>
                                    <li><a href="_soccer_blog-3.html">News - version 3</a></li>
                                    <li><a href="_soccer_blog-4.html">News - version 4</a></li>
                                    <li><a href="#">Post</a>
                                        <ul class="main-nav__sub-2">
                                            <li><a href="_soccer_blog-post-1.html">Single Post - version 1</a></li>
                                            <li><a href="_soccer_blog-post-2.html">Single Post - version 2</a></li>
                                            <li><a href="_soccer_blog-post-3.html">Single Post - version 3</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class=""><a href="_soccer_shop-grid.html">Shop</a>
                                <ul class="main-nav__sub">
                                    <li><a href="_soccer_shop-grid.html">Shop - Grid</a></li>
                                    <li><a href="_soccer_shop-list.html">Shop - List</a></li>
                                    <li><a href="_soccer_shop-product.html">Single Product</a></li>
                                    <li><a href="_soccer_shop-cart.html">Shopping Cart</a></li>
                                    <li><a href="_soccer_shop-checkout.html">Checkout</a></li>
                                    <li><a href="_soccer_shop-wishlist.html">Wishlist</a></li>
                                    <li><a href="_soccer_shop-login.html">Login</a></li>
                                    <li><a href="_soccer_shop-account.html">Account</a></li>
                                </ul>
                            </li>
                        </ul>

                        <!-- Social Links -->
                        <ul class="social-links social-links--inline social-links--main-nav">
                            <li class="social-links__item">
                                <a href="#" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="social-links__item">
                                <a href="#" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="social-links__item">
                                <a href="#" class="social-links__link" data-toggle="tooltip" data-placement="bottom" title="Google+"><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                        <!-- Social Links / End -->

                        <!-- Pushy Panel Toggle -->
                        <a href="#" class="pushy-panel__toggle">
                            <span class="pushy-panel__line"></span>
                        </a>
                        <!-- Pushy Panel Toggle / Eng -->
                    </nav>
                    <!-- Main Navigation / End -->
                </div>
            </div>
        </div>
        <!-- Header Primary / End -->

    </header>
    <!-- Header / End -->

    <!-- Pushy Panel - Dark -->
    <aside class="pushy-panel pushy-panel--dark">
        <div class="pushy-panel__inner">
            <header class="pushy-panel__header">
                <div class="pushy-panel__logo">
                    <a href="index.html"><img src="assets/images/soccer/logo.png" srcset="assets/images/soccer/logo@2x.png 2x" alt="Alchemists"></a>
                </div>
            </header>
            <div class="pushy-panel__content">

                <!-- Widget: Posts -->
                <aside class="widget widget-popular-posts widget--side-panel">
                    <div class="widget__content">

                        <ul class="posts posts--simple-list">
                            <li class="posts__item posts__item--category-1">
                                <figure class="posts__thumb">
                                    <a href="#"><img src="assets/images/samples/post-img19-xs.jpg" alt=""></a>
                                </figure>
                                <div class="posts__inner">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">The team</span>
                                    </div>
                                    <h6 class="posts__title"><a href="#">The Team will make a small vacation to the Caribbean</a></h6>
                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                </div>
                                <div class="posts__excerpt">
                                    Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </li>
                            <li class="posts__item posts__item--category-2">
                                <figure class="posts__thumb">
                                    <a href="#"><img src="assets/images/samples/post-img18-xs.jpg" alt=""></a>
                                </figure>
                                <div class="posts__inner">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">Injuries</span>
                                    </div>
                                    <h6 class="posts__title"><a href="#">Jenny Jackson won't be able to play the next game</a></h6>
                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                </div>
                                <div class="posts__excerpt">
                                    Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </li>
                            <li class="posts__item posts__item--category-1">
                                <figure class="posts__thumb">
                                    <a href="#"><img src="assets/images/samples/post-img8-xs.jpg" alt=""></a>
                                </figure>
                                <div class="posts__inner">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">The Team</span>
                                    </div>
                                    <h6 class="posts__title"><a href="#">The team is starting a new power breakfast regimen</a></h6>
                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                </div>
                                <div class="posts__excerpt">
                                    Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </li>
                            <li class="posts__item posts__item--category-3">
                                <figure class="posts__thumb">
                                    <a href="#"><img src="assets/images/samples/post-img20-xs.jpg" alt=""></a>
                                </figure>
                                <div class="posts__inner">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">The League</span>
                                    </div>
                                    <h6 class="posts__title"><a href="#">The Alchemists need two win the next two games</a></h6>
                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                </div>
                                <div class="posts__excerpt">
                                    Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </div>
                            </li>
                        </ul>

                    </div>
                </aside>
                <!-- Widget: Posts / End -->

                <!-- Widget: Tag Cloud -->
                <aside class="widget widget--side-panel widget-tagcloud">
                    <div class="widget__title">
                        <h4>Popular Tags</h4>
                    </div>
                    <div class="widget__content">
                        <div class="tagcloud">
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PLAYOFFS</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">ALCHEMISTS</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">INJURIES</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">TEAM</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">INCORPORATIONS</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">UNIFORMS</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">CHAMPIONS</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PROFESSIONAL</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">COACH</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">STADIUM</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">NEWS</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">PLAYERS</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">WOMEN DIVISION</a>
                            <a href="#" class="btn btn-primary btn-xs btn-outline btn-sm">AWARDS</a>
                        </div>
                    </div>
                </aside>
                <!-- Widget: Tag Cloud / End -->

                <!-- Widget: Banner -->
                <aside class="widget widget--side-panel widget-banner">
                    <div class="widget__content">
                        <figure class="widget-banner__img">
                            <a href="#"><img src="assets/images/samples/banner.jpg" alt="Banner"></a>
                        </figure>
                    </div>
                </aside>
                <!-- Widget: Banner / End -->

            </div>
            <a href="#" class="pushy-panel__back-btn"></a>
        </div>
    </aside>
    <!-- Pushy Panel - Dark / End -->



    <!-- Hero Slider
    ================================================== -->
    <div class="hero-slider-wrapper">

        <div class="hero-slider">

            <!-- Slide #1 -->
            <div class="hero-slider__item hero-slider__item--img1">

                <div class="container hero-slider__item-container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <!-- Post Meta - Top -->
                            <div class="post__meta-block post__meta-block--top">

                                <!-- Post Category -->
                                <div class="post__category">
                                    <span class="label posts__cat-label">The Team</span>
                                </div>
                                <!-- Post Category / End -->

                                <!-- Post Title -->
                                <h1 class="page-heading__title"><a href="_soccer_blog-post-1.html">The Alchemists <span class="highlight">won the last game</span> 2-0 against Clovers</a></h1>
                                <!-- Post Title / End -->

                                <!-- Post Meta Info -->
                                <ul class="post__meta meta">
                                    <li class="meta__item meta__item--date"><time datetime="2017-08-23">August 23rd, 2017</time></li>
                                    <li class="meta__item meta__item--views">2369</li>
                                    <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
                                    <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                </ul>
                                <!-- Post Meta Info / End -->

                                <!-- Post Author -->
                                <div class="post-author">
                                    <figure class="post-author__avatar">
                                        <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                                    </figure>
                                    <div class="post-author__info">
                                        <h4 class="post-author__name">James Spiegel</h4>
                                        <span class="post-author__slogan">Alchemists Ninja</span>
                                    </div>
                                </div>
                                <!-- Post Author / End -->

                            </div>
                            <!-- Post Meta - Top / End -->
                        </div>
                    </div>
                </div>

            </div>
            <!-- Slide #1 / End -->

            <!-- Slide #2 -->
            <div class="hero-slider__item hero-slider__item--img2">

                <div class="container hero-slider__item-container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <!-- Post Meta - Top -->
                            <div class="post__meta-block post__meta-block--top">

                                <!-- Post Category -->
                                <div class="post__category">
                                    <span class="label posts__cat-label">The Team</span>
                                </div>
                                <!-- Post Category / End -->

                                <!-- Post Title -->
                                <h1 class="page-heading__title"><a href="_soccer_blog-post-1.html">Franklin Stevens has <span class="highlight">a knee fracture</span> and is gona be out</a></h1>
                                <!-- Post Title / End -->

                                <!-- Post Meta Info -->
                                <ul class="post__meta meta">
                                    <li class="meta__item meta__item--date"><time datetime="2017-08-23">August 23rd, 2017</time></li>
                                    <li class="meta__item meta__item--views">2369</li>
                                    <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
                                    <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                </ul>
                                <!-- Post Meta Info / End -->

                                <!-- Post Author -->
                                <div class="post-author">
                                    <figure class="post-author__avatar">
                                        <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                                    </figure>
                                    <div class="post-author__info">
                                        <h4 class="post-author__name">James Spiegel</h4>
                                        <span class="post-author__slogan">Alchemists Ninja</span>
                                    </div>
                                </div>
                                <!-- Post Author / End -->

                            </div>
                            <!-- Post Meta - Top / End -->
                        </div>
                    </div>
                </div>

            </div>
            <!-- Slide #2 / End -->

            <!-- Slide #3 -->
            <div class="hero-slider__item hero-slider__item--img3">

                <div class="container hero-slider__item-container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <!-- Post Meta - Top -->
                            <div class="post__meta-block post__meta-block--top">

                                <!-- Post Category -->
                                <div class="post__category">
                                    <span class="label posts__cat-label">The Team</span>
                                </div>
                                <!-- Post Category / End -->

                                <!-- Post Title -->
                                <h1 class="page-heading__title"><a href="_soccer_blog-post-1.html">The New <span class="highlight">Eco Friendly Stadium</span> won a leafy award in 2016</a></h1>
                                <!-- Post Title / End -->

                                <!-- Post Meta Info -->
                                <ul class="post__meta meta">
                                    <li class="meta__item meta__item--date"><time datetime="2017-08-23">August 23rd, 2017</time></li>
                                    <li class="meta__item meta__item--views">2369</li>
                                    <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like meta-like--active icon-heart"></i> 530</a></li>
                                    <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                </ul>
                                <!-- Post Meta Info / End -->

                                <!-- Post Author -->
                                <div class="post-author">
                                    <figure class="post-author__avatar">
                                        <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                                    </figure>
                                    <div class="post-author__info">
                                        <h4 class="post-author__name">James Spiegel</h4>
                                        <span class="post-author__slogan">Alchemists Ninja</span>
                                    </div>
                                </div>
                                <!-- Post Author / End -->

                            </div>
                            <!-- Post Meta - Top / End -->
                        </div>
                    </div>
                </div>

            </div>
            <!-- Slide #3 / End -->
        </div>

        <div class="hero-slider-thumbs-wrapper">
            <div class="container">
                <div class="hero-slider-thumbs posts posts--simple-list">
                    <div class="hero-slider-thumbs__item">
                        <div class="posts__item posts__item--category-1">
                            <div class="posts__inner">
                                <div class="posts__cat">
                                    <span class="label posts__cat-label">The Team</span>
                                </div>
                                <h6 class="posts__title">The Alchemists won the last game 2-0 against Clovers</h6>
                                <time datetime="2017-12-12" class="posts__date">December 12th, 2016</time>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slider-thumbs__item">
                        <div class="posts__item posts__item--category-2">
                            <div class="posts__inner">
                                <div class="posts__cat">
                                    <span class="label posts__cat-label">Injuries</span>
                                </div>
                                <h6 class="posts__title">Franklin Stevens has a knee fracture and is gona be out</h6>
                                <time datetime="2017-11-14" class="posts__date">November 14th, 2016</time>
                            </div>
                        </div>
                    </div>
                    <div class="hero-slider-thumbs__item">
                        <div class="posts__item posts__item--category-1">
                            <div class="posts__inner">
                                <div class="posts__cat">
                                    <span class="label posts__cat-label">The Team</span>
                                </div>
                                <h6 class="posts__title">The New Eco Friendly Stadium won a leafy award in 2016</h6>
                                <time datetime="2017-12-13" class="posts__date">December 13th, 2016</time>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <!-- Content
    ================================================== -->
    <div class="site-content">
        <div class="container">

            <div class="row">
                <!-- Content -->
                <div class="content col-md-8">

                    <!-- Featured News -->
                    <div class="card card--clean">
                        <header class="card__header card__header--has-filter">
                            <h4>Featured News</h4>
                            <ul class="category-filter category-filter--featured">
                                <li class="category-filter__item"><a href="#" class="category-filter__link category-filter__link--reset category-filter__link--active">All</a></li>
                                <li class="category-filter__item"><a href="#" class="category-filter__link" data-category="posts__item--category-1">The Team</a></li>
                                <li class="category-filter__item"><a href="#" class="category-filter__link" data-category="posts__item--category-3">The League</a></li>
                                <li class="category-filter__item"><a href="#" class="category-filter__link" data-category="posts__item--category-2">Injuries</a></li>
                            </ul>
                        </header>
                        <div class="card__content">

                            <!-- Slider -->
                            <div class="slick posts posts--slider-featured posts-slider posts-slider--center">

                                <div class="posts__item posts__item--category-1">
                                    <a href="#" class="posts__link-wrapper">
                                        <figure class="posts__thumb">
                                            <img src="assets/images/soccer/samples/post-slide7.jpg" alt="">
                                        </figure>
                                        <div class="posts__inner">
                                            <div class="posts__cat">
                                                <span class="label posts__cat-label">The Team</span>
                                            </div>
                                            <h3 class="posts__title">The Planettroters will <span class="posts__title-higlight">perform this May 4th</span> at Madison Cube</h3>
                                            <div class="post-author">
                                                <figure class="post-author__avatar">
                                                    <img src="assets/images/samples/avatar-4.jpg" alt="Post Author Avatar">
                                                </figure>
                                                <div class="post-author__info">
                                                    <h4 class="post-author__name">Jesse Stevens</h4>
                                                    <time datetime="2017-08-28" class="posts__date">August 28th, 2017</time>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="posts__item posts__item--category-3">
                                    <a href="#" class="posts__link-wrapper">
                                        <figure class="posts__thumb">
                                            <img src="assets/images/samples/post-slide2.jpg" alt="">
                                        </figure>
                                        <div class="posts__inner">
                                            <div class="posts__cat">
                                                <span class="label posts__cat-label">The League</span>
                                            </div>
                                            <h3 class="posts__title">New York is preparing all <span class="posts__title-higlight">for the Playoffs Final</span> next December</h3>
                                            <div class="post-author">
                                                <figure class="post-author__avatar">
                                                    <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                                                </figure>
                                                <div class="post-author__info">
                                                    <h4 class="post-author__name">James Spiegel</h4>
                                                    <time datetime="2017-06-28" class="posts__date">June 28th, 2017</time>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="posts__item posts__item--category-1">
                                    <a href="#" class="posts__link-wrapper">
                                        <figure class="posts__thumb">
                                            <img src="assets/images/samples/post-slide3.jpg" alt="">
                                        </figure>
                                        <div class="posts__inner">
                                            <div class="posts__cat">
                                                <span class="label posts__cat-label">The Team</span>
                                            </div>
                                            <h3 class="posts__title">The new eco friendly <span class="posts__title-higlight">stadium won a Leafy</span> Award in 2016</h3>
                                            <div class="post-author">
                                                <figure class="post-author__avatar">
                                                    <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                                                </figure>
                                                <div class="post-author__info">
                                                    <h4 class="post-author__name">James Spiegel</h4>
                                                    <time datetime="2017-06-28" class="posts__date">June 28th, 2017</time>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="posts__item posts__item--category-3">
                                    <a href="#" class="posts__link-wrapper">
                                        <figure class="posts__thumb">
                                            <img src="assets/images/samples/post-slide4.jpg" alt="">
                                        </figure>
                                        <div class="posts__inner">
                                            <div class="posts__cat">
                                                <span class="label posts__cat-label">The League</span>
                                            </div>
                                            <h3 class="posts__title">New York Islanders are <span class="posts__title-higlight">now flying to California</span> for the big game</h3>
                                            <div class="post-author">
                                                <figure class="post-author__avatar">
                                                    <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                                                </figure>
                                                <div class="post-author__info">
                                                    <h4 class="post-author__name">James Spiegel</h4>
                                                    <time datetime="2017-06-28" class="posts__date">June 28th, 2017</time>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="posts__item posts__item--category-3">
                                    <a href="#" class="posts__link-wrapper">
                                        <figure class="posts__thumb">
                                            <img src="assets/images/samples/post-slide6.jpg" alt="">
                                        </figure>
                                        <div class="posts__inner">
                                            <div class="posts__cat">
                                                <span class="label posts__cat-label">The League</span>
                                            </div>
                                            <h3 class="posts__title">Jeremy Rittersen was <span class="posts__title-higlight">called to be</span> in the National Team</h3>
                                            <div class="post-author">
                                                <figure class="post-author__avatar">
                                                    <img src="assets/images/samples/avatar-2.jpg" alt="Post Author Avatar">
                                                </figure>
                                                <div class="post-author__info">
                                                    <h4 class="post-author__name">Jessica Hoops</h4>
                                                    <time datetime="2017-05-24" class="posts__date">May 24th, 2017</time>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                                <div class="posts__item posts__item--category-2">
                                    <a href="#" class="posts__link-wrapper">
                                        <figure class="posts__thumb">
                                            <img src="assets/images/samples/post-slide5.jpg" alt="">
                                        </figure>
                                        <div class="posts__inner">
                                            <div class="posts__cat">
                                                <span class="label posts__cat-label">Injuries</span>
                                            </div>
                                            <h3 class="posts__title">Jessica Valentine has a <span class="posts__title-higlight">sprained ankle</span> and won't be in the Final</h3>
                                            <div class="post-author">
                                                <figure class="post-author__avatar">
                                                    <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                                                </figure>
                                                <div class="post-author__info">
                                                    <h4 class="post-author__name">Jesse Stevens</h4>
                                                    <time datetime="2017-04-12" class="posts__date">April 12th, 2017</time>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <!-- Slider / End -->

                        </div>
                    </div>
                    <!-- Featured News / End -->


                    <!-- Post Area 1 -->
                    <div class="posts posts--cards post-grid row">

                        <div class="post-grid__item col-sm-6">
                            <div class="posts__item posts__item--card posts__item--category-1 card">
                                <figure class="posts__thumb">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">The Team</span>
                                    </div>
                                    <a href="#"><img src="assets/images/soccer/samples/_soccer_post-img3.jpg" alt=""></a>
                                </figure>
                                <div class="posts__inner card__content">
                                    <a href="#" class="posts__cta"></a>
                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                    <h6 class="posts__title"><a href="#">Brian Kingster saw the red card after a kick against Jason T.</a></h6>
                                    <div class="posts__excerpt">
                                        Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud en derum sum laborem.
                                    </div>
                                </div>
                                <footer class="posts__footer card__footer">
                                    <div class="post-author">
                                        <figure class="post-author__avatar">
                                            <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                                        </figure>
                                        <div class="post-author__info">
                                            <h4 class="post-author__name">James Spiegel</h4>
                                        </div>
                                    </div>
                                    <ul class="post__meta meta">
                                        <li class="meta__item meta__item--views">2369</li>
                                        <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                                        <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                    </ul>
                                </footer>
                            </div>
                        </div>

                        <div class="post-grid__item col-sm-6">
                            <div class="posts__item posts__item--card posts__item--category-1 card">
                                <figure class="posts__thumb">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">The Team</span>
                                    </div>
                                    <a href="#"><img src="assets/images/soccer/samples/_soccer_post-img1.jpg" alt=""></a>
                                </figure>
                                <div class="posts__inner card__content">
                                    <a href="#" class="posts__cta"></a>
                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                    <h6 class="posts__title"><a href="#">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
                                    <div class="posts__excerpt">
                                        Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud en derum sum laborem.
                                    </div>
                                </div>
                                <footer class="posts__footer card__footer">
                                    <div class="post-author">
                                        <figure class="post-author__avatar">
                                            <img src="assets/images/samples/avatar-2.jpg" alt="Post Author Avatar">
                                        </figure>
                                        <div class="post-author__info">
                                            <h4 class="post-author__name">Jessica Hoops</h4>
                                        </div>
                                    </div>
                                    <ul class="post__meta meta">
                                        <li class="meta__item meta__item--views">2369</li>
                                        <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                                        <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                    </ul>
                                </footer>
                            </div>
                        </div>

                    </div>
                    <!-- Post Area 1 / End -->


                    <!-- Post Area 2 -->
                    <div class="posts posts--cards post-grid row">

                        <div class="post-grid__item col-sm-6">
                            <div class="posts__item posts__item--card posts__item--category-1 card">
                                <figure class="posts__thumb">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">The Team</span>
                                    </div>
                                    <a href="#"><img src="assets/images/samples/post-img3.jpg" alt=""></a>
                                </figure>
                                <div class="posts__inner card__content">
                                    <a href="#" class="posts__cta"></a>
                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                    <h6 class="posts__title"><a href="#">The new eco friendly stadium won a Leafy Award in 2016</a></h6>
                                    <div class="posts__excerpt">
                                        Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud en derum sum laborem.
                                    </div>
                                </div>
                                <footer class="posts__footer card__footer">
                                    <div class="post-author">
                                        <figure class="post-author__avatar">
                                            <img src="assets/images/samples/avatar-2.jpg" alt="Post Author Avatar">
                                        </figure>
                                        <div class="post-author__info">
                                            <h4 class="post-author__name">Jessica Hoops</h4>
                                        </div>
                                    </div>
                                    <ul class="post__meta meta">
                                        <li class="meta__item meta__item--views">2369</li>
                                        <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                                        <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                    </ul>
                                </footer>
                            </div>
                        </div>

                        <div class="post-grid__item col-sm-6">
                            <div class="posts__item posts__item--card posts__item--category-1 card">
                                <figure class="posts__thumb">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">The Team</span>
                                    </div>
                                    <a href="#"><img src="assets/images/samples/post-img5.jpg" alt=""></a>
                                </figure>
                                <div class="posts__inner card__content">
                                    <a href="#" class="posts__cta"></a>
                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                    <h6 class="posts__title"><a href="#">The Alchemists team is appearing in L.A. beach for chartiy</a></h6>
                                    <div class="posts__excerpt">
                                        Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini veniam, quis nostrud en derum sum laborem.
                                    </div>
                                </div>
                                <footer class="posts__footer card__footer">
                                    <div class="post-author">
                                        <figure class="post-author__avatar">
                                            <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                                        </figure>
                                        <div class="post-author__info">
                                            <h4 class="post-author__name">James Spiegel</h4>
                                        </div>
                                    </div>
                                    <ul class="post__meta meta">
                                        <li class="meta__item meta__item--views">2369</li>
                                        <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                                        <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                    </ul>
                                </footer>
                            </div>
                        </div>

                    </div>
                    <!-- Post Area 2 / End -->

                    <!-- Post Area 3 -->
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card__content">
                                    <ul class="posts posts--simple-list">
                                        <li class="posts__item posts__item--category-1">
                                            <figure class="posts__thumb">
                                                <a href="#"><img src="assets/images/samples/post-img22-xs.jpg" alt=""></a>
                                            </figure>
                                            <div class="posts__inner">
                                                <div class="posts__cat">
                                                    <span class="label posts__cat-label">The Team</span>
                                                </div>
                                                <h6 class="posts__title"><a href="#">Brian Kingster was penalized with four games out</a></h6>
                                                <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                            </div>
                                            <div class="posts__excerpt posts__excerpt--space-sm">
                                                Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </div>
                                        </li>
                                        <li class="posts__item posts__item--category-3">
                                            <figure class="posts__thumb">
                                                <a href="#"><img src="assets/images/samples/post-img23-xs.jpg" alt=""></a>
                                            </figure>
                                            <div class="posts__inner">
                                                <div class="posts__cat">
                                                    <span class="label posts__cat-label">The League</span>
                                                </div>
                                                <h6 class="posts__title"><a href="#">The next game will be played at California Beach</a></h6>
                                                <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                            </div>
                                            <div class="posts__excerpt posts__excerpt--space-sm">
                                                Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </div>
                                        </li>
                                        <li class="posts__item posts__item--category-3">
                                            <figure class="posts__thumb">
                                                <a href="#"><img src="assets/images/samples/post-img20-xs.jpg" alt=""></a>
                                            </figure>
                                            <div class="posts__inner">
                                                <div class="posts__cat">
                                                    <span class="label posts__cat-label">The League</span>
                                                </div>
                                                <h6 class="posts__title"><a href="#">The Alchemists need two win the next two games</a></h6>
                                                <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                            </div>
                                            <div class="posts__excerpt posts__excerpt--space-sm">
                                                Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card__content">
                                    <ul class="posts posts--simple-list">
                                        <li class="posts__item posts__item--category-1">
                                            <figure class="posts__thumb">
                                                <a href="#"><img src="assets/images/samples/post-img24-xs.jpg" alt=""></a>
                                            </figure>
                                            <div class="posts__inner">
                                                <div class="posts__cat">
                                                    <span class="label posts__cat-label">The Team</span>
                                                </div>
                                                <h6 class="posts__title"><a href="#">The team will make a small vacation to the Caribbean</a></h6>
                                                <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                            </div>
                                            <div class="posts__excerpt posts__excerpt--space-sm">
                                                Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </div>
                                        </li>
                                        <li class="posts__item posts__item--category-2">
                                            <figure class="posts__thumb">
                                                <a href="#"><img src="assets/images/samples/post-img18-xs.jpg" alt=""></a>
                                            </figure>
                                            <div class="posts__inner">
                                                <div class="posts__cat">
                                                    <span class="label posts__cat-label">Injuries</span>
                                                </div>
                                                <h6 class="posts__title"><a href="#">Jenny Jackson won't be able to play next game</a></h6>
                                                <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                            </div>
                                            <div class="posts__excerpt posts__excerpt--space-sm">
                                                Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </div>
                                        </li>
                                        <li class="posts__item posts__item--category-3">
                                            <figure class="posts__thumb">
                                                <a href="#"><img src="assets/images/samples/post-img4-xs.jpg" alt=""></a>
                                            </figure>
                                            <div class="posts__inner">
                                                <div class="posts__cat">
                                                    <span class="label posts__cat-label">The League</span>
                                                </div>
                                                <h6 class="posts__title"><a href="#">The team is starting a new power breakfast regimen</a></h6>
                                                <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                            </div>
                                            <div class="posts__excerpt posts__excerpt--space-sm">
                                                Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Post Area 3 / End -->


                    <!-- Main News Banner -->
                    <div class="main-news-banner main-news-banner--soccer-ball">
                        <div class="main-news-banner__inner">
                            <div class="posts posts--simple-list posts--simple-list--xlg">
                                <div class="posts__item posts__item--category-1">
                                    <div class="posts__inner">
                                        <div class="posts__cat">
                                            <span class="label posts__cat-label">The Team</span>
                                        </div>
                                        <h6 class="posts__title"><a href="#">Today was unveiled the <span class="main-news-banner__highlight">New Football</span> for the league</a></h6>
                                        <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                        <div class="posts__excerpt">
                                            Lorem ipsum dolor sit amet, consectetur adipisi nel elit, sed do eiusmod tempor incididunt ut labore et dolore.
                                        </div>
                                        <div class="posts__more">
                                            <a href="#" class="btn btn-inverse btn-sm btn-outline btn-icon-right btn-condensed">Read More <i class="fa fa-plus text-primary"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- Main News Banner / End -->

                    <!-- Lates News -->
                    <div class="card card--clean">
                        <header class="card__header card__header--has-btn">
                            <h4>Latest News</h4>
                            <a href="#" class="btn btn-default btn-outline btn-xs card-header__button">See All Posts</a>
                        </header>

                        <div class="card__content">

                            <!-- Post Area 4 -->
                            <div class="posts posts--cards post-grid row">

                                <div class="post-grid__item col-sm-6">
                                    <div class="posts__item posts__item--card posts__item--category-2 card">
                                        <figure class="posts__thumb">
                                            <div class="posts__cat">
                                                <span class="label posts__cat-label">Injuries</span>
                                            </div>
                                            <a href="#"><img src="assets/images/samples/post-img1.jpg" alt=""></a>
                                        </figure>
                                        <div class="posts__inner card__content">
                                            <a href="#" class="posts__cta"></a>
                                            <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                            <h6 class="posts__title"><a href="#">Franklin Stevens has a knee fracture and is gonna be out</a></h6>
                                        </div>
                                        <footer class="posts__footer card__footer">
                                            <div class="post-author">
                                                <figure class="post-author__avatar">
                                                    <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                                                </figure>
                                                <div class="post-author__info">
                                                    <h4 class="post-author__name">James Spiegel</h4>
                                                </div>
                                            </div>
                                            <ul class="post__meta meta">
                                                <li class="meta__item meta__item--views">2369</li>
                                                <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                                                <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                            </ul>
                                        </footer>
                                    </div>
                                </div>

                                <div class="post-grid__item col-sm-6">
                                    <div class="posts__item posts__item--card posts__item--category-1 card">
                                        <figure class="posts__thumb">
                                            <div class="posts__cat">
                                                <span class="label posts__cat-label">The Team</span>
                                            </div>
                                            <a href="#"><img src="assets/images/soccer/samples/_soccer_post-img4.jpg" alt=""></a>
                                        </figure>
                                        <div class="posts__inner card__content">
                                            <a href="#" class="posts__cta"></a>
                                            <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                            <h6 class="posts__title"><a href="#">Jay Rorks is only 24 points away from breaking the record</a></h6>
                                        </div>
                                        <footer class="posts__footer card__footer">
                                            <div class="post-author">
                                                <figure class="post-author__avatar">
                                                    <img src="assets/images/samples/avatar-2.jpg" alt="Post Author Avatar">
                                                </figure>
                                                <div class="post-author__info">
                                                    <h4 class="post-author__name">Jessica Hoops</h4>
                                                </div>
                                            </div>
                                            <ul class="post__meta meta">
                                                <li class="meta__item meta__item--views">2369</li>
                                                <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                                                <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                            </ul>
                                        </footer>
                                    </div>
                                </div>

                                <div class="clearfix hidden-md hidden-lg"></div>

                                <div class="post-grid__item col-sm-6">
                                    <div class="posts__item posts__item--card posts__item--category-1 card">
                                        <figure class="posts__thumb">
                                            <div class="posts__cat">
                                                <span class="label posts__cat-label">The Team</span>
                                            </div>
                                            <a href="#"><img src="assets/images/samples/post-img13.jpg" alt=""></a>
                                        </figure>
                                        <div class="posts__inner card__content">
                                            <a href="#" class="posts__cta"></a>
                                            <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                            <h6 class="posts__title"><a href="#">The team is starting a new power breakfast regimen</a></h6>
                                        </div>
                                        <footer class="posts__footer card__footer">
                                            <div class="post-author">
                                                <figure class="post-author__avatar">
                                                    <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                                                </figure>
                                                <div class="post-author__info">
                                                    <h4 class="post-author__name">James Spiegel</h4>
                                                </div>
                                            </div>
                                            <ul class="post__meta meta">
                                                <li class="meta__item meta__item--views">2369</li>
                                                <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                                                <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                            </ul>
                                        </footer>
                                    </div>
                                </div>

                                <div class="post-grid__item col-sm-6">
                                    <div class="posts__item posts__item--card posts__item--category-1 card">
                                        <figure class="posts__thumb">
                                            <div class="posts__cat">
                                                <span class="label posts__cat-label">The Team</span>
                                            </div>
                                            <a href="#"><img src="assets/images/samples/post-img2.jpg" alt=""></a>
                                        </figure>
                                        <div class="posts__inner card__content">
                                            <a href="#" class="posts__cta"></a>
                                            <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                            <h6 class="posts__title"><a href="#">Cheerleader tryouts will start next Friday at 5pm</a></h6>
                                        </div>
                                        <footer class="posts__footer card__footer">
                                            <div class="post-author">
                                                <figure class="post-author__avatar">
                                                    <img src="assets/images/samples/avatar-1.jpg" alt="Post Author Avatar">
                                                </figure>
                                                <div class="post-author__info">
                                                    <h4 class="post-author__name">James Spiegel</h4>
                                                </div>
                                            </div>
                                            <ul class="post__meta meta">
                                                <li class="meta__item meta__item--views">2369</li>
                                                <li class="meta__item meta__item--likes"><a href="#"><i class="meta-like icon-heart"></i> 530</a></li>
                                                <li class="meta__item meta__item--comments"><a href="#">18</a></li>
                                            </ul>
                                        </footer>
                                    </div>
                                </div>

                            </div>
                            <!-- Post Area 4 / End -->
                        </div>
                    </div>
                    <!-- Lates News / End -->

                    <!-- Post Pagination -->
                    <nav class="post-pagination text-center">
                        <ul class="pagination pagination--condensed pagination--lg">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><span>...</span></li>
                            <li><a href="#">16</a></li>
                        </ul>
                    </nav>
                    <!-- Post Pagination / End -->



                </div>
                <!-- Content / End -->

                <!-- Sidebar -->
                <div id="sidebar" class="sidebar col-md-4">
                    <!-- Widget: Standings -->
                    <aside class="widget card widget--sidebar widget-standings">
                        <div class="widget__title card__header card__header--has-btn">
                            <h4>West League 2016</h4>
                            <a href="#" class="btn btn-default btn-outline btn-xs card-header__button">See All Stats</a>
                        </div>
                        <div class="widget__content card__content">
                            <div class="table-responsive">
                                <table class="table table-hover table-standings">
                                    <thead>
                                    <tr>
                                        <th>Ranking</th>
                                        <th>Team Positions</th>
                                        <th>W</th>
                                        <th>L</th>
                                        <th>D</th>
                                        <th>PTS</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/pirates_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">

                                                    <h6 class="team-meta__name">L.A Pirates</h6>
                                                    <span class="team-meta__place">Bebop Institute</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>36</td>
                                        <td>14</td>
                                        <td>10</td>
                                        <td>118</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/sharks_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">Sharks</h6>
                                                    <span class="team-meta__place">Marine College</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>32</td>
                                        <td>20</td>
                                        <td>8</td>
                                        <td>104</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/soccer/logos/alchemists_s_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">The Alchemists</h6>
                                                    <span class="team-meta__place">Eric Bros School</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>32</td>
                                        <td>21</td>
                                        <td>7</td>
                                        <td>103</td>
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/ocean_kings_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">Ocean Kings</h6>
                                                    <span class="team-meta__place">Bay College</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>30</td>
                                        <td>20</td>
                                        <td>10</td>
                                        <td>100</td>
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/red_wings_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">Red Wings</h6>
                                                    <span class="team-meta__place">Icarus College</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>28</td>
                                        <td>24</td>
                                        <td>8</td>
                                        <td>92</td>
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/lucky_clovers_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">Lucky Clovers</h6>
                                                    <span class="team-meta__place">St. Patrick’s Institute</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>27</td>
                                        <td>24</td>
                                        <td>9</td>
                                        <td>90</td>
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/draconians_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">Draconians</h6>
                                                    <span class="team-meta__place">Draconians</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>25</td>
                                        <td>28</td>
                                        <td>7</td>
                                        <td>82</td>
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>
                                            <div class="team-meta">
                                                <figure class="team-meta__logo">
                                                    <img src="assets/images/samples/logos/bloody_wave_shield.png" alt="">
                                                </figure>
                                                <div class="team-meta__info">
                                                    <h6 class="team-meta__name">Bloody Wave</h6>
                                                    <span class="team-meta__place">Atlantic School</span>
                                                </div>
                                            </div>
                                        </td>
                                        <td>24</td>
                                        <td>30</td>
                                        <td>6</td>
                                        <td>78</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </aside>
                    <!-- Widget: Standings / End -->





                    <!-- Widget: Game Result -->
                    <aside class="widget card widget--sidebar widget-game-result">
                        <div class="widget__title card__header card__header--has-btn">
                            <h4>Last Game Results</h4>
                            <a href="#" class="btn btn-default btn-outline btn-xs card-header__button">Expand Stats</a>
                        </div>
                        <div class="widget__content card__content">
                            <!-- Game Score -->
                            <div class="widget-game-result__section">
                                <div class="widget-game-result__section-inner">
                                    <header class="widget-game-result__header">
                                        <h3 class="widget-game-result__title">Championship Quarter Finals</h3>
                                        <time class="widget-game-result__date" datetime="2016-03-24">Saturday, March 24th, 2016</time>
                                    </header>

                                    <div class="widget-game-result__main">
                                        <!-- 1st Team -->
                                        <div class="widget-game-result__team widget-game-result__team--first">
                                            <figure class="widget-game-result__team-logo">
                                                <a href="#"><img src="assets/images/soccer/logos/alchemists_last_game_results_big.png" alt=""></a>
                                            </figure>
                                            <div class="widget-game-result__team-info">
                                                <h5 class="widget-game-result__team-name">Alchemists</h5>
                                                <div class="widget-game-result__team-desc">Elric Bros School</div>
                                            </div>
                                        </div>
                                        <!-- 1st Team / End -->

                                        <div class="widget-game-result__score-wrap">
                                            <div class="widget-game-result__score">
                                                <span class="widget-game-result__score-result widget-game-result__score-result--winner">2</span> <span class="widget-game-result__score-dash">-</span> <span class="widget-game-result__score-result widget-game-result__score-result--loser">0</span>
                                            </div>
                                            <div class="widget-game-result__score-label">Final Score</div>
                                        </div>

                                        <!-- 2nd Team -->
                                        <div class="widget-game-result__team widget-game-result__team--second">
                                            <figure class="widget-game-result__team-logo">
                                                <a href="#"><img src="assets/images/samples/logo-l-clovers--sm.png" alt=""></a>
                                            </figure>
                                            <div class="widget-game-result__team-info">
                                                <h5 class="widget-game-result__team-name">Clovers</h5>
                                                <div class="widget-game-result__team-desc">St Paddy's Institute</div>
                                            </div>
                                        </div>
                                        <!-- 2nd Team / End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Game Score / End -->

                            <!-- Timeline -->
                            <div class="widget-game-result__section">

                                <div class="df-timeline-wrapper">
                                    <div class="df-timeline">

                                        <div class="df-timeline__event df-timeline__event--start">
                                            <div class="df-timeline__team-1">
                                                <img src="assets/images/soccer/icon-shirt.svg" alt="" class="df-timeline__team-shirt">
                                            </div>
                                            <div class="df-timeline__time">0’</div>
                                            <div class="df-timeline__team-2">
                                                <img src="assets/images/soccer/icon-shirt-alt.svg" alt="" class="df-timeline__team-shirt">
                                            </div>
                                        </div>

                                        <div class="df-timeline__event df-timeline__event--empty"></div>

                                        <div class="df-timeline__event">
                                            <div class="df-timeline__team-1">
                                                <div class="df-timeline__event-info">
                                                    <div class="df-timeline__event-name">F. Stevens</div>
                                                    <div class="df-timeline__event-desc">Alchemists 1-0</div>
                                                </div>
                                                <img src="assets/images/soccer/icon-soccer-ball.svg" width="16" height="16" alt="" class="df-timeline__event-icon">
                                            </div>
                                            <div class="df-timeline__time">22’</div>
                                        </div>

                                        <div class="df-timeline__event">
                                            <div class="df-timeline__time">36’</div>
                                            <div class="df-timeline__team-2">
                                                <img src="assets/images/soccer/icon-yellow-card.svg" alt="" class="df-timeline__event-icon">
                                                <div class="df-timeline__event-info">
                                                    <div class="df-timeline__event-name">Johnny Griffin</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="df-timeline__event df-timeline__event--empty"></div>

                                        <div class="df-timeline__event">
                                            <div class="df-timeline__time">HT</div>
                                            <div class="df-timeline__team-2">
                                                <img src="assets/images/soccer/icon-substitution.svg" alt="" class="df-timeline__event-icon">
                                                <div class="df-timeline__event-info">
                                                    <div class="df-timeline__event-name">Markus Jackson</div>
                                                    <div class="df-timeline__event-name">Rick Valentine</div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="df-timeline__event">
                                            <div class="df-timeline__team-1">
                                                <div class="df-timeline__event-info">
                                                    <div class="df-timeline__event-name">Brian Kingster</div>
                                                </div>
                                                <img src="assets/images/soccer/icon-red-card.svg" alt="" class="df-timeline__event-icon">
                                            </div>
                                            <div class="df-timeline__time">59’</div>
                                        </div>

                                        <div class="df-timeline__event">
                                            <div class="df-timeline__team-1">
                                                <div class="df-timeline__event-info">
                                                    <div class="df-timeline__event-name">Christofer Grass (P)</div>
                                                    <div class="df-timeline__event-desc">Alchemists 2-0</div>
                                                </div>
                                                <img src="assets/images/soccer/icon-soccer-ball-penalty.svg" alt="" class="df-timeline__event-icon">
                                            </div>
                                            <div class="df-timeline__time">68’</div>
                                        </div>

                                        <div class="df-timeline__event df-timeline__event--empty"></div>

                                        <div class="df-timeline__event">
                                            <div class="df-timeline__time">84’</div>
                                            <div class="df-timeline__team-2">
                                                <img src="assets/images/soccer/icon-yellow-card.svg" alt="" class="df-timeline__event-icon">
                                                <div class="df-timeline__event-info">
                                                    <div class="df-timeline__event-name">Wally Christison </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- Timeline / End -->

                            <!-- Game Statistics -->
                            <div class="widget-game-result__section">
                                <header class="widget-game-result__subheader card__subheader card__subheader--sm card__subheader--nomargins">
                                    <h5 class="widget-game-result__subtitle">Game Statistics</h5>
                                </header>
                                <div class="widget-game-result__section-inner">
                                    <!-- Progress: Shots on Goal -->
                                    <div class="progress-double-wrapper">
                                        <h6 class="progress-title">Shots on Goal</h6>
                                        <div class="progress-inner-holder">
                                            <div class="progress__digit progress__digit--left progress__digit--40">15</div>
                                            <div class="progress__double">
                                                <div class="progress">
                                                    <div class="progress__bar progress__bar-width-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress__bar progress__bar--success progress__bar-width-80" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="progress__digit progress__digit--right progress__digit--highlight progress__digit--40">24</div>
                                        </div>
                                    </div>
                                    <!-- Progress: Shots on Goal / End -->

                                    <!-- Progress: Ball Posession -->
                                    <div class="progress-double-wrapper">
                                        <h6 class="progress-title">Ball Posession</h6>
                                        <div class="progress-inner-holder">
                                            <div class="progress__digit progress__digit--left progress__digit--highlight progress__digit--40">75%</div>
                                            <div class="progress__double">
                                                <div class="progress">
                                                    <div class="progress__bar progress__bar-width-80" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress__bar progress__bar--success progress__bar-width-40" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="progress__digit progress__digit--right progress__digit--40">35%</div>
                                        </div>
                                    </div>
                                    <!-- Progress: Ball Posession / End -->

                                    <!-- Progress: Fouls -->
                                    <div class="progress-double-wrapper">
                                        <h6 class="progress-title">Fouls</h6>
                                        <div class="progress-inner-holder">
                                            <div class="progress__digit progress__digit--left progress__digit--40">5</div>
                                            <div class="progress__double">
                                                <div class="progress">
                                                    <div class="progress__bar progress__bar-width-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress__bar progress__bar--success progress__bar-width-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="progress__digit progress__digit--right progress__digit--highlight progress__digit--40">8</div>
                                        </div>
                                    </div>
                                    <!-- Progress: Fouls / End -->

                                    <!-- Progress: Corner Kicks -->
                                    <div class="progress-double-wrapper">
                                        <h6 class="progress-title">Corner Kicks</h6>
                                        <div class="progress-inner-holder">
                                            <div class="progress__digit progress__digit--left progress__digit--40">10</div>
                                            <div class="progress__double">
                                                <div class="progress">
                                                    <div class="progress__bar progress__bar-width-30" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                                <div class="progress">
                                                    <div class="progress__bar progress__bar--success progress__bar-width-80" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="progress__digit progress__digit--right progress__digit--highlight progress__digit--40">12</div>
                                        </div>
                                    </div>
                                    <!-- Progress: Corner Kicks / End -->
                                </div>
                            </div>
                            <!-- Game Statistics / End -->

                        </div>
                    </aside>
                    <!-- Widget: Game Result / End -->


                    <!-- Widget: Trending News -->
                    <aside class="widget widget--sidebar card widget-tabbed">
                        <div class="widget__title card__header">
                            <h4>Top Trending News</h4>
                        </div>
                        <div class="widget__content card__content">
                            <div class="widget-tabbed__tabs">
                                <!-- Widget Tabs -->
                                <ul class="nav nav-tabs nav-justified widget-tabbed__nav" role="tablist">
                                    <li role="presentation" class="active"><a href="#widget-tabbed-sm-newest" aria-controls="widget-tabbed-sm-newest" role="tab" data-toggle="tab">Newest</a></li>
                                    <li role="presentation"><a href="#widget-tabbed-sm-commented" aria-controls="widget-tabbed-sm-commented" role="tab" data-toggle="tab">Most Commented</a></li>
                                    <li role="presentation"><a href="#widget-tabbed-sm-popular" aria-controls="widget-tabbed-sm-popular" role="tab" data-toggle="tab">Popular</a></li>
                                </ul>

                                <!-- Widget Tab panes -->
                                <div class="tab-content widget-tabbed__tab-content">
                                    <!-- Newest -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="widget-tabbed-sm-newest">
                                        <ul class="posts posts--simple-list">
                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">Jake Dribbler Announced that he is retiring next mnonth</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The Alchemists news coach is bringin a new shooting guard</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">This Saturday starts the intensive training for the Final</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Commented -->
                                    <div role="tabpanel" class="tab-pane fade" id="widget-tabbed-sm-commented">
                                        <ul class="posts posts--simple-list">
                                            <li class="posts__item posts__item--category-3">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">Playoffs</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">New York Islanders are now flying to California for the big game</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The Female Division is growing strong after their third game</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The Alchemists news coach is bringin a new shooting guard</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Popular -->
                                    <div role="tabpanel" class="tab-pane fade" id="widget-tabbed-sm-popular">
                                        <ul class="posts posts--simple-list">
                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The Alchemists news coach is bringin a new shooting guard</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">This Saturday starts the intensive training for the Final</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">Jake Dribbler Announced that he is retiring next mnonth</a></h6>
                                                    <time datetime="2016-08-23" class="posts__date">August 23rd, 2016</time>
                                                    <div class="posts__excerpt">
                                                        Lorem ipsum dolor sit amet, consectetur adipisi ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </aside>
                    <!-- Widget: Trending News / End -->


                    <!-- Widget: Match Announcement -->
                    <aside class="widget widget--sidebar card widget-preview">
                        <div class="widget__title card__header">
                            <h4>Next Match</h4>
                        </div>
                        <div class="widget__content card__content">

                            <!-- Match Preview -->
                            <div class="match-preview">
                                <section class="match-preview__body">
                                    <header class="match-preview__header">
                                        <time class="match-preview__date" datetime="2017-05-17">Friday August 14th</time>
                                        <h3 class="match-preview__title match-preview__title--lg">Quarter Finals</h3>
                                    </header>
                                    <div class="match-preview__content">

                                        <!-- 1st Team -->
                                        <div class="match-preview__team match-preview__team--first">
                                            <figure class="match-preview__team-logo">
                                                <img src="assets/images/soccer/logos/alchemists_buy_tickets.png" alt="">
                                            </figure>
                                            <h5 class="match-preview__team-name">Alchemists</h5>
                                            <div class="match-preview__team-info">Elric Bros School</div>
                                        </div>
                                        <!-- 1st Team / End -->

                                        <div class="match-preview__vs">
                                            <div class="match-preview__conj">VS</div>
                                            <div class="match-preview__match-info">
                                                <time class="match-preview__match-time" datetime="2017-05-17 09:00">9:00 PM</time>
                                                <div class="match-preview__match-place">Madison Cube Stadium</div>
                                            </div>
                                        </div>

                                        <!-- 2nd Team -->
                                        <div class="match-preview__team match-preview__team--second">
                                            <figure class="match-preview__team-logo">
                                                <img src="assets/images/soccer/logos/pirates_buy_tickets.png" alt="">
                                            </figure>
                                            <h5 class="match-preview__team-name">Pirates</h5>
                                            <div class="match-preview__team-info">Bebop Institute</div>
                                        </div>
                                        <!-- 2nd Team / End -->

                                    </div>
                                </section>
                                <div class="countdown__content">
                                    <div class="countdown-counter" data-date="May 12, 2017 12:00:00"></div>
                                </div>
                                <div class="match-preview__action match-preview__action--ticket">
                                    <a href="#" class="btn btn-primary-inverse btn-lg btn-block">Buy Tickets Now</a>
                                </div>
                            </div>
                            <!-- Match Preview / End -->

                        </div>
                    </aside>
                    <!-- Widget: Match Announcement / End -->

                </div>
                <!-- Sidebar / End -->
            </div>

        </div>
    </div>

    <!-- Content / End -->

    <!-- Footer
    ================================================== -->
    <footer id="footer" class="footer">

        <!-- Footer Widgets -->
        <div class="footer-widgets">
            <div class="footer-widgets__inner">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="footer-col-inner">

                                <!-- Footer Logo -->
                                <div class="footer-logo footer-logo--has-txt">
                                    <a href="index.html">
                                        <img src="assets/images/soccer/logo-footer.png" srcset="assets/images/soccer/logo-footer@2x.png 2x" alt="Alchemists" class="footer-logo__img">
                                        <div class="footer-logo__heading">
                                            <h5 class="footer-logo__txt">The Alchemists</h5>
                                            <span class="footer-logo__tagline">Elric Bros School</span>
                                        </div>
                                    </a>
                                </div>
                                <!-- Footer Logo / End -->

                                <!-- Widget: Contact Info -->
                                <div class="widget widget--footer widget-contact-info">
                                    <div class="widget__content">
                                        <div class="widget-contact-info__desc">
                                            <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor incididunt uten labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                        </div>
                                        <div class="widget-contact-info__body info-block">
                                            <div class="info-block__item">
                                                <svg role="img" class="df-icon df-icon--soccer-ball">
                                                    <use xlink:href="assets/images/icons-soccer.svg#soccer-ball"/>
                                                </svg>
                                                <h6 class="info-block__heading">Contact Us</h6>
                                                <a class="info-block__link" href="mailto:info@alchemists.com">info@alchemists.com</a>
                                            </div>
                                            <div class="info-block__item">
                                                <svg role="img" class="df-icon df-icon--whistle">
                                                    <use xlink:href="assets/images/icons-soccer.svg#whistle"/>
                                                </svg>
                                                <h6 class="info-block__heading">Join Our Team!</h6>
                                                <a class="info-block__link" href="mailto:tryouts@alchemists.com">tryouts@alchemists.com</a>
                                            </div>
                                            <div class="info-block__item info-block__item--nopadding">
                                                <ul class="social-links">
                                                    <li class="social-links__item">
                                                        <a href="#" class="social-links__link"><i class="fa fa-facebook"></i> Facebook</a>
                                                    </li>
                                                    <li class="social-links__item">
                                                        <a href="#" class="social-links__link"><i class="fa fa-twitter"></i> Twitter</a>
                                                    </li>
                                                    <li class="social-links__item">
                                                        <a href="#" class="social-links__link"><i class="fa fa-google-plus"></i> Google+</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Widget: Contact Info / End -->
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="footer-col-inner">
                                <!-- Widget: Popular Posts / End -->
                                <div class="widget widget--footer widget-popular-posts">
                                    <h4 class="widget__title">Popular News</h4>
                                    <div class="widget__content">
                                        <ul class="posts posts--simple-list">
                                            <li class="posts__item posts__item--category-1">
                                                <figure class="posts__thumb posts__thumb--hover">
                                                    <a href="#"><img src="assets/images/samples/post-img3-xs.jpg" alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The new eco friendly stadium won a Leafy Award in 2017</a></h6>
                                                    <time datetime="2017-08-21" class="posts__date">August 21st, 2017</time>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-2">
                                                <figure class="posts__thumb posts__thumb--hover">
                                                    <a href="#"><img src="assets/images/samples/post-img18-xs.jpg" alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">Injuries</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">Jenny Jackson won't be able to play the next game</a></h6>
                                                    <time datetime="2017-08-21" class="posts__date">August 21st, 2017</time>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <figure class="posts__thumb posts__thumb--hover">
                                                    <a href="#"><img src="assets/images/samples/post-img8-xs.jpg" alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The team is starting a new power breakfast regimen</a></h6>
                                                    <time datetime="2017-08-21" class="posts__date">August 21st, 2017</time>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Widget: Popular Posts / End -->
                            </div>
                        </div>
                        <div class="clearfix visible-sm"></div>
                        <div class="col-sm-6 col-md-3">
                            <div class="footer-col-inner">
                                <!-- Widget: Featured News / End -->
                                <div class="widget widget--footer widget-featured-posts">
                                    <h4 class="widget__title">Featured News</h4>
                                    <div class="widget__content">
                                        <ul class="posts posts--simple-list">
                                            <li class="posts__item posts__item--category-1">
                                                <figure class="posts__thumb posts__thumb--hover">
                                                    <a href="#"><img src="assets/images/samples/post-img21-xs.jpg" alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The team trainings are instensifying looking at the next match</a></h6>
                                                    <time datetime="2017-08-21" class="posts__date">August 21st, 2017</time>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-1">
                                                <figure class="posts__thumb posts__thumb--hover">
                                                    <a href="#"><img src="assets/images/samples/post-img5-xs.jpg" alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The Team</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The Alchemists team is appearing in L.A. Beach for charity</a></h6>
                                                    <time datetime="2017-08-21" class="posts__date">August 21st, 2017</time>
                                                </div>
                                            </li>
                                            <li class="posts__item posts__item--category-3">
                                                <figure class="posts__thumb posts__thumb--hover">
                                                    <a href="#"><img src="assets/images/samples/post-img20-xs.jpg" alt=""></a>
                                                </figure>
                                                <div class="posts__inner">
                                                    <div class="posts__cat">
                                                        <span class="label posts__cat-label">The League</span>
                                                    </div>
                                                    <h6 class="posts__title"><a href="#">The Alchemists need two win the next two games</a></h6>
                                                    <time datetime="2017-08-21" class="posts__date">August 21st, 2017</time>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Widget: Featured News / End -->
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="footer-col-inner">

                                <!-- Widget: Contact / End -->
                                <div class="widget widget--footer widget-contact">
                                    <h4 class="widget__title">Quick Contact</h4>
                                    <div class="widget__content">
                                        <p>Lorem ipsum dolor sit amet, consectetur cing elit, sed do eiusmod tempor.</p>
                                        <form action="#" class="contact-form">
                                            <div class="form-group form-group--xs">
                                                <input type="email" class="form-control input-sm" id="contact-form-email" placeholder="Your email address...">
                                            </div>
                                            <div class="form-group form-group--xs">
                                                <textarea class="form-control input-sm" name="contact-form-message" rows="4" placeholder="Your message..."></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-primary-inverse btn-sm btn-block">Send Your Message</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- Widget: Contact / End -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sponsors -->
            <div class="container">
                <div class="sponsors">
                    <h6 class="sponsors-title">Our Sponsors:</h6>
                    <ul class="sponsors-logos">
                        <li class="sponsors__item">
                            <a href="#"><img src="assets/images/samples/sponsor-visa.png" alt=""></a>
                        </li>
                        <li class="sponsors__item">
                            <a href="#"><img src="assets/images/samples/sponsor-discover.png" alt=""></a>
                        </li>
                        <li class="sponsors__item">
                            <a href="#"><img src="assets/images/samples/sponsor-paypal.png" alt=""></a>
                        </li>
                        <li class="sponsors__item">
                            <a href="#"><img src="assets/images/samples/sponsor-skrill.png" alt=""></a>
                        </li>
                        <li class="sponsors__item">
                            <a href="#"><img src="assets/images/samples/sponsor-westernunion.png" alt=""></a>
                        </li>
                        <li class="sponsors__item">
                            <a href="#"><img src="assets/images/samples/sponsor-payoneer.png" alt=""></a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Sponsors / End -->

        </div>
        <!-- Footer Widgets / End -->

        <!-- Footer Secondary -->
        <div class="footer-secondary">
            <div class="container">
                <div class="footer-secondary__inner">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="footer-copyright"><a href="_soccer_index.html">The Alchemists</a> 2017 &nbsp; | &nbsp; All Rights Reserved</div>
                        </div>
                        <div class="col-md-8">
                            <ul class="footer-nav footer-nav--right footer-nav--condensed footer-nav--sm">
                                <li class="footer-nav__item"><a href="#">Home</a></li>
                                <li class="footer-nav__item"><a href="#">Features</a></li>
                                <li class="footer-nav__item"><a href="#">Statistics</a></li>
                                <li class="footer-nav__item"><a href="#">The Team</a></li>
                                <li class="footer-nav__item"><a href="#">News</a></li>
                                <li class="footer-nav__item"><a href="#">Shop</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Secondary / End -->
    </footer>
    <!-- Footer / End -->


    <!-- Login/Register Tabs Modal -->
    <div class="modal fade" id="modal-login-register-tabs" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal--login modal--login-only" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">

                    <div class="modal-account-holder">
                        <div class="modal-account__item modal-account__item--logo">
                            <p class="modal-account__item-register-txt">Don’t have an account? <a href="#">Register Now</a> and enjoy all our benefits!</p>
                        </div>
                        <div class="modal-account__item">

                            <!-- Tab panes -->
                            <div class="tab-content">

                                <!-- Tab: Login -->
                                <div role="tabpanel" class="tab-pane fade in active" id="tab-login">

                                    <!-- Login Form -->
                                    <form action="#" class="modal-form">
                                        <h5>Login to your account</h5>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter your email address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Enter your password...">
                                        </div>
                                        <div class="form-group form-group--pass-reminder">
                                            <label class="checkbox checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox1" value="option1" checked> Remember Me
                                                <span class="checkbox-indicator"></span>
                                            </label>
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                        <div class="form-group form-group--submit">
                                            <a href="shop-account.html" class="btn btn-primary-inverse btn-block">Enter to your account</a>
                                        </div>
                                        <div class="modal-form--social">
                                            <h6>or Login with your social profile:</h6>
                                            <ul class="social-links social-links--btn text-center">
                                                <li class="social-links__item">
                                                    <a href="#" class="social-links__link social-links__link--lg social-links__link--fb"><i class="fa fa-facebook"></i></a>
                                                </li>
                                                <li class="social-links__item">
                                                    <a href="#" class="social-links__link social-links__link--lg social-links__link--twitter"><i class="fa fa-twitter"></i></a>
                                                </li>
                                                <li class="social-links__item">
                                                    <a href="#" class="social-links__link social-links__link--lg social-links__link--gplus"><i class="fa fa-google-plus"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </form>
                                    <!-- Login Form / End -->

                                </div>
                                <!-- Tab: Login / End -->

                                <!-- Tab: Register -->
                                <div role="tabpanel" class="tab-pane fade" id="tab-register">

                                    <!-- Register Form -->
                                    <form action="#" class="modal-form">
                                        <h5>Register Now!</h5>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter your email address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Enter your password...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Repeat your password...">
                                        </div>
                                        <div class="form-group form-group--submit">
                                            <a href="shop-account.html" class="btn btn-success btn-block">Create Your Account</a>
                                        </div>
                                        <div class="modal-form--note">You’ll receive a confirmation email in your inbox with a link to activate your account. </div>
                                    </form>
                                    <!-- Register Form / End -->

                                </div>
                                <!-- Tab: Register / End -->

                            </div>

                            <!-- Nav tabs -->
                            <div class="nav-tabs-login-wrapper">
                                <ul class="nav nav-tabs nav-justified nav-tabs--login" role="tablist">
                                    <li role="presentation" class="active"><a href="#tab-login" role="tab" data-toggle="tab">Login</a></li>
                                    <li role="presentation"><a href="#tab-register" role="tab" data-toggle="tab">Register</a></li>
                                </ul>
                            </div>
                            <!-- Nav tabs / End -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login/Register Tabs Modal / End -->


</div>

<!-- Javascript Files
================================================== -->
<!-- Core JS -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="assets/js/core-min.js"></script>

<!-- Vendor JS -->
<script src="assets/vendor/twitter/jquery.twitter.js"></script>


<!-- Template JS -->
<script src="assets/js/init.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>

<style>
    .btn-outline.btn-default:hover {
        background-color: #9a9da2;
        border-color: #9a9da2;
        color: #fff;
    }
    .card__header .card-header__button {
        float: right;
    }
    .btn-outline.btn-default {
        border-color: #dbdfe6;
        color: #9a9da2;
    }
    .btn-default:hover {
        color: #fff;
        background-color: #868a91;
        border-color: transparent;
    }
    .btn:hover, .btn:focus, .btn.focus {
        color: #fff;
    }

    .card__header--has-btn > h4 {
        display: inline-block;
        margin-bottom: 0;
    }
    .card__header--has-btn > h4 {
        margin-bottom: .5em;
    }
    .card__header > h4 {

        font-size: 18px;
        line-height: 1.2em;
        letter-spacing: -0.02em;
        margin-bottom: 0;
        text-transform: uppercase;
        font-style: normal;
    }
    h4 {
        font-size: 55px;
        text-transform: none;
        font-style: normal;
    }
    h1, h2, h3, h4, h5, h6 {
        color: #31404b;
        margin: 0 0 .75em 0;
        font-weight: 700;
        text-transform: uppercase;
        font-family: "Montserrat", sans-serif;
        letter-spacing: -0.02em;
    }
    .widget__title {
        background-color:blue;
        text-transform: uppercase;
    }
    .card__header--has-btn {
        padding-top: 24px;
        padding-bottom: 24px;
    }

    .card__header--has-btn {
        background-color:blue;
        padding-top: 24px;
        padding-bottom: 24px;
    }
    .card__header {
        color:red;
        padding: 24px 24px 10px 0px;
        border-radius: 4px 4px 0 0;
        position: relative;
        border-bottom: 1px solid #e4e7ed;
        overflow: hidden;
        background-color: transparent;
    }
    .sidebar{
        border:solid 1px;
        background-color: white;
        color: black;
        font-size: 15px;
        line-height: 26px;
        font-family: "Source Sans Pro", sans-serif;
        font-weight: 400;
    }


    .col-md-4 {
        width: 33.33333333%;
    }
    .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12 {
        float: left;
    }
    .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
        position: relative;
        min-height: 1px;
        padding-left: 8px;
        padding-right: 8px;
    }
    * {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    body {
        color: #9a9da2;
        font-size: 15px;
        line-height: 26px;
        font-family: "Source Sans Pro", sans-serif;
        font-weight: 400;
    }
    body {
        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 14px;
        line-height: 1.42857143;
        color: #333;
    }
    html {
        font-size: 10px;
    }
    html {
        font-family: sans-serif;
        -webkit-text-size-adjust: 100%;
    }



    .team-meta {
        text-align: left;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    .team-meta__place {
        display: block;
        font-size: 9px;
        line-height: 1.2em;
        font-family: "Montserrat", sans-serif;
        color: #9a9da2;
    }
    .widget__title {


        text-transform: uppercase;
    }

    .table > thead > tr > th, .table > thead > tr > td, .table > tbody > tr > th, .table > tbody > tr > td, .table > tfoot > tr > th, .table > tfoot > tr > td {
        padding: 13px 10px;
        font-size: 11px;
    }
    .table > thead > tr > th, .table > thead > tr > td, .table > tbody > tr > th, .table > tbody > tr > td, .table > tfoot > tr > th, .table > tfoot > tr > td {
        padding: 6.5px;
        vertical-align: top;
        border-top: 1px solid #e4e7ed;
        font-family: "Montserrat", sans-serif;
        font-size: 10px;
    }
    th {
        text-transform: uppercase;
    }
    th {
        text-align: left;
    }
    .widget--sidebar .widget__content {
        font-size: 14px;
        line-height: 22px;
    }
    body {
        color: #9a9da2;
        font-size: 15px;
        line-height: 26px;
        font-family: "Source Sans Pro", sans-serif;
        font-weight: 400;
    }
    .card__header .card-header__button {
        float: right;
    }

    a {
        color: #1892ed;
        text-decoration: none;
    }

</style>