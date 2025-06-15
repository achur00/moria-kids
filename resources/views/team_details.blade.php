@extends('layouts.vice_master')
@section('title','Our El-Roi People and team')
@section('content')
	<!-- Team Detail -->
	<section class="team-detail">
		<div class="auto-container">
			<div class="row clearfix">

				<!-- Team Block One -->
				<div class="team-detail_image-column col-lg-5 col-md-12 col-sm-12">
					<div class="team-detail_image-outer">
						<div class="team-detail_image">
							<img src="{{asset('assets/images/resource/'.$team2->image)}}" alt="" />
						</div>
						<div class="team-detail_socials">
							<a class="fa-brands fa-facebook-f fa-fw" href="#"></a>
							<a class="fa-brands fa-instagram fa-fw" href="#"></a>
							<a class="fa-brands fa-twitter fa-fw" href="#"></a>
							<a class="fa-brands fa-youtube fa-fw" href="#"></a>
						</div>
					</div>
				</div>

				<!-- Team Block One -->
				<div class="team-detail_content-column col-lg-7 col-md-12 col-sm-12">
					<div class="team-detail_content-outer">
						<h2 class="team-detail_title">{{$team->name}}</h2>
						<div class="team-detail_subtitle">{{$team2->name}}</div>
						<div class="team-detail_text">{!!$team2->content!!}</div>
						<div class="team-detail_text">
                            <h2 class="team-detail_subtitle" style="font-size: 26px; font-weight: 600; color: #34495e; text-transform: capitalize; border-left: 5px solid #e74c3c; padding-left: 10px; margin-bottom: 20px;">Experience</h2>
                            {!!$team->content!!}</div>

                        <!-- Skill Item -->
                        @foreach ( $experiences as $experience)


                        <div class="default-skills">
						<div class="default-skill-item">
							<div class="default-skill-title">{{$experience->name}}</div>
							<div class="default-skill-bar">
								<div class="default-bar-inner">
									<div class="default-bar progress-line" data-width="{{$experience->value}}">
										<div class="default-skill-percentage"></div>
									</div>
								</div>
							</div>
							<div class="default-count-box count-box"><span class="count-text" data-speed="2000" data-stop="{{$experience->value}}">0</span>%</div>
						</div>
                        </div>
                        @endforeach
                        <!-- Skill Item -->
					</div>
				</div>

			</div>

		</div>
        @include('include.strategic_growth')
	</section>
	<!-- End Team Detail -->


	<!-- Property One -->
	{{-- <section class="property-one style-two alternate">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="sec-title_title">My Broker List</div>
				<h2 class="sec-title_heading">Take a stroll around <br> surroundings.</h2>
			</div>
			<div class="three-items_slider swiper-container">
				<div class="swiper-wrapper">

					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Property Block One -->
						<div class="property-block_one">
							<div class="property-block_one-inner">
								<div class="property-block_one-image">
									<div class="property-block_one-title">Featuerd</div>
									<a href="property-detail.html"><img src="assets/images/resource/property-1.jpg" alt="" /></a>
								</div>
								<div class="property-block_one-content">
									<div class="property-block_one-location"><i class="flaticon-maps-and-flags"></i>Pasadena 809b-2, Oklahoma</div>
									<h4 class="property-block_one-heading"><a href="property-detail.html">Super deluxe bed room near sea beech</a></h4>
									<ul class="property-block_one-info">
										<li><span><img src="assets/images/icons/bed.svg" alt="" /></span>4 Beds</li>
										<li><span><img src="assets/images/icons/bath.svg" alt="" /></span>2 Bathrooms</li>
										<li><span><img src="assets/images/icons/square.svg" alt="" /></span>6x8 m²</li>
									</ul>
									<div class="d-flex justify-content-between align-items-center flex-wrap">
										<div class="property-block_one-price">$2,400 <span>/month</span></div>
										<a class="property-block_one-heart" href="property-detail.html"><i class="flaticon-heart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Property Block One -->
						<div class="property-block_one">
							<div class="property-block_one-inner">
								<div class="property-block_one-image">
									<div class="property-block_one-off">20% off</div>
									<a href="property-detail.html"><img src="assets/images/resource/property-2.jpg" alt="" /></a>
								</div>
								<div class="property-block_one-content">
									<div class="property-block_one-location"><i class="flaticon-maps-and-flags"></i>Pasadena 809b-2, Oklahoma</div>
									<h4 class="property-block_one-heading"><a href="property-detail.html">Super deluxe bed room near sea beech</a></h4>
									<ul class="property-block_one-info">
										<li><span><img src="assets/images/icons/bed.svg" alt="" /></span>4 Beds</li>
										<li><span><img src="assets/images/icons/bath.svg" alt="" /></span>2 Bathrooms</li>
										<li><span><img src="assets/images/icons/square.svg" alt="" /></span>6x8 m²</li>
									</ul>
									<div class="d-flex justify-content-between align-items-center flex-wrap">
										<div class="property-block_one-price">$2,400 <span>/month</span></div>
										<a class="property-block_one-heart" href="property-detail.html"><i class="flaticon-heart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Property Block One -->
						<div class="property-block_one">
							<div class="property-block_one-inner">
								<div class="property-block_one-image">
									<div class="property-block_one-title">Featuerd</div>
									<a href="property-detail.html"><img src="assets/images/resource/property-3.jpg" alt="" /></a>
								</div>
								<div class="property-block_one-content">
									<div class="property-block_one-location"><i class="flaticon-maps-and-flags"></i>Pasadena 809b-2, Oklahoma</div>
									<h4 class="property-block_one-heading"><a href="property-detail.html">Super deluxe bed room near sea beech</a></h4>
									<ul class="property-block_one-info">
										<li><span><img src="assets/images/icons/bed.svg" alt="" /></span>4 Beds</li>
										<li><span><img src="assets/images/icons/bath.svg" alt="" /></span>2 Bathrooms</li>
										<li><span><img src="assets/images/icons/square.svg" alt="" /></span>6x8 m²</li>
									</ul>
									<div class="d-flex justify-content-between align-items-center flex-wrap">
										<div class="property-block_one-price">$2,400 <span>/month</span></div>
										<a class="property-block_one-heart" href="property-detail.html"><i class="flaticon-heart"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				<!-- If we need pagination -->
				<div class="three-items_slider-pagination"></div>

				<!-- If we need navigation buttons -->
				<div class="three-items_slider-prev"><img src="assets/images/icons/prev-arrow.png" alt="" /></div>
				<div class="three-items_slider-next"><img src="assets/images/icons/next-arrow.png" alt="" /></div>

			</div>

		</div>
	</section> --}}
	<!-- End Property One -->
@endsection
