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
    <header>
        <!-- TOP HEADER -->
        <div id="bottom-header">
            <div class="container">
                <div class="content-bottom-header">
                    <a href="#">
                        <div class="content-bh">DC POWER VISA</div>
                    </a>
                    <a href="#">
                        <div class="content-bh">ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i></div>
                    </a>
                </div>
            </div>
        </div>

        <!-- BOTTOM HEADER -->
        <div id="top-header">
            <div class="container">
                <div class="content-top-header">
                    <!-- Logo -->
                    <a href="{{ url('/') }}">
                        <figure>
                            <img src="{{ asset('images/dc-logo.png') }}" alt="logo">
                        </figure>
                    </a>
                    <!-- Links -->
                    <div class="h-100">
                        <ul>
                            @foreach($header_links as $link)
                                @if($link['name'] == $active)
                                    <li class="active">
                                        <a href="{{ route('comics') }}">{{ $link['name'] }}</a>
                                    </li>
                                @else
                                    <li>
                                        <a href="{{ route('menu',["link" => $link['name']]) }}">{{ $link['name'] }}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                    <!-- Search-bar -->
                    <div>
                        <form action="">
                            <div class="input-block">
                                <input type="text" placeholder="Search">
                                <div><i class="fa-solid fa-magnifying-glass"></i></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- JUMBOTRON -->
    @include('includes.jumbo')

    <!-- Main -->
    @yield('main_content')

    <!-- FOOTER -->
    @include('includes.footer')
</body>
</html>