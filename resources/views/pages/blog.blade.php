@extends('layouts.index')
@section('content')
    @include('admin.components.linkCss')
    @include('components.header')
    <!-- ========== PAGE TITLE ========== -->
    <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
                                              background-size: cover;">
        <div class="container">
            <div class="inner">
                <h1>Blog</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Blog</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ========== MAIN ========== -->
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <!-- POSTS -->
                    <div class="blog-posts">

                        @foreach ($blog as $article)
                            <!-- POST -->
                            <article class="post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="post-thumbnail">
                                            <figure class="gradient-overlay-hover link-icon">
                                                <a href="{{ route("blog.show", $article->id) }}">
                                                    <img src="{{ asset('storage/'.$article->img) }}" class="img-fluid"
                                                        alt="Image">
                                                </a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="post-details">
                                            <h2 class="post-title">
                                                <a href="{{ route("blog.show", $article->id) }}">{{ $article->title }}</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="author">
                                                    <a href="#"><img src="storage/images/users/admin.jpg" width="16"
                                                            alt="Image">{{ $article->author->nom }}</a>
                                                </span>
                                                <span class="date">
                                                    <a href="#">
                                                        <i class="fa fa-clock-o"></i>{{ $article->created_at }}</a>
                                                </span>
                                                <span class="comments">
                                                    <a href="#">
                                                        <i class="fa fa-commenting-o"></i> {{count($article->comments)}} Comment</a>
                                                </span>
                                                <span class="category">
                                                    <i class="fa fa-folder-open-o"></i>IN
                                                    @foreach ($article->tags as $item)
                                                        @if ($loop->last)
                                                            <a
                                                                href="{{ route('article.tagCategorie', $item->id) }}">{{ $item->nom }}</a>
                                                        @else
                                                            <a
                                                                href="{{ route('article.tagCategorie', $item->id) }}">{{ $item->nom }}</a>,
                                                        @endif
                                                    @endforeach
                                                </span>
                                            </div>
                                            {{-- <p>{{ $article->description }}</p> --}}
                                            <p> {{ Str::limit($article->description, 200) }}</p>
                                           
                                        </div>
                                    </div>
                                </div>
                            </article>
                        @endforeach

                    </div>
                    <!-- ========== PAGINATION ========== -->
                    {{ $blog->links('pagination::bootstrap-4') }}
                </div>
                <!-- SIDEBAR -->
                <div class="col-lg-3 col-12">
                    <div class="sidebar">
                        <aside class="widget noborder">
                            <div class="search">
                                <form class="widget-search" method="POST" action="{{ route('article.search') }}">
                                    @csrf
                                    <input type="search" placeholder="Search" name="data">
                                    <button class="btn-search" id="searchsubmit" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                            </div>
                        </aside>
                        <!-- WIDGET -->
                        <aside class="widget">
                            <h4 class="widget-title">CATEGORIES</h4>
                            <ul class="categories">
                                @foreach ($categorieArticle as $categorie)
                                    <li>
                                        <a href="{{ route('article.categorie', $categorie->id) }}">{{ $categorie->nom }}<span
                                                class="posts-num">{{ count($categorie->articles) }}</span></a>
                                    </li>
                                @endforeach

                            </ul>
                        </aside>
                        <!-- WIDGET -->
                        <aside class="widget">
                            <h4 class="widget-title">Latest Posts</h4>
                            <div class="latest-posts">
                                @foreach ($blogLast as $item)
                                    <!-- ITEM -->
                                    <div class="latest-post-item">
                                        <div class="row">
                                            <div class="col-5">
                                                <figure class="gradient-overlay-hover link-icon sm">
                                                    <a href="{{ route("blog.show", $item->id) }}">
                                                        <img src="{{ asset($item->img) }}" class="img-fluid"
                                                            alt="Image">
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="col-7">
                                                <div class="post-details">
                                                    <h6 class="post-title">
                                                        <a href="{{ route("blog.show", $item->id) }}">{{ $item->title }}</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </aside>
                        <!-- WIDGET -->
                        <aside class="widget">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                @foreach ($tag as $item)
                                    <a href="{{ route('article.tagCategorie', $item->id) }}">
                                        <span class="tag">{{ $item->nom }}</span></a>
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
                            <img src="images/logo.svg" class="footer-logo" alt="Hotel Himara">
                            <div class="inner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, velit placeat
                                    assumenda incidunt dolorem aliquam!</p>
                                <a href="https://www.tripadvisor.com/" target="_blank">
                                    <div class="tripadvisor-banner">
                                        <span class="review">Recommended</span>
                                        <img src="images/icons/tripadvisor.png" alt="Image">
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
                                    @foreach ($blogLast as $item)
                                        
                                    <li>
                                        <a href="{{ route("blog.show", $item->id) }}">10 Tips for holiday travel</a>
                                    </li>
                                    @endforeach
                                    {{-- <li>
                                        <a href="{{ route("blog.show", $artic->id) }}">Are you ready to enjoy your holidays</a>
                                    </li>
                                    <li>
                                        <a href="{{ route("blog.show", $artic->id) }}">Honeymoon at Hotel Himara</a>
                                    </li>
                                    <li>
                                        <a href="{{ route("blog.show", $artic->id) }}">Travel gift ideas for every type of traveler</a>
                                    </li>
                                    <li>
                                        <a href="{{ route("blog.show", $artic->id) }}">Breakfast with coffee and orange juice</a>
                                    </li> --}}
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
