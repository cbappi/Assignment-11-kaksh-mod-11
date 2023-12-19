<!-- resources/views/stock/create.blade.php -->
@extends('master')

@section('title', 'Add - Product - Page')

@section('content')
    <h1>Add New Products</h1>

    <form action="{{ route('stock.store') }}" method="post">
        @csrf

        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" required>

        <label for="unit_price">Unit Price:</label>
        <input type="number" name="unit_price" required>

        <label for="product_quantity">Quantity:</label>
        <input type="number" name="product_quantity" required>

        <button type="submit">Add Product</button>
    </form>
@endsection
