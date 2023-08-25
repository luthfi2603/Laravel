<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Luthfi Blog | {{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">
</head>
<body>

    @include('partials.navbar')

    <div class="container mb-4 marginNav">
        @yield('container')
    </div>

    {{-- <script src="assets/js/script.js"></script> --}}
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
</body>
</html>