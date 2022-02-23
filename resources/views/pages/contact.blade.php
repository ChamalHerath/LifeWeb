@extends('pages.layout')

@section('title', 'Contact Us | ')

@section('content')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Contact</h2>
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Contact</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">

        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Reach Us</h2>
            </div>

            <div class="row contact-info">

                <div class="col-md-3">
                    <div class="contact-address">
                        <i class="fa fa-map-marker"></i>
                        <h3>Address</h3>
                        <address><strong>Cooplife Insurance Limited</strong><br>
                            Coop House, 455, Galle Road, Colombo 03</address>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="contact-phone">
                        <i class="fa fa-phone"></i>
                        <h3>Phone Number</h3>
                        <p><a href="">+94 11 2556 567</a></p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="contact-fax">
                        <i class="fa fa-fax"></i>
                        <h3>Fax</h3>
                        <p><a href="">+94 11 2556 760</a></p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="contact-email">
                        <i class="fa fa-envelope-o"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:info@coopinsu.com">info.life@coopinsu.com</a></p>
                    </div>
                </div>

            </div>

            <div class="container mb-4">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.5587926882478!2d79.85416034226733!3d6.897698276570037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2595d7bd00001%3A0x3ac2de6034b82d08!2sCooplife%20Insurance%20Head%20Office!5e0!3m2!1sen!2slk!4v1616484285323!5m2!1sen!2slk"
                    width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="section-header pt-4 mt-4">
                <h2>Testimonials</h2>
                <!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam perferendis fugit at facilis provident-->
                <!--    sequi delectus voluptates tenetur voluptatem veritatis?</p>-->
            </div>



            {{-- Feedback Section --}}
            <div class="form">
                {{ csrf_field() }}
                <form action="{{ url('sendemail/send') }}" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required>
                        </div>
                        <div class="form-group col-md-6 mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone Number"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                            required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    </div><br>
                    {{-- <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div> --}}
                    <div class="text-center"><button class="btn btn-success" name="send" type="submit">Send
                            Feedback</button></div>
                </form>
            </div>

        </div>
    </section>

    <!-- End Contact Section -->

@endsection
