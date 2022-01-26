@extends('pages.layout')

@section('title', 'Home | ')

@section('content')

@include('pages.slider')

<main id="main">


    <!-- ======= About Section ======= -->
    <section id="about" class="">
        <div class="container">
            <div class="section-header">
                <h2>About COOPLIFE</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 about-img align-items-center">
                    <img src="assets/img/png/5.png" alt="">
                </div>

                <div class="col-lg-6 content">
                    <ul>
                        <li class="text-justify"><i class="fa fa-check-circle"></i> Facilitating you with the utmost freedom to live your
                            life to its full potential, we at COOPLIFE Insurance Limited believe in the sentiment that
                            <strong style="color: #f48434; font-weight: 600;">“Life is to be lived”</strong>. Since our
                            inception, we have evolved into a comprehensive brand
                            portfolio where we cater to the life insurance needs of individuals as well as groups coming
                            from all walks of life.
                        </li>
                        <li class="text-justify"><i class="fa fa-check-circle"></i> Our corporate stability comes from Cooperative Insurance
                            Co., which was established in the year 1998 and started its operations in the year of 1999.
                            Thus, COOPLIFE is a result of the segregation process of composite insurance companies by
                            the Insurance Regulatory Commission of Sri Lanka (IRCSL) through the regulation of Insurance
                            Industry (Amendment) Act No. 3 of 2011.</li>
                    </ul>

                    <div class="row">
                        <div class="col-lg-4"></div>
                        <div class="col-lg-4">
                            <a href="/about">
                                <div class="text-center"><button type="submit">View more</button></div>
                            </a>
                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="snow-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h2>Why Choose Us?</h2>
            </div>

            <div class="row row-eq-height justify-content-center">

                <div class="col-lg-4 mb-4">
                    <div class="card" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><img src="assets/img/values/mutual.png" alt=""></div>
                        <div class="card-body">
                            <h5 class="card-title">Mutual Respect</h5>
                            <p>Show <strong style="color: #f48434; text-transform: uppercase;">Mutual Respect</strong>
                                in
                                all our
                                interactions</p>
                            <a href="/about#values" class="readmore">Read more </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"><img src="assets/img/values/people.png" alt=""></div>
                        <div class="card-body">
                            <h5 class="card-title">Empower People</h5>
                            <p><strong style="color: #f48434; text-transform: uppercase;">Empower People</strong> to
                                strive for
                                excellence</p>
                            <a href="/about#values" class="readmore">Read more </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="card" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon"><img src="assets/img/values/positive.png" alt=""></div>
                        <div class="card-body">
                            <h5 class="card-title">Positive thinking</h5>
                            <p>Inculcate <strong style="color: #f48434; text-transform: uppercase;">Positive
                                    thinking</strong></p>
                            <a href="/about#values" class="readmore">Read more </a>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Why Us Section -->

    @include('pages.counter')

    <!-- ======= Services Section ======= -->

    <section id="mission" class="service-details">
        <div class="container">

            <div class="section-header pt-4 mt-4">
                <h2>Our products</h2>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/Health.png" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="/health">Health</a></h5>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/fire.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="/fire">Fire</a></h5>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/retirement.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="/retirement">Retirements</a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 d-flex align-items-stretch" data-aos="fade-up">
                    <div class="card">
                        <div class="card-img">
                            <img src="assets/img/education.jpg" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="/education">Education</a></h5>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- <section id="services" class="services">
        <div class="container">

            <div class="section-header pt-4 mt-4">
                <h2>Our Solutions</h2>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="fa fa-dribbble"></i></div>
                        <h4 class="title"><a href="">Future Protector Policy</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="fa fa-file"></i></div>
                        <h4 class="title"><a href="">Pension Policy</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="fa fa-tachometer"></i></div>
                        <h4 class="title"><a href="">Sisusetha Plus</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="fa fa-world"></i></div>
                        <h4 class="title"><a href="">Nemo Enim</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section> -->
    <!-- End Services Section -->

    <!-- ======= Gallery Section ======= -->
    <!--     <section id="gallery">

        <div class="container pb-0 mb-0">
            <div class="section-header">
                <h2>News and feeds</h2>
            </div>
        </div>

        <div class="gallery-slider swiper-container">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide"><a href="assets/img/gallery/1.jpg" class="gallery-lightbox"><img
                            src="assets/img/gallery/1.jpg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a href="assets/img/gallery/2.jpg" class="gallery-lightbox"><img
                            src="assets/img/gallery/2.jpg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a href="assets/img/gallery/3.jpg" class="gallery-lightbox"><img
                            src="assets/img/gallery/3.jpg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a href="assets/img/gallery/4.jpg" class="gallery-lightbox"><img
                            src="assets/img/gallery/4.jpg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a href="assets/img/gallery/5.jpg" class="gallery-lightbox"><img
                            src="assets/img/gallery/5.jpg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a href="assets/img/gallery/6.jpg" class="gallery-lightbox"><img
                            src="assets/img/gallery/6.jpg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a href="assets/img/gallery/7.jpg" class="gallery-lightbox"><img
                            src="assets/img/gallery/7.jpg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a href="assets/img/gallery/8.jpg" class="gallery-lightbox"><img
                            src="assets/img/gallery/8.jpg" class="img-fluid" alt=""></a></div>
            </div>
            <div class="row pb-3 mb-3">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <a href="/news">
                        <div class="text-center"><button type="submit">View more</button></div>
                    </a>
                </div>
                <div class="col-lg-4"></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </section> -->
    <!-- End Gallery Section -->


    <!-- ======= Subscribe Section ======= -->
    <section id="subscribe">
        <div class="container" data-aos="zoom-in">
            <div class="section-header">
                <h2>CoopLife Insurance</h2>
                <p>To be ever mindful of the needs of our customers, and thereby make ‘true protection’ a way of life,
                    via the provision of innovative yet affordable insurance solutions which conform to the highest
                    ethical and moral standards.</p>
            </div>
        </div>
    </section>
    <!-- End Subscribe Section -->

{{--     <div class="container-fluid mb-0 pb-0">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.5587926882478!2d79.85416034226733!3d6.897698276570037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2595d7bd00001%3A0x3ac2de6034b82d08!2sCooplife%20Insurance%20Head%20Office!5e0!3m2!1sen!2slk!4v1616484285323!5m2!1sen!2slk"
            width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
 --}}

{{-- @include('landing') --}}

</main><!-- End #main -->


@endsection