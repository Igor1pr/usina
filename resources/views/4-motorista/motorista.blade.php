@extends('layouts.main')
@section('title', 'Motoristas')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container" id="create-motorista-button">
    <h2 style="margin-bottom: 12px">Motoristas</h2>
    <hr>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">

    <a href="/criar-motorista" class="col-md-1 btn btn-info edit-btn" style="margin-bottom: 24px;">Criar<ion-icon name="add" style="vertical-align: middle; margin-left: .2rem"></ion-icon></a>

    @if ($drivers->isEmpty() && $search)
        <p>Não foi encontrado nenhum motorista de nome {{ $search }}. <a href="/motoristas">Mostrar todos</a></p>
    @elseif ($drivers->isEmpty())
        <p>Não há motorista cadastrado. Clique no botão acima para cadastrar um motorista.</p>
    @else

        <div class="offset search-container">
            <form action="/motoristas" method="GET" class="search-field">
                <input type="text" id="search" name="search" class="form-control" placeholder="Buscar Nome">
            </form>
        </div>

        @if ($search)
            <p>Buscando por: {{ $search }}</p>
            <p>Clique <a href="/motoristas">aqui</a> para limpar busca.</p>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr class="cabeçalho">
                    <th scope="col">Nome</th>
                    <th scope="col" class="td-tabela text-center">Tipo de Identidade</th>
                    <th scope="col" class="td-tabela text-center">Identidade</th>
                    <th scope="col" class="td-delete"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($drivers as $driver)
                    <tr>
                        <td>{{ $driver->name }}</td>
                        <td class="text">
                            @if ($driver->type_identities_id == 1)
                                CPF
                            @else
                                Nº da CNH
                            @endif
                        </td>
                        <td class="text">{{ $driver->identity }}</td>
                        <td>
                            <form action="/motoristas/{{ $driver->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete"><ion-icon name="trash-outline" style="color: red;"></ion-icon></button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    @endif
</div>

@endsection
