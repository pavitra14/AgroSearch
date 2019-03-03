@extends('layouts.panel')
@section('title')
Profile | AgroSearch
@endsection
@section('content')
<!--************************************
				Dashboard Banner Start
		*************************************-->
<div class="tg-dashboardbanner">
    <h1>{!!GoogleTranslate::translate('Profile Settings', get_locale())!!}</h1>
    <ol class="tg-breadcrumb">
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="tg-active">Profile Setting</li>
    </ol>
</div>
<!--************************************
                    Dashboard Banner End
            *************************************-->


<!--************************************
					Section Start
			*************************************-->
<section class="tg-dbsectionspace tg-haslayout">
    <div class="row">
            <fieldset>
                <!--************************************
                                        Activity Start
                                *************************************-->
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 tg-lgcolwidthhalf">
                    <div class="tg-dashboardbox">
                        <div class="tg-dashboardboxtitle">
                            <h2>Profile Photo (<a href="https://en.gravatar.com/" target="_blank">Via Gravatar&trade;</a>)</h2>
                        </div>
                        <div class="tg-dashboardholder">
                            <label class="tg-fileuploadlabel" for="tg-photogallery">
                                <img src="{{gravatar($user->email, 250)}}" alt="{{$user->name}}">
                            </label>
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
                            <h2>Profile Detail</h2>
                        </div>
                        <div class="tg-dashboardholder">
                            <form action="{{route('profile')}}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{$user->name}}" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="phone" class="form-control" placeholder="Phone Number*"
                                        value="{{$user->phone}}" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email*" value="{{$user->email}}" required>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="city" class="form-control" placeholder="City*" value="{{$user->city}}" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="state" class="form-control" placeholder="State*" value="{{$user->state}}" required>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="zipcode" class="form-control" placeholder="Zip Code*"
                                        value="{{$user->zipcode}}" required>
                                </div>
                                <button class="tg-btn" type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!--************************************
                                        Approved Ads End
                                *************************************-->
                <!--************************************
                                        Approved Ads Start
                                *************************************-->
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 tg-lgcolwidthhalf">
                    <div class="tg-dashboardbox">
                        <div class="tg-dashboardboxtitle">
                            <h2>Change Password</h2>
                        </div>
                        <div class="tg-dashboardholder">
                            <div class="form-group">
                                <input type="password" name="currentpassword" class="form-control" placeholder="Current Password">
                            </div>
                            <div class="form-group">
                                <input type="password" name="newpassword" class="form-control" placeholder="New Password">
                            </div>
                            <div class="form-group">
                                <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm New Password">
                            </div>
                            <button class="tg-btn" type="button">Change Now</button>
                        </div>
                    </div>
                </div>
                <!--************************************
                                        Approved Ads End
                                *************************************-->
            </fieldset>
    </div>
</section>
<!--************************************
                        Section End
                *************************************-->

@endsection
