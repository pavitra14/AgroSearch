@extends('layouts.store')
@section('title')
    {{config("app.name")}} : Agriculture Listings
@endsection

@section('head')
<link rel="manifest" href="manifest.json">
@endsection

@section('content')
{{-- {{dd(config('app.locale'))}} --}}
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
                                        <h2><span>{!! GoogleTranslate::translate('Boost your search with Trending Categories', get_locale()) !!}</h2></span>
                                    </div>
                                    <div id="tg-categoriesslider" class="tg-categoriesslider tg-categories owl-carousel">
                                        @php
                                            for($i = 1; $i <= category_count() ; $i++)
												{
                                                    echo '<a id="cat-'.$i.'" href="'.url('/').'/category/'.$i.'"><div class="tg-category">';
                                                        echo '<div class="tg-categoryholder">';
                                                            echo '<figure><img src="'.asset('images/categories/'.$i.'.png').'" alt="'.category($i).'"></figure>';
                                                            echo '<h3>'.GoogleTranslate::translate(category($i), get_locale()).'</h3>';
                                                        echo '</div>';
                                                    echo '</div></a>';
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
                                        <h2>{!!GoogleTranslate::translate('Featured Ads', get_locale())!!}</h2>
                                    </div>
                                    <div class="tg-description">
                                        <p>{!!GoogleTranslate::translate('Over', get_locale())!!} {{$featured_listings->count()}} {!!GoogleTranslate::translate('Featured Ads', get_locale())!!}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tg-ads">
                                @foreach ($featured_listings as $listing)
                                    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3">
                                        <div class="tg-ad tg-verifiedad">
                                            <figure>
                                                <span class="tg-themetag tg-featuretag">{!!GoogleTranslate::translate('featured', get_locale())!!}</span>
                                                <a href="{{url('/listing/'.$listing->id)}}"><img src="{{$listing->listing_img}}" alt="{{$listing->listing_desc}}"></a>
                                            </figure>
                                            <div class="tg-adcontent">
                                                <ul class="tg-productcagegories">
                                                    <li><a href="{{url('/listing/'.$listing->id)}}">{!!GoogleTranslate::translate(category($listing->listing_type), get_locale())!!}</a></li>
                                                </ul>
                                                <div class="tg-adtitle">
                                                    <h3><a href="{{url('/listing/'.$listing->id)}}">{!!GoogleTranslate::translate($listing->listing_title, get_locale())!!} for {!!GoogleTranslate::translate($listing->listing_sell_mode, get_locale())!!}</a></h3>
                                                </div>
                                                <time datetime="2017-06-06">{!!GoogleTranslate::translate('Last Updated on ', get_locale())!!} {{date('d-m-Y', strtotime($listing->updated_at))}}</time>
                                                <div class="tg-adprice"><h4>Rs. {{$listing->listing_rate}}/{{$listing->listing_mode}}</h4></div>
                                                <address>
                                                    {{$listing->user()->firstOrFail()->city}}, {{$listing->user()->firstOrFail()->state}}, {{$listing->user()->firstOrFail()->zipcode}}
                                                </address>
                                                <div class="tg-phonelike">
                                                    <a class="tg-btnphone" href="tel:{{$listing->user()->firstOrFail()->phone}}">
                                                        <i class="icon-phone-handset"></i>
                                                        <span data-toggle="tooltip" data-placement="top" title="{!!GoogleTranslate::translate('Show Phone no', get_locale())!!}" data-last="{{$listing->user()->firstOrFail()->phone}}"><em>Show Phone No.</em></span>
                                                    </a>
                                                    <span class="tg-like tg-liked"><i class="fa fa-heart"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="tg-btnbox">
                                    <a class="tg-btn" href="{{route('view_all_featured')}}">{!!GoogleTranslate::translate('View All', get_locale())!!}</a>
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
                                        <h2>{!!GoogleTranslate::translate('Latest Posted ads', get_locale())!!}</h2>
                                    </div>
                                    {{-- <div class="tg-description">
                                        <p>Over 10,56,432 New Ads</p>
                                    </div> --}}
                                </div>
                            </div>
                            <div class="tg-ads">
                                @foreach ($latest_listings as $listing)
                                    <div class="col-xs-12 col-sm-5 col-sm-offset-1 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1">
                                        <div class="tg-ad tg-verifiedad">
                                            <figure>
                                                {{-- <span class="tg-themetag tg-featuretag">featured</span> --}}
                                                <a href="{{url('/listing/'.$listing->id)}}"><img src="{{$listing->listing_img}}" alt="{{$listing->listing_desc}}" class="img-responsive"></a>
                                            </figure>
                                            <div class="tg-adcontent">
                                                <ul class="tg-productcagegories">
                                                    <li><a href="{{url('/listing/'.$listing->id)}}">{!!GoogleTranslate::translate(category($listing->listing_type), get_locale())!!}</a></li>
                                                </ul>
                                                <div class="tg-adtitle">
                                                    <h3><a href="{{url('/listing/'.$listing->id)}}">{!!GoogleTranslate::translate($listing->listing_title, get_locale())!!} for {!!GoogleTranslate::translate($listing->listing_sell_mode, get_locale())!!}</a></h3>
                                                </div>
                                                <time datetime="2017-06-06">{!!GoogleTranslate::translate('Last updated on ', get_locale())!!} {{date('d-m-Y', strtotime($listing->updated_at))}}</time>
                                                <div class="tg-adprice"><h4>Rs. {{$listing->listing_rate}}/{{$listing->listing_mode}}</h4></div>
                                                <address>
                                                        {{$listing->user()->firstOrFail()->city}}, {{$listing->user()->firstOrFail()->state}}, {{$listing->user()->firstOrFail()->zipcode}}
                                                </address>
                                                <div class="tg-phonelike">
                                                    <a class="tg-btnphone" href="tel:{{$listing->user()->firstOrFail()->phone}}">
                                                        <i class="icon-phone-handset"></i>
                                                        <span data-toggle="tooltip" data-placement="top" title="{!!GoogleTranslate::translate('Show phone no. ', get_locale())!!}" data-last="{{$listing->user()->firstOrFail()->phone}}"><em>Show Phone No.</em></span>
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
                                    <a class="tg-btn" href="{{route('view_all_latest')}}">{!!GoogleTranslate::translate('View All', get_locale())!!}</a>
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
@section('script')
    <script>
        $('select#locale').on('change',function(){
            var lang = this.value;
            console.log(lang);
            $.ajax({
                url: '{{url("/")}}/locale/' + lang,
                method: "GET",
                success: function(data)
                {
                    console.log(data);
                    if(data == 'success')
                    {
                        location.reload();
                    }
                }
            });
        });
    </script>
@endsection