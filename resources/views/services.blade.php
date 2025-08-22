
@extends('layouts.vice_master')
@section("title", "Our Services | Moriah Care – Personalised Residential Care for Children")
@section("meta_description", "Explore Moriah Care\'s comprehensive services for children and young people with complex needs. From residential care to therapeutic support, discover how we empower every child to thrive.")
@section("meta_keywords", "Moriah Care Services, Child Residential Care, Therapeutic Support, Behavioural Support, SEMH, EBD, Autism, Attachment, Safe Homes, Children's Services")
@section('content')
    <!--======== Service Section ========-->
    <section class="service-section space">
        <div class="container">
            <div class="row gy-30">
                <!-- Single Item -->
                @foreach($services as $service)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-box" data-overlay="title" data-opacity="3">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/service/'.$service->image2) }}" alt="service">
                        </div>
                        <div class="service-content">
                            <div class="service-icon">
                                {{-- <img src="{{ asset('assets/img/icon/'.$service->icon) }}" alt="icon">   --}}
                            </div>
                            <h3 class="service-title"><a href="{{ url('service-details.html') }}">{{ $service->short_name }}</a>
                            </h3>
                            {{-- content --}}
                            {!! Str::limit($service->short_content, 100  ) !!}
                        </p>
                            {{-- endcontent --}}
                            <a href="{{ url('service/'.$service->id) }}" class="vs-btn style-2">See Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <!-- Single Item -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-box" data-overlay="title" data-opacity="6">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/service/s-2.jpg') }}" alt="service">
                        </div>
                        <div class="service-content">
                            <div class="service-icon">
                                <img src="{{ asset('assets/img/icon/sr-2.png') }}" alt="icon">
                            </div>
                            <h3 class="service-title"><a href="service-details.html">Daycare Service</a></h3>
                            <p class="service-text">Dynamically benchmark seamless growth strategies via
                                multidisciplinary initiatives. Credibly brand collaborative.</p>
                            <a href="service-details.html" class="vs-btn style-2">See Details</a>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-box" data-overlay="title" data-opacity="6">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/service/s-3.jpg') }}" alt="service">
                        </div>
                        <div class="service-content">
                            <div class="service-icon">
                                <img src="{{ asset('assets/img/icon/sr-3.png') }}" alt="icon">
                            </div>
                            <h3 class="service-title"><a href="{{ url('service-details.html') }}">Online Classes</a>
                            </h3>
                            <p class="service-text">Dynamically benchmark seamless growth strategies via
                                multidisciplinary initiatives. Credibly brand collaborative.</p>
                            <a href="service-details.html" class="vs-btn style-2">See Details</a>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-box" data-overlay="title" data-opacity="6">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/service/s-4.jpg') }}" alt="service">
                        </div>
                        <div class="service-content">
                            <div class="service-icon">
                                <img src="{{ asset('assets/img/icon/sr-4.png') }}" alt="icon">
                            </div>
                            <h3 class="service-title"><a href="service-details.html">Digital Learning</a></h3>
                            <p class="service-text">Dynamically benchmark seamless growth strategies via
                                multidisciplinary initiatives. Credibly brand collaborative.</p>
                            <a href="{{ url('service-details.html') }}" class="vs-btn style-2">See Details</a>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-box" data-overlay="title" data-opacity="6">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/service/s-5.jpg') }}" alt="service">
                        </div>
                        <div class="service-content">
                            <div class="service-icon">
                                <img src="{{ asset('assets/img/icon/sr-5.png') }}" alt="icon">
                            </div>
                            <h3 class="service-title"><a href="service-details.html">Childcare Service</a></h3>
                            <p class="service-text">Dynamically benchmark seamless growth strategies via
                                multidisciplinary initiatives. Credibly brand collaborative.</p>
                            <a href="service-details.html" class="vs-btn style-2">See Details</a>
                        </div>
                    </div>
                </div>
                <!-- Single Item -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-box" data-overlay="title" data-opacity="6">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/service/s-6.jpg') }}" alt="service">
                        </div>
                        <div class="service-content">
                            <div class="service-icon">
                                <img src="{{ asset('assets/img/icon/sr-6.png') }}" alt="icon">
                            </div>
                            <h3 class="service-title"><a href="{{ url('service-details.html') }}">Home Tutor</a></h3>
                            <p class="service-text">Dynamically benchmark seamless growth strategies via
                                multidisciplinary initiatives. Credibly brand collaborative.</p>
                            <a href="{{ url('service-details.html') }}" class="vs-btn style-2">See Details</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!--======== / Service Section ========-->

    <!--======== CTA Section ========-->
    <section class="cta-section space-shape-plus" data-bg-src="{{ asset('assets/img/bg/portrait-of-multi-cultural-primary-or-elementary-s-2024-10-19-16-25-47-utc.jpg') }}"
        data-opacity="3" data-overlay="custom">
        <div class="container text-center z-index-common">
            <div class="title-area mb-35 wow fadeInUp" data-wow-delay="0.1s">
                <span class="sub-title text-white text-shadow-lg">Join Our New Session</span>
                <h2 class="sec-title text-white text-shadow-lg">Space Available for New Residents <a class="d-block text-inherit"
                        href="tel:{{ $contact->mobile }}">{{ $contact->mobile }}</a></h2>
            </div>
            <a href="about.html" class="vs-btn wave-btn">Learn More</a>
        </div>
        <div class="section-before style-2"><img src="assets/img/shape/main-shape-before.png" alt="shape"></div>
        <div class="section-after style-2"><img src="{{ asset('assets/img/shape/main-shape-after.png') }}"
                alt="shape"></div>
    </section>
    <!--======== / CTA Section ========-->

    <!--======== Simple Section ========-->
    <section class="mockup1 space-extra-top" data-bg-src="{{ asset('assets/img/bg/youthful-intercultural-school-friends-with-soda-lo-2025-03-08-07-48-49-utc.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <img class="mb-70" src="{{ asset('assets/img/icon/mail-big-icon.png') }}" alt="icon">
                    <h2 class="h1" style="color:#ff5a00;">Now Accepting Placements </h2>
                    <p class="mb-35 text-dark text bg-white p-3 rounded">At <b>Moriah Care</b>, we provide safe, nurturing, and therapeutic homes for children and young people with complex emotional, behavioural, and social needs. Our trauma-informed team is committed to offering personalised care, stability, and genuine connection—empowering every child to heal, grow, and thrive.We are currently accepting new placements and welcome referrals from local authorities, agencies, and professionals seeking a high-quality residential setting that prioritises safeguarding, development, and long-term outcomes. </p>
                    <a href="{{ url('contact') }}" class="vs-btn wave-btn">Contact Us</a>
                </div>
            </div>
        </div>
    </section>
    <!--======== / Simple Section ========-->


   @endsection