<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cleanify</title>
    <link rel="icon" href="<?= base_url('assets/'); ?>img/heading-img.png">
    <!-- CSS only -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/slick.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/slick-theme.css">
    <!-- nice-select -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/nice-select.css">
    <!-- fancybox -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/aos.css">
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/fontawesome.min.css">
    <!-- style -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/responsive.css">
    <!-- color -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/color.css">

    <!-- JavaScript with dynamic base URL -->
    <script>
        var baseUrl = '<?= base_url(); ?>';
    </script>
</head>

<body>

    <body>
        <!-- preloader -->
        <div class="preloader">
            <div class="loader-6">
                <div class="set-one">
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>
                <div class="set-two">
                    <div class="circle"></div>
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <!-- preloader end -->
        <header>
            <div class="top-bar">
                <div class="container">
                    <div class="top-bar-slid">
                        <div>
                            <div class="phone-data">
                                <div class="phone d-flax align-items-center">
                                    <i>
                                        <svg height="112" viewBox="0 0 24 24" width="112" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-rule="evenodd" fill="rgb(255255,255)" fill-rule="evenodd">
                                                <path d="m7 2.75c-.41421 0-.75.33579-.75.75v17c0 .4142.33579.75.75.75h10c.4142 0 .75-.3358.75-.75v-17c0-.41421-.3358-.75-.75-.75zm-2.25.75c0-1.24264 1.00736-2.25 2.25-2.25h10c1.2426 0 2.25 1.00736 2.25 2.25v17c0 1.2426-1.0074 2.25-2.25 2.25h-10c-1.24264 0-2.25-1.0074-2.25-2.25z"></path>
                                                <path d="m10.25 5c0-.41421.3358-.75.75-.75h2c.4142 0 .75.33579.75.75s-.3358.75-.75.75h-2c-.4142 0-.75-.33579-.75-.75z"></path>
                                                <path d="m9.25 19c0-.4142.33579-.75.75-.75h4c.4142 0 .75.3358.75.75s-.3358.75-.75.75h-4c-.41421 0-.75-.3358-.75-.75z"></path>
                                            </g>
                                        </svg>
                                    </i>
                                    <span>Phone:</span><a class="me-3" href="callto:800-836-4620">+62 123 123 123</a>
                                </div>
                                <div class="phone">
                                    <i>
                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                            <path d="M0,81v350h512V81H0z M456.952,111L256,286.104L55.047,111H456.952z M30,128.967l134.031,116.789L30,379.787V128.967z
                   M51.213,401l135.489-135.489L256,325.896l69.298-60.384L460.787,401H51.213z M482,379.788L347.969,245.756L482,128.967V379.788z"></path>
                                        </svg>
                                    </i>
                                    <span>Email:</span>Cleanify@gmail.com</span></a>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="time">
                                <div class="login">
                                    <i class="fa-solid fa-user"></i>
                                    <a href="auth">Login Untuk Staff</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="bottom-bar">
                    <a href="#"><img src="<?= base_url('assets/'); ?>img/logo-b.png" alt="logo"></a>
                    <nav class="navbar">
                        <ul class="navbar-links">
                            <li class="navbar-dropdown has-children">
                                <a href="cleaning">home</a>
                            </li>
                            <li class="navbar-dropdown">
                                <a href="#about-section">About</a>
                            </li>

                            <li class="navbar-dropdown has-children">
                                <a href="#service-section">Cara Kerja</a>
                            </li>

                            <li class="navbar-dropdown">
                                <a href="#harga-section">Harga</a>
                            </li>
                            <li class="navbar-dropdown">
                                <a href="#testimoni-section">Testimoni</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="pickup">
                        <div class="extras">
                            <a href="javascript:void(0)" id="show">

                                </svg>
                            </a>
                        </div>
                        <a href="javascript:void(0)" class="lightbox-toggle sec-btn">Order</a>
                    </div>
                    <div class="bar-menu">
                        <i class="fa-solid fa-bars"></i>
                    </div>
                </div>
            </div>
            <div class="mobile-nav hmburger-menu" id="mobile-nav" style="display:block;">
                <div class="res-log">
                    <a href="index.html">
                        <img src="<?= base_url('assets/'); ?>img/logo.png" alt="Responsive Logo">
                    </a>
                </div>
                <ul>

                    <li class="menu-item-has-children"><a href="JavaScript:void(0)">Home</a>
                    </li>
                    <li class="navbar-dropdown">
                        <a href="#about-section">About</a>
                    </li>



                    <li class="menu-item-has-children"><a href="JavaScript:void(0)">Services</a>

                        <ul class="sub-menu">

                            <li><a href="services.html">Services</a></li>
                            <li><a href="services-details.html">services details</a></li>

                        </ul>

                    </li>
                    <li class="menu-item-has-children"><a href="JavaScript:void(0)">pages</a>

                        <ul class="sub-menu">

                            <li><a href="team-details.html">team details</a></li>
                            <li><a href="pricing-plan.html">pricing plan</a></li>
                            <li><a href="faq.html">faq</a></li>
                            <li><a href="404-error.html">404 error</a></li>
                        </ul>

                    </li>
                    <li class="menu-item-has-children"><a href="JavaScript:void(0)">News</a>

                        <ul class="sub-menu">
                            <li><a href="our-blog.html">our blog</a></li>
                            <li><a href="blog-details.html">blog details</a></li>

                        </ul>

                    </li>

                    <li><a href="contact.html">contacts</a></li>

                </ul>

                <a href="JavaScript:void(0)" id="res-cross"></a>

                <ul class="social-media">
                    <li><a href="#" class="f"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#" class="t"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#" class="in"><i class="fa-brands fa-linkedin-in"></i></a></li>
                </ul>
            </div>
        </header>