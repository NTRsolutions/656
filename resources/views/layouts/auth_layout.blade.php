<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This website specially created for 656a2 members">
    <meta name="author" content="Elchin Zakizadeh">
    <title>@yield('title') | 656a2</title>
    @include('.components.head_scripts')
    @yield('page_style')
</head>
<body>
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
                <i class="fa fa-user-plus login-icon" ></i>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
    @yield('content')
    @include('.components.footer')
    @include('.components.foot_scripts')
    @yield('page_script')
</body>
</html>