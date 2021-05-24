@extends('navbarmaster.navbar')
@extends('layouts.app')
@section('content1')
<html>

    <head>
        <link rel="stylesheet" type="text/css" href="../resources/css/candidato.css">
    </head>

    <body>
        <h1>Cadastro de Candidato</h1>
        <h4 class="h4"id="exampleModalLabel">Cadastre seu Candidato</h4>
        <div class="btn-edit">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@mdo">Cadastrar</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Cadastre sua Vaga</h5>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('criarcandidato') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nome</label>
                                <input name="nome" id="nome" placeholder="Nome" type="text" class="form-control"
                                    id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">E-mail</label>
                                <input name="email" id="email" type="text" class="form-control" placeholder="E-mail"
                            aria-label="Username" aria-describedby="basic-addon1">
                            </div>

                            <label for="recipient-name" class="col-form-label">Vaga</label>
                            <select name="id_vagas" id="id_vagas" class="form-control" aria-label=".form-select-lg example">
                                <option selected disabled>Selecione sua Vaga</option>
                                @foreach ($vagas as $items)
                                <option value="{{$items->id }}">{{$items->nome}}</option>
                                 @endforeach
                            </select>

                            <label for="recipient-name" class="col-form-label">Linguagem</label>
                            <select name="id_linguagem" id="id_linguagem" class="form-control" aria-label=".form-select-lg example">
                                <option selected disabled>Selecione sua Linguagem</option>
                                @foreach ($linguagem as $items)
                                <option value="{{$items->id }}">{{$items->nome}}</option>
                                 @endforeach
                            </select>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
        <div class="container1">
        <h2>Informações:</h2>
        </b>

        <div class="col-10">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Vaga</th>
                        <th scope="col">Linguagem</th>
                        <th scope="col">Alterar</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($candidato as $items )
                    <tr>
                        <td>{{$items->id}}</td>
                        <td>{{$items->nome}}</td>
                        <td>{{$items->email}}</td>
                        <td>{{$items->vagas}}</td>
                        <td>{{$items->linguagem}}</td>
                        <td><form action="{{ route('excluircandidato', $items->id) }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">Deletar </button>
                            <a class="btn btn-primary" href="{{ route('telaeditarcandidato', $items->id) }}">
                                {{ __('Editar') }}
                            </a></td>
                    </tr>
                    </td>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

    </body>

    </html>


@endsection
