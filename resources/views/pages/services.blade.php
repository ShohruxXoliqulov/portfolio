@extends('layouts.main')
@section('content')

         <!-- bradcam_area  -->
         <div class="bradcam_area bradcam_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h3>My Services</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ bradcam_area  -->

    <!-- service_area start  -->
    
    <div class="service_area colord_bg">
        <div class="container">
            @include('sections.servicessec')
        </div>
    </div>
    
    <!-- service_area end  -->

    <div class="service_products">

        <div class="container">
            <div class="service_wrap">
                <div class="row align-items-center">
                    <div class="col-md-6 col-lg-5">
                        <div class="thumb">
                            <img src="/assets/img/service/1.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="service_text padding_left">
                            <h3>Product Packaging </h3>
                            <p>Proin laoreet elementum ligula, ac tincidunt lorem accumsan nec. Fusce eget urna ante.
                                Donec massa velit, varius a accumsan ac, tempor iaculis massa. Sed placerat justo sed
                                libero varius vulputate. Ut a mi tempus massa </p>
                            <p>Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras
                                pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget </p>
                            <a href="works_details.html" class="boxed-btn3-line">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service_wrap">
                <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                                <div class="service_text ">
                                    <h3>Mockup Design</h3>
                                    <p>Proin laoreet elementum ligula, ac tincidunt lorem accumsan nec. Fusce eget urna ante.
                                        Donec massa velit, varius a accumsan ac, tempor iaculis massa. Sed placerat justo sed
                                        libero varius vulputate. Ut a mi tempus massa </p>
                                    <p>Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras
                                        pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget </p>
                                    <a href="works_details.html" class="boxed-btn3-line">View Project</a>
                                </div>
                            </div>
                    <div class="col-md-6 col-lg-6">
                        <div class="thumb padding_left">
                            <img src="/assets/img/service/2.png" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

        <!-- testimonial_area  -->
        @include('sections.clients')
        <!-- /testimonial_area  -->
    

    @endsection