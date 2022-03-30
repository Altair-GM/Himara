@extends('layouts.index')

@section('content')
    @include('admin.components.linkCss')
    @include('components.header')

    <div class="wrapper mm-page mm-slideout" id="mm-0">
        <div class="parallax-mirror"
            style="visibility: visible; z-index: 0; position: fixed; top: 0px; left: 0px; overflow: hidden; transform: translate3d(0px, 116.5px, 0px); height: 535px; width: 966px;">
        </div>





        <div class="blog-post-cover gradient-overlay op5" data-src="{{ asset('storage/images/blog/post/blog-full.jpg') }}"
            data-parallax="scroll" data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0"
            style="margin-top: 0px;">
            <div class="container inner">
                <h2 class="blog-post-title">{{ $blog->title }}</h2>
                <div class="blog-post-info">
                    <img alt="" src="{{ asset('storage/images/blog/users/user1.jpg') }}" class="author-avatar" width="16">
                    <p>by
                        <span>
                            <a href="#">{{ $blog->author->name }}</a></span>
                    </p>
                    <p>on
                        <time datetime="2017-09-27T06:52:20+00:00">{{ $blog->created_at }}</time>
                    </p>
                </div>
            </div>
        </div>

        <main class="post-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-12">
                        <article class="entry">
                            <div class="details">
                                <p class="dropcap">{{ $blog->description }}</p>



                                <div class="meta-post">
                                    <div class="tags">
                                        <span>
                                            <i class="fa fa-tags"></i>
                                            TAGS</span>
                                        <a href="#" rel="tag">Himara</a>
                                        <a href="#" rel="tag">Holiday</a>
                                        <a href="#" rel="tag">Summer</a>
                                    </div>
                                    <div class="share">
                                        <span>
                                            <i class="fa fa-share-alt"></i>
                                            SHARE</span>
                                        <div class="social-media">
                                            <a class="facebook" href="#" data-toggle="tooltip"
                                                data-original-title="Facebook">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                            <a class="twitter" href="#" data-toggle="tooltip"
                                                data-original-title="Twitter">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                            <a class="googleplus" href="#" data-toggle="tooltip"
                                                data-original-title="Google Plus">
                                                <i class="fa fa-google-plus"></i>
                                            </a>
                                            <a class="pinterest" href="#" data-toggle="tooltip"
                                                data-original-title="Pinterest">
                                                <i class="fa fa-pinterest"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <div id="comments">
                            <div class="section-title">
                                <h4>COMMENTS</h4>
                                <p class="section-subtitle">Leave your comment</p>
                            </div>
                            <ul id="comments-list" class="comments-list">
                                @foreach ($blog->comments()->where('validate', true)->get() as $item)
                                    <li>
                                        <div class="comment-main-level">
                                            <div class="comment-avatar"><img
                                                    src="{{ asset('storage/'.$item->photoProfil) }}" alt=""></div>
                                            <div class="comment-box">
                                                <div class="comment_content">
                                                    <h4 class="author-name">
                                                        <a href="#">{{$item->name}}</a>
                                                    </h4>
                                                    <!-- <a href="#comment-form" class="reply_link">Reply</a> -->
                                                    <span class="comment_info">
                                                        <i class="fa fa-clock-o"></i>
                                                        <a href="#">
                                                            <time datetime="2017-10-01T19:56:36+00:00">{{$item->created_at}}</time>
                                                        </a>
                                                    </span>
                                                    <div class="comment_said_text">
                                                        <p>{{$item->commentaire}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                            <div class="section-title mt100">
                                <h4>LEAVE YOUR COMMENT</h4>
                                <p class="section-subtitle">Write your comment</p>
                            </div>
                            <form action="{{ route('comment.store', $blog->id) }}" method="POST" class="comment-form">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" name="name" class="form-control" placeholder="Name*">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="email" class="form-control" name="email" placeholder="Email*">
                                    </div>
                                    <div class="col-md-4">
                                        <input type="text" class="form-control" name="website" placeholder="Website">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="form-control" placeholder="Write Your Comment" name="commentaire"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn float-right">
                                            POST YOUR COMMENT
                                        </button>
                                        <div class="align-left">*Your email address will not be published.</div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-3 col-12">
                        <div class="sidebar">
                            <aside class="widget noborder">
                                <div class="search">
                                    <form class="widget-search">
                                        <input type="search" placeholder="Search">
                                        <button class="btn-search" id="searchsubmit" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </aside>
                            <aside class="widget">
                                <h4 class="widget-title">CATEGORIES</h4>
                                <ul class="categories">
                                    @foreach ($categories as $item)
                                        <li>
                                            <a href="{{ route('article.categorie', $item->id) }}">{{ $item->nom }}<span
                                                    class="posts-num">{{ count($item->articles) }}</span></a>
                                        </li>
                                    @endforeach

                                </ul>
                            </aside>

                            <aside class="widget">
                                <h4 class="widget-title">Latest Posts</h4>
                                <div class="latest-posts">
                                    @foreach ($latest as $item)
                                        <div class="latest-post-item">
                                            <div class="row">
                                                <div class="col-5">
                                                    <figure class="gradient-overlay-hover link-icon sm">
                                                        <a href="{{ route('blog.show', $item->id) }}">
                                                            <img src="{{ asset('storage/'.$item->img) }}" class="img-fluid"
                                                                alt="Image">
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="col-7">
                                                    <div class="post-details">
                                                        <h6 class="post-title">
                                                            <a
                                                                href="{{ route('blog.show', $item->id) }}">{{ $item->title }}</a>
                                                        </h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </aside>
                            <aside class="widget">
                                <h4 class="widget-title">Tags</h4>
                                <div class="tagcloud">
                                    @foreach ($tags as $tag)
                                        <a href="{{ route('article.tagCategorie', $tag->id) }}">
                                            <span class="tag">{{ $tag->nom }}</span></a>
                                    @endforeach
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- ========== FOOTER ========== -->
        <footer>
            <div class="footer-widgets">
                <div class="container">
                    <div class="row">
                        <!-- WIDGET -->
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <img src="{{ asset('storage/images/logo.svg') }}" class="footer-logo" alt="Hotel Himara">
                                <div class="inner">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, velit placeat
                                        assumenda incidunt dolorem aliquam!</p>
                                    <a href="https://www.tripadvisor.com/" target="_blank">
                                        <div class="tripadvisor-banner">
                                            <span class="review">Recommended</span>
                                            <img src="{{ asset('storage/images/icons/tripadvisor.png') }}" alt="Image">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- WIDGET -->
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <h3>LATEST NEWS</h3>
                                <div class="inner">
                                    <ul class="latest-posts">
                                        <li>
                                            <a href="blog-post.html">10 Tips for holiday travel</a>
                                        </li>
                                        <li>
                                            <a href="blog-post.html">Are you ready to enjoy your holidays</a>
                                        </li>
                                        <li>
                                            <a href="blog-post.html">Honeymoon at Hotel Himara</a>
                                        </li>
                                        <li>
                                            <a href="blog-post.html">Travel gift ideas for every type of traveler</a>
                                        </li>
                                        <li>
                                            <a href="blog-post.html">Breakfast with coffee and orange juice</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- WIDGET -->
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <h3>USEFUL LINKS</h3>
                                <div class="inner">
                                    <ul class="useful-links">
                                        <li>
                                            <a href="about-us.html">About Us</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact Us</a>
                                        </li>
                                        <li>
                                            <a href="shop.html">Shop</a>
                                        </li>
                                        <li>
                                            <a href="gallery.html">Himara Gallery</a>
                                        </li>
                                        <li>
                                            <a href="location.html">Our Location</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- WIDGET -->
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <h3>Contact Info</h3>
                                <div class="inner">
                                    <ul class="contact-details">
                                        <li>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            Lorem ipsum dolor, 25, Himara
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            Phone: +1 888 123 4567
                                        </li>
                                        <li>
                                            <i class="fa fa-fax"></i>
                                            Fax: +1 888 123 4567
                                        </li>
                                        <li>
                                            <i class="fa fa-globe"></i>
                                            Web: www.hotelhimara.com
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            Email:
                                            <a href="mailto:info@site.com">contact@hotelhimara.com</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SUBFOOTER -->
            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyrights">&copy; 2018 Hotel Himara. Designed by
                                <a href="https://eagle-themes.com/" target="_blank">Eagle-Themes</a>.
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="social-media">
                                <a class="facebook" data-original-title="Facebook" data-toggle="tooltip" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a class="twitter" data-original-title="Twitter" data-toggle="tooltip" href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a class="googleplus" data-original-title="Google Plus" data-toggle="tooltip" href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a class="pinterest" data-original-title="Pinterest" data-toggle="tooltip" href="#">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                                <a class="linkedin" data-original-title="Linkedin" data-toggle="tooltip" href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <a class="youtube" data-original-title="Youtube" data-toggle="tooltip" href="#">
                                    <i class="fa fa-youtube"></i>
                                </a>
                                <a class="instagram" data-original-title="Instagram" data-toggle="tooltip" href="#">
                                    <i class="fa fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="notification"></div>
    <!-- ========== BACK TO TOP ========== -->
    <div class="back-to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    @include('admin.components.linkJs')
@endsection
