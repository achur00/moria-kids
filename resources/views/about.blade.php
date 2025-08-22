@extends('layouts.vice_master')
@section('title',$page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)
@section('content')

      <!--======== About Section ========-->
    <section class="about-section space">
        <div class="container">
            <div class="row align-items-center gy-30">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <div class="img-box-2">
                        <img src="assets/img/normal/living-life-as-carefree-as-i-can-shot-of-an-adora-2025-04-06-12-47-12-utc-1.jpg" alt="photo" class="big-img">
                        <img src="assets/img/normal/germany-cologne-boy-2-3-years-looking-away-sm-2024-09-21-17-28-38-utc-1.jpg" alt="photo" class="small-img">
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInRight" data-wow-delay="0.1s">
                    <div class="text-center text-lg-start">
                        <span class="sub-title">About Moriah Care Service</span>
                        <h2 class="sec-title big-title">Special Care For Your Children</h2>
                        <p class="fs-md mb-30"><p>Moriah Care Service is dedicated to providing safe, nurturing homes for children with complex emotional and behavioural needs. With compassionate staff and tailored support, we help every child heal, grow, and thrive in a stable, loving environment.</p>
</p>

                        <div class="call-media">
                            <div class="media-icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="media-body">
                                <span class="media-label">Call Anytime 24/7</span>
                                <p class="media-info"><a href="tel:{{ $contact->mobile }}" class="text-inherit">{{ $contact->mobile }} </a></p>
                            </div>
                        </div>

                        <a href="contact.html" class="vs-btn wave-btn style-1">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-mockup shapePulse d-none d-hd-block" data-bottom="40%" data-left="6%"><img src="assets/img/icon/dog.png" alt="shapes"></div>
        <div class="shape-mockup rotate d-none d-md-block" data-bottom="40%" data-right="6%"><img src="assets/img/icon/star.png" alt="shapes"></div>
    </section>
    <!--======== / About Section ========-->

        <!--======== Why Section ========-->
        @include('partials.why')
    <!--======== / Why Section ========-->

    <!--======== Counter Section ========-->
    @include('partials.counter')

    <!--======== / Counter Section ========-->

    <!--======== Process Section ========-->
    <section class="process-section space-top space-bottom-shape2-plus">
        <div class="container">
            <div class="row mb-20 text-center justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-9">
                    <div class="title-area">
                        <span class="sub-title"> Guiding families</span>
                        <h2 class="sec-title">Your Journey with Moriah Care</h2>
                    </div>
                </div>
            </div>
            <div class="process-area">
                <div class="row gy-60 justify-content-between">
                    <!-- Single Item -->
                    <div class="col-auto process-box wow fadeInUp" data-wow-delay="0.1s">
                        <div class="process-box-body">
                            <span class="process-number">01</span>
                            <div class="process-content">
                                <div class="process-icon">
                                    <img src="{{ asset('assets/img/icon/process2-1.png') }}" alt="icon">
                                </div>
                                <h5 class="process-name"><a href="service.html">Find A Service Now</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <div class="col-auto process-box wow fadeInUp" data-wow-delay="0.1s">
                        <div class="process-box-body">
                            <span class="process-number">02</span>
                            <div class="process-content">
                                <div class="process-icon">
                                    <img src="{{ asset('assets/img/icon/process2-2.png') }}" alt="icon">
                                </div>
                                <h5 class="process-name"><a href="contact.html">Get in  touch</a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <div class="col-auto process-box wow fadeInUp" data-wow-delay="0.1s">
                        <div class="process-box-body">
                            <span class="process-number">03</span>
                            <div class="process-content">
                                <div class="process-icon">
                                    <img src="{{ asset('assets/img/icon/resident.png') }}" alt="icon">
                                </div>
                                <h5 class="process-name"><a href="classes.html">Join our new residents  </a></h5>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <div class="col-auto process-box wow fadeInUp" data-wow-delay="0.1s">
                        <div class="process-box-body">
                            <span class="process-number">04</span>
                            <div class="process-content">
                                <div class="process-icon">
                                    <img src="{{ ('assets/img/icon/process2-4.png') }}" alt="icon">
                                </div>
                                <h5 class="process-name"><a href="classes.html">Expert Care Tailored to Your Child  </a></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="process-line"><img src="assets/img/shape/dashed-line-1.png" alt="shape"></div>
            </div>
        </div>
    </section>
    <!--======== / Process Section ========-->

    <!--======== Team Section ========-->
    {{-- <section class="team-section bg-smoke space-extra-top space-bottom-shape-min">
        <div class="container">
            <div class="row text-center justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-xl-6 col-lg-7 col-md-8 col-sm-9">
                    <div class="title-area">
                        <span class="sub-title">Our Expert Staff</span>
                        <h2 class="sec-title">Most Dedicated Staff For Your Child</h2>
                    </div>
                </div>
            </div>
            <div class="row  vs-carousel" data-slide-show="3" data-lg-slide-show="2" data-arrows="true">
                <!-- Single Team -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-card">
                        <div class="team-img" data-mask-src="assets/img/team/t-mask.png">
                            <img src="assets/img/team/t-1.jpg" alt="team">
                            <div class="team-content">
                                <p class="team-text">Assertively repurpose orthogonal architectures through just in time manufactured products.</p>
                                <div class="multi-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <button class="icon-btn expand-btn"><i class="fas fa-share-alt"></i></button>
                        <div class="team-info">
                            <h4 class="team-title"><a href="team-details.html">Bableo Dablo</a></h4>
                            <span class="team-desig">Kids Specialist</span>
                        </div>
                    </div>
                </div>
                <!-- Single Team -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-card">
                        <div class="team-img" data-mask-src="assets/img/team/t-mask.png">
                            <img src="assets/img/team/t-2.jpg" alt="team">
                            <div class="team-content">
                                <p class="team-text">Assertively repurpose orthogonal architectures through just in time manufactured products.</p>
                                <div class="multi-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <button class="icon-btn expand-btn"><i class="fas fa-share-alt"></i></button>
                        <div class="team-info">
                            <h4 class="team-title"><a href="team-details.html">Rose Marry</a></h4>
                            <span class="team-desig">Drawing Teacher</span>
                        </div>
                    </div>
                </div>
                <!-- Single Team -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-card">
                        <div class="team-img" data-mask-src="assets/img/team/t-mask.png">
                            <img src="assets/img/team/t-3.jpg" alt="team">
                            <div class="team-content">
                                <p class="team-text">Assertively repurpose orthogonal architectures through just in time manufactured products.</p>
                                <div class="multi-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <button class="icon-btn expand-btn"><i class="fas fa-share-alt"></i></button>
                        <div class="team-info">
                            <h4 class="team-title"><a href="team-details.html">Jabian Joe</a></h4>
                            <span class="team-desig">Kids Teacher</span>
                        </div>
                    </div>
                </div>
                <!-- Single Team -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-card">
                        <div class="team-img" data-mask-src="assets/img/team/t-mask.png">
                            <img src="assets/img/team/t-4.jpg" alt="team">
                            <div class="team-content">
                                <p class="team-text">Assertively repurpose orthogonal architectures through just in time manufactured products.</p>
                                <div class="multi-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <button class="icon-btn expand-btn"><i class="fas fa-share-alt"></i></button>
                        <div class="team-info">
                            <h4 class="team-title"><a href="team-details.html">Sonia Khan</a></h4>
                            <span class="team-desig">Kids Specialist</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="shape-before"><img src="assets/img/shape/before-shape-5.png" alt="shape"></div>
        <div class="shape-after"><img src="assets/img/shape/after-shape-5.png" alt="shape"></div>

        <div class="shape-mockup movingX d-none d-hd-block" data-top="12%" data-left="6%"><img src="assets/img/icon/doll-1.png" alt="shapes"></div>
        <div class="shape-mockup movingX d-none d-hd-block" data-bottom="9%" data-left="5%"><img src="assets/img/icon/shoe-1.png" alt="shapes"></div>
        <div class="shape-mockup shapePulse d-none d-hd-block" data-top="12%" data-right="5%"><img src="assets/img/icon/dog-2.png" alt="shapes"></div>
        <div class="shape-mockup movingX d-none d-hd-block" data-bottom="12%" data-right="3%"><img src="assets/img/icon/plane-1.png" alt="shapes"></div>
    </section> --}}
    <!--======== / Team Section ========-->

    <!--======== Testimonial Section ========-->
    {{-- <section class="testimonial-section space-top-shape2-plus space-bottom-shape-plus">
        <div class="container">
            <div class="row gy-30 align-items-center">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="text-center text-lg-start">
                        <span class="sub-title">Parent Testimonial</span>
                        <h2 class="sec-title">Positive Parents Review Of Us</h2>
                        <p class="mb-30">Monotonectally conceptualize economically sound value after accurate growth strategies. Quickly parallel task client-centric materials technologies.</p>
                        <a href="shop-details.html" class="vs-btn wave-btn style-1">View All Reviews</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="testi-slider-area">
                        <div class="row testi-slider vs-carousel" id="testi1" data-slide-show="2">
                            <!-- Single Item -->
                            <div class="col-md-6">
                                <div class="testi-box">
                                    <div class="testi-avater">
                                        <img src="assets/img/testimonial/avator-1.jpg" alt="testimonial">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <h4 class="testi-title">They Are Amazing</h4>
                                    <p class="testi-text">everaged total linkage rather than holisticlis markets. ransition enabled niches whereas cross media benefits world..</p>
                                    <div class="testi-author">
                                        <h5 class="name">Jerzzy Lamot</h5>
                                        <span class="desig">Parent</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Item -->
                            <div class="col-md-6">
                                <div class="testi-box">
                                    <div class="testi-avater">
                                        <img src="assets/img/testimonial/avator-2.jpg" alt="testimonial">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <h4 class="testi-title">They Are Like Family</h4>
                                    <p class="testi-text">everaged total linkage rather than holisticlis markets. ransition enabled niches whereas cross media benefits world..</p>
                                    <div class="testi-author">
                                        <h5 class="name">Jone David</h5>
                                        <span class="desig">Gurdian</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Item -->
                            <div class="col-md-6">
                                <div class="testi-box">
                                    <div class="testi-avater">
                                        <img src="assets/img/testimonial/avator-3.jpg" alt="testimonial">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <h4 class="testi-title">My Child Enjoyed</h4>
                                    <p class="testi-text">everaged total linkage rather than holisticlis markets. ransition enabled niches whereas cross media benefits world..</p>
                                    <div class="testi-author">
                                        <h5 class="name">Mark Jone</h5>
                                        <span class="desig">Brother</span>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- / Slider End -->
                        <div class="vs-icon-box testi-1 d-none d-xl-block">
                            <button data-slick-prev="#testi1" class="icon-btn style-3 arrow-left mb-15"><i class="far fa-arrow-left"></i></button>
                            <button data-slick-next="#testi1" class="icon-btn style-3 arrow-right"><i class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--======== / Testimonial Section ========-->
	@endsection
