@extends('layouts.web')

@section('title', 'Homepage')

@section('content')

<!-- Slider
============================================= -->
<section id="slider" class="slider-element swiper_wrapper min-vh-60 min-vh-md-100" data-dots="true" data-loop="true" data-grab="false">

    <div class="swiper-container swiper-parent">
        <div class="swiper-wrapper">
            <div class="swiper-slide dark">
                <div class="container">
                    <div class="slider-caption top-left">
                        <div>
                            <h2 class="font-primary nott">Renegade 730S</h2>
                            <p class="font-weight-light font-primary d-none d-sm-block">Raise your limits over</p>
                            <a href="demos/car/car-single.html" class="button button-rounded button-border button-white button-light nott">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide-bg" style="background-image: url({{ asset('web/demos/car/images/hero-slider/4.jpg') }});"></div>
            </div>
            <div class="swiper-slide dark">
                <div class="container">
                    <div class="slider-caption">
                        <div>
                            <h2 class="font-primary nott">Chevrolet Traverse</h2>
                            <p class="font-weight-light font-primary d-none d-sm-block">New and Powerful SUV</p>
                            <a href="demos/car/car-single.html" class="button button-rounded button-border button-white button-light nott">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide-bg" style="background-image: url('demos/car/images/hero-slider/2.jpg');"></div>
            </div>
            <div class="swiper-slide dark">
                <div class="container">
                    <div class="slider-caption slider-caption-center">
                        <div>
                            <h2 class="font-primary nott">Audi 2021 S5 Cabriolet</h2>
                            <p class="font-weight-light font-primary d-none d-sm-block">A Black Diamond</p>
                            <a href="demos/car/car-single.html" class="button button-rounded button-border button-white button-light nott">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide-bg" style="background-image: url('demos/car/images/hero-slider/3.jpg');"></div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>

</section><!-- #Slider End -->

<!-- Moving car on scroll
============================================= -->
<div class="section mt-0 clearfix" style="padding: 100px 0">
    <div class="running-car mt-6">
        <img class="car" src="{{ asset('web/demos/car/images/moving-car/car.jpg') }}" alt="Image">
        <img class="wheel" src="{{ asset('web/demos/car/images/moving-car/car-tier.png') }}" alt="Image">
    </div>
    <div class="container clearfix">
        <div class="row clearfix" style="position: relative;">
            <div class="col-lg-6 offset-lg-6">
                <div class="heading-block hlarge">
                    <h3>Our Fleet<br>Your Fleet</h3>
                </div>
                <p>Assertively iterate enterprise-wide portals through synergistic products. Efficiently build adaptive schemas after transparent quality vectors. Phosfluorescently optimize competitive resources after extensive convergence. Rapidiously optimize high-quality meta-services via distributed architectures. Credibly deliver 24/365.</p>
            </div>
        </div>
    </div>
</div> <!-- Moving car on scroll End -->

<!-- 360 degree car
============================================= -->
<div class="section m-0 bg-transparent clearfix" style="padding: 100px 0;">
    <div class="container clearfix">
        <div class="heading-block center">
            <div class="before-heading text-uppercase ls1" style="font-size: 13px; font-style: normal;">Lorem ipsum dolor sit amet, consectetur adipisicing.</div>
            <h3 class="font-weight-bold">Featured Vehicles</h3>
        </div>

        <!-- Grid Filter
        ============================================= -->
        <ul class="grid-filter style-2 w-100" data-container="#portfolio">
            <li><a href="#" data-filter=".cf-cuv"><i class="icon-car-cuv"></i><span>Cuv</span></a></li>
            <li><a href="#" data-filter=".cf-sedan"><i class="icon-car-sedan"></i><span>Sedan</span></a></li>
            <li><a href="#" data-filter=".cf-supercar"><i class="icon-car-supercar"></i><span>Supercar</span></a></li>
            <li><a href="#" data-filter=".cf-hatchback"><i class="icon-car-hatchback"></i><span>Hatchback</span></a></li>
            <li><a href="#" data-filter=".cf-cabriolet"><i class="icon-car-cabriolet"></i><span>Cabriolet</span></a></li>
            <!-- Show All Button -->
            <li class="activeFilter ml-auto"><a class="button button-small button-rounded button-reset" href="#" data-filter="*">Show All</a></li>
        </ul><!-- .grid-filter end -->

        <!-- Portfolio Items
        ============================================= -->
        <div id="portfolio" class="portfolio row grid-container gutter-20 col-mb-30" data-layout="fitRows">

            <!-- Car 1 -->
            <article class="portfolio-item col-12 col-sm-6 col-lg-4 cf-sedan">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <a href="demos/car/car-single.html">
                            <img src="{{ asset('web/demos/car/images/filter-cars/1.jpg') }}" alt="Open Imagination">
                            <div class="filter-p-pricing">
                                <span class="p-price font-weight-bold ls1">$32,568</span>
                                <span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="demos/car/car-single.html">Ford Mustang - White</a></h3>
                        <span>Dramatically synthesize parallel applications vis-a-vis revolutionary e-tailers. Monotonectally incubate cooperative partnerships.</span>
                    </div>
                    <div class="row no-gutters car-p-features font-primary clearfix">
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-meter"></i><span> 20000</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-door"></i><span> 5 Seater</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-fuel2"></i><span> 20kmpl</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Automatic</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-wheel"></i><span> 15 Inch</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
                    </div>
                </div>
            </article>

            <!-- Car 2 -->
            <article class="portfolio-item col-12 col-sm-6 col-lg-4 cf-suv">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <a href="demos/car/car-single.html">
                            <img src="{{ asset('web/demos/car/images/filter-cars/2.jp') }}g" alt="Open Imagination">
                            <div class="filter-p-pricing">
                                <span class="p-price font-weight-bold ls1">$32,568</span>
                                <span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="demos/car/car-single.html">Chevrolet Brown Traverse</a></h3>
                        <span>Enthusiastically incubate turnkey technologies for exceptional materials. Seamlessly implement emerging scenarios.</span>
                    </div>
                    <div class="row no-gutters car-p-features font-primary clearfix">
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-meter"></i><span> 0-50 mph</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-door"></i><span> 7 Seater</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-paint"></i><span> Brown</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Manual</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-wheel"></i><span> 20-Inch</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
                    </div>
                </div>
            </article>

            <!-- Car 3 -->
            <article class="portfolio-item col-12 col-sm-6 col-lg-4 cf-cabriolet">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <a href="demos/car/car-single.html">
                            <img src="{{ asset('web/demos/car/images/filter-cars/3.jpg') }}" alt="Open Imagination">
                            <div class="filter-p-pricing">
                                <span class="p-price font-weight-bold ls1">$62,300</span>
                                <span class="p-price-msrp">MSRP : <strong>$62,700</strong></span>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="demos/car/car-single.html">Audi 2021 S5 Cabriolet</a></h3>
                        <span>Competently evolve intuitive synergy without corporate human capital. Monotonectally.</span>
                    </div>
                    <div class="row no-gutters car-p-features font-primary clearfix">
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-meter"></i><span> 0-60 mph</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-bearing"></i><span> Six-cylinder</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-fuel2"></i><span> 23 mpg8</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Automatic</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
                    </div>
                </div>
            </article>

            <!-- Car 4 -->
            <article class="portfolio-item col-12 col-sm-6 col-lg-4 cf-cuv">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <a href="demos/car/car-single.html">
                            <img src="{{ asset('web/demos/car/images/filter-cars/4.jpg') }}" alt="Open Imagination">
                            <div class="filter-p-pricing">
                                <span class="p-price font-weight-bold ls1">$32,568</span>
                                <span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="demos/car/car-single.html">BMW 3 Series, ABS</a></h3>
                        <span>Energistically engineer user friendly synergy vis-a-vis enabled channels. Rapidiously utilize value-added. Laudantium debitis perferendis obcaecati.</span>
                    </div>
                    <div class="row no-gutters car-p-features font-primary clearfix">
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-meter"></i><span> 0-80 mph</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-fuel2"></i><span> Hybrid</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Automatic</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-stearing"></i><span> 3000</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
                    </div>
                </div>
            </article>

            <!-- Car 5 -->
            <article class="portfolio-item col-12 col-sm-6 col-lg-4 cf-supercar">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <a href="demos/car/car-single.html">
                            <img src="{{ asset('web/demos/car/images/filter-cars/5.jpg') }}" alt="Open Imagination">
                            <div class="filter-p-pricing">
                                <span class="p-price font-weight-bold ls1">$32,568</span>
                                <span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="demos/car/car-single.html">2021 LEXUS IS 200T FSPORT</a></h3>
                        <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium debitis unde laboriosam perferendis obcaecati.</span>
                    </div>
                    <div class="row no-gutters car-p-features font-primary clearfix">
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-cog3"></i><span> 30,000 mi</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-paint"></i><span> Metalic</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-fuel"></i><span> 11 kmpl</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Automatic</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-wheel"></i><span> 18 Inch</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
                    </div>
                </div>
            </article>

            <!-- Car 6 -->
            <article class="portfolio-item col-12 col-sm-6 col-lg-4 cf-hatchback">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        <a href="demos/car/car-single.html">
                            <img src="{{ asset('web/demos/car/images/filter-cars/6.jpg') }}" alt="Open Imagination">
                            <div class="filter-p-pricing">
                                <span class="p-price font-weight-bold ls1">$32,568</span>
                                <span class="p-price-msrp">MSRP : <strong>$35,698</strong></span>
                            </div>
                        </a>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="demos/car/car-single.html">Chevrolet T430 Hatchback</a></h3>
                        <span>Appropriately exploit strategic niche markets rather than optimal products. Enthusiastically negotiate perferendis the art methods of empowermen.</span>
                    </div>
                    <div class="row no-gutters car-p-features font-primary clearfix">
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-meter"></i><span> 20000</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-door"></i><span> 5 Seater</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-fuel2"></i><span> 20kmpl</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-signal"></i><span> Automatic</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-wheel"></i><span> 15 Inch</span></div>
                        <div class="col-lg-4 col-6 p-0"><i class="icon-car-care"></i><span> 2021</span></div>
                    </div>
                </div>
            </article>

        </div>

    </div>
