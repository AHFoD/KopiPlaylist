@extends('master')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha384-Vkoo8q + 3lE4u79jp + 3BpL + sDU + 7/Es5v4T + Q8txlW2msK + sPbR5tZ + 6a/DLX1j"
    crossorigin="anonymous">


<!-- Content -->
<div class="container mx-auto mt-6 p-4">
    <!-- <h2 class="text-2xl font-semibold mb-4">Table Example</h2> -->

    <!-- Table -->
    <table class="min-w-full bg-white border-collapse rounded-lg">
        <!-- Table Header -->
        <!-- ... -->

        <tbody class="divide-y divide-gray-200">
            <!-- Table rows -->
            <!-- ... -->
        </tbody>
    </table>

    <!-- Button to open modal -->
    <button id="openModalBtn" class="btn btn-primary mt-4">Add Playlist</button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Playlist</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Add form fields for name and playlist URL -->
                    <form method="POST" action="{{ url('addData') }}">
                        @csrf
                        <div class="form-group">
                            <label for="playlistName">Name</label>
                            <input type="text" class="form-control" id="playlistName" name="shopname">
                        </div>
                        <div class="form-group">
                            <label for="playlistURL">Playlist URL</label>
                            <input type="text" class="form-control" id="playlistURL" name="playlist_url">
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Table -->
    <h2 class="text-2xl font-semibold mt-4">Playlist Data</h2>
    <table class="min-w-full bg-white border-collapse rounded-lg">
        <!-- Table Header -->
        <thead class="bg-gray-200 text-gray-700">
            <tr>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Playlist</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">

            <!-- Display data here -->
            @foreach($playlists as $playlist)
            <tr class="border-b border-gray-200 dark:border-gray-400">
                <td class="px-6 py-4 whitespace-no-wrap">{{ $playlist->shopname }}</td>
                <!-- <td class="px-6 py-4 whitespace-no-wrap">{{ $playlist->playlist_url }}</td> -->
                <!-- <td class="px-6 py-4 whitespace-no-wrap">
                    <a href="{{ $playlist->playlist_url }}" target="_blank">{{ $playlist->playlist_url }}</a>
                </td> -->

                <!-- <td class="px-6 py-4 whitespace-no-wrap">
                    @if (strpos($playlist->playlist_url, 'spotify') !== false)
                    <a href="{{ $playlist->playlist_url }}" target="_blank">
                        <img src="spotify_icon.png" alt="Spotify Icon">
                    </a>
                    @elseif (strpos($playlist->playlist_url, 'youtube') !== false)
                    <a href="{{ $playlist->playlist_url }}" target="_blank">
                        <img src="youtube_music_icon.png" alt="YouTube Music Icon">
                    </a>
                    @elseif (strpos($playlist->playlist_url, 'apple') !== false)
                    <a href="{{ $playlist->playlist_url }}" target="_blank">
                        <img src="apple_music_icon.png" alt="Apple Music Icon">
                    </a>
                    @else
                    <a href="{{ $playlist->playlist_url }}" target="_blank">{{ $playlist->playlist_url }}</a>
                    @endif
                </td> -->
                <td class="px-6 py-4 whitespace-no-wrap">
                    @if (str_contains($playlist->playlist_url, 'spotify'))
                    <a href="{{ $playlist->playlist_url }}" target="_blank">
                        <!-- <i class="fab fa-spotify"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" height="40" width="40"
                            viewBox="0 0 496 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm100.7 364.9c-4.2 0-6.8-1.3-10.7-3.6-62.4-37.6-135-39.2-206.7-24.5-3.9 1-9 2.6-11.9 2.6-9.7 0-15.8-7.7-15.8-15.8 0-10.3 6.1-15.2 13.6-16.8 81.9-18.1 165.6-16.5 237 26.2 6.1 3.9 9.7 7.4 9.7 16.5s-7.1 15.4-15.2 15.4zm26.9-65.6c-5.2 0-8.7-2.3-12.3-4.2-62.5-37-155.7-51.9-238.6-29.4-4.8 1.3-7.4 2.6-11.9 2.6-10.7 0-19.4-8.7-19.4-19.4s5.2-17.8 15.5-20.7c27.8-7.8 56.2-13.6 97.8-13.6 64.9 0 127.6 16.1 177 45.5 8.1 4.8 11.3 11 11.3 19.7-.1 10.8-8.5 19.5-19.4 19.5zm31-76.2c-5.2 0-8.4-1.3-12.9-3.9-71.2-42.5-198.5-52.7-280.9-29.7-3.6 1-8.1 2.6-12.9 2.6-13.2 0-23.3-10.3-23.3-23.6 0-13.6 8.4-21.3 17.4-23.9 35.2-10.3 74.6-15.2 117.5-15.2 73 0 149.5 15.2 205.4 47.8 7.8 4.5 12.9 10.7 12.9 22.6 0 13.6-11 23.3-23.2 23.3z" />
                        </svg>
                    </a>
                    @elseif (str_contains($playlist->playlist_url, 'youtube'))
                    <a href="{{ $playlist->playlist_url }}" target="_blank">
                        <!-- <i class="fab fa-youtube"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" height="40" width="40"
                            viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                        </svg>
                    </a>
                    @elseif (str_contains($playlist->playlist_url, 'apple'))
                    <a href="{{ $playlist->playlist_url }}" target="_blank">
                        <!-- <i class="fab fa-apple"></i> -->
                        <svg xmlns="http://www.w3.org/2000/svg" height="40" width="40"
                            viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                            <path
                                d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z" />
                        </svg>
                    </a>
                    @else
                    <a href="{{ $playlist->playlist_url }}" target="_blank">{{ $playlist->playlist_url }}</a>
                    @endif
                </td>





            </tr>
            @endforeach
        </tbody>
    </table>

</div>


@endsection