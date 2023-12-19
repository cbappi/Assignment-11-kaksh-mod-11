

@extends('master')

@section('title', 'Index-Page')

@section('content')
    <h1>Stock Inventory</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Product Name</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->unit_price }}</td>
                    <td>{{ $product->product_quantity }}</td>
                    <td>
                        <a href="{{ route('stock.edit', $product->id) }}">Edit</a>


                        <form action="{{ route('stock.destroy', $product->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form>

                        <a href="{{ route('stock.sellForm', $product->id) }}">Sell</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
