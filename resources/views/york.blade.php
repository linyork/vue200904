<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Page Css-->
    @yield('pageCss')

</head>
<body>
<div id="york-div">
york
</div>

<!-- Page Js-->
@yield('pageJs')
</body>
</html>
