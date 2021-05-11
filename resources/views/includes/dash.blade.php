@include('includes.scripts')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  @include('includes.styles')

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

@include('includes.navbar')


    <!-- Main Sidebar Container -->
@include('includes.sidebar')

@yield('contenido')


<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
</body>

</html>
