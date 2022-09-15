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
    <title>{{ env('APP_NAME') }} | Homepage</title>

    <!-- STYLE -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

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
                                <li>
                                    <a href="#">{{ $link['name'] }}</a>
                                </li>
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
    <div id="jumbotron"></div>

    <!-- Main -->
    <main>
        <div class="container">
            <div class="row">
                @foreach($comics as $comic)
                    <div class="col">
                        <figure>
                            <img src="{{ $comic['thumb'] }}" alt="">
                        </figure>
                        <div class="card-title">{{ $comic['series'] }}</div>
                    </div>
                @endforeach
            </div>
            <div class="button-in-main">
                <a href="#">LOAD MORE</a>
            </div>
        </div>
    </main>
</body>
</html>