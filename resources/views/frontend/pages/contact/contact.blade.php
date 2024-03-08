@extends('frontend.layout')
@section('home_content')

    <!--! Breadcrumb Section Start -->
    <section class="breadcrumb_section_area" style="background-image: url('{{asset('frontend/image/title_bg.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb_section_content">
                        <h1>Contact Us</h1>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa-solid fa-angle-right"></i></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!--! Contact Us Section Area Start -->
    <section class="contact_us_section_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <div class="contact_us_form">
                        <h2>Get In Touch</h2>
                        <form>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="mb-4">
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First name*" required="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-4">
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last name*" required="" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="mb-4">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email*" required="" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-4">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone*" required="" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="mb-4">
                                        <select class='form-control' name="service" id="service">
                                            <option value="">Select Your Service *</option>
                                            <option value="3d-printing">3D Printing</option>
                                            <option value="3d-modeling">3D Modeling</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="mb-4">
                                        <select class='form-control' name="price_range" id="price_range">
                                            <option value="">Select Your Service *</option>
                                            <option value="3d-printing">$100 - $150</option>
                                            <option value="3d-printing">$100 - $150</option>
                                            <option value="3d-printing">$100 - $150</option>
                                            <option value="3d-printing">$100 - $150</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-4">
                                        <input type="file" class="form-control" id="file" name="file" required="" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-4">
                                        <textarea name="message" id="message" class="form-control" placeholder="Message*" cols="40" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 d-flex gap-3 align-items-start">
                                <input class="checkbox_style" type="checkbox" name="agree" id="agree" value="yes" />
                                <label for="agree">I agree that my submitted data is being collected and stored.</label>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="octoboa_btn border-0 contact_form_btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-md-5">
                    <div class="contact_info">
                        <iframe src="https://maps.google.com/maps?t=m&amp;output=embed&amp;iwloc=near&amp;z=14&amp;q=40.735042,-73.952736" scrolling="no" marginheight="0" marginwidth="0" frameborder="0" aria-label="One"></iframe>
                        <div class="contact_info_details">
                            <h2>Contact Info</h2>
                            <ul>
                                <li>
                                    <span>Phone:</span>
                                    <a href="#">1 800 123 4567</a>
                                </li>
                                <li>
                                    <span>Email:</span>
                                    <a href="#">info@example.com</a>
                                </li>
                                <li>
                                    <span>Address:</span>
                                    1122 Potter Rd, Antelope, CA 32802
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
