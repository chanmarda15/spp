<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto">
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
      <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
    </ul>

  </form>
  <ul class="navbar-nav navbar-right">
    <li>
      <a href="#" class="nav-link nav-link-lg nav-link-user">
        <img alt="image" src="https://ui-avatars.com/api/?background=fff&color=0D8ABC&bold=true&name={{ Auth::user()->name }}" class="rounded-circle mr-1">
        <div class="d-sm-none d-lg-inline-block">Hello, {{ Auth::user()->name }}</div>
      </a>
    </li>
    <li>
      <form action="{{ url('logout') }}" method="POST">
        @csrf
        <a href="#" class="nav-link nav-link-lg link-danger">
          <i class="fas fa-sign-out-alt"></i>
        <!-- <button type="submit" class="btn btn-outline-danger">
        </button> -->
        </a>
      </form>
    </li>
  </ul>
</nav>