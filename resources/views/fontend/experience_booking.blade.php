@extends('fontend.layouts.master')
@section('pageTitle') dashboard @endsection
@push('css')
@endpush
@section('page-header')
<img src="{{asset('fontend/images/bg8.jpg')}}" class="bg1"/>
	<div class="container row">
		<div class="col-md-12">
			<button class="btn btn-gallery view-hotel-img"><img src="{{asset('fontend/images/image-gallery.png')}}" height="16px" width="16px" /><span style="padding-left: 5px;">View Photos</span></button>
		</div>
	</div>
@endsection
@section('content')
<div class="row">
	<div id="content12">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="row">
					</div>
					<div class="row">
						<div class="col-md-12">
							<h3>{{$packege->name}}</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<span class="hotel-review">
								<img src="{{asset('fontend/images/star.png')}}" class="staricon"/>
								<img src="{{asset('fontend/images/star.png')}}" class="staricon"/>
								<img src="{{asset('fontend/images/star.png')}}" class="staricon"/>
								<img src="{{asset('fontend/images/star.png')}}" class="staricon"/>
								<img src="{{asset('fontend/images/star.png')}}" class="staricon"/>
								<span class="review">&nbsp;&nbsp;1 review</span>
							</span>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<span>Duration : </span><span> {{$packege->duration}} hour(s)</span>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<span>Location : </span><span> {{$packege->destination->name}}</span>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-8">
							<h4 class="hotel-sub-titles">Reviews</h4>
						</div>
						<div class="col-md-4">
							<a class="view-more-review">More reviews</a>
						</div>
					</div>
					<div class="row">
						<div class="review-hotel-container">
							<div class="col-md-2">
								<span>
									<img src="{{asset('fontend/images/profile-pic.png')}}" class="profile-pic-comment" />
								</span>
							</div>
							<div class="col-md-10">
								<div class="comment-name">Tsunghsien</div>
								<div class="comment-review-star">
									<img src="{{asset('fontend/images/star.png')}}" class="staricon"/><img src="{{asset('fontend/images/star.png')}}" class="staricon"/><img src="{{asset('fontend/images/star.png')}}" class="staricon"/><img src="{{asset('fontend/images/star.png')}}" class="staricon"/><img src="{{asset('fontend/images/star.png')}}" class="staricon"/><span class="review">&nbsp;&nbsp;2019/04/15</span>
								</div>
								<div class="comment-review-desc">
									Miss Lu, a young and bloody student, has many stories about the Big Island. Listening and listening to the spirit are coming! Although the volcano is not erupting now. But the beautiful story is also a good experience.
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4 booking-price-container">
					<div>
						<div class="col-md-12" style="padding-bottom: 5px;">
							<img src="{{asset('fontend/images/question-mark.png')}}" />
							Price Guarantee
						</div>
						<div class="col-md-6" style="padding-bottom: 20px;">
							<label>
								Start form
							</label>
						</div>
						<div class="col-md-6" style="padding-bottom: 20px;">
							<span class="price-label" style="float: right;">{{$packege->per_persion_price}}</span>
						</div>
						<div class="col-md-12" style="padding-bottom: 20px;">
							<a href="#package-options-content" class="btn btn-info btn-book-redirect">Book</a>
						</div>
						<div class="col-md-12" style="padding-bottom: 20px;">
							<p>To be confirmed within 3 working day(s)</p>
						</div>
					</div>
				</div>
				
				<div class="col-md-12">
					<div id="package-options-content"></div>
					<br>
					<div class="row">
						<div class="col-md-12 package-options bg-experience">
							<div class="container-fluid">
								<div class="col-md-12">
									<h4 class="hotel-sub-titles">
									Package options
									</h4>
								</div>
								<form>
									<div class="col-md-7">
									@foreach ($packege->packege_option as $option)
								
										<div class="one-way">
											<div class ="row">
												<b><span class="col-md-8">{{$option->option_name}}</span><span class="price-package">RM{{$option->option_price}}</span>
												<span id="ck-button"><label><input type="checkbox" id="one-way-pack" class="hidden" name="one-way" value="1" onclick="showDiv('one-way-pack')" /><span>Select</span></label></span></b>
											</div>
											<div id="package-details-container-one" class="row">
												<div class="col-md-6">
													<div><label>Select Depart Date</label></div>
													<div style="padding-bottom: 10px;"><input type="date" id="depart-date" class="form-control" name="depart-date" onchange="getPackageDetail('depart-date')" required / value="{{$option->start_date}}"></div>
												</div>
												<div class="col-md-6">
												</div>
												<div class="col-md-12">
													<label>Select Pack Quantity</label>
												</div>
												<div class="col-md-6">
													<div style="padding-bottom: 10px;">
														<select id="pack-quantity" class="form-control" name="pack-quantity" onchange="getPackageDetail('pack-quantity')" required>
															<option value="">Select Pack Quantity</option>
															<option value='1'>1</option>
															<option value='2'>2</option>
															<option value='3'>3</option>
															<option value='4'>4</option>
															<option value='5'>5</option>
															<option value='6'>6</option>
															<option value='7'>7</option>
															<option value='8'>8</option>
															<option value='9'>9</option>
															<option value='10'>10</option>
															<option value='11'>11</option>
															<option value='12'>12</option>
															<option value='13'>13</option>
															<option value='14'>14</option>
															<option value='15'>15</option>
															<option value='16'>16</option>
															<option value='17'>17</option>
															<option value='18'>18</option>
															<option value='19'>19</option>
															<option value='20'>20</option>
														</select>
													</div>
												</div>
												<div class="col-md-6">
												</div>
												<div class="col-md-12">
													<p>Your Itinerary :</p>
												</div>
												@foreach ($option->packegeitinary as $itinary)
													{{-- expr --}}
												
												<div class="col-md-3">
													<input type="time" id="time1-0" class="form-control form-control100 itinerary-form1" name="time1[0]" value="09:00" readonly />
												</div>
												<div class="col-md-9">
													<input type="text" id="activity1-0" class="form-control form-control100 itinerary-form1" name="activity1[0]" value="Hotel pick up" readonly />
												</div>
												@endforeach
								
												<div id="itinerary-container1">
												</div>
												<div class="col-md-3">
													<button type="button" id="edit-itinerary-btn1" class="btn btn-info form-control" name="edit-btn1">Edit</button>
												</div>
												<div class="col-md-3">
													<button type="button" id="add-itinerary-btn1" class="btn btn-info form-control" name="add-btn1">Add</button>
												</div>
												<input type="hidden" id="price-package-select" name="price-package" value="300" />
											</div>
										</div>
									@endforeach
										{{-- <div class="two-way">
											<div class ="row package-details-two-way">
												<b><span class="col-md-8">Langkawi Explore : Mysterious Island (Two Way)</span><span class="price-package">RM500</span>
												<span id="ck-button1"><label><input type="checkbox" id="two-way-pack" class="hidden" name="two-way" value="1" onclick="showDiv('two-way-pack')" /><span>Select</span></label></span></b>
											</div>
											<div id="package-details-container-two" class="row">
												<div class="col-md-6">
													<div><label>Select Depart Date</label></div>
													<div style="padding-bottom: 10px;"><input type="date" id="depart-date2" class="form-control"  name="depart-date2"  onchange="getPackageDetail2('depart-date2')"required />
												</div>
											</div>
											<div class="col-md-6">
											</div>
											<div class="col-md-12">
												<label>Select Pack Quantity</label>
											</div>
											<div class="col-md-6">
												<div style="padding-bottom: 10px;">
													<select id="pack-quantity2" class="form-control" name="pack-quantity2"  onchange="getPackageDetail2('pack-quantity2')" required >
														<option value="">Select Pack Quantity</option>
														<option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option>															</select>
													</div>
												</div>
												<div class="col-md-6">
												</div>
												<div class="col-md-12">
													<p>Your Itinerary :</p>
												</div>
												<div class="col-md-3">
													<input type="time" id="time2-0" class="form-control form-control100 itinerary-form2" name="time2[0]" value="09:00" readonly />
												</div>
												<div class="col-md-9">
													<input type="text" id="activity2-0" class="form-control form-control100 itinerary-form2" name="activity2[0]" value="Hotel pick up" readonly />
												</div>
												<div class="col-md-3">
													<input type="time" id="time2-1" class="form-control form-control100 itinerary-form2" name="time2[1]" value="10:00" readonly />
												</div>
												<div class="col-md-9">
													<input type="text" id="activity2-1" class="form-control form-control100 itinerary-form2" name="activity2[1]" value="Arrive at Oriental Village" readonly />
												</div>
												<div class="col-md-3">
													<input type="time" id="time2-2" class="form-control form-control100 itinerary-form2" name="time2[2]" value="12:30" readonly />
												</div>
												<div class="col-md-9">
													<input type="text" id="activity2-2" class="form-control form-control100 itinerary-form2" name="activity2[2]" value="Lunch" readonly />
												</div>
												<div class="col-md-3">
													<input type="time" id="time2-3" class="form-control form-control100 itinerary-form2" name="time2[3]" value="13:45" readonly />
												</div>
												<div class="col-md-9">
													<input type="text" id="activity2-3" class="form-control form-control100 itinerary-form2" name="activity2[3]" value="Temerun Waterfall" readonly />
												</div>
												<div class="col-md-3">
													<input type="time" id="time2-4" class="form-control form-control100 itinerary-form2" name="time2[4]" value="15:15" readonly />
												</div>
												<div class="col-md-9">
													<input type="text" id="activity2-4" class="form-control form-control100 itinerary-form2" name="activity2[4]" value="Visit Crocodile Adventure Langkawi" readonly />
												</div>
												<div class="col-md-3">
													<input type="time" id="time2-5" class="form-control form-control100 itinerary-form2" name="time2[5]" value="16:30" readonly />
												</div>
												<div class="col-md-9">
													<input type="text" id="activity2-5" class="form-control form-control100 itinerary-form2" name="activity2[5]" value="Arrive at Pantai Cenang Beach" readonly />
												</div>
												<div class="col-md-3">
													<input type="time" id="time2-6" class="form-control form-control100 itinerary-form2" name="time2[6]" value="19:00" readonly />
												</div>
												<div class="col-md-9">
													<input type="text" id="activity2-6" class="form-control form-control100 itinerary-form2" name="activity2[6]" value="Back to Hotel" readonly />
												</div>
												<div id="itinerary-container2">
													
												</div>
												<div class="col-md-3">
													<button type="button" id="edit-itinerary-btn2" class="btn btn-info form-control" name="edit-btn2">Edit</button>
												</div>
												<div class="col-md-3">
													<button type="button" id="add-itinerary-btn2" class="btn btn-info form-control" name="add-btn2">Add</button>
												</div>
												<input type="hidden" id="price-package-select2" name="price-package" value="500" />
											</div>
										</div> --}}
									</div>
									<div class="col-md-5 booking-price-container">
										<div>
											<div class="col-md-12" style="padding-bottom: 5px;">
												<img src="./images/question-mark.png" /><label>&nbsp;Order Details</label>
											</div>
											<div class="col-md-12" style="padding-bottom: 20px;">
												<label><span>Langkawi Explore : Mysterious Island </span><span id="option-package-selected"></span></label>
											</div>
											<div class="col-md-12" style="padding-bottom: 20px;">
												<span id="depart-date-txt" class="depart-date-details flt-left" style="float: left;"></span>
											</div>
											<div class="col-md-12">
												<div class="order-details">
													<div id="package-op" class="col-md-5"></div>
													<div id="pack-quantity-txt" class="col-md-3 align-right-col"></div>
													<div id="price-txt" class="col-md-4 align-right-col"></div>
												</div>
											</div>
											<div class="col-md-12">
												<div class="order-total-prices">
													<div class="col-md-6">Total</div>
													<div id="total-price-txt" class="col-md-6 align-right-col"></div>
												</div>
											</div>
											<div class="col-md-12" style="padding-bottom: 20px;">
												<input type="submit" class="btn btn-info btn-book" name="book-btn" value="Book now" />
											</div>
											<div class="col-md-12" style="padding-bottom: 10px;">
												<p>To be confirmed within 3 working day(s)</p>
											</div>
											<div class="col-md-12">
												<a href="" class="wishlist-btn"> Add to Wishlists</a>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<br>
				<br>
				<div class="col-md-7" style="padding-top: 50px;">
					<div class="row">
						<div class="col-md-12">
							<h4 class="hotel-sub-titles">Description</h4>
						</div>
						<div class="col-md-12">
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
						</div>
						<div class="col-md-12">
							<a class="show-all">Show all ></a>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<h4 class="hotel-sub-titles">Inclusive of</h4>
						</div>
						<div class="col-md-12">
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
						</div>
						<div class="col-md-12">
							<a class="show-all">Show all ></a>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<h4 class="hotel-sub-titles">Not inclusive of</h4>
						</div>
						<div class="col-md-12">
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
						</div>
						<div class="col-md-12">
							<a class="show-all">Show all ></a>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<h4 class="hotel-sub-titles">Booking information</h4>
						</div>
						<div class="col-md-12">
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
						</div>
						<div class="col-md-12">
							<a class="show-all">Show all ></a>
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<h4 class="hotel-sub-titles">Map</h4>
						</div>
						<div class="col-md-12">
							23, Lebuh Sungai Burung 3, 11000 Balik Pulau, Pulau Pinang.&nbsp;&nbsp;&nbsp;<a class="show-all">Get Direction ></a>
						</div>
						<div class="col-md-12">
							<img src="./images/google-map.jpg" class="google-map" />
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<h4 class="hotel-sub-titles">Cancellation Policy</h4>
						</div>
						<div class="col-md-12">
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,
						</div>
						<div class="col-md-12">
							<a class="show-all">Show all ></a>
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</div>
	</div>
@endsection
@push('js')
<!--===============================================================================================-->
<script type="text/javascript" src="{{asset('fontend/js/experience-booking.js')}}"></script>
		<script>
		function onSuccess(googleUser) {
			console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
		}
		function onFailure(error) {
			console.log(error);
		}
		function renderButton() {
			gapi.signin2.render('my-signin2', {
			'scope': 'profile email',
			'width': 240,
			'height': 50,
			'longtitle': true,
			'theme': 'dark',
			'onsuccess': onSuccess,
			'onfailure': onFailure
			});
		}
		</script>
		
		<script>
		function showPass() {
			var x = document.getElementById("password");
			if (x.type === "password") {
				x.type = "text";
			} else {
				x.type = "password";
				}
		}
		</script>

		<script>
		$(document).ready(function(){
		$("#ck-button").click(function(){
			$("p").toggle();
		});
		$("#show").click(function(){
			$("p").show();
		});
		});
		</script>
@endpush	