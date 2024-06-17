@extends('layouts.main')
@section('title', 'Detalhes')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container" id="details-table-title">
    <h2>ID: {{ $supplie->id }}</h2>
    <div class="status-div" style="
        @if ($supplie->status->description === 'Enviado')
            background-color: rgb(1, 173, 1);
        @elseif ($supplie->status->description === 'Processando')
            background-color: #003997;
        @elseif ($supplie->status->description === 'Em Espera')
            background-color: rgb(120, 120, 120);
        @endif
    ">
        <h2 class="status-h2">Status: {{ $supplie->status->description }}</h2>
    </div>
</div>

<div class="col-md-10 offset-md-1 card text-left" id="details-card-body">
    <div class="card-body">
        <p class="card-text">Solicitante: {{ $supplie->applicant->nome_solicitante }}</p>
        <p class="card-text">Nº do SEI: {{ $supplie->sei_number }}</p>
        <p class="card-text">Material: {{ $supplie->material->material }}</p>
        <p class="card-text">Data da Solicitação: {{ $supplie->created_at->format('d/m/Y') }} às {{ $supplie->created_at->format('H:i') }}</p>
        <p class="card-text">Motorista: {{ $supplie->driver->name }}</p>
        <p class="card-text">Automóvel: <br/>
        {{ $supplie->automobile->automobile_type }} <br/>
        Placa: {{ $supplie->automobile->placa }}</p>
        <p class="card-text">Endereço de Origem: {{ $supplie->origin_address }}</p>
        <p class="card-text">Endereço de Destino: {{ $supplie->delivery_address }}</p>
        <br>
        <div class="form-group" style="display: flex;">
            <button type="button" class="btn btn-secondary" id="back-button" onclick="window.history.back();">Voltar</button>
            <a href="{{ route('solicitacao.edit', $supplie->id) }}" class="btn btn-primary" id="edit-button">Editar</a>
            <form action="/solicitacoes/details/{{ $supplie->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" id="delete-button">Excluir</button>
            </form>
        </div>
    </div>
</div>

@endsection
