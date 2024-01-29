<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark px-5">
      <a class="navbar-brand" href="/">BrEukH.Blog</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route("eleves.index") }}">Eleves</a>
          </li>
        </ul>
          <a class="float-right text-danger" href="{{ route("login") }}"><i class="fa-solid fa-power-off fa-2x"></i></a>
      </div>
    </nav>
  </header>
