<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RC JOHN</title>
    <link rel="shortcut icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        body{
            height: 100vh; 
        }
        .navbar{
            /* background-color: rgba(193, 214, 227, 0.2); */
        }
        .nav-link{
            font-size: 24px;
            color: white;
        }
        .dimmer{
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 0;
            left: 0;
        }

        .content001{
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            color: white;
            padding: 50px;
            display: flex;
            align-items: center;
        }
        .intro{
            font-weight: 300;
            }
      
    </style>
</head>
<body>
   <nav class="navbar navbar-expand-lg fixed-top " style="height: 100px; z-index: 1030;">
        <div class="container-fluid ">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('images/logo2.png') }}" alt="logo" height="90px" >
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item text-danger">
                <a class="nav-link " href="/">Home</a>
                </li>
                <li class="nav-item text-light">
                <a class="nav-link " href="#">Services</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Products</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
    </nav>

    <!-- RC John Introduction Section -->
    <div class="container-fluid p-0 bg-info" style="position: relative; height: 100vh;">
        <div class="bg-secondary carousel slide" style="height: 100vh " id="carouselExampleAutoplaying" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="{{ asset('images/image1.jpg') }}" alt="..." style="height: 100vh; width:100vw">
                    <div class="dimmer"></div>
                    <div class="content001">
                        <div class="row">
                            <div class="col-6">
                               <p class="intro">
                                    <strong>RC John</strong> is a dynamic and trusted company specializing in construction services, telecommunications solutions, and the supply of high-quality construction materials. With a commitment to excellence, innovation, and integrity, we bring together the strength of infrastructure development and the connectivity of modern telecom systems to deliver comprehensive solutions for today's growing industries.
                                    From residential and commercial building projects to telecom tower installations and network setups, RC John ensures precision, safety, and sustainability at every step. Our construction material division guarantees reliable access to premium-grade products, supporting contractors, developers, and individuals with the tools they need to build with confidence.
                                    Driven by a passion for progress and a reputation built on trust, RC John is your all-in-one partner for building the future — brick by brick, signal by signal.
                                </p>
                            </div>
                        </div>


                        
                    </div>
                </div>
            </div>
        </div>
        
        {{-- <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('images/image1.jpg') }}" class=" w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="{{ asset('images/logo.png') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> --}}
    </div>
    

</body>
</html>
