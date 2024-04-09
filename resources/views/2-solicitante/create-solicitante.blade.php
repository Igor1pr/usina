@extends('layouts.main')
@section('title', 'Criar solicitante')
@section('content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        // Esconde os elementos 'dropdown-setor' e 'setorField' ao carregar a página
        $('#dropdown-setor').hide();
        $('#setorField').hide();

        // Adiciona um listener para o evento de mudança no dropdown 'dropdown-tipo'
        $('#dropdown-tipo').change(function () {
            // Verifica o valor selecionado
            var selectedOption = $(this).val();

            // Esconde ambos os elementos por padrão
            $('#dropdown-setor').hide();
            $('#setorField').hide();

            // Mostra o elemento apropriado dependendo da seleção do usuário
            if (selectedOption === 'Órgão Público') {
                $('#setorField').show();
            } else if (selectedOption === 'Interno') {
                $('#dropdown-setor').show();
            }
        });
    });
</script>

<div class="col-md-10 offset-md-1 dashboard-events-container" id="solicitante-form">
    <form>
        <div class="form-collum">
            <div class="form-group col-md-4 mt-5">
                <select class="form-control" id="dropdown-tipo">
                    <option selected disabled>Tipo</option>
                    <option>Órgão Público</option>
                    <option>Interno</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <select class="form-control" id="dropdown-setor">
                    <option selected disabled>Setor</option>
                    <option>I - PRESIDÊNCIA - PRES</option>
                    <option>II - DIRETORIA DE EDIFICAÇÕES - DE</option>
                    <option>III - DIRETORIA DE URBANIZAÇÃO - DU</option>
                    <option>IV - DIRETORIA ADMINISTRATIVA - DA</option>
                    <option>V - DIRETORIA FINANCEIRA - DF</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="setorField" placeholder="Insira o nome do Órgão Público">
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
