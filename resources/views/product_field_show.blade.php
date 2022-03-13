
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product field Table') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- <span>
                        {{print_r($productfield)}}
                    </span> --}}
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Field Name</th>
                            <th scope="col">Field Type</th>
                            <th scope="col">Field ID</th>
                            <th scope="col">Field Classes</th>
                            <th scope="col">product Id</th>
                            <th scope="col">Is Active</th>
                            <th scope="col">Action</th>

                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($product_field as $product_field)
                            <tr>
                                <td> {{$product_field->id}}</td>
                                <td> {{$product_field->field_name}}</td>
                                <td> {{$product_field->field_type}}</td>
                                <td> {{$product_field->field_id}}</td>
                                <td> {{$product_field->field_classes}}</td>
                                <td> {{$product_field->product_id}}</td>
                                <td> {{$product_field->is_active}}</td>
                                <td>  <button type="button" class="btn btn-primary">
                                    {{ __('Edit') }}
                                </button>  <button type="button" class="btn btn-danger">
                                    {{ __('Delete') }}
                                </button>
                            <button type="button" class="btn btn-info">
                                {{ __('Insert') }}</button>
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
