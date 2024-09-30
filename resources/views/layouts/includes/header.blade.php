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
          <a class="nav-link active fs-5 fw-bold" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item me-5">
          <a class="nav-link fs-5 fw-bold" href="{{ route('travelPackage') }}">Travel Package</a>
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
    <div class="d-none d-lg-block">
      <a href="{{ route('profile') }}"> <i class="fa-solid fa-user fs-4"></i></a>
    </div>

  </div>
</nav>
</div>
  </div>
 
