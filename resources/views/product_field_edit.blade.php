
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if (session('success'))
        <x-alert message="{{ session('success') }}" type="success" title="Success!" />

    @endif
    @if (session('error'))
        <x-alert message="{{ session('error') }}" type="danger" title="Error!" />

    @endif
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Product field Edit') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- <span>
                        {{print_r($productfield)}}
                    </span> --}}


                    <form method="POST" action="{{ route('product_field_update',$product_field->id) }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="themes_code" class="form-label">Field Name</label>
                          <input type="text" class="form-control" value="{{ $product_field->field_name}}" name="field_name" id="field_name" aria-describedby="f">
                        </div>
                        <div class="mb-3">
                          <label for="themes_name" class="form-label">Field Type</label>
                          <input type="text" class="form-control" value="{{ $product_field->field_type}}" name="field_type" id="field_type" aria-describedby="f">

                        </div>
                        <div class="mb-3">
                            <label for="field_id" class="form-label">Field Id</label>
                            <input type="number" class="form-control" value="{{ $product_field->field_id}}"name="field_id" id="field_id" aria-describedby="f">

                          </div>
                          <div class="mb-3">
                            <label for="field_classes" class="form-label">Field Classes</label>
                            <input type="text" class="form-control" value="{{ $product_field->field_classes}}" name="field_classes" id="field_classes" aria-describedby="f">

                          </div>
                          <div class="mb-3">
                            <label for="product_id" class="form-label">Product Id</label>
                            <input type="number" class="form-control" value="{{ $product_field->product_id}}" name="product_id" id="product_id" aria-describedby="f">

                          </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" name="is_active" class="form-check-input" id="is_active">
                          <label class="form-check-label" for="is_active">Is active ?</label>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Save"/>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
