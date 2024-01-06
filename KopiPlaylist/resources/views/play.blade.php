@extends('master')

@section('content')

  <!-- Content -->
  <div class="container mx-auto mt-6 p-4">
    <h2 class="text-2xl font-semibold mb-4">Table Example</h2>

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
                    <form method="POST" action="{{ url('play') }}">
                        @csrf
                        <div class="form-group">
                            <label for="playlistName">Name</label>
                            <input type="text" class="form-control" id="playlistName" name="shopname">
                        </div>
                        <div class="form-group">
                            <label for="playlistURL">Playlist URL</label>
                            <input type="text" class="form-control" id="playlistURL" name="ply">
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
                <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Playlist URL</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">

            <!-- Display data here -->
            @foreach($playlists as $playlist)
            <tr class="border-b border-gray-200 dark:border-gray-600">
                <td class="px-6 py-4 whitespace-no-wrap">{{ $playlist['shopname'] }}</td>
               
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

    
@endsection