@extends('layouts.vice_master')
@section('title','our team')
@section('content')

    <!-- Sidebar Page Container -->
    <div class="sidebar-page-container style-two mb-5">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Content Side -->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
                    @foreach ($about->Sections as $about)
                    <div class="service-detail mb-5" id='{{$about->url}}'>

                        <div class="service-detail_inner shadow p-4 rounded" style="background-color: #f9f9f9;">
                            <p class="team-detail_title" style="font-size: 20px; font-weight: bold; color: #000000;">{{$about->name}}</p>
                            @if(isset($about->image))
                            <div class="service-detail_image mb-3 mt-2 text-center">
                                <img src="{{ asset('assets/images/resource/'.$about->image ) }}" alt="" class="img-fluid rounded" style="max-height: 300px; object-fit: cover;" />
                            </div>
                            @endif
                            <div class="service-detail_content" style="line-height: 1.1; font-size: 16px; color: #555;">
                               {!!$about->content!!}
                            </div>
                        </div>
                    </div>

                    @endforeach
                </div>



  <!-- Sidebar Side -->
  <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
    <aside class="sidebar">
        <div class="sidebar-inner">

            <!-- Services Widget -->
            <div class="services-widget sidebar-widget">
                <div class="widget-content">
                    <h5 class="sidebar-widget_title" style="font-size:24px;">About Sections</h5>
                    <ul class="service-list_two">
                        @foreach ($about1->Sections as $about)
                            <li><a href="{{ '#'.$about->url}}">{{ $about->name }} <span
                                        class="flaticon-next-1"></span></a></li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>

        </div>
    </aside>
</div>

            </div>
        </div>
    </div>




	@endsection
@section('script')
