@extends('frontend.layout')
@section('home_content')

    <!--! Breadcrumb Section Start -->
    <section class="breadcrumb_section_area" style="background-image: url('{{asset('frontend/image/title_bg.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb_section_content">
                        <h1>Our Team</h1>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa-solid fa-angle-right"></i></li>
                            <li>Our Team</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
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
            <div class="row">
                @foreach($teamMember as $data)
                <div class="col-12 col-md-4 col-lg-3 text-center">
                    <div class="meet_the_team_single">
                        <div class="meet_the_team_image one_image">
                            <img src="{{'storage/'.$data->image}}" class="img-fluid" alt="Andrew Parker">
                            <ul class="team_social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="meet_the_team_content team_one">
                            @if (session('locale') == 'en')
                                <h6><a href="{{route('single.team')}}">{{$data->name_english}}</a></h6>
                            @elseif (session('locale') == 'ar' || !session()->has('locale'))
                                <h6><a href="{{route('single.team')}}">{{$data->name_arabic}}</a></h6>
                            @endif


                            @if (session('locale') == 'en')
                            <p>{{$data->designation_english}}</p>
                                @elseif (session('locale') == 'ar' || !session()->has('locale'))
                            <p>{{$data->designation_arabic}}</p>
                            @endif


                        </div>
                    </div>
                </div>
                @endforeach




            </div>
        </div>
    </section>
    <!-- Meet The Team End -->
@endsection
