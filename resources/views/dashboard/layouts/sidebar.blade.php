<nav id="sidebarMenu" class="col-md-3 ps-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
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
                    {{-- <li><a class="dropdown-item" href="/dashboard/pengurus">Pengurus</a></li> --}}
                    {{-- <li><a class="dropdown-item" href="/dashboard/sambutan">Sambutan</a></li> --}}
                </ul>
            </li>

            <li class="nav-item ">
                <a class="nav-link {{ Request::is('/dashboard/pengurus*') ? 'active' : '' }}"
                    href="/dashboard/pengurus">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Pengurus
                </a>
            </li>

            {{-- <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/berita   *') ? 'active' : '' }}" href="/dashboard/berita">
            <span data-feather="file" class="align-text-bottom"></span>
            Berita
          </a>
        </li> --}}
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/pendaftaran-santri*') ? 'active' : '' }}"
                    href="/dashboard/pendaftaran-santri">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Santri
                </a>
            </li>

            {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/kategori   *') ? 'active' : '' }}" href="/dashboard/kategori">
              <span data-feather="file" class="align-text-bottom"></span>
              Kategori
            </a>
        </li> --}}
            <hr class="w-100 clearfix" style="margin-bottom: 2px" />
            <h6 class="mx-auto">Non Data</h6>
            <hr class="w-100 clearfix" style="margin-top: 1px" />

            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/banner*') ? 'active' : '' }}" href="/dashboard/banner">
                    <span data-feather="image" class="align-text-bottom"></span>
                    Banner
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/sambutan*') ? 'active' : '' }}"
                    href="/dashboard/sambutan">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Sambutan
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/profil*') ? 'active' : '' }}" href="/dashboard/profil">
                    <span data-feather="image" class="align-text-bottom"></span>
                    Profil
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link {{ Request::is('/dashboard/pengumuman*') ? 'active' : '' }}"
                    href="/dashboard/pengumuman">
                    <span data-feather="bell" class="align-text-bottom"></span>
                    Pengumuman
                </a>
            </li>

            <li class="nav-item mt-5 ">
                <a class="nav-link bg-danger text-light rounded-pill  me-3 ms-3 ms-md-0" href="/logout" style="">
                    <span data-feather="log-out" class="align-text-bottom text-light"></span>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</nav>
