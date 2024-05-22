<html>

<head>
    <title>進度條 Laravel 課程範例</title>
    @include('layouts.meta')
    @include('layouts.css')
    <link rel="stylesheet" href="/app.css">
</head>

<body>
    @include('layouts.nav')
    <div class="container">
        @yield('content')
    </div>
    @include('layouts.footer')
    @include('layouts.js')
</body>

</html>
