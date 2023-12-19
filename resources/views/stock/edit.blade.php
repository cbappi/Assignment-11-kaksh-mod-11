
@extends('master')

@section('title', 'Edit-Page')



@section('content')
    <h1>Edit Product</h1>

    <form action="{{ route('stock.update', $product->id) }}" method="post">
        @csrf
        @method('put')

        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" value="{{ $product->product_name }}" required>

        <label for="unit_price">Unit Price:</label>
        <input type="number" name="unit_price" value="{{ $product->unit_price }}" required>

        <label for="product_quantity">Quantity:</label>
        <input type="number" name="product_quantity" value="{{ $product->product_quantity }}" required>

        <button type="submit">Update</button>
    </form>
@endsection
