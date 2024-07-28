<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- @vite(['resources/sass/app.scss']) --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    {{-- <link href="{{ mix('css/app.css') }}" rel="stylesheet" integrity="{{ sri_hash('css/app.css') }}" crossorigin="anonymous"> --}}
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> --}}
    <style>
        .custom-button {
            background-color: #120269;
            color: #ffffff;
            padding: 8px;
            border-radius: 8px;
            width: 100px;
            height: 40px;
            font-size: 17px;
        }

        .custom-button:hover {
            background: #02eeff;
            color: #000000
        }
        
        .blurred {
            filter: blur(5px);
        }
    </style>

</head>

<body class="bg-dark">
    @include('partials.app')

    <div class="container mt-5">
        @yield('container')
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
            integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
            function navigateToLogin() {
                window.location.href = 'auth/login';
            }
        </script>
        {{-- <script src="js/script.js"></script> --}}
    </div>

    <div class="mt-auto text-center text-light">
        <div class="card-header">
            
            {{-- <hr>
            <div class="text-light">
                <footer>
                    <p>&copy;{{ $year }} AICS and with team AI Security</p>
                </footer>
            </div>
            </span> --}}
        </div>
    </div>
</body>

</html>
