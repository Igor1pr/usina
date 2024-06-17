@extends('layouts.main')
@section('title', 'Editando solicitação: ' . $supplie->id)
@section('content')

<div class="col-md-10 offset-md-1 mb-5" id="solicitacao-form">
    <form action="/solicitacoes/details/update/{{ $supplie->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-collum">
            <div class="edit-div-title">
                <h3 id="edit-blade-title">Editando: {{ $supplie->sei_number }}</h3>
            </div>

            <div class="form-group col-md-4 mt-4">
                <p>Motorista atual: {{ $supplie->driver->name }}</p>
                <select class="form-control" id="driver_id" name="driver_id">
                    <option selected disabled>Motorista</option>
                    @foreach ($drivers as $driver)
                    <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-4">
                <p>Automóvel atual: {{ $supplie->automobile->automobile_type }} placa {{ $supplie->automobile->placa }}</p>
                <select class="form-control" id="automobile_id" name="automobile_id">
                    <option selected disabled>Veículo</option>
                    @foreach ($automobiles as $automobile)
                        <option value="{{ $automobile->id }}">{{ $automobile->automobile_type }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-4">
                <p>Solicitante atual: {{ $supplie->applicant->nome_solicitante }}</p>
                <select class="form-control" id="applicant_id" name="applicant_id">
                    <option selected disabled>Solicitante</option>
                    @foreach ($applicants as $applicant)
                        <option value="{{ $applicant->id }}">{{ $applicant->nome_solicitante }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-4">
                <p>Material atual: {{ $supplie->material->material }}</p>
                <select class="form-control" id="material_id" name="material_id">
                    <option selected disabled>Material</option>
                    @foreach ($materials as $material)
                        <option value="{{ $material->id }}">{{ $material->material }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-4">
                <input type="number" value="{{ $supplie->sei_number }}" class="form-control" id="sei_number" maxlength="11" placeholder="Número SEI" name="sei_number">
            </div>

            <div class="form-group col-md-4">
                <input type="text" value="{{ $supplie->origin_address }}" class="form-control" id="origin_address" placeholder="Endereço de Origem" name="origin_address">
            </div>

            <div class="form-group col-md-4">
                <input type="text" value="{{ $supplie->delivery_address }}" class="form-control" id="delivery_address" placeholder="Endereço de Entrega" name="delivery_address">
                <input type="number" class="form-control" id="status_id" name="status_id" value="1" style="display: none;">
            </div>

        </div>

        <div class="form-row" id="add-solicitacao-buttons">
            <div class="form-group">
                <button type="button" class="btn btn-secondary" onclick="window.history.back();">Voltar</button>
            </div>
            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>
</div>

@endsection
