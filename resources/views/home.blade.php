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
      font-family: 'Open Sans', sans-serif;
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

    .dimmer {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.7);
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
      font-size: 18px;
      text-align: left;
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
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
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
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('images/image1.jpg') }}" class="d-block w-100" alt="..." />
          <div class="dimmer"></div>
          <div class="content001">
            <div class="intro-container" data-aos="fade-up">
              <p class="intro">
                <strong>RC John</strong> is a dynamic and trusted company specializing in construction services, telecommunications solutions, and the supply of high-quality construction materials. With a commitment to excellence, innovation, and integrity, we bring together the strength of infrastructure development and the connectivity of modern telecom systems to deliver comprehensive solutions for today's growing industries.
                <br /><br />
                From residential and commercial building projects to telecom tower installations and network setups, RC John ensures precision, safety, and sustainability at every step. Our construction material division guarantees reliable access to premium-grade products, supporting contractors, developers, and individuals with the tools they need to build with confidence.
                <br /><br />
                Driven by a passion for progress and a reputation built on trust, RC John is your all-in-one partner for building the future — brick by brick, signal by signal.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- AOS Init -->
  <script>
    AOS.init();
  </script>
</body>
</html>
