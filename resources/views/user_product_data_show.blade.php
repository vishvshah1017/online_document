
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('user product data Table') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- <span>
                        {{print_r($UserProductData)}}
                    </span> --}}
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Product Id</th>
                            <th scope="col">User Id</th>
                            <th scope="col">Field Data</th>
                            <th scope="col">Last Update</th>


                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($user_product_data as $user_product_data)
                            <tr>
                                <td> {{$user_product_data->id}}</td>
                                <td> {{$user_product_data->product_id}}</td>
                                <td> {{$user_product_data->user_id}}</td>
                                <td> {{$user_product_data->field_data}}</td>
                                <td> {{$user_product_data->last_update}}</td>
                                <td>  <button type="button" class="btn btn-primary">
                                    {{ __('Edit') }}
                                </button>
                                 <button type="button" class="btn btn-danger">
                                    {{ __('Delete') }}
                                </button>
                              <button type="button" class="btn btn-info">
                                {{ __('insert') }}</button>
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
