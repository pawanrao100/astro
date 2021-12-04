<?php use App\Models\Photo; ?>

@include('layouts.header')
<main class="bg_color">
		
		<div class="filters_full element_to_stick">
		    <div class="container clearfix">
		        <div class="sort_select">
		            <select name="sort" id="sort">
		                <option value="popularity" selected="selected">Sort by Popularity</option>
		                <option value="rating">Sort by Average rating</option>
		                <option value="date">Sort by newness</option>
		            </select>
		        </div>
		        <a href="#collapseFilters" data-toggle="collapse" class="btn_filters"><i class="icon_adjust-vert"></i><span>Filters</span></a>
		        <a class="btn_map mobile btn_filters" data-toggle="collapse" href="#collapseMap"><i class="icon_pin_alt"></i></a>
		        <div class="search_bar_list">
				    <input type="text" class="form-control" placeholder="Search again...">
				</div>
				<a class="btn_search_mobile btn_filters" data-toggle="collapse" href="#collapseSearch"><i class="icon_search"></i></a>
		    </div>
		    <div class="collapse filters_2" id="collapseFilters">
		    <div class="container margin_detail">
		        <div class="row">
		            <div class="col-md-4">
		                <div class="filter_type">
		                    <h6>Rating</h6>
		                    <ul>
		                        <li>
		                            <label class="container_check">Superb 9+ <small>06</small>
		                                <input type="checkbox">
		                                <span class="checkmark"></span>
		                            </label>
		                        </li>
		                        <li>
		                            <label class="container_check">Very Good 8+ <small>12</small>
		                                <input type="checkbox">
		                                <span class="checkmark"></span>
		                            </label>
		                        </li>
		                        <li>
		                            <label class="container_check">Good 7+ <small>17</small>
		                                <input type="checkbox">
		                                <span class="checkmark"></span>
		                            </label>
		                        </li>
		                        <li>
		                            <label class="container_check">Pleasant 6+ <small>43</small>
		                                <input type="checkbox">
		                                <span class="checkmark"></span>
		                            </label>
		                        </li>
		                    </ul>
		                </div>
		            </div>
		            <div class="col-md-4">
		            	 <div class="filter_type">
		                    <h6>Availability</h6>
		                    <ul>
		                        <li>
		                            <label class="container_check">Apointment <small>12</small>
		                                <input type="checkbox">
		                                <span class="checkmark"></span>
		                            </label>
		                        </li>
		                        <li>
		                            <label class="container_check">Chat <small>24</small>
		                                <input type="checkbox">
		                                <span class="checkmark"></span>
		                            </label>
		                        </li>
		                        
		                    </ul>
		                </div>
		            </div>
		            <div class="col-md-4">
		                <div class="filter_type">
		                    <h6>Price</h6>
		                    <div class="range_input">Price range from 0 to <span></span>$</div>
		                    <div><input type="range" min="10" max="100" step="10" value="30" data-orientation="horizontal"></div>
		                </div>
		            </div>
		        </div>
		        <!-- /row -->
		    </div>
		</div>
		<!-- /filters -->
		<div class="collapse" id="collapseSearch">
		    <div class="search_bar_list">
		        <input type="text" class="form-control" placeholder="Search again...">
		    </div>
		</div>
		<!-- /collapseSearch -->
		</div>
		<!-- /filters_full -->

		<div class="collapse" id="collapseMap">
			<div id="map" class="map"></div>
		</div>
		<!-- /Map -->

		<div class="container margin_30_40">
			<div class="page_header">
			    <div class="breadcrumbs">
			        <ul>
			            <li><a href="#">Home</a></li>
			            <li><a href="#">Category</a></li>
			            <li>Astrologer</li>
			        </ul>
			    </div>
			    <h1>Astrologer</h1><span>: 814 found</span>
			</div>
			<!-- /page_header -->
	    <div class="row">

		<?php foreach($experts as $experts){
		$photo = Photo::where('id',$experts->photo_id)->first();
		?>
			<div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
				<div class="strip">
					<figure>
						<a href="#0" class="wish_bt"><i class="icon_heart"></i></a>
						<div class="score"><strong>9.5</strong></div>
						<img src="img/lazy-placeholder.png" data-src="{{ URL::to('/') }}/public/images/media/{{$photo->file}}" class="img-fluid lazy" alt="">
						<a href="detail-page.html" class="strip_info">
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
							<div ><span>Avg price $35 Hr.</span></div>
						</li>
					</ul>
				</div>
			</div>
			<!-- /strip grid -->
        <?php } ?>
		</div>
	    <!-- /row -->
	    <div class="pagination_fg">
	        <a href="#">&laquo;</a>
	        <a href="#" class="active">1</a>
	        <a href="#">2</a>
	        <a href="#">3</a>
	        <a href="#">4</a>
	        <a href="#">5</a>
	        <a href="#">&raquo;</a>
	    </div>
	</div>
	<!-- /container -->
		
	</main>
	<!-- /main -->
    @include('layouts.footer')