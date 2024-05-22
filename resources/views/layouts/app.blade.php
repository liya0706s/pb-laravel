<html>

<head>
    {{-- <title>進度條 Laravel 課程範例</title> --}}
    <title>@php echo "進度條 Laravel 課程範例" @endphp</title>
    @include('layouts.meta')
    @include('layouts.css')
</head>

<body>
    @include('layouts.nav')
    <div class="container">
        @yield('content')
    </div>
    @include('layouts.footer')
    @include('layouts.js')

    <script>
        @section('inline_js')
            function alertHook(message){
                alert('alertHook: ' + message);
            }
        @show
    </script>
</body>

</html>
