@extends('web.shop')

@section('content')

<div class="row">
    @foreach($products as $product)
        <div class="col-md-3 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $product->name }}</h4>
                    <div class="electronic_img"><img src="{{ asset('web/images/' . $product->image) }}"  width="100%"  alt="" srcset=""></div>
                    <p>{{ $product->description }}</p>
                    <p class="card-text"><strong>Price: </strong> ${{ $product->salary }}</p>
                    <p class="btn-holder"><a href="{{ route('addProduct.to.cart', $product->id) }}" class="btn btn-outline-danger">Add to cart</a> </p>
                </div>
            </div>
        </div>
    @endforeach
</div>

@endsection
