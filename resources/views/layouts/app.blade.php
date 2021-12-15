<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="Teddius Maingi is a Software Developer based in Nairobi, Kenya. This site highlights his resume with samples of his works and a list of all the services that he offers. His contacts and links to his media platfoms are also embedded">
    
  <meta name="keywords" content="Teddius, Teddy, Ted, Maingi, Munyao, Teddy Maingi, Ted Maingi, Teddius Maingi, Munyao Maingi, Teddius Munyao Maingi, Teddy Munyao, Ted Munyao, Teddius Munyao, Software Developer, Web Developer, Web Design">
    
  <meta name="author" content="Teddius Munyao Maingi">

  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Teddius Maingi</title>

  <!-- Favicons -->
  <link href=" {{ asset('myfiles/images/favicon.ico') }}" rel="icon">
  <link href="{{ asset('myfiles/images/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('personal/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('personal/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('personal/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('personal/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('personal/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('personal/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('personal/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
    @include('includes.navbar')
  <!-- End Header -->

  @yield('content')

  @include('includes.footer')

</body>

</html>