<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <title>Document</title>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TourGo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{url('/jadwal')}}">Receipt</a>
        </li>
</ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                      @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
        </div>
        </div>
  </div>
</nav>

<div class="px-4 py-5 my-5 text-center">
    <h1 class="display-5 fw-bold">Cari Tempat Wisata</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Disini anda bisa mencari wisata - wisata yang ingin anda tuju, beserta deskripsi tempat dan penjelasan lainnya.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      <form>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="search" class="visually-hidden">Tempat Wisata</label>
            <input id="search" type="text" class="form-control" placeholder="Tempat Wisata">
            <button class="btn btn-primary" type="button">Cari</button>
            <a href="{{url('/pesan')}}" class="btn btn-outline-primary me-2">
            Pesan
          </a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">

  <div class="card" style="width: 18rem;">
  <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/181.webp" class="card-img-top" alt="image1">
  <div class="card-body">
    <h5 class="card-title">Air Terjun Kanto Lampo</h5>
    <p class="card-text">Tak hanya pantainya yang indah, Bali juga memiliki beberapa air terjun keren. Salah satunya air terjun Kanto Lampo di Gianyar.</p>
    
  </div>
</div>
</div>
<div class="col">
<div class="card" style="width: 18rem;">
  <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/182.webp" class="card-img-top" alt="image2">
  <div class="card-body">
    <h5 class="card-title">Pantai Sendang Biru</h5>
    <p class="card-text"> Pantai Sendang Biru merupakan salah satu pantai yang 
      terletak di Desa Sumber Agung, Kecamatan Sumber Manjing Wetan, 69 km ke arah selatan 
      dari pusat Kota Malang. Dalam bahasa Jawa pantai ini memiliki arti sumber air yang berwarna biru, 
      karena pantai ini memang sangatlah jernih dan berwarna biru.</p>
    
  </div>
</div>
</div>
<div class="col">
<div class="card" style="width: 18rem;">
  <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/183.webp" class="card-img-top" alt="image3">
  <div class="card-body">
    <h5 class="card-title">Pantai Goa Cina</h5>
    <p class="card-text">Pantai ini Terletak di daerah Malang bagian selatan, 
      tepatnya terletak di Desa Sitiarjo, Kecamatan Sumbermanjing Wetan, 
      Kabupaten Malang Selatan, pantai ini terhitung masih sangat alami dengan warna air laut biru 
      jernih dan bersih serta pasir putih yang lembut.</p>
    
  </div>
</div>
</div>
<div class="col">
<div class="card" style="width: 18rem;">
  <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/190.webp" class="card-img-top" alt="image3">
  <div class="card-body">
    <h5 class="card-title">Gunung Bromo</h5>
    <p class="card-text">Gunung Bromo dikenal sebagai salah satu obyek wisata alam yang ada di Desa Ngadisari, 
      Kecamatan Sukapura, Kabupaten Probolinggo, Provinsi Jawa Timur.
      Ketinggian Gunung Bromo adalah sekitar 2.329 meter di atas permukaan laut (m dpl), 
      atau sekitar 200 m dari dasar kaldera.</p>
    
  </div>
</div>
</div>
<div class="col">
<div class="card" style="width: 18rem;">
  <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/185.webp" class="card-img-top" alt="image3">
  <div class="card-body">
    <h5 class="card-title">Pantai Teluk Asmara</h5>
    <p class="card-text">Pantai Teluk Asmara terletak di Desa Tambakrejo, Subermanjing, Kabupaten Malang, Provinsi Jawa Timur. Pantai Teluk Asmara merupakan salah satu pantai yang lokasinya berada di balik bukit. 
      Kawasan Pantai Teluk Asmara merupakan salah satu pantai yang kondisinya masih alami di wilayah malang.</p>
    
  </div>
</div>
</div>
<div class="col">
<div class="card" style="width: 18rem;">
  <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/189.webp" class="card-img-top" alt="image3">
  <div class="card-body">
    <h5 class="card-title">Pantai Tiga Warna</h5>
    <p class="card-text">Pantai Tiga Warna merupakan salah satu pantai yang berada di dalam kawasan CMC (Clungup Mangrove Conservation). 
      Dan menjadi pilihan wisata pantai lain ketika berada di Malang.</p>
    
  </div>
</div>
</div>
</div>
  </body>
</html>