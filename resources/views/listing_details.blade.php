@extends('layouts.store')
@section('title')
    {{$listing->listing_title}} - AgroSearch
@endsection

@section('content')
    <!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					About Us Start
			*************************************-->
			<div class="container">
				<div class="row">
					<div id="tg-twocolumns" class="tg-twocolumns">
						<div class="col-xs-12 col-sm-5 col-md-4 col-lg-4">
							<aside id="tg-sidebar" class="tg-sidebar">
								<div class="tg-pricebox">
									<div class="tg-priceandlastupdate">
										<span>Rs. {{$listing->listing_rate}}/{{$listing->listing_mode}}</span>
										<span>Last Updated on {{date('d-m-Y', strtotime($listing->updated_at))}}</span>
									</div>
								</div>
								<div class="tg-sellercontactdetail">
									<div class="tg-sellertitle"><h1>Seller Contact Detail</h1></div>
									<div class="tg-sellercontact">
										<div class="tg-memberinfobox">
											<figure><a href="javascript:void(0);"><img src="{{gravatar($listing_user->email)}}" alt="{{$listing_user->name}}"></a></figure>
											<div class="tg-memberinfo">
												<h3><a href="javascript:void(0);">{{$listing_user->name}}</a></h3>
												<span>Member Since {{date('M d , Y', strtotime($listing_user->created_at))}}</span>
												{{-- <a class="tg-btnseeallads" href="javascript:void(0);">See All Ads</a> --}}
											</div>
										</div>
										<a class="tg-btnphone" href="tel:{{$listing->user()->firstOrFail()->phone}}">
											<i class="icon-phone-handset"></i>
											<span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="{{$listing->user()->firstOrFail()->phone}}">
												<em>Show Phone No.</em>
												<span>Click To Show Number</span>
											</span>
										</a>
										<a class="tg-btnmakeanoffer" href="addetail.html#" data-toggle="modal" data-target="#tg-modalmakeanoffer">
											<i class="icon-briefcase"></i>
											<span>
												<em>Make An Offer</em>
												<span>Place Your Best Offer Now</span>
											</span>
										</a>
										<span class="tg-like tg-liked"><i class="fa fa-heart">Add To Favourite</i></span>
									</div>
									<div class="tg-sellerlocation">
										<div id="tg-locationmap" class="tg-locationmap"></div>
									</div>
								</div>
								<div class="tg-safetytips">
									<div class="tg-safetytipstitle"><h2>Safety Tips</h2></div>
									<div id="tg-safetytipsslider" class="tg-safetytipsslider slid owl-carousel">
										<div class="item tg-safetytip active">
											<h3>TIP # 01:</h3>
											<div class="tg-description">
												<p>Make sure to check the product at delivery.</p>
											</div>
										</div>
										<div class="item tg-safetytip">
											<h3>TIP # 02:</h3>
											<div class="tg-description">
												<p>Always check the identity of the seller.</p>
											</div>
										</div>
										<div class="item tg-safetytip">
											<h3>TIP # 03:</h3>
											<div class="tg-description">
												<p>Contact our support assistant in case of any dispute.</p>
											</div>
										</div>
										
									</div>
									<div id="tg-currentandtotalslides" class="tg-currentandtotalslides"></div>
								</div>
								<div class="tg-reportthisadbox">
									<div class="tg-reportthisadtitle">
										<h2>Report This Ad</h2>
									</div>
									<form class="tg-formtheme tg-formreportthisad">
										<h3>Select Reason:</h3>
										<fieldset>
											<div class="tg-radio">
												<input id="tg-radioone" type="radio" name="repotadd" value="This is illegal/fraudulent" checked>
												<label for="tg-radioone">This is illegal/fraudulent</label>
											</div>
											<div class="tg-radio">
												<input id="tg-radiotwo" type="radio" name="repotadd" value="This ad is spam">
												<label for="tg-radiotwo">This ad is spam</label>
											</div>
											<div class="tg-radio">
												<input id="tg-radiothree" type="radio" name="repotadd" value="This ad is a duplicate">
												<label for="tg-radiothree">This ad is a duplicate</label>
											</div>
											<div class="tg-radio">
												<input id="tg-radiofour" type="radio" name="repotadd" value="This ad is in the wrong category">
												<label for="tg-radiofour">This ad is in the wrong category</label>
											</div>
											<div class="tg-radio">
												<input id="tg-radiofive" type="radio" name="repotadd" value="The ad goes against posting rules">
												<label for="tg-radiofive">The ad goes against <span class="tg-themecolor">posting rules</span></label>
											</div>
											<div class="form-group tg-inputwithicon">
												<i class="icon-bubble"></i>
												<textarea class="form-control" placeholder="Provide More Information"></textarea>
											</div>
											<div class="tg-btns">
												<button class="tg-btn" type="button">Send Report</button>
												<button class="tg-btn" type="button">Cancel</button>
											</div>
										</fieldset>
									</form>
								</div>
							</aside>
						</div>
						<div class="col-xs-12 col-sm-7 col-md-8 col-lg-8">
							<div id="tg-content" class="tg-content">
								<div class="tg-ad tg-verifiedad tg-detail tg-addetail">
									<div class="tg-adcontent">
										<ul class="tg-pagesequence">
											<li><a href="javascript:void(0);">{{category($listing->listing_type)}}</a></li>
										</ul>
										<div class="tg-adtitle">
											<h2>{{$listing->listing_title}}</h2>
										</div>
										<ul class="tg-admetadata">
											<li>By: <a href="javascript:void(0);">{{$listing_user->name}}</a></li>
											<li>Ad Id: <a href="javascript:void(0);">{{$listing->id}}</a></li>
											<li><i class="icon-earth"></i><address>{{$listing->user()->firstOrFail()->city}}, {{$listing->user()->firstOrFail()->state}}</address></li>
											<li><i class="icon-eye"></i><span>{{$listing->views}}</span></li>
										</ul>
										<div class="tg-share">
											<strong>share:</strong>
											<ul class="tg-socialicons">
												<li class="tg-facebook"><a href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
												<li class="tg-twitter"><a href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
												<li class="tg-linkedin"><a href="javascript:void(0);"><i class="fa fa-linkedin"></i></a></li>
												<li class="tg-googleplus"><a href="javascript:void(0);"><i class="fa fa-google-plus"></i></a></li>
												<li class="tg-rss"><a href="javascript:void(0);"><i class="fa fa-rss"></i></a></li>
											</ul>
											<div class="tg-adadded">
												<i class="icon-smartphone"></i>
												<span>Added on {{date('M d , Y', strtotime($listing->created_at))}}</span>
											</div>
										</div>
									</div>
									<figure>
										<span class="tg-themetag tg-featuretag">featured</span>
										{{-- <span class="tg-photocount">See 18 Photos</span> --}}
										{{-- <div id="tg-productgallery" class="tg-productgallery"><p>Put your alt no-js content here.</p></div> --}}
									</figure>
									<div class="tg-description">
										<strong>{{$listing->listing_title}}</strong>
										<p>{{$listing->listing_title}}</p>
										<p>{!!$listing->listing_desc!!}</p>
										<div class="tg-fullimg">
											<figure><img src="{{url('/')}}/{{$listing->listing_img}}" alt="{{$listing->listing_title}}"></figure>
										</div>
										<p><span>Thanks!</span><i><img src="{{asset('images/icons/img-31.png')}}" alt="Thanks"></i></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--************************************
					About Us End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
@endsection

@section('before_body')
<div id="tg-modalmakeanoffer" class="modal fade tg-thememodal tg-modalmakeanoffer" tabindex="-1" role="dialog">
    <div class="modal-dialog tg-thememodaldialog" role="document">
        <button type="button" class="tg-close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <div class="modal-content tg-thememodalcontent">
            <div class="tg-title">
                <strong>Make An Offer</strong>
            </div>
            <form class="tg-formtheme tg-formmakeanoffer">
                @csrf
                <fieldset>
                    <div class="form-group">
                        <strong>Title:</strong>
                        <span>{{$listing->listing_title}}</span>
                    </div>
                    <div class="form-group">
                        <strong>Price:</strong>
                        <span>Rs. {{$listing->listing_rate}}/{{$listing->listing_mode}}</span>
                    </div>
                    <div class="form-group tg-inputwithicon">
                        <i class="icon-user"></i>
                        <input type="text" name="name" class="form-control" placeholder="Your Name*">
                    </div>
                    <div class="form-group tg-inputwithicon">
                        <i class="icon-envelope"></i>
                        <input type="number" name="phone" class="form-control" placeholder="Your Phone*">
                    </div>
                    <div class="form-group tg-inputwithicon">
                        <i class="icon-tag"></i>
                        <input type="text" name="offerprice" class="form-control" placeholder="Your Offer Price*">
                    </div>
                    <div class="form-group tg-inputwithicon">
                        <i class="icon-link"></i>
                        <input type="text" name="address" class="form-control" placeholder="Address">
                    </div>
                    <div class="form-group tg-inputwithicon">
                        <i class="icon-bubble"></i>
                        <textarea name="comment" class="form-control" placeholder="Comment"></textarea>
                    </div>
                    <div class="form-group tg-inputwithicon">
                        <div class="tg-checkbox">
                            <input id="tg-agree" type="checkbox" name="agrement" value="agree">
                            <label for="tg-agree">I have read &amp; agree on all points of <a href="javascript:void(0);">offer price policy</a></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="tg-btn" type="button">Send Offer Now</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@endsection