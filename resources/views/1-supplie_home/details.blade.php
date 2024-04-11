@extends('layouts.main')
@section('title', 'detalhes')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container" id="details-table-title">
    <h2>ID: 1465654</h2>
    <h2>Status: Em Espera</h2>
</div>

<div class="col-md-10 offset-md-1 card text-left" id="details-card-body">
    <div class="card-body">
      <p class="card-text">Solicitante: DEINF</p>
      <p class="card-text">Nº do SEI: 4569865165146</p>
      <p class="card-text">Material: CBUQ - 500kg</p>
      <p class="card-text">Data: 03/04/24</p>
      <p class="card-text">Motorista: Filipe</p>
      <p class="card-text">Automóvel: Caminhão</p>
      <br>
      <p class="card-text">Endereço de Origem: Asa Sul</p>
      <p class="card-text">Endereço de Destino: Asa Norte</p>
      <br>
      <a href="/" class="btn btn-primary">Voltar</a>
      <a href="#" class="btn btn-primary" id="edit-button">Editar</a>
    </div>
</div>

@endsection
