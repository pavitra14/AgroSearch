<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="tg-topbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="dropdown tg-themedropdown tg-userdropdown">
								<a href="javascript:void(0);" id="tg-adminnav" class="tg-btndropdown" data-toggle="dropdown">
									@guest
									<span class="tg-name">Login/Register</span>
									@else
									<span class="tg-userdp"><img src="{{gravatar(auth()->user()->email, 28)}}" alt="image description"></span>
									<span class="tg-name">Hi! {{auth()->user()->name}}</span>
									@endguest
									
								</a>
								<ul class="dropdown-menu tg-themedropdownmenu" aria-labelledby="tg-adminnav">
									@guest
										<li>
											<a href="{{route('login')}}">
												<span>Login</span>
											</a>
										</li>
										<li>
												<a href="{{route('login')}}">
													<span>Register</span>
												</a>
										</li>
									@else
										<li>
											<a href="{{route('dashboard')}}">
												<i class="icon-chart-bars"></i>
												<span>Insights</span>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="icon-cog"></i>
												<span>Profile Settings</span>
											</a>
										</li>
										<li class="menu-item">
											<a href="javascript:void(0);">
												<i class="icon-layers"></i>
												<span>My Ads</span>
											</a>
										</li>
										
										<li class="menu-item-has-children">
											<a href="javascript:void(0);">
												<i class="icon-envelope"></i>
												<span>Offers/Messages</span>
											</a>
											<ul>
												<li><a href="#">Offer Received</a></li>
												<li><a href="#">Offer Sent</a></li>
												<li><a href="#">Trash</a></li>
											</ul>
										</li>
										<li>
											<a href="#">
												<i class="icon-cart"></i>
												<span>Payments</span>
											</a>
										</li>
										
										<li>
												<a href="{{ route('logout') }}"
												onclick="event.preventDefault();
															  document.getElementById('logout-form').submit();">												<i class="icon-exit"></i>
                                        <span>{{ __('Logout') }}</span>
												</a>
												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														@csrf
													</form>
										</li>
									@endguest
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-navigationarea">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<strong class="tg-logo"><a href="{{route('home')}}"><img src="{{asset('logo.png')}}" alt="company logo here"></a></strong>
							<a class="tg-btn" href="{{route('post_listing')}}">
								<i class="icon-bookmark"></i>
								<span>post an ad</span>
							</a>
							<nav id="tg-nav" class="tg-nav">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#tg-navigation" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
									<ul>
										<li class="menu-item">
											<a href="{{route('home')}}">Home</a>
										</li>
										<li class="menu-item">
											<a href="#!">About us</a>
										</li>
										{{-- <li class="menu-item-has-children current-menu-item">
											<a href="javascript:void(0);">Listings</a>
											<ul class="sub-menu">
												<li><a href="adlistinggrid.html">Ad Grid</a></li>
												<li><a href="adlistinglist.html">Ad Listing</a></li>
												<li><a href="addetail.html">Listing Detail</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="javascript:void(0);">Dashboard</a>
											<ul class="sub-menu">
												<li><a href="dashboard.html">Dashboard</a></li>
												<li><a href="dashboard-myads.html">Dashboard My Ads</a></li>
												<li><a href="dashboard-myfavourites.html">Dashboard Favorites</a></li>
												<li><a href="dashboard-offermessages.html">Dashboard Offer Message</a></li>
												<li><a href="dashboard-payments.html">Dashboard Payment</a></li>
												<li><a href="dashboard-postanad.html">Dashboard Post Ad</a></li>
												<li><a href="dashboard-privacy-setting.html">Dashboard privacy Setting</a></li>
												<li><a href="dashboard-profile-setting.html">Dashboard Profile Setting</a></li>
											</ul>
										</li>
										<li class="menu-item-has-children">
											<a href="javascript:void(0);">Pages</a>
											<ul class="sub-menu">
												<li><a href="aboutus.html">About</a></li>
												<li><a href="contactus.html">Contact Us</a></li>
												<li class="menu-item-has-children">
													<a href="javascript:void(0);">News</a>
													<ul class="sub-menu">
														<li><a href="newsgrid.html">News grid</a></li>
														<li><a href="newslist.html">News list</a></li>
														<li><a href="newsdetail.html">News detail</a></li>
													</ul>
												</li>
												<li><a href="404error.html">404 Error</a></li>
												<li><a href="comingsoon.html">Coming Soon</a></li>
												<li><a href="packages.html">Packages</a></li>
												<li><a href="loginsignup.html">Login/Register</a></li>
											</ul>
										</li> --}}
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->