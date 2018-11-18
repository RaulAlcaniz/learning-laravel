<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@yield('title', 'No title')</title>
    </head>
    <body>
        <ul>
            <li><a href='/'>Home</a></li>
            <li><a href='/about'>About Us</a></li>
            <li><a href='/contact'>Contact us</a></li>
        </ul>
        @yield('content')
    </body>
</html>
