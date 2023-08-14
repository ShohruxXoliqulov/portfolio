<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Shohrux</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/gijgo.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/css/slicknav.css">

    <link rel="stylesheet" href="/assets/css/style.css">
    <!-- <link rel="stylesheet" href="/assets/css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="{{ route('welcome') }}">
                                        <h1 style="color: #ff9933;"><b>Shohrux</b></h1>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ route('welcome') }}">home</a></li>
                                            <li><a href="{{ route('pages.get_works') }}">Works</a></li>
                                            <li><a href="{{ route('pages.get_services') }}">Services</a></li>
                                            <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                        <li><a href="{{ route('pages.get_works_details') }}">work details</a></li>
                                                        <!-- <li><a href="elements.html">elements</a></li> -->
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('pages.get_about') }}">about</a></li>
                                            <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="{{ route('pages.get_blog') }}">blog</a></li>
                                                    <li><a href="{{ route('pages.get_single_block') }}">single-blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('pages.get_contact') }}">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="Appointment">
                                    <div class="book_btn d-none d-lg-block">
                                        <a href="#">Let’s Talk</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    @yield('content')

     <!-- footer start -->
     <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="lets_talk">
                            <h3>Do you have any Project? <a href="#">Let’s Talk</a> </h3>
                            <p>Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget tincidunt tortor tempus.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="single_links d-flex justify-content-between align-items-center">
                            <span>Behance</span>
                            <a href="#"> <i class="fa fa-behance"></i> </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single_links d-flex justify-content-between align-items-center">
                            <span>Dribbble</span>
                            <a href="#"> <i class="fa fa-dribbble"></i> </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single_links d-flex justify-content-between align-items-center">
                            <span>Medium</span>
                            <a href="#"> <i class="fa fa-medium"></i> </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="single_links d-flex justify-content-between align-items-center">
                            <span>Linkedin</span>
                            <a href="#"> <i class="fa fa-linkedin"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->

    <!-- link that opens popup -->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script>
    <!-- JS here -->
    <script src="/assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/isotope.pkgd.min.js"></script>
    <script src="/assets/js/ajax-form.js"></script>
    <script src="/assets/js/waypoints.min.js"></script>
    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="/assets/js/scrollIt.js"></script>
    <script src="/assets/js/jquery.scrollUp.min.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/nice-select.min.js"></script>
    <script src="/assets/js/jquery.slicknav.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/plugins.js"></script>
    <!-- <script src="/assets/js/gijgo.min.js"></script> -->
    <script src="/assets/js/slick.min.js"></script>



    <!--contact js-->
    <script src="/assets/js/contact.js"></script>
    <script src="/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="/assets/js/jquery.form.js"></script>
    <script src="/assets/js/jquery.validate.min.js"></script>
    <script src="/assets/js/mail-script.js"></script>


    <script src="/assets/js/main.js"></script>
</body>

</html>