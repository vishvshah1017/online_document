{{-- {{$user_product_data}}

<hr>
{{$product_fields}} --}}

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
                <div class="card-header">{{ __('user product data Table') }}</div>

                <div class="card-body">

                    <div class="row justify-content-center">
                        @if (session('success'))
                        <x-alert message="{{ session('success') }}" type="success" title="Success!" />

                    @endif
                    @if (session('error'))
                        <x-alert message="{{ session('error') }}" type="danger" title="Error!" />

                    @endif
                    <x-form :action="route('update_user_product_data',$user_product_data->id)" enctype="multipart/form-data">





                            @foreach ($product_fields as $product_field)



                            {{-- value="{{array_key_exists($product_field->field_id,$user_product_data->field_data)?$user_product_data->field_data[$product_field->field_id]:""}}" --}}

                            @if ($product_field->field_type != 'textarea' && $product_field->field_type != 'textbb' && $product_field->field_type != 'select' && $product_field->field_type != 'file')

                            <x-form-input type="{{$product_field->field_type}}" value="{{isset($user_product_data->field_data[$product_field->field_id])?$user_product_data->field_data[$product_field->field_id]:null }}" name="{{$product_field->field_id}}" label="{{$product_field->field_name}}" />
                            @endif

                            @if ($product_field->field_type == 'file')

                            <x-form-input type="{{$product_field->field_type}}"  name="{{$product_field->field_id}}" label="{{$product_field->field_name}}" />

                                <label> Old {{$product_field->field_name}} </label>
                                <img class="img-fluid" src="{{asset(isset($user_product_data->field_data[$product_field->field_id])?$user_product_data->field_data[$product_field->field_id]:null)}}" alt="">

                            @endif
                            @if ($product_field->field_type == 'textarea')

                            <x-form-textarea label="{{$product_field->field_name}}" default="{{isset($user_product_data->field_data[$product_field->field_id])?$user_product_data->field_data[$product_field->field_id]:null }}"  name="{{$product_field->field_id}}"  placeholder="{{$product_field->field_name}}" />
                            @endif



                            <br>

                            @endforeach

                            <x-form-submit />

                    </x-form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
