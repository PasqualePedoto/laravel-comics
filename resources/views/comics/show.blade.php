@extends('layouts.main')

@section('title',$comic['title'])

@section('main_content')
    <section id="main-show-content">
        {{-- Banner Blue --}}
        <div class="blue-block"></div>
        {{-- Main Content --}}
        <div class="container">
            <div id="content" class=" mt-50 mb-50">
                {{-- $ Content Description --}}
                <div class="description">
                    {{-- @ TITLE --}}
                    <h2 class="mb-20">{{ $comic['title'] }}</h2>
                    {{-- @ SHOPPING --}}
                    <div class="shopping-content mb-30">
                        {{-- First --}}
                        <div class="flex justify-content-between price">
                            <div class="flex">
                                <p class="text-green mr-10">U.S. Price: </p>
                                <p class="text-white">{{$comic['price']}}</p>
                            </div>
                            <p class="text-green">AVAILABLE</p>
                        </div>
                        {{-- Second --}}
                        <div class="text-white availability">Check Availability <i class="fa-solid fa-caret-down"></i></div>
                    </div>
                    {{-- @ DESCRIPTION --}}
                    <div class="shopping-description">
                        {!! $comic['description'] !!}
                    </div>
                </div>
                {{-- $ Content Advertisement --}}
                <figure class="advertisement">
                    <img src="{{ asset('images/adv.jpg') }}" alt="">
                </figure>
            </div>
        </div>
        <div id="content-details">
            <div class="container">
                <div class="flex">
                    {{-- @ Talent --}}
                    <div id="talent-content" class="mb-50 mt-50 w-50">
                        {{-- Talent Title --}}
                        <h3 class="mb-20 mt-20">Talent</h3>
                        <hr>
                        <div class="insertion">
                            <h5 class="w-30">Art by:</h5>
                            <div class="w-50 artists">
                                @foreach($comic['artists'] as $artist)
                                <span>{{ $artist }} @if($loop->last).@else,@endif</span>
                                @endforeach
                            </div>
                        </div>
                        <hr class="mb-20 mt-20">
                        <div class="insertion">
                            <h5 class="w-30">Written by:</h5>
                            <div class="w-50 writers">
                                @foreach($comic['writers'] as $writer)
                                <span>{{ $writer }} @if($loop->last).@else,@endif</span>
                                @endforeach
                            </div>
                        </div>
                        <hr class="mb-20 mt-20">
                    </div>
                    {{-- @ SPECS --}}
                    <div id="specs-content" class="mb-50 mt-50 w-50">
                        {{-- Specs Title --}}
                        <h3 class="mb-20 mt-20">Specs</h3>
                        <hr>
                        <div class="insertion">
                            <h5 class="w-30">Series:</h5>
                            <div class="w-50 artists">{{ $comic['series'] }}</div>
                        </div>
                        <hr class="mb-20 mt-20">
                        <div class="insertion">
                            <h5 class="w-30">U.C. price:</h5>
                            <div class="w-50 artists">{{ $comic['price'] }}</div>
                        </div>
                        <hr class="mb-20 mt-20">
                        <div class="insertion">
                            <h5 class="w-30">On sale date:</h5>
                            <div class="w-50 artists">{{ $comic['sale_date'] }}</div>
                        </div>
                        <hr class="mb-20 mt-20">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection 