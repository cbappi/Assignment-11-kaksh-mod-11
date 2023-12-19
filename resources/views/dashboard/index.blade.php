@extends('master')

@section('title', 'Dashboard')

@section('content')
<div class="row">

<h1>Dashboard</h1>

<div class="container text-center">
    <div class="row justify-content-md-center">
      <div class="col col-md-3 card">
            <div class="card-header">Today's Total Amount</div>
            <div class="card-body">
                {{ $todayTotal }}
            </div>
      </div>
      <div class="col col-md-3 card">
            <div class="card-header">Yesterday's Total Amount</div>
            <div class="card-body">
                {{ $yesterdayTotal }}
            </div>
      </div>
      <div class="col col-md-3 card">
            <div class="card-header">This Month's Total Amount</div>
            <div class="card-body">
                {{ $thisMonthTotal }}
            </div>
      </div>

      <div class="col col-md-3 card">
            <div class="card-header">Last Month's Total Amount</div>
            <div class="card-body">
                {{ $lastMonthTotal }}
            </div>
      </div>
    </div>

</div>

{{-- <div class="col-10 m-auto">

    <table class="table">
        <thead>
          <tr>

            <th scope="col">#</th>
            <th scope="col">Sell date</th>
            <th scope="col">Product name</th>
            <th scope="col">Stock qty</th>
            <th scope="col">Sell quantity</th>
            <th scope="col">Balance qty</th>
            <th scope="col">Unit price</th>
            <th scope="col">Sell amount</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($sells as $sell)
            <tr>
                <th scope="row">{{ $sell->id }}</th>
                <td>{{ $sell->sell_date }}</td>
                <td>{{ $sell->product->product_name }}</td>
                <td>{{ $sell->product->quantity }}</td>
                <td>{{ $sell->sell_qty }}</td>
                <td>{{ $sell->product->quantity - $sell->sell_qty }}</td>
                <td>{{ $sell->product->unit_price }}</td>
                <td>{{ $sell->product->unit_price*$sell->sell_qty }}</td>







              </tr>
            @endforeach
        </tbody>
    </table>
</div> --}}

{{-- <body>
    <div class="card">
        <div class="card-header">Today's Total Amount</div>
        <div class="card-body">
            {{ $todayTotal }}
        </div>
    </div>

    <div class="card">
        <div class="card-header">Yesterday's Total Amount</div>
        <div class="card-body">
            {{ $yesterdayTotal }}
        </div>
    </div>

    <div class="card">
        <div class="card-header">This Month's Total Amount</div>
        <div class="card-body">
            {{ $thisMonthTotal }}
        </div>
    </div>

    <div class="card">
        <div class="card-header">Last Month's Total Amount</div>
        <div class="card-body">
            {{ $lastMonthTotal }}
        </div>
    </div>
</body> --}}

@endsection


