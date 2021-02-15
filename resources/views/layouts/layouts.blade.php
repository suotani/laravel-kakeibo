<html>
    <head>
        <title>家計簿</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>

         <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html> 