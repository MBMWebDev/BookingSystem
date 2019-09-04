<header class="header menu_fixed">
    <div id="preloader"><div data-loader="circle-side"></div></div><!-- /Preload -->
    <div id="logo">
        <a href="index.html">
            <img src="img/logo.png" width="150" height="36" data-retina="true" alt="" class="logo_normal">
            <img src="img/logo_sticky.png" width="150" height="36" data-retina="true" alt="" class="logo_sticky">
        </a>
    </div>
    <ul id="top_menu">
        @guest
        <li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
        @else
        <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();" class="login">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>

       </li>
        @endguest
        
    </ul>
    <!-- /top_menu -->
    <a href="#menu" class="btn_mobile">
        <div class="hamburger hamburger--spin" id="hamburger">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </a>
<nav id="menu" class="main-menu">
        <ul>
        <li><span><a href="{{route('index')}}">Home</a></span>
                
            </li>
            <li><span><a href="{{route('offres.list')}}">Offres</a></span>
            </li>
            <li><span><a href="{{route('hotels.list')}}">Hotels</a></span>
            </li>
            </li>
        </ul>
    </nav>

</header>