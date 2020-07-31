@extends('home')

@section('crear')

    @role(['admin'])
        <h1>Crear nuevo usuario</h1>

        <form method ="post" action="{{ route('users.store') }}">
        @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese su nombre">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control"  id="email" name="email" placeholder="Ingrese su email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmar Password</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    @endrole

@endsection