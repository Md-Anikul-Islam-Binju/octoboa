@extends('frontend.layout')
@section('home_content')

    <!--! Breadcrumb Section Start -->
    <section class="breadcrumb_section_area" style="background-image: url('{{asset('frontend/image/title_bg.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb_section_content">
                        <h1>Blog</h1>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa-solid fa-angle-right"></i></li>
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <!--! Blog Catelog  -->
    <section class="product_catalog_section_area section_padding">
        <div class="container">
            <div class="row product_catalog_row">
                <div class="col-12 col-md-8">
                    <div class="blog_catalog_left">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <article>
                                    <div class="blog_catalog_img">
                                        <a href="{{route('blog.details')}}"><img src="{{URL::to('frontend/image/blog.jpg')}}" alt="Blog Image"></a>
                                    </div>
                                    <div class="blog_catalog_content">
                                        <h2><a href="{{route('blog.details')}}">10 typography tricks every designer should know</a></h2>
                                        <div class="post_meta">Posted by <a class="post_meta_item post_author" href="#"> Cindy Jefferson </a>
                                            <span class="post_meta_item post_date">
													<a href="#">June 21, 2017</a>
												</span>
                                        </div>
                                        <p>Velit integer, sed arcu nunc, mauris risus nunc, vestibulum viverra, ultricies vel natoque. Molestie dui pretium amet at tempus. Porta mauris dolor ullamcorper vulputate, non a placerat metus turpis nunc, orci vitae pretium ligula, leo turpis lacinia dignissimos primis, vitae risus malesuada. Bibendum ut libero similique amet faucibus in. Velit suscipit at at, quisque justo elementum auctor tellus fringilla</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-12 col-md-6">
                                <article>
                                    <div class="blog_catalog_img">
                                        <a href="{{route('blog.details')}}"><img src="{{URL::to('frontend/image/blog.jpg')}}" alt="Blog Image"></a>
                                    </div>
                                    <div class="blog_catalog_content">
                                        <h2><a href="{{route('blog.details')}}">10 typography tricks every designer should know</a></h2>
                                        <div class="post_meta">Posted by <a class="post_meta_item post_author" href="#"> Cindy Jefferson </a>
                                            <span class="post_meta_item post_date">
													<a href="#">June 21, 2017</a>
												</span>
                                        </div>
                                        <p>Velit integer, sed arcu nunc, mauris risus nunc, vestibulum viverra, ultricies vel natoque. Molestie dui pretium amet at tempus. Porta mauris dolor ullamcorper vulputate, non a placerat metus turpis nunc, orci vitae pretium ligula, leo turpis lacinia dignissimos primis, vitae risus malesuada. Bibendum ut libero similique amet faucibus in. Velit suscipit at at, quisque justo elementum auctor tellus fringilla</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-12 col-md-6">
                                <article>
                                    <div class="blog_catalog_img">
                                        <a href="{{route('blog.details')}}"><img src="{{URL::to('frontend/image/blog.jpg')}}" alt="Blog Image"></a>
                                    </div>
                                    <div class="blog_catalog_content">
                                        <h2><a href="{{route('blog.details')}}">10 typography tricks every designer should know</a></h2>
                                        <div class="post_meta">Posted by <a class="post_meta_item post_author" href="#"> Cindy Jefferson </a>
                                            <span class="post_meta_item post_date">
													<a href="#">June 21, 2017</a>
												</span>
                                        </div>
                                        <p>Velit integer, sed arcu nunc, mauris risus nunc, vestibulum viverra, ultricies vel natoque. Molestie dui pretium amet at tempus. Porta mauris dolor ullamcorper vulputate, non a placerat metus turpis nunc, orci vitae pretium ligula, leo turpis lacinia dignissimos primis, vitae risus malesuada. Bibendum ut libero similique amet faucibus in. Velit suscipit at at, quisque justo elementum auctor tellus fringilla</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-12 col-md-6">
                                <article>
                                    <div class="blog_catalog_img">
                                        <a href="{{route('blog.details')}}"><img src="{{URL::to('frontend/image/blog.jpg')}}" alt="Blog Image"></a>
                                    </div>
                                    <div class="blog_catalog_content">
                                        <h2><a href="{{route('blog.details')}}">10 typography tricks every designer should know</a></h2>
                                        <div class="post_meta">Posted by <a class="post_meta_item post_author" href="#"> Cindy Jefferson </a>
                                            <span class="post_meta_item post_date">
													<a href="#">June 21, 2017</a>
												</span>
                                        </div>
                                        <p>Velit integer, sed arcu nunc, mauris risus nunc, vestibulum viverra, ultricies vel natoque. Molestie dui pretium amet at tempus. Porta mauris dolor ullamcorper vulputate, non a placerat metus turpis nunc, orci vitae pretium ligula, leo turpis lacinia dignissimos primis, vitae risus malesuada. Bibendum ut libero similique amet faucibus in. Velit suscipit at at, quisque justo elementum auctor tellus fringilla</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                        <nav>
                            <h2 class="screen-reader-text">Posts navigation</h2>
                            <div class="nav-links">
									<span aria-current="page" class="page-numbers current">
										<span class="meta-nav screen-reader-text">Page </span>1 </span>
                                <a class="page-numbers" href="#">
                                    <span class="meta-nav screen-reader-text">Page </span>2 </a>
                                <a class="next page-numbers" href="#">&gt;</a>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="blog_catalog_right">
                        <div class="catalog_categories">
                            <h2>Categories</h2>
                            <ul>
                                <li><a href="#">Custom Printing</a></li>
                                <li><a href="#">Custom Printing</a></li>
                                <li><a href="#">Custom Printing</a></li>
                                <li><a href="#">Custom Printing</a></li>
                                <li><a href="#">Custom Printing</a></li>
                            </ul>
                        </div>
                        <div class="catalog_search">
                            <h2>Search</h2>
                            <form class="search_form">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="search_input" placeholder="Search …" name="search" >
                                </label>
                                <input type="submit" class="search_submit" value="Search">
                            </form>
                        </div>

                        <div class="blog_tags">
                            <h2>Tags</h2>
                            <div class="tagcloud">
                                <a href="#" class="tag_link">advice</a>
                                <a href="#" class="tag_link">brochures</a>
                                <a href="#" class="tag_link">business card</a>
                                <a href="#" class="tag_link">eco</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
