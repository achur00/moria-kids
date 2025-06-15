@extends('layouts.vice_master')
@section('title', 'Contact Us')
@section('content')
<!-- Contact Three -->
<section class="contact-three">
    <div class="auto-container">
        <div class="row clearfix">
            <!-- Column -->
            <div class="contact-three_title-column col-lg-6 col-md-12 col-sm-12">
                <!-- Sec Title -->
                <div class="sec-title">
                    <div class="sec-title_title">Contact Us</div>
                    <h2 class="sec-title_heading">{{$contact->title}}</h2>
                    <div class="sec-title_text">{{$contact->content}}</div>
                </div>
                <ul class="contact-three_list">
                    <li>
                        <i><img src="assets/images/icons/map.svg" alt="" /></i>
                        Address
                        <strong>{{$contact->address}}</strong>
                    </li>
                    <li>
                        <i><img src="assets/images/icons/phone.svg" alt="" /></i>
                        Phone
                        <strong><a href="tel:{{$contact->mobile}}">{{$contact->mobile}}</a></strong>
                    </li>
                    <li>
                        <i><img src="assets/images/icons/phone.svg" alt="" /></i>
                        Phone
                        <strong><a href="tel:{{$contact->mobile2}}">{{$contact->mobile2}}</a></strong>
                    </li>
                    <li>
                        <i><img src="assets/images/icons/email.svg" alt="" /></i>
                        Email
                        <strong><a href="mailto:{{$contact->email}}">{{$contact->email}}</a></strong>
                    </li>
                </ul>
            </div>
            <!-- Column -->
            <div class="contact-three_form-column col-lg-6 col-md-12 col-sm-12">
                <div class="contact-three_form-outer">
                    <h3>Get a Free Quote</h3>
                     {{-- Handled by ContactController --}}
                    @if (session('success'))
                        <div class="alert alert-success">Message sent successfully</div>
                    @endif
                    @if($errors->has('capcha'))
                        <div class="alert alert-danger">{{ $errors->first('capcha') }}</div>
                    @endif

                    <div class="default-form contact-form">
                        <form method="POST" action="{{url('/message')}}" id="my-form">
                            @csrf
                            <div class="row clearfix">
                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="username" value="" placeholder="Name" required>
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <input type="email" name="email" value="" placeholder="Email" required>
                                </div>
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <input type="text" name="phone" value="" placeholder="Phone" required>
                                </div>
                                <!--Form Group-->
                                <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                    <select name="service" class="custom-select-box" required>
                                        <option value=''>Select Service</option>
                                        @foreach ( $services as $service )
                                        <option>{{$service->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea class="" name="message" placeholder="Write a Message" required></textarea>
                                </div>
                                <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}"></div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                    <button type="submit" class="theme-btn btn-style-one">
                                        <span class="btn-wrap">
                                            <span class="text-one">Send Now</span>
                                            <span class="text-two">Send Now</span>
                                        </span>
                                    </button>
                                </div>

                            </div>
                        </form>
                        {{-- <form action="">

                        </form> --}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Three -->

<!-- Map One -->
<section class="map-one">
    <div class="auto-container">
        <div class="map-one_map">
            {{-- <iframe width="820" height="560" id="gmap_canvas" src="https://maps.google.com/maps?q=636+5th+Ave%2C+New+York&t=&z=18&ie=UTF8&iwloc=&output=embed"></iframe> --}}
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507475.85646266135!2d2.949232773437503!3d6.438318400000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf7cc34c0018d%3A0x94eadaaebd8170ac!2s8%20Familoni%20Street%2C%20Igbo%20Efon.%20Eti-Osa%20Local%20Government.%20Epe%20Expressway.!5e0!3m2!1sen!2sng!4v1743822697847!5m2!1sen!2sng" width="820" height="560" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<!-- End Map One -->



@endsection
