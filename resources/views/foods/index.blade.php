@extends('layouts.head')

@section('main-content')
<div class="row align-items-center mb-4">
    <div class="col-md-8">
        <h2 class="fw-bold"><i class="bi bi-egg-fried text-warning me-2"></i> Full Menu</h2>
    </div>
</div>

<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
    @foreach($foods as $food)
    <div class="col">
        <div class="card h-100 border-0 shadow-sm food-card">
            
            <img src="{{ $food->id <= 15 ? asset('img/foods/' . $food->id . '.jpg') : asset('img/foods/default.jpg') }}" class="card-img-top" style="height: 180px; object-fit: cover;" alt="{{ $food->name }}">

            <div class="card-body">
                <div class="d-flex justify-content-between mb-2">
                    <span class="badge bg-success-subtle text-success rounded-pill px-2">
                        {{ $food->category->name ?? 'Food' }}
                    </span>
                    <span class="text-danger fw-bold small"><i class="bi bi-heart-fill"></i> {{ $food->like_count }}</span>
                </div>
                <h5 class="card-title fw-bold mb-1">{{ $food->name }}</h5>
                <p class="text-muted small mb-3"><i class="bi bi-shop me-1"></i> {{ $food->restaurant->name ?? 'Restiki' }}</p>

                <div class="d-flex justify-content-between align-items-center mt-auto">
                    <span class="h5 fw-bold text-primary mb-0">{{ number_format($food->price, 2) }} TMT</span>
                    <a href="{{ url('/foods/show/'.$food->id) }}" class="btn btn-outline-dark btn-sm rounded-circle">
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection