@extends('layouts.main')
@section('title', 'Adicionar Materiais')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-events-container" id="materiais-form">
    <form>
        <div class="form-collum">

            <div class="form-group col-md-4 mt-5">
                <input type="text" class="form-control" placeholder="Nome">
            </div>

            <div class="form-group col-md-2">
                <select class="form-control" id="medidaPeso">
                    <option selected disabled>Medida de Peso</option>
                    <option value="kg">Kg</option>
                    <option value="tonelada">Tonelada</option>
                </select>
            </div>

            <div class="form-group col-md-4">
                <div class="input-group">
                    <input type="number" class="form-control" id="peso" placeholder="Peso">
                </div>
            </div>

            <div class="form-group col-md-4">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text">R$</span>
                    </div>
                    <input type="float" class="form-control" id="preco" placeholder="Preço Unitário">
                </div>
            </div>

            <div class="form-group col-md-4">
                <input type="number" class="form-control" placeholder="Quantidade em estoque">
            </div>

        </div>

        <div class="form-row" id="add-materiais-buttons">
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
