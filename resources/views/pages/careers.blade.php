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

    <!-- =======  F.A.Q Section ======= -->
    <section id="faq">

        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Available Opportunities</h2>
            </div>

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-9">

                    <ul class="faq-list">

                        <li>
                            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Branch Managers / Branch
                                OIC's / Sales Managers - Life Insurance <i class="bi bi-chevron-down icon-show"></i><i
                                    class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                                <img class="img-fluid" src="assets/img/vacancy/vacancy1.jpg" alt="">
                            </div>
                        </li>

                        {{-- <li>
                            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Shareholders <i
                                    class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                                <img class="img-fluid" src="assets/img/vacancy/vacancy1.jpg" alt="">
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Staff <i
                                    class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                                <img class="img-fluid" src="assets/img/vacancy/vacancy1.jpg" alt="">
                            </div>
                        </li>

                        <li>
                            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Regulatory Commission <i
                                    class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                            </div>
                            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                                <img class="img-fluid" src="assets/img/vacancy/vacancy1.jpg" alt="">
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>

    </section>
    <!-- End  F.A.Q Section -->


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
                    <p>CoopLife Insurance continues to recruit young, energitic, talented and performance driven
                        individuals(Male & Female) who are mentored,
                        trained and fostered into our synergytic team to support the core values and business principles of
                        the
                        Company in an integrity manner, performance driven, results oriented culture and then develop to
                        become our
                        future leaders.</p><br>
                    <!-- <p>Need admin level access to add Career opportunities.</p> -->

                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="" data-aos="fade-left" data-aos-delay="100">
                        <form method="post" action="{{ url('careers/send') }}">
                            @csrf
                            <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Name"
                                required><br>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                placeholder="Email" required><br>
                            <input type="tel" name="tel" class="form-control" id="exampleInputPhone"
                                placeholder="Phone Number" required><br>
                            <input type="text" name="subject" class="form-control" id="exampleSubject"
                                placeholder="Subject" required><br>
                            <textarea class="form-control" name="description" placeholder="Description"
                                id="exampleDescription" cols="65" rows="7"></textarea><br><label for="myfile"><i
                                    class="fa fa-paperclip" aria-hidden="true"></i> Upload your CV :</label>
                            <input type="file" id="cv" name="cv" required><br><br>
                            <button type="submit" class="btn-read-more">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br>


@endsection
