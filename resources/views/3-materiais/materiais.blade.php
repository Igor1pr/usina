@extends('layouts.main')
@section('title', 'Materiais')
@section('content')

<div class="col-md-2 offset-md-1 dashboard-title-container" id="create-materiais-button">
    <a href="/criar-material" class="col-md-5 btn btn-info edit-btn">Criar<ion-icon name="add" style="vertical-align: middle; margin-left: .2rem"></ion-icon></a>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    <table class="table table-bordered">
        <thead>
            <tr class="cabeçalho">
                <th scope="col" style="vertical-align: middle;">Nome</th>
                <th scope="col" class="td-tabela text-center" style="vertical-align: middle;">Peso</th>
                <th scope="col" class="td-tabela text-center" style="vertical-align: middle;">Preço Unitário</th>
                <th scope="col" class="td-tabela text-center">Quantidade em estoque</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($materials as $material)
                <tr>
                    <td>{{ $material->material }}</td>
                    <td class="text">
                        {{ $material->peso }}
                        @if ($material->type_measure_id == 1)
                            Kg
                        @else
                            Tonelada(s)
                        @endif
                    </td>
                    <td class="text">R$ {{ number_format($material->preco_unitario, 2, ',', '.') }}</td>
                    <td class="text">{{ $material->qtd_estoque }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
