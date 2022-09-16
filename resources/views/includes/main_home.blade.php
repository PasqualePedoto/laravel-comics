@php
$comics = config('comics');
@endphp

<main>
    <div class="container">
        <div class="row">
            @foreach($comics as $comic)
                <div class="col">
                    <a href="{{ route('comics.show',['id' => $loop->index]) }}">
                        <figure>
                            <img src="{{ $comic['thumb'] }}" alt="">
                        </figure>
                        <div class="card-title">{{ $comic['series'] }}</div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="button-in-main">
            <a href="#">LOAD MORE</a>
        </div>
    </div>
</main>