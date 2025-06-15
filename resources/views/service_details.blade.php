@extends('layouts.vice_master')
@section('title', 'Comprehensive Real Estate Services - Construction Management & More')
@section('content')
    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container style-two mb-5">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    <div class="service-detail">
                        <div class="service-detail_inner">
                            <div class="service-detail_image">
                                <img src="{{ asset('assets/images/resource/' . $serviceId->image) }}" alt="" />
                            </div>
                            <div class="service-detail_content">

                                {!! $serviceId->content !!}

                                {{-- strategic growth --}}
                                @include('include.strategic_growth')

                                @foreach ($serviceId->Sections->where('type','Content')->take(1) as $section)
                                    <h4 class="service-detail_subheading">


                                        {{ $section->name }}


                                    </h4>
                                    <div class="service-detail_image">
                                        <img src="{{ asset('assets/images/resource/' . $section->image) }}" alt="" />
                                        <a href="https://www.youtube.com/watch?v=kxPCFljwJws"
                                            class="lightbox-video overlay-box"><span class="fa-solid fa-play fa-fw"><i
                                                    class="ripple"></i></span></a>
                                    </div>
                                    {!! $section->content !!}
                                @endforeach


                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Side -->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar">
                        <div class="sidebar-inner">

                            <!-- Services Widget -->
                            <div class="services-widget sidebar-widget">
                                <div class="widget-content">
                                    <h5 class="sidebar-widget_title" style="font-size:24px;">Other Services</h5>
                                    <ul class="service-list_two">
                                        @foreach ($services->Submenus as $service)
                                            <li><a href='{{ url('service/' . $service->id) }}'>{{ $service->name }} <span
                                                        class="flaticon-next-1"></span></a></li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            {{-- Newsletter --}}
                            @if ($newsletter)
                                <div class="sidebar-widget subscribe-widget">
                                    <div class="widget-content"
                                        style="background-image:url({{ asset('assets/images/background/' . $newsletter->image) }})">
                                        <div class="title">{{ $newsletter->name }}</div>
                                        {!! $newsletter->content !!}
                                        <div class="newsletter-box">
                                            <form method="post" action="{!! $newsletter->url !!}">
                                                <div class="form-group">
                                                    <input type="email" name="search-field" placeholder="Your Email"
                                                        required>
                                                    <button type="submit"><i class="flaticon-bell"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <p>No section available.</p> <!-- Handle empty case -->
                            @endif

                        </div>
                    </aside>
                </div>

            </div>
        </div>
    </div>

    <!-- Main Footer -->
@endsection
