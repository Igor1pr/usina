@extends('layouts.main')
@section('title', 'Adicionar Automóvel')
@section('content')

<script>
    function validarPlaca() {
        var placa = document.getElementById("placa").value;
        var tipoPlaca = document.getElementById("tipoPlaca").value;

        // Expressão regular para validar placa antiga (ABC-1234)
        var regexAntiga = /^[A-Za-z]{3}-\d{4}$/;

        // Expressão regular para validar placa Mercosul (ABC1D23)
        var regexMercosul = /^[A-Za-z]{3}\d[A-Za-z]\d{2}$/;

        // Verifica se o tipo de placa selecionado é "Antiga"
        if (tipoPlaca === "Antiga") {
            if (regexAntiga.test(placa)) {
                // Placa antiga válida
                return true;
            } else {
                alert("Placa inválida! Insira uma placa no formato ABC-1234.");
                return false;
            }
        } else if (tipoPlaca === "Mercosul") {
            if (regexMercosul.test(placa)) {
                // Placa Mercosul válida
                return true;
            } else {
                alert("Placa inválida! Insira uma placa no formato ABC1D23.");
                return false;
            }
        }
    }
</script>

<div class="col-md-10 offset-md-1 dashboard-events-container" id="automovel-form">
    <form onsubmit="return validarPlaca()">
        <div class="form-collum">
            <div class="form-group col-md-4 mt-5">
                <select class="form-control" >
                    <option selected disabled>Tipo de Automóvel</option>
                    <option>I - VAN - VAN</option>
                    <option>II - CARRO - CAR</option>
                    <option>III - CAMINHÃO - CAM</option>
                    <option>IV - ÔNIBUS - ONI</option>
                </select>
            </div>
            <div class="form-group col-md-4 mt-5">
                <select class="form-control" id="tipoPlaca">
                    <option selected disabled>Tipo de placa</option>
                    <option>Antiga</option>
                    <option>Mercosul</option>
                </select>
            </div>
        </div>
        <div class="form-collum">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="placa" maxlength="8" placeholder="Placa">
            </div>
        </div>

        <div class="form-row" id="add-automovel-buttons">
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
