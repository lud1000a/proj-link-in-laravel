@extends('layout.main')
@section('title', 'Adicionar Links')

@section('content')
    <hr>
    <center>
        <h1>Adicionar Link</h1>
    </center>
    <center>
        <hr>
        <br>
        <h4>Quantos Links deseja adicionar?</h4>
        <div class="container">
            <form action="/numero" method="post">
                @csrf
                <input type="number" name="numero" id="" min=0>
                <button>Enviar</button>
            </form>

        </div>
        <hr>
        <br>
        <br>
        <br>
        @if (isset($n))
            <form action='/links' method='post' class="u">
                @csrf
                <input type="hidden" name="id" value="{{ auth()->user()->id }}">
                @for ($x = 1; $x <= $n; $x++)
                    <div class="d-inline-flex p-2 bd-highlight">
                        <div class="shadow-lg p-3 mb-5 bg-white rounded">
                            <div class="itens position-relative">
                                <hr><br>
                                <span style="font-size: 18px;"
                                    class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-primary"><?= $x ?></span>
                                <span> Nome do Link: </span><br>
                                <input type='text' name='links[{{ $x }}][label]' placeholder='Nome'
                                    required><br>
                                <span> Link: </span><br>
                                <input type='text' name='links[{{ $x }}][link]' placeholder='Link' required><br>
                                <hr>
                            </div>
                        </div>
                    </div>
                @endfor
                <br>
                <div class='d-grid gap-2 col-6 mx-auto'>
                    <button class='btn btn-primary'>Enviar</button>
                </div>
            </form>
        @endif
    @endsection
