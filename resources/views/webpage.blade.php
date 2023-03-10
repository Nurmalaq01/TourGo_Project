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
   <!-- Scripts -->
   <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="facebook" viewBox="0 0 16 16">
    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
  </symbol>
  <symbol id="instagram" viewBox="0 0 16 16">
      <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
  </symbol>
  <symbol id="email" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
  </symbol>
  <symbol id="twitter" viewBox="0 0 16 16">
    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
  </symbol>
  <symbol id="guide" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
  </symbol>
  <symbol id="order" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
  <symbol id="search" viewBox="0 0 16 16">
  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
  </symbol>
</svg>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TourGo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{URL::to('/')}}">Home</a>
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
</nav>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  <div class="carousel-item active">
      <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(27).webp" class="d-block w-100" alt="image">
      <div class="carousel-caption d-none d-md-block">
        <h5 class='fs-3'>WELCOME</h5>
        <p class='fs-5'>TourGo adalah Website Dimana Anda Bisa Memilih Tour Guide dan Tempat Wisata yang Anda Inginkan</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(26).webp" class="d-block w-100" alt="image2">
      <div class="carousel-caption d-none d-md-block">
        <h5 class='fs-3'>Bingung ingin pergi wisata kemana?</h5>
        <p class='fs-5'>Disini kami menyediakan rekomendasi tempat wisata yang cocok untuk anda</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(23).webp" class="d-block w-100" alt="image3">
      <div class="carousel-caption d-none d-md-block">
        <h5 class='fs-3'>Temukan semua hal yang anda inginkan disini!</h5>
      </div>
    </div>
  </div>
</div>
<div class="container px-4 py-5" id="about">
    <h2 class="pb-2 border-bottom">About TourGo</h2>

    <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5">
      <div class="d-flex flex-column align-items-start gap-2">
        <h3 class="fw-bold">Pengalaman yang Akan Anda Dapatkan di Dalam Website Ini</h3>
        <p class="text-muted">Disini anda bisa melihat rekomendasi tempat wisata, yang di dalamnya terdapat foto tempat wisata, desktipsi tempat, dan informasi yang lainnya.
          Tidak hanya itu pada fitur Guide anda bisa memilih tour guide yang sesuai dengan keinginan anda.
        </p>
      </div>
      <div class="row row-cols-1 row-cols-sm-2 g-4">
        <div class="d-flex flex-column gap-2">
        <div
            class="feature-icon-small d-inline-flex align-items-center justify-content-center  fs-4 rounded-3">
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#collection" />
            </svg>
          </div>
          <h4 class="fw-semibold mb-0">Cari Tempat Wisata</h4>
          <p class="text-muted">Pengalaman yang akan anda dapatkan dalam website ini yaitu anda bisa mencari tempat wisata yang ingin anda kunjungi dan rekomendasi wisata lainnya.</p>
        </div>

        <div class="d-flex flex-column gap-2">
          <div
            class="feature-icon-small d-inline-flex align-items-center justify-content-center  bg-gradient fs-4 rounded-3">
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#gear-fill" />
            </svg>
          </div>
          <h4 class="fw-semibold mb-0">Pilih Tour Guide</h4>
          <p class="text-muted">Inilah yang membedakan dari website kami yaitu anda bisa bebas memilih tour guide yang anda inginkan</p>
        </div>

        <div class="d-flex flex-column gap-2">
          <div
            class="feature-icon-small d-inline-flex align-items-center justify-content-center  bg-gradient fs-4 rounded-3">
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#speedometer" />
            </svg>
          </div>
          <h4 class="fw-semibold mb-0">Pilih Paket</h4>
          <p class="text-muted">Anda dapat memilih paket yang anda inginkan</p>
        </div>

        <div class="d-flex flex-column gap-2">
          <div
            class="feature-icon-small d-inline-flex align-items-center justify-content-center bg-gradient fs-4 rounded-3">
            <svg class="bi" width="1em" height="1em">
              <use xlink:href="#table" />
            </svg>
          </div>
          <h4 class="fw-semibold mb-0">Promo</h4>
          <p class="text-muted">Terdapat promo-promo menarik yang tersedia untuk anda</p>
        </div>
      </div>
    </div>

    <div class="container px-4 py-5" id="menu">
    <h2 class="pb-2 border-bottom">Menu</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#search"/></svg>
        </div>
        <div>
          <h3 class="fs-2">Cari Wisata</h3>
          <p>Disini anda bisa mencari tempat wisata yang ingin anda kunjungi, beserta paket yang ada di dalamnya.</p>
          <a href="{{URL::to('/cariwisata')}}" class="btn btn-primary">
            Lanjut
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
      <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#order"/></svg>
        </div>
        <div>
          <h3 class="fs-2">Pesan Wisata</h3>
          <p>Disini anda bisa memesan paket wisata yang sudah anda pilih</p>
          <a href="{{url('/pesan')}}" class="btn btn-primary">
            Lanjut          
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square text-bg-light d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#guide"/></svg>
        </div>
        <div>
          <h3 class="fs-2">Tour Guide</h3>
          <p>Disini anda bisa memilih tour guide yang anda inginkan.</p>
          <a href="{{url('/guide')}}" class="btn btn-primary">
            Lanjut
          </a>
        </div>
      </div>
    </div>
  </div>


  <div class="container px-4 py-5" id="contact">
    <h2 class="pb-2 border-bottom">Contact Us</h2>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#instagram"/></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4">Instagram</h3>
          <p>@Tour_Go</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#facebook"/></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4">Facebook</h3>
          <p>@TourGo</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#email"/></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4">E-mail</h3>
          <p>tourgo123@gmail.com</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <svg class="bi text-muted flex-shrink-0 me-3" width="1.75em" height="1.75em"><use xlink:href="#twitter"/></svg>
        <div>
          <h3 class="fw-bold mb-0 fs-4">Twitter</h3>
          <p>@Go_Tour</p>
        </div>
      </div>
      </div>


  <div class="container my-5 py-5 text-dark">
      <div class="col d-flex align-items-start">
                <div class="container px-4 py-5" id="comment">
                  <h2 class="pb-2 border-bottom">Add Comment</h2>         
      <div class="col-md-10 col-lg-8 col-xl-6">
              <div class="w-100">
                <div class="form-outline">
                  <textarea class="form-control" id="textAreaExample" rows="4"></textarea>
                  <label class="form-label" for="textAreaExample">What is your view?</label>
                </div>
                <div class="d-flex justify-content-between mt-3">
                <a href="#" class="btn btn-primary">
            KIRIM
          </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<div class="container">
  <footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="{{url('/')}}" class="nav-link px-2 text-muted">Home</a></li>
      <li class="nav-item"><a href="#about" class="nav-link px-2 text-muted">About TourGo</a></li>
      <li class="nav-item"><a href="#menu" class="nav-link px-2 text-muted">Menu</a></li>
      <li class="nav-item"><a href="#contact" class="nav-link px-2 text-muted">Contact Us</a></li>
      <li class="nav-item"><a href="#comment" class="nav-link px-2 text-muted">Comment</a></li>
    </ul>
    <p class="text-center text-muted">&copy; 2022 Company, Inc</p>
  </footer>
</div>
</div>
</body>
</html>