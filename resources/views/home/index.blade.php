@extends('layouts.head')

@section('main-content')

<div class="p-5 mb-4 bg-dark text-white rounded-5 shadow-lg position-relative overflow-hidden">
    <div class="container-fluid py-5 position-relative" style="z-index: 2;">
        <h1 class="display-4 fw-bold">Welcome to Restiki!</h1>
        <p class="col-md-8 fs-4">Delicious food from 15 best restaurants delivered straight to your door. Explore our menu of over 1,000 dishes!</p>
        <a href="{{ route('foods') }}" class="btn btn-warning btn-lg px-4 rounded-pill fw-bold">
            <i class="bi bi-rocket-takeoff-fill me-2"></i> Order Now
        </a>
    </div>

    <i class="bi bi-egg-fried position-absolute end-0 bottom-0 opacity-25" style="font-size: 15rem; transform: rotate(-15deg); margin-right: -50px; margin-bottom: -50px;"></i>
</div>


<div class="row g-4 mb-5">
    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm text-center p-4 card-hover">
            <div class="card-body">
                <div class="icon-circle bg-primary-subtle text-primary mb-3 mx-auto">
                    <i class="bi bi-shop"></i>
                </div>
                <h4 class="fw-bold">Restaurants</h4>
                <p class="text-muted">Explore 15 unique places and their kitchens.</p>
                <a href="{{ route('restaurants') }}" class="stretched-link text-primary fw-semibold text-decoration-none">View all</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm text-center p-4 card-hover">
            <div class="card-body">
                <div class="icon-circle bg-success-subtle text-success mb-3 mx-auto">
                    <i class="bi bi-grid-3x3-gap-fill"></i>
                </div>
                <h4 class="fw-bold">Categories</h4>
                <p class="text-muted">Pizza, Sushi, Burgers — find exactly what you want.</p>
                <a href="{{ route('categories') }}" class="stretched-link text-success fw-semibold text-decoration-none">Browse all</a>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card h-100 border-0 shadow-sm text-center p-4 card-hover">
            <div class="card-body">
                <div class="icon-circle bg-warning-subtle text-warning mb-3 mx-auto">
                    <i class="bi bi-stars"></i>
                </div>
                <h4 class="fw-bold">Popular</h4>
                <p class="text-muted">The most liked dishes by our community.</p>
                <a href="{{ route('foods') }}" class="stretched-link text-warning fw-semibold text-decoration-none">See 1015 items</a>
            </div>
        </div>
    </div>
</div>



<div class="row text-center">
    <div class="col-12">
        <h3 class="fw-bold mb-4">Why choose Restiki?</h3>
    </div>
    <div class="col-md-4">
        <i class="bi bi-clock-history text-danger fs-1"></i>
        <h5 class="mt-2 fw-bold">Fast Delivery</h5>
        <p class="text-muted">Within 30-45 minutes in the city center.</p>
    </div>
    <div class="col-md-4">
        <i class="bi bi-shield-check text-danger fs-1"></i>
        <h5 class="mt-2 fw-bold">Quality Control</h5>
        <p class="text-muted">Only the freshest ingredients from partners.</p>
    </div>
    <div class="col-md-4">
        <i class="bi bi-wallet2 text-danger fs-1"></i>
        <h5 class="mt-2 fw-bold">Best Prices</h5>
        <p class="text-muted">Special offers and loyalty bonuses.</p>
    </div>
</div>

<style>
    .icon-circle {
        width: 70px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-size: 2rem;
    }

    .bg-primary-subtle {
        background-color: #cfe2ff;
    }

    .bg-success-subtle {
        background-color: #d1e7dd;
    }

    .bg-warning-subtle {
        background-color: #fff3cd;
    }

    .card-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 20px;
    }

    .card-hover:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1) !important;
    }
</style>
@endsection