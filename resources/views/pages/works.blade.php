@extends('layouts.main')
@section('content')

         <!-- bradcam_area  -->
         <div class="bradcam_area bradcam_bg_1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="bradcam_text text-center">
                                <h3>Works</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ bradcam_area  -->
    <!-- gallery_area start  -->
    @include('sections.workssec')
    <!-- gallery_area end  -->

        <!-- testimonial_area  -->
        @include('sections.clients')
        <!-- /testimonial_area  -->
    

    @endsection