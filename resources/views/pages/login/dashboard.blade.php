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

    <!-- ======= About Section ======= -->
    <section id="about" class="documents">
        <div class="container">
            <div class="section-header">
                <h2>Knowledge Centre</h2>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center details order-2 order-lg-1">
                    <div data-aos="fade-left" data-aos-delay="100">
                        <p style="font-weight: bold">SINHALA</p>
                        <div class="section-title" data-aos="fade-right" data-aos-delay="100">
                            <a href="Co-Operative Insurance _AR_2020.pdf"><button title="Click to Download"
                                    class="btn-read-more"><img src="assets/img/pdf.png" alt="">Annual
                                    Reports 2020</button></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center order-1 order-lg-2">
                    <div class="section-title" data-aos="fade-right" data-aos-delay="100">
                        <p style="font-weight: bold">ENGLISH</p>
                        <a href="Co-op_Insurance_AR_2020_English.pdf"><button title="Click to Download"
                                class="btn-read-more"><img src="assets/img/pdf.png" alt="">Annual
                                Reports 2020</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br>
    <!-- End About Section -->


    <br><br><br><br>


    <!-- End Contact Section -->

@endsection
