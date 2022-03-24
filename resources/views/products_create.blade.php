
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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Products Create') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- <span>
                        {{print_r($products)}}
                    </span> --}}

                    <form method="POST" action="{{ route('products_store') }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="p_code" class="form-label">Product code</label>
                          <input type="text" class="form-control" name="p_code" id="p_code" aria-describedby="p">
                        </div>
                        <div class="mb-3">
                          <label for="p_name" class="form-label">Product Name</label>
                          <input type="text" class="form-control" name="p_name" id="p_name" aria-describedby="p">

                        </div>
                        <div class="mb-3">
                            <label for="p_desc" class="form-label">Product_Desc</label>
                            <input type="text" class="form-control" name="p_desc" id="p_desc" aria-describedby="p">

                          </div>

                          <div class="mb-3">
                            <label for="theme_id" class="form-label">Theme</label>

                             <select class="form-control" name="theme_id" id="theme_id">
                                 @foreach ($themes as $theme)
                                    <option value="{{$theme->id}}" >{{$theme->t_name}} </option>
                                @endforeach
                             </select>
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
