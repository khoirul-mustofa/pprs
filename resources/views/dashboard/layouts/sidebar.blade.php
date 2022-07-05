<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky mt-md-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Beranda
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span data-feather="upload-cloud" class="align-text-bottom"></span>
                    Postingan
                </a>
                <ul class="dropdown-menu dropdown-menu-dark " aria-labelledby="navbarDarkDropdownMenuLink">
                    <li><a class="dropdown-item" href="/dashboard/berita">Berita</a></li>
                    <li><a class="dropdown-item" href="/dashboard/kategori">Kategori</a></li>
                    <li><a class="dropdown-item" href="/dashboard/pengurus">Pengurus</a></li>
                    <li><a class="dropdown-item" href="/dashboard/sambutan">Sambutan</a></li>
                </ul>
            </li>

            {{-- <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/berita   *') ? 'active' : '' }}" href="/dashboard/berita">
            <span data-feather="file" class="align-text-bottom"></span>
            Berita
          </a>
        </li> --}}
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/pendaftaran-santri   *') ? 'active' : '' }}"
                    href="/dashboard/pendaftaran-santri">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Pendaftar
                </a>
            </li>

            {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/kategori   *') ? 'active' : '' }}" href="/dashboard/kategori">
              <span data-feather="file" class="align-text-bottom"></span>
              Kategori
            </a>
        </li> --}}
            <li class="nav-item">
                <a class="nav-link " href="/logout">
                    <span data-feather="log-out" class="align-text-bottom"></span>
                    Logout
                </a>
            </li>
    </div>
</nav>
