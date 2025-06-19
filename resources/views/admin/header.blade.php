<nav class="navbar navbar-expand-lg">
  <div class="container-fluid d-flex align-items-center justify-content-between">

    <div class="navbar-header">
      <a href="#" class="navbar-brand">
        <div class="brand-text brand-big visible text-uppercase"><img src="/assets/images/logo.png"><strong class="text-primary"></strong></div>
      </a>
    </div>

    <!-- Log out -->
    <div class="list-inline-item logout">
      <form method="POST" action="{{ route('logout') }}" onclick="return confirm('Are you sure?');">
        @csrf
        <input class="btn btn-danger" type="submit" value="Log Out">
      </form>
    </div>

  </div>
</nav>