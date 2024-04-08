@extends('layouts.main')
@section('title', 'Adicionar Motorista')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-events-container" id="motorista-form">
    <form>
        <div class="form-collum">

            <div class="form-group col-md-4 mt-5">
                <input type="text" class="form-control" placeholder="Nome Completo">
            </div>

            <div class="form-group col-md-4">
                <select class="form-control">
                    <option selected disabled>Tipo de Identidade</option>
                    <option>CPF</option>
                    <option>RG</option>
                    <option>CNH</option>
                </select>
            </div>
        </div>
        <div class="form-collum">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" maxlength="14" placeholder="Identidade">
            </div>
        </div>

        <div class="form-row" id="add-motorista-buttons">
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
