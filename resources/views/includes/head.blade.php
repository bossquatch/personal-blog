<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <title>
        {{ $title ?? 'Douglas Cockerham' }}
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Douglas Cockerham" />
    <meta name="keywords" content="vcard, responsive, retina, resume, jquery, css3, bootstrap, portfolio" />
    <meta name="author" content="Douglas Cockerham" />
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/dc-custom.css') }}" type="text/css">

    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
    <script src="https://kit.fontawesome.com/1327c24680.js" crossorigin="anonymous"></script>

</head>
