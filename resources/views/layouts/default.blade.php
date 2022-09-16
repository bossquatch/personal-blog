@include('includes.head',['title' => 'Douglas Cockerham - Home'])

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
</body>
</html>
