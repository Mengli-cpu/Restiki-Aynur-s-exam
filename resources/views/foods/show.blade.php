@extends('layouts.head')

@section('main-content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <a href="{{ route('foods') }}" class="btn btn-link text-decoration-none text-muted mb-3">
            <i class="bi bi-arrow-left"></i> Back to Menu
        </a>

        <div class="card shadow-sm border-0 overflow-hidden" style="border-radius: 20px;">
            <div class="row g-0">
                <div class="col-md-6">
               
                    <img src="{{ $food->id <= 15 ? asset('img/foods/' . $food->id . '.jpg') : asset('img/foods/default.jpg') }}" class="img-fluid w-100 h-100" style="object-fit: cover; min-height: 400px;" alt="{{ $food->name }}">
                </div>
                <div class="col-md-6 p-4 d-flex flex-column justify-content-center">
                    <h1 class="fw-bold mb-3">{{ $food->name }}</h1>
                    <p class="fs-5 text-muted mb-4"><i class="bi bi-shop me-2"></i>{{ $food->restaurant->name }}</p>
                    <h2 class="text-success fw-bold mb-4">{{ number_format($food->price, 2) }} TMT</h2>
                    <button class="btn btn-primary btn-lg rounded-pill px-5">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection