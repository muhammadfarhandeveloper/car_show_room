<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="{{url('./images/mainlogo.jpeg')}}" rel="icon">
  <link href="{{url('./images/mainlogo.jpeg')}}" rel="apple-touch-icon">

  <link href="{{url('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{url('/assets/css/style1.css')}}" rel="stylesheet">
  <link href="{{url('/assets/css/media.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{url('/assets/css/contact.css')}}" rel="stylesheet">
</head>

<body>
  <!-- NAVBAR START -->
  <section class="ftco-section">
    <div class="container-fluid px-5 py-1 d-none-800">
      <div class="row justify-content-between align-items-center">
        <div class="col-md-8 order-md-last">
          <div class="row align-items-center">
            <div class="col-md-6 text-center">
              <a class="navbar-brand" href="{{url('/')}}">Car Showroom <span></span></a>
            </div>
            <div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
              <form action="#" class="searchform order-lg-last">
                <div class="form-group d-flex">
                  <input type="text" class="form-control pl-3 border" placeholder="Search">
                  <button type="submit" placeholder="" class="form-control search"><svg
                      xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-search"
                      viewBox="0 0 16 16">
                      <path
                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg></button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4 d-flex">
          <div class="social-media">
            <p class="mb-0 d-flex">
              <a href="#" class="d-flex align-items-center justify-content-center"><svg
                  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" class="bi bi-facebook"
                  viewBox="0 0 16 16">
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg></span></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><svg
                  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" class="bi bi-twitter"
                  viewBox="0 0 16 16">
                  <path
                    d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg></span></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><svg
                  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" class="bi bi-instagram"
                  viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg></a>
              <a href="#" class="d-flex align-items-center justify-content-center"><svg
                  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="" class="bi bi-dribbble"
                  viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M8 0C3.584 0 0 3.584 0 8s3.584 8 8 8c4.408 0 8-3.584 8-8s-3.592-8-8-8zm5.284 3.688a6.802 6.802 0 0 1 1.545 4.251c-.226-.043-2.482-.503-4.755-.217-.052-.112-.096-.234-.148-.355-.139-.33-.295-.668-.451-.99 2.516-1.023 3.662-2.498 3.81-2.69zM8 1.18c1.735 0 3.323.65 4.53 1.718-.122.174-1.155 1.553-3.584 2.464-1.12-2.056-2.36-3.74-2.551-4A6.95 6.95 0 0 1 8 1.18zm-2.907.642A43.123 43.123 0 0 1 7.627 5.77c-3.193.85-6.013.833-6.317.833a6.865 6.865 0 0 1 3.783-4.78zM1.163 8.01V7.8c.295.01 3.61.053 7.02-.971.199.381.381.772.555 1.162l-.27.078c-3.522 1.137-5.396 4.243-5.553 4.504a6.817 6.817 0 0 1-1.752-4.564zM8 14.837a6.785 6.785 0 0 1-4.19-1.44c.12-.252 1.509-2.924 5.361-4.269.018-.009.026-.009.044-.017a28.246 28.246 0 0 1 1.457 5.18A6.722 6.722 0 0 1 8 14.837zm3.81-1.171c-.07-.417-.435-2.412-1.328-4.868 2.143-.338 4.017.217 4.251.295a6.774 6.774 0 0 1-2.924 4.573z" />
                </svg></a>
            </p>
          </div>
        </div>
      </div>
    </div>




    <!-- END nav -->

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header bg-dark">
       <a href="./{{url('/')}}"><img src="./images/mainlogo.jpeg" width="70px" height="70px" class="img-fluid rounded rounded-circle"></a> 
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body bg-dark p-0">
        <div>

          <div class="container-fluid p-0">

            <nav class="navbar p-0">
              <div class="container-fluid p-0 bg-dark">
                <div class="" id="ftco-nav">
                  <ul class="list-unstyled">
                    <li class="nav-item dropdown d-flex align-items-center">
                      <a class="nav-link dropdown-toggle fs-3 my-1  text-white" id="dropdown04" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item fs-6 my-1  my-text" href="{{url('/')}}">Main Home</a></li>
                        <li><a class="dropdown-item fs-6 my-1  my-text" href="{{url('/car-home')}}">Cars</a></li>
                        <li><a class="dropdown-item fs-6 my-1  my-text" href="{{url('/bike-home')}}">Bikes</a></li>
                      </ul>
                    </li>
                    <li class="nav-item"><a href="#" class="nav-link fs-3 my-1  text-white">About</a></li>
                    <li class="nav-item dropdown d-flex align-items-center">
                      <a class="nav-link dropdown-toggle fs-3 my-1 text-white" href="" id="dropdown04" type="button"
                        data-bs-toggle="dropdown" aria-expanded="false">Brands</a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item fs-6 my-1  my-text" href="#">Honda</a></li>
                        <li><a class="dropdown-item fs-6 my-1  my-text" href="#">Toyota</a></li>
                        <li><a class="dropdown-item fs-6 my-1  my-text" href="#">Suzuki</a></li>
                      </ul>
                    </li>
                    <li class="nav-item fs-3 my-1"><a href="{{url('/contact-us')}}" class="nav-link text-white">Contact</a></li>
                    {{-- <li class="nav-item fs-3 my-1"><a href="./login" class="nav-link text-white"><button
                          class="btn btn-sm my-bg text-white">Login/Register</button>
                      </a></li> --}}
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>

      </div>
    </div>
  </section>
  <nav class="navbar navbar-expand-lg fixed-top position-sticky navbar-dark ftco_navbar bg-dark ftco-navbar-light"
    id="ftco-navbar">
    <div class="container-fluid">
      <div class="row justify-content-between">
        <div>
        <a href="./{{url('/')}}"><img src="./images/mainlogo.jpeg" width="80px" height="80px" class="img-fluid p-2 rounded rounded-circle"></a> 
        </div>
      </div>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav m-auto align-items-center">
          <li class="nav-item dropdown d-flex align-items-center">
            <a class="nav-link dropdown-toggle"  id="dropdown04" type="button" data-bs-toggle="dropdown"
              aria-expanded="false">Home</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{url('/')}}">Main Home</a></li>
              <li><a class="dropdown-item" href="{{url('/car-home')}}">Cars</a></li>
              <li><a class="dropdown-item" href="{{url('/bike-home')}}">Bikes</a></li>
            </ul>
          </li>
          <li class="nav-item"><a href="{{url('/about-us')}}" class="nav-link">About</a></li>
          <li class="nav-item"><a href="{{url('/inventory-list')}}" class="nav-link">Inventory List</a></li>
          <li class="nav-item dropdown d-flex align-items-center">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" type="button" data-bs-toggle="dropdown"
              aria-expanded="false">Brands</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{url('/brand?brandname=honda')}}">Honda</a></li>
              <li><a class="dropdown-item" href="{{url('/brand?brandname=toyota')}}">Toyota</a></li>
              <li><a class="dropdown-item" href="{{url('/brand?brandname=suzuki')}}">Suzuki</a></li>
              <li><a class="dropdown-item" href="{{url('/brand?brandname=mercedes')}}">Mercedes</a></li>
              <li><a class="dropdown-item" href="{{url('/brand?brandname=bmw')}}">BMW</a></li>
            </ul>
          </li>
          
          <li class="nav-item"><a href="{{url('/contact-us')}}" class="nav-link">Contact</a></li>
        </ul>
      </div>
      <div>
        <a class="btn text-white d-block-950" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
          aria-controls="offcanvasExample">
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" class="bi bi-list"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
              d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
          </svg>
        </a>
       {{-- <a href="login"><button class="btn btn-sm d-none-950 my-bg text-white">Login/Register</button></a>  --}}

      </div>
    </div>
  </nav>

  
  @yield('content')

  <!-- CLIENT END -->
  <!-- FOOTER BEGINS -->
  <div class="bg-dark">
    <div class="container bg-dark p-5 text-white">
      <div class="row d-flex justify-content-between align-items-center">
        <div class="w-auto d-inline-block"><img src="./images/mainlogo.jpeg" width="70px" height="70px" class="img-fluid rounded rounded-circle" alt=""></div>
        <div class="w-auto d-inline-block">
          <div class="d-flex">
            <div class="social-media">
              <p class="mb-0 d-flex">
                <a href="#" class="d-flex align-items-center justify-content-center"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-facebook"
                    viewBox="0 0 16 16">
                    <path
                      d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                  </svg></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-twitter"
                    viewBox="0 0 16 16">
                    <path
                      d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                  </svg></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-instagram"
                    viewBox="0 0 16 16">
                    <path
                      d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                  </svg></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><svg
                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-dribbble"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                      d="M8 0C3.584 0 0 3.584 0 8s3.584 8 8 8c4.408 0 8-3.584 8-8s-3.592-8-8-8zm5.284 3.688a6.802 6.802 0 0 1 1.545 4.251c-.226-.043-2.482-.503-4.755-.217-.052-.112-.096-.234-.148-.355-.139-.33-.295-.668-.451-.99 2.516-1.023 3.662-2.498 3.81-2.69zM8 1.18c1.735 0 3.323.65 4.53 1.718-.122.174-1.155 1.553-3.584 2.464-1.12-2.056-2.36-3.74-2.551-4A6.95 6.95 0 0 1 8 1.18zm-2.907.642A43.123 43.123 0 0 1 7.627 5.77c-3.193.85-6.013.833-6.317.833a6.865 6.865 0 0 1 3.783-4.78zM1.163 8.01V7.8c.295.01 3.61.053 7.02-.971.199.381.381.772.555 1.162l-.27.078c-3.522 1.137-5.396 4.243-5.553 4.504a6.817 6.817 0 0 1-1.752-4.564zM8 14.837a6.785 6.785 0 0 1-4.19-1.44c.12-.252 1.509-2.924 5.361-4.269.018-.009.026-.009.044-.017a28.246 28.246 0 0 1 1.457 5.18A6.722 6.722 0 0 1 8 14.837zm3.81-1.171c-.07-.417-.435-2.412-1.328-4.868 2.143-.338 4.017.217 4.251.295a6.774 6.774 0 0 1-2.924 4.573z" />
                  </svg></a>
              </p>
            </div>
          </div>
        </div> 
      </div>
      <hr class="text-white">
      <div class="row bg-dark justify-content-center d-flex">
        <div class="col-md-6 my-3">
          <h5 class="my-text">NEWS LETTERS </h5>
          <P>It's a long established fact that a reader will <br> be distracted by readable content</P>
          <form>
            <div class="">
              <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email">
              <div id="emailHelp" class="form-text my-text">We'll never share your email with anyone else.</div>
            </div>
            <a class="btn btn-lg my-bg bdr-nul my-2 px-5 btn-secondary" href="#" role="button">Subscribe <i
                class="fa-solid fa-arrow-right-long"></i></a>
          </form>
        </div>
        <div class="col-md-3 my-3">
          <h5 class="my-text">QUICK LINK</h5>
            <ul class="text-white list-unstyled">
            <a class="text-white text-decoration-none" href="./{{url('/')}}"><li> Home</li></a>
            <a class="text-white text-decoration-none" href="./{{url('/about-us')}}"><li> About</li></a>
           <a class="text-white text-decoration-none" href="./brand.html"> <li> Product</li></a>
           <a class="text-white text-decoration-none" href="./{{url('/contact-us')}}"><li> Contact us</li></a> 
            </ul> 
        </div>
        <div class="col-md-3 my-3">
          <h5 class="my-text">SHOP SERVICES</h5>
            <ul class="text-white list-unstyled">
           <a class="text-white text-decoration-none" href="./cars-home.html"><li> cars</li></a> 
           <a class="text-white text-decoration-none" href="./bikes-home.html"><li> Bike</li></a> 
           <li> Worker</li>
           <li> Featured Cars</li>
           <li> Best Selling</li>
            </ul>
        </div>
      </div>
      <hr>
      <div class="row align-items-center">
        <p>Copyright All Right Reserved <span class="my-text">Car Showroom</span></p>
      </div>
    </div>
  </div>
  
  <!-- FOOTER END -->
  <script src="{{url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  
</body>

</html>