<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restiki</title>

    
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">

    <style>
        
        .navbar-custom {
            background-color: #ff6b6b;
            
        }

        .navbar-brand,
        .nav-link {
            color: white !important;
        }

        .nav-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body class="bg-light">

   
    @include('partials.navbar')

    <main class="py-4">
        <div class="container">
            @yield('main-content')
        </div>
    </main>

 
    <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>