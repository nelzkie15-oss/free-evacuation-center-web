<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Free Evacuation Center</title>

    <link rel="manifest" href="">
    <meta name="msapplication-TileImage" content="">
    <meta name="theme-color" content="#ffffff">
    <link href="{{ asset('asset/assets/css/theme.css') }}" rel="stylesheet" />

  </head>


  <body style="background: #E48F45;">

    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="/"><b>Free Evacuation Center</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2"><a class="nav-link" aria-current="page" href="/">Home</a></li>
              <li class="nav-item px-2"><a class="nav-link" href="#services">Our Services</a></li>
            </ul>
           <a class="btn btn-primary order-1 order-lg-0 ms-lg-3" href="#contactUs">Contact Us</a>

          </div>
        </div>
      </nav>
      <section class="py-xxl-10 pb-0" id="home">
        <div class="bg-holder bg-size" style="background-image:url({{ asset('asset/assets/img/gallery/hero-header-bg.png') }});background-position:top center;background-size:cover;">
        </div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-5 col-xl-6 col-xxl-7 order-0 order-md-1 text-end"><img class="pt-7 pt-md-0 w-100" src="{{ asset('asset/assets/img/evacuations-removebg-preview.png') }}" alt="hero-header" /></div>
            <div class="col-md-75 col-xl-6 col-xxl-5 text-md-start text-center py-5">
              <h1 class="fw-bolder fs-6 fs-xxl-7 mb-2">Prevention is better than cure.</h1>
              <p class="fs-1 mb-5">we are always ready for any calamity. </p><a class="btn btn-primary me-2" href="#contactUs" role="button">Contact Us<i class="fas fa-arrow-right ms-2"></i></a>
            </div>
          </div>
        </div>
      </section>



      <section class="py-2" id="services" container-xl="container-xl">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5 text-center mb-3">
              <h2 class="text-danger">SERVICES</h2>
            </div>
          </div>
          <div class="row h-100 justify-content-center">
            <div class="col-md-4 pt-4 px-md-2 px-lg-3">
              <div class="card px-lg-5 card-span">
                <div class="card-body d-flex flex-column justify-content-around">
                  <div class="text-center"><img class="img-fluid" src="{{ asset('asset/assets/2607407.png') }}" alt="..." width="60" height="60" />
                    <h5 class="my-4">Fire</h5>
                  </div>
                  <p>When there is a fire in our area, we immediately go to put out the fire within 48-72 hours.</p>
                  <div class="text-center">
                    <div class="d-grid">
                      <button class="btn btn-outline-danger" type="submit">View more </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

              <div class="col-md-4 pt-4 px-md-2 px-lg-3">
              <div class="card px-lg-5 card-span">
                <div class="card-body d-flex flex-column justify-content-around">
                   <div class="text-center"><img class="img-fluid" src="{{ asset('asset/assets/4335584.png') }}" alt="..." width="60" height="60" />
                    <h5 class="my-4">Typhoon</h5>
                  </div>
                  <p>Always ready when there are typhoons in our area within 48-72 hours.</p>
                  <div class="text-center">
                    <div class="d-grid mt-4">
                      <button class="btn btn-outline-danger" type="submit">View more </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

             <div class="col-md-4 pt-4 px-md-2 px-lg-3">
              <div class="card px-lg-5 card-span">
                <div class="card-body d-flex flex-column justify-content-around">
                   <div class="text-center"><img class="img-fluid" src="{{ asset('asset/assets/2017200.png') }}" alt="..." width="60" height="60"  />
                    <h5 class="my-4">Earthquake</h5>
                  </div>
                   <p>Always ready when earthquakes happen in our area.</p>
                  <div class="text-center">
                    <div class="d-grid  mt-4">
                      <button class="btn btn-outline-danger" type="submit">View more </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- end of .container-->

      </section>
      <section id="contactUs">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-8 col-lg-5  text-center">
              <h2 class="text-danger">CONTACT US</h2>
            </div>
            <div class="col-12">
              <div class="card card-span rounded-2 mb-3">
                <div class="row">
                  <div class="col-md-6 col-lg-7 d-flex">
                    <!-- <img class="w-100 fit-cover rounded-md-start rounded-top rounded-md-top-0" src="assets/img/gallery/map.svg" alt="map" /> -->
                    <div style="width: 100%"><iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Antipolo%20city+(Free%20Evacuation%20Center)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/population/">Calculate population in area</a></iframe></div>
                  </div>
                  <div class="col-md-6 col-lg-5 d-flex flex-center">
                    <div class="card-body">
                      <h5>Contact with us</h5>
                      <p class="text-700 my-4"> <i class="fas fa-map-marker-alt text-warning me-3"></i><span>BLk 2 Lot 13 Barangay sta cruz antipolo rizal</span></p>
                      <p><i class="fas fa-phone-alt text-warning me-3"></i><span class="text-700">Monday - Friday: 8 am - 5pm<br/><span class="ps-4">Sunday: 08 am - 12pm  </span></span></p>
                      <p><i class="fas fa-envelope text-warning me-3"> </i><a class="text-700" href="mailto:vctung@outlook.com"> admin@gmail.com</a></p>
                      <ul class="list-unstyled list-inline mt-5">
                        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-facebook-square fs-2"></i></a></li>
                        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-instagram-square fs-2"></i></a></li>
                        <li class="list-inline-item"><a class="text-decoration-none" href="#!"><i class="fab fa-twitter-square fs-2"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
          
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      
      <section class="bg-1000">

        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="fw-bold text-white">Get an update Today</h2>
              <p class="text-300">We always release updates every day whether or not something has happened in our area.</p>
            </div>
            <div class="col-lg-6">
              <h5 class="text-primary mb-3">SUBSCRIBE NOW </h5>
              <form class="row gx-2 gy-2 align-items-center">
                <div class="col">
                  <div class="input-group-icon">
                    <label class="visually-hidden" for="inputEmailCta">Address</label>
                    <input class="form-control input-box form-quriar-control text-light" id="inputEmailCta" type="email" placeholder="Enter your mail" />
                  </div>
                </div>
                <div class="d-grid gap-3 col-sm-auto">
                  <button class="btn btn-danger" type="submit">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <section class="py-0 bg-1000">

        <div class="container">
          <div class="row justify-content-md-between justify-content-evenly py-4">
            <div class="col-12 col-sm-8 col-md-6 col-lg-auto text-center text-md-start">
              <p class="fs--1 my-2 fw-bold text-200">All rights Reserved &copy; Your Company, 2023</p>
            </div>
            <div class="col-12 col-sm-8 col-md-6">
              <p class="fs--1 my-2 text-center text-md-end text-200">Create By JunilToledo</p>
              </p>
            </div>
          </div>
        </div>

      </section>


    </main>
    <script src="{{ asset('asset/vendors/@popperjs/popper.min.js') }}"></script>
    <script src="{{ asset('asset/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('asset/vendors/is/is.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('asset/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('asset/assets/js/theme.js') }}"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
  </body>

</html>