@extends('frontend.layout')
@section('home_content')
    <!--! Breadcrumb Section Start -->
    <section class="breadcrumb_section_area" style="background-image: url('{{asset('frontend/image/title_bg.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb_section_content">
                        <h1>Printing Services</h1>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa-solid fa-angle-right"></i></li>
                            <li><a href="our-services.html">Our Services</a></li>
                            <li><i class="fa-solid fa-angle-right"></i></li>
                            <li>Printing Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!--! Single Service Details Section Start -->
    <section class="single_service_details_section_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4 col-lg-3">
                    <div class="single_service_page_service_list">
                        <h2>Services</h2>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-angle-right"></i>
                                    3D Printing
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-angle-right"></i>
                                    3D Printing
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-solid fa-angle-right"></i>
                                    3D Printing
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-9">
                    <div class="single_service_details_wrap">
                        <img src="{{URL::to('frontend/image/single-service.jpg')}}" class="img-fluid" alt="">
                        <div class="single_service_content">
                            <h2>Creative, flexible and efficient digital color printing services</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla tincidunt tincidunt nunc sed vestibulum. Suspendisse tempus, ipsum varius suscipit laoreet, tellus ex scelerisque nibh, at ultrices dui diam eu urna. Nam nec cursus velit. Praesent a sem nunc. Ut sit amet velit sed sem sodales cursus quis at nibh.</p>
                            <p>Praesent porttitor dapibus lacus vitae placerat. Pellentesque finibus arcu eget volutpat vestibulum. Fusce et sagittis nibh, non tempor ante. Proin eget mollis nibh. Phasellus urna dui, pulvinar et ullamcorper vel, varius id nibh.</p>
                            <p>We provide the following printed services:</p>
                            <ul>
                                <li>Business Cards</li>
                                <li>Business Cards</li>
                                <li>Business Cards</li>
                                <li><a href="#">Business Cards</a></li>
                                <li>Business Cards</li>
                                <li>Business Cards</li>
                                <li>Business Cards</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
