<!DOCTYPE html>
<html lang="es" dir="ltr">
@include ('partials.head')
<body>
    @include ('partials.header')
    @include('partials.search-modal')
    @yield('content')

    @include ('partials.footer')

    @include ('partials.scripts')
    @yield('extra-js')
</body>
</html>