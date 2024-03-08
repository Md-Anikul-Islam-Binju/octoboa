@extends('frontend.layout')
@section('home_content')

    <!--! Breadcrumb Section Start -->
    <section class="breadcrumb_section_area" style="background-image: url('{{asset('frontend/image/title_bg.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb_section_content">
                        <h1>Our Services</h1>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa-solid fa-angle-right"></i></li>
                            <li>Our Services</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!--! What we offer section area start -->
    <section class="what_we_offer_section_area section_padding section_bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="what_we_offer_content">
                        <h6>Our Services</h6>
                        <h2>What We Offer</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget turpis quis dui egestas laoreet. Morbi blandit ornare mi, vitae fermentum felis tincidunt consectetur. Vestibulum eu velit sit amet justo tempor bibendum.</p>
                        <a href="#" class="octoboa_btn what_we_btn">Order Online</a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-7">
                    <div class="what_we_offer_slider_wrap">
                        <div class="owl-slider">
                            <div id="whatWeOfferSlider" class="owl-carousel">
                                <div class="what_we_offer_slider_item">
                                    <img src="{{URL::to('frontend/image/what-we-offer-1.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="what_we_offer_slider_item">
                                    <img src="{{URL::to('frontend/image/what-we-offer-2.jpg')}}" class="img-fluid" alt="">
                                </div>
                                <div class="what_we_offer_slider_item">
                                    <img src="{{URL::to('frontend/image/what-we-offer-3.jpg')}}" class="img-fluid" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What we offer section area end -->
    <!--! Service Item Section  -->
    <section class="service_item_section_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service_item_wrap">
                        <div class="service_item_icon">
                            <img src="{{URL::to('frontend/image/serv1.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="service_item_content">
                            <h4>
                                <a href="printing-services.html">Printing Services</a>
                            </h4>
                            <p>Transform your project into a finished piece. We can print and design just about anything from signs and banners to brochures, promotional products and forms.</p>
                            <a href="printing-services.html" class="service_btn_style">
                                Learn More
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service_item_wrap">
                        <div class="service_item_icon">
                            <img src="{{URL::to('frontend/image/serv2.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="service_item_content">
                            <h4>
                                <a href="printing-services.html">Copying Services</a>
                            </h4>
                            <p>Transform your project into a finished piece. We can print and design just about anything from signs and banners to brochures, promotional products and forms.</p>
                            <a href="printing-services.html" class="service_btn_style">
                                Learn More
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="service_item_wrap">
                        <div class="service_item_icon">
                            <img src="{{URL::to('frontend/image/serv3.jpg')}}" class="img-fluid" alt="">
                        </div>
                        <div class="service_item_content">
                            <h4>
                                <a href="printing-services.html">Outdoor Printing</a>
                            </h4>
                            <p>Transform your project into a finished piece. We can print and design just about anything from signs and banners to brochures, promotional products and forms.</p>
                            <a href="printing-services.html" class="service_btn_style">
                                Learn More
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
