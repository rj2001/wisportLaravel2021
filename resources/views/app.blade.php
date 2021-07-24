<html>
<head>
    <title>App Name - @yield('title')</title>
</head>
<body>
@section('sidebar')
    This is the common sidebar.
@show

<div class="container">
    @yield('content')
</div>
</body>
</html>
