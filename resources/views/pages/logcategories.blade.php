@extends('pages.layout')

@section('title', 'Users | ')

@section('content')


    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>User Section</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>User Section</li>
                </ol>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->
    <section id="about" class="">
        <div class="container">
            <div class="section-header">
                <h2>User Section</h2>
            </div>
            <div class="row">
                <div class="text-center col-lg-6 col-md-6 col-sm-12">
                    <a href="/membersignin"><button class="btn btn-success">Members Login</button></a>
                </div>
                <div class="text-center col-lg-6 col-md-6 col-sm-12">
                    <a href="/customersignin"><button class="btn btn-success">Customer Login</button></a>
                </div>
            </div>
        </div>
    </section><br><br><br><br><br><br>
    <!-- End About Section -->


@endsection
