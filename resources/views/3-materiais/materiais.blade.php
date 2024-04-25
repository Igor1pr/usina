@extends('layouts.main')
@section('title', 'Materiais')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container" id="create-materiais-button">
    <h2 style="margin-bottom: 12px">Materiais</h2>
    <hr>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">

    <a href="/criar-material" class="col-md-1 btn btn-info edit-btn" style="margin-bottom: 24px;">Criar<ion-icon name="add" style="vertical-align: middle; margin-left: .2rem"></ion-icon></a>

    @if ($materials->isEmpty() && $search)
        <p>O material {{ $search }} não foi encontrado. <a href="/materiais">Mostrar todos</a></p>
    @elseif ($materials->isEmpty())
        <p>Não há nenhum material cadastrado. Clique no botão acima para adicionar um material.</p>
    @else

        <div class="offset search-container">
            <form action="/materiais" method="GET" class="search-field">
                <input type="text" id="search" name="search" class="form-control" placeholder="Buscar Material">
            </form>
        </div>

        @if ($search)
            <p>Buscando por: {{ $search }}</p>
            <p>Clique <a href="/materiais">aqui</a> para limpar busca.</p>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr class="cabeçalho">
                    <th scope="col" style="vertical-align: middle;">Nome</th>
                    <th scope="col" class="td-tabela text-center" style="vertical-align: middle;">Peso</th>
                    <th scope="col" class="td-tabela text-center" style="vertical-align: middle;">Preço Unitário</th>
                    <th scope="col" class="td-tabela text-center">Quantidade em estoque</th>
                    <th scope="col" class="td-delete"></th>
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
                        <td>
                            <form action="/materiais/{{ $material->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-delete"><ion-icon name="trash-outline" style="color: red;"></ion-icon></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>

@endsection
