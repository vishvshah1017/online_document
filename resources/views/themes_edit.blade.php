
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
                <div class="card-header">{{ __('Themes Update') }}</div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    {{-- <span>
                        {{print_r($themes)}}
                    </span> --}}

                    <form method="POST" action="{{ route('themes_update',$themes->id) }}"  enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="themes_code" class="form-label">Themes code</label>
                          <input type="number" class="form-control" value="{{ $themes->t_code}}" name="themes_code" id="themes_code" aria-describedby="t">
                        </div>
                        <div class="mb-3">
                          <label for="themes_name" class="form-label">Themes Name</label>
                          <input type="text" class="form-control"  value="{{ $themes->t_name}}" name="themes_name" id="themes_name" aria-describedby="t">

                        </div>
                        <div class="mb-3">
                            <label for="themes_desc" class="form-label">Themes Desc</label>
                            <input type="text" class="form-control" value="{{ $themes->t_desc }}" name="themes_desc" id="themes_desc" aria-describedby="t">

                          </div>
                          <div class="mb-3">
                            <label for="themes_link" class="form-label">Themes Link</label>
                            <input type="text" class="form-control" value="{{ $themes->link}}" name="themes_link" id="themes_link" aria-describedby="t">

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
