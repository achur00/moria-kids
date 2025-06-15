
<section class="team-three text-center">
    <div class="auto-container">
        <div class="row clearfix">

            <div><h3 class="text-centre mb-2 sec-title_heading">Management Team</h3></div>
            @foreach ($profiles->sortBy('order', SORT_ASC) as $profile)
                <!-- Team Block One -->

                <div class="team-block_one col-xl-4 col-lg-6 col-md-6 col-sm-6">
                    <div class="team-block_one-inner">
                        <div class="team-block_one-image_outer">
                            <div class="team-block_one-image">
                                <img src="{{ asset('assets/images/resource/' . $profile->Submenus->image) }}"
                                    alt="" />
                                <!-- Socials -->
                                <div class="team-block_one-socials">
                                    <div class="team-block_one-socials-inner">
                                        <a class="fa-brands fa-facebook-f fa-fw" href="#"></a>
                                        <a class="fa-brands fa-instagram fa-fw" href="#"></a>
                                        <a class="fa-brands fa-twitter fa-fw" href="#"></a>
                                        <a class="fa-brands fa-youtube fa-fw" href="#"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="team-block_one-content">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <div class="content">
                                    <h6 class="team-block_one-heading"><a
                                            href="team-detail.html">{{ $profile->name }}</a></h6>
                                    <div class="team-block_one-designation">{{ $profile->Submenus->name }}</div>
                                </div>
                                <div class="team-block_one-icon"><img src="assets/images/icons/chat.svg"
                                        alt="" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>

    </div>
</section>




<!-- Team One -->
	{{-- <section class="team-one">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<div class="sec-title_title">Our teams</div>
				<h2 class="sec-title_heading">Meet  our Real Estates <br> Professional</h2>
			</div>
			<div class="four-items_slider swiper-container">
				<div class="swiper-wrapper">

					<!-- Slide -->
					<div class="swiper-slide">
						<!-- Team Block One -->
						<div class="team-block_one">
							<div class="team-block_one-inner">
								<div class="team-block_one-image_outer">
									<div class="team-block_one-image">
										<img src="assets/images/resource/team-1.png" alt="" />
										<!-- Socials -->
										<div class="team-block_one-socials">
											<div class="team-block_one-socials-inner">
												<a class="fa-brands fa-facebook-f fa-fw" href="#"></a>
												<a class="fa-brands fa-instagram fa-fw" href="#"></a>
												<a class="fa-brands fa-twitter fa-fw" href="#"></a>
												<a class="fa-brands fa-youtube fa-fw" href="#"></a>
											</div>
										</div>
									</div>
								</div>
								<div class="team-block_one-content">
									<div class="d-flex justify-content-between align-items-center flex-wrap">
										<div class="content">
											<h6 class="team-block_one-heading"><a href="team-detail.html">Leslie Alexander</a></h6>
											<div class="team-block_one-designation">Sr. Director</div>
										</div>
										<div class="team-block_one-icon"><img src="assets/images/icons/chat.svg" alt="" /></div>
									</div>
								</div>
							</div>
						</div>
					</div>



				<!-- If we need pagination -->
				<div class="four-items_slider-pagination"></div>

				<!-- If we need navigation buttons -->
				<div class="four-items_slider-prev"><img src="assets/images/icons/prev-arrow.png" alt="" /></div>
				<div class="four-items_slider-next"><img src="assets/images/icons/next-arrow.png" alt="" /></div>

			</div>

		</div>
	</section> --}}
	<!-- End Team One -->
