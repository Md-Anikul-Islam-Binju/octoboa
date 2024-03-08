@extends('frontend.layout')
@section('home_content')

    <!--! Breadcrumb Section Start -->
    <section class="breadcrumb_section_area" style="background-image: url('{{asset('frontend/image/title_bg.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb_section_content">
                        <h1>Portfolio</h1>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa-solid fa-angle-right"></i></li>
                            <li>Portfolio</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!--! Portfolio Gallery Section -->
    <section class="portfolio_gallery_section_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="portfolio_gallery_wrap">
                        <div class="portfolio_gallery_img">
                            <img src="{{URL::to('frontend/image/gallery1.jpg')}}" class="img-fluid" alt="portfolio">
                        </div>
                        <div class="portfolio_gallery_overlay">
                            <div class="d-flex gap-4">
                                <a href="{{URL::to('frontend/image/gallery1.jpg')}}" data-fancybox="portfolio-gallery">
                                    <i class="fa-solid fa-search"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                            <h3>Print design trends in 2017</h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="portfolio_gallery_wrap">
                        <div class="portfolio_gallery_img">
                            <img src="{{URL::to('frontend/image/gallery1.jpg')}}" class="img-fluid" alt="portfolio">
                        </div>
                        <div class="portfolio_gallery_overlay">
                            <div class="d-flex gap-4">
                                <a href="{{URL::to('frontend/image/gallery1.jpg')}}" data-fancybox="portfolio-gallery">
                                    <i class="fa-solid fa-search"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                            <h3>Print design trends in 2017</h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="portfolio_gallery_wrap">
                        <div class="portfolio_gallery_img">
                            <img src="{{URL::to('frontend/image/gallery1.jpg')}}" class="img-fluid" alt="portfolio">
                        </div>
                        <div class="portfolio_gallery_overlay">
                            <div class="d-flex gap-4">
                                <a href="{{URL::to('frontend/image/gallery1.jpg')}}" data-fancybox="portfolio-gallery">
                                    <i class="fa-solid fa-search"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                            <h3>Print design trends in 2017</h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="portfolio_gallery_wrap">
                        <div class="portfolio_gallery_img">
                            <img src="{{URL::to('frontend/image/gallery1.jpg')}}" class="img-fluid" alt="portfolio">
                        </div>
                        <div class="portfolio_gallery_overlay">
                            <div class="d-flex gap-4">
                                <a href="{{URL::to('frontend/image/gallery1.jpg')}}" data-fancybox="portfolio-gallery">
                                    <i class="fa-solid fa-search"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                            <h3>Print design trends in 2017</h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="portfolio_gallery_wrap">
                        <div class="portfolio_gallery_img">
                            <img src="{{URL::to('frontend/image/gallery1.jpg')}}" class="img-fluid" alt="portfolio">
                        </div>
                        <div class="portfolio_gallery_overlay">
                            <div class="d-flex gap-4">
                                <a href="{{URL::to('frontend/image/gallery1.jpg')}}" data-fancybox="portfolio-gallery">
                                    <i class="fa-solid fa-search"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                            <h3>Print design trends in 2017</h3>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="portfolio_gallery_wrap">
                        <div class="portfolio_gallery_img">
                            <img src="{{URL::to('frontend/image/gallery1.jpg')}}" class="img-fluid" alt="portfolio">
                        </div>
                        <div class="portfolio_gallery_overlay">
                            <div class="d-flex gap-4">
                                <a href="{{URL::to('frontend/image/gallery1.jpg')}}" data-fancybox="portfolio-gallery">
                                    <i class="fa-solid fa-search"></i>
                                </a>
                                <a href="#">
                                    <i class="fa-solid fa-link"></i>
                                </a>
                            </div>
                            <h3>Print design trends in 2017</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
