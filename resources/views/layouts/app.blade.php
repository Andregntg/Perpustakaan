<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('/') }}"><h1>Perpustakaan</h1></a>
        <div class="collapse navbar-collapse" id="navbarNav">
       
                <!-- Tambahkan link navigasi lain jika diperlukan -->
            </ul>
        </div>
    </nav>
    
    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
