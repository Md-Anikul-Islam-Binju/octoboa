@extends('frontend.layout')
@section('home_content')

    <!--! Breadcrumb Section Start -->
    <section class="breadcrumb_section_area" style="background-image: url('{{asset('frontend/image/title_bg.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb_section_content">
                        <h1>Andrew Parker</h1>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa-solid fa-angle-right"></i></li>
                            <li><a href="team.html">Team</a></li>
                            <li><i class="fa-solid fa-angle-right"></i></li>
                            <li>Andrew Parker</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!--! Single Team Details Section Start  -->
    <section class="single_team_details_section_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="single_team_details_image">
                        <img src="{{URL::to('frontend/image/team-3.jpg')}}" alt="Team Image">
                        <div class="single_team_details_social">
                            <ul class="d-flex align-items-center justify-content-center gap-4 my-4">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="single_team_details_content">
                        <h3>General Manager</h3>
                        <p>E-mail:
                            <a href="mailto:andrew_parker@example.com">andrew_parker@example.com</a>
                        </p>
                        <h2>Brief info</h2>
                        <p>Non sed vel volutpat, neque viverra eget. Aenean amet, rutrum mauris libero ligula. Ac amet, in sollicitudin justo purus, nullam varius nulla arcu ultricies eu, sem erat sagittis at libero eu nunc.Turpis at sit urna non earum faucibus, a morbi lectus, fringilla elit vel morbi tellus, pede sem eros sapien vel mi, interdum molestiae cursus ante vivamus. Mauris proin lacus, eget sit iure porta, bibendum arcu libero ipsum vehicula mauris condimentum, sagittis sagittis, maecenas at quis.</p>
                        <p>Diam placerat tincidunt in pellentesque pede, ultricies molestie ut, et amet sociosqu dis diam, consequat faucibus semper omnis habitasse quis dui, tempor proin donec. Commodo molestie ac ut suspendisse donec est, euismod nulla egestas, purus magna vel. Laoreet a tincidunt lacus vestibulum nam, mauris a commodo dui, fusce phasellus felis metus, lacus vestibulum a dui, dolor ut neque ut rhoncus. Ac nec, wisi in nulla, eu mi rhoncus et. A gravida nulla, dolor nec in pellentesque mollis, et sit quis, viverra vestibulum. Eu a sed, rutrum vestibulum a, mi mauris assumenda eros accumsan. Turpis at sit urna non earum faucibus, a morbi lectus, fringilla elit vel morbi tellus, pede sem eros sapien vel mi, interdum molestiae cursus ante vivamus. Mauris proin lacus, eget sit iure porta, bibendum arcu libero ipsum vehicula mauris condimentum, sagittis sagittis, maecenas at quis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
