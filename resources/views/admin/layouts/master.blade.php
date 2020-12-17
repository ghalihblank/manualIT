<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getlocale()) }}">
<head>
  <meta charset="utf-8">
    <!-- <meta http-equiv="refresh" content="3;url=http://118.96.151.224/" /> -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield ('title')</title>

  <!-- Scripts -->
    @include ('admin.layouts._asset_header')


</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">  

    <div class="wrapper">
        @include ('admin.layouts.header') 

        @include ('admin.layouts.sidebar')

        @yield ('content')

        @include ('admin.layouts.footer')
    </div>

<!-- ./wrapper -->
    @include ('admin.layouts._asset_footer')
</body>
</html>
