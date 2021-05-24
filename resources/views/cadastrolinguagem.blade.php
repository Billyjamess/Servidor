@extends('navbarmaster.navbar')
@extends('layouts.app')
@section('content1')

    <div class="col-5">
        <h2 id="exampleModalLabel">Cadastre sua Linguagem</h2>
        <form action="{{ route('criarlinguagem') }}" method="POST">
            @csrf
            <fieldset enable>
                <div class="mb-3">
                    <div class="input-group mb-3">

                        <input name="nome" id="nome" type="text" class="form-control" placeholder="Nome"
                            aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Inserir</button>
            </fieldset>
        </form>
    </div>

    <b>
        <h2>Informações:</h2>
    </b>
    <div class="col-6">
        <table class="table table-hover">
            <thead>

                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Linguagem de Programação</th>
                    <th scope="col">Alterar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($linguagem as $items )
                <tr>
                    <td>{{$items->id}}</td>
                    <td>{{$items->nome}}</td>
                    <td>
                        <form action="{{ route('excluirlinguagem', $items->id) }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">Deletar </button>
                        <a class="btn btn-primary" href="{{ route('telaeditarlinguagem', $items->id) }}">
                        {{ __('Editar') }}
                    </a>

                </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
@endsection
