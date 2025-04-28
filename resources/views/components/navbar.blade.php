<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('users.index') }}">Admin-panel</a>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a  class="nav-link" href="{{ route('users.new') }}">New User</a>
          <a class="nav-link"  href="{{ route('users.index') }}">User List</a>
        </div>
      </div>
    </div>
  </nav>