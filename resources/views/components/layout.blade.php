<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hidroweb - Pagina oficial.</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    @vite(['public/css/app.css', 'public/css/style.css','public/js/app.js'])
</head>

    <body>
        <x-topbar>
        </x-topbar>

        <x-navbar>
        </x-navbar>

        <x-header>
        </x-header>

        <main>
            {{ $slot }}
        </main>

        <x-footer>
        </x-footer>
    </body>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js'"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="asset{{'js/lib/easing/easing.min.js'}}"></script>
        <script src="asset{{'js/lib/owlcarousel/owl.carousel.min.js'}}"></script>
        <script src="asset{{'js/lib/tempusdominus/js/moment.min.js'}}"></script>
        <script src="asset{{'js/lib/tempusdominus/js/moment-timezone.min.js'}}"></script>
        <script src="asset{{'js/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'}}"></script>

        <!-- Contact Javascript File -->
        <script src="asset{{'js/mail/jqBootstrapValidation.min.js'}}"></script>
        <script src="asset{{'js/mail/contact.js'}}"></script>

        <!-- Template Javascript -->
        <script src="asset{{'js/main.js'}}"></script>
</html>
