@extends('frontend.layout')
@section('home_content')
    <!--! Breadcrumb Section Start -->
    <section class="breadcrumb_section_area" style="background-image: url('{{asset('frontend/image/title_bg.jpg')}}');">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb_section_content">
                        <h1>25 logo design tips from the experts</h1>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><i class="fa-solid fa-angle-right"></i></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><i class="fa-solid fa-angle-right"></i></li>
                            <li>25 logo design tips from the experts</li>
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
                    <div class="single_blog_details">
                        <div class="row">
                            <article>
                                <div class="post_featured">
                                    <img class="img-fluid" src="{{URL::to('frontend/image/blog.jpg')}}" alt="">
                                </div>
                                <div class="post_details_content">
                                    <p>Faucibus dui nec tortor hymenaeos, feugiat turpis, nullam diam mauris scelerisque turpis eu massa. Tellus praesent curabitur purus metus nec, arcu aliquam. Diam consequat aliquam sed, tempus pede quis, accumsan duis mollis donec quis. Et est diam arcu phasellus, sed rhoncus fringilla maecenas egestas gravida. Non elit ligula. Nulla ut nulla a, erat wisi. Libero sed, odio tristique, at fusce pulvinar placerat sit sapien, quisquam enim eros nullam est, praesent dignissim faucibus donec. Donec integer mus orci sed, at quis, risus lorem mauris enim placerat, ac aliquam feugiat varius, eu at sit urna eget. Ut quo ac ac urna enim lorem, non leo pede. Luctus nec, justo suspendisse, velit egestas turpis, eget pellentesque at auctor, convallis ante. Augue elit, vulputate eu tempus quam. Ac erat at sapien id vehicula.</p>
                                    <p>Bibendum nulla in egestas sapien metus, erat sed sit aliquam, bibendum egestas orci sapien at proin. Sed id, est sagittis blandit pellentesque aut porta non, litora pulvinar nisl wisi laoreet justo. Nobis mauris posuere sit, neque ut orci non porta, morbi aut. Quam laoreet in, in lorem libero. Lorem elit tincidunt augue, nec dui pharetra posuere eu mauris. Et ante. Quis velit est, enim mollis purus commodo in, ligula arcu arcu commodo quisque, bibendum posuere tellus. Ipsum posuere ac, ut sapien, non cum vel. Enim nibh, suspendisse eu eget id ad nibh imperdiet, dolor porta risus molestie aenean.</p>
                                    <p>Accumsan est. Fusce justo curabitur et diam, tincidunt eu suspendisse erat mi est pellentesque, wisi et mi. Tincidunt pede etiam, in pede, ipsum fusce sapien interdum. Penatibus dignissim, tincidunt arcu donec eget sed pharetra. Hendrerit tellus odio felis feugiat, sodales erat curabitur sollicitudin. Et integer, sed est ipsum id, et ullamcorper amet quis. Et nunc quam mauris convallis, sed tellus facilisis amet duis, consectetuer auctor. Nibh purus iaculis, diam pede, taciti nam turpis.</p>
                                </div>
                                <div class="post_meta_single">
										<span class="post_meta_item">
											<span class="post_meta_label">Tags:</span>
											<a href="#">advice</a>,
											<a href="#">ideas</a>,
											<a href="#">logo</a>
										</span>
                                </div>
                                <div class="post-bottom">
                                    <div class="post_meta">
											<span class="post_categories post_meta_item">
												<a href="#">Design Ideas</a>,
												<a href="#">Design Tips and Tricks</a>,
												<a href="#">News</a>,
											</span>
                                        <span class="post_meta_item post_date">
												<a href="#">June 21, 2017</a>
											</span>
                                        <a href="#" class="post_meta_item">
                                            <span class="post_counters_number">1297</span>
                                            <span class="post_counters_label">Views</span>
                                        </a>

                                    </div>
                                </div>
                                <div class="author_info">
                                    <div class="author_avatar">
                                        <img alt="" src="https://secure.gravatar.com/avatar/4859526e4f9ffb6fe0d37882a6c90c53?s=120&amp;d=mm&amp;r=g">
                                    </div>
                                    <div class="author_description">
                                        <h5 class="author_title">About Cindy Jefferson</h5>
                                        <div class="author_bio">
                                            <p>Arcu luctus curae amet, sagittis bibendum neque blandit lacus ipsum. Venenatis ullamcorper lacus wisi ultricies, nibh lorem mauris ante morbi. Velit enim id eget sed suspendisse ligula, nam lacus mauris in venenatis.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>

                        </div>
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
