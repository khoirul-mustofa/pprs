<nav class="navbar navbar-expand-xl navbar-dark shadow sticky-top" style="background-image: url('/img/AnimatedShape.svg');">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">
      <img src="/img/20210301_220849.png"  alt="" width="100" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 fw-bolder">
        <li class="nav-item ">
          <a class="nav-link {{ ($title=== "beranda") ? 'active border border-light border-top-0 border-start-0 border-end-0' : '' }}"  href="/">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title=== "profil") ? 'active border border-light border-top-0 border-start-0 border-end-0' : '' }}"  href="/profil">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title=== "pendaftaran-santri") ? 'active border border-light border-top-0 border-start-0 border-end-0' : '' }}"  href="/pendaftaran-santri">Pendaftaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title=== "Semua Berita") ? 'active border border-light border-top-0 border-start-0 border-end-0' : '' }}"  href="/berita">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title=== "pengumuman") ? 'active border border-light border-top-0 border-start-0 border-end-0' : '' }}"  href="/pengumuman">Pengumuman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title=== "kontak") ? 'active border border-light border-top-0 border-start-0 border-end-0' : '' }}"  href="/kontak">Kontak</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item">
            <a href="/login" class="nav-link">Login</a>
        </li>
      </ul>
      {{-- <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light shadow-sm" type="submit">Search</button>
      </form> --}}
    </div>
  </div>
</nav>
