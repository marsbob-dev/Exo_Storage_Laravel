<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    @include('partials.Home.header')
    <main id="main">
        @yield('content')
    </main>
    @include('partials.footer')
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>   
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>