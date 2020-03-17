
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Admin Panel</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  @section('datatable-css')

  @show
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">

  @include('backend.layouts.nav')
  @include('backend.layouts.sidebar')

  <div class="content-wrapper">
    <div class="content-header">

          @yield('content')

    </div>
  </div>

  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<script src="{{asset('js/app.js')}}"></script>
@section( 'datatable-js')
@show

</body>
</html>
