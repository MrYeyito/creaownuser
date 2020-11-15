@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Has iniciado sesión!
                    <br>
                    <br>

                    <a href="{{ url('/user') }}/{{ Auth::user()->id }}" class="btn btn-xs btn-info pull-right">VER MI REGISTRO EN FORMATO JSON</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
