@extends('layouts.main')
@section('title', 'Automóveis')
@section('content')

<div class="col-md-2 offset-md-1 dashboard-title-container" id="create-automovel-button">
    <h2 style="margin-bottom: 32px">Automóveis</h2>
    <a href="/criar-automovel" class="col-md-5 btn btn-info edit-btn">Criar<ion-icon name="add" style="vertical-align: middle; margin-left: .2rem"></ion-icon></a>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">

    @if ($automobiles->isEmpty() && $search)
        <p>Não foi encontrado automóvel de placa {{ $search }}. <a href="/automoveis">Mostrar todos</a></p>
    @elseif ($automobiles->isEmpty())
        <p>Não há nenhum automóvel cadastrado. Clique no botão acima para cadastrar um automóvel.</p>
    @else

        <div class="offset search-container">
            <form action="/automoveis" method="GET" class="search-field">
                <input type="text" id="search" name="search" class="form-control" placeholder="Buscar Placa">
            </form>
        </div>

        @if ($search)
            <p>Buscando por automóvel de placa: {{ $search }}</p>
            <p>Clique <a href="/automoveis">aqui</a> para limpar busca.</p>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr class="cabeçalho">
                    <th scope="col">Tipo</th>
                    <th scope="col" class="td-tabela text-center">Placa</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($automobiles as $automobile)
                    <tr>
                        <td>{{ $automobile->automobile_type }}</td>
                        <td class="text">{{ $automobile->placa }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

@endsection
