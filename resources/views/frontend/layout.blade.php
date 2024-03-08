
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Octoboa - 3D Printing & Modeling Business</title>
    <!--! Favicon -->
    <link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/x-icon">
    <!--! Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/plugin/bootstrap/bootstrap.min.css')}}">
    <!--! Fontawesome CSS -->
    <script src="{{asset('frontend/plugin/fontawesome/fontawesome.js')}}"></script>
    <!--! Owl Carousel -->
    <link rel="stylesheet" href="{{asset('frontend/plugin/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/plugin/owl-carousel/owl.theme.default.min.css')}}">
    <!--! Main CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <!--! All Component Loaded -->
    <script src="{{asset('frontend/components/header.js')}}"></script>
    <script src="{{asset('frontend/components/footer.js')}}"></script>
    <script src="{{asset('frontend/components/scroll-to-top.js')}}"></script>
</head>
<body>
<!--! Header -->
<header class="octoboa_header_wrapper">
    <div>
        <a href="#" class="call_to_action_btn_style">
            طلب جديد
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.67377 8.33327L10.3929 6.61416C10.5968 6.41028 10.5968 6.07973 10.3929 5.87585L8.67377 4.15674M10.24 6.245L2.58301 6.245" stroke="currentColor" stroke-width="0.765676" stroke-linecap="round"/>
            </svg>
        </a>
    </div>
    <div class="menu_and_logo_area">
        <div class="header_right_content">
            <ul>
                <li><a href="{{route('all.contact')}}">Contact Us</a></li>
                <li><a href="{{route('all.blog')}}">Blog</a></li>
                <li><a href="{{route('all.shop')}}">Shop</a></li>
                <li><a href="{{route('all.portfolio')}}">Portfolio</a></li>
                <li><a href="{{route('all.service')}}">Services</a></li>
                <li>
                    <a href="{{route('our.team')}}">Team</a>
                </li>
                <li>
                    <a href="{{route('about.us')}}">About Us</a>
                </li>
                <li><a href="{{url('/')}}">Home</a></li>

                <li>
{{--                    @if (session('locale') == 'en')--}}
{{--                        <a href="{{ route('change.language', 'ar') }}"> العربية</a>--}}
{{--                    @elseif (session('locale') == 'ar')--}}
{{--                        <a href="{{ route('change.language', 'en') }}">English</a>--}}
{{--                    @endif--}}

                        @if (session('locale') == 'en')
                            <a href="{{ route('change.language', 'ar') }}"> العربية</a>
                        @elseif (session('locale') == 'ar' || !session()->has('locale'))
                            <a href="{{ route('change.language', 'en') }}">English</a>
                        @endif
                    {{-- {{ dd('locale:', session('locale')) }}--}}
                </li>

            </ul>
        </div>
        <div class="header_logo">
            <a href="{{url('/')}}">
                <img src="{{URL::to('frontend/image/logo/logo.png')}}" alt="Octoboa Logo">
            </a>
        </div>
    </div>
</header>
<main>
 @yield('home_content')
</main>
<!--! Footer Start -->
<footer class="section_padding octoboa_footer_area" style="background-image: url('{{asset('frontend/image/footer-3d-copyright.jpg')}}');">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3 octoboa_footer_border_right_one text-center">
                <div class="footer_item">
                    <h2>Menu</h2>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="{{route('about.us')}}">About</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 octoboa_footer_border_right_two text-center">
                <div class="footer_item">
                    <h2>Services</h2>
                    <ul>
                        <li><a href="#">Flyers</a></li>
                        <li><a href="#">Posters</a></li>
                        <li><a href="#">Catalogues</a></li>
                        <li><a href="#">Postcards</a></li>
                        <li><a href="#">Stickers</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 octoboa_footer_border_right_three text-center">
                <div class="footer_item">
                    <h2>Contact</h2>
                    <ul>
                        <li><a href="tel:18001234567">1 800 123 4567</a></li>
                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                        <li>1122 Potter Rd, Antelope, <br>CA 32802</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3 text-center">
                <div class="footer_item">
                    <h2>Socials</h2>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">Linkedin</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <p class="copyright_text_footer">
                &copy; <script type="text/javascript">document.write(new Date().getFullYear())</script> Octoboa. All Rights Reserved.
            </p>
        </div>
    </div>
</footer>
<!-- Footer End -->
<!--! Scroll to Top Button Start -->
<div class="scroll_to_top">
    <a href="javascript.void(0)">
        <i class="fa-solid fa-angle-up"></i>
    </a>
</div>
<!-- Scroll to Top Button End -->

<!--! All Script Here -->
<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/plugin/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('frontend/plugin/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('frontend/js/octoboa-main.js')}}"></script>
</body>
</html>
