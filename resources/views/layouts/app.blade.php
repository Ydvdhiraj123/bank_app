<!DOCTYPE html>
<html lang="en">
    @include('include.header')
<body>
   
    @include('include.marquee')

    <main>
        @yield('contents')
    </main>

    @include('include.footer')

</body>
</html>