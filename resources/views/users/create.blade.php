@extends('home')

@section('crear')

    <form method ="post" action="{{ route('users.store') }}">
    @csrf
        <input type ="text" name="name">
        <input type ="text" name="email">
        <input type ="text" name="password">
        <input type ="text" name="password_confirmation">
        <input type ="submit" name="enviar" value="Enviar">

    </form>

@endsection