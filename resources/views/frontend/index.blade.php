@extends('frontend.layout')
@section('home_content')
    <!--! Hero Slider Section  -->
    <section class="hero_slider_section_area" style="background-image: url('{{asset('frontend/image/slide1.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-2 col-lg-4"></div>
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="hero_slider_content text-end">
                        <h3>Printing</h3>
                        <h2>Let Us Help<br>You With All Of Your <br>3D - Printing Needs</h2>
                        <a href="#" class="octoboa_btn">Order Online</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--! Category Section Start -->
    <section class="category_section_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-2 p-0">
                    <div class="category_item one text-center octoboa_border_right">
                        <img src="{{URL::to('frontend/image/icon/icon1.png')}}" alt="Prototypes">
                        <h2>Prototypes</h2>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2 p-0">
                    <div class="category_item tow text-center octoboa_border_right">
                        <img src="{{URL::to('frontend/image/icon/icon2.png')}}" alt="Maquettes">
                        <h2>Maquettes</h2>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2 p-0">
                    <div class="category_item three text-center octoboa_border_right">
                        <img src="{{URL::to('frontend/image/icon/icon3.png')}}" alt="Sculptures">
                        <h2>Sculptures</h2>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2 p-0">
                    <div class="category_item one text-center octoboa_border_right">
                        <img src="{{URL::to('frontend/image/icon/icon4.png')}}" alt="Finery">
                        <h2>Finery</h2>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2 p-0">
                    <div class="category_item tow text-center octoboa_border_right">
                        <img src="{{URL::to('frontend/image/icon/icon5.png')}}" alt="Souvenirs">
                        <h2>Souvenirs</h2>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2 p-0">
                    <div class="category_item three text-center">
                        <img src="{{URL::to('frontend/image/icon/icon6.png')}}" alt="Replicas">
                        <h2>Replicas</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Section End -->
    <!--! 3D-Printing Innovational Center Start -->
    <section class="threeD_printing_innovation_center_area section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 p-0">
                    <div class="threeD_image_content_wrapper">
                        <div class="threeD_printing_image_content">
                            <img src="{{URL::to('frontend/image/about-3D-copyright.jpg')}}" class="img-fluid" alt="about-3D-copyright">
                            <div class="row m-0">
                                <div class="col-2 p-0 one"></div>
                                <div class="col-2 p-0 tow"></div>
                                <div class="col-2 p-0 three"></div>
                                <div class="col-2 p-0 one"></div>
                                <div class="col-2 p-0 tow"></div>
                                <div class="col-2 p-0 three"></div>
                            </div>
                        </div>
                        <iframe src="https://maps.google.com/maps?t=m&amp;output=embed&amp;iwloc=near&amp;z=16&amp;q=London+Eye%2C+London%2C+United+Kingdom" scrolling="no" marginheight="0" marginwidth="0" frameborder="0" aria-label="One" class="alpha_color_resize"></iframe>
                    </div>
                </div>
                <div class="col-12 col-md-6 p-0">
                    <div class="threeD_content_wrapper">
                        <h6>Welcome</h6>
                        <h2>3D-Printing Innovational Center</h2>
                        <p>Transform your project (idea?) into a finished piece. We can print and design just about anything from signs and banners to brochures, promotional products and forms, with options of variable data printing, web-to-print and customized online ordering.</p>
                        <div class="threeD_btn_wrap">
                            <a href="about-us.html" class="octoboa_btn">About Us</a>
                            <a href="contact-us.html" class="find_a_location">
                                <i class="fa-solid fa-location-arrow"></i>
                                Find A Location
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 3D-Printing Innovational Center End -->
    <!--! 3D-models? Need Quick Prints? Start -->
    <section class="threeD_model_section_area section_padding section_bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-5">
                    <div class="threeD_model_content_wrap">
                        <h2>3D-models? Need Quick Prints?</h2>
                        <p>We got you covered with all your printing needs. Select from our comprehensive list of printing options for your B&W and color copies which best describe your finished product:</p>
                        <div class="threeD_model_service_wrap">
                            <div class="threeD_model_service_item">
                                <a href="our-services.html">
                                    Printed in full-color
                                    <i class="fa-solid fa-angle-left"></i>
                                </a>
                                <a href="our-services.html">
                                    Variety of paper sizes
                                    <i class="fa-solid fa-angle-left"></i>
                                </a>
                            </div>
                            <div class="threeD_model_service_item">
                                <a href="our-services.html">
                                    Double-sided
                                    <i class="fa-solid fa-angle-left"></i>
                                </a>
                                <a href="our-services.html">
                                    Optional finishing
                                    <i class="fa-solid fa-angle-left"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-7">
                    <div class="threeD_model_image_wrap text-center">
                        <img src="{{URL::to('frontend/image/3d-1-copyright.png')}}" class="img-fluid" alt="3d-1-copyright">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 3D-models? Need Quick Prints? End -->
    <!--! Our experts will help you Start -->
    <section class="our_experts_help_section_area section_padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="our_experts_help_image_content text-center">
                        <img src="{{URL::to('frontend/image/3d-2-copyright.png')}}" class="img-fluid" alt="3d-2-copyright">
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="our_experts_help_content">
                        <h2>Don't know which material to choose? Our experts will help you</h2>
                        <p>We offer top class designs — at affordable prices and fast turnarounds. From flyers and business cards to folded pamphlets, brochures and lot more! <br>We design it all.</p>
                        <a href="shop.html" class="octoboa_btn our_experts_help_btn">More Information</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our experts will help you End -->
    <!--! Testimonials Section Start -->
    <section class="testimonials_section_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 p-0">
                    <div class="testimonials_content">
                        <h6>Testimonials</h6>
                        <h2>What Our <br>Customers Say</h2>
                        <!-- Testimonials Slider -->
                        <div id="testominialsSlider" class="owl-carousel owl-theme">
                            <div class="testimonial_item">
                                <p>“Alpha Color has consistently demonstrated the ability to provide quality work at a competitive price. We can always rely on them to have our printing completed on time.”</p>
                                <h3>Alison Down</h3>
                            </div>
                            <div class="testimonial_item">
                                <p>“Alpha Color did an incredible job in creating our new marketing & sales pieces. Their prices are very competitive, and their quality is excellent.”</p>
                                <h3>Jessica Brown</h3>
                            </div>
                            <div class="testimonial_item">
                                <p>“Thank you for the excellent service on the brochure reprints and the new display posters. I really appreciate your fine quality, speed and low price.”</p>
                                <h3>Mark Foster</h3>
                            </div>
                        </div>
                        <!-- Custom Navigation -->
                        <div class="customNavigation">
                            <div class="prev">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                                    <polyline points="15 18 9 12 15 6"></polyline>
                                </svg>
                            </div>
                            <div class="next">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                    <polyline points="9 18 15 12 9 6"></polyline>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 p-0 testimonials_right_bg_image" style="background-image: url('{{(asset('frontend/image/3d-3-copyright.jpg'))}}');">
                    <div class="right_image_height"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section End -->
    <!--! Our services Start -->
    <section class="our_service_section_wrapper section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section_heading">
                        <h6>What we offer</h6>
                        <h2>Our services</h2>
                        <p>Your presentations, flyers and posters speak for you wherever they go and color makes you look like a pro. <br>It brings your ideas to life and underscores the quality of your products or services.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="our_service_item">
                        <a href="{{route('printing')}}" class="service_image_box">
                            <img src="{{asset('frontend/image/3d-product-2-copyright.jpg')}}" class="img-fluid" alt="3d-product-2-copyright">
                            <div class="hover_icons">
                                <div class="icon_style">
                                    <div class="icons">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="service_content_box">
                            <a href="{{route('printing')}}">
                                <h2>3D Printing</h2>
                            </a>
                            <p>Starting at $75.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="our_service_item">
                        <a href="{{route('printing')}}" class="service_image_box">
                            <img src="{{asset('frontend/image/3d-product-3-copyright.jpg')}}" class="img-fluid" alt="3d-product-2-copyright">
                            <div class="hover_icons">
                                <div class="icon_style">
                                    <div class="icons">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="service_content_box">
                            <a href="{{route('printing')}}">
                                <h2>3D Modeling</h2>
                            </a>
                            <p>Starting at $25.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="our_service_item">
                        <a href="{{route('printing')}}" class="service_image_box">
                            <img src="{{asset('frontend/image/3d-product-1-copyright.jpg')}}" class="img-fluid" alt="3d-product-2-copyright">
                            <div class="hover_icons">
                                <div class="icon_style">
                                    <div class="icons">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="service_content_box">
                            <a href="{{route('printing')}}">
                                <h2>3D Scanning</h2>
                            </a>
                            <p>Starting at $25.00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <a href="shop.html" class="octoboa_btn our_service_btn">Show More</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Our services End -->
    <!--! Product Thumbnail Slider Start -->
    <section class="product_thumbnail_slider_wrapper">
        <div class="container-fluid">

        </div>
    </section>
    <!-- Product Thumbnail Slider End -->
    <!--! FAQ Start -->
    <section class="threeD_printing_innovation_center_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section_heading faq_section_heading">
                        <h6>FAQ</h6>
                        <h2>3D-Printing Services Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-12 col-md-6 p-0">
                    <div class="threeD_image_content_wrapper">
                        <div class="threeD_printing_image_content">
                            <img src="{{asset('frontend/image/3d-4-copyright-scaled.jpg')}}" class="img-fluid" alt="3d-4-copyright-scaled">
                            <div class="row m-0">
                                <div class="col-2 p-0 one"></div>
                                <div class="col-2 p-0 tow"></div>
                                <div class="col-2 p-0 three"></div>
                                <div class="col-2 p-0 one"></div>
                                <div class="col-2 p-0 tow"></div>
                                <div class="col-2 p-0 three"></div>
                            </div>
                        </div>
                        <div class="video_image_section">
                            <img src="{{asset('frontend/image/3d-5-copyright.jpg')}}" class="img-fluid" alt="3d-5-copyright">
                            <div class="video_image_section_overlay">
                                <a href="#" class="video_play_btn">
                                    <i class="fa-solid fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 p-0">
                    <div class="threeD_content_wrapper faq_content_design">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        What is 3D-printing services?
                                        <i class="fa-solid fa-angle-left"></i>
                                    </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam sequi, cupiditate voluptas unde magni quaerat voluptate reprehenderit eum tempore est!
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        How can I get my print job once it is finished?
                                        <i class="fa-solid fa-angle-left"></i>
                                    </button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id omnis facere nobis maiores sapiente vel expedita eligendi dolorem veritatis at?
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Can I get a price quote for my print job?
                                        <i class="fa-solid fa-angle-left"></i>
                                    </button>
                                </div>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id omnis facere nobis maiores sapiente vel expedita eligendi dolorem veritatis at?
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingFive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Can you design or help me design my print job?
                                        <i class="fa-solid fa-angle-left"></i>
                                    </button>
                                </div>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id omnis facere nobis maiores sapiente vel expedita eligendi dolorem veritatis at?
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingSix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Can you scan my hardcopy originals into electronic form?
                                        <i class="fa-solid fa-angle-left"></i>
                                    </button>
                                </div>
                                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id omnis facere nobis maiores sapiente vel expedita eligendi dolorem veritatis at?
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="blog.html" class="octoboa_btn faq_btn">View All</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ End -->
@endsection
