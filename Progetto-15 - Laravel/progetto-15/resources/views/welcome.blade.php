<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Fitness Forge</title>
        <link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.min.css"
  rel="stylesheet"/>
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"/>
<style>
    #introCarousel,
    .carousel-inner,
    .carousel-item,
    .carousel-item.active {
      height: 100vh;
    }

    .carousel-item:nth-child(1) {
      background-image: url('https://cdn11.bigcommerce.com/s-3pp378gtvu/images/stencil/2560w/uploaded_images/cardio-and-weight-training.jpg?t=1683911183');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }

    .carousel-item:nth-child(2) {
      background-image: url('https://img.peerspace.com/image/upload/c_crop,g_custom/g_auto,c_fill,q_auto,f_auto,fl_progressive:steep,w_1200,ar_1.6/o2i7remdyu3pzdcv3qst');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }

    .carousel-item:nth-child(3) {
      background-image: url('https://origympersonaltrainercourses.co.uk/files/img_cache/37788/1920_1675676262_TheProfessionalDevelopmentOpportunitiesofaPersonalTrainervsGroupFitnessInstructor.jpeg?1675676295');
      background-repeat: no-repeat;
      background-size: cover;
      background-position: center center;
    }

    @media (min-width: 992px) {
    #introCarousel {
        margin-top: -58.59px;
    }
    }

    .navbar .nav-link {
    color: #fff !important;
    }

 </style>   
    </head>
    <html>
    <body class="antialiased">
   @component('components.nav-bar')
   @endcomponent

    <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-mdb-carousel-init>
    <div class="carousel-indicators list-unstyled">
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="0" class="active"></li>
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="1"></li>
      <li data-mdb-target="#introCarousel" data-mdb-slide-to="2"></li>
    </div>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center" data-mdb-theme="dark">
              <h1 class="mb-3">Fitness Forge</h1>
              <h5 class="mb-4">Transform Your Body, Empower Your Mind.</h5>
              @if (Route::has('login'))
              @auth
              <a class="btn btn-outline-light btn-lg m-2" data-mdb-ripple-init href="{{url('/courses')}}"
                  role="button">Courses</a>
                 @else
                 <a class="btn btn-outline-light btn-lg m-2" data-mdb-ripple-init href="{{ route('login') }}"
                 role="button">Login</a>
                 @if (Route::has('register'))
                 <a class="btn btn-outline-light btn-lg m-2" data-mdb-ripple-init href="{{ route('register') }}"
                    role="button">Register</a>
                 @endif
                    @endauth
                    @endif
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center" data-mdb-theme="dark">
              <h1 class="mb-3">Elevate your fitness experience with last generation equipment</h1>
              <h5 class="mb-4">Embrace Innovation, Unleash Strength</h5>
            </div>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
          <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white text-center" data-mdb-theme="dark">
              <h1 class="mb-3">Dedicated instructors empower clients with tailored fitness plan</h1>
              <h5 class="mb-4">Empower Others, Shape Futures</h5>
            </div>
          </div>
        </div>
      </div>

      <a class="carousel-control-prev" href="#introCarousel" role="button" data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#introCarousel" role="button" data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

        <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.2.0/mdb.umd.min.js"
        ></script>
    </body>
</html>
