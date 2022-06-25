<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/berita   *') ? 'active' : '' }}" href="/dashboard/berita">
            <span data-feather="file" class="align-text-bottom"></span>
            Berita
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/pendaftaran-santri   *') ? 'active' : '' }}" href="/dashboard/pendaftaran-santri">
              <span data-feather="file" class="align-text-bottom"></span>
              Pendaftar
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/kategori   *') ? 'active' : '' }}" href="/dashboard/kategori">
              <span data-feather="file" class="align-text-bottom"></span>
              Kategori
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="/logout">
              <span data-feather="file" class="align-text-bottom"></span>
              Logout
            </a>
        </li>

          {{-- <div class="navbar-nav">
    <div class="nav-item text-nowrap">
        <form action="">
            @csrf
            <a class="nav-link px-3" href="/logout">Logout</a>
        </form>
    </div>
  </div> --}}

    </div>
  </nav>
