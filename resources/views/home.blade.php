<?php use App\Models\Photo; ?>

@include('layouts.header')
<main>
	<div class="header-video">
		<div id="hero_video">
			<div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.7)">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 col-lg-10 col-md-8 text-left">
							<h1>Find a Professional</h1>
							<p>Book a Consultation by Appointment, Chat </p>
							<form method="post" action="listing.html">
								<div class="d-flex">
									<div class="row no-gutters custom-search-input">
										<div class="col-md-9">
											<div class="form-group">
												<input class="form-control" type="text" placeholder="Find a professional...">
											</div>
										</div>
										<div class="col-md-3">
											<input type="submit" value="Find">
										</div>
									</div>
									<!-- /row -->
								</div>
								<!-- <div class="search_trends">
		                                <h5>Trending:</h5>
		                                <ul>
		                                    <li><a href="#0">doctor</a></li>
		                                    <li><a href="#0">lawyer</a></li>
		                                    <li><a href="#0">teacher</a></li>
		                                    <li><a href="#0">psychologist</a></li>
		                                </ul>
		                            </div> -->
							</form>
						</div>
					</div>
					<a href="#first_section" class="btn_explore"><span class="pulse_bt"><i class="arrow_down"></i></span></a>
				</div>

			</div>

		</div>

		<img src="img/video_fix.png" alt="" class="header-video--media" data-video-src="video/intro" data-teaser-source="video/intro" data-provider="" data-video-width="1920" data-video-height="960">
		<video autoplay="true" loop="loop" muted="" id="teaser-video" class="teaser-video">
			<source src="video/intro.mp4" type="video/mp4">
			<source src="video/intro.ogv" type="video/ogg">
		</video>
	</div>
	<!-- /hero_single -->
	<div class="bg_gray" id="first_section">
		<div class="container margin_60_40">
			<div class="main_title center">
				<span><em></em></span>
				<h2>Popular Categories</h2>
				<p>Lorem Ipsum is simply dummy text of the printing.</p>
			</div>
			<!-- /main_title -->
			<div class="owl-carousel owl-theme categories_carousel">
				@foreach ($category as $category)
				<?php  $photo = Photo::where('id',$category->icon_photo_id)->first(); ?>
				 <div class="item">
					<a href="listing.html">
						<span>98</span>
						<img src="{{ URL::to('/') }}/public/images/media/{{$photo->file}}" data-src="{{ URL::to('/') }}/public/images/media/{{$photo->file}}" alt="" class="owl-lazy">
						<h3>{{ $category->name }}</h3>
						<!-- <small>Avg price $40 Hr.</small> -->
					</a>
				</div>
				@endforeach

			</div>
			<!-- /carousel -->
		</div>
		<!-- /container -->
	</div>
	<!-- /bg_gray -->
	<div class="container margin_60_40">
		<div class="main_title center">
			<span><em></em></span>
			<h2>Popular Professionals</h2>
			<p>Lorem Ipsum is simply dummy text of the printing.</p>
		</div>
		<div class="row add_bottom_15">
		@foreach ($experts as $experts)
		<?php  $photo = Photo::where('id',$experts->photo_id)->first(); ?>
			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
				<div class="strip">
					<figure>
						<a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
						<div class="score"><strong>9.5</strong></div>
						<img src="img/lazy-placeholder.png" data-src="{{ URL::to('/') }}/public/images/media/{{$photo->file}}" class="img-fluid lazy" alt="">
						<a href="{{ URL::to('/expert-detail/') }}/{{$experts->id}}" class="strip_info">
							<div class="item_title">
								<h3>{{$experts->name}} <small>2+ Exp.</small></h3>

								<small>Astrologer</small>
							</div>
						</a>
					</figure>
					<ul>
						<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Appointment"><i class="icon-users"></i></a></li>
						<li><a href="#0" class="tooltip-1" data-toggle="tooltip" data-placement="bottom" title="Available Chat"><i class="icon-chat"></i></a></li>

						<li>
							<div><span>Avg price $35 Hr.</span></div>
						</li>
					</ul>
				</div>
			</div>
			@endforeach
			<!-- /strip grid -->
			
		</div>
		<!-- /row -->
		<p class="text-center add_bottom_30"><a href="listing.html" class="btn_1 medium">Start Searching</a></p>
		<div class="row">
			<div class="col-12">
				<div class="main_title version_2">
					<span><em></em></span>
					<h2>Weekly Rate Offer</h2>
					<p>Lorem Ipsum is simply dummy text of the printing.</p>
					<a href="#0">View All</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="list_home">
					<ul>
						<li>
							<a href="detail-page.html">
								<figure>
									<img src="img/professional_list_placeholder.png" data-src="img/professional_list_1.jpg" alt="" class="lazy">
								</figure>
								<div class="score"><strong>9.5</strong></div>
								<em>Astrologer</em>
								<h3>Laura Marting</h3>
								<small>8 Patriot Square E2 9NF</small>
								<ul>
									<li><span class="ribbon off">-30%</span></li>
									<li>Average price $35</li>
								</ul>
							</a>
						</li>
						<li>
							<a href="detail-page.html">
								<figure>
									<img src="img/professional_list_placeholder.png" data-src="img/professional_list_2.jpg" alt="" class="lazy">
								</figure>
								<div class="score"><strong>8.0</strong></div>
								<em>Astrologer</em>
								<h3>Anna Smith</h3>
								<small>27 Old Gloucester St, 4563</small>
								<ul>
									<li><span class="ribbon off">-40%</span></li>
									<li>Average price $30</li>
								</ul>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<div class="list_home">
					<ul>
						<li>
							<a href="detail-page.html">
								<figure>
									<img src="img/professional_list_placeholder.png" data-src="img/professional_list_3.jpg" alt="" class="lazy">
								</figure>
								<div class="score"><strong>9.5</strong></div>
								<em>Astrologer</em>
								<h3>Dr. Stefany Lens</h3>
								<small>27 Old Gloucester St, 4563</small>
								<ul>
									<li><span class="ribbon off">-30%</span></li>
									<li>Average price $20</li>
								</ul>
							</a>
						</li>
						<li>
							<a href="detail-page.html">
								<figure>
									<img src="img/professional_list_placeholder.png" data-src="img/professional_list_4.jpg" alt="" class="lazy">
								</figure>
								<div class="score"><strong>8.0</strong></div>
								<em>Astrologer</em>
								<h3>Lucy Clarks</h3>
								<small>22 Hertsmere Rd E14 4ED</small>
								<ul>
									<li><span class="ribbon off">-50%</span></li>
									<li>Average price $35</li>
								</ul>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- /container -->
	<div class="bg_gray">
		<div class="container margin_60_40 how">
			<div class="main_title center">
				<span><em></em></span>
				<h2>How does it work?</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
			</div>
			<div class="row justify-content-center align-items-center add_bottom_45">
				<div class="col-lg-5">
					<div class="box_about">
						<strong>1</strong>
						<h3>Search for a Professional</h3>
						<p>Search over 12.000 verifyed professionals that match your criteria.</p>
						<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/arrow_about.png" alt="" class="arrow_1 lazy">
					</div>
				</div>
				<div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
					<figure><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/about_1.svg" alt="" class="img-fluid lazy" width="180" height="180"></figure>
				</div>
			</div>
			<!-- /row -->
			<div class="row justify-content-center align-items-center add_bottom_45">
				<div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
					<figure><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/about_2.svg" alt="" class="img-fluid lazy" width="180" height="180"></figure>
				</div>
				<div class="col-lg-5">
					<div class="box_about">
						<strong>2</strong>
						<h3>View Professional Profile</h3>
						<p>View professional introduction and read reviews from other customers.</p>
						<img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/arrow_about.png" alt="" class="arrow_2 lazy">
					</div>
				</div>
			</div>
			<!-- /row -->
			<div class="row justify-content-center align-items-center add_bottom_25">
				<div class="col-lg-5">
					<div class="box_about">
						<strong>3</strong>
						<h3>Enjoy the Consultation</h3>
						<p>Connect with your professional booking an appointment, via chat!</p>
					</div>
				</div>
				<div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
					<figure><img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==" data-src="img/about_3.svg" alt="" class="img-fluid lazy" width="180" height="180"></figure>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /bg_gray -->
	<div class="call_section version_2 lazy" data-bg="url(img/bg_call_section.jpg)">
		<div class="container clearfix">
			<div class="col-lg-5 col-md-6 float-right wow">
				<div class="box_1">
					<div class="ribbon_promo"><span>Free</span></div>
					<h3>Are you a Expert?</h3>
					<p>Join Us to increase your online visibility. You'll have access to even more customers who are looking to professional service or consultation.</p>
					<a href="#" class="btn_1">Join Now</a>
				</div>
			</div>
		</div>
	</div>
	<!--/call_section-->
</main>
<!-- /main -->
@include('layouts.footer')