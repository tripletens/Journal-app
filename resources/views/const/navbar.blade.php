<!-- Navigation Bar-->

        <header id="topnav" style="height:auto;" >
            <div class="topbar-main" style="padding-top:10px;">
                <div class="container">

                    <!-- Logo container-->
                    <div class="logo">
                        <a href="/" class="logo"><span style="font-size:15px;font-weight:bold;padding-top:25px;">Academic Journal Online</span></a>
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras" style="">
                        <ul class="nav navbar-nav navbar-right pull-right">

                            <li class="navbar-c-items">
                                <form role="search" method="POST" action="{{ route('search-journals') }}" class="navbar-left app-search pull-left hidden-xs">
                                    @csrf
                                    <div class="form-group row " style="height:30px;padding:0px;">
                                        <div class="col-md-8 col-lg-8 col-xs-9">
                                            <input type="text" placeholder="Search Journals..." class="form-control" name="searchitem" required>
                                            <input type="hidden" name="variable" value="all"/>
                                        </div>
                                        <div class="col-md-4 col-lg-4 col-xs-3">
                                            <button type="submit" class="btn btn-xs btn-default btn-custom btn-rounded waves-effect waves-light">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </li>

                            @if (Route::has('login'))
                                    @auth

                                        <li class="dropdown navbar-c-items">
                                            <a href="" class="dropdown-toggle waves-effect waves-light profile" data-toggle="dropdown" aria-expanded="true">
                                                <img src="<?php echo asset('storage/profile/' . auth()->user()->image); ?>" alt="user-img" class="img-circle"> </a>
                                            <ul class="dropdown-menu">

                                                <li class="divider"></li>
                                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                    <i class="ti-power-off text-danger m-r-10"></i>
                                                        {{ __('Logout') }}
                                                    </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                                </li>
                                            </ul>
                                        </li>
                                    @else
                                        <li>
                                            <a href="{{ route('login') }}" title="Login Here">
                                                {{--  <i class="glyphicon glyphicon-log-in"></i>   --}}
                                                Login
                                            </a>
                                        <li>

                                        @if (Route::has('register'))
                                            <li >
                                                <a href="{{ route('register') }}" title="Register Here ">
                                                    {{--  <i class="glyphicon glyphicon-pencil"> </i>   --}}
                                                    Register
                                                </a>
                                            </li>
                                        @endif
                                    @endauth

                            @endif

                        </ul>
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                    </div>

                </div>
            </div>

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="has-submenu">
                                @auth
                                    <a href="/home"><i class="md md-dashboard"></i>Dashboard</a>
                                @else
                                    <a href="/"><i class="md md-dashboard"></i>Home</a>
                                @endauth

                            </li>
                            <li class="">
                                <a href="{{ route('about-us') }}"><i class="glyphicon glyphicon-briefcase"></i>About Us</a>
                            </li>
                            <li class="">
                                <a href="{{ route('news') }}"><i class="glyphicon glyphicon-bell"></i>News</a>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-book"></i>Journals</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('journal-view') }}">All Journals</a></li>
                                    <li>
                                        <a href="{{ route('create-journal') }}">
                                            <button type="button" class="btn btn-default btn-custom btn-rounded waves-effect waves-light">
                                                Add your Journals
                                            </button>
                                        </a>
                                    </li>
                                </ul>
                            </li>


                            {{-- <li class="has-submenu">
                                <a href="#"><i class="fa fa-graduation-cap"></i>Authors</a>
                                <ul class="submenu">
                                    <li>
                                        <li><a href="{{ route('authors-view') }}">View Authors</a></li>
                                    </li>
                                </ul>
                            </li> --}}
                            @auth
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-book"></i>My Journals</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('my-journal') }}">View My Journals</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-opencart"></i>Orders</a>
                                <ul class="submenu">
                                    @if(Auth::user()->role == 'admin')
                                    {{-- {{ route('all-orders') }} --}}
                                        <li><a href="{{ route('all-orders') }}">View All Orders </a></li>
                                    @else
                                        <li><a href="{{ route('my-orders') }}">View My Orders </a></li>
                                    @endif
                                </ul>
                            </li>
                            {{-- <li class="has-submenu">
                                <a href="#"><i class="md md-attach-money"></i>Transactions</a>
                                <ul class="submenu">
                                    <li>
                                        <span>
                                            <a href="#">My Transactions</a>
                                        </span>
                                    </li>
                                </ul>
                            </li> --}}
                            @auth
                                @if (auth()->user()->role == 'admin')
                                    <li class="has-submenu">
                                        <a href="#"><i class="fa fa-user"></i>Users</a>
                                        <ul class="submenu">
                                            <li><a href="{{ route('all-users') }}">View Users</a></li>

                                        </ul>
                                    </li>
                                @endif
                            @endauth

                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-user"></i>Profile</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('view-profile','1') }}">View Profile </a></li>
                                    <li><a href="{{ route('update-profile',1) }}">Update Profile</a></li>
                                </ul>
                            </li>
                            @endauth
                            @guest
                               <li class="has-submenu">
                                    <a href="{{ route('view-cart') }}">
                                        <Span><i class="fa fa-shopping-basket"></i>
                                            Cart ({{ count((array)session('cart')) }})
                                        </Span>
                                    </a>
                                </li>
                           @endguest
                            @auth
                                @if (auth()->user()->role == 'user')
                                    <li class="has-submenu">
                                        <a href="{{ route('view-cart') }}">
                                            <Span><i class="fa fa-shopping-basket"></i>
                                                Cart ({{ count((array)session('cart')) }})
                                            </Span>
                                        </a>
                                    </li>
                                @endif
                            @endauth
                            <li class="has-submenu">
                                <a href="#"><i class="fa fa-warning"></i>Terms and Conditions</a>
                                <ul class="submenu">
                                    <li><a href="{{ route('view-terms') }}">Conditions of Use  </a></li>
                                    <li><a href="{{ route('view-privacy-policy') }}">Privacy Policy  </a></li>
                                </ul>
                            </li>
                            {{--  --}}
                            <li class="">
                                <a href="{{ route('view-faqs') }}"><i class="glyphicon glyphicon-question-sign"></i>FAQs</a>

                            </li>


                        </ul>
                        <!-- End navigation menu -->
                    </div>
                </div> <!-- end container -->
            </div> <!-- end navbar-custom -->
        </header>
