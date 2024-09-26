<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
       main {
            background: #FFEFEF;
        }
        .bg-img {
            background: url('img/Box.png');
            background-size: cover;
            overflow: hidden;
            text-align: center;
        }
        .rounded-shape1 {
           
            border-radius: 0 25% 0 25%;
        }
        .rounded-shape2 {
           
           border-radius: 25% 0 25% 0;
       }
        .foot-main {
            box-shadow: 0px -4px 25px 0px #00000040;
        }
        .foot-sub {
            position: absolute;
            top: 0%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0px 4px 25px 0px #00000040;
        }
@media screen and (min-width: 576px) {
  .my-carousel .carousel-inner {
    display: flex;
    width: 90%;
    margin-inline: auto;
    padding: 1em 0;
    overflow: hidden;
  }
  .my-carousel .carousel-item {
    display: block;
    margin-right: 0;
    flex: 0 0 calc(100% / 2);
  }
}

@media screen and (min-width: 768px) {
  .my-carousel .carousel-item {
    display: block;
    margin-right: 0;
    flex: 0 0 calc(100% / 3);
  }
}

.my-carousel .carousel-control-prev,
.my-carousel .carousel-control-next {
  width: 3rem;
  height: 3rem;
  top: 50%;
  transform: translateY(-50%);
}

        
    </style>
    </head>

    <body>
<header>
  <div class="bg-white">
  <div class="container">
  <nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
  <a class="d-flex text-decoration-none" href="">
                    <img class=" mt-3" src="{{ asset('img/logo.svg') }}" alt="logo" style="width: 80%;">
                    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item me-5">
          <a class="nav-link active fs-5 fw-bold" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link fs-5 fw-bold" href="#">Travel Package</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link fs-5 fw-bold" href="#">About Us</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link fs-5 fw-bold" href="#">Booking Dashboard</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link fs-5 fw-bold" href="#">Contact Us</a>
        </li>
      </ul>
    </div>
    <div>
    <i class="fa-solid fa-user fs-4"></i>
    </div>
  </div>
</nav>
  </div>
  </div>
 

</header>
<main>
<section>
    <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators mb-2 mb-lg-4 mb-md-4">
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active position-relative">
                <img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8Nnx8fGVufDB8fHx8fA%3D%3D" class="d-block slide-img p-0 w-100 object-fit-cover" style="height: 700px;" alt="">
                <div class="carousel-caption position-absolute d-flex flex-column justify-content-center h-100 align-items-start custom-caption-alignment start-0 top-0" style="padding-left: 5%;">
                    <p class="mb-3 text-white fw-bold display-2">Make in your journey...</p>
                    <div class=" d-flex">
                        <a href="#" class="btn btn-danger py-1 px-3 me-2 hoverbtn fw-medium mt-2 text-nowrap justify-content-center align-items-center d-flex fs-5">View Package</a>
                        <a href="#" class="btn btn-outline-danger mx-3 mx-md-4 mx-lg-4 text-white fs-5 py-1 px-3 hoverbtn fw-medium mt-2 text-nowrap">Custom Package</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8Nnx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 object-fit-cover" style="height: 700px;" alt="">
                <div class="carousel-caption position-absolute d-flex flex-column justify-content-center h-100 align-items-start custom-caption-alignment start-0 top-0" style="padding-left: 5%;">
                    <p class="mb-3 text-white fw-bold display-2">Make in your journey...</p>
                    <div class=" d-flex">
                        <a href="#" class="btn btn-danger py-1 px-3 me-2 hoverbtn fw-medium mt-2 text-nowrap justify-content-center align-items-center d-flex fs-5">View Package</a>
                        <a href="#" class="btn btn-outline-danger mx-3 mx-md-4 mx-lg-4 text-white fs-5 py-1 px-3 hoverbtn fw-medium mt-2 text-nowrap">Custom Package</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img src="https://images.unsplash.com/photo-1476514525535-07fb3b4ae5f1?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxleHBsb3JlLWZlZWR8Nnx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 object-fit-cover" style="height: 700px;" alt="">
                <div class="carousel-caption position-absolute d-flex flex-column justify-content-center h-100 align-items-start custom-caption-alignment start-0 top-0" style="padding-left: 5%;">
                    <p class="mb-3 text-white fw-bold display-2">Make in your journey...</p>
                    <div class=" d-flex">
                        <a href="#" class="btn btn-danger py-1 px-3 me-2 hoverbtn fw-medium mt-2 text-nowrap justify-content-center align-items-center d-flex fs-5">View Package</a>
                        <a href="#" class="btn btn-outline-danger mx-3 mx-md-4 mx-lg-4 text-white fs-5 py-1 px-3 hoverbtn fw-medium mt-2 text-nowrap">Custom Package</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
