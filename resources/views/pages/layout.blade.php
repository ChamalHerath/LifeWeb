<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') CoopLife</title>

    @include('pages.head')

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center ">
        <div class="container container-xxl d-flex align-items-center">

            @include('pages.navbar')

        </div>
    </header>
    <!-- End Header -->


    @yield('content')

    @include('pages.footer')

</body>

</html>