<!DOCTYPE html>
<html>

<head>
  @include('admin.css')
</head>

<body>
  <header class="header">
    @include('admin.header')
  </header>
  @include('admin.sidebar')
  <!-- Sidebar Navigation end-->
  <div class="page-content">
    <div class="page-header">
      <div class="container-fluid">
        @include('admin.body')
      </div>
    </div>
  </div>
  <!-- JavaScript files-->
  @include('home.js')
</body>

</html>