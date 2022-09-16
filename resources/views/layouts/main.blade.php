@php
    $header_links = config('header_links');
    $comics = config('comics');
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title') | Comics</title>

    <!-- STYLE -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('additionl-css')

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/ddb740f05b.js" crossorigin="anonymous"></script>

</head>
<body>
    <!-- HEADER -->
    @include('includes.header')
    <!-- JUMBOTRON -->
    @include('includes.jumbo')

    <!-- Main -->
    @yield('main_content')

    <!-- FOOTER -->
    @include('includes.footer')
</body>
</html>