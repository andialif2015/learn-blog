<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Parsinta' }}</title>
    {{-- <title>Parsinta</title> --}}
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>

    @include('layouts.navigation')
    <div class="py-4">
        @yield('content')
    </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>
