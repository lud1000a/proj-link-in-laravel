@extends('layout.main')
@section('title', 'Home')

@section('content')
    {{--
<p>{{$name}}</p>
<p>{{$id}}</p>
<p>{{$login}}</p>
--}}
<center>
<h1>Editar</h1>
</center>
<div class="container">
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nome</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Senha</label>
            <input type="password" class="form-control" id="exampleFormControlInput1" required>
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Nova Senha</label>
            <input type="password" class="form-control" id="Não obrigatório">
        </div>
        <br>
            <center> <button class='btn btn-primary'>Enviar</button></center>
    </form>
</div>
@endsection
