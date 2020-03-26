<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', '尚厨房') - 最好的做饭类网站</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>

<body>

    @include('layouts._header')
    <br>
    <div class="container" style="min-height: 800px;">
        @include('shared._messages')
        @yield('content')
    </div>
    @include('layouts._footer')
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>