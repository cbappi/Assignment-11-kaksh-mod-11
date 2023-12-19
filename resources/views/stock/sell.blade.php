<!-- resources/views/stock/sell.blade.php -->


@extends('master')

@section('title', 'Sell-Page')

@section('content')
    <h1>Sell Product</h1>

    <form action="{{ route('stock.sell', $product->id) }}" method="post">
        @csrf

        <label for="sell_quantity">Sell date:</label>
        <input type="date" name="sell_date" required>

        <label for="product_name">Product Name:</label>
        <input type="text" name="product_name" value="{{ $product->product_name }}" readonly>

        <label for="unit_price">Unit Price:</label>
        <input type="text" name="unit_price" value="{{ $product->unit_price }}" readonly>

        <label for="sell_quantity">Sell quantity:</label>
        <input type="number" name="sell_quantity" required>

        <button type="submit">Sell</button>
    </form>
@endsection
