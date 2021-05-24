@extends('navbarmaster.navbar')
@extends('layouts.app')
@section('content1')
<div class="col-5">
    <h2 id="exampleModalLabel">Editar sua Linguagem {{$id}}</h2>
    <form action="{{ route('editarlinguagem', $id) }}" method="POST">
        @csrf
        <fieldset enable>
            <div class="mb-3">
                <div class="input-group mb-3">
                    <input  name="nome" id="nome" type="text" class="form-control" placeholder="Nome"
                        aria-label="Username" aria-describedby="basic-addon1">
                </div>
            </div>
            <a class="btn btn-primary" href="{{ route('voltartelalinguagem') }}">
                {{ __('Voltar') }}</a>
            <button type="submit" class="btn btn-primary">Salvar</button>

        </fieldset>
    </form>
</div>

@endsection
