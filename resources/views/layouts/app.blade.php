<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teddius Maingi | Portfolio</title>
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="/css/app.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css">

    <script src="/js/app.js"></script>

</head>
<body>
    <div class="bg-danger text-light">
        <p class="text-center m-2 p-2">Oops! <i class="mdi mdi-emoticon-cry-outline"></i> This site is currently under maintainance, some links might not work <i class="mdi mdi-emoticon-sad-outline"></i></p>
      </div>
    @include('inc.navbar')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>