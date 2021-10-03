@extends('layouts.main')

@section('content')

    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Popular Tv Shows</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($popularShows as $show)

                    <x-show-card :show="$show" :genres="$genres"/>

                @endforeach
            </div>
                
        </div> <!-- end pouplar-movies -->

        <div class="now-playing-movies py-24">
            <h2 class="uppercase tracking-wider text-yellow-500 text-lg font-semibold">Top Rated</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach($topRatedShows as $show)

                    <x-show-card :show="$show" :genres="$genres"/>

                @endforeach            
            </div>
        </div> <!-- end now-playing-movies -->
    </div>

@endsection