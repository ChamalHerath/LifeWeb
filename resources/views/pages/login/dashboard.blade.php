@extends('pages.layout')

@section('title', 'Member Portal | ')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <a style="font-weight: 600" class="nav-link text-white"> Welcome: {{ ucfirst(Auth()->user()->first_name) }}
                </a>
                <ol>
                    <li><a class="nav-link" href="{{ url('logout') }}"> Logout </a></li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->


    <br><br><br><br>


    <!-- End Contact Section -->

@endsection
