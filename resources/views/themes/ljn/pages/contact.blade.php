@extends('themes.ljn.layouts')
@section('content')
    <!--================Contact Area =================-->
    <section class="contact_area section_gap">
        <div class="container">
            <div class="row mb-3">
                <div class="col text-center">
                    <h2>OUR LOCATION</h2>
                    <p>Jl. Bahagia No.40, Panjunan, Kec. Lemahwungkuk, Kota Cirebon, Jawa Barat 45112</p>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-3">
                    <div class="contact_info">
                        <div class="info_item mb-3">
                            <i class="lnr lnr-home"></i>
                            <h6>Kota Cirebon, Jawa Barat</h6>
                        </div>
                        <div class="info_item mb-3">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6><a href="#">123456789</a></h6>
                        </div>
                        <div class="info_item mb-3">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">admin@adiva.co.id</a></h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <form class="row contact_form" action="#" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12 text-right">
                            <button type="submit" value="submit" class="btn theme_btn button_hover">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->
@endsection
