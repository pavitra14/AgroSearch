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
                        Featured Ads Start
                *************************************-->
                <section class="tg-sectionspace tg-haslayout">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-sectionhead">
                                    <div class="tg-title">
                                        <h2>{{$mode}} Ads</h2>
                                    </div>
                                    <div class="tg-description">
                                        <p>Over {{$$mode->count()}} {{$mode}} Ads</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tg-ads">
                                @foreach ($$mode as $listing)
                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tg-ad tg-verifiedad">
                                            <figure>
                                                <span class="tg-themetag tg-featuretag">{{$mode}}</span>
                                                <a href="{{url('/listing/'.$listing->id)}}"><img src="{{url('/').'/'.$listing->listing_img}}" alt="{{$listing->listing_desc}}"></a>
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
                                {{$$mode->links()}}
                            </div>
                        </div>
                    </div>
                </section>
                <!--************************************
                        Featured Ads End
                *************************************-->
                
                
            </main>
            <!--************************************
                    Main End
            *************************************-->
@endsection