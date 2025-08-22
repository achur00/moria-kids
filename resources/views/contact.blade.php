@extends('layouts.vice_master')
@section('title', 'Contact Us')
@section('content')
<!--======== Contact Us Section ========-->
    <section class="contact-section space-page">
        <div class="container">
            <div class="row gx-50 gy-30">
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="contact-form-box">
                        <h2 class="contact-title">Leave a Message</h2>
                       {!! $contact->content !!}
                        <form action="assets/mail.php" method="POST" class="contact-form ajax-contact">
                            <div class="row">
                                <div class="form-group col-12">
                                    <label for="name" class="form-label">Your Name*</label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="David Smith..." required>
                                </div>
                                <div class="form-group col-12">
                                    <label for="email" class="form-label">Your Email*</label>
                                    <input type="email" class="form-control" name="email" id="email" placeholder="info@example.com" required>
                                </div>
                                <div class="form-group col-12">
                                    <label for="message" class="form-label">Your Message*</label>
                                    <textarea class="form-control" name="message" id="message" placeholder="Describe Your Opinion" required></textarea>
                                </div>
                                <div class="form-group col-12">
                                    <button type="submit" class="vs-btn wave-btn">Send Now</button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.1s">
                    <div class="contact-info-box">
                        <h2 class="contact-title">Our Information</h2>
                        <div class="info-media">
                            <div class="media-icon">
                                <img src="{{ asset('assets/img/icon/location2.png') }}" alt="icon">
                            </div>
                            <div class="media-body">
                                <h4 class="info-title">Office Address:</h4>
                                <p class="info-text">{{ $contact->address }}</p>
                            </div>
                        </div>
                        <div class="info-media">
                            <div class="media-icon">
                                <img src="{{ asset('assets/img/icon/phone2.png') }}" alt="icon">
                            </div>
                            <div class="media-body">
                                <h4 class="info-title">Call Us For Help:</h4>
                                <p class="info-text"><a href="tel:{{ $contact->mobile }}">{{ $contact->mobile }}</a> 
                                    {{-- (or) <a href="tel:+25636542156">+256-3654-2156</a>s --}}
                                </p>
                            </div>
                        </div>
                        <div class="info-media">
                            <div class="media-icon">
                                <img src="{{ asset('assets/img/icon/email2.png') }}" alt="icon">
                            </div>
                            <div class="media-body">
                                <h4 class="info-title">Mail info:</h4>
                                <p class="info-text"><a href="mailto:$contact->email">{{ $contact->email }}</a> 
                                    {{-- <a href="mailto:info@example.com">info@example.com</a> --}}
                                </p>
                            </div>
                        </div>
                        <div class="contact-location">
                            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.701093396655!2d0.18217787696260737!3d51.46364421389849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8ae28f42e550f%3A0x3f6926ef91bbca65!2sHowbury%20House%2C%20Texcel%20Business%20Park!5e0!3m2!1sen!2sng!4v1750034898422!5m2!1sen!2sng" allowfullscreen="" loading="lazy"></iframe> --}}

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.701093396655!2d0.18217787696260737!3d51.46364421389849!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8ae28f42e550f%3A0x3f6926ef91bbca65!2sHowbury%20House%2C%20Texcel%20Business%20Park!5e0!3m2!1sen!2sng!4v1750034898422!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======== / Contact Us Section ========-->


@endsection