@extends('pages.layout')

@section('title', 'Easy Pay | ')

@section('content')


<!-- <section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                data-aos="fade-up" data-aos-delay="200">
                <h1>Contact Us</h1>
                <h6> Home > Contact Us</h6>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                {{-- <img src="assets/img/hero-img.png" class="img-fluid animated" alt="">
                --}} </div>
        </div>
    </div>

</section> -->

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Easy Pay</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Easy Pay</li>
            </ol>
        </div>
    </div>
</section>
<!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<section id="about" class="mt-2 pt-2">
    <div class="container">
        <div class="section-header">
            <h2>Easy Pay</h2>
        </div>
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-3"></div>
            <div class="col-lg-8 col-md-8 col-sm-6 about-img">
                <img src="assets/img/easypay.png" alt="">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-3"></div>
        </div><br>
    </div>
</section>

<!-- End Contact Section -->

@endsection