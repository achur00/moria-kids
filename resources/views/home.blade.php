@extends("layouts.master")
@section("title", "Transforming Young Lives with Safe Homes, Healing Care, and a Future Full of Possibility. | Moriah Care Service")
@section("meta_description", "Moriah Care provides safe, therapeutic residential homes for vulnerable children and young people with emotional, behavioural, and developmental needs across the UK.")
@section("meta_keywords", "Moriah Care, Therapeutic Homes, Residential Childcare, Children's Services UK, EBD, SEMH, Autism Support, Trauma-Informed Care, Child Safeguarding")
@section('content')

            <!--======== About Section ========-->
            <section class="about-section space-top pb-30">
            <div class="container">
                <div class="row gy-30 align-items-center">
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <span class="sub-title">More About Us</span>
                    <h2 class="sec-title big-title">{{$aboutIntro->title}} </h2>
                    <!-- content -->
                    {!!($aboutIntro->content)!!} 
                    <!-- end content -->
                    <div class="check-list style-2 mb-40">
                    <ul>
                        @foreach($homeIntroList->sections as $section)
                        {!! $section->content !!}
                        @endforeach
                    </ul>
                    </div>
                    <a href="{{ url('about') }}" class="vs-btn wave-btn style-1">Learn More</a>
                </div>
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.1s">
                    <div class="about-form-box bg-theme">
                    <h3 class="form-title">Feel Free To Ask Us Anything</h3>
                    <p class="form-text">Sertively create standardized processes whereas scalable experiences. Progressively harness team driven sources afte capital. </p>
                    <form action="{{ url('mail') }}" method="POST" class="form-style2 ajax-contact">
                        <div class="row gx-20">
                        <div class="form-group col-12">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                        </div>
                        <div class="form-group col-12">
                            <textarea class="form-control" name="message" id="message" placeholder="Message"></textarea>
                        </div>
                        <div class="form-btn mt-10 col-12">
                            <button type="submit" class="vs-btn wave-btn btn-white">Submit</button>
                        </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </form>
                    </div>
                </div>
            </div>

                </div>
                <div class="shape-after"><img src="{{ asset('assets/img/shape/after-shape-8.png') }}" alt="shape"></div>
                <div class="shape-mockup movingX d-none d-hd-block" data-top="15%" data-left="6%"><img src="{{ asset('assets/img/icon/note-2.png') }}" alt="shapes"></div>
                <div class="shape-mockup moving d-none d-hd-block" data-bottom="15%" data-left="6%"><img src="{{ asset('assets/img/icon/ballon.png') }}" alt="shapes"></div>
                <div class="shape-mockup movingX d-none d-hd-block" data-top="19%" data-right="5%"><img src="{{ asset('assets/img/icon/paper-plane.png') }}" alt="shapes"></div>
                <div class="shape-mockup movingX d-none d-hd-block" data-ani-delay="4s" data-bottom="2%" data-right="14%"><img src="{{ asset('assets/img/icon/car-6.png') }}" alt="shapes"></div>
                </section>
                <!--======== / About Section ========-->

                <!--======== Service Section ========-->
                <section class="service-section bg-smoke-two space-double">
                    <div class="container">
                        <div class="title-area text-center wow fadeInUp" data-wow-delay="0.1s">
                        <span class="sub-title">What We Offer</span>
                        <h2 class="sec-title">Services We Provide</h2>
                        </div>
                        <div class="row gx-lg-15 justify-content-center">
                        <div class="col-xl-2 col-md-6 wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="nav nav-tabs service-tab" id="service-tab1" role="tablist">
                            @foreach($servicesIntro->take(3) as $service)
                            <a href="{{url('service/'.$service->id)}}">
                            <button class="sr-icon-btn" id="nav-one-tab" data-bs-toggle="tab" data-bs-target="#nav-one" type="button" role="tab" aria-controls="nav-one" aria-selected="true"><img src="{{ asset('assets/img/icon/'.$service->icon) }}" alt="icon" class="w-50">{{$service->short_name}}</button></a>
                            @endforeach
                            </div>
                        </div>
                        <div class="col-xl-8 order-xl-2 order-3 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="tab-content service-tabcontent" id="service-tabContent">
                            <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                                <div class="row align-items-center service-grid">
                                <div class="col-md-6">
                                    <div class="service-img">
                                    <img src="{{ asset('assets/img/service/'.$serviceLowEsteem->image) }}" alt="service">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="service-icon">
                                    <img src="{{ asset('assets/img/icon/'.$serviceLowEsteem->icon) }}" class="w-50" alt="icon">
                                    </div>
                                    <h2 class="h3 service-title"><a href="{{ url('service/'.$serviceLowEsteem->id) }}">{{$serviceLowEsteem->name}}</a></h2>
                                   {!! Str::limit($serviceLowEsteem->short_content, 150)!!}
                                    <div class="check-list style-3">
                                        @foreach($serviceLowEsteem->section as $section)
                                            {!! Str::limit($section->content, 190) !!}
                                        @endforeach
                                    </div>
                                    <a href="{{ url('service') }}" class="vs-btn wave-btn">Learn More</a>
                                </div>
                                </div>
                            </div>

                            </div>
                            </div>
                            <div class="col-xl-2 col-md-6 order-xl-3 order-2 wow fadeInRight" data-wow-delay="0.1s">
                                <div class="nav nav-tabs service-tab" id="service-tab2" role="tablist">
                                    @foreach($servicesIntro->skip(3)->take(3) as $service)
                                      <a href="{{url('service/'.$service->id)}}">
                                    <button class="sr-icon-btn" id="nav-four-tab" data-bs-toggle="tab" data-bs-target="#nav-four" type="button" role="tab" aria-controls="nav-four" aria-selected="false"><img src="{{ asset('assets/img/icon/'.$service->icon) }}" class="w-50" alt="icon"><span class="text">{{$service->short_name}}</span></button></a>
                                    @endforeach
                            
                                </div>
                            </div>
                            </div>
                            </div>
                            <div class="shape-mockup rotate d-none d-hd-block" data-top="16%" data-left="6%"><img src="{{ asset('assets/img/icon/star-8.png') }}" alt="shapes"></div>
                            <div class="shape-mockup shapePulse d-none d-hd-block" data-bottom="16%" data-left="6%"><img src="{{ asset('assets/img/icon/draw-1.png') }}" alt="shapes"></div>
                            <div class="shape-mockup movingX rotate d-none d-hd-block" data-top="22%" data-right="7%"><img src="{{ asset('assets/img/icon/star-9.png') }}" alt="shapes"></div>
                            <div class="shape-mockup moving d-none d-hd-block" data-bottom="20%" data-right="10%"><img src="{{ asset('assets/img/icon/apple-2.png') }}" alt="shapes"></div>
                </section>
                            <!--======== / Service Section ========-->
                            {{-- 
                                <!--======== Team Section ========-->
                                <section class="team-section space-extra">
                                    <div class="shape-before"><img src="{{ asset('assets/img/shape/before-shape-8.png') }}" alt="shape"></div>
                                    <div class="container">
                                        <div class="title-area text-center wow fadeInUp" data-wow-delay="0.1s">
                                            <span class="sub-title">Our Teachers</span>
                                            <h2 class="sec-title">Expert Mentors</h2>
                                        </div>
                                        <div class="row vs-carousel" data-slide-show="3" data-arrows="true">
                                            <!-- Single Team -->
                                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="team-box">
                                                    <div class="team-img">
                                                        <img src="{{ asset('assets/img/team/t2-1.jpg') }}" alt="team">
                                                        <div class="multi-social">
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="team-info">
                                                        <h4 class="team-title"><a href="{{ url('team-details') }}">David Smith</a></h4>
                                                        <span class="team-desig">Mentor</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Team -->
                                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="team-box">
                                                    <div class="team-img">
                                                        <img src="{{ asset('assets/img/team/t2-2.jpg') }}" alt="team">
                                                        <div class="multi-social">
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="team-info">
                                                        <h4 class="team-title"><a href="{{ url('team-details') }}">Marry Gold</a></h4>
                                                        <span class="team-desig">Mentor</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Team -->
                                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="team-box">
                                                    <div class="team-img">
                                                        <img src="{{ asset('assets/img/team/t2-3.jpg') }}" alt="team">
                                                        <div class="multi-social">
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="team-info">
                                                        <h4 class="team-title"><a href="{{ url('team-details') }}">Rose Marry</a></h4>
                                                        <span class="team-desig">Mentor</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Single Team -->
                                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                                <div class="team-box">
                                                    <div class="team-img">
                                                        <img src="{{asset('assets/img/team/t2-4.jpg')}}" alt="team">
                                                        <div class="multi-social">
                                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                        </div>
                                                    </div>
                                                    <div class="team-info">
                                                        <h4 class="team-title"><a href="team-details.html">Jacklin June</a></h4>
                                                        <span class="team-desig">Mentor</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            --}}
    <!--======== / Team Section ========-->

    <!--======== Why Section ========-->
        @include('partials.why')
    <!--======== / Why Section ========-->

    
                
    @include('partials.counter')

                <!--======== Event Section ========-->
 
        <section class="event-section bg-smoke-two space">
            <div class="container">
                <div class="title-area text-center wow fadeInUp" data-wow-delay="0.1s">
                    <span class="sub-title">Join Our Event</span>
                    <h2 class="sec-title">Upcoming Event</h2>
                </div>
                <div class="row gy-30 mb-50">
                    {{--
                    <!-- Single Item -->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="event-card">
                            <h2 class="event-date"><a href="{{ url('event-details') }}" class="text-inherit">25 Sep</a></h2>
                            <div class="event-content">
                                <h4 class="event-title"><a href="{{ url('event-details') }}">Kids Days Drawing Event</a></h4>
                                <ul class="event-info">
                                    <li><i class="fal fa-clock"></i>Nov 25 - Dec 5. Time: 12:00pm - 5:00pm</li>
                                    <li><i class="fal fa-map-marker-alt"></i>New York 242 Dancing Street Lolion</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="event-card">
                            <h2 class="event-date"><a href="{{ url('event-details') }}" class="text-inherit">09 Aug</a></h2>
                            <div class="event-content">
                                <h4 class="event-title"><a href="{{ url('event-details') }}">Mother’s Day Event</a></h4>
                                <ul class="event-info">
                                    <li><i class="fal fa-clock"></i>Nov 25 - Dec 5. Time: 12:00pm - 5:00pm</li>
                                    <li><i class="fal fa-map-marker-alt"></i>New York 242 Dancing Street Lolion</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="event-card">
                            <h2 class="event-date"><a href="{{ url('event-details') }}" class="text-inherit">18 Oct</a></h2>
                            <div class="event-content">
                                <h4 class="event-title"><a href="{{ url('event-details') }}">Father’s Day Event</a></h4>
                                <ul class="event-info">
                                    <li><i class="fal fa-clock"></i>Nov 25 - Dec 5. Time: 12:00pm - 5:00pm</li>
                                    <li><i class="fal fa-map-marker-alt"></i>New York 242 Dancing Street Lolion</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="event-card">
                            <h2 class="event-date"><a href="{{ url('event-details') }}" class="text-inherit">23 Jun</a></h2>
                            <div class="event-content">
                                <h4 class="event-title"><a href="{{ url('event-details') }}">National Holiday Events</a></h4>
                                <ul class="event-info">
                                    <li><i class="fal fa-clock"></i>Nov 25 - Dec 5. Time: 12:00pm - 5:00pm</li>
                                    <li><i class="fal fa-map-marker-alt"></i>New York 242 Dancing Street Lolion</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="event-card">
                            <h2 class="event-date"><a href="{{ url('event-details') }}" class="text-inherit">31 Dec</a></h2>
                            <div class="event-content">
                                <h4 class="event-title"><a href="{{ url('event-details') }}">Independent Day Events</a></h4>
                                <ul class="event-info">
                                    <li><i class="fal fa-clock"></i>Nov 25 - Dec 5. Time: 12:00pm - 5:00pm</li>
                                    <li><i class="fal fa-map-marker-alt"></i>New York 242 Dancing Street Lolion</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Item -->
                    <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="event-card">
                            <h2 class="event-date"><a href="{{ url('event-details') }}" class="text-inherit">14 Apr</a></h2>
                            <div class="event-content">
                                <h4 class="event-title"><a href="{{ url('event-details') }}">School Monthly Fair</a></h4>
                                <ul class="event-info">
                                    <li><i class="fal fa-clock"></i>Nov 25 - Dec 5. Time: 12:00pm - 5:00pm</li>
                                    <li><i class="fal fa-map-marker-alt"></i>New York 242 Dancing Street Lolion</li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}

                     <!-- No Events Available Fancy Card -->
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="event-card text-center p-5" style="background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%); border-radius: 24px; box-shadow: 0 8px 32px rgba(80, 80, 180, 0.08);">
                            <div style="font-size: 3rem; color: #ffb118; margin-bottom: 1rem;" class="mx-5">
                                <i class="fas fa-calendar-times"></i>
                            </div>
                            <h3 class="event-title mb-3 mx-5" style="font-weight: 700; color: #2d3748;">No Events Available</h3>
                            <p class="event-text mb-0" style="color: #4b5563; font-size: 1.15rem;">
                                There are currently no upcoming events.<br>
                                Please check back soon for updates!
                            </p>
                            <div class="mt-4">
                                <img src="{{ asset('assets/img/icon/cap-plane.png') }}" alt="No Events" style="max-width: 120px; opacity: 0.7;">
                            </div>
                        </div>
                    </div>

                            <p class="event-more">To Check Out All The School Events <a class="link-btn" href="{{ url('event') }}">Click Here <i class="far fa-angle-right"></i></a></p>
                        </div>
                        <div class="shape-mockup d-none d-hd-block" data-top="17%" data-left="4%"><img src="{{ asset('assets/img/icon/girl-1.png') }}" alt="shapes"></div>
                        <div class="shape-mockup rotate d-none d-hd-block" data-bottom="16%" data-left="6%"><img src="{{ asset('assets/img/icon/star-7.png') }}" alt="shapes"></div>
                        <div class="shape-mockup movingX d-none d-hd-block" data-top="15%" data-right="5%"><img src="{{ asset('assets/img/icon/bottle-1.png') }}" alt="shapes"></div>
                        <div class="shape-mockup moving d-none d-hd-block" data-bottom="13%" data-right="6%"><img src="{{ asset('assets/img/icon/ballon-2.png') }}" alt="shapes"></div>
        </section>

                <!--======== / Event Section ========-->

                <!--======== Blog Section ========-->
                {{--<section class="blog-section bg-smoke space-top space-bottom-shape-plus">
                    <div class="container">
                        <div class="title-area text-center wow fadeInUp" data-wow-delay="0.1s">
                            <span class="sub-title">Latest News</span>
                            <h2 class="sec-title">Blog Insight</h2>
                        </div>
                        <div class="row vs-carousel" data-slide-show="3" data-arrows="true">
                            <!-- Single blog -->
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="vs-blog blog-card">
                                    <div class="blog-img">
                                        <a href="{{ url('blog-details') }}">
                                            <img src="{{ asset('assets/img/blog/blog-1.jpg') }}" alt="blog">
                                        </a>
                                    </div>
                                    <div class="blog-content shadow-none">
                                        <div class="blog-meta">
                                            <a href="{{ url('blog-details') }}"><i class="fal fa-calendar-alt"></i>10 October, 2024</a>
                                            <a href="{{ url('blog-details') }}"><i class="fal fa-comments"></i>02 Comments</a>
                                        </div>
                                        <h4 class="blog-title"><a href="{{ url('blog-details') }}">Education Always Best For Parent Develope</a></h4>
                                        <a href="{{ url('blog-details') }}" class="link-btn">Read More <i class="far fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single blog -->
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="vs-blog blog-card">
                                    <div class="blog-img">
                                        <a href="{{ url('blog-details') }}">
                                            <img src="{{ asset('assets/img/blog/blog-2.jpg') }}" alt="blog">
                                        </a>
                                    </div>
                                    <div class="blog-content shadow-none">
                                        <div class="blog-meta">
                                            <a href="{{ url('blog-details') }}"><i class="fal fa-calendar-alt"></i>12 November, 2024</a>
                                            <a href="{{ url('blog-details') }}"><i class="fal fa-comments"></i>05 Comments</a>
                                        </div>
                                        <h4 class="blog-title"><a href="{{ url('blog-details') }}">A Happy Learning Process for Your Child</a></h4>
                                        <a href="{{ url('blog-details') }}" class="link-btn">Read More <i class="far fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single blog -->
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="vs-blog blog-card">
                                    <div class="blog-img">
                                        <a href="{{ url('blog-details') }}">
                                            <img src="{{ asset('assets/img/blog/blog-3.jpg') }}" alt="blog">
                                        </a>
                                    </div>
                                    <div class="blog-content shadow-none">
                                        <div class="blog-meta">
                                            <a href="{{ url('blog-details') }}"><i class="fal fa-calendar-alt"></i>01 December, 2024</a>
                                            <a href="{{ url('blog-details') }}"><i class="fal fa-comments"></i>10 Comments</a>
                                        </div>
                                        <h4 class="blog-title"><a href="{{ url('blog-details') }}">Best Drawing Practice in Child Age</a></h4>
                                        <a href="{{ url('blog-details') }}" class="link-btn">Read More <i class="far fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- Single blog -->
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="vs-blog blog-card">
                                    <div class="blog-img">
                                        <a href="{{ url('blog-details') }}">
                                            <img src="{{ asset('assets/img/blog/blog-4.jpg') }}" alt="blog">
                                        </a>
                                    </div>
                                    <div class="blog-content shadow-none">
                                        <div class="blog-meta">
                                            <a href="{{ url('blog-details') }}"><i class="fal fa-calendar-alt"></i>03 October, 2024</a>
                                            <a href="{{ url('blog-details') }}"><i class="fal fa-comments"></i>01 Comment</a>
                                        </div>
                                        <h4 class="blog-title"><a href="{{ url('blog-details') }}">We Provide Best Education For Your Child</a></h4>
                                        <a href="{{ url('blog-details') }}" class="link-btn">Read More <i class="far fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>--}}
                <!--======== / Blog Section ========-->
@endsection
 