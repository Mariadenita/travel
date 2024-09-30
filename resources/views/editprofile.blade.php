@extends('layouts.app')
@section('title','')
@section('main-content')
    <div>
        <div class="position-relative">
            <!-- Background Image -->
            <img src="{{ asset('img/profile-bg.png') }}" class="img-fluid w-100" alt="Background Image">
            <!-- Profile Image -->
            <img src="{{ asset('img/profile.png') }}" alt="Profile Image" class="rounded-circle img-fluid position-absolute top-100 start-50 translate-middle border border-4 border-white" style="width: 100px; height: 100px;">
        </div>
        <div class="container">
 <!-- User Info -->
 <div class="text-center mt-5">
        <h3 class="fw-bold">John Doe.</h3>
        <p class="text-muted">john.doe@gmail.com</p>
    </div>
    
    <!-- edit Details Section -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class=" col-lg-6 col-md-3">
            <form>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" value="Michael Joe">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" value="michaeljoe@gmail.com">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number" value="123456789">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password" value="password">
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
   
    </div>

@endsection
@section('styles')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection
@section('scripts')
<script src="{{ asset('js/profile.js') }}"></script>
@endsection