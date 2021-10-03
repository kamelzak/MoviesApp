@extends('layouts.main')

@section('content')

    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
                <img src="{{'https://image.tmdb.org/t/p/w500/'.$show['poster_path']}}" alt="parasite" class="w-64 lg:w-96" style="width: 24rem">
                <div class="ml-24">
                    <h2 class="text-4xl mt-4 md:mt-0 font-semibold">{{$show['name']}}</h2>
                    <div class="flex items-center text-gray-400 text-sm mt-2">
                        <span>
                            <svg class="fill-current text-yellow-500 w-4" viewBox="0 -10 511.98685 511" xmlns="http://www.w3.org/2000/svg"><path d="m510.652344 185.902344c-3.351563-10.367188-12.546875-17.730469-23.425782-18.710938l-147.773437-13.417968-58.433594-136.769532c-4.308593-10.023437-14.121093-16.511718-25.023437-16.511718s-20.714844 6.488281-25.023438 16.535156l-58.433594 136.746094-147.796874 13.417968c-10.859376 1.003906-20.03125 8.34375-23.402344 18.710938-3.371094 10.367187-.257813 21.738281 7.957031 28.90625l111.699219 97.960937-32.9375 145.089844c-2.410156 10.667969 1.730468 21.695313 10.582031 28.09375 4.757813 3.4375 10.324219 5.1875 15.9375 5.1875 4.839844 0 9.640625-1.304687 13.949219-3.882813l127.46875-76.183593 127.421875 76.183593c9.324219 5.609376 21.078125 5.097657 29.910156-1.304687 8.855469-6.417969 12.992187-17.449219 10.582031-28.09375l-32.9375-145.089844 111.699219-97.941406c8.214844-7.1875 11.351563-18.539063 7.980469-28.925781zm0 0" fill="#ffc107"/></svg>
                        </span>
                        <span class="ml-1">{{$show['vote_average']*10}}%</span>
                        <span class="mx-2">|</span>
                        <span>{{\Carbon\Carbon::parse($show['first_air_date'])->format('d M Y') }}</span>
                        <span class="mx-2">|</span>
                        <span>
                            @foreach($show['genres'] as $genre)
                                {{ $genre['name'] }} @if(!$loop->last), @endif
                            @endforeach
                        </span>
                    </div>

                    <p class="text-gray-300 mt-8">
                        {{$show['overview']}}
                    </p>

                    <div class="mt-12">
                        <h4 class="text-white font-semibold">Featured crew</h4>
                        <div class="flex mt-4">
                            
                            @foreach ($show['credits']['crew'] as $crew)

                                @if ($loop->index <4)
                                    <div class="mr-8">
                                        <div>{{$crew['name']}}</div>
                                        <div class="text-sm text-gray-400">{{$crew['job']}}</div>
                                    </div>
                                @endif
                                
                            @endforeach

                        </div>
                    </div>

                    @if (count($show['videos']['results'])>0)
                        <div class="mt-12">
                            <a href="https://youtube.com/watch?v={{ $show['videos']['results'][0]['key'] }}" class="flex inline-flex items-center bg-yellow-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-yellow-600 transition ease-in-out duration-150">
                                <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                                <span class="ml-2">Play Trailer</span>
                            </a>
                        </div>
                    @endif

                </div>
        </div>
    </div>  <!-- end movie info -->

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">

                @foreach ($show['credits']['cast'] as $cast)
                    @if ($loop->index <5)
                
                        <div class="mt-8">
                            <a href="">
                                <img src="{{'https://image.tmdb.org/t/p/w500/'.$cast['profile_path']}}" alt="profile" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="#" class="text-lg mt-2  hover:text-gray:300">{{$cast['name']}}</a>
                                <div class="text-gray-400 text-sm">
                                    {{$cast['character']}}
                                </div>
                            </div>
                        </div> 

                 @endif
                @endforeach              
            </div>
        </div>
    </div> <!-- end movie-cast -->

    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-8">
                @foreach ($show['images']['backdrops'] as $image)
                    @if ($loop->index <9)
                        <div class="mt-8">
                            <a href="">
                                <img src="{{'https://image.tmdb.org/t/p/w500/'.$image['file_path']}}" alt="parasite" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div> 
                    @endif
                @endforeach                          
            </div>
        </div>
    </div> <!-- end images -->

@endsection