@extends('layouts.home')

@section('content')
    <h1>Order Product List</h1>

    <div class="recent-orders">
      <h2>Products</h2>
      <table id="category_data">
        <thead>
          <tr>
            <th>#</th>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Price</th>
          </tr>
        </thead>
        <tbody>

        @if(isset($products))
          @foreach($products as $index => $product)
          <tr class="height1">
            <td>{{$index + 1}}</td>
            <td>{{$product->name}}</td>
            <td>{{ $product->pivot->quantity }}</td>
            <td>{{ number_format($product->price * $product->quantity,2,'.') }}</td>
          </tr>
          @endforeach
        @endif
        </tbody>
      </table>
      <!-- <a href="#">Show All</a> -->
    </div>
@endsection
