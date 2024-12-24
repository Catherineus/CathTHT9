@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="img-fluid rounded">
        </div>
        <div class="col-md-6">
            <h1>{{ $product['name'] }}</h1>
            <p class="text-muted">Category: <strong>{{ ucfirst($product['category']) }}</strong></p>
            <p>Price: <span class="text-success">Rp {{ number_format($product['price'], 0, ',', '.') }}</span></p>
            <p>Description:</p>
            <p>{{ $product['description'] }}</p>

            <ul class="list-unstyled">
                <li><strong>Available Stock:</strong> 50 pcs</li>
                <li><strong>Brand:</strong> Premium Makeup</li>
                <li><strong>Rating:</strong> 4.8 / 5</li>
            </ul>

            <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">Back</a>
            <a href="#" class="btn btn-primary mt-3">Add to Cart</a>
        </div>
    </div>
</div>
@endsection
