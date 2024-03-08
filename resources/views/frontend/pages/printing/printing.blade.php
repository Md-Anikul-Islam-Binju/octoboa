@extends('frontend.layout')
@section('home_content')
    <!--! Breadcrumb Section Start -->
    <section class="breadcrumb_section_area" style="background-image: url('{{asset('frontend/image/title_bg.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb_section_content">
                        <h1>3D Printing</h1>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa-solid fa-angle-right"></i></li>
                            <li><a href="shop.html">Shop</a></li>
                            <li><i class="fa-solid fa-angle-right"></i></li>
                            <li>3D Printing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!--! Product Details Section -->
    <section class="single_product_details_section section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 col-lg-4">
                    <div class="single_product_details_image mb-3 mb-md-0">
                        <img src="{{URL::to('frontend/image/3d-product-1-copyright.jpg')}}" alt="3D Printing">
                    </div>
                </div>
                <div class="col-12 col-md-7 col-lg-8">
                    <div class="single_product_details_content">
                        <h2>Custom T-shirt</h2>
                        <div class="single_product_details_price">
                            <span class="new_price">$15.00</span>
                            <span>-</span>
                            <span class="old_price">$20.00</span>
                        </div>
                        <p>Nibh sed quis, elementum nulla nostra a et, et libero amet amet quis elit non, velit orci justo sed pede sed. A consectetuer viverra gravida urna nec, justo pulvinar mauris urna dolor scelerisque, magna orci praesent lorem vehicula, vivamus dui id. Eu sem, lectus felis tincidunt excepteur maecenas etiam diam. Mi praesent nisl, luctus nulla arcu aliquam commodo, porta duis, ut vel tempor. Nibh eget consectetuer. Nunc minim morbi metus, porttitor rutrum, pellentesque sollicitudin.</p>
                        <table class="table table-bordered my-4">
                            <tbody>
                            <tr>
                                <th class="label_style">Size</th>
                                <th class="value_style">
                                    <div class="product_size">
                                        <input type="radio" id="s" name="product_size" value="s" checked>
                                        <label for="s">S</label>
                                        <input type="radio" id="m" name="product_size" value="m">
                                        <label for="m">M</label>
                                        <input type="radio" id="l" name="product_size" value="l">
                                        <label for="l">L</label>
                                        <input type="radio" id="xl" name="product_size" value="xl">
                                        <label for="xl">XL</label>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th class="label_style">Color</th>
                                <th class="value_style">
                                    <div class="product_color">
                                        <input type="radio" id="red" name="product_color" value="red" checked>
                                        <label for="red" class="red"></label>
                                        <input type="radio" id="green" name="product_color" value="green">
                                        <label for="green" class="green"></label>
                                        <input type="radio" id="blue" name="product_color" value="blue">
                                        <label for="blue" class="blue"></label>
                                    </div>
                                </th>
                            </tr>
                            </tbody>
                        </table>
                        <div class="selected_product_price mb-4 mt-2">
                            <span>$18.00</span>
                        </div>
                        <div class="add_to_cart_single_product mb-5 d-flex align-items-center gap-2">
                            <div class="quantity_select">
                                <input type="number" name="quantity" id="quantity" value="1" min="0">
                                <span class="q_inc">
										<i class="fa-solid fa-angle-up"></i>
									</span>
                                <span class="q_dec">
										<i class="fa-solid fa-angle-down"></i>
									</span>
                            </div>
                            <div class="add_to_cart_button_style">
                                <button>Add to Cart</button>
                            </div>
                        </div>
                        <div class="product_short_info">
                            <ul>
                                <li>SKU: 0001</li>
                                <li>Category: <a href="#">T-shirt</a></li>
                                <li>
                                    Tags:
                                    <a href="#">T-shirt</a>,
                                    <a href="#">T-shirt</a>,
                                    <a href="#">T-shirt</a>
                                </li>
                                <li>Product ID: 3892</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--! Additional Product Information -->
    <section class="additional_product_info_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="additional_product_info_wrap">
                        <ul class="nav nav-tabs" id="productTabs" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="description-tab" data-bs-toggle="tab" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="additional-info-tab" data-bs-toggle="tab" href="#additional-info" role="tab" aria-controls="additional-info" aria-selected="false">Additional Information</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="reviews-tab" data-bs-toggle="tab" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews (0)</a>
                            </li>
                        </ul>

                        <!-- Tab Content -->
                        <div class="tab-content" id="productTabsContent">
                            <!-- Description Tab Pane -->
                            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
                                <p>Nibh sed quis, elementum nulla nostra a et, et libero amet amet quis elit non, velit orci justo sed pede sed. A consectetuer viverra gravida urna nec, justo pulvinar mauris urna dolor scelerisque, magna orci praesent lorem vehicula, vivamus dui id. Eu sem, lectus felis tincidunt excepteur maecenas etiam diam. Mi praesent nisl, luctus nulla arcu aliquam commodo, porta duis, ut vel tempor. Nibh eget consectetuer. Nunc minim morbi metus, porttitor rutrum, pellentesque sollicitudin.</p>
                            </div>

                            <!-- Additional Information Tab Pane -->
                            <div class="tab-pane fade" id="additional-info" role="tabpanel" aria-labelledby="additional-info-tab">
                                <h2>Additional information</h2>
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <th>Size</th>
                                        <td>
                                            <ul class="d-flex align-items-center gap-2">
                                                <li>S,</li>
                                                <li>M,</li>
                                                <li>L,</li>
                                                <li>XL,</li>
                                                <li>XXL,</li>
                                                <li>XXXL,</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Color</th>
                                        <td>
                                            <ul class="d-flex align-items-center gap-2">
                                                <li>Red,</li>
                                                <li>Green,</li>
                                                <li>Blue</li>
                                            </ul>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Reviews Tab Pane -->
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <h2>Reviews</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--! Releted Product Section  -->
    <section class="our_service_section_wrapper section_padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section_heading">
                        <h2>Releted Products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="our_service_item">
                        <a href="3d-printing.html" class="service_image_box">
                            <img src="{{URL::to('frontend//image/3d-product-2-copyright.jpg')}}" class="img-fluid" alt="3d-product-2-copyright">
                            <div class="hover_icons">
                                <div class="icon_style">
                                    <div class="icons">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="service_content_box">
                            <a href="3d-printing.html">
                                <h2>3D Printing</h2>
                            </a>
                            <p>Starting at $75.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="our_service_item">
                        <a href="3d-printing.html" class="service_image_box">
                            <img src="{{URL::to('frontend//image/3d-product-3-copyright.jpg')}}" class="img-fluid" alt="3d-product-2-copyright">
                            <div class="hover_icons">
                                <div class="icon_style">
                                    <div class="icons">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="service_content_box">
                            <a href="3d-printing.html">
                                <h2>3D Modeling</h2>
                            </a>
                            <p>Starting at $25.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="our_service_item">
                        <a href="3d-printing.html" class="service_image_box">
                            <img src="{{URL::to('frontend//image/3d-product-1-copyright.jpg')}}" class="img-fluid" alt="3d-product-2-copyright">
                            <div class="hover_icons">
                                <div class="icon_style">
                                    <div class="icons">
                                        <i class="fa-solid fa-cart-shopping"></i>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="service_content_box">
                            <a href="3d-printing.html">
                                <h2>3D Scanning</h2>
                            </a>
                            <p>Starting at $25.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
