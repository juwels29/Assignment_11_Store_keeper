@extends('layouts.app')

@section('content')



<div class="bg-secondary rounded h-100 p-4">
                            
                            <form method="POST" action="">
                                @foreach ($product_data as $key => $data)

                                @csrf
                                <div class="mb-3">
                                    <label for= "formFileMultiple" class="form-label">
                                        <strong>Name</strong>
                                    </label>
                                    <input type="text" class="form-control" name="name" placeholder="{{$data->name}}">
                                    <!-- @error('name')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror -->
                                </div>
                                <div class="mb-3">
                                <label for= "formFileMultiple" class="form-label">
                                <strong>Quantity</strong>
                            </label>
                                    <input type="text" class="form-control" name="quantity" placeholder="{{$data->quantity}}">
                                    <!-- @error('quantity')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror -->
                                </div>
                                <div class="mb-3">
                                <label for= "formFileMultiple" class="form-label">
                                <strong>Price</strong>
                            </label>
                                    <input type="text" class="form-control" name="price" placeholder="{{$data->price}}">
                                    <!-- @error('price')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror -->
                                </div>
                                <input type="submit" name="submit" value="Submit" class="btn btn-primary"/>

                                @endforeach









                            </form>
                        </div>






@endsection