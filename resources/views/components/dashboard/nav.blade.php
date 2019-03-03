<!--************************************
                    Header Start
            *************************************-->
            <header id="tg-dashboardheader" class="tg-dashboardheader tg-haslayout">
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
                                    <a href="{{route('dashboard')}}">Home</a>
                                </li>
                                
                            </ul>
                        </div>
                    </nav>
                    <div class="tg-rghtbox">
                        <a class="tg-btn" href="{{route('post_listing')}}">
                            <i class="icon-bookmark"></i>
                            <span>{!!GoogleTranslate::translate('post an ad', get_locale())!!}</span>
                        </a>
                        <div class="dropdown tg-themedropdown tg-notification">
                            <button class="tg-btndropdown" id="tg-notificationdropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="icon-alarm"></i>
                                <span class="tg-badge">{{$user->notifications()->where('status', '0')->count()}}</span>
                            </button>
                            <ul class="dropdown-menu tg-dropdownmenu" aria-labelledby="tg-notificationdropdown">
                                @if ($user->notifications()->where('status', '0')->count() > 0)
                                    @foreach ($user->notifications()->where('status','0')->get() as $notification)
                                        <li><p>{!!GoogleTranslate::translate($notification->text, get_locale())!!}</p></li>
                                    @endforeach
                                @else
                                    <li><p>{!!GoogleTranslate::translate('You do not have any notifications at this moment.', get_locale())!!}</p></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    <div id="tg-sidebarwrapper" class="tg-sidebarwrapper">
                        <span id="tg-btnmenutoggle" class="tg-btnmenutoggle">
                            <i class="fa fa-angle-left"></i>
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="67" viewBox="0 0 20 67">
                                
                                <path id="bg" class="cls-1" d="M20,27.652V39.4C20,52.007,0,54.728,0,67.265,0,106.515.026-39.528,0-.216-0.008,12.32,20,15.042,20,27.652Z"/>
                            </svg>
                        </span>
                        <div id="tg-verticalscrollbar" class="tg-verticalscrollbar">
                            <strong class="tg-logo"><a href="{{route('home')}}"><img src="{{asset('logo_white.png')}}" alt="{{config('app.name')}}"></a></strong>
                            <div class="tg-user">
                                <figure>
                                    <span class="tg-bolticon"><i class="fa fa-bolt"></i></span>
                                    <a href="javascript:void(0);"><img src="{{gravatar($user->email)}}" alt="{{$user->name}}"></a>
                                </figure>
                                <div class="tg-usercontent">
                                    <h3>{!!GoogleTranslate::translate('Hi! '. $user->name, get_locale())!!}</h3>
                                    <h4>{!!GoogleTranslate::translate('Welcome', get_locale())!!}</h4>
                                </div>
                                <a class="tg-btnedit" href="{{route('profile')}}"><i class="icon-pencil"></i></a>
                            </div>
                            <nav id="tg-navdashboard" class="tg-navdashboard">
                                <ul>
                                    <li class="tg-active">
                                        <a href="{{route('dashboard')}}">
                                            <i class="icon-chart-bars"></i>
                                            <span> {!!GoogleTranslate::translate('Insights', get_locale())!!}</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('profile')}}">
                                            <i class="icon-cog"></i>
                                            <span>{!!GoogleTranslate::translate('Profile Settings', get_locale())!!}</span>
                                        </a>
                                    </li>
                                    <li class="menu-item-">
                                        <a href="{{route('myads')}}">
                                            <i class="icon-layers"></i>
                                            <span>{!!GoogleTranslate::translate('myads', get_locale())!!}</span>
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">
                                            <i class="icon-envelope"></i>
                                            <span>{!!GoogleTranslate::translate('Offers', get_locale())!!}</span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="#">{!!GoogleTranslate::translate('Offers Recieved', get_locale())!!}</a></li>
                                            <li><a href="#">{!!GoogleTranslate::translate('Offers Sent', get_locale())!!}</a></li>
                                            <li><a href="#">{!!GoogleTranslate::translate('Trash', get_locale())!!}</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="https://www.instamojo.com/@pbehre/" target="_blank">
                                            <i class="icon-cart"></i>
                                            <span>{!!GoogleTranslate::translate('Payment', get_locale())!!}</span>
                                        </a>
                                    </li>
                                    
                                    <li>
                                            <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                  document.getElementById('logout-form').submit();">
                                            <i class="icon-exit"></i>
                                            <span>{!!GoogleTranslate::translate('Logout', get_locale())!!}</span>
                                                    </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                    </li>
                                </ul>
                            </nav>
                            <div class="tg-socialandappicons">
                                
                                <ul class="tg-appstoreicons">
                                    <li><a href="javascript:void"><img src="{{asset('images/icons/app-01.png')}}" alt="image description"></a></li>
                                    <li><a href="javascript:void"><img src="{{asset('images/icons/app-02.png')}}" alt="image description"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
                <!--************************************
                        Header End
                *************************************-->