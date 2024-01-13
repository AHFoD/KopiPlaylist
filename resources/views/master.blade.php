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
            <a href="play" class="text-white hover:text-gray-500 ml-4">Playlist</a>
            <a href="otherpage.html" class="text-white hover:text-gray-500 ml-4">Other Page</a>
          
        </div>
    </nav>
    

  <main>
    @yield('content')
  </main>

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
