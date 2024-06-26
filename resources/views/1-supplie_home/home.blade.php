@extends('layouts.main')
@section('title', 'Home')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container" id="create-button">
    <h2 style="margin-bottom: 12px">Solicitações</h2>
    <hr>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">

    <a href="/solicitacoes/criar-solicitacao" class="col-md-1 btn btn-info" style="margin-bottom: 24px;">Criar<ion-icon name="add" style="vertical-align: middle;" id="add-icon"></ion-icon></a>

    @if ($supplies->isEmpty() && $search)
        <p>Não foi encontrada nenhuma solicitação com {{ $search }}. <a href="/solicitacoes">Mostrar todas</a></p>
    @elseif ($supplies->isEmpty())
        <p>Não há nenhuma solicitação no momento. Clique no botão acima para criar uma solicitação.</p>
    @else

        <div class="offset search-container">
            <form action="/solicitacoes" method="GET" class="search-field">
                <input type="text" id="search" name="search" class="form-control" placeholder="Buscar Nº SEI">
            </form>
        </div>

        @if ($search)
            <p>Buscando por: {{ $search }}</p>
            <p>Clique <a href="/">aqui</a> para limpar busca.</p>
        @endif

        <table class="table table-bordered" id="home-table">
            <thead>
                <tr class="cabeçalho">
                    <th scope="col">Nº do SEI</th>
                    <th scope="col" class="td-status text-center">Status</th>
                    <th scope="col" class="td-action"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($supplies as $supplie)
                    <tr>
                        <td style="vertical-align: middle">{{ $supplie->sei_number }}</td>
                        <td class="text" style="vertical-align: middle;
                            @if ($supplie->status->description === 'Enviado')
                                color: rgb(1, 173, 1);
                            @elseif ($supplie->status->description === 'Processando')
                                color: #003997;
                            @endif
                        ">
                        {{ $supplie->status->description }}</td>
                        <td class="text-center" style="vertical-align: middle">
                            <a href="{{ route('solicitacao.details', $supplie->id) }}" class="more-btn"><ion-icon class="details-btn" name="eye-outline"></ion-icon></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

@endsection
