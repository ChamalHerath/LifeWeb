@extends('pages.layout')

@section('title', 'Our Leaderships | ')

@section('content')


<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
            <h2>Our Leadership</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>Our Leadership</li>
            </ol>
        </div>

    </div>
</section>
<!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
{{-- <section id="about" class="">
    <div class="container">
        <div class="section-header">
            <h2>Our Leadership</h2>
        </div>
    </div>
</section><br> --}}
<!-- End About Section -->

<!-- ======= Our Team Section ======= -->
<section id="team" class="team section-bg mt-4 pt-4">
    <div class="container">
            <div class="section-header">
                <h2 style="color: #a8cf45">Our Leadership</h2>
            </div>
        <div class="row">

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up">
                    <div class="member-img">
                        <img src="assets/img/team/12.jpg" class="img" alt="">
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Mr. W. Ranasinghe</h4>
                        <span>Managing Director</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/team/1.jpg" class="img" alt="">
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Mr. W. M. K. Bandara</h4>
                        <span>General Manager - Technical</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                        <img src="assets/img/team/7.jpg" class="img" alt="">
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Mrs. B. P. S. Kusumalatha</h4>
                        <span>Assistant General Manager</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                        <img src="assets/img/team/6.jpg" class="img" alt="">
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Mrs. W. A. L. W. Perera</h4>
                        <span>Manager - Finance</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up">
                    <div class="member-img">
                        <img src="assets/img/team/14.jpg" class="img" alt="">
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Mr. S. G. Rathnapala</h4>
                        <span>Assistant General Manager</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/team/9.jpg" class="img" alt="">
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Mr. D. U. P. Rajapaksha</h4>
                        <span>Manager - National Sales</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                        <img src="assets/img/team/3.jpg" class="img" alt="">
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Mrs. R. T. K. Hakmana</h4>
                        <span>Manager - <br> Life Operations & Services</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                        <img src="assets/img/team/4.jpg" class="img" alt="">
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Mrs. P. H. K. Perera</h4>
                        <span>Accountant</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up">
                    <div class="member-img">
                        <img src="assets/img/team/5.jpg" class="img" alt="">
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Mr. B. S. Mendis</h4>
                        <span>Assistant Accountant</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/team/11.jpg" class="img" alt="">
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Mr. P. Jayathunga</h4>
                        <span>Assistant Accountant</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                        <img src="assets/img/team/13.jpg" class="img" alt="">
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Mr. R. M. K. Rajakaruna</h4>
                        <span>Regional Manger - Anuradhapura</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                        <img src="assets/img/team/8.jpg" class="img" alt="">
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Mr. A. Ranjith</h4>
                        <span>Regional Manger - North</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up">
                    <div class="member-img">
                        <img src="assets/img/team/2.jpg" class="img" alt="">
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Mr. H. K. Saparamadu</h4>
                        <span>Regional Manger - Colombo</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="assets/img/team/10.jpg" class="img" alt="">
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Mr. D. M. S. Jayantha</h4>
                        <span>Regional Manger - Eastern</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                        <img src="assets/img/team/15.jpg" class="img" alt="">
                        <div class="social">
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-instagram"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Mr. S. A. G. A. Sampath</h4>
                        <span>Regional Manger - Southern</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container d-flex justify-content-center mt-5 pt-5">
       <a style="text-decoration: none !important;" href="/nbrt"><button class="btn btn-primary">
        NBRT Members <i class="fa fa-hand-o-right" aria-hidden="true"></i>
    </button></a>
    </div>
</section><br><br>
<!-- End Our Team Section -->

@endsection