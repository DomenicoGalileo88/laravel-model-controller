<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

</head>

<body>
    <header class="site_header"></header>
    <!-- /.site_header -->

    <main class="site_main">
        @yield('content')
        
    </main>
    <!-- /.site_main -->

    <footer class="site_footer"></footer>
    <!-- /.site_footer -->



    <script src="{{asset('js/script.js')}}"></script>
</body>

</html>