@extends('layouts.vice_master')
@section('title', 'our team')
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
                                <img src="{{ asset('assets/images/resource/' . $ourPeople->image) }}" alt="" />
                            </div>
                            <div class="service-detail_content">

                                {!! $ourPeople->content !!}
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
                                    <h5 class="sidebar-widget_title" style="font-size:24px;">Management Team</h5>
                                    <ul class="service-list_two">
                                        @foreach ($sections as $profile)
                                            <li><a href='{{ url('team/' . $profile->Submenus->id) }}'>{{ $profile->name }}
                                                    <span class="flaticon-next-1"></span></a></li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </div>

                     </aside>
                 </div>
                {{-- end section --}}
            </div>
        </div>
    </div>
@endsection
