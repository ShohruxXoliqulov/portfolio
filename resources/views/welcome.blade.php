@extends('layouts.main')
@section('content')
    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <div class="col-lg-9">
                        <div class="slider_text">
                            <h3>Hi there, I am Jony <br>
                                <span>Creative Director</span></h3>
                        <a class="boxed-btn3-line" href="#">View Works</a>
                        </div>
                    </div>
                    <div class="my_img d-none d-lg-block">
                        <img src="/assets/img/about/my_img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

   @include('sections.resume')

    <!-- service_area start  -->
    <div class="service_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-50">
                        <h3>My Services</h3>
                    </div>
                </div>
            </div>
            @include('sections.servicessec')
        </div>
    </div>
    <!-- service_area end  -->

    <!-- gallery_area start  -->
    <div class="gallery_area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title mb-50">
                        <h3>My Works</h3>
                    </div>
                </div>
            </div>
            @include('sections.workssec')
        </div>
    </div>
    <!-- gallery_area end  -->

        <!-- testimonial_area  -->
        @include('sections.clients')
        <!-- /testimonial_area  -->
    
@endsection
   