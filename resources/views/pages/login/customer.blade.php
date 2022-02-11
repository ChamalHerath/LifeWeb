@extends('pages.layout')

@section('title', 'Customer Portal | ')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Customer Portal</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Customer Portal</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                <form method="post" action="{{ url('login') }}">

                    @csrf
                    <div class="card shadow">
                        <div class="car-header pt-2" style="background-color: #a8cf45">
                            <div style="text-transform: uppercase; font-weight: 700"
                                class="card-title font-weight-bold text-white text-center"> Customer Login </div>
                        </div>

                        <div class="card-body">
                            @if (Session::has('error'))
                                <div class="alert alert-danger">
                                    {{ Session::get('error') }}
                                    @php
                                        Session::forget('error');
                                    @endphp
                                </div>
                            @endif


                            <div class="form-group">
                                <input type="text" name="email" id="email" class="form-control" placeholder="E-mail"
                                    value="{{ old('email') }}" />
                                {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                            </div>

                            <div class="form-group mt-4">
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Password" value="{{ old('password') }}" />
                                {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                            </div>
                        </div>

                        <div class="card-footer d-inline-block">
                            <button type="submit" style="background-color: #a8cf45" class="btn text-white"> Login
                            </button><br><br>
                            <p class="float-right mt-2"> Don't have an account? <a href="{{ url('user-registration') }}"
                                    class="text-danger"> Register </a> </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><br><br><br>
    <!-- End Contact Section -->

@endsection
