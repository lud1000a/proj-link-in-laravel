@extends('layout.main')
@section('title', 'Home')

@section('content')
    <center>
        <br>
        <h1>Editar</h1>
        <hr>
    </center>
    <div class="container">
        <form method="POST" action="/update">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $event->id }}">
            <div class="form-group">
                <label for="exampleFormControlInput1">Label</label>
                <input name="label" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $event->label }}" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Link</label>
                <input name="link" type="text" class="form-control" id="exampleFormControlInput1" value="{{ $event->link }}"
                    required>
            </div>
            <br>
            <center> <button type="submit" class='btn btn-primary'>Enviar</button></center>
        </form>
    </div>
@endsection
