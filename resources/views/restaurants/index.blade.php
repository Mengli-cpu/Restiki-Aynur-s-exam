@extends('layouts.head')

@section('main-content')
<h2 class="fw-bold mb-4"><i class="bi bi-shop me-2 text-danger"></i> Our Restaurants</h2>

<div class="row g-4">
    @foreach($restaurants as $restaurant)
    <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0 restaurant-card">
            <div class="card-body p-4 d-flex align-items-center">
                <img src="{{ asset('img/restaurants/' . $restaurant->id . '.png') }}" class="rounded-circle me-3 border" style="width: 70px; height: 70px; object-fit: cover;" alt="{{ $restaurant->name }}" onerror="this.src='https://via.placeholder.com/70?text=Resto'">

                <div>
                    <h5 class="card-title fw-bold mb-1">{{ $restaurant->name }}</h5>
                    <span class="badge bg-light text-muted border">Partner</span>
                </div>
                <a href="#" class="stretched-link"></a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection