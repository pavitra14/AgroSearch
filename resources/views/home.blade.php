@extends('layouts.store')
@section('title')
    {{config("app.name")}} : Agriculture Listings
@endsection

@section('head')
<link rel="manifest" href="manifest.json">
@endsection

@section('content')
    <!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
                <!--************************************
                        Categories Search Start
                *************************************-->
                <section class="tg-haslayout">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-push-1 col-lg-10">
                                <div class="tg-categoriessearch">
                                    <div class="tg-title">
                                        <h2><span>Boost your search with</span> Trending Categories</h2>
                                    </div>
                                    <div id="tg-categoriesslider" class="tg-categoriesslider tg-categories owl-carousel">
                                        @php
                                            for($i = 1; $i <= category_count() ; $i++)
												{
                                                    echo '<div class="tg-category">';
                                                        echo '<div class="tg-categoryholder">';
                                                            echo '<figure><img src="'.asset('images/categories/'.$i.'.png').'" alt="'.category($i).'"></figure>';
                                                            echo '<h3>'.category($i).'</h3>';
                                                        echo '</div>';
                                                    echo '</div>';
												}
                                        @endphp
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                        Categories Search End
                *************************************-->
                <!--************************************
                        Featured Ads Start
                *************************************-->
                <section class="tg-sectionspace tg-haslayout">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-sectionhead">
                                    <div class="tg-title">
                                        <h2>Featured Ads</h2>
                                    </div>
                                    <div class="tg-description">
                                        <p>Over {{$featured_listings->count()}} Featured Ads</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tg-ads">
                                @foreach ($featured_listings as $listing)
                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tg-ad tg-verifiedad">
                                            <figure>
                                                <span class="tg-themetag tg-featuretag">featured</span>
                                                <a href="{{url('/listing/'.$listing->id)}}"><img src="{{$listing->listing_img}}" alt="{{$listing->listing_desc}}"></a>
                                            </figure>
                                            <div class="tg-adcontent">
                                                <ul class="tg-productcagegories">
                                                    <li><a href="{{url('/listing/'.$listing->id)}}">{{category($listing->listing_type)}}</a></li>
                                                </ul>
                                                <div class="tg-adtitle">
                                                    <h3><a href="{{url('/listing/'.$listing->id)}}">{{$listing->listing_title}} for {{$listing->listing_sell_mode}}</a></h3>
                                                </div>
                                                <time datetime="2017-06-06">Last Updated on {{date('d-m-Y', strtotime($listing->updated_at))}}</time>
                                                <div class="tg-adprice"><h4>Rs. {{$listing->listing_rate}}/{{$listing->listing_mode}}</h4></div>
                                                <address>
                                                    {{$listing->user()->firstOrFail()->city}}, {{$listing->user()->firstOrFail()->state}}, {{$listing->user()->firstOrFail()->zipcode}}
                                                </address>
                                                <div class="tg-phonelike">
                                                    <a class="tg-btnphone" href="tel:{{$listing->user()->firstOrFail()->phone}}">
                                                        <i class="icon-phone-handset"></i>
                                                        <span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="{{$listing->user()->firstOrFail()->phone}}"><em>Show Phone No.</em></span>
                                                    </a>
                                                    <span class="tg-like tg-liked"><i class="fa fa-heart"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-btnbox">
                                    <a class="tg-btn" href="javascript:void(0);">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                        Featured Ads End
                *************************************-->
                <!--************************************
                        Latest Posted Ads Start
                *************************************-->
                <section class="tg-sectionspace tg-bglight tg-haslayout">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-sectionhead">
                                    <div class="tg-title">
                                        <h2>Latest Posted Ads</h2>
                                    </div>
                                    {{-- <div class="tg-description">
                                        <p>Over 10,56,432 New Ads</p>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="tg-ads">
                                @foreach ($latest_listings as $listing)
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                        <div class="tg-ad tg-verifiedad">
                                            <figure>
                                                {{-- <span class="tg-themetag tg-featuretag">featured</span> --}}
                                                <a href="{{url('/listing/'.$listing->id)}}"><img src="{{$listing->listing_img}}" alt="{{$listing->listing_desc}}" class="img-responsive"></a>
                                            </figure>
                                            <div class="tg-adcontent">
                                                <ul class="tg-productcagegories">
                                                    <li><a href="{{url('/listing/'.$listing->id)}}">{{category($listing->listing_type)}}</a></li>
                                                </ul>
                                                <div class="tg-adtitle">
                                                    <h3><a href="{{url('/listing/'.$listing->id)}}">{{$listing->listing_title}} for {{$listing->listing_sell_mode}}</a></h3>
                                                </div>
                                                <time datetime="2017-06-06">Last Updated on {{date('d-m-Y', strtotime($listing->updated_at))}}</time>
                                                <div class="tg-adprice"><h4>Rs. {{$listing->listing_rate}}/{{$listing->listing_mode}}</h4></div>
                                                <address>
                                                        {{$listing->user()->firstOrFail()->city}}, {{$listing->user()->firstOrFail()->state}}, {{$listing->user()->firstOrFail()->zipcode}}
                                                </address>
                                                <div class="tg-phonelike">
                                                    <a class="tg-btnphone" href="tel:{{$listing->user()->firstOrFail()->phone}}">
                                                        <i class="icon-phone-handset"></i>
                                                        <span data-toggle="tooltip" data-placement="top" title="Show Phone No." data-last="{{$listing->user()->firstOrFail()->phone}}"><em>Show Phone No.</em></span>
                                                    </a>
                                                    <span class="tg-like tg-liked"><i class="fa fa-heart"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-btnbox">
                                    <a class="tg-btn" href="javascript:void(0);">View All</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                        Latest Posted Ads End
                *************************************-->
                
            </main>
            <!--************************************
                    Main End
            *************************************-->
@endsection