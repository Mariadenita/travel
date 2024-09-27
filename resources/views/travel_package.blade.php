@extends('layouts.app')
@section('title','')
@section('main-content')
<div class="position-relative">
            <img class="w-100" src="{{ asset('img/beach.png') }}" alt="Tropical Header">
            <div class=" position-absolute top-50 start-50 text-white translate-middle fs-1 fw-bold text-nowrap">Travel Package Details</div>
        </div>
<div class="container bg-white p-5 rounded  mt-5">
    <div class="row justify-content-center">
      <!-- Left Section -->
      <div class="col-md-10 col-lg-7">
        <!-- Package Details -->
        <h2 class="mb-3 text-primary-emphasis">Package Name<i class="fa-solid fa-share-nodes ms-2 fs-3"></i></h2>
        <p class="h5 text-danger">Rs. XXXX / Per Couple</p>
        <p class="text-muted text-primary-emphasis fw-bold"><i class="fa-regular fa-clock me-2"></i>6 Nights & 5 Days</p>
        <p class="text-muted" style="text-align: justify;">Ex optio sequi et quos praesentium in nostrum labore nam rerum iusto aut magni nesciunt? Quo quidem neque iste expedita est dolor similique ut quasi maxime ut deserunt autem At praesentium voluptatem aut libero nisi.
           Et eligendi sint ab cumque veritatis aut provident aliquam. Aut aspernatur consequuntur eum quaerat distinctio ut inventore aliquid et quasi alias ut rerum suscipit et nihil deleniti. Ex optio sequi et quos praesentium in nostrum labore nam rerum iusto aut magni nesciunt? 
           Quo quidem neque iste expedita est dolor similique ut quasi maxime ut deserunt autem At praesentium voluptatem aut libero nisi. Et eligendi sint ab cumque veritatis aut provident aliquam. 
          Aut aspernatur consequuntur eum quaerat distinctio ut inventore aliquid et quasi alias ut rerum suscipit et nihil deleniti.</p>

        <div class="container mb-5 ps-3">
          <h2 class="mb-3 text-primary-emphasis">Tour Plan</h2>
      <!-- tour -->
          <!-- Day 1 -->
          <div class="row ">
              <div class="col-1 d-flex flex-column align-items-center">
                  <div class=" p-2 bg-danger text-white rounded-3 text-center fs-5">01</div>
                  <hr class=" separator h-100">
              </div>
              <div class="col">
                  <h5 class="font-weight-bold text-danger">Day 1: Jaffna</h5>
                  <div>Jaffna | Jaffna | Jaffna | Jaffna | Jaffna</div>
                  <ul class="">
                      <li>5 Star Accommodation</li>
                      <li>Breakfast, Lunch, Dinner</li>
                      <li>Car</li>
                  </ul>
              </div>
             
          </div>
      
          <!-- Day 2 -->
          <div class="row ">
            <div class="col-1 d-flex flex-column align-items-center">
                <div class=" p-2 bg-danger text-white rounded-3 text-center fs-5">02</div>
                <hr class=" separator h-100">
            </div>
            <div class="col">
                <h5 class="font-weight-bold text-danger">Day 2: Jaffna</h5>
                <div>Jaffna | Jaffna | Jaffna | Jaffna | Jaffna</div>
                <ul class="">
                    <li>5 Star Accommodation</li>
                    <li>Breakfast, Lunch, Dinner</li>
                    <li>Car</li>
                </ul>
            </div>
           
        </div>
      
          <!-- Day 3 -->
          <div class="row ">
            <div class="col-1 d-flex flex-column align-items-center">
                <div class=" p-2 bg-danger text-white rounded-3 text-center fs-5">03</div>
                <hr class=" separator h-100">
            </div>
            <div class="col">
                <h5 class="font-weight-bold text-danger">Day 3: Jaffna</h5>
                <div>Jaffna | Jaffna | Jaffna | Jaffna | Jaffna</div>
                <ul class="">
                    <li>5 Star Accommodation</li>
                    <li>Breakfast, Lunch, Dinner</li>
                    <li>Car</li>
                </ul>
            </div>
           
        </div>
      
          <!-- Day 4 -->
          <div class="row ">
            <div class="col-1 d-flex flex-column align-items-center">
                <div class=" p-2 bg-danger text-white rounded-3 text-center fs-5">04</div>
                <hr class=" separator h-100">
            </div>
            <div class="col">
                <h5 class="font-weight-bold text-danger">Day 4: Jaffna</h5>
                <div>Jaffna | Jaffna | Jaffna | Jaffna | Jaffna</div>
                <ul class="">
                    <li>5 Star Accommodation</li>
                    <li>Breakfast, Lunch, Dinner</li>
                    <li>Car</li>
                </ul>
            </div>
           
        </div>
          <!-- Day 5 -->
          <div class="row ">
            <div class="col-1 d-flex flex-column align-items-center">
                <div class=" p-2 bg-danger text-white rounded-3 text-center fs-5">05</div>
            </div>
            <div class="col">
                <h5 class="font-weight-bold text-danger">Day 5: Jaffna</h5>
                <div>Jaffna | Jaffna | Jaffna | Jaffna | Jaffna</div>
                <ul class="">
                    <li>5 Star Accommodation</li>
                    <li>Breakfast, Lunch, Dinner</li>
                    <li>Car</li>
                </ul>
            </div>
           
        </div>
      </div>

       
      </div>
      <!-- Right Section -->
      <div class="col-md-10 col-lg-5">
        <!-- Booking Form -->
        <div class="p-4 bg-danger-subtle rounded mb-4">
          <h3 class="mb-4 text-center text-primary-emphasis">Book This Tour</h3>
          <p class=" text-center px-3" >
            Ex optio sequi et quos praesentium in nostrum labore nam rerum iusto aut magni nesciunt?
             Quo quidem neque iste expedita est dolo.
          </p>
          <form id="tourForm" novalidate>

            <!-- <div class="success p-1 rounded"> <i class="fa-solid fa-circle-check me-1"></i>Successfully Send message!</div> -->

            <!-- <div class="fail p-1 rounded"> <i class="fa-solid fa-circle-exclamation me-1"></i>Fail to Send</div> -->

            <div class="my-3">
              <input type="text" class="form-control border-0" id="name" placeholder="Name" required>
              <div class="invalid-feedback">
                Please provide your name.
              </div>
            </div>
            <div class="mb-3">
              <input type="email" class="form-control border-0" id="email" placeholder="Email" required>
              <div class="invalid-feedback">
                Please provide a valid email address.
              </div>
            </div>
            <div class="mb-3">
              <input type="number" class="form-control border-0" id="whatsapp" placeholder="whatsapp" required pattern="\d{10}">
              <div class="invalid-feedback">
                Please provide a valid 10-digit phone number.
              </div>
            </div>
            <div class="mb-3">
              <input type="number" class="form-control border-0" id="phone" placeholder="Phone" required pattern="\d{10}">
              <div class="invalid-feedback">
                Please provide a valid 10-digit phone number.
              </div>
            </div>
            <div class="mb-3">
              <input type="text" class="form-control border-0" id="residence" placeholder="Residence" required >
              <div class="invalid-feedback">
                Please provide a residence.
              </div>
            </div>
            <div class="mb-3">
              <input type="number" class="form-control border-0" id="persons" placeholder="No. of Persons" required min="1">
              <div class="invalid-feedback">
                Please specify at least 1 person.
              </div>
            </div>
            <div class="mb-3">
              <input type="date" class="form-control border-0" id="startDate" placeholder="Start Date" required pattern="\d{2}/\d{2}/\d{4}">
                <div class="invalid-feedback">
                Please select an start date.
                </div>
            
            </div>
            <div class="mb-3">
              <input type="date" class="form-control border-0" id="endDate" placeholder="End Date" required>
              <div class="invalid-feedback">
                Please select an end date.
              </div>
            </div>
            <div class="mb-3">
              <textarea class="form-control border-0" id="message" rows="3" placeholder="Message" required></textarea>
              <div class="invalid-feedback">
                Please enter a message.
              </div>
            </div>
            <div class="text-center mb-1">
              <button type="submit" class="btn btn-danger">Book Now</button>
            </div>
            
          </form>
        </div>

        <!-- Map -->
        <div>
          <div class="ratio ratio-4x3 mb-3">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.08693867683!2d-122.41941558555656!3d37.774929279759704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858064e0f2150f%3A0xb2a9f7a83a0b4c2!2sSan%20Francisco%2C%20CA!5e0!3m2!1sen!2sus!4v1631216092945!5m2!1sen!2sus"
              allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    <!-- Gallery -->
  <div class="container">
  <h3 class="mb-4  text-primary-emphasis">From our gallery</h3>
  <div class="row d-none d-sm-block">
  <div class=" col-lg-6 col-md-8">
    <div class="row mb-3">
      <div class="col-md-12">
        <img src="{{ asset('img/Jaffna.png') }}" alt="Jaffna" class="img-fluid rounded w-100 object-fit-cover" style="height:200px">
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-3">
        <img src="{{ asset('img/Jaffna.png') }}" alt="Jaffna" class="img-fluid rounded w-100 object-fit-cover" style="height:416px">
      </div>
      <div class="col-md-6">
        <div class="row mb-3">
          <div class="col-md-12">
            <img src="{{ asset('img/Jaffna.png') }}" alt="Jaffna" class="img-fluid rounded w-100 object-fit-cover" style="height:200px">
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <img src="{{ asset('img/Jaffna.png') }}" alt="Jaffna" class="img-fluid rounded w-100 object-fit-cover" style="height:200px">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class=" col-lg-3 col-md-4">
    <div class="row mb-3">
      <div class="col-md-12">
        <img src="{{ asset('img/Jaffna.png') }}" alt="Jaffna" class="img-fluid rounded w-100 object-fit-cover" style="height:416px">
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <img src="{{ asset('img/Jaffna.png') }}" alt="Jaffna" class="img-fluid rounded w-100 object-fit-cover" style="height:200px">
      </div>
    </div>
  </div>
</div>

  <div class="row d-block d-sm-none">
  <div class="col-md-4 mb-3"><img src="{{ asset('img/Jaffna.png') }}" alt="Jaffna" class="s-gallery"></div>
  <div class="col-md-4 mb-3"><img src="{{ asset('img/Jaffna.png') }}" alt="Jaffna" class="s-gallery"></div>
  <div class="col-md-4 mb-3"><img src="{{ asset('img/Jaffna.png') }}" alt="Jaffna" class="s-gallery"></div>
  <div class="col-md-4 mb-3"><img src="{{ asset('img/Jaffna.png') }}" alt="Jaffna" class="s-gallery"></div>
  <div class="col-md-4 mb-3"><img src="{{ asset('img/Jaffna.png') }}" alt="Jaffna" class="s-gallery"></div>
  <div class="col-md-4 mb-3"><img src="{{ asset('img/Jaffna.png') }}" alt="Jaffna" class="s-gallery"></div>
  </div>

  </div>
  
  </div>
  </div>



@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/travel_package.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/travel_package.js') }}"></script>
@endsection