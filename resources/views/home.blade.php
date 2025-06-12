<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RC JOHN</title>
  <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon" />

  <!-- Bootstrap & AOS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Open+Sans&display=swap" rel="stylesheet" />

  <style>
    body {
      margin: 0;
      padding: 0;
      /* font-family: 'Open Sans', sans-serif; */
    }

    .navbar {
      background-color: rgba(0, 0, 0, 0.7);
      z-index: 1030;
    }

    .nav-link {
      font-size: 18px;
      color: white !important;
    }

    .navbar-brand img {
      height: 80px;
      width: auto;
    }

    .carousel-inner img {
      object-fit: cover;
      height: 100vh;
      width: 100%;
    }
    .carousel-indicators [data-bs-target] {
        background-color: rgba(255, 255, 255, 0.5); /* default color */
    }

    .carousel-indicators .active {
        background-color: red !important; /* red when active */
    }


    .dimmer {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.8);
      z-index: 1;
    }

    .content001 {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      z-index: 2;
      display: flex;
      align-items: center;
      padding: 0 30px;
    }

    .intro-container {
      padding-top: 120px; /* Prevent overlap with navbar */
      color: white;
      max-width: 800px;
    }

    .intro {
      font-weight: 300;
      font-size: 16px;
      text-align: left;
      color: rgb(212, 243, 252);
    }

    @media (max-width: 768px) {
      .content001 {
        align-items: flex-start;
        padding-top: 120px;
      }

      .intro {
        font-size: 16px;
      }

      .navbar-brand img {
        height: 60px;
      }

      .nav-link {
        font-size: 16px;
      }
    }

    @media (max-width: 480px) {
      .intro {
        font-size: 12px;
      }
      .intro_header{
        font-size: 16px;
      }
    }

    .carousel-control-prev,
    .carousel-control-next {
    top: 50%;
    transform: translateY(-50%);
    z-index: 2;
    }

    /* Remove Bootstrap default outline */
    /* Remove outline and shadow */
    .custom-toggler:focus {
    outline: none;
    box-shadow: none;
    border: none;
    }

    /* Common line style */
    .toggler-line {
    display: block;
    width: 30px;
    height: 3px;
    background-color: white;
    margin: 6px auto;
    transition: all 0.3s ease-in-out;
    border-radius: 2px;
    }

    /* Transformations when active */
    .custom-toggler.active .top-bar {
    transform: rotate(45deg) translate(5px, 5px);
    background-color: red;
    }

    .custom-toggler.active .middle-bar {
    opacity: 0;
    }

    .custom-toggler.active .bottom-bar {
    transform: rotate(-45deg) translate(5px, -5px);
    background-color: red;
    }



  </style>
