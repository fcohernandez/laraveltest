@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method ="post" action="/users/{{$user->id}}">
                    @csrf

                        <input type="hidden" name="_method" value="PUT">

                        <input type ="text" name="name" value="{{$user->name}}">
                        <input type ="text" name="email" value="{{$user->email}}">
                        <input type ="submit" name="enviar" value="Enviar">

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

