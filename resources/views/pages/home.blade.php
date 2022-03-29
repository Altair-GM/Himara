@extends('layouts.index')
@section('content')
    @include('admin.components.linkCss')
    @include('components.header')
    <!-- ========== REVOLUTION SLIDER ========== -->
    <div class="slider">
        <div id="rev-slider-1" class="rev_slider gradient-slider" style="display:none" data-version="5.4.5">
            <ul>
                <!-- SLIDE NR. 1 -->
                <li data-transition="crossfade">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('storage/' . $carousels[0]->url) }}" alt="Image" title="Image"
                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
                        class="rev-slidebg" data-no-retina="">
                    <!-- LAYER NR. 1 -->
                    <h1 class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="320" data-voffset=""
                        data-responsive_offset="on" data-fontsize="['80','50','40','30']"
                        data-lineheight="['60','50','40','30']" data-whitespace="nowrap"
                        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 5; color: #fff; font-weight: 900;">
                        TOUCH THE DREAM</h1>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="410" data-voffset=""
                        data-responsive_offset="on" data-fontsize="16" data-lineheight="16" data-whitespace="nowrap"
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 6; color: #fff;">Live Your Myth In Hotel Himara</div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption" data-x="center" data-hoffset="-120" data-y="480" data-voffset=""
                        data-responsive_offset="on" data-whitespace="nowrap"
                        data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 11;">
                        <a class="btn" href="booking-form.html">
                            <i class="fa fa-calendar"></i>BOOK A ROOM NOW</a>
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption" data-x="center" data-hoffset="128" data-y="480" data-voffset=""
                        data-responsive_offset="on" data-whitespace="nowrap"
                        data-frames='[{"delay":2400,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 11;">
                        <a class="btn" href="contact.html">
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>CONTACT US NOW</a>
                    </div>
                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption tp_m_title tp-resizeme" data-x="center" data-hoffset="" data-y="200"
                        data-voffset="" data-responsive_offset="on" data-fontsize="['18','18','16','16']"
                        data-lineheight="['18','18','16','16']" data-whitespace="nowrap"
                        data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="color: #fff">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption tp_m_title tp-resizeme" data-x="center" data-hoffset="" data-y="240"
                        data-voffset="" data-responsive_offset="on" data-fontsize="['25','25','18','18']"
                        data-lineheight="['25','25','18','18']" data-whitespace="nowrap"
                        data-frames='[{"delay":1800,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="color: #fff">
                        Star Luxury Hotel
                    </div>
                </li>
                <!-- SLIDE NR. 2 -->
                <li data-transition="crossfade">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('storage/' . $carousels[1]->url) }}" alt="Image" title="Image"
                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
                        class="rev-slidebg" data-no-retina="">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="320" data-voffset=""
                        data-responsive_offset="on" data-fontsize="['70','50','40','25']"
                        data-lineheight="['60','50','40','25']" data-whitespace="nowrap"
                        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 5; color: #fff; font-weight: 900;">WHERE DREAMS COME TRUE
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="410" data-voffset=""
                        data-responsive_offset="on" data-fontsize="16" data-lineheight="16" data-whitespace="nowrap"
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 6; color: #fff;">You'll Never Forget Your Stay
                    </div>
                </li>
                <!-- SLIDE NR. 3 -->
                <li data-transition="crossfade">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('storage/' . $carousels[2]->url) }}" alt="Image" title="Image"
                        data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10"
                        class="rev-slidebg" data-no-retina="">
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="305" data-voffset=""
                        data-responsive_offset="on" data-fontsize="['80','70','60','40']"
                        data-lineheight="['80','70','60','40']" data-whitespace="nowrap"
                        data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 5; color: #fff; font-weight: 900;">ENJOY YOUR HOLIDAYS
                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme" data-x="center" data-hoffset="" data-y="410" data-voffset=""
                        data-responsive_offset="on" data-fontsize="16" data-lineheight="16" data-whitespace="nowrap"
                        data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                        style="z-index: 6; color: #fff;">Family Room from €89 per night
                    </div>
                </li>
            </ul>
        </div>
        <!-- ========== BOOKING FORM ========== -->
        <div class="horizontal-booking-form">
            <div class="container">
                <div class="inner box-shadow-007">
                    <!-- ========== BOOKING NOTIFICATION ========== -->
                    <div id="booking-notification" class="notification"></div>
                    <form action="{{ route('reservation.store') }}" method="POST">
                        @csrf
                        <!-- NAME -->
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Name
                                        <a href="#" title="Your Name" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Please type your first name and last name">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </label>
                                    <input class="form-control" name="nom" type="text" data-trigger="hover"
                                        placeholder="Write Your Name">
                                </div>
                            </div>
                            <!-- EMAIL -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Email
                                        <a href="#" title="Your Email" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Please type your email adress">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </label>
                                    <input class="form-control" name="email" type="email" placeholder="Write your Email">
                                </div>
                            </div>
                            <!-- ROOM TYPE -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Room Type
                                        <a href="#" title="Room Type" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Please select room type">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </label>
                                    <select class="form-control" name="category_chambre_id" title="Select Room Type"
                                        data-header="Room Type">
                                        @foreach ($category_chambres as $item)
                                            <option value="{{ $item->id }}">{{ $item->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- DATE -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Check-In/Out
                                        <a href="#" title="Check-In / Check-Out" data-toggle="popover" data-placement="top"
                                            data-trigger="hover"
                                            data-content="Please select check-in and check-out date <br>*Check In from 11:00am">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </label>
                                    <input type="text" class="datepicker form-control" name="booking_date"
                                        placeholder="Arrival & Departure" readonly="readonly">
                                </div>
                            </div>
                            <!-- GUESTS -->
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Guests
                                        <a href="#" title="Guests" data-toggle="popover" data-placement="top"
                                            data-trigger="hover" data-content="Please Select Adults / Children">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                    </label>
                                    <div class="panel-dropdown">
                                        <div class="form-control guestspicker">Guests
                                            <span class="gueststotal"></span>
                                        </div>
                                        <div class="panel-dropdown-content">
                                            <div class="guests-buttons">
                                                <label>Adults
                                                    <a href="#" title="" data-toggle="popover" data-placement="top"
                                                        data-trigger="hover" data-content="18+ years"
                                                        data-original-title="Adults">
                                                        <i class="fa fa-info-circle"></i>
                                                    </a>
                                                </label>
                                                <div class="guests-button">
                                                    <div class="minus"></div>
                                                    <input type="text" name="adult" class="booking-guests" value="0">
                                                    <div class="plus"></div>
                                                </div>
                                            </div>
                                            <div class="guests-buttons">
                                                <label>Children
                                                    <a href="#" title="" data-toggle="popover" data-placement="top"
                                                        data-trigger="hover" data-content="Under 18 years"
                                                        data-original-title="Children">
                                                        <i class="fa fa-info-circle"></i>
                                                    </a>
                                                </label>
                                                <div class="guests-button">
                                                    <div class="minus"></div>
                                                    <input type="text" name="enfant" class="booking-guests" value="0">
                                                    <div class="plus"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- BOOKING BUTTON -->
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-book">BOOK A ROOM</button>
                                <div class="advanced-form-link">
                                    <a href="{{route('booking.form')}}">
                                        Advanced Booking Form
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== ABOUT ========== -->
    <section class="about mt100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h4 class="text-uppercase">Hotel Himara. <span class="text-himara"> since 1992</span></h4>
                        <p class="section-subtitle">High quality accommodation services</p>
                    </div>
                    <div class="info-branding">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus deleniti nulla, hic
                            voluptatibus eum voluptatum libero suscipit nemo voluptates cupiditate, ipsum provident facere
                            modi
                            tempora ducimus enim dicta laborum esse aliquam rem
                            assumenda dolores. Commodi, aperiam, blanditiis! Ipsum iure necessitatibus eaque, fuga.
                            Excepturi
                            facilis libero dicta soluta officiis, sint sit voluptatem, vero doloribus nesciunt suscipit
                            dolores
                            veritatis minus quam atque non autem quasi
                            consequatur quae sequi ex, ipsa facere qui ut recusandae. Quod earum cupiditate quaerat
                            assumenda.</p>
                        <div class="providers">
                            <span>Recommended on:</span>
                            <!-- ITEM -->
                            <div class="item">
                                <a href="#">
                                    <img src="{{ asset('storage/images/providers/provider-1.png') }}" alt="Image">
                                </a>
                            </div>
                            <!-- ITEM -->
                            <div class="item">
                                <a href="#">
                                    <img src="{{ asset('storage/images/providers/provider-2.png') }}" alt="Image">
                                </a>
                            </div>
                            <!-- ITEM -->
                            <div class="item">
                                <a href="#">
                                    <img src="{{ asset('storage/images/providers/provider-3.png') }}" alt="Image">
                                </a>
                            </div>
                            <!-- ITEM -->
                            <div class="item">
                                <a href="#">
                                    <img src="{{ asset('storage/images/providers/provider-4.png') }}" alt="Image">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="brand-info">
                        <div class="inner">
                            <div class="content">
                                <img src="images/logo-big-transparent.svg" width="100" alt="Image">
                                <div class="stars">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <h5 class="title">LUXURY HOTEL</h5>
                                <p class="mt20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad
                                    dolorem iste suscipit
                                    voluptates architecto nemo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== ROOMS ========== -->
    <section class="rooms gray">
        <div class="container">
            <div class="section-title">
                <h4>OUR <span class="text-himara">ROOMS</span></h4>
                <p class="section-subtitle">Our favorite rooms</p>
                <a href={{ route('rooms') }} class="view-all">View all rooms</a>
            </div>
            <div class="row">
                @foreach ($rooms as $item)
                    <!-- ITEM -->
                    <div class="col-md-4">
                        <div class="room-grid-item">
                            <figure class="gradient-overlay-hover link-icon">
                                <a href="{{ route('room.show', $item->id) }}">
                                    <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid" alt="Image">
                                </a>
                                <div class="room-services">
                                    <i class="fa fa-coffee" aria-hidden="true" data-toggle="popover"
                                        data-placement="right" data-trigger="hover" data-content="Breakfast Included"
                                        data-original-title="Breakfast"></i>
                                    <i class="fa fa-wifi" aria-hidden="true" data-toggle="popover"
                                        data-placement="right" data-trigger="hover" data-content="Free WiFi"
                                        data-original-title="WiFi"></i>
                                    <i class="fa fa-television" data-toggle="popover" data-placement="right"
                                        data-trigger="hover" data-content="Plasma TV with cable channels"
                                        data-original-title="TV"></i>
                                </div>
                                <div class="room-price">€{{ $item->prix }} / night</div>
                            </figure>
                            <div class="room-info">
                                <h2 class="room-title">
                                    <a href="{{ route('blog.show', $item->id) }}">{{ $item->nom }}</a>
                                </h2>
                                <p>Enjoy our {{ $item->category->nom }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ========== SERVICES ========== -->
    <section class="services">
        <div class="container">
            <div class="section-title">
                <h4>HIMARA. <span class="text-himara">SERVICES</span></h4>
                <p class="section-subtitle">Check out our awesome services</p>
            </div>
            <div class="row">
                <div class="col-lg-7 col-12">
                    <div data-slider-id="services" class="services-owl owl-carousel">
                        <figure class="gradient-overlay">
                            <img src="{{ asset('storage/images/services/restaurant.jpg')}}" class="img-fluid" alt="Image">
                            <figcaption>
                                <h4>Restaurant</h4>
                            </figcaption>
                        </figure>
                        <figure class="gradient-overlay">
                            <img src="{{ asset('storage/images/services/spa.jpg')}}" class="img-fluid" alt="Image">
                            <figcaption>
                                <h4>Spa</h4>
                            </figcaption>
                        </figure>
                        <figure class="gradient-overlay">
                            <img src="{{ asset('storage/images/services/conference.jpg')}}" class="img-fluid" alt="Image">
                            <figcaption>
                                <h4>Conference Room</h4>
                            </figcaption>
                        </figure>
                        <figure class="gradient-overlay">
                            <img src="{{ asset('storage/images/services/swimming.jpg')}}" class="img-fluid" alt="Image">
                            <figcaption>
                                <h4>Swimming Pool</h4>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="owl-thumbs" data-slider-id="services">
                        <div class="owl-thumb-item">
                            <span class="media-left">
                                <i class="flaticon-tray-1"></i>
                            </span>
                            <div class="media-body">
                                <h5>Restaurant</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt
                                    ut laoreet.</p>
                            </div>
                        </div>
                        <div class="owl-thumb-item">
                            <span class="media-left">
                                <i class="flaticon-nature"></i>
                            </span>
                            <div class="media-body">
                                <h5>Spa - Beauty &amp; Health</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt
                                    ut laoreet.</p>
                            </div>
                        </div>
                        <div class="owl-thumb-item">
                            <span class="media-left">
                                <i class="flaticon-screen-1"></i>
                            </span>
                            <div class="media-body">
                                <h5>Conference Room</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt
                                    ut laoreet.</p>
                            </div>
                        </div>
                        <div class="owl-thumb-item">
                            <span class="media-left">
                                <i class="flaticon-sports"></i>
                            </span>
                            <div class="media-body">
                                <h5>Swimming Pool</h5>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                                    tincidunt
                                    ut laoreet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== GALLERY ========== -->
    <section class="gallery">
        <div class="container">
            <div class="section-title">
                <h4>HIMARA. <span class="text-himara">GALLERY</span></h4>
                <p class="section-subtitle">Check out our image gallery</p>
                <a href={{ route('gallery') }} class="view-all">View gallery images</a>
            </div>
            <div class="gallery-owl owl-carousel image-gallery">
                @foreach ($imageAll->shuffle()->take(10) as $item)
                    <!-- ITEM -->
                    <div class="gallery-item">
                        <figure class="gradient-overlay image-icon">
                            <a href="{{ asset('storage/' . $item->url) }}">
                                <img src="{{ asset('storage/' . $item->url) }}" alt="Image">
                            </a>
                            <figcaption>{{ $item->nom }}</figcaption>
                        </figure>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <!-- ========== TESTIMONIALS ========== -->
    <section class="testimonials gray">
        <div class="container">
            <div class="section-title">
                <h4>OUR GUESTS LOVE US</h4>
                <p class="section-subtitle">What our guests are saying about us</p>
            </div>
            <div class="owl-carousel testimonials-owl">
                <!-- ITEM -->
                <div class="item">
                    <div class="testimonial-item">
                        <div class="author-img">
                            <img alt="Image" class="img-fluid" src="images/users/user1.jpg">
                        </div>
                        <div class="author">
                            <h4 class="name">Marlene Simpson</h4>
                            <div class="location">Madrid / Spain</div>
                        </div>
                        <div class="rating">
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                            <i class="fa fa-star voted" aria-hidden="true"></i>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
                            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="testimonial-item">
                        <div class="author-img">
                            <img alt="Image" class="img-fluid" src="images/users/user2.jpg">
                        </div>
                        <div class="author">
                            <h4 class="name">Brad Knight</h4>
                            <div class="location">Athens / Greece</div>
                            <div class="rating">
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
                            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="testimonial-item">
                        <div class="author-img">
                            <img alt="Image" class="img-fluid" src="images/users/user3.jpg">
                        </div>
                        <div class="author">
                            <h4 class="name">Daryl Phillips</h4>
                            <div class="location">Lisbon / Portugal</div>
                            <div class="rating">
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
                            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="testimonial-item">
                        <div class="author-img">
                            <img alt="Image" class="img-fluid" src="images/users/user4.jpg">
                        </div>
                        <div class="author">
                            <h4 class="name">Felecia Lawson</h4>
                            <div class="location">Paris / France</div>
                            <div class="rating">
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
                            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="testimonial-item">
                        <div class="author-img">
                            <img alt="Image" class="img-fluid" src="images/users/user5.jpg">
                        </div>
                        <div class="author">
                            <h4 class="name">Joanne Robinson</h4>
                            <div class="location">New York / USA</div>
                            <div class="rating">
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
                            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="testimonial-item">
                        <div class="author-img">
                            <img alt="Image" class="img-fluid" src="images/users/user6.jpg">
                        </div>
                        <div class="author">
                            <h4 class="name">Emily Hill</h4>
                            <div class="location">Rome / Italy</div>
                            <div class="rating">
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
                            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="testimonial-item">
                        <div class="author-img">
                            <img alt="Image" class="img-fluid" src="images/users/user7.jpg">
                        </div>
                        <div class="author">
                            <h4 class="name">Mabel Hicks</h4>
                            <div class="location">Moscow / Russia</div>
                            <div class="rating">
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
                            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="testimonial-item">
                        <div class="author-img">
                            <img alt="Image" class="img-fluid" src="images/users/user8.jpg">
                        </div>
                        <div class="author">
                            <h4 class="name">Kent Lambert</h4>
                            <div class="location">Berlin / Germany</div>
                            <div class="rating">
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
                            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="item">
                    <div class="testimonial-item">
                        <div class="author-img">
                            <img alt="Image" class="img-fluid" src="images/users/user9.jpg">
                        </div>
                        <div class="author">
                            <h4 class="name">Gerald Schmidt</h4>
                            <div class="location">Zagreb / Croatia</div>
                            <div class="rating">
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star voted" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec turpis a nunc convallis
                            condimentum. Sed odio nisl, mattis eget interdum non, pretium et lacus.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== RESTAURANT ========== -->
    <section class="restaurant image-bg parallax gradient-overlay op5" data-src="images/restaurant.jpg"
        data-parallax="scroll" data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0">
        <div class="container">
            <div class="section-title">
                <h4>HIMARA. RESTAURANT</h4>
                <p class="section-subtitle">Live a gourmet dining experience</p>
            </div>
            <div class="row">
                <!-- ITEM -->
                <div class="col-md-6 col-sm-6 col-6">
                    <div class="restaurant-menu-item">
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <figure>
                                    <img src="images/restaurant/restaurant1.jpg" class="img-fluid " alt="Image">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-12">
                                <div class="info">
                                    <div class="title">
                                        <span class="name">Salat</span>
                                        <span class="price">
                                            <span class="amount">€16.99</span>
                                        </span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut
                                        laoreet...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ITEM -->
                <div class="col-md-6 col-sm-6 col-6">
                    <div class="restaurant-menu-item">
                        <div class="row">
                            <div class="col-lg-4 col-12">
                                <figure>
                                    <img src="images/restaurant/restaurant2.jpg" class="img-fluid" alt="Image">
                                </figure>
                            </div>
                            <div class="col-lg-8 col-12">
                                <div class="info">
                                    <div class="title">
                                        <span class="name">Croquettes</span>
                                        <span class="price">
                                            <span class="amount">€9.99</span>
                                        </span>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, elit, sed diam nonummy nibh euismod tincidunt ut
                                        laoreet...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== NEWS ==========-->
    <section class="news">
        <div class="container">
            <div class="section-title">
                <h4 class="title">LATEST NEWS</h4>
                <p class="section-subtitle">Check out our latest news</p>
            </div>
            <div class="row">

                @foreach ($latestBlogs as $item)
                    <!-- ITEM -->
                    <div class="col-md-4">
                        <div class="news-grid-item">
                            <figure class="gradient-overlay-hover link-icon">
                                <a href="{{ route('blog.show', $item->id) }}">
                                    <img src="{{ asset('storage/' . $item->img) }}" class="img-fluid" alt="Image">
                                </a>
                            </figure>
                            <div class="news-info">
                                <h4 class="title">
                                    <a href="{{ route('blog.show', $item->id) }}">{{ $item->nom }}</a>
                                </h4>
                                <p>{{ Str::limit($item->description, 50) }}</p>
                                <div class="post-meta">
                                    <span class="author">
                                        <a href="#"><img src="images/users/admin.jpg" width="16" alt="Image">
                                            {{ $item->author->nom }}</a>
                                    </span>
                                    <span class="date">
                                        <i class="fa fa-clock-o"></i>
                                        {{ $item->created_at }}</span>
                                    <span class="comments">
                                        <a href="#">
                                            <i class="fa fa-commenting-o"></i>
                                            1 Comment</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- ========== VIDEO ========== -->
    <section class="video np parallax gradient-overlay op6" data-src="images/video.jpg" data-parallax="scroll"
        data-speed="0.3" data-mirror-selector=".wrapper" data-z-index="0">
        <div class="inner gradient-overlay">
            <div class="container">
                <div class="video-popup">
                    <a class="popup-vimeo" href="https://www.youtube.com/watch?v=BDDfopejpwk">
                        <i class="fa fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== CONTACT V2 ========== -->
    <section class="contact-v2 gray">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-title">
                        <h4>GET IN TOUCH</h4>
                        <p class="section-subtitle">Get in touch</p>
                    </div>
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
                <div class="col-md-7">
                    <div class="section-title">
                        <h4>CONTACT US</h4>
                        <p class="section-subtitle">Say hello</p>
                    </div>
                    <form action="{{ route('contact.store') }}" name="contact-form" method="POST">
                        @csrf
                        <div class="form-group">
                            <input class="form-control" name="nom" placeholder="Your Name" type="text">
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="email" type="email" placeholder="Your Email Address">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="msg" placeholder="Your Message"></textarea>
                        </div>
                        <button class="btn" type="submit">
                            <i class="fa fa-location-arrow"></i>Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

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
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, velit placeat assumenda
                                    incidunt
                                    dolorem aliquam!</p>
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
                        <div class="copyrights">&copy; 2022 Hotel Himara. Designed by
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
