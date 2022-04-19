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

<!-- ======= About Section ======= -->
<section id="about" class="">
    <div class="container">
        <div class="section-header">
            <h2>Gallery</h2>
        </div>
        <div class="row">
            <div class="col-lg-4"><img style="display: block; height: 80%; width: 100%; object-fit: cover;" src="assets/img/gallery/1.jpg" alt="" srcset=""></div>
            <div class="col-lg-4"><img style="display: block; height: 80%; width: 100%; object-fit: cover;" src="assets/img/gallery/2.jpg" alt="" srcset=""></div>
            <div class="col-lg-4"><img style="display: block; height: 80%; width: 100%; object-fit: cover;" src="assets/img/gallery/3.jpg" alt="" srcset=""></div>
        </div>
        <div class="row">
            <div class="col-lg-4"><img style="display: block; height: 80%; width: 100%; object-fit: cover;" src="assets/img/gallery/4.jpg" alt="" srcset=""></div>
            <div class="col-lg-4"><img style="display: block; height: 80%; width: 100%; object-fit: cover;" src="assets/img/gallery/5.jpg" alt="" srcset=""></div>
            <div class="col-lg-4"><img style="display: block; height: 80%; width: 100%; object-fit: cover;" src="assets/img/gallery/6.jpg" alt="" srcset=""></div>
        </div>
        <div class="row">
            <div class="col-lg-4"><img style="display: block; height: 80%; width: 100%; object-fit: cover;" src="assets/img/gallery/7.jpg" alt="" srcset=""></div>
            <div class="col-lg-4"><img style="display: block; height: 80%; width: 100%; object-fit: cover;" src="assets/img/gallery/8.jpg" alt="" srcset=""></div>
            <div class="col-lg-4"><img style="display: block; height: 80%; width: 100%; object-fit: cover;" src="assets/img/gallery/9.jpg" alt="" srcset=""></div>
        </div>
        <div class="row">
            <div class="col-lg-4"><img style="display: block; height: 80%; width: 100%; object-fit: cover;" src="assets/img/gallery/10.jpeg" alt="" srcset=""></div>
            <div class="col-lg-4"><img style="display: block; height: 80%; width: 100%; object-fit: cover;" src="assets/img/gallery/11.jpeg" alt="" srcset=""></div>
            <div class="col-lg-4"><img style="display: block; height: 80%; width: 100%; object-fit: cover;" src="assets/img/gallery/12.jpeg" alt="" srcset=""></div>
        </div>
        <div class="row">
            <div class="col-lg-4"><img style="display: block; height: 80%; width: 100%; object-fit: cover;" src="assets/img/gallery/13.jpeg" alt="" srcset=""></div>
            <div class="col-lg-4"><img style="display: block; height: 80%; width: 100%; object-fit: cover;" src="assets/img/gallery/14.jpg" alt="" srcset=""></div>
            <div class="col-lg-4"></div>
        </div>
    </div>
</section><br>
<!-- End About Section -->


@endsection