@extends('layouts.main')
@section('title', 'Adicionar Solicitação')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-events-container" id="solicitacao-form">
    <form action="/" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-collum">

            <div class="form-group col-md-4 mt-5">
                <select class="form-control" id="driver_id" name="driver_id">
                    <option selected disabled>Motorista</option>
                    @foreach ($drivers as $driver)
                        <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-4">
                <select class="form-control" id="automobile_id" name="automobile_id">
                    <option selected disabled>Veículo</option>
                    @foreach ($automobiles as $automobile)
                        <option value="{{ $automobile->id }}">{{ $automobile->automobile_type }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-4">
                <select class="form-control" id="applicant_id" name="applicant_id">
                    <option selected disabled>Solicitante</option>
                    @foreach ($applicants as $applicant)
                        <option value="{{ $applicant->id }}">{{ $applicant->nome_solicitante }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-4">
                <input type="number" class="form-control" id="sei_number" placeholder="Número SEI" name="sei_number">
            </div>

            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="origin_address" placeholder="Endereço de Origem" name="origin_address">
            </div>

            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="delivery_address" placeholder="Endereço de Entrega" name="delivery_address">
            </div>

        </div>

        <div class="form-row" id="add-solicitacao-buttons">
            <div class="form-group">
                <button type="button" class="btn btn-secondary" onclick="window.history.back();">Voltar</button>
            </div>
            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary">Criar</button>
            </div>
        </div>
    </form>
</div>

@endsection
