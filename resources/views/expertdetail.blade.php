<?php use App\Models\Photo; ?>
@include('layouts.header2')
<?php // echo '<pre>'; print_r($expertDetail); die;
$photo = Photo::where('id',$expertDetail->photo_id)->first();
?>
<main class="bg_color">
	    <div class="container margin_detail">
	        <div class="row">
	            <div class="col-xl-8 col-lg-7">
	                <div class="box_general">
	                	 <div class="d-none d-sm-block">
	                        <img src="img/detail.jpg" alt="" class="img-fluid">
	                    </div>
	                    <div class="main_info_wrapper">
	                        <div class="main_info clearfix">
	                            <div class="user_thumb">
	                                <figure><img src="{{ URL::to('/') }}/public/images/media/{{$photo->file}}" alt=""></figure>
	                                <em class="online"><span></span>On line</em>
	                            </div>
	                            <div class="user_desc">
	                                <h3>{{$expertDetail->name}}</h3>
									<p>Contact : {{$expertDetail->phone}}<br>
									Email : {{$expertDetail->email}}</br>
	                                Address : {{$expertDetail->address}}<br>{{$expertDetail->city}} </p>
	                                <ul class="tags">
	                                    <li><a href="#0">Astrologer</a></li> 
	                                    <li><a href="#0">Researcher</a></li>
	                                </ul>
	                            </div>
	                            <div class="score_in">
	                                <div class="rating">
	                                    <div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div>
	                                </div>
	                                <a href="#0" class="wish_bt"><i class="icon_heart_alt"></i></a>
	                            </div>
	                        </div>
	                        <!-- /main_info_wrapper -->
	                        <hr>
	                        <h4>About me</h4>
	                        <p>Tincidunt intellegam mel ne, an eam menandri invenire euripidis. Ea quo utroque forensibus eloquentiam. Nam ad option iisque verterem, sed nemore menandri ex. Pri ei solet eripuit, et nam decore tacimates persequeris. Te nec duis corpora persequeris, vix ubique graece intellegat ea. In pro <strong>euismod molestie</strong>, eam sonet doming offendit ut.</p>
	                        <div class="content_more">
	                            <p>Lorem ipsum dolor sit amet, an sea eius elitr persius. Voluptaria inciderint qui in. No tollit aliquid reformidans mei, nec illum sensibus id, at has esse admodum adipisci. Et has maiestatis scriptorem. Et aeque iudico oblique ius.</p>
	                        </div>
	                        <!-- /content_more -->
	                        <a href="#0" class="show_hide" data-content="toggle-text">Read More</a>
	                    </div>
	                    <!-- /main_info -->
	                </div>
	                <!-- /box_general -->
	                <div class="box_general">
	                    <div class="tabs_detail">
	                        <ul class="nav nav-tabs" role="tablist">
	                            <li class="nav-item">
	                                <a id="tab-A"  class="nav-link active" data-toggle="tab" role="tab">Other info</a>
	                            </li>
	                            
	                        </ul>
	                        <div class="tab-content" role="tablist">
	                            <div id="pane-A" class="card tab-pane fade show active" role="tabpanel" aria-labelledby="tab-A">
	                                <div class="card-header" role="tab" id="heading-A">
	                                    <h5>
	                                        <a class="collapsed" data-toggle="collapse" href="#collapse-A" aria-expanded="true" aria-controls="collapse-A">
	                                            Other info
	                                        </a>
	                                    </h5>
	                                </div>
	                                <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
	                                    <div class="card-body info_content">
	                                        <div class="indent_title_in">
	                                            <i class="icon_document_alt"></i>
	                                            <h3>Services</h3>
	                                            <p>Mussum ipsum cacilds, vidis litro abertis.</p>
	                                        </div>
	                                        <div class="wrapper_indent">
	                                            <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit.</p>
	                                            <h6>Most requested services</h6>
	                                            <div class="services_list clearfix">
	                                                <ul>
	                                                    <li>Service 1 <strong><small>from</small> $80</strong></li>
	                                                    <li>Service 2 <strong><small>from</small> 110$</strong></li>
	                                                    <li>Service 3 <strong><small>from</small> $95</strong></li>
	                                                </ul>
	                                            </div>
	                                        </div>
	                                        <!--  End wrapper indent -->
	                                        <hr>
	                                        <div class="indent_title_in">
	                                            <i class="icon_document_alt"></i>
	                                            <h3>Professional statement</h3>
	                                            <p>Mussum ipsum cacilds, vidis litro abertis.</p>
	                                        </div>
	                                        <div class="wrapper_indent">
	                                            <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.</p>
	                                            <h6>Specializations</h6>
	                                            <div class="row">
	                                                <div class="col-lg-6">
	                                                    <ul class="bullets">
	                                                        <li>Service </li>
															<li>Service </li>
															<li>Service </li>
															<li>Service </li>
	                                                    </ul>
	                                                </div>
	                                                <div class="col-lg-6">
	                                                    <ul class="bullets">
	                                                        <li>Service </li>
															<li>Service </li>
															<li>Service </li>
															<li>Service </li>
	                                                    </ul>
	                                                </div>
	                                            </div>
	                                            <!-- /row-->
	                                        </div>
	                                        <!--  End wrapper indent -->
	                                        <hr>
	                                        <div class="indent_title_in">
	                                            <i class="icon_document_alt"></i>
	                                            <h3>Education</h3>
	                                            <p>Mussum ipsum cacilds, vidis litro abertis.</p>
	                                        </div>
	                                        <div class="wrapper_indent add_bottom_25">
	                                            <p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nisi. Nullam mollis. Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapi.</p>
	                                            <h6>Curriculum</h6>
	                                            <ul class="bullets">
	                                                <li><strong>Mussum ipsum cacilds</strong> - Doctor of Medicine</li>
	                                                <li><strong>Montefiore Medical Center</strong> - Residency in Internal Medicine</li>
	                                                <li><strong>Mussum ipsum cacilds</strong> - Master Internal Medicine</li>
	                                            </ul>
	                                        </div>
	                                        <!--  End wrapper indent -->
	                                    </div>
	                                </div>
	                            </div>
	                           
	                        </div>
	                        <!-- /tab-content -->
					 
	                    </div>
	                    <!-- /tabs_detail -->
	                </div>
					<div class="box_general">
	                    <div class="tabs_detail">
	                        <ul class="nav nav-tabs" role="tablist">
	                            <li class="nav-item">
	                                <a id="tab-A"  class="nav-link active" data-toggle="tab" role="tab">Reviews</a>
	                            </li>
	                            
	                        </ul>
	                      
	                            
	                                    <div class="card-body reviews">
	                                        <div class="row add_bottom_45 d-flex align-items-center">
	                                            <div class="col-md-3">
	                                                <div id="review_summary">
	                                                    <strong>8.5</strong>
	                                                    <em>Superb</em>
	                                                    <small>Based on 4 reviews</small>
	                                                </div>
	                                            </div>
	                                            <div class="col-md-9 reviews_sum_details">
	                                                <div class="row">
	                                                    <div class="col-md-6">
	                                                        <h6>Response time</h6>
	                                                        <div class="row">
	                                                            <div class="col-xl-10 col-lg-9 col-9">
	                                                                <div class="progress">
	                                                                    <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
	                                                                </div>
	                                                            </div>
	                                                            <div class="col-xl-2 col-lg-3 col-3"><strong>9.0</strong></div>
	                                                        </div>
	                                                        <!-- /row -->
	                                                        <h6>Service</h6>
	                                                        <div class="row">
	                                                            <div class="col-xl-10 col-lg-9 col-9">
	                                                                <div class="progress">
	                                                                    <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
	                                                                </div>
	                                                            </div>
	                                                            <div class="col-xl-2 col-lg-3 col-3"><strong>9.5</strong></div>
	                                                        </div>
	                                                        <!-- /row -->
	                                                    </div>
	                                                    <div class="col-md-6">
	                                                        <h6>Communication</h6>
	                                                        <div class="row">
	                                                            <div class="col-xl-10 col-lg-9 col-9">
	                                                                <div class="progress">
	                                                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
	                                                                </div>
	                                                            </div>
	                                                            <div class="col-xl-2 col-lg-3 col-3"><strong>6.0</strong></div>
	                                                        </div>
	                                                        <!-- /row -->
	                                                        <h6>Price</h6>
	                                                        <div class="row">
	                                                            <div class="col-xl-10 col-lg-9 col-9">
	                                                                <div class="progress">
	                                                                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
	                                                                </div>
	                                                            </div>
	                                                            <div class="col-xl-2 col-lg-3 col-3"><strong>6.0</strong></div>
	                                                        </div>
	                                                        <!-- /row -->
	                                                    </div>
	                                                </div>
	                                                <!-- /row -->
	                                            </div>
	                                        </div>
	                                        <div id="reviews">
	                                            <div class="review_card">
	                                                <div class="row">
	                                                    <div class="col-md-2 user_info">
	                                                        <figure><img src="img/avatar4.jpg" alt=""></figure>
	                                                        <h5>Lukas</h5>
	                                                    </div>
	                                                    <div class="col-md-10 review_content">
	                                                        <div class="clearfix add_bottom_15">
	                                                            <span class="rating">8.5<small>/10</small> <strong>Rating average</strong></span>
	                                                            <em>Published 54 minutes ago</em>
	                                                        </div>
	                                                        <h4>"Great!!"</h4>
	                                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
	                                                        <ul>
	                                                            <li><a href="#0"><i class="icon_like"></i><span>Useful</span></a></li>
	                                                            <li><a href="#0"><i class="icon_dislike"></i><span>Not useful</span></a></li>
	                                                            <li><a href="#0"><i class="arrow_back"></i> <span>Reply</span></a></li>
	                                                        </ul>
	                                                    </div>
	                                                </div>
	                                                <!-- /row -->
	                                            </div>
	                                            <!-- /review_card -->
	                                            <div class="review_card">
	                                                <div class="row">
	                                                    <div class="col-md-2 user_info">
	                                                        <figure><img src="img/avatar6.jpg" alt=""></figure>
	                                                        <h5>Lukas</h5>
	                                                    </div>
	                                                    <div class="col-md-10 review_content">
	                                                        <div class="clearfix add_bottom_15">
	                                                            <span class="rating">8.5<small>/10</small> <strong>Rating average</strong></span>
	                                                            <em>Published 10 Oct. 2019</em>
	                                                        </div>
	                                                        <h4>"Awesome Experience"</h4>
	                                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
	                                                        <ul>
	                                                            <li><a href="#0"><i class="icon_like"></i><span>Useful</span></a></li>
	                                                            <li><a href="#0"><i class="icon_dislike"></i><span>Not useful</span></a></li>
	                                                            <li><a href="#0"><i class="arrow_back"></i> <span>Reply</span></a></li>
	                                                        </ul>
	                                                    </div>
	                                                </div>
	                                                <!-- /row -->
	                                            </div>
	                                            <!-- /review_card -->
	                                            <div class="review_card" style="margin-bottom: 0;">
	                                                <div class="row">
	                                                    <div class="col-md-2 user_info">
	                                                        <figure><img src="img/avatar1.jpg" alt=""></figure>
	                                                        <h5>Marika</h5>
	                                                    </div>
	                                                    <div class="col-md-10 review_content">
	                                                        <div class="clearfix add_bottom_15">
	                                                            <span class="rating">9.0<small>/10</small> <strong>Rating average</strong></span>
	                                                            <em>Published 11 Oct. 2019</em>
	                                                        </div>
	                                                        <h4>"Really great!!"</h4>
	                                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.</p>
	                                                        <ul>
	                                                            <li><a href="#0"><i class="icon_like"></i><span>Useful</span></a></li>
	                                                            <li><a href="#0"><i class="icon_dislike"></i><span>Not useful</span></a></li>
	                                                            <li><a href="#0"><i class="arrow_back"></i> <span>Reply</span></a></li>
	                                                        </ul>
	                                                    </div>
	                                                </div>
	                                                <!-- /row -->
	                                                <div class="row reply">
	                                                    <div class="col-md-2 user_info">
	                                                        <figure><img src="img/avatar.jpg" alt=""></figure>
	                                                    </div>
	                                                    <div class="col-md-10">
	                                                        <div class="review_content">
	                                                            <strong>Reply from Prozim</strong>
	                                                            <em>Published 3 minutes ago</em>
	                                                            <p><br>Hi Monika,<br><br>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his. Tollit molestie suscipiantur his et.<br><br>Thanks</p>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                                <!-- /reply -->
	                                            </div>
	                                            <!-- /review_card -->
	                                        </div>
	                                        <!-- /reviews -->
	                                        
	                                    </div>
	                                 
	                           
	                         
					 
	                    </div>
	                    <!-- /tabs_detail -->
	                </div>



					<div class="box_general write_review">
						<h1 class="add_bottom_15">Write a review for "Dr. Maria Cornfield"</h1>

						<label class="d-block add_bottom_15">Overall rating</label>
						<div class="row">
							<div class="col-md-3 add_bottom_25">
							   <div class="add_bottom_15">Response time <strong class="food_quality_val"></strong></div>
			                   <input type="range" min="0" max="10" step="1" value="0" data-orientation="horizontal" id="food_quality" name="food_quality">
							</div>
							<div class="col-md-3 add_bottom_25">
								<div class="add_bottom_15">Service <strong class="service_val"></strong></div>
			                   <input type="range" min="0" max="10" step="1" value="0" data-orientation="horizontal" id="service" name="service">
							</div>
							<div class="col-md-3 add_bottom_25">
								<div class="add_bottom_15">Communication <strong class="location_val"></strong></div>
			                   <input type="range" min="0" max="10" step="1" value="0" data-orientation="horizontal" id="location" name="location">
							</div>
							<div class="col-md-3 add_bottom_25">
								<div class="add_bottom_15">Price <strong class="price_val"></strong></div>
			                   <input type="range" min="0" max="10" step="1" value="0" data-orientation="horizontal" id="price" name="price">
							</div>
						</div>
						
						<div class="form-group">
							<label>Title of your review</label>
							<input class="form-control" type="text" placeholder="If you could say it in one sentence, what would you say?">
						</div>
						<div class="form-group">
							<label>Your review</label>
							<textarea class="form-control" style="height: 180px;" placeholder="Write your review to help others learn about this online business"></textarea>
						</div>
						<div class="form-group">
							<label>Add your photo (optional)</label>
							<div class="fileupload"><input type="file" name="fileupload" accept="image/*"></div>
						</div>
						<div class="form-group">
							<div class="checkboxes float-left add_bottom_15 add_top_15">
								<label class="container_check">Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</div>
						</div>
						<a href="#" class="btn_1">Submit review</a>
					</div>
	            </div>
	            <!-- /col -->
	            <div class="col-xl-4 col-lg-5" id="sidebar_fixed">
	                <div class="box_booking mobile_fixed">
	                    <div class="head">
	                        <h3>Book a Appointment</h3>
	                        <a href="#0" class="close_panel_mobile"><i class="icon_close"></i></a>
	                    </div>
	                    <!-- /head -->
	                    <div class="main">
	                        <div class="radio_select type">
	                            <ul>
									<li class="chat_btn">
	                                    <input type="radio" id="chat" checked name="type" value="12.30pm">
	                                    <label for="chat"><i class="icon-chat"></i> Chat</label>
	                                </li>
	                                <li class="appointment_btn">
	                                    <input type="radio" id="appointment"  name="type" value="12.00pm">
	                                    <label for="appointment"><i class="icon-users"></i> Appointment</label>
	                                </li>
	                               
	                                
	                            </ul>
	                        </div>
	                        <!-- /type -->
							<div class="chat_div">
	                         
	                         <p>Start Chat</p>
	                        <!-- /dropdown -->
	                        <a href="#" class="btn_1 full-width booking">Chat Now</a>
						</div>

							<div class="appointment_div">
	                        <input type="text" id="datepicker_field">
	                        <div id="DatePicker"></div>
	                        <div class="dropdown time">
	                            <a href="#" data-toggle="dropdown">Hour <span id="selected_time"></span></a>
	                            <div class="dropdown-menu">
	                                <div class="dropdown-menu-content">
	                                    <div class="radio_select">
	                                        <ul>
	                                            <li>
	                                                <input type="radio" id="time_1" name="time" value="12.00pm">
	                                                <label for="time_1">12.00<small>pm</small></label>
	                                            </li>
	                                            <li>
	                                                <input type="radio" id="time_2" name="time" value="12.30pm">
	                                                <label for="time_2">12.30<small>pm</small></label>
	                                            </li>
	                                            <li>
	                                                <input type="radio" id="time_3" name="time" value="1.00pm">
	                                                <label for="time_3">1.00<small>pm</small></label>
	                                            </li>
	                                            <li>
	                                                <input type="radio" id="time_4" name="time" value="1.30pm">
	                                                <label for="time_4">1.30<small>pm</small></label>
	                                            </li>
	                                            <li>
	                                                <input type="radio" id="time_5" name="time" value="2.00pm">
	                                                <label for="time_5">2.00<small>pm</small></label>
	                                            </li>
	                                            <li>
	                                                <input type="radio" id="time_6" name="time" value="02.30pm">
	                                                <label for="time_6">2.30<small>pm</small></label>
	                                            </li>
	                                            <li>
	                                                <input type="radio" id="time_7" name="time" value="03.00pm">
	                                                <label for="time_7">3.00<small>pm</small></label>
	                                            </li>
	                                            <li>
	                                                <input type="radio" id="time_8" name="time" value="03.30pm">
	                                                <label for="time_8">3.30<small>pm</small></label>
	                                            </li>
	                                        </ul>
	                                    </div>
	                                    <!-- /time_select -->
	                                </div>
	                            </div>
	                        </div>
	                        <!-- /dropdown -->
	                        <a href="#" class="btn_1 full-width booking">Book Now</a>
						</div>



	                    </div>
	                </div>
	                <!-- /box_booking -->
	                <div class="btn_reserve_fixed"><a href="#0" class="btn_1 full-width booking">Book Now</a></div>
	                <ul class="share-buttons">
	                    <li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
	                    <li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Share</a></li>
	                    <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
	                </ul>
	            </div>
	        </div>
	        <!-- /row -->
	    </div>
	    <!-- /container -->
	</main>
	<!-- /main -->
  
@include('layouts.footer')