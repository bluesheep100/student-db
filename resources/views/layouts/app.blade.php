<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tags -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport"/>
    <meta name="viewport" content="width=device-width"/>

    <title>ElevDB</title>

    <!-- Halfmoon CSS -->
    <link href="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/css/halfmoon-variables.min.css" rel="stylesheet"/>

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body class="with-custom-webkit-scrollbars with-custom-css-scrollbars" data-dm-shortcut-enabled="true"
      data-sidebar-shortcut-enabled="true" data-set-preferred-mode-onload="true">

@yield('modals')
<!-- Page wrapper start -->
<div class="page-wrapper @auth with-navbar with-sidebar @endauth" data-sidebar-type="overlayed-sm-and-down">
    @auth
        @include('layouts.navbar')

        @include('layouts.sidebar')
    @endauth

    <div class="content-wrapper">
        @yield('content')
    </div>
</div>
<!-- Page wrapper end -->

<!-- Halfmoon JS -->
<script src="https://cdn.jsdelivr.net/npm/halfmoon@1.1.1/js/halfmoon.min.js"></script>
</body>
</html>
