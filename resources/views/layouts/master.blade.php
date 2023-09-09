<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ghaffari-Todo-laravel</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="py-3" dir="rtl" lang="fa">
    @yield('content')
</body>
<script src="{{ asset('js/app.js') }}"></script>
@include('sweetalert::alert')

</html>
