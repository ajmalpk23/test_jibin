<!doctype html>
<html lang="en">
    <head>
        @include('web.layouts.head')
    </head>

    <body>

        <header class="header d-blue-bg">
            @include('web.layouts.header')
        </header>

        <main>
            @yield('content')
        </main>

        {{-- <footer>
            @include('web.layouts.footer')
        </footer> --}}

        @include('web.layouts.scripts')
    </body>

</html>
