<!DOCTYPE html>
<html>

<head>
    <title>@yield('title') &mdash; PMB | POLIBANG</title>
    @include('components.head')
</head>

<body @stack('class')>
    @yield('auth')

    @include('components.foot')
    @stack('scripts')
</body>

</html>
