@extends('layouts.main')   
@section('content')

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center position-relative">
                    <div class="col-lg-12">
                        <div class="slider_text text-center about_slide">
                            <h3>Hi there, I am Jony <br>
                                    Creative director based  <br>
                                    on New York</h3>
                        <a class="boxed-btn3-line" href="#">View Works</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    @include('sections.resume')

        <!-- testimonial_area  -->
        @include('sections.clients')
        <!-- /testimonial_area  -->
@endsection    