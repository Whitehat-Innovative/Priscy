@extends('layouts.app')
@section('slot')
    @foreach ($routes as $route)
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Routes</th>
            <th scope="col">From</th>
            <th scope="col">To</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">{{ $route->id }}</th>
            <td>{{ $route->from }}</td>
            <td>{{ $route->to }}</td>
            <td>₦{{number_format($route->price )}}</td>
          </tr>
        </tbody>
      </table>

    @endforeach

    
@endsection