<div class="container py-5">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-5 col-lg-6 pe-lg-5 pe-md-3 pe-auto">
                    <div class="mb-2 fs-4">Our Story</div>
                    <h1 class="mb-4 text-primary">About Us</h1>
                    <p style="text-align: justify;">
                        At Trezzert, we are dedicated to providing exceptional travel experiences across Sri Lanka. Specializing in customizable tour packages, we offer everything from cultural explorations to beach getaways, wildlife adventures, and more. Our mission is to make your journey seamless, offering accommodation, meals, and transportation tailored to your preferences. With a focus on safety and customer satisfaction, we travel with you throughout your trip, resolving any issues along the way. Whether you choose a pre-designed package or create your own, Trezzert is here to deliver a hassle-free, unforgettable Sri Lankan adventure.
                    </p>
                </div>
                <div class="col-md-5 col-lg-6">
                    <div class="row justify-content-center">
                        <div class="col-6 col-md-12 col-lg-6 d-flex align-items-center justify-content-center mb-4 mb-lg-0">
                            <img class="rounded-shape1 object-fit-cover img-fluid pb-lg-5 pb-md-0 pb-3 mb-lg-5 mb-md-0 mb-0 " src="img/Jaffna.png" alt="Sri Lanka Travel Image 1" style=" border-radius: 0 25% 0 25%;">
                        </div>
                        <div class="col-6 col-md-12 col-lg-6 d-flex align-items-center justify-content-center">
                            <img class="rounded-shape2 object-fit-cover img-fluid pt-lg-5 pt-md-0 pt-3 mt-lg-5 mt-md-0 mt-0" src="img/Jaffna.png" alt="Sri Lanka Travel Image 2" style="border-radius: 25% 0 25% 0; ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section >
   <div class="container py-3">
            <div class="text-center mb-4">
                <h3>Our Packages</h3>
                <h1 class="mb-3 text-primary-emphasis">Fall into travel</h1>
                <div class="d-flex justify-content-end mb-3 "><a href="#" class="btn btn-outline-danger fw-bold">See All</a></div>
                <p>Discover customized travel packages designed for your dream journey, combining adventure, comfort, and the best prices for a hassle-free experience.</p>
                
               
            </div>
            <div class="row justify-content-center align-items-center">
                <!-- Package Card Start -->
                <div class="col-md-4 col-lg-3">
                    <div class=" card bg-white border-0 rounded-5 mb-3">
                        <img src="{{ asset('img/img1.png') }}" class="card-img-top" alt="Package Image">
                        <div class="card-body">
                            <div class="d-flex bg-danger justify-content-between mb-2">
                                <span class="badge ">Rs. XXXXX</span>
                                <span class="badge ">5 People</span>
                            </div>
                            <h5 class="card-title">Package Name Package Name</h5>
                            <p class="text-primary">Jaffna | Trinco | Batti</p>
                            <p class="card-text">Qui Tempore Voluptate Qui Quia Commodi Commordi Rem Praesentium Alias Et.</p>
                            <div class="text-center">
                            <a href="#" class="btn btn-danger">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="card border-0 rounded-5 mb-3">
                        <img src="{{ asset('img/img1.png') }}" class="card-img-top" alt="Package Image">
                        <div class="card-body">
                            <div class="d-flex bg-danger justify-content-between mb-2">
                                <span class="badge ">Rs. XXXXX</span>
                                <span class="badge ">5 People</span>
                            </div>
                            <h5 class="card-title">Package Name Package Name</h5>
                            <p class="text-primary">Jaffna | Trinco | Batti</p>
                            <p class="card-text">Qui Tempore Voluptate Qui Quia Commodi Commordi Rem Praesentium Alias Et.</p>
                            <div class="text-center">
                            <a href="#" class="btn btn-danger">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="card border-0 rounded-5 mb-3">
                        <img src="{{ asset('img/img1.png') }}" class="card-img-top" alt="Package Image">
                        <div class="card-body">
                            <div class="d-flex bg-danger justify-content-between mb-2">
                                <span class="badge ">Rs. XXXXX</span>
                                <span class="badge ">5 People</span>
                            </div>
                            <h5 class="card-title">Package Name Package Name</h5>
                            <p class="text-primary">Jaffna | Trinco | Batti</p>
                            <p class="card-text">Qui Tempore Voluptate Qui Quia Commodi Commordi Rem Praesentium Alias Et.</p>
                            <div class="text-center">
                            <a href="#" class="btn btn-danger">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-3">
                    <div class="card border-0 rounded-5 mb-3">
                        <img src="{{ asset('img/img1.png') }}" class="card-img-top" alt="Package Image">
                        <div class="card-body">
                            <div class="d-flex bg-danger justify-content-between mb-2">
                                <span class="badge ">Rs. XXXXX</span>
                                <span class="badge ">5 People</span>
                            </div>
                            <h5 class="card-title">Package Name Package Name</h5>
                            <p class="text-primary">Jaffna | Trinco | Batti</p>
                            <p class="card-text">Qui Tempore Voluptate Qui Quia Commodi Commordi Rem Praesentium Alias Et.</p>
                            <div class="text-center">
                            <a href="#" class="btn btn-danger">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<section>
