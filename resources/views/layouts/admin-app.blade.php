<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin-app.css') }}">
    @yield('stylesheet')
</head>
<body>
    <!-- wrapper class, necessary. -->
    <div class="wrapper">

        @include('partials.admin.sidebar')

        <!-- Page content -->
        <div id="content">
            @include('partials.admin.navbar')

            @yield('content')
        </div>

    </div>
</body>

<script src="{{ asset('js/app.js') }}"></script>
</html>