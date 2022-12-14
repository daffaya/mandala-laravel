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
            <a class="nav-link fw-bolder active" href="/">Home</a>
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
            <a class="nav-link fw-bolder" href="portofolio">Portofolio</a>
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

    <!-- breadcumbs  -->
    <div class="breadcumbs py-2">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center text-white">
                <h2>Contact</h2>
                <ol class="d-flex list-unstyled">
                    <li>Home</li>
                    <li>Contact</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end breadcumbs -->

    <!-- contact -->
    <div class="contact mb-5">
        <div class="maps">
            <iframe
                src="https://www.google.com/maps/embed?pb={{$contact->maps_embed}}"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 shadow shadow-sm">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">

                                    <div class="col-md-4">
                                        <i class="fa fa-map-marker-alt fa-2x primary float-start me-4"></i>
                                        <h4 class="fw-bolder">Location</h4>
                                        <p class="ms-5">{{$contact->alamat}}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <i class="fa fa-envelope fa-2x primary float-start me-3"></i>
                                        <h4 class="fw-bolder">Email</h4>
                                        <p class="ms-5">{{$contact->email}}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <i class="fa fa-phone-alt fa-2x primary float-start me-3"></i>
                                        <h4 class="fw-bolder">Phone</h4>
                                        <p class="ms-5">{{$contact->telepon}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card border-0 shadow">
                        <div class="card-body px-4">
                            <div class="row mt-4">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <textarea name="" id="" cols="30" rows="10" class="form-control"
                                        placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <button type="submit" class="btn btn-submit">Send Message</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact -->

  <!-- footer -->
  <footer>
    <div class="footer-top text-white p-5 " style="background-color: #101820">
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
            <h4 a href="/layanan" class="fs-4 fw-boldtext-white">Lingkup Layanan</h2>
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
    

    <div class="footer-down text-white px-5 py-3" style="background-color: #101820">
        <div class="copyright">
          <h1 class="fs-6 fw-bold text-center text-soft-grey">
            Copyright ?? Mandala Projects
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