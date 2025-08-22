@extends('layouts.vice_master')
@section('title', $service->meta_title)
@section('meta_description', $service->meta_description)
@section('meta_keywords', $service->meta_keywords)
@section('content')

    <!--======== Service Section ========-->
    <section class="service-section space">
        <div class="container">
            <div class="row gy-30">
                <div class="col-xl-9 col-lg-8">
                    <div class="service-details">
                        <div class="service-img">
                            <img src="{{ asset('assets/img/service/' . $service->image) }}" alt="service details">
                        </div>
                        <h2 class="single-title">{{ $service->name }}</h2>
                        <div class="service-content">
                            {{-- service-content --}}
                            {!! $service->content !!}
                            {{-- end-service-content --}}
                            <blockquote class="block-quote">
                                @if ($service->section->count() > 0)
                                    @foreach ($service->section as $section)
                                        {!! $section->content !!}</p>
                                    @endforeach
                                @endif
                            </blockquote>

                        </div>
                    </div> <!-- / service details -->
                </div> <!-- / col-8 end -->
                <!-- Sidebar -->
                <div class="col-xl-3 col-lg-4">
                    <aside class="sidebar-area service-sidebar">
                        <div class="widget widget_search wow fadeInUp" data-wow-delay="0.1s">
                            <form class="search-form">
                                <input type="text" placeholder="Search Here">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                        <div class="widget wow fadeInUp" data-wow-delay="0.1s">
                            <h4 class="widget_title">Our Services</h4>
                            <ul class="popular-service-wrap">
                                @foreach ($allMenus as $menu)
                                    <li class="text-dark"><a href="{{ url($menu->url) }}">{{ ucfirst($menu->name) }}</a>
                                        @if ($menu->submenu->count() > 0)
                                            @foreach ($menu->submenu as $submenu)
                                                <ul class="sub-menu">
                                                    @if ($submenu->services->count() > 0)
                                                        @foreach ($submenu->services as $service)
                                                            <li><a
                                                                    href="{{ url('service/' . $service->id) }}">{{ $service->name }}</a>
                                                            </li>
                                                            {{-- <button onclick="window.location='{{ url('service/' . $service->id) }}'" class="rounded m-2">
                                                                {{ $service->name }}
                                                            </button> --}}
                                                        @endforeach
                                                    @endif
                                                </ul>
                                            @endforeach
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        {{-- <div class="widget wow fadeInUp" data-wow-delay="0.1s">
                            <div class="banner-2">
                                <img class="d-none d-lg-block" src="{{ asset('assets/img/banner/widget-banner-2.jpg') }}" alt="ads banner">
                                <img class="d-block d-lg-none" src="{{ asset('assets/img/banner/widget-banner-3.jpg') }}" alt="ads banner">
                            </div> --}}
                </div>
                </aside>
            </div>
        </div>
        </div>
    </section>
    <!--======== / Service Section ========-->

@endsection