</div> <!-- Filter Car lists end -->

<!-- Video Gallery on Hover
============================================= -->
<div class="section m-0 overflow-hidden">
    <div class="heading-block mb-0 center">
        <h2>Video Gallery</h2>
    </div>
</div>
<div class="dark section p-0 m-0 overflow-hidden" style="height: 740px">
    <div class="row h-100 align-items-stretch">
        <!-- Video 1 -->
        <div class="col-md-6 col-12 p-0 dark videoplay-on-hover">
            <a href="demos/car/car-listing.html">
                <div class="vertical-middle center">
                    <div class="before-heading text-uppercase ls1" style="font-size: 14px; font-style: normal; color: #EEE">Mercedes</div>
                    <h2 class="mb-0 ls1">Mercedes-AMG GT</h2>
                </div>
                <div class="video-wrap">
                    <video id="slide-video-1" poster="demos/car/images/videos/1.jpg" preload="auto" loop muted>
                        <source src='{{ asset('web/demos/car/images/videos/1.mp4') }}' type='video/mp4' />
                    </video>
                    <div class="video-overlay" style="background: rgba(0,0,0,0.3);"></div>
                </div>
            </a>
        </div>
        <!-- Video 2 -->
        <div class="col-md-6 col-12 p-0 dark videoplay-on-hover">
            <a href="demos/car/car-listing.html">
                <div class="vertical-middle center">
                    <div class="before-heading text-uppercase ls1" style="font-size: 14px; font-style: normal; color: #EEE">Mercedes</div>
                    <h2 class="mb-0 ls1">Mercedes-AMG C 63</h2>
                </div>
                <div class="video-wrap">
                    <video id="slide-video-2" poster="demos/car/images/videos/2.jpg" preload="auto" loop muted>
                        <source src='{{ asset('web/demos/car/images/videos/2.mp4') }}' type='video/mp4' />
                    </video>
                    <div class="video-overlay" style="background: rgba(0,0,0,0.4);"></div>
                </div>
            </a>
        </div>
        <!-- Video 3 -->
        <div class="col-md-6 col-12 p-0 dark videoplay-on-hover">
            <a href="demos/car/car-listing.html">
                <div class="vertical-middle center">
                    <div class="before-heading uppercase ls1" style="font-size: 14px; font-style: normal; color: #EEE">BMW Auto</div>
                    <h2 class="mb-0 ls1">BMW Z4 Roadster</h2>
                </div>
                <div class="video-wrap">
                    <video id="slide-video-3" poster="demos/car/images/videos/3.jpg" preload="auto" loop muted>
                        <source src='{{ asset('web/demos/car/images/videos/3.mp4') }}' type='video/mp4' />
                    </video>
                    <div class="video-overlay" style="background: rgba(0,0,0,0.4);"></div>
                </div>
            </a>
        </div>
        <!-- Video 4 -->
        <div class="col-md-6 col-12 p-0 dark videoplay-on-hover">
            <a href="demos/car/car-listing.html">
                <div class="vertical-middle center">
                    <div class="before-heading uppercase ls1" style="font-size: 14px; font-style: normal; color: #EEE">Mercedes Benz</div>
                    <h2 class="mb-0 ls1">Mercedes-COUPÉ GLE 63</h2>
                </div>
                <div class="video-wrap">
                    <video id="slide-video-4" poster="demos/car/images/videos/4.jpg" preload="auto" loop muted>
                        <source src='{{ asset('web/demos/car/images/videos/4.mp4') }}' type='video/mp4' />
                    </video>
                    <div class="video-overlay" style="background: rgba(0,0,0,0.3);"></div>
                </div>
            </a>
        </div>
    </div>
