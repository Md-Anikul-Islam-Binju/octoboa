@extends('frontend.layout')
@section('home_content')

    <!--! Breadcrumb Section Start -->
    <section class="breadcrumb_section_area" style="background-image: url('{{asset('frontend/image/title_bg.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb_section_content">
                        <h1>Shop</h1>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa-solid fa-angle-right"></i></li>
                            <li>Shop</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!--! Product Catalog Section -->
    <section class="product_catalog_section_area section_padding">
        <div class="container">
            <div class="row product_catalog_row">
                <div class="col-12 col-md-8">
                    <div class="product_catalog_left">
                        <div class="product_catalog_header">
                            <div class="product_catalog_header_wrapper">
                                <div class="product_grid_setup">
                                    <div class="d-flex gap-2">
                                        <!-- <div class="product_catalog_header_right_item">
                                            <a href="#" class="active">
                                                <i class="fa-solid fa-th-large"></i>
                                            </a>
                                        </div>
                                        <div class="product_catalog_header_right_item">
                                            <a href="#">
                                                <i class="fa-solid fa-th-list"></i>
                                            </a>
                                        </div> -->
                                    </div>
                                    <p>Showing 1–8 of 12 results</p>
                                </div>
                                <div class="product_shorting_form">
                                    <form action="">
                                        <select name="sort_by" id="sort_by">
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="latest"> Sort by Latest</option>
                                            <option value="low_to_high"> Sort by Price: Low to High</option>
                                            <option value="high_to_low">Sort by Price: High to Low</option>
                                        </select>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="our_service_item">
                                    <a href="3d-printing.html" class="service_image_box">
                                        <img src="{{URL::to('frontend/image/3d-product-2-copyright.jpg')}}" class="img-fluid" alt="3d-product-2-copyright">
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
                            <div class="col-12 col-md-6">
                                <div class="our_service_item">
                                    <a href="3d-printing.html" class="service_image_box">
                                        <img src="{{URL::to('frontend/image/3d-product-2-copyright.jpg')}}" class="img-fluid" alt="3d-product-2-copyright">
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
                            <div class="col-12 col-md-6">
                                <div class="our_service_item">
                                    <a href="3d-printing.html" class="service_image_box">
                                        <img src="{{URL::to('frontend/image/3d-product-2-copyright.jpg')}}" class="img-fluid" alt="3d-product-2-copyright">
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
                            <div class="col-12 col-md-6">
                                <div class="our_service_item">
                                    <a href="3d-printing.html" class="service_image_box">
                                        <img src="{{URL::to('frontend/image/3d-product-2-copyright.jpg')}}" class="img-fluid" alt="3d-product-2-copyright">
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
                            <div class="col-12 col-md-6">
                                <div class="our_service_item">
                                    <a href="3d-printing.html" class="service_image_box">
                                        <img src="{{URL::to('frontend/image/3d-product-2-copyright.jpg')}}" class="img-fluid" alt="3d-product-2-copyright">
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
                            <div class="col-12 col-md-6">
                                <div class="our_service_item">
                                    <a href="3d-printing.html" class="service_image_box">
                                        <img src="{{URL::to('frontend/image/3d-product-2-copyright.jpg')}}" class="img-fluid" alt="3d-product-2-copyright">
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
                            <div class="col-12 col-md-6">
                                <div class="our_service_item">
                                    <a href="3d-printing.html" class="service_image_box">
                                        <img src="{{URL::to('frontend/image/3d-product-2-copyright.jpg')}}" class="img-fluid" alt="3d-product-2-copyright">
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
                            <div class="col-12 col-md-6">
                                <div class="our_service_item">
                                    <a href="3d-printing.html" class="service_image_box">
                                        <img src="{{URL::to('frontend/image/3d-product-2-copyright.jpg')}}" class="img-fluid" alt="3d-product-2-copyright">
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
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="product_catalog_right">
                        <div class="catalog_cart">
                            <h2>Your Cart</h2>
                            <p>No products in the cart.</p>
                            <div class="product_cart_item">
                                <div class="short_info_product">
                                    <div>
                                        <img src="{{URL::to('frontend/image/3d-product-1-copyright.jpg')}}" class="img-fluid" alt="3d-product-2">
                                    </div>
                                    <div>
                                        <h2>3D Printing</h2>
                                        <p>Price $75.00</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#">
                                        <i class="fa-solid fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product_cart_item">
                                <div class="short_info_product">
                                    <div>
                                        <img src="{{URL::to('frontend/image/3d-product-1-copyright.jpg')}}" class="img-fluid" alt="3d-product-2">
                                    </div>
                                    <div>
                                        <h2>3D Printing</h2>
                                        <p>Price $75.00</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#">
                                        <i class="fa-solid fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="product_cart_item">
                                <div class="short_info_product">
                                    <div>
                                        <img src="{{URL::to('frontend/image/3d-product-1-copyright.jpg')}}" class="img-fluid" alt="3d-product-2">
                                    </div>
                                    <div>
                                        <h2>3D Printing</h2>
                                        <p>Price $75.00</p>
                                    </div>
                                </div>
                                <div>
                                    <a href="#">
                                        <i class="fa-solid fa-times"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="view_cart_button">
                                <a href="#">
                                    View Cart
                                    <div class="cart">
                                        <span class="count">3</span>
                                        <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="catalog_filter">
                            <h2>Filter by price</h2>
                            <form action="">
                                <div class="slider_container">
                                    <input name="price_range" type="range" min="0" max="100">
                                </div>
                                <div class="price_filter_wrap">
                                    <button type="submit">Filter</button>
                                    <div class="price_filter">
                                        <span>Price: $0 - $100</span>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="catalog_products">
                            <h2>Products</h2>
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
                </div>
            </div>
        </div>
    </section>
@endsection
