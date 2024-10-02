@extends('layouts.app')
@section('title','')
@section('main-content')
<div>
        <div class="position-relative">
            <!-- Background Image -->
            <img src="{{ asset('img/profile-bg.png') }}" class="img-fluid w-100" alt="Background Image">
            <!-- Profile Image -->
            <img src="{{ asset('img/profile.png') }}" alt="Profile Image" class="rounded-circle img-fluid position-absolute top-100 start-50 translate-middle border border-4 border-dark " style="height: 160px;" >
        </div>
        
<div class="container mt-5 p-1">
 <!-- User Info -->
 <div class="text-center mt-5">
        <h2 class="fw-bold text-primary-emphasis pt-3">John Doe.</h2>
        <p class="text-danger mt-3 fs-5">john.doe@gmail.com</p>
    </div>
    
    <!-- Account Details Section -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-8">
            <div class="d-flex justify-content-end"><a class="btn text-decoration-none border border-1 border-dark " href="{{ route('editprofile') }}"><i class="fa-solid fa-pen-to-square"></i>Edit</a></div>
            <h4 class="fw-bold mb-3">Account</h4>
                <div class="card border-0 shadow-sm p-3">
                    <div class="card-body">
                        
                        <!-- Name -->
                        <div class="mb-4">
                            <h6 class="text-body-tertiary">Name</h6>
                            <p class="text-dark-emphasis fw-bold">John Doe</p>
                        </div>
                        <!-- Email -->
                        <div class="mb-4">
                            <h6 class="text-body-tertiary">Email</h6>
                            <p class="text-dark-emphasis fw-bold">john.doe@gmail.com</p>
                        </div>
                        <!-- Password -->
                        <div class="mb-4">
                            <h6 class="text-body-tertiary">Password</h6>
                            <p class="text-dark-emphasis fw-bold">**********</p>
                        </div>
                        <!-- Phone -->
                        <div class="mb-4">
                            <h6 class="text-body-tertiary">Phone Number</h6>
                            <p class="text-dark-emphasis fw-bold" >+94 777 25678</p>
                        </div>
                        <!-- Buttons -->
                        <div class="mb-4"><a class="btn p-0"><i class="fa-solid fa-right-from-bracket text-decoration-none text-dark-emphasis"></i> Log Out</a></div>
                        <div class="mb-4"><a class="btn p-0 "><i class="fa-solid fa-trash text-decoration-none text-dark-emphasis"></i> Delete Account</a></div>                        
                        
                        
                    </div>
                </div>
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