<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>nj-laravel  |  @yield('title')
        </title>        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />
        <style>
            .card {
              box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
              transition: 0.3s;
              width: 40%;
              margin-top: 22px;
              margin-right: 25px;
              margin-left: 25px;
              padding: 20px;

            }

            .card:hover {
              box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            }

            .container {
              padding: 10px 16px;

            }
            </style>
    </head>
    <body>
        <style>
            body  {
              background-color: #cfcfd6;
            }
            </style>

        <!-- Navigation-->
        @include('partials.nav')
        <!-- Header-->
       @include('partials.header')
        <!-- Section-->
        <h1 >@yield('titr')</h1>
        <br>
        @yield('main')
        <br>
        <!-- Footer-->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
    @include('partials.footer')
</html>
