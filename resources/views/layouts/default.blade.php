@include('includes.head',['title' => 'Bossquatch - Home'])

<body class="page">

    <div class="lm-animated-bg"></div>

    <!-- Loading animation -->
    <div class="preloader">
        <div class="preloader-animation">
            <div class="preloader-spinner">
            </div>
        </div>
    </div>
    <!-- /Loading animation -->

    <!-- Scroll To Top Button -->
    <div class="lmpixels-scroll-to-top"><i class="lnr lnr-chevron-up"></i></div>
    <!-- /Scroll To Top Button -->

    <div class="page-scroll">
        <div id="page_container" class="page-container bg-move-effect" data-animation="transition-flip-in-right">

            @include('includes.header')
            @yield('content')
            @include('includes.footer')

        </div>
    </div>
    @include('includes.scripts')
{{--    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>--}}
{{--    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>--}}
{{--    <script src='{{ asset('https://www.google.com/recaptcha/api.js') }}'></script>--}}
{{--    <script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
{{--    <script src='{{ asset('js/jquery.shuffle.min.js') }}'></script>--}}
{{--    <script src='{{ asset('js/masonry.pkgd.min.js') }}'></script>--}}
{{--    <script src='{{ asset('js/owl.carousel.min.js') }}'></script>--}}
{{--    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>--}}
{{--    <script src='https://maps.googleapis.com/maps/api/js?key='></script>--}}
{{--    <script src="{{ asset('js/jquery.googlemap.js') }}"></script>--}}
{{--    <script src="{{ asset('js/validator.js') }}"></script>--}}
{{--    <script src="{{ asset('js/main.js') }}"></script>--}}

</body>
</html>
