<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container col-lg-9">
      <img class="img-profile" style="margin: 30px 0 0 0; width:80px;height:80px;"
                    src="{{ asset('img/magelang.jpg') }}">
      <a class="navbar-brand justify-content-center" href="/">
          <div class="sidebar-brand-text mx-3" style="font-family: 'Times New Roman', Times, serif">Desa Rejosari</div>
          <div class="sidebar-brand-text mx-3" style="font-family: 'Times New Roman', Times, serif"><small>Kec. Bandongan, Kab. Magelang</small></div>
          <div class="sidebar-brand-text mx-3" style="font-family: 'Times New Roman', Times, serif"><small>Prov. Jawa Tengah</small></div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home" ) ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Profil" ) ? 'active' : '' }}" href="/profil">Profil</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Tema Wisata
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item nav-link {{ ($title === "Pertanian" )  }} text-dark"  href="/pertanian">Pertanian</a></li>
                <li><a class="dropdown-item nav-link {{ ($title === "Pertanian" ) }} text-dark" href="/peternakan">Peternakan</a></li>
                <li><a class="dropdown-item nav-link {{ ($title === "Pertanian" ) }} text-dark" href="/alam">Alam</a></li>
            </ul>
          </li>
            <li class="nav-item">
                <a class="nav-link {{ ($title === "Digital Map" ) ? 'active' : '' }}" href="/digitalmap">Digital Map</a>
              </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Lainnya
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item nav-link {{ ($title === "Pertanian" ) }} text-dark" href="/galeri">Galeri</a></li>
                    <li><a class="dropdown-item nav-link {{ ($title === "Pokdarwis" ) }} text-dark" href="/pokdarwis">Pokdarwis</a>
                  </li>
                    <li><a class="dropdown-item nav-link {{ ($title === "Pertanian" ) }} text-dark" href="/programdarwis">Program Pokdarwis</a></li>
                    <li><a class="dropdown-item nav-link {{ ($title === "Pertanian" ) }} text-dark" href="/produk">Produk Unggulan</a></li>
                    <li><a class="dropdown-item nav-link {{ ($title === "Pertanian" ) }} text-dark" href="/berita">Berita</a></li>
                    <li><a class="dropdown-item nav-link {{ ($title === "Pertanian" ) }} text-dark" href="/paket">Paket Wisata</a></li>
                </ul>
            </li>
        </ul>
        
        {{-- <ul class="navbar-nav">
            @auth
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Selamat Datang, {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/beranda"><i class="bi bi-layout-text-window"></i> Beranda</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </li>
              @else 
            <li class="nav-item">
              <a href="/login" class="nav-link {{ ($title === "login" ) ? 'active' : '' }}"><i class="bi bi-people"></i> Masuk</a>
            </li>
            @endauth
          </ul> --}}
      </div>
    </div>
  </nav>