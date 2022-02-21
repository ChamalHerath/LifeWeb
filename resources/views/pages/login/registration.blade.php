@extends('pages.layout')

@section('title', 'Member Portal | ')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Member Portal</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Member Portal</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <div class="container mt-3">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                @csrf
                <form method="post" action=" {{ url('user-store') }} ">
                    <div class="card shadow mb-4">
                        <div class="car-header pt-2" style="background-color: #a8cf45">
                            <div style="text-transform: uppercase; font-weight: 700"
                                class="card-title font-weight-bold text-white text-center"> Customer Registration </div>
                        </div>

                        <div class="card-body">

                            @if (Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif

                            <div class="form-group">
                                <input type="text" name="first_name" id="first_name" class="form-control"
                                    placeholder="Enter First Name" value="{{ old('first_name') }}" />
                                {!! $errors->first('first_name', '<small class="text-danger">:message</small>') !!}
                            </div>

                            <div class="form-group mt-4">
                                <input type="text" name="last_name" id="last_name" class="form-control"
                                    placeholder="Enter Last Name" value="{{ old('last_name') }}" />
                                {!! $errors->first('last_name', '<small class="text-danger">:message </small>') !!}
                            </div>

                            <div class="form-group mt-4">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Enter E-mail"
                                    value="{{ old('email') }}" />
                                {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                            </div>

                            <div class="form-group mt-4">
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Enter Password" value="{{ old('password') }}" />
                                {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                            </div>

                            <div class="form-group mt-4">
                                <input type="password" name="confirm_password" id="confirm_password" class="form-control"
                                    placeholder="Confirm Password" value="{{ old('confirm_password') }}">
                                {!! $errors->first('confirm_password', '<small class="text-danger">:message</small>') !!}
                            </div>

                            <div class="form-group mt-4">
                                <input type="phone" name="phone" id="phone" class="form-control" placeholder="Enter Phone"
                                    value="{{ old('phone') }}">
                                {!! $errors->first('phone', '<small class="text-danger">:message</small>') !!}
                            </div>
                        </div>

                        <div class="card-footer d-inline-block">
                            <button type="submit" style="background-color: #a8cf45" class="btn  text-white"> Register
                            </button>
                            <p class="float-right mt-2"> Already have an account? <a href="{{ url('customer') }}"
                                    class="text-danger"> Login </a> </p>
                        </div>
                        @csrf
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- End Contact Section -->

@endsection
