<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('frontend/libraries/bootstrap/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{ url('frontend/libraries/bootstrap/css/custom.css')}}" />
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap" rel="stylesheet">
</head>

<body>

    @yield('content')


    <script src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{ url('frontend/libraries/bootstrap/js/bootstrap.js')}}"></script>

</body>

</html>