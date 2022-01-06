@extends('pages.layout')

@section('title', 'Branch Network | ')

@section('content')

@include('pages.branches')

<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Branch Network</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Branch Network</li>
            </ol>
        </div>
    </div>
</section>
<!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="mb-0 pb-0">
    <div class="container">
        <div class="section-header">
            <h2>Branch Network</h2>
        </div>
    </div>
</section>
<!-- End About Section -->

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="wrap">
                <div id="map-canvas"></div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 text-left"><br><br>
            <h3 style="text-transform: uppercase; font-weight: bold; font-family: Arial, Helvetica, sans-serif">Branch :</h3>
            <h4 style="text-transform: uppercase; font-weight: bold; font-family: Arial, Helvetica, sans-serif">TP :</h4>
        </div>
    </div>
</div><br><br>


@endsection