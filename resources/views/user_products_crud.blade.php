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
                    <x-form :action="route('save_user_product_data',$product_fields[0]->product_id)" enctype="multipart/form-data">





                            @foreach ($product_fields as $product_field)




                            @if ($product_field->field_type != 'textarea' && $product_field->field_type != 'textbb' && $product_field->field_type != 'select')

                            <x-form-input type="{{$product_field->field_type}}" name="{{$product_field->field_id}}" label="{{$product_field->field_name}}" />
                            @endif

                            @if ($product_field->field_type == 'textarea')

                            <x-form-textarea label="{{$product_field->field_name}}"  name="{{$product_field->field_id}}"  placeholder="{{$product_field->field_name}}" />
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
