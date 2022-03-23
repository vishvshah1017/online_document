{{-- {{ Form::open(array('url' => 'foo/bar')) }}

@foreach ($product_fields as $item)

{{Form::label($item->field_type, $item->field_name)}}
{{Form::$item->field_type($item->field_type, $item->field_name)}}

@endforeach

{{ Form::close() }} --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Orderd Products') }}</div>

                <div class="card-body">

                    {{-- {{print_r($user_products_array,true)}} --}}
                    <table class="table table-light">
                        <tbody>
                            @php
                            $oldpnam = NULL;
                            $i = 1;
                            @endphp
                            @foreach ($user_products_array as $key => $value)



                            @if($value['p_name'] != $oldpnam || $oldpnam == NULL)

                                <tr> <th colspan="2"> {{$value['p_code']}} - {{$value['p_name']}} - {{$value['p_desc']}} </th>  </tr>


                            @endif
                            <tr> <th colspan="2"> {{$value['p_name']}} -  {{ $i++ }}  </tr>
                            @php
                            $oldpnam = ($value['p_name'])?$value['p_name']:NULL;
                            @endphp
                                 @foreach ($value as $key2 => $value2)
                                    @if ($key2 != 'p_name' && $key2 != 'p_code' && $key2 != 'p_desc' && $key2 != 'is_active' && $key2 != 'id' && $key2 != 'user_id' && $key2 != 'product_id')


                                    <tr>
                                        <td> {{ ucfirst(str_replace('_', ' ', $key2))   }} </td>

                                        <td>

                                            @if(is_array($value2))
                                                @foreach ($value2 as $key3 => $value3)

                                                <table>
                                                    <tr>
                                                        <td> {{ ucfirst(str_replace('-', ' ', $key3))   }}: -</td>
                                                        <td>

                                                            @if(is_file($value3))
                                                                <img src="{{asset($value3)}}" alt="{{$value3}}" width="100%" height="100px">
                                                            @else
                                                                {{$value3}}
                                                            @endif


                                                        </td>
                                                    </tr>
                                                </table>
                                                @endforeach
                                            @else

                                            {{$value2}}

                                            @endif


                                        </td>
                                    </tr>

                                    @endif
                                  @endforeach
                                  <tr>
                                    <td>
                                        Action :
                                    </td>
                                    <td>

                                        <a class="btn btn-primary" href="{{ route('viewdata',$value['upd_id']) }}" role="button">View</a>
                                        <a class="btn btn-primary" href="{{ route('edit_user_product_data',$value['upd_id']) }}" role="button">Edit</a>


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
