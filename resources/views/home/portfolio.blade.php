<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon/favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
    <!-- aos -->
    <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/style.css" />

    <title>Company</title>

   <!-- navbar -->
   <nav class="navbar navbar-expand-lg navbar-light bg-white shadow shadow-sm fixed-top fy-3">
    <div class="container">
      <img src="assets/img/Logo.png" alt="" width="150px">
      {{-- <a class="navbar-brand fw-bold" href="#"><span class="primary">COM</span>PANY</a> --}}
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
        <li class="nav-item">
            <a class="nav-link fw-bolder" href="/">Home</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link fw-bolder dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Lingkup Layanan
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li>
                <a class="dropdown-item" href="layanan">Jasa Nasehat dan Konsultasi Rekayasa
                Teknik</a>
            </li>
            <li>
                <a class="dropdown-item" href="layanan">Jasa Desain Rekayasa untuk Pekerjaan
                Teknik Sipil Transportasi</a>
              </li>
              <li>
                <a class="dropdown-item" href="layanan">Jasa Nasehat dan Konsultasi Jasa Rekayasa
                  Konstruksi</a>
              </li>
              <li>
                <a class="dropdown-item" href="layanan">Jasa Desain Rekayasa Lainnya</a>
              </li>
              <li>
                <a class="dropdown-item" href="layanan">Jasa Perencanaan dan Perancangan
                  Perkotaan</a>
              </li>
              <li>
                <a class="dropdown-item" href="layanan">Jasa Konsultasi Lingkungan</a>
              </li>
              <li>
                <a class="dropdown-item" href="layanan">Jasa Nasehat dan Konsultasi Jasa Rekayasa
                  Konstruksi</a>
              </li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link fw-bolder active" href="portofolio">Portofolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bolder" href="about">About</a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link fw-bolder" href="contact">Contact</a>
        </li> --}}
        </ul>
    </div>
    </div>