<div class=" bg-img">
    <div class=" row justify-content-center z-1 ">
        <div class="col-md-8 col-lg-4 my-5 p-3">
            <h1 class="text-white">Why choose Trezzert?</h1>
            <p class="text-white">Our services have been trusted by world travelers.</p>
        
            <div class="bg-white rounded-2 p-3 mb-3 text-center">
            <h5>Customizable Packages</h5>
            <p>Tailor your travel experience with flexible itineraries, accommodations, and activities that suit your preferences.</p>
            </div>
            <div class="bg-white rounded-2 p-3 mb-3 text-center">
            <h5>Safe & Reliable Travel</h5>
            <p>Enjoy secure transportation, handpicked accommodations, and expert guidance throughout your journey.</p>
            </div>
            <div class="bg-white rounded-2 p-3 mb-3 text-center">
            <h5>Comprehensive Support</h5>
            <p>We offer 24/7 assistance, ensuring a seamless, worry-free trip from start to finish.</p>
            </div>
        </div>
    </div>    
</div>
</section>

<section>
<div class="container mt-5">
    <h5 class="text-center mb-2">Gallery</h5>
    <h2 class="text-center mb-4 fw-bold text-primary">Unforgettable moment</h2>
    <div class="row g-3">
        <div class="col-md-6 d-flex">
            <div class="position-relative w-100 h-100">
                <img src="{{ asset('img/Jaffna.png') }}" alt="Jaffna" class="img-fluid rounded w-100 h-100 object-fit-cover">
                <div class="position-absolute bottom-0 start-0 p-3 text-white">
                    <h4 class="fw-bold m-0">JAFFNA</h4>
                </div>
            </div>
        </div>
        <div class="col-md-6 d-flex flex-column">
            <div class="row g-3 h-50 mb-lg-0 mb-md-0 mb-3 pb-5">
                <div class="col-12">
                    <div class="position-relative h-100">
                        <img src="{{ asset('img/Trinco.png') }}" alt="Trinco" class="img-fluid rounded w-100 h-100 object-fit-cover">
                        <div class="position-absolute bottom-0 start-0 p-3 text-white">
                            <h4 class="fw-bold m-0">TRINCO</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row h-50 pt-0 mt-3 mt-md-4 mt-lg-4 gx-3">
                <div class="col-6">
                    <div class="position-relative h-100">
                        <img src="{{ asset('img/Trinco.png') }}" alt="batti" class="img-fluid rounded w-100 h-100 object-fit-cover">
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h4 class="fw-bold m-0">BATTI</h4>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="position-relative h-100 ">
                        <img src="{{ asset('img/Trinco.png') }}" alt="ampara" class="img-fluid rounded w-100 h-100 object-fit-cover">
                        <div class="position-absolute bottom-0 start-0 p-4 text-white">
                            <h4 class="fw-bold m-0">AMPARA</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</section>
<div class="container p-5 text-center">
<h5>Testimonial</h5>
        <h1 class="mb-5 text-primary-emphasis">What Our Travelers Say: Real Stories, Real Experiences</h1>
        <span>Create a visual identity for your company and overall brand</span>
  <div id="testimonialCarousel" class="carousel pb-5 my-carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="card border-0 mx-2">
                <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('img/profile.png') }}" class="card-img-top w-50" alt="Emma W">
                    <h5 class="card-title">Emma W <span class="card-subtitle">(United Kingdom)</span></h5>
                </div>
                <div class="text-start mb-3">
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                </div>
                <p  style="text-align:justify;">
                    "Trezzert provided a unique experience. We wanted a special honeymoon trip, 
                    and they designed a custom tour with private accommodations, stunning views, and romantic dinners.
                    The service was exceptional, and the staff was always there to assist. Couldn't have asked for more!"
                </p>
                </div>
        </div>
      </div>
      <div class="carousel-item">
      <div class="card border-0 mx-2">
                <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('img/profile.png') }}" class="card-img-top w-50" alt="Emma W">
                    <h5 class="card-title">Emma W <span class="card-subtitle">(United Kingdom)</span></h5>
                </div>
                <div class="text-start mb-3">
                <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                </div>
                <p  style="text-align:justify;">
                    "Trezzert provided a unique experience. We wanted a special honeymoon trip, 
                    and they designed a custom tour with private accommodations, stunning views, and romantic dinners.
                    The service was exceptional, and the staff was always there to assist. Couldn't have asked for more!"
                </p>
                </div>
        </div>
      </div>
      <div class="carousel-item">
      <div class="card border-0 mx-2">
                <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('img/profile.png') }}" class="card-img-top w-50" alt="Emma W">
                    <h5 class="card-title">Emma W <span class="card-subtitle">(United Kingdom)</span></h5>
                </div>
                <div class="text-start mb-3">
                <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                </div>
                <p  style="text-align:justify;">
                    "Trezzert provided a unique experience. We wanted a special honeymoon trip, 
                    and they designed a custom tour with private accommodations, stunning views, and romantic dinners.
                    The service was exceptional, and the staff was always there to assist. Couldn't have asked for more!"
                </p>
                </div>
        </div>
      </div>
      <div class="carousel-item">
      <div class="card border-0 mx-2">
                <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('img/profile.png') }}" class="card-img-top w-50" alt="Emma W">
                    <h5 class="card-title">Emma W <span class="card-subtitle">(United Kingdom)</span></h5>
                </div>
                <div class="text-start mb-3">
                <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                </div>
                <p  style="text-align:justify;">
                    "Trezzert provided a unique experience. We wanted a special honeymoon trip, 
                    and they designed a custom tour with private accommodations, stunning views, and romantic dinners.
                    The service was exceptional, and the staff was always there to assist. Couldn't have asked for more!"
                </p>
                </div>
        </div>
      </div>
      <div class="carousel-item">
      <div class="card border-0 mx-2">
                <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('img/profile.png') }}" class="card-img-top w-50" alt="Emma W">
                    <h5 class="card-title">Emma W <span class="card-subtitle">(United Kingdom)</span></h5>
                </div>
                <div class="text-start mb-3">
                <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                </div>
                <p  style="text-align:justify;">
                    "Trezzert provided a unique experience. We wanted a special honeymoon trip, 
                    and they designed a custom tour with private accommodations, stunning views, and romantic dinners.
                    The service was exceptional, and the staff was always there to assist. Couldn't have asked for more!"
                </p>
                </div>
        </div>
      </div>
      <div class="carousel-item">
      <div class="card border-0 mx-2">
                <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('img/profile.png') }}" class="card-img-top w-50" alt="Emma W">
                    <h5 class="card-title">Emma W <span class="card-subtitle">(United Kingdom)</span></h5>
                </div>
                <div class="text-start mb-3">
                <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                </div>
                <p  style="text-align:justify;">
                    "Trezzert provided a unique experience. We wanted a special honeymoon trip, 
                    and they designed a custom tour with private accommodations, stunning views, and romantic dinners.
                    The service was exceptional, and the staff was always there to assist. Couldn't have asked for more!"
                </p>
                </div>
        </div>
      </div>
      <div class="carousel-item">
      <div class="card border-0 mx-2">
                <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('img/profile.png') }}" class="card-img-top w-50" alt="Emma W">
                    <h5 class="card-title">Emma W <span class="card-subtitle">(United Kingdom)</span></h5>
                </div>
                <div class="text-start mb-3">
                <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                </div>
                <p  style="text-align:justify;">
                    "Trezzert provided a unique experience. We wanted a special honeymoon trip, 
                    and they designed a custom tour with private accommodations, stunning views, and romantic dinners.
                    The service was exceptional, and the staff was always there to assist. Couldn't have asked for more!"
                </p>
                </div>
        </div>
      </div>
      <div class="carousel-item">
      <div class="card border-0 mx-2">
                <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('img/profile.png') }}" class="card-img-top w-50" alt="Emma W">
                    <h5 class="card-title">Emma W <span class="card-subtitle">(United Kingdom)</span></h5>
                </div>
                <div class="text-start mb-3">
                <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                </div>
                <p  style="text-align:justify;">
                    "Trezzert provided a unique experience. We wanted a special honeymoon trip, 
                    and they designed a custom tour with private accommodations, stunning views, and romantic dinners.
                    The service was exceptional, and the staff was always there to assist. Couldn't have asked for more!"
                </p>
                </div>
        </div>
      </div>
      <div class="carousel-item">
      <div class="card border-0 mx-2">
                <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <img src="{{ asset('img/profile.png') }}" class="card-img-top w-50" alt="Emma W">
                    <h5 class="card-title">Emma W <span class="card-subtitle">(United Kingdom)</span></h5>
                </div>
                <div class="text-start mb-3">
                <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                    <i class="fa-solid fa-star text-warning"></i>
                </div>
                <p  style="text-align:justify">
                    "Trezzert provided a unique experience. We wanted a special honeymoon trip, 
                    and they designed a custom tour with private accommodations, stunning views, and romantic dinners.
                    The service was exceptional, and the staff was always there to assist. Couldn't have asked for more!"
                </p>
                </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
    <i class="fa-solid fa-angle-left text-dark fs-3"></i>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
    <i class="fa-solid fa-angle-right text-dark fs-3"></i>
    </button>
  </div>
