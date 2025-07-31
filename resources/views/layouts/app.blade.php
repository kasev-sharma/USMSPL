<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Dynamic Page Title. Defaults to 'JMJ Imports & Exports' if no title is provided -->
    <title>{{ $title ?? 'JMJ Imports & Exports' }}</title>

    <!-- Professional Enhancement: Add a Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/Vector.png') }}">

    <!-- Remix Icons CSS -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet"/>
    
    <!-- Font Awesome CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>

    <!-- Google Fonts (from original CSS) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    
    <!-- Compiled CSS -->
    @vite('resources/css/app.css')

</head>
<body>
    <div class="wrapper">
        <!-- The content of our page sections will be injected here -->
        @yield('content')
    </div>

    <!-- Ion Icons (from original HTML) -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>

    <!-- Compiled JavaScript -->
    @vite('resources/js/app.js')
</body>
</html>