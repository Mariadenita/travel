@extends('layouts.app')
@section('title','')
@section('main-content')

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
<div class="bg-img">
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
<section>
<div class="container p-5 text-center">
<h5>Testimonial</h5>
        <h1 class="mb-5 text-primary-emphasis">What Our Travelers Say: Real Stories, Real Experiences</h1>
        <span>Create a visual identity for your company and overall brand</span>
  <div id="testimonialCarousel" class="carousel my-carousel">
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
</section>

@endsection

{{-- asset link start --}}
@section('styles')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endsection
{{-- asset link end --}}