</div>


<script>
   document.addEventListener("DOMContentLoaded", function () {
    const multipleItemCarousel = document.querySelector("#testimonialCarousel");

    if (window.matchMedia("(min-width:576px)").matches) {
        const carousel = new bootstrap.Carousel(multipleItemCarousel, {
            interval: false
        });

        const carouselInner = document.querySelector(".carousel-inner");
        const carouselItems = document.querySelectorAll(".carousel-item");
        const carouselWidth = carouselInner.scrollWidth;
        const cardWidth = carouselItems[0].offsetWidth;
        
        let scrollPosition = 0;

        const nextButton = document.querySelector(".carousel-control-next");
        const prevButton = document.querySelector(".carousel-control-prev");

        nextButton.addEventListener("click", function () {
            if (scrollPosition < carouselWidth - cardWidth * 3) {
                console.log("next");
                scrollPosition += cardWidth;
                carouselInner.scrollTo({
                    left: scrollPosition,
                    behavior: "smooth"
                });
            }
        });

        prevButton.addEventListener("click", function () {
            if (scrollPosition > 0) {
                scrollPosition -= cardWidth;
                carouselInner.scrollTo({
                    left: scrollPosition,
                    behavior: "smooth"
                });
            }
        });
    } else {
        multipleItemCarousel.classList.add("slide");
    }
});

</script>        

</main>
    
