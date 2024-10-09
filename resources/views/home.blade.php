@extends('layouts.main')

@section('container')
<section>
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('img/profil.jpg') }}" class="d-block w-100" alt="..." width="1000" height="500">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/kambing.jpg') }}" class="d-block w-100" alt="..." width="1000" height="500">
        </div>
        <div class="carousel-item">
          <img src="{{ asset('img/gumuk.jpg') }}" class="d-block w-100" alt="..." width="1000" height="500">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon icon-green" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon icon-green" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
  </div>
</section>
<section>
  <div class="untree_co-section">
    <div class="container">
      <div class="row align-items-stretch">
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
          <a href="/profil" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-home"></i>
            </div>
            <div>
              <h3>Profile</h3>
              <span></span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
          <a href="/digitalmap" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-map"></i>
            </div>
            <div>
              <h3>Digital Maps</h3>
              <span></span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
          <a href="berita" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-newspaper"></i>
            </div>
            <div>
              <h3>Berita</h3>
              <span></span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
          <a href="/programdarwis" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-pen"></i>
            </div>
            <div>
              <h3>Pengelolaan Program Pokdarwis</h3>
              <span></span>
            </div>
          </a>
        </div>


        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="0">
          <a href="/paket" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-ticket"></i>
            </div>
            <div>
              <h3>Paket Wisata</h3>
              <span></span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
          <a href="/pokdarwis" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-users-alt"></i>
            </div>
            <div>
              <h3>Pokdarwis</h3>
              <span></span>
            </div>
          </a>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
          <a href="/galeri" class="category d-flex align-items-start h-100">
            <div>
              <i class="uil uil-camera"></i>
            </div>
            <div>
              <h3>Galeri</h3>
              <span></span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection