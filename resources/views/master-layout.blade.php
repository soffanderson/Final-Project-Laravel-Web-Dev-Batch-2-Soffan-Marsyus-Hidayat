<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"> --}}
    <title>Toko Online</title>
</head>

<body>
    <div class="container mx-auto">

        <div class="container">
            @yield('home')
            @yield('content')
        </div>
    </div>



    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>