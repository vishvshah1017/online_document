
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
                <div class="card-header">{{ __('User Product Data Create') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    {{-- <span>
                        {{print_r($user product data)}}
                    </span> --}}

                    <form method="POST" action="{{ route('user_product_data_store') }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="product id" class="form-label">Product Id</label>
                          <input type="number" class="form-control" name="product_id" id="product_id" aria-describedby="u">
                        </div>
                        <div class="mb-3">
                          <label for="user id" class="form-label">User Id</label>
                          <input type="number" class="form-control" name="user_id" id="user_id" aria-describedby="u">

                        </div>
                        <div class="mb-3">
                            <label for="field data" class="form-label">Field Data</label>
                            <input type="text" class="form-control" name="field_data" id="field_data" aria-describedby="u">

                          </div>

                        <input type="submit" class="btn btn-primary" value="Save"/>
                      </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
