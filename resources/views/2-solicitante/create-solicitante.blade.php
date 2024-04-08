@extends('layouts.main')
@section('title', 'Criar solicitante')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-events-container" id="solicitante-form">
    <form>
        <div class="form-collum">
            <div class="form-group col-md-4 mt-5">
                <select class="form-control" id="dropdown1-solicitante">
                    <option selected disabled>Tipo</option>
                    <option>Órgão Público</option>
                    <option>Interno</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <select class="form-control" id="dropdown2-solicitante">
                    <option selected disabled>Setor</option>
                    <option>I - PRESIDÊNCIA - PRES</option>
                    <option>II - DIRETORIA DE EDIFICAÇÕES - DE</option>
                    <option>III - DIRETORIA DE URBANIZAÇÃO - DU</option>
                    <option>IV - DIRETORIA ADMINISTRATIVA - DA</option>
                    <option>V - DIRETORIA FINANCEIRA - DF</option>
                </select>
            </div>
            <div class="form-group col-md-4 mt-5">
                <label for="dropdown3">Quantidade Autorizada:</label>
                <select class="form-control" id="dropdown3-solicitante">
                    <option selected disabled>Material</option>
                    <option>Item 1</option>
                    <option>Item 2</option>
                    <option>Item 3</option>
                </select>
            </div>
        </div>
        <div class="form-collum">
            <div class="form-group col-md-4">
                <input type="number" class="form-control" id="numberField" placeholder="Quantidade">
            </div>
        </div>

        <div class="form-row" id="add-solicitante-buttons">
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
