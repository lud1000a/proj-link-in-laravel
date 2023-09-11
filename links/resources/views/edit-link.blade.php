@extends('layout.main')
@section('title', 'Home')

@section('content')
{{--
<p>{{$label}}</p>
<p>{{$link}}</p>
<p>{{$linkid}}</p>
--}}
<center>
    <h1>Editar</h1>
</center>
    <div class="container">
        <form>
            <div class="form-group">
                <label for="exampleFormControlInput1">Label</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Link</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <br>
               <center> <button class='btn btn-primary'>Enviar</button></center>
        </form>
    </div>
@endsection