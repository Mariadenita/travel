@extends('layouts.app')
@section('title','')
@section('main-content')
    <div>
    <div class="position-relative">
            <!-- Background Image -->
            <img src="{{ asset('img/profile-bg.png') }}" class="img-fluid w-100" alt="Background Image">
            <!-- Profile Image -->
             <div class="rounded-circle img-fluid position-absolute top-100 start-50 translate-middle border border-4 border-dark">
             <img src="{{ asset('img/profile.png') }}" alt="Profile Image" class=" position-relative" style="height: 160px;" >
             <div class="position-absolute bottom-0 end-0 rounded-circle bg-secondary p-3 ">
             <i class="fa-solid fa-pen"></i>
             </div>
            </div>
            
        </div>
<div class="container mt-5 p-2">
 <!-- User Info -->
 <div class="text-center mt-5">
        <h2 class="fw-bold text-primary-emphasis mt-3">John Doe.</h2>
        <p class="text-muted mt-3 fs-5">john.doe@gmail.com</p>
    </div>
    
    <!-- edit Details Section -->
    <div class="container mt-5 px-5">
    <h4 class="fw-bold">Edit Profile</h4>
        <div class="row justify-content-center">
            <div class=" col-lg-3 col-md-6">
            <form id="myForm" novalidate>
    <div class="mb-3">
        <label for="name" class="form-label text-dark-emphasis">Name</label>
        <input type="text" class="form-control border-2" id="name"  required>
        <div class="invalid-feedback">
            Please enter your name.
        </div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label text-dark-emphasis">Email</label>
        <input type="email" class="form-control border-2" id="email"  required>
        <div class="invalid-feedback">
            Please enter a valid email address.
        </div>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label text-dark-emphasis">Phone Number</label>
        <input type="tel" class="form-control border-2" id="phone"  required>
        <div class="invalid-feedback">
            Please enter your phone number.
        </div>
    </div>
    <div class="mb-3">
        <label for="password" class="form-label text-dark-emphasis">Password</label>
        <input type="password" class="form-control border-2" id="password"  required>
        <div class="invalid-feedback">
            Please enter your password.
        </div>
    </div>
    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-danger w-100 me-1">Save</button>
        <button type="button" class="btn btn-outline-danger w-100">Cancel</button>
    </div>
</form>


            </div>
        </div>
    </div>

</div>
 <!-- Bootstrap Alert Modal -->
<div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="alertModalLabel">Alert</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Form successfully saved!
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>
     
</div>

@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/editprofile.js') }}"></script>
@endsection