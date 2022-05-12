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
                <h2 style="font-size: 24px">පැමිණිලි ඉදිරිපත් කිරීමේ පෝරමය | முறைப்பாட்டைச் சமர்ப்பிக்கும் படிவம் |
                    Complaint Submission Form</h2>
            </div>

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="text-align: center; list-style: none;">{{ $error }}</li>
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
                    <form method="POST" action="{{ route('complains.save') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <div class="row">
                                    <label style="font-weight: 600" class="mb-2" for="exampleInputName">Your
                                        Name</label>
                                    <div class="col-md-3">
                                        <select class="form-select form-select-md" name="title"
                                            aria-label=".form-select-sm example">
                                            <option selected disabled selected>Title</option>
                                            <option value="Mr">Mr.</option>
                                            <option value="Mrs">Mrs.</option>
                                            <option value="Rev">Rev.</option>
                                        </select>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6 mt-3 mt-md-0">
                                <label style="font-weight: 600" class="mb-2" for="exampleInputEmail">Your
                                    Email</label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="you@ymail.com">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group mt-4 col-md-6">
                                <label style="font-weight: 600" class="mb-2" for="exampleInputReason">Your
                                    Complaint About</label>
                                <select class="form-select form-select-md" name="subject"
                                    aria-label=".form-select-sm example">
                                    <option selected disabled selected>Please Select</option>
                                    <option value="Service">Our Service</option>
                                    <option value="Products">Our Products</option>
                                    <option value="People">Our People</option>
                                    <option value="Process">Our Process</option>
                                    <option value="Other">Other ...</option>
                                </select>
                            </div>

                            <div class="form-group mt-4 col-md-6">
                                <label style="font-weight: 600" class="mb-2" for="exampleInputPolicyName">Your
                                    Policy Number</label>
                                <input type="text" class="form-control" name="policyno" id="policyno"
                                    placeholder="Policy No.">
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group col-md-6 mt-4">
                                <label style="font-weight: 600" class="mb-2" for="exampleInputPhoneNo">Your
                                    Phone Number</label>
                                <input type="number" class="form-control" name="phonenumber" id="phonenumber"
                                    placeholder="0xxxxxxxxx">
                            </div>

                            <div class="form-group mt-4 col-md-6">
                                <label style="font-weight: 600" class="mb-2" for="exampleInputNIC">Your
                                    NIC</label>
                                <input type="text" class="form-control" name="nic" id="nic" placeholder="0000000000V">
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group mt-4 col-md-6">
                                <label style="font-weight: 600" class="mb-2" for="exampleInputMethod">How Should
                                    We
                                    Contact you ?</label><br>
                                <select class="form-select form-select-md" name="contactmethod"
                                    aria-label=".form-select-sm example">
                                    <option value="" disabled selected>Select Method</option>
                                    <option value="Phone">Telephone</option>
                                    <option value="Email">Email</option>
                                    <option value="Letter">Letter</option>
                                </select>
                            </div>

                            <div class="form-group mt-4 col-md-6">
                                <label style="font-weight: 600" class="mb-2" for="exampleInputName">I have a
                                    ...</label>
                                <select class="form-select form-select-md" name="solutiontype"
                                    aria-label=".form-select-sm example">
                                    <option value="" disabled selected>Select Method</option>
                                    <option value="Suggestion">Suggestion</option>
                                    <option value="Complaint">Complaint</option>
                                </select>
                            </div>

                        </div>

                        <div class="row mt-3">
                            <label style="font-weight: 600" class="mb-2" for="exampleInputName">Tell us more
                                ...</label>
                            <textarea id="message" name="message" rows="6" cols="10"
                                placeholder="About Your Suggestion or Complaint ..."></textarea>
                        </div>

                        <div class="text-center mt-5"><button class="btn btn-success" name="send"
                                type="submit">SEND</button></div>
                    </form>
                </div>
            </div>
        </div>
    </section><br><br><br><br><br><br>
    <!-- End About Section -->


@endsection
