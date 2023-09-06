@extends('layout.main')
@section('title', 'Home')

@section('content')
<center>
<hr>
<h1>
    Seus Links
</h1>
<hr>
<div class="user-datas">
<p>Nome: {{auth()->user()->name}}</p><br>
<p>Login: {{auth()->user()->email}}</p>
</div>
<button>Editar</button>
</center>
    <div class="container">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Label</th>
                    <th>Links</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->label }}</td>
                        <td>{{ $data->link }}</td>
                        <td>
                            <button>Alterar</button>
                            <button>Deletar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