</nav>
<!-- end navbar -->


    <!-- teams -->
    <div class="teams bg-light mt-5 py-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">Portfolio</h2>
            </div>
            <div class="row mt-4">
                <div class="col-md-12 d-flex justify-content-center">
                    <ul class="list-unstyled d-flex portfolio-filters">
                        <li data-filter="*" class="py-2 px-4 filter-active text-white">ALL</li>
                        <li data-filter=".filter-web" class="py-2 px-4">Konsultasi</li>
                        <li data-filter=".filter-design" class="py-2 px-4">Desain Rekayasa</li>
                        <li data-filter=".filter-photo" class="py-2 px-4">Perancangan</li>
                    </ul>
                </div>
            </div>

            
            <div class="row mt-5">
              @foreach ($portfolio as $portfolio)
              <div class="col-md-4">
                <div class="card border-0 text-center p-4 mt-3" style="width: 350px; height: 350px" data-aos="zoom-in">
                  <div class="card-body">
                    <div class="card-icon">
                      <img src="image/{{$portfolio->image}}" alt="" class="mx-auto d-block" width="200px" style="max-height: 148px; max-width: 300px" />
                    </div>  

                    <div class="card-title fw-bolder mt-4 text-sm-start">
                        {{$portfolio->title}}
                    </div>

                    <div class="card-description mt-3">                 
                      <p class="text-sm-start">
                          {{$portfolio->description}}
                      </p>
                    </div>

                  </div>
                  
                </div>
              </div>
              @endforeach
            </div>

    </div>
    <!-- end teams -->

  <!-- footer -->
  <footer class="mt-5">
    <div class="footer-top bg-dark text-white p-5 ">
      <div class="container-fluid">
        <div class="row py-3 px-5 text-center text-lg-start">
          <a href="/" class="fs-3 fw-light text-white mb-3 mb-lg-5 text-decoration-none">
            <img src="assets/img/Logo putih.png" alt="" width="150px">
          </a>

            {{-- Explore Section --}}
            <div class="col-2 my-5 my-lg-0 text-white">
              <h4 class="fs-4 fw-boldtext-white" style="padding-bottom: 24px">Explore</h2>
                <ul class="list-group list-unstyled">
                  <li class="list-item" style="padding-bottom: 24px">
                    <a href="/" class="text-decoration-none text-white">
                      Home
                    </a>
                  </li>
                  <li class="list-item" style="padding-bottom: 24px">
                    <a href="/layanan" class="text-decoration-none text-white">
                      Lingkup Layanan
                    </a>
                  </li>
                  <li class="list-item" style="padding-bottom: 24px">
                    <a href="/portofolio" class="text-decoration-none text-white">
                      Portofolio
                    </a>
                  </li>
                  <li class="list-item" style="padding-bottom: 24px">
                    <a href="/about" class="text-decoration-none text-white">
                      About
                    </a>
                  </li>
                </ul>
            </div>
            {{-- <h4 class="fw-bold">{{$contact->name}}</h2> --}}

              
          {{-- Lingkup Layanan Section --}}
          <div class="col-4 my-5 my-lg-0 text-white">
            <h4 class="fs-4 fw-boldtext-white">Lingkup Layanan</h2>
              <ul class="list-group list-unstyled">
                @foreach($services as $service)
                <li class="list-item">
                  <a href="" class="text-decoration-none text-white">
                    <i class="fa fa-chevron-right primary"></i>
                    {{$service->title}}
                  </a>
                </li>
                @endforeach
              </ul>
          </div>

          {{-- Contacts Section --}}
          <div class="col-12 col-lg my-5 my-lg-0 text-white">
            <h1 class="fs-4 fw-boldtext-white">Contact</h1>
            <div class="mt-4 pe-lg-5 d-flex flex-column">
                <div
                  class="
                    d-flex
                    flex-row
                    gap-3
                    justify-content-center justify-content-lg-start
                    align-items-start
                    "
                >
                  <img src="assets/img//Call.svg" alt="phone"/>
                    <p class="fs-6">{{$contact->telepon}}</p>
                </div>
                
                <div
                  class="
                    d-flex
                    flex-row
                    gap-3
                    justify-content-center justify-content-lg-start
                    align-items-start
                  "
                >
                  <img src="assets/img//Message.svg" alt="email"/>
                    <p class="fs-6">{{$contact->email}}</p>
                </div>
                
                <div
                  class="
                    d-flex
                    flex-row
                    gap-3
                    justify-content-center justify-content-lg-start
                    align-items-start
                  "
                >
                  <img src="assets/img//Location.svg" alt="location"/>
                    <p class="fs-6">
                      {{$contact->alamat}}
                          </p>
                      </div>
                  </div>
          </div>

          <div class="col-12 col-lg my-5 my-lg-0 text-white">

            <ul class="list-group list-unstyled">
              <li class="list-item" style="padding-bottom: 24px">
                {{-- Embed Maps --}}
                <div class="mapouter"><div class="gmap_canvas">
                  <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=267&amp;height=134&amp;hl=en&amp;q=cv mandala projects&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://formatjson.org/">format json</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:134px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:134px;}.gmap_iframe {height:134px!important;}</style>
                </div> 
              </li>
              
              <li class="list-item" style="padding-bottom: 100px">
                <h1 class="fs-6 text-center text-soft-grey">Wates, Yogyakarta</h1>
              </li>

              <li class="list-item" style="padding-bottom: 24px" >
                {{-- Login Button --}}
                <div class="col">
                  <div id="action" class="d-flex justify-content-center text-center flex-row">
                    <span class="align-middle" style="padding-right: 8px; font-size: 16px;">
                      You are an admin?
                    </span>

                    <button>
                      <a href="/login" class="primary-button" target="_blank">Login</a>
                    </button>
                  </div>
                </div>
              </li>
            </ul>
          </div>          
        </div>
      </div>
    </div>

    <div class="footer-down bg-darker text-white px-5 py-3">
        <div class="copyright">
          <h1 class="fs-6 fw-bold text-center text-soft-grey">
            Copyright © Mandala Projects
          </h1>
        </div>
    </div>
  </footer>
  <!-- end footer  -->

  <!-- Whatsapp -->
  <a href="https://api.whatsapp.com/send?phone=6282227059970" target="_blank" class="btn-to-top p-3" style="border-radius: 50%;">
    <img src="assets/img/wa.png" alt="Call Me" width="32px">
  </a>
  <!-- Whatsapp -->

    <script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/fontawesome/js/all.min.js"></script>
    <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/vendor/aos/dist/aos.js"></script>
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/js/app.js"></script>
    </body>

</html>