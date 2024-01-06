<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Page</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include Bootstrap CSS (only for modal styles) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Style adjustments for the modal */
        .modal-backdrop {
            display: none !important;
        }
        #exampleModal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            z-index: 9999;
            padding: 20px;
        }
        #exampleModal.show {
            display: block;
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Navbar -->
    <nav class="bg-gray-800 p-4 text-white">
        <div class="container mx-auto">
            <h1 class="text-lg font-semibold">Navbar</h1>
            <!-- Add your navbar links or components here -->
        </div>
    </nav>

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
        <div class="modal" id="exampleModal" tabindex="-1" role="dialog">
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
                        <form id="playlistForm">
                            <div class="form-group">
                                <label for="playlistName">Name</label>
                                <input type="text" class="form-control" id="playlistName" name="name">
                            </div>
                            <div class="form-group">
                                <label for="playlistURL">Playlist URL</label>
                                <input type="text" class="form-control" id="playlistURL" name="playlistURL">
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
                @foreach($datas as $data)
                <tr class="border-b border-gray-200 dark:border-gray-600">
                    <td class="px-6 py-4 whitespace-no-wrap">{{ $data['name'] }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        @if(isset($data['playlistURL']))
                            <a href="{{ $data['playlistURL'] }}" class="text-blue-500 hover:underline"
                                title="{{ $data['playlistURL'] }}">Visit Playlist</a>
                        @else
                            No URL available
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Your scripts -->
    <script>
        $(document).ready(function() {
            $('#openModalBtn').click(function() {
                $('#exampleModal').addClass('show');
            });
            $('.close').click(function() {
                $('#exampleModal').removeClass('show');
            });
        });
    </script>
</body>

</html>
