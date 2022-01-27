@extends('pages.layout')

@section('title', 'Careers | ')

@section('content')


<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Join Our Team</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Careers</li>
            </ol>
        </div>
    </div>
</section>
<!-- End Breadcrumbs -->


<!-- End Hero -->
<section id="team" class="team section-bg pt-4 mt-4">
    <div class="container">
        <div class="section-header">
            <h2 style="color: #a8cf45 !important">Careers</h2>
        </div>
        <div class="row" id="cv">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" data-aos="fade-right" data-aos-delay="100">
                <h2>JOIN With us</h2>
                <h4>Being with CoopLife Insurance Family is not just a job - But It's our passion</h4>
                <p>CoopLife Insurance continues to recruit young, energitic, talented and performance driven individuals(Male & Female) who are mentored,
                    trained and fostered into our synergytic team to support the core values and business principles of the
                    Company in an integrity manner, performance driven, results oriented culture and then develop to become our
                    future leaders.</p><br>
                <!-- <p>Need admin level access to add Career opportunities.</p> -->

            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="" data-aos="fade-left" data-aos-delay="100">
                    <form action="">
                        <input type="text" class="form-control" id="exampleInputName" placeholder="Name" required><br>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"
                            required><br>
                        <input type="tel" class="form-control" id="exampleInputPhone" placeholder="Your Phone Number"
                            required><br>
                        <input type="text" class="form-control" id="exampleNIC" placeholder="NIC / Passport ID"
                            required><br>
                        <textarea class="form-control" placeholder="Cover Letter" id="" cols="65"
                            rows="7"></textarea><br><label for="myfile"><i class="fa fa-paperclip"
                                aria-hidden="true"></i> Upload your CV :</label>
                        <input type="file" id="myfile" name="myfile" required><br><br>
                        <button type="submit" class="btn-read-more">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section><br><br>


@endsection