</div> <!-- Video Gallery end -->

<!-- Artikel
============================================= -->
<div class="section m-0 bg-transparent clearfix" style="padding: 100px 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="demos/car/images/single/911cars/1.jpg" alt="Card image cap">
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-black-50">World</strong>
                        <h4 class="mb-2 font-weight-semibold text-uppercase"><a class="text-dark" href="#">Volkswagen’s Pikes Ppeak racer is a 680 HPAV</a></h4>
                        <a href="#" class="card-link">Auto Expo</a>
                        <a href="#" class="card-link">Nov 12, 2021</a>
                        <p class="card-text my-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="button button-3d button-rounded nott font-weight-semibold ls0 m-0">Continue reading..</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="demos/car/images/single/911cars/2.jpg" alt="Card image cap">
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-black-50">World</strong>
                        <h4 class="mb-2 font-weight-semibold text-uppercase"><a class="text-dark" href="#">Audi E-tron: 248-mile intelligent charge technology confirmed</a></h4>
                        <a href="#" class="card-link">Auto Expo</a>
                        <a href="#" class="card-link">Nov 12, 2021</a>
                        <p class="card-text my-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="button button-3d button-rounded nott font-weight-semibold ls0 m-0">Continue reading..</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="demos/car/images/single/911cars/3.jpg" alt="Card image cap">
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-black-50">World</strong>
                        <h4 class="mb-2 font-weight-semibold text-uppercase"><a class="text-dark" href="#">BMW iX3: first preview pictures of upcoming electric SUV</a></h4>
                        <a href="#" class="card-link">Auto Expo</a>
                        <a href="#" class="card-link">Nov 12, 2021</a>
                        <p class="card-text my-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="button button-3d button-rounded nott font-weight-semibold ls0 m-0">Continue reading..</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="demos/car/images/single/911cars/4.jpg" alt="Card image cap">
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-black-50">World</strong>
                        <h4 class="mb-2 font-weight-semibold text-uppercase"><a class="text-dark" href="#">Byton previews new electric saloon concept ahead of CES Asia</a></h4>
                        <a href="#" class="card-link">Auto Expo</a>
                        <a href="#" class="card-link">Nov 12, 2021</a>
                        <p class="card-text my-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="button button-3d button-rounded nott font-weight-semibold ls0 m-0">Continue reading..</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="demos/car/images/single/911cars/5.jpg" alt="Card image cap">
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-black-50">World</strong>
                        <h4 class="mb-2 font-weight-semibold text-uppercase"><a class="text-dark" href="#">Audi E-tron: 248-mile intelligent charge technology confirmed</a></h4>
                        <a href="#" class="card-link">Auto Expo</a>
                        <a href="#" class="card-link">Nov 12, 2021</a>
                        <p class="card-text my-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="button button-3d button-rounded nott font-weight-semibold ls0 m-0">Continue reading..</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img class="card-img-top" src="demos/car/images/single/911cars/6.jpg" alt="Card image cap">
                    <div class="card-body">
                        <strong class="d-inline-block mb-2 text-black-50">World</strong>
                        <h4 class="mb-2 font-weight-semibold text-uppercase"><a class="text-dark" href="#">BMW iX3: first preview pictures of upcoming electric SUV</a></h4>
                        <a href="#" class="card-link">Auto Expo</a>
                        <a href="#" class="card-link">Nov 12, 2021</a>
                        <p class="card-text my-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="button button-3d button-rounded nott font-weight-semibold ls0 m-0">Continue reading..</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Before Footer Section
============================================= -->
<div class="section m-0 clearfix" style="background: #FFF url({{ asset('web/demos/car/images/footer-bg.jpg') }}) center bottom no-repeat; background-size: cover; height: 770px">
    <div class="mx-auto dark center clearfix" style="max-width: 570px">
        <div class="heading-block dark bottommargin-sm border-0">
            <h2 class="nott font-weight-medium">Raise Your Heart</h2>
            <p style="color: #DDD; margin-top: 10px">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse ipsa necessitatibus rem facere perspiciatis neque laborum est, illum commodi sunt, nobis voluptas.</p>
        </div>
        <a href="demos/car/car-contact.html" class="uppercase font-weight-bold ls2" style="color: #FFF; font-size: 12px; border-bottom: 1px solid #FFF">Request a Quote</a> &rarr;
    </div>
</div>

@endsection
