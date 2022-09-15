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

    <!-- FOOTER -->
    <footer>
        <section id="merchandizing-area">
        <div class="container">
            <div class="row">
                <div class="col-buy">
                    <figure>
                        <img src="{{ asset('images/buy-comics-digital-comics.png') }}" alt="">
                    </figure>
                    <div class="buy-text">DIGITAL COMICS</div>
                </div>
                <div class="col-buy">
                    <figure>
                        <img src="{{ asset('images/buy-comics-merchandise.png') }}" alt="">
                    </figure>
                    <div class="buy-text">DC MERCHANDIZING</div>
                </div>
                <div class="col-buy">
                    <figure>
                        <img src="{{ asset('images/buy-comics-shop-locator.png') }}" alt="">
                    </figure>
                    <div class="buy-text">SUBSCRIPTION</div>
                </div>
                <div class="col-buy">
                    <figure>
                        <img src="{{ asset('images/buy-comics-subscriptions.png') }}" alt="">
                    </figure>
                        <div class="buy-text">COMIC SHOP LOCATOR</div>
                </div>
                <div class="col-buy">
                    <figure>
                        <img src="{{ asset('images/buy-dc-power-visa.svg') }}" alt="">
                    </figure>
                    <div class="buy-text">DC POWER VISA</div>
                </div>
            </div>
        </div>
        </section>
        <!-- TOP FOOTER -->
        <div id="top-footer">
            <div class="container">
                <div class="flex">
                    <div class="w-50">
                        <!-- FOOTER LINKS -->
                        <div id="footer-links">
                            <div>
                                <h4>DC COMICS</h4>
                                <ul>
                                    <li>Characters</li>
                                    <li>Comics</li>
                                    <li>Movies</li>
                                    <li>TV</li>
                                    <li>Games</li>
                                    <li>Videos</li>
                                    <li>News</li>
                                </ul>
                                <h4>SHOP</h4>
                                <ul>
                                    <li>Shop DC</li>
                                    <li>Shop DC Collectibles</li>
                                </ul>
                            </div>
                            <div>
                                <h4>DC</h4>
                                <ul>
                                    <li>Terms of Use</li>
                                    <li>Privacy Policy (New)</li>
                                    <li>Ad Choices</li>
                                    <li>Advertising</li>
                                    <li>Jobs</li>
                                    <li>Subscriptions</li>
                                    <li>Talent Workshops</li>
                                    <li>CPSC Certificates</li>
                                    <li>Ratings</li>
                                    <li>Shop Help</li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>
                            <div>
                                <h4>SITES</h4>
                                <ul>
                                    <li>DC</li>
                                    <li>MAD Magazine</li>
                                    <li>DC Kids</li>
                                    <li>DC Universe</li>
                                    <li>DC Power Visa</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Coockies -->
                        <div id="coockies">
                            All Site Content TM and <i class="fa-regular fa-copyright"></i>
                            2020 Dc Entertainment, unless otherwise <a href="#">boted here</a>
                            . All rights reserved. <a href="#">Cockies Settings</a>
                        </div>
                    </div>
                    <!-- LOGO -->
                    <div class="w-50 image-footer">
                        <figure class="h-100">
                            <img src="../images/dc-logo-bg.png" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <!-- BOTTOM FOOTER -->
        <div id="bottom-footer"> </div>
    </footer>
</body>
</html>