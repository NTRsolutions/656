<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{--<strong>Email: </strong>info@yourdomain.com--}}
                {{--&nbsp;&nbsp;--}}
                {{--<strong>Support: </strong>+90-897-678-44--}}
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <strong>{{ Auth::user()->name.' '.Auth::user()->surname }}</strong>
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a style="color: white" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @endguest
            </div>

        </div>
    </div>
</header>
<!-- HEADER END-->
<div class="navbar navbar-inverse set-radius-zero">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <img src="{{asset('img/logo.png')}}" />
            </a>
        </div>

        <div class="left-div">
            <div class="user-settings-wrapper">
                <ul class="nav">

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                            <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                        </a>
                        <div class="dropdown-menu dropdown-settings">
                            <div class="media">
                                <a class="media-left" href="#">
                                    <img src="{{asset('img/64-64.jpg')}}" alt="" class="img-rounded" />
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Jhon Deo Alex </h4>
                                    <h5>Developer & Designer</h5>
                                </div>
                            </div>
                            <hr />
                            <h5><strong>Personal Bio : </strong></h5>
                            Anim pariatur cliche reprehen derit.
                            <hr />
                            <a href="#" class="btn btn-info btn-sm">Full Profile</a>&nbsp; <a href="login.html" class="btn btn-danger btn-sm">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- LOGO HEADER END-->
<section class="menu-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="navbar-collapse collapse ">
                    <ul id="menu-top" class="nav navbar-nav navbar-right">
                        <li><a class="menu-top-active" href="index.html">Dashboard</a></li>
                        <li><a href="ui.html">UI Elements</a></li>
                        <li><a href="table.html">Data Tables</a></li>
                        <li><a href="forms.html">Forms</a></li>
                        <li><a href="login.html">Login Page</a></li>
                        <li><a href="blank.html">Blank Page</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- MENU SECTION END-->