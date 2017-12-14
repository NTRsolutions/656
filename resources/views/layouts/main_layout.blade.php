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
    @include('.components.header')
    @yield('content')
    @include('.components.footer')
    @include('.components.foot_scripts')
    @yield('page_script')
</body>
</html>