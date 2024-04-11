@extends('layouts.main')
@section('title', 'Criar solicitante')
@section('content')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        // Esconde o elemento 'setorField' ao carregar a página
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

<script>

    $(document).ready(function () {
        $('#prefixo_setor').hide();

        // Evento change para o dropdown-setor
        $('#dropdown-setor').change(function () {
            var setorSelecionado = $(this).val();
            var prefixo_setor = '';

            // Determine o prefixo com base no setor selecionado
            switch (setorSelecionado) {
                case 'I - PRESIDÊNCIA - PRES':
                    prefixo_setor = 'PRES';
                    break;
                case 'II - DIRETORIA DE EDIFICAÇÕES - DE':
                    prefixo_setor = 'DE';
                    break;
                case 'III - DIRETORIA DE URBANIZAÇÃO - DU':
                    prefixo_setor = 'DU';
                    break;
                case 'IV - DIRETORIA ADMINISTRATIVA - DA':
                    prefixo_setor = 'DA';
                    break;
                case 'V - DIRETORIA FINANCEIRA - DF':
                    prefixo_setor = 'DF';
                    break;
                // Adicione mais casos conforme necessário
            }

            // Preencha o campo de prefixo com o valor determinado
            $('#prefixo_setor').val(prefixo_setor);
        });
    });

</script>

<div class="col-md-10 offset-md-1 dashboard-events-container" id="solicitante-form">
    <form action="/solicitantes" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-collum">
            <div class="form-group col-md-4 mt-5">
                <input type="text" class="form-control" id="nome_solicitante" placeholder="Nome Completo" name="nome_solicitante">
            </div>
            <div class="form-group col-md-4">
                <select class="form-control" id="dropdown-tipo" name="tipo_setor">
                    <option selected disabled>Tipo</option>
                    <option value="Órgão Público">Órgão Público</option>
                    <option value="Interno">Interno</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <select class="form-control" id="dropdown-setor" name="setor_interno">
                    <option selected disabled>Setor</option>
                    <option value="I - PRESIDÊNCIA - PRES">I - PRESIDÊNCIA - PRES</option>
                    <option value="II - DIRETORIA DE EDIFICAÇÕES - DE">II - DIRETORIA DE EDIFICAÇÕES - DE</option>
                    <option value="III - DIRETORIA DE URBANIZAÇÃO - DU">III - DIRETORIA DE URBANIZAÇÃO - DU</option>
                    <option value="IV - DIRETORIA ADMINISTRATIVA - DA">IV - DIRETORIA ADMINISTRATIVA - DA</option>
                    <option value="V - DIRETORIA FINANCEIRA - DF">V - DIRETORIA FINANCEIRA - DF</option>
                </select>
                <input type="text" class="form-control" id="prefixo_setor" name="prefixo_setor" readonly style="display: none;">
            </div>
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="setorField" name="setor_externo" placeholder="Insira o nome do Órgão Público">
            </div>
        </div>
        <div class="form-collum">
            <div class="form-group col-md-4">
                <input type="number" class="form-control" id="numberField" placeholder="Quantidade autorizada" name="quantidade_autorizada">
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