</head>
<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="{{ asset('images/logo2.png') }}" alt="logo" />
      </a>
      <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02"
        aria-expanded="false" aria-label="Toggle navigation">
    <span class="toggler-line top-bar"></span>
    <span class="toggler-line middle-bar"></span>
    <span class="toggler-line bottom-bar"></span>
    </button>


      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Products</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Intro Section -->
    <div class="container-fluid p-0" style="position: relative; height: 100vh;">
        <div class="carousel slide" id="carouselExampleAutoplaying" data-bs-ride="carousel" style="height: 100vh;">
            
            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
             <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <!-- Carousel Inner -->
            <div class="carousel-inner">

            <!-- 1st Slide -->
            <div class="carousel-item active">
                <img src="{{ asset('images/image.jpg') }}" class="d-block w-100" alt="..." />
                <div class="dimmer"></div>
                <div class="content001">
                  
                <div class="intro-container ps-lg-5" data-aos="fade-up">
                  <h4 class="mb-4 intro_header text-warning text-uppercase">Constructions & Telecommunications</h4>  
                    <p class="intro">
                    <strong class="text-warning fw-bold">RC John</strong> is a dynamic and trusted company specializing in construction services, telecommunications solutions, and the supply of high-quality construction materials. With a commitment to excellence, innovation, and integrity, we bring together the strength of infrastructure development and the connectivity of modern telecom systems to deliver comprehensive solutions for today's growing industries.
                    <br /><br />
                    From residential and commercial building projects to telecom tower installations and network setups, <strong class="text-warning fw-bold">RC John</strong> ensures precision, safety, and sustainability at every step. Our construction material division guarantees reliable access to premium-grade products, supporting contractors, developers, and individuals with the tools they need to build with confidence.
                    <br /><br />
                    Driven by a passion for progress and a reputation built on trust, <strong class="text-warning fw-bold">RC John</strong> is your all-in-one partner for building the future — brick by brick, signal by signal.
                    </p>
                </div>
                </div>
            </div>

            <!-- 2nd Slide -->
            <div class="carousel-item">
                <img src="{{ asset('images/image10.jpg') }}" class="d-block w-100" alt="..." />
                <div class="dimmer"></div>
                <div class="content001">
                <div class="intro-container ps-lg-5" data-aos="fade-up">
                  <h4 class="mb-4 intro_header text-warning text-uppercase">Reliable Partner</h4>  
                    <p class="intro">
                    <strong class="text-warning fw-bold">RC John</strong> is a trusted and leading service provider in the field of telecommunications infrastructure, serving Iloilo, Capiz, Antique, Aklan, Guimaras, Negros, and Cebu. We specialize in the deployment of telecom networks through expert services in cable laying, pole erection, NAP box activation, server installation, and tower erection.
                    <br /><br />
                    With a strong commitment to reliability, safety, and technical excellence, <strong class="text-warning fw-bold">RC John</strong> partners with telecom companies and developers to bring fast, secure, and scalable connectivity solutions across urban and rural communities. Our experienced team ensures every project meets the highest industry standards, whether for fiber optic backbone expansion or last-mile connectivity.
                    <br /><br />
                    Backed by years of experience and a dedication to innovation, <strong class="text-warning fw-bold">RC John</strong> is your dependable partner in building the digital backbone of tomorrow—connecting islands, bridging gaps, and enabling progress across the Visayas.
                    </p>
                </div>
                </div>
            </div>

            <!-- 3rd Slide -->
            <div class="carousel-item">
                <img src="{{ asset('images/image11.jpg') }}" class="d-block w-100" alt="..." />
                <div class="dimmer"></div>
                <div class="content001">
                <div class="intro-container ps-lg-5" data-aos="fade-up">
                  <h4 class="mb-4 intro_header text-warning text-uppercase">Quality Products & Services</h4>  
                  <p class="intro">
                      <strong class="text-warning fw-bold">RC John</strong> is a trusted and leading supplier of high-quality yet affordable construction materials across Iloilo, Capiz, Antique, Aklan, Guimaras, Negros, and Cebu. We specialize in a wide range of construction supplies including premium cement, durable hollow blocks, washed sand, gravel, steel bars, and other essential building materials.
                      <br /><br />
                      With a strong commitment to affordability, reliability, and product quality, <strong class="text-warning fw-bold">RC John</strong> partners with builders, contractors, and homeowners to deliver the materials needed to bring any construction project to life—whether it’s residential, commercial, or industrial.
                      <br /><br />
                      Backed by years of experience and a dedication to service excellence, <strong class="text-warning fw-bold">RC John</strong> is your dependable partner in building strong foundations—offering fast delivery, bulk pricing, and dependable support to help you build better, faster, and more affordably across the Visayas.
                  </p>
              </div>
                </div>
            </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev" style="width: 5%;">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next" style="width: 5%;">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>

        </div>
    </div>


  <!-- AOS Init -->
  <script>
    AOS.init();
   document.addEventListener('DOMContentLoaded', function () {
    const toggler = document.querySelector('.custom-toggler');
    toggler.addEventListener('click', function () {
      toggler.classList.toggle('active');
    });
  });
  </script>
</body>
</html>
