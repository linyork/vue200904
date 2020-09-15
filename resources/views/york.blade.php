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
<!-- 準備給 Vue 的掛載點 -->
<div id="app">
    <!-- 使用我們建立的元件，一個有傳入名字，一個沒有 -->
    <Hello name="Tony"></Hello>
</div>

<!-- 載入打包後的 js 檔 -->
<script src="/js/hello.js"></script>

<!-- Page Js-->
@yield('pageJs')
</body>
</html>
