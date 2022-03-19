
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Products Table') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- <span>
                        {{print_r($products)}}
                    </span> --}}
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Product Code</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Product Desc</th>
                            <th scope="col">Is Active</th>

                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($products as $product)
                            <tr>
                                <td> {{$product->id}}</td>
                                <td> {{$product->p_code}}</td>
                                <td> {{$product->p_name}}</td>
                                <td> {{$product->p_desc}}</td>
                                <td> {{$product->is_active}}</td>
                               {{-- <td>  <button type="button" class="btn btn-primary">
                                    {{ __('Edit') }}
                                </button>  <button type="button" class="btn btn-danger">
                                    {{ __('Delete') }}
                                </button>
                            </button>  <button type="button" class="btn btn-info">
                                {{ __('Insert') }}
                            </button>
                             </td>---}}

                             <td>
                                <a href="{{route('products_edit',$product->id)}}" class="btn btn-success">Edit</a>
                                <a href="{{route('products_edit',$product->id)}}" class="btn btn-danger">Delete</a>
                            </td>



                              </tr>
                            @endforeach


                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
