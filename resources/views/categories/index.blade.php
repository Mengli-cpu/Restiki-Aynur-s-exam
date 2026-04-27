@extends('layouts.head')

@section('main-content')
<div class="container">
    <div class="row">
        <div class="col-12 mb-4">
            <h2 class="fw-bold">
                <i class="bi bi-grid-fill me-2 text-primary"></i> Menu Categories
            </h2>
            <p class="text-muted">Choose a category to explore our delicious dishes</p>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
        @if(isset($categories) && $categories->count() > 0)
        @foreach($categories as $category)
        <div class="col">
            <div class="card h-100 shadow-sm border-0 text-center p-3 category-card">
                <div class="card-body d-flex flex-column align-items-center">

                    <div class="mb-3 category-img-container">
                        {{-- Проверяем наличие папки img/categories --}}
                        <img src="{{ asset('img/categories/' . $category->id . '.png') }}" alt="{{ $category->name }}" class="img-fluid" style="width: 80px; height: 80px; object-fit: contain;" onerror="this.src='https://via.placeholder.com/80?text=Food'">
                    </div>

                    <h5 class="card-title fw-bold text-dark mb-3">{{ $category->name }}</h5>

                    <a href="{{ url('/foods?category=' . $category->id) }}" class="btn btn-outline-primary btn-sm rounded-pill px-4 stretched-link">
                        Explore
                    </a>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="col-12">
            <p class="alert alert-warning">No categories found in database.</p>
        </div>
        @endif
    </div>
</div>

<style>
    .category-card {
        transition: all 0.3s ease;
        border-radius: 20px;
        background: #ffffff;
    }

    .category-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08) !important;
        background-color: #f8fbff;
    }

    .category-img-container {
        transition: transform 0.3s ease;
    }

    .category-card:hover .category-img-container {
        transform: scale(1.1);
    }

    .btn-outline-primary {
        border-width: 2px;
        font-weight: 600;
    }
</style>
@endsection