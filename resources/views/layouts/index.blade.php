<!DOCTYPE html>
<html lang="en">

    <head>
        <title>Blog post &mdash; Blog post</title>
        <meta charset="utf-8">
        <meta name="viewport"
              content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap"
              rel="stylesheet">

        <link rel="stylesheet"
              href="{{ asset('template/fonts/icomoon/style.css') }}">

        <link rel="stylesheet"
              href="{{ asset('template/css/bootstrap.min.css') }}">
        <link rel="stylesheet"
              href="{{ asset('template/css/jquery-ui.css') }}">
        <link rel="stylesheet"
              href="{{ asset('template/css/owl.carousel.min.css') }}">
        <link rel="stylesheet"
              href="{{ asset('template/css/owl.theme.default.min.css') }}">
        <link rel="stylesheet"
              href="{{ asset('template/css/owl.theme.default.min.css') }}">

        <link rel="stylesheet"
              href="{{ asset('template/css/jquery.fancybox.min.css') }}">

        <link rel="stylesheet"
              href="{{ asset('template/css/bootstrap-datepicker.css') }}">

        <link rel="stylesheet"
              href="{{ asset('template/fonts/flaticon/font/flaticon.css') }}">

        <link rel="stylesheet"
              href="{{ asset('template/css/aos.css') }}">
        <link href="{{ asset('template/css/jquery.mb.YTPlayer.min.css') }}"
              media="all"
              rel="stylesheet"
              type="text/css">

        <link rel="stylesheet"
              href="{{ asset('template/css/style.css') }}">
    </head>

    <body data-spy="scroll"
          data-target=".site-navbar-target"
          data-offset="300">
        <div class="site-wrap">

            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>

            <div class="header-top">
                @include('layouts.blocks.logo-header')
                @include('layouts.blocks.menu-header')
            </div>

            <div class="site-section py-0">
                @include('blogs.carousel')
            </div>


            <div class="site-section">
                <div class="container">
                    <div class="row">
                        @include('blogs.editor-picks')

                        @include('blogs.trending-posts')
                    </div>
                </div>
            </div>
            <!-- END section -->

            <div class="py-0">
                @include('blogs.choosen-post')
            </div>

            <div class="site-section">
                @include('blogs.popular-categories')
            </div>

            <div class="site-section">
                @include('blogs.recent-news')
            </div>

            @include('layouts.blocks.news-letter')

            @include('layouts.blocks.footer')
        </div>
        <!-- .site-wrap -->

        <!-- loader -->
        <div id="loader"
             class="show fullscreen"><svg class="circular"
                 width="48px"
                 height="48px">
                <circle class="path-bg"
                        cx="24"
                        cy="24"
                        r="22"
                        fill="none"
                        stroke-width="4"
                        stroke="#eeeeee" />
                <circle class="path"
                        cx="24"
                        cy="24"
                        r="22"
                        fill="none"
                        stroke-width="4"
                        stroke-miterlimit="10"
                        stroke="#ff5e15" /></svg></div>

        <script src="{{ asset('template/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('template/js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('template/js/jquery-ui.js') }}"></script>
        <script src="{{ asset('template/js/popper.min.js') }}"></script>
        <script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('template/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('template/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('template/js/jquery.countdown.min.js') }}"></script>
        <script src="{{ asset('template/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('template/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('template/js/aos.js') }}"></script>
        <script src="{{ asset('template/js/jquery.fancybox.min.js') }}"></script>
        <script src="{{ asset('template/js/jquery.sticky.js') }}"></script>
        <script src="{{ asset('template/js/jquery.mb.YTPlayer.min.js') }}"></script>
        <script src="{{ asset('template/js/main.js') }}"></script>

    </body>
</html>