<footer>
    <div  class=" bg-white position-relative foot-main p-5">
    <div class="position-absolute white rounded-3 text-center py-1 px-3 bg-white foot-sub">
            <div class="d-flex ">
                <img src="img/Rectangle 13.png" alt="Bird icon representing notifications"  style="width: 150px;height: 150px;" class="d-none d-sm-block">
                <div class="ms-3 d-flex flex-column justify-content-center">
                <span class="text-primary text-start fw-bold">News Letters</span>
                    <h5 class="fw-bold text-danger text-nowrap">
                        Get Our Every Single Notification 
                    </h5>
                    <form class="d-flex justify-content-center align-items-center mt-3" novalidate>
                        <input type="email" class="form-control w-75 rounded-pill me-2" placeholder="Enter your email here" required>
                        <button class="btn btn-danger rounded-pill">Subscribe</button>
                    </form>
                </div>
            </div>
        
    </div>
    <div class="container text-center  ">
                <a class="d-flex text-decoration-none" href="">
                <img class=" mt-3" src="{{ asset('img/logo.svg') }}" alt="logo" style="width: 15%;">
                </a>
        <div class="row align-items-start">
            <div class=" col-md-5 col-lg-4 text-white">
                <div class="text-dark fs-6" style="text-align:justify">
                At Trezzert, our mission is to empower our guests by providing uniquely personalized travel experiences throughout Sri Lanka.
                    We believe that travel should be about exploration and personal growth. 
                    Our dedicated team ensures each journey is thoughtfully curated to meet the specific desires and needs of our clients, 
                ensuring every adventure is as unique as our travelers.
                </div>
            </div>
            <div class="col-md-7 col-lg-8 text-center">
                <div class="row mt-md-5 mt-lg-0">
                    <div class=" col-md-5 col-lg-4 mb-4 p-1">
                        <h5 class="text-uppercase text-danger fw-bold">Quick Link</h5>
            
                        <ul class="list-unstyled mb-0">
                            <li >
                            <a href="" class=" text-decoration-none text-dark zoom-text" >About</a>
                            </li>
                            <li>
                            <a href="" class="text-decoration-none text-dark zoom-text">Privacy Policy</a>
                            </li>
                            <li>
                            <a href="" class=" text-decoration-none text-dark zoom-text">Terms and Condition</a>
                            </li>
                            <li>
                            <a href=""  class=" text-decoration-none text-dark zoom-text">Return Policy</a>
                            </li>
                        </ul>
                    </div>
                    <div class=" col-md-7 col-lg-4 mb-4 mb-md-0">
                        <h5 class="text-uppercase text-danger fw-bold">Contact</h5>
            
                        <ul class="list-unstyled mb-0">
                            <li>
                            <a href="#!" class="text-dark text-decoration-none">+94777538775</a>
                            </li>
                            <li>
                            <a href="" target="_blank" class="text-dark text-decoration-none" title="Mail">info@travel.com</a>
                            </li>
                            <li>
                            <a href="" target="_blank" class="text-dark text-decoration-none" title="Address"> No 032, main street, Colombo,<br> Sri Lanka.</a>
                            </li>
                        </ul>
                    </div>
        
                    <div class="col-md-7 col-lg-4 text-white text-lg-start text-md-start text-sm-center ms-sm-3 ms-lg-0">
                        <h5 class="text-uppercase text-danger fw-bold">Follow Us</h5>
                            <span class="me-3 text-dark fs-4">
                            <i class="fa-brands fa-facebook"></i>
                            </span>
                            <span class="me-3 text-dark fs-4">
                            <i class="fa-brands fa-instagram"></i>
                            </span>
                            <span class="me-3 text-dark fs-4">
                            <i class="fa-brands fa-whatsapp"></i>
                            </span>
                            <span class="me-3 text-dark fs-4">
                            <i class="fa-brands fa-linkedin-in"></i>
                            </span>
                            
                    </div> 
                    
                </div>
                
            </div>
            
            
        </div>
        <hr class="m-0 text-danger fw-bold">
    
        <!-- Section: Copyright -->
        <section class="pb-3 pt-0">
        <div class="row d-flex align-items-center">
            <!-- Grid column -->
            <div class="col-md-8 col-lg-6 text-lg-start text-md-start text-sm-center">
            <!-- Copyright -->
            <div class="py-3 text-dark">
            Copyright © 2024 All rights reserved by:
                <a class="text-decoration-none text-dark" href=""
                    >Travel</a
                >
            </div>
            <!-- Copyright -->
            </div>
            <!-- Grid column -->
            <div class="col-md-4 col-lg-6 text-lg-end text-sm-center">
            <!-- Copyright -->
            <div class="py-3 text-dark">
            Web Developed by 
                <a class="text-decoration-none text-dark" href="https://www.apexx.lk/"
                    >Apexx Private Limited</a
                >
            </div>
            <!-- Copyright -->
            </div>
        </div>
        </section>
        <!-- Section: Copyright -->

    </div>
        
</div>

</footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>



    </body>
</html>
