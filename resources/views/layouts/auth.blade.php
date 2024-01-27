<!DOCTYPE html>
<html>

<head>
    <title>@yield('title') &mdash; PMB | POLIBANG</title>
    @include('components.head')
    @stack('style')
</head>

<body @stack('class')>
    @yield('auth')

    @include('components.foot')
    @stack('scripts')
</body>

</html>
