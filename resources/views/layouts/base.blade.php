<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--引入自定義CSS&JS庫-->
    @yield('stylesheet')
    <title>@yield('title')</title>
</head>
<body>
    <div class="main">
        @yield('maincode')
    </div>
    <footer>
        @yield('footer')
    </footer>
</body>
</html>