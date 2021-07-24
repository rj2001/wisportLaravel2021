<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="{{ asset("images/fav.ico") }}" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700%7CMontserrat:300,500%7COswald:400,500" rel="stylesheet">

    <!-- FONTAWESOME ICONS -->
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- ALL CSS FILES -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/wisport.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- MOB.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="{{ url('/css/mob.css') }}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>

@yield('content')

<!--== Bootstrap & Latest JS ==-->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
