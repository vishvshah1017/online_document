
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                                <td> {{$user_product_data->p_name}}</td>
                                <td> {{$user_product_data->user_id}}</td>
                                <td>
                                     {{-- {{$user_product_data->field_data}} --}}



                                    @foreach (jsonToArray($user_product_data->field_data) as $key3 => $value3)

                                    <table>
                                        <tr>
                                            <td> {{ ucfirst(str_replace('-', ' ', $key3))   }}: -</td>
                                            <td>


                                                @if(is_file($value3) && isFileImage($value3))
                                                    <img src="{{asset($value3)}}" alt="{{$value3}}" width="100%" height="100px">
                                                @elseif (is_file($value3))
                                                <a download="MyPdf" href="{{ asset($value3) }}">Download CV</a>
                                                @else
                                                    {{$value3}}
                                                @endif





                                            </td>
                                        </tr>
                                    </table>
                                    @endforeach

                                </td>
                                <td> {{$user_product_data->last_update}}</td>
                                <td>
                                <div class="btn-group" role="group" aria-label="Button group">
                                    <a href="{{route('user_product_data_edit',$user_product_data->id)}}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('edit_user_product_data',$user_product_data->id) }}" class="btn btn-info">Edit Card info</a>
                                    <a href="{{route('user_product_data_edit',$user_product_data->id)}}" class="btn btn-danger">Delete</a>
                                </div>

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
