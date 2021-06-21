<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Page Name -->
    <ul class="navbar-nav ml-left">
        <section class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1>@yield('page')</h1>
                </div>
              </div>
            </div>
        </section>
    </ul>
    <!-- Log Out Button -->
    <ul class="navbar-nav ml-auto">
        <a class="nav-link" href="{{ 'logout' }}"><i class="fa fa-power-off"></i> Logout</a>    
    </ul>
  </nav>