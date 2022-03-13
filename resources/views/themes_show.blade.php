
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Themes Table') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- <span>
                        {{print_r($Themes)}}
                    </span> --}}
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Themes Code</th>
                            <th scope="col">Themes Name</th>
                            <th scope="col">Themes Desc</th>
                            <th scope="col">Is Active</th>
                            <th scope="col">Link</th>


                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($themes as $themes)
                            <tr>
                                <td> {{$themes->id}}</td>
                                <td> {{$themes->t_code}}</td>
                                <td> {{$themes->t_name}}</td>
                                <td> {{$themes->t_desc}}</td>
                                <td> {{$themes->is_active}}</td>
                                <td> {{$themes->link}}</td>
                                <td>  <button type="button" class="btn btn-primary">
                                    {{ __('Edit') }}
                                </button>  <button type="button" class="btn btn-danger">
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
