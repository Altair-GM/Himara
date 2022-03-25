@extends('layouts.index')
@section('content')
    @include('admin.components.linkCss')
    @include('components.header')
    <!-- ========== PAGE TITLE ========== -->
    <div class="page-title gradient-overlay op6" style="background: url(images/breadcrumb.jpg); background-repeat: no-repeat;
                            background-size: cover;">
        <div class="container">
            <div class="inner">
                <h1>ROOMS</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Rooms</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ========== MAIN ========== -->
    <main class="rooms-list-view">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    @foreach ($roomListAll as $item)
                        <!-- ITEM -->
                        <div class="room-list-item">
                            <div class="row">
                                <div class="col-lg-5">
                                    <figure class="gradient-overlay-hover link-icon">
                                        <a href="{{ route('room.show', $item->id) }}"><img
                                                src="{{ asset($item->image) }}" class="img-fluid" alt="Image"></a>
                                    </figure>
                                    {{-- {{ asset("images/rooms/single/single1.jpg") }} --}}
                                </div>
                                <div class="col-lg-5">
                                    <div class="room-info">
                                        <h3 class="room-title">
                                            <a href="{{ route('room.show', $item->id) }}">{{ $item->nom }}</a>
                                        </h3>
                                        <span class="room-rates">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <a href="{{ route('room.show', $item->id) }}#room-reviews">5.00 Based on 3
                                                Ratings</a>
                                        </span>
                                        <p> {{ Str::limit($item->description, 200) }}</p>

                                        <div class="room-services">
                                            <i class="fa fa-coffee" data-toggle="popover" data-placement="top"
                                                data-trigger="hover" data-content="Breakfast Included"
                                                data-original-title="Breakfast"></i>
                                            <i class="fa fa-wifi" data-toggle="popover" data-placement="top"
                                                data-trigger="hover" data-content="Free WiFi"
                                                data-original-title="WiFi"></i>
                                            <i class="fa fa-television" data-toggle="popover" data-placement="top"
                                                data-trigger="hover" data-content="Plasma TV with cable channels"
                                                data-original-title="TV"></i>
                                            <span>Beds: 1 King</span>
                                            <span>Max Guests: 2</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2">
                                    <div class="room-price">
                                        <span class="price">{{ $item->prix }}</span>
                                        <a href="{{ route('room.show', $item->id) }}" class="btn btn-sm">view <br>
                                            details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach



                    <!-- PAGINATION -->
                    {{ $roomListAll->links("pagination::bootstrap-4") }}
                </div>
                <div class="col-lg-3 col-12">
                    <div class="sidebar">
                        <aside class="widget noborder">
                            <div class="search">
                                <form action="{{ route('RoomSearch') }}" class="widget-search" method="POST">
                                    @csrf
                                    <input type="search" placeholder="Search" onfocus="this.placeholder='' "
                                        onblur="this.placeholder='Search'" name="data">
                                    <button class="btn-search" id="searchsubmit" type="submit">
                                        <button class="btn-search" id="searchsubmit" type="submit">

                                            <i class="fa fa-search"></i>
                                        </button>
                                    </button>
                                </form>
                            </div>
                        </aside>
                        <!-- WIDGET -->
                        <aside class="widget">
                            <h4 class="widget-title">CATEGORIES</h4>
                            <ul class="categories">
                                @foreach ($categoryRoom as $item)
                                    <li>
                                        {{-- <a href="#">Single Room<span class="posts-num">51</span></a> --}}
                                        <a href={{ route('roomCategorie', $item->id) }}>{{ $item->nom }}<span
                                                class="posts-num">{{ count($item->rooms) }}</span></a>
                                    </li>
                                @endforeach

                            </ul>
                        </aside>
                        <!-- WIDGET -->
                        <aside class="widget">
                            <h4 class="widget-title">Tags</h4>
                            <div class="tagcloud">
                                {{-- @dd($tagRoom) --}}
                                @foreach ($tagRoom as $item)
                                    <a href={{ route('tagRooms', $item->id) }}>
                                        <span class="tag">{{ $item->nom }}</span>
                                    </a>
                                @endforeach
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </main>
    </div>

    <!-- ========== FOOTER ========== -->
    <footer>
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <!-- WIDGET -->
                    <div class="col-md-3">
                        <div class="footer-widget">
                            <img src="{{ asset('images/logo.svg') }}" class="footer-logo" alt="Hotel Himara">
                            <div class="inner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, velit placeat assumenda
                                    incidunt
                                    dolorem aliquam!</p>
                                <a href="https://www.tripadvisor.com/" target="_blank">
                                    <div class="tripadvisor-banner">
                                        <span class="review">Recommended</span>
                                        <img src="{{ asset('images/icons/tripadvisor.png') }}" alt="Image">
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
    <!-- ========== CONTACT NOTIFICATION ========== -->
    <div id="contact-notification" class="notification fixed"></div>
    <!-- ========== BACK TO TOP ========== -->
    <div class="back-to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
    @include('admin.components.linkJs')
@endsection
