<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Alert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        {{-- <link rel="stylesheet" href="resources/css/app.css, resources/js/app.js"> --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>

<style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>

</head>
<body>
    @yield('content')
</body>
</html>