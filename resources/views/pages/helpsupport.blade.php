@extends('pages.layout')

@section('title', 'Help & Support | ')

@section('content')


    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Help & Support</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Help & Support</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->
    <section id="about" class="">
        <div class="container">
            <div class="section-header">
                <h2>Help & Support</h2>
            </div>
            <div class="row">
                <div class="text-center col-lg-6 col-md-6 col-sm-12">
                    <a href="/complains"><button class="btn btn-success">Customer Complains</button></a>
                </div>
                <div class="text-center col-lg-6 col-md-6 col-sm-12">
                    <a href="/procedure"><button class="btn btn-success">CoopLife Customer Complain Handling
                            Procedure</button></a>
                </div>
            </div>
        </div>
    </section><br><br><br><br><br><br>
    <!-- End About Section -->


@endsection
