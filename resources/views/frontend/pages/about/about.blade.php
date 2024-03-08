@extends('frontend.layout')
@section('home_content')
<!--! Breadcrumb Section Start -->
<section class="breadcrumb_section_area" style="background-image: url('{{asset('frontend/image/title_bg.jpg')}}');">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb_section_content">
                    <h1>About Us</h1>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa-solid fa-angle-right"></i></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<!--! About Octoboa Start -->
<section class="about_octoboa_section_area section_padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="about_octoboa_image">
                    <img src="{{URL::to('frontend/image/about-image.jpg')}}" class="img-fluid" alt="About">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="about_octoboa_content">
                    <h6>About Octoboa</h6>
                    <h2>Best Printing Services in <span>Saudi Arabia</span></h2>
                    <p>Alpha Color provides a range of timely, high-quality and cost-effective printing and document services using environmentally friendly materials. Our specialist staff can advise you on all your printing needs, from design to the finished product.</p>
                    <p>To grow your business you need to promote your business. We can print and produce a wide variety of marketing materials with professional results. Whatever size project you have to tackle, you can count on our experts every step of the way.</p>
                    <a href="contact-us.html" class="octoboa_btn about_btn">Get in Touch</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Octoboa End -->
<!--! Meet The Team Start -->
<section class="meet_the_team_section_area section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7">
                <div class="section_heading text-center">
                    <h6>Our Professionals</h6>
                    <h2>Meet The Team</h2>
                    <p>The Octoboa team is here to help you with all your printing and copying needs. We offer a complete suite of printing services with quick turnaround times and delivery..</p>
                </div>
            </div>
        </div>
        <div class="row team_row_wrap">
            <div class="col-12 col-md-4 text-center">
                <div class="meet_the_team_single">
                    <div class="meet_the_team_image one_image">
                        <img src="{{URL::to('frontend/image/team-3.jpg')}}" class="img-fluid" alt="Andrew Parker">
                        <ul class="team_social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="meet_the_team_content team_one">
                        <h6><a href="single-team.html">Andrew Parker</a></h6>
                        <p>General Manager</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center">
                <div class="meet_the_team_single">
                    <div class="meet_the_team_image two_image">
                        <img src="{{URL::to('frontend/image/team-2.jpg')}}" class="img-fluid" alt="Andrew Parker">
                        <ul class="team_social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="meet_the_team_content team_two">
                        <h6><a href="single-team.html">Melissa Foucher</a></h6>
                        <p>Graphic Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 text-center">
                <div class="meet_the_team_single">
                    <div class="meet_the_team_image three_image">
                        <img src="{{URL::to('frontend/image/team-1.jpg')}}" class="img-fluid" alt="Andrew Parker">
                        <ul class="team_social">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="meet_the_team_content team_three">
                        <h6><a href="single-team.html">John Doe</a></h6>
                        <p>Print Supervisor</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <a href="team.html" class="octoboa_btn team_btn">View More</a>
            </div>
        </div>
    </div>
</section>
<!-- Meet The Team End -->
@endsection
