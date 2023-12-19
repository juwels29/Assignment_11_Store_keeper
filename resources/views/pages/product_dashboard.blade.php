@extends('layouts.app')

@section('content')

<a href="{{route ('admin.product.create') }}" class="btn btn-success m-2">Add Product</a>
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>


    @foreach ($products as $key => $data)
    <tr>    
      <td>{{$data->id}}</td>
      <td>{{$data->name}}</td>
      <td>{{$data->quantity}}</td>
      <td>{{$data->price}}</td>
      <td>
         <a href="http://127.0.0.1:8000/admin/edit/{{$data->id}}" class="btn btn-outline-success m-2">Edit</a>
        <a href="http://127.0.0.1:8000/admin/delete/{{$data->id}}" class="btn btn-outline-danger m-2">Delete</a>
        <a href="" class="btn btn-outline-info m-2">Sell</a>
      </td>                 

      


    </tr>
    @endforeach
    
  </thead>





  <!-- <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Samsung</td>
      <td></td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody> -->
</table>


@endsection