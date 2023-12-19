@extends('layouts.app')

@section('content')


<a href="{{route ('product.dashboard') }}" class="btn btn-success m-2">Back</a>
<div class="bg-secondary rounded h-100 p-4">
                            
                            <form method="POST" action="{{ route ('admin.product.store')}}">
                                @csrf
                                <div class="mb-3">
                                    <label for= "formFileMultiple" class="form-label">
                                        <strong>Name</strong>
                                    </label>
                                    <input type="text" class="form-control"name="name" value="">
                                    <!-- @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror -->
                                </div>
                                <div class="mb-3">
                                <label for= "formFileMultiple" class="form-label">
                                <strong>Quantity</strong>
                            </label>
                                    <input type="text" class="form-control" name="quantity" value="">
                                    <!-- @error('quantity')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror -->
                                </div>
                                <div class="mb-3">
                                <label for= "formFileMultiple" class="form-label">
                                <strong>Price</strong>
                            </label>
                                    <input type="text" class="form-control" name="price" value="">
                                    <!-- @error('price')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror -->
                                </div>
                                <button type="submit" class="btn btn-primary">Add Product</button>











                            </form>
                        </div>






@endsection