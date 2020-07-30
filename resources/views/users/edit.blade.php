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

                    <h1>Editar usuario</h1>

                    <form method ="post" action="/users/{{$user->id}}">
                    @csrf

                        <input type="hidden" name="_method" value="PUT">

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre" value="{{$user->name}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control"  id="email" name="email" placeholder="Ingrese su email" value="{{$user->email}}">
                        </div>
                        <div class="form-group">
                            <label for="rol">Rol usuario</label>
                            <select class="form-control" id="rol" name="rol">
                                <option value=1>Administrador</option>
                                <option value=2>Común</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

