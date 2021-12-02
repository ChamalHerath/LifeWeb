@extends('pages.layout')

@section('title', 'About Us | ')

@section('content')


<!-- ======= Breadcrumbs ======= -->
<section id="breadcrumbs" class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>About Us</h2>
            <ol>
                <li><a href="/">Home</a></li>
                <li>About Us</li>
            </ol>
        </div>
    </div>
</section>
<!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="">
    <div class="container">
        <div class="section-header">
            <h2>About CoopLife</h2>
        </div>
        <div class="row">
            <div class="col-lg-6 about-img">
                <img src="assets/img/about-img1.png" alt="">
            </div>

            <div class="col-lg-6 content">
                <ul>
                    <li><i class="fa fa-check-circle"></i> Facilitating you with the utmost freedom to live your life to
                        its full potential, we at COOPLIFE Insurance Limited believe in the sentiment that <strong>“Life
                            is to
                            be lived”</strong>. Since our inception, we have evolved into a comprehensive brand
                        portfolio where we
                        cater to the life insurance needs of individuals as well as groups coming from all walks of
                        life. </li><br>
                    <li><i class="fa fa-check-circle"></i> Our corporate stability comes from Cooperative Insurance Co.,
                        which was established in the year 1998 and started its operations in the year of 1999. Thus,
                        COOPLIFE is a result of the segregation process of composite insurance companies by the
                        Insurance Regulatory Commission of Sri Lanka (IRCSL) through the regulation of Insurance
                        Industry (Amendment) Act No. 3 of 2011. </li><br>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 content">
                <ul>
                    <li><i class="fa fa-check-circle"></i> Nurturing the lives of our customers, we stand as a fully
                        owned subsidiary of Cooperative Insurance Company Limited, which operates as 100% Sri Lankan
                        owned organization. Thus, our virtues come from places alike; we strive to ensure that each
                        stakeholder is given the supreme service that they truly deserve with a significant penetration
                        across urban, semi-urban as well as rural markets. Hence, our products stand out from the crowd
                        as per our mantra for success, which is a constant bespoke approach driven by innovation and
                        customer satisfaction. </li><br>
                    <li><i class="fa fa-check-circle"></i> As an organization that strives beyond the conventional
                        barriers
                        of the corporate culture, we believe in sustainability. A harmonious co-existence that elevates
                        the
                        living standards of our stakeholders through which we have earned a staggering number of
                        satisfied
                        customers over the years with life long partnerships. </li><br>
                </ul>
            </div>
            <div class="col-lg-6 about-img">
                <img src="assets/img/family.jpg" alt="">
            </div>
        </div>
        <div class="row content">
            <ul>
                <li><i class="fa fa-check-circle"></i> With an all-embracing glamorous product range to suite
                    everyone’s
                    needs, our prime objective is to convince customers in such a manner where Life Insurance is no
                    longer a luxury but an absolute necessity which comes along with the affordability across all
                    income
                    levels within the entire society which we survive. </li><br>
                <li><i class="fa fa-check-circle"></i> We take pride in being responsible for changing the customer
                    perception towards the Life Insurance business by crafting integrated stakeholder groups that reap
                    the benefits of our partnership by eradicating the exploitation and misbehavior to ensure security
                    and transparency for all… </li><br>
            </ul>
        </div>
    </div>
</section><br>
<!-- End About Section -->


<!-- ======= Why Us Section ======= -->
<section id="why-us" class="mt-0 pt-0">
    <div class="container" data-aos="fade-up">

        <div class="row counters" data-aos="fade-up" data-aos-delay="100">

            @include('pages.counter')

        </div>

    </div>
</section>
<!-- End Why Us Section -->

<!-- ======= Service Details Section ======= -->
<section id="mission" class="service-details">
    <div class="container">

        <div class="row">
            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="card">
                    <div class="card-img">
                        <img src="assets/img/service-details-1.jpg" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Our Vision</a></h5>
                        <p class="card-text"> Life insurance company that will stand <strong>"UNITED"</strong> with its
                            customers to the
                            very end.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="card">
                    <div class="card-img">
                        <img src="assets/img/service-details-4.jpg" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Our Mission</a></h5>
                        <p class="card-text">To be ever mindful of the needs of our customers, and thereby make ‘true
                            protection’ a way of life, via the provision of innovative yet affordable insurance
                            solutions which conform to the highest ethical and moral standards.</p>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- End Service Details Section -->

