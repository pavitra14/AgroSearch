@extends('layouts.store')
@section('title')
{{config("app.name")}} - Login/Register
@endsection
@section('head')
@if ($errors->has('name'))
<script>alert('{{$errors->first("name")}}');</script>
@php
session()->forget('name');
@endphp
@endif
@if ($errors->has('phone'))
<script>alert('{{$errors->first("phone")}}');</script>
@php
session()->forget('phone');
@endphp
@endif
@if ($errors->has('password'))
<script>alert('{{$errors->first("password")}}');</script>
@php
session()->forget('password');
@endphp
@endif
@endsection
@section('content')
<!--************************************
				Home Slider Start
		*************************************-->
<div id="tg-innerbanner" class="tg-innerbanner tg-haslayout">
    <figure data-vide-bg="poster: images/slider/img-01.jpg" data-vide-options="position: 50% 50%">
        <figcaption>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="tg-bannercontent">
                            <form class="tg-formtheme tg-formbannersearch">
                                <fieldset>
                                    <div class="form-group tg-inputwithicon">
                                        <i class="icon-bullhorn"></i>
                                        <input type="text" name="customword" class="form-control" placeholder="What are you looking for">
                                    </div>
                                    <div class="form-group tg-inputwithicon">
                                        <i class="icon-location"></i>
                                        <a class="tg-btnsharelocation fa fa-crosshairs" href="javascript:void(0);"></a>
                                        <input type="text" name="yourlocation" class="form-control" placeholder="Your Location">
                                    </div>
                                    <div class="form-group tg-inputwithicon">
                                        <i class="icon-layers"></i>
                                        <div class="tg-select">
                                            <select>
                                                <option value="none">Select Category</option>
                                                @php
                                                for($i = 1; $i <= category_count() ; $i++) { echo "<option value='$i'>"
                                                    .category($i)."</option>"; } @endphp </select> </div> </div>
                                                    <button class="tg-btn" type="button">Search Now</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </figcaption>
    </figure>
    <div class="tg-breadcrumbarea">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ol class="tg-breadcrumb">
                        <li><a href="loginsignup.html#">Home</a></li>
                        <li class="tg-active">Login/Register</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
<!--************************************
                    Home Slider End
            *************************************-->
<!--************************************
                    Main Start
            *************************************-->
<main id="tg-main" class="tg-main tg-haslayout">
    <div class="container">
        <div class="row">
            <div id="tg-content" class="tg-content">
                <div class="tg-loginsignup">
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="tg-logingarea">
                            <h2>Login Now</h2>
                            <form class="tg-formtheme tg-formloging" method="POST" action="{{route('login')}}">
                                @csrf
                                <fieldset>
                                    <div class="form-group">
                                        <input type="number" name="phone" class="form-control is-invalid" placeholder="Phone no.">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <div class="tg-checkbox">
                                            <input id="tg-rememberme" type="checkbox" name="remember" value="rememberme">
                                            <label for="tg-rememberme">Keep me logged in</label>
                                        </div>
                                        <a class="tg-forgetpassword" href="javascript:alert('soon');">Forgot Password?</a>
                                    </div>
                                    <button class="tg-btn" type="submit">Login</button>
                                </fieldset>
                            </form>
                        </div>
                        <div class="tg-texbox">
                            <p><strong>AgroSearch - Share, Sell & Rent Agricultural Equipments</strong></p>
                            <p>AgroSearch provides a service that let's farmers/business either rent, hire, sell or
                                shaire their farming equipment with other farmers/customers</p>
                            <p><em>What we offer?</em></p>
                            <ul>
                                <li>Quick searches for equipments nearby</li>
                                <li>Direct contact with the rentee or lessor</li>
                                <li>Secured payment. [Rupay, Visa, Maestro, Mastercard, Paypal]</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <div class="tg-videobox">
                            <figure>
                                <img src="{{asset('images/placeholder-02.png')}}" alt="{{config('app.name')}}">
                                <a class="tg-btnplayvideo" href="javascript:void(0);"><i class="icon-farm"></i></a>
                            </figure>
                        </div>
                        <div class="tg-title">
                            <h2>Register Now</h2>
                        </div>
                        <div class="tg-haslayout">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                                    <form class="tg-formtheme tg-formregister" action="{{route('register')}}" method="POST">
                                        @csrf
                                        <fieldset>
                                            <div class="form-group tg-inputwithicon">
                                                <i class="icon-user"></i>
                                                <input type="text" name="name" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="form-group tg-inputwithicon">
                                                <i class="icon-phone"></i>
                                                <input type="number" name="phone" class="form-control" placeholder="Phone no.*">
                                            </div>
                                            <div class="form-group tg-inputwithicon">
                                                <i class="icon-lock"></i>
                                                <input type="password" name="password" class="form-control" placeholder="Password*">
                                            </div>
                                            <div class="form-group tg-inputwithicon">
                                                <i class="icon-lock"></i>
                                                <input type="password" name="password_confirmation" class="form-control"
                                                    placeholder="Retype Password*">
                                            </div>
                                            <div class="form-group">
                                                <div class="tg-checkbox">
                                                    <input id="tg-agree" type="checkbox" name="agree" value="agree">
                                                    <label for="tg-agree">By registering, you accept our <a href="javascript:void(0);">Terms
                                                            &amp; Conditions</a></label>
                                                </div>
                                            </div>
                                            <button class="tg-btn" type="submit">Register</button>
                                        </fieldset>
                                    </form>
                                </div>
                                {{-- <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                                    <ul class="tg-sociallogingsignup">
                                        <li class="tg-googleplus">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-google-plus"></i>
                                                <span>Sign in with <strong>“Google”</strong></span>
                                            </a>
                                        </li>
                                        <li class="tg-facebook">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-facebook"></i>
                                                <span>Sign in with <strong>“Google”</strong></span>
                                            </a>
                                        </li>
                                        <li class="tg-linkedin">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-linkedin"></i>
                                                <span>Sign in with <strong>“Google”</strong></span>
                                            </a>
                                        </li>
                                        <li class="tg-twitter">
                                            <a href="javascript:void(0);">
                                                <i class="fa fa-twitter"></i>
                                                <span>Sign in with <strong>“Google”</strong></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--************************************
                    Main End
            *************************************-->
@endsection
