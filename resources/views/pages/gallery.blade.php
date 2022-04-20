@extends('pages.layout')

@section('title', 'Gallery | ')

@section('content')


    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Gallery</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Gallery</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- ======= Gallery Section ======= -->
    <section id="gallery">

        <div class="container pb-0 mb-0">
            <div class="section-header">
                <h2>Gallery</h2>
            </div>
        </div>

        <div class="gallery-slider swiper-container mt-0 pt-0">
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
                <div class="swiper-slide"><a href="assets/img/gallery/9.jpg" class="gallery-lightbox"><img
                            src="assets/img/gallery/9.jpg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a href="assets/img/gallery/10.jpeg" class="gallery-lightbox"><img
                            src="assets/img/gallery/10.jpeg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a href="assets/img/gallery/11.jpeg" class="gallery-lightbox"><img
                            src="assets/img/gallery/11.jpeg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a href="assets/img/gallery/12.jpeg" class="gallery-lightbox"><img
                            src="assets/img/gallery/12.jpeg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a href="assets/img/gallery/13.jpeg" class="gallery-lightbox"><img
                            src="assets/img/gallery/13.jpeg" class="img-fluid" alt=""></a></div>
                <div class="swiper-slide"><a href="assets/img/gallery/14.jpg" class="gallery-lightbox"><img
                            src="assets/img/gallery/14.jpg" class="img-fluid" alt=""></a></div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </section>
    <!-- End Gallery Section -->


@endsection