<!-- =======  F.A.Q Section ======= -->
<section id="faq">

    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <h2>Our Commitments</h2>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-9">

                <ul class="faq-list">

                    <li>
                        <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Customers <i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq1" class="collapse" data-bs-parent=".faq-list">
                            <p>1) Putting customer first in all decisions and undertakings
                            </p>
                            <p>2) Proactively respond to customers’ needs</p>
                            <p>3) Build loyalty and trustful for our customers</p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Shareholders <i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq2" class="collapse" data-bs-parent=".faq-list">
                            <p>1) Optimizing shareholders value by delivering all our services effectively and
                                efficiently
                            </p>
                            <p>2) Provide investors with steady growth in returns</p>
                            <p>3) Provide all shareholders with necessary security for their investments</p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Staff <i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq3" class="collapse" data-bs-parent=".faq-list">
                            <p>1) Maintain a challenging and rewarding working environment and culture that attracts,
                                retains and develop committed employees
                            </p>
                            <p>2) Guide all members of staff towards the attainment of self-actualization</p>
                        </div>
                    </li>

                    <li>
                        <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Regulatory Commission <i
                                class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i>
                        </div>
                        <div id="faq4" class="collapse" data-bs-parent=".faq-list">
                            <p>1) Commit to comply with laws, rules, regulations, ethics and standards of a good market
                                practice.
                            </p>
                            <p>2) Encourage industry conformance to the highest ethical and moral standards</p>
                            <p>3) Work for the furtherance of the insurance industry in Sri Lanka.</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</section>
<!-- End  F.A.Q Section -->

<!-- ======= Culture Section ======= -->
<section id="culture" class="">
    <div class="container mt-0 pt-0">
        <div class="section-header">
            <h2>Our Culture</h2>
        </div>
        <div class="row">
            <div class="col-lg-4 about-img">
                <img src="assets/img/about-img.png" alt="">
            </div>

            <div class="col-lg-8 content">
                <ul>
                    <li><i class="fa fa-check-circle"></i> Being a company formed by cooperative organizations, not by
                        choice, but by compulsion, attempts are being made to keep the identity through advocacy on
                        values maintained by a cooperative organization- self-help, democracy, equality, equity, and
                        solidarity. Company aspires to work within the ethical values of honesty, openness, social
                        responsibility and caring for others. </li><br>
                    <li><i class="fa fa-check-circle"></i> COOPLIFE Insurance attempts to maintain a participatory
                        governance system by working through committee system which has an Audit Committee, HR
                        Committee, Investment Committee and a Procurement committee for taking decisions in their
                        respective fields. </li><br>
                    <li><i class="fa fa-check-circle"></i> Worker welfare is an area of concern by the Company, for
                        which participatory Health and life Insurance scheme is set for the staff. They too are
                        supported by a Staff Welfare Association set for both companies – CICL and CIL. </li><br>
                </ul>
            </div>
        </div>
        <div class="row content">
            <ul>
                <li><i class="fa fa-check-circle"></i> Company HRD system offers free training and examination fees
                    for the Agents for their license and also reimbursement of the cost of examinations for other
                    staff in their respective professional courses. </li><br>
                <li><i class="fa fa-check-circle"></i> COOPLIFE is compliant company in terms of IRCSL requirements,
                    by having maintained capital adequacy, policies required by the legislators and also the
                    requirements by the Registrar of Companies. Company business decisions are taken well within the
                    regulatory and legal requirements and
                    maintain transparency in its operations.
                </li><br>
            </ul>
        </div>
    </div>
</section><br>
<!-- End About Section -->

<!-- ======= Services Section ======= -->
<section id="values" class="values">
    <div class="container">
        <div class="section-header">
            <h2>Our Values</h2>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                <div class="icon-box">
                    <div class="icon"><img src="assets/img/values/mutual.png" alt=""></div>
                    <p>Show <strong style="color: blue; text-transform: uppercase;">Mutual Respect</strong> in all our
                        interactions</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="fade-up"
                data-aos-delay="150">
                <div class="icon-box">
                    <div class="icon"><img src="assets/img/values/people.png" alt=""></div>
                    <p><strong style="color: blue; text-transform: uppercase;">Empower People</strong> to strive for
                        excellence</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="fade-up"
                data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><img src="assets/img/values/positive.png" alt=""></div>
                    <p>Inculcate <strong style="color: blue; text-transform: uppercase;">Positive thinking</strong></p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="450">
                <div class="icon-box">
                    <div class="icon"><img src="assets/img/values/inter.png" alt=""></i></div>
                    <p>Treasure <strong style="color: blue; text-transform: uppercase;">integrity</strong> and ethical
                        conduct</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="600">
                <div class="icon-box">
                    <div class="icon"><img src="assets/img/values/diver.png" alt=""></div>
                    <p>Foster <strong style="color: blue; text-transform: uppercase;">diversity</strong> as a corporate
                        strength</p>
                </div>
            </div>

            <!-- <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="fade-up" data-aos-delay="750">
                <div class="icon-box">
                    <div class="icon"><i class="bx bx-arch"></i></div>
                    <h4><a href="">Divera don</a></h4>
                    <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
                </div>
            </div> -->
        </div>
    </div>
</section><br><br>
<!-- End Services Section -->


@endsection