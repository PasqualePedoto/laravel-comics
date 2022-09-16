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