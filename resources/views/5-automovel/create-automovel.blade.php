@extends('layouts.main')
@section('title', 'Adicionar Automóvel')
@section('content')

<script>
    function validarPlaca() {
        var placa = document.getElementById("placa").value;
        var tipoPlaca = document.getElementById("tipo_placa").value;

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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('#automobile_type').change(function () {
            var tipoVeiculo = $(this).val();
            var prefixo = '';

            // Determina o prefixo com base no tipo de veículo selecionado
            switch (tipoVeiculo) {
                case 'I - VAN':
                    prefixo = 'VAN';
                    break;
                case 'II - CARRO':
                    prefixo = 'CAR';
                    break;
                case 'III - CAMINHÃO':
                    prefixo = 'CAM';
                    break;
                case 'IV - ÔNIBUS':
                    prefixo = 'ONI';
                    break;
                // Adicione mais casos conforme necessário para outros tipos de veículo
            }

            // Preenche o campo de prefixo com o valor determinado
            $('#prefixo').val(prefixo);
        });
    });
</script>

<div class="col-md-10 offset-md-1 dashboard-events-container" id="automovel-form">
    <form onsubmit="return validarPlaca()" action="/automovel" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-collum">
            <div class="form-group col-md-4 mt-5">
                <select class="form-control" name="automobile_type" id="automobile_type">
                    <option selected disabled>Tipo de Automóvel</option>
                    <option value="I - VAN" >I - VAN</option>
                    <option value="II - CARRO" >II - CARRO</option>
                    <option value="III - CAMINHÃO" >III - CAMINHÃO</option>
                    <option value="IV - ÔNIBUS" >IV - ÔNIBUS</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="prefixo" name="prefixo" placeholder="Prefixo" readonly>
            </div>
            <div class="form-group col-md-4 mt-5">
                <select class="form-control" id="tipo_placa" name="tipo_placa">
                    <option selected disabled>Tipo de placa</option>
                    <option value="Antiga">Antiga</option>
                    <option value="Mercosul">Mercosul</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="placa" maxlength="8" name="placa" placeholder="Placa">
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
