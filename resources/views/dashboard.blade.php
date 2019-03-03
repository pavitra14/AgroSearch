@extends('layouts.panel')
@section('title')
    {{$user->name}} {!!GoogleTranslate::translate('Dashboard', get_locale())!!} | AgroSearch
@endsection

@section('heading')
            <!--************************************
                    Dashboard Banner Start
            *************************************-->
            <div class="tg-dashboardbanner">
                    <h1>{!!GoogleTranslate::translate('Dashboard', get_locale())!!}</h1>
                    <ol class="tg-breadcrumb">
                        <li><a href="{{route('home')}}">Main</a></li>
                        <li class="tg-active">Dashboard</li>
                    </ol>
                </div>
                <!--************************************
                        Dashboard Banner End
                *************************************-->
@endsection

@section('content')
    @include('components.dashboard.stats')

    <!--************************************
                        Section Start
                *************************************-->
                <section class="tg-dbsectionspace tg-haslayout">
                        <div class="row">
                            <!--************************************
                                    Activity Start
                            *************************************-->
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 tg-lgcolwidthhalf">
                                <div class="tg-dashboardbox">
                                    <div class="tg-dashboardboxtitle">
                                        <h2>My Activity Log</h2>
                                    </div>
                                    <div class="tg-dashboardholder tg-myactivitylog tg-verticalscrollbar tg-dashboardscrollbar">
                                        <ul class="tg-activitylog">
                                            <li>
                                                <h3>You Logged In to Dashboard</h3>
                                                <time datetime="{{date('Y-m-d')}}">02 Minutes Ago</time>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--************************************
                                    Activity End
                            *************************************-->
                            <!--************************************
                                    Approved Ads Start
                            *************************************-->
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 tg-lgcolwidthhalf">
                                <div class="tg-dashboardbox">
                                    <div class="tg-dashboardboxtitle">
                                        <h2>Recent Approved Ads</h2>
                                    </div>
                                    <div class="tg-dashboardholder tg-approvedads tg-verticalscrollbar tg-dashboardscrollbar">
                                        <ul class="tg-approvedads">
                                            
                                            @foreach ($user->listings()->where('listing_status','1')->get() as $listing)
                                                <li>
                                                    <figure><a href="javascript:void(0);"><img src="{{asset('images/ads/thumbnail/img-01.jpg')}}" alt="Verified"></a></figure>
                                                    <div class="tg-adcontent">
                                                        <span class="tg-adverified">Verified Ad</span>
                                                        <h3>{{$listing->listing_title}}</h3>
                                                        <time datetime="{{date('Y-m-d', strtotime($listing->updated_at))}}">{{date('Y-m-d', strtotime($listing->updated_at))}}</time>
                                                    </div>
                                                </li>
                                            @endforeach
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--************************************
                                    Approved Ads End
                            *************************************-->
                            <!--************************************
                                    Total Views Start
                            *************************************-->
                            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 tg-lgcolwidthhalf">
                                <div class="tg-dashboardbox">
                                    <div class="tg-dashboardboxtitle">
                                        <h2>Total Views</h2>
                                        <form class="tg-formtheme tg-formthemesearch">
                                            <fieldset>
                                                <span class="tg-select">
                                                    <select id="total_views">
                                                        <option selected="true" disabled="true">Select Ad</option>
                                                        @foreach ($user->listings()->get() as $listing)
                                                            <option value="{{$listing->id}}">{{$listing->listing_title}}</option>
                                                        @endforeach
                                                    </select>
                                                </span>
                                            </fieldset>
                                        </form>
                                    </div>
                                    <div class="tg-dashboardholder tg-totalviews">
                                        <h3 id="tg-totalviews"></h3>
                                    </div>
                                </div>
                            </div>
                            <!--************************************
                                    Total Views End
                            *************************************-->
                        </div>
                    </section>
                    <!--************************************
                            Section End
                    *************************************-->
                    <!--************************************
                            Section Start
                    *************************************-->
                    <section class="tg-dbsectionspace tg-haslayout">
                        <div class="row">
                            <!--************************************
                                    Offers/Messages Start
                            *************************************-->
                            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 tg-lgcolwidthfull">
                                <div class="tg-dashboardbox">
                                    <div class="tg-dashboardboxtitle">
                                        <h2>Offers/Messages</h2>
                                    </div>
                                    <div class="tg-dashboardholder tg-offersmessages">
                                        <ul>
                                            <li>
                                                <div class="tg-verticalscrollbar tg-dashboardscrollbar">
                                                    
                                                    @foreach ($user->listings()->get() as $listing)
                                                    <div class="tg-ad tg-dotnotification">
                                                            <figure><img src="{{$listing->listing_img}}" alt="{{$listing->listing_title}}"></figure>
                                                            <h3>{{$listing->listing_title}}</h3>
                                                    </div>                                                    
                                                    @endforeach
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tg-offerers tg-verticalscrollbar tg-dashboardscrollbar">
                                                    <div class="tg-offerer tg-dotnotification">
                                                        <figure><img src="{{asset('images/author/img-08.jpg')}}" alt="image description"></figure>
                                                        <h3>John Doe</h3>
                                                    </div>
                                                    
                                                </div>
                                            </li>
                                            <li>
                                                <div class="tg-chatarea">
                                                    <div class="tg-messages tg-verticalscrollbar tg-dashboardscrollbar">
                                                        
                                                        <div class="tg-offerermessage">
                                                            <figure><img src="{{gravatar($user->email)}}" alt="{{$user->name}}"></figure>
                                                            <div class="tg-description">
                                                                <div class="clearfix"></div>
                                                                <p>Hello World</p>
                                                                <div class="clearfix"></div>
                                                                <time datetime="2017-08-08">January 12th, 2019</time>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                        <div class="tg-memessage tg-readmessage">
                                                            <figure><img src="{{asset('images/author/img-08.jpg')}}" alt="image description"></figure>
                                                            <div class="tg-description">
                                                                <div class="clearfix"></div>
                                                                <p>Heya</p>
                                                                <div class="clearfix"></div>
                                                                <div class="clearfix"></div>
                                                                <div class="clearfix"></div>
                                                                <time datetime="2017-08-08">Jun 28, 2019 09:30</time>
                                                                <div class="clearfix"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tg-replaybox">
                                                        <textarea class="form-control" name="reply" placeholder="Type Here &amp; Press Enter"></textarea>
                                                        <div class="tg-iconbox">
                                                            <i class="icon-thumbs-up"></i>
                                                            <i class="icon-thumbs-down"></i>
                                                            <i class="icon-smile"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--************************************
                                    Offers/Messages End
                            *************************************-->
                        </div>
                    </section>
                    <!--************************************
                            Section End
                    *************************************-->
@endsection 
@section('script')
    <script>
    $('select#total_views').on('change', function() {
        var id = this.value;
        $.ajax({
            url: '{{url("/")}}/get-views/' + id,
            method: "GET",
            success: function(data){
                $('#tg-totalviews').html(data);
            }
        });
    });
    </script>
@endsection