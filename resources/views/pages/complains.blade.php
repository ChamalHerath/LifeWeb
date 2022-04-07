@extends('pages.layout')

@section('title', 'Customer Complaint | ')

@section('content')


    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Customer Complaint</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->
    <section id="about" class="">
        <div class="container">
            <div class="section-header">
                <h2>Customer Complaint</h2>
            </div>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <strong>{{ $message }}</strong>
                </div>
            @endif

            <div class="row">
                <div class="form">
                    <form method="" action="">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <div class="row">
                                    <label style="font-weight: 600" class="mb-2" for="exampleInputName">Your
                                        Name</label>
                                    <div class="col-md-3">
                                        <select class="form-select form-select-md" name="salutation"
                                            aria-label=".form-select-sm example">
                                            <option selected>Select</option>
                                            <option value="1">Mr.</option>
                                            <option value="2">Mrs.</option>
                                            <option value="3">Rev.</option>
                                        </select>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Name"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                <label style="font-weight: 600" class="mb-2" for="exampleInputName">Your
                                    Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="you@ymail.com" required>
                            </div>

                        </div>


                        <div class="row">
                            <div class="form-group mt-4 col-md-6">
                                <label style="font-weight: 600" class="mb-2" for="exampleInputName">Your
                                    Complaint About</label>
                                <select class="form-select form-select-md" name="problem"
                                    aria-label=".form-select-sm example">
                                    <option selected>Please Select</option>
                                    <option value="1">Our Service</option>
                                    <option value="2">Our Products</option>
                                    <option value="3">Our People</option>
                                    <option value="3">Our Process</option>
                                    <option value="3">Other ...</option>
                                </select>
                            </div>

                            <div class="form-group mt-4 col-md-6">
                                <label style="font-weight: 600" class="mb-2" for="exampleInputName">Your
                                    Policy Number</label>
                                <input type="text" class="form-control" name="policyNo" id="policyNo"
                                    placeholder="Policy No." required>
                            </div>

                        </div>


                        <div class="row">
                            <div class="form-group col-md-6 mt-4">
                                <label style="font-weight: 600" class="mb-2" for="exampleInputName">Your
                                    Phone Number</label>
                                <input type="number" class="form-control" name="tel" id="tel" placeholder="0xxxxxxxxx"
                                    required>
                            </div>

                            <div class="form-group mt-4 col-md-6">
                                <label style="font-weight: 600" class="mb-2" for="exampleInputName">Your
                                    NIC</label>
                                <input type="text" class="form-control" name="nic" id="nic" placeholder="0000000000V"
                                    required>
                            </div>

                        </div>


                        <div class="row">
                            <div class="form-group mt-4 col-md-6">
                                <label style="font-weight: 600" class="mb-2" for="exampleInputName">How Should We
                                    Contact you ?</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">PHONE</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">EMAIL</label>
                                </div>
                            </div>

                            <div class="form-group mt-4 col-md-6">
                                <label style="font-weight: 600" class="mb-2" for="exampleInputName">I have a
                                    ...</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1" checked>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Suggestion
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Complaint
                                    </label>
                                </div>
                            </div>

                        </div>


                        <div class="row mt-3">
                            <label style="font-weight: 600" class="mb-2" for="exampleInputName">Tell us more
                                ...</label>
                            <textarea id="more" name="more" rows="6" cols="10"></textarea>
                        </div>


                        <div class="text-center mt-5"><button class="btn btn-success" name="send"
                                type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section><br><br><br><br><br><br>
    <!-- End About Section -->


@endsection
