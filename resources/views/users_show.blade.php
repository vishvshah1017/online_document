
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Table') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- <span>
                        {{print_r($Users)}}
                    </span> --}}
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Email verified At</th>



                          </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $users)
                            <tr>
                                <td> {{$users->id}}</td>
                                <td> {{$users->name}}</td>
                                <td> {{$users->email}}</td>
                                <td> {{$users->email_verified_at}}</td>
                                <td>  <button type="button" class="btn btn-primary">
                                    {{ __('Edit') }}
                                </button>  <button type="button" class="btn btn-danger">
                                    {{ __('Delete') }} </button>
                                </button>  <button type="button" class="btn btn-info">
                                {{ __('insert') }}
                            </button> </td>




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
