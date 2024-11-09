<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Library Catalog')</title>
    <!-- Include any CSS files here -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-size: 1.5em; 
        }
    </style>
</head>
<body>
    <header>
        <h1>Library Catalog</h1>
        <!-- Navigation or other header content -->
    </header>

    <main>
        @yield('content')
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html> 