@extends('master')

@section('title', 'Dashboard')

@section('content')
<div class="row">

        {{-- <div class="d-flex justify-content-end my-4">
            <a href="{{ route('sell.create') }}" class="btn btn-info">Create Sell</a>
        </div> --}}


<h1>Sells Transection History</h1>

<div class="col-10 m-auto">

    <table class="table">
        <thead>
          <tr>

            <th scope="col">#</th>
            <th scope="col">Sell date</th>
            <th scope="col">Product name</th>
            <th scope="col">Sell quantity</th>
            <th scope="col">Sell amount</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($sells as $sell)
            <tr>
                <th scope="row">{{ $sell->id }}</th>
                <td>{{ $sell->sell_date }}</td>
                <td>{{ $sell->product_name }}</td>
                <td>{{ $sell->sell_quantity }}</td>
                <td>{{ $sell->sell_amount}}</td>
              </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

