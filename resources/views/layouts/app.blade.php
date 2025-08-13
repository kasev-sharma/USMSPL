<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Dynamic Page Title. Defaults to 'Under Sky Imports & Exports' if no title is provided -->
    <title>{{ $title ?? 'Under Sky Imports & Exports' }}</title>

    <meta name="description" content="Under Sky Imports & Exports is a global sourcing leader specializing in high-quality minerals, exquisite handcrafted jewelry, and premium teas. We provide end-to-end logistics, customs, and compliance solutions.">

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

    <!-- THIS IS THE NEW LINE TO ADD -->
    @stack('styles')
</head>
<body>
    <div class="wrapper">
        
        {{-- Include the Header on every page --}}
        @include('partials.header')

        {{-- The @yield directive will display the content of a given section --}}
        @yield('content')

    </div>

    {{-- Include the Footer on every page (outside the main wrapper if it's full-width) --}}
    @include('partials.footer')

    {{-- Scripts --}}
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    @vite('resources/js/app.js')
</body>
</html>