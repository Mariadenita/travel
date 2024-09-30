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
    <div class="d-flex justify-content-center"><a class="btn text-decoration-none " href="{{ route('editprofile') }}"><i class="fa-solid fa-pen-to-square"></i>Edit</a></div>
    <!-- Account Details Section -->
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <h4 >Account</h4>
                <div class="card border-0 shadow-sm">
                    <div class="card-body">
                        
                        <!-- Name -->
                        <div class="mb-3">
                            <h6 class="fw-bold">Name</h6>
                            <p>John Doe</p>
                        </div>
                        <!-- Email -->
                        <div class="mb-3">
                            <h6 class="fw-bold">Email</h6>
                            <p>john.doe@gmail.com</p>
                        </div>
                        <!-- Password -->
                        <div class="mb-3">
                            <h6 class="fw-bold">Password</h6>
                            <p>**********</p>
                        </div>
                        <!-- Phone -->
                        <div class="mb-3">
                            <h6 class="fw-bold">Phone Number</h6>
                            <p>+94 777 25678</p>
                        </div>
                        <!-- Buttons -->
                        <div><button class="btn"><i class="fa-solid fa-right-from-bracket"></i> Log Out</button></div>
                        <div><button class="btn "><i class="fa-solid fa-trash"></i> Delete Account</button></div>                        
                        
                        
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