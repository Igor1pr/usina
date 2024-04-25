@extends('layouts.main')
@section('title', 'Solicitantes')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container" id="create-solicitante-button">
    <h2 style="margin-bottom: 12px">Solicitantes</h2>
    <hr>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">

    <a href="/criar-solicitante" class="col-md-1 btn btn-info edit-btn" style="margin-bottom: 24px;">Criar<ion-icon name="add" style="vertical-align: middle; margin-left: .2rem"></ion-icon></a>

    @if ($applicants->isEmpty() && $search)
        <p>Não foi encontrado nenhum solicitante de nome {{ $search }}. <a href="/solicitantes">Mostrar todos</a></p>
    @elseif ($applicants->isEmpty())
        <p>Não há solicitante cadastrado. Clique no botão acima para cadastrar um solicitante.</p>
    @else

        <div class="offset search-container">
            <form action="/solicitantes" method="GET" class="search-field">
                <input type="text" id="search" name="search" class="form-control" placeholder="Buscar Nome">
            </form>
        </div>

        @if ($search)
            <p>Buscando por: {{ $search }}</p>
            <p>Clique <a href="/solicitantes">aqui</a> para limpar busca.</p>
        @endif

        <table class="table table-bordered" id="solicitante-table">
            <thead>
            <tr class="cabeçalho">
                    <th scope="col" style="vertical-align: middle;">Nome</th>
                    <th scope="col" class="td-tabela text-center" style="vertical-align: middle;">Tipo</th>
                    <th scope="col" class="td-tabela text-center" style="vertical-align: middle;">Setor</th>
                    <th scope="col" class="td-tabela text-center">Quantidade autorizada</th>
                    <th scope="col" class="td-delete"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($applicants as $applicant)
                    <tr>
                        <td>{{ $applicant->nome_solicitante }}</td>
                        <td class="text">
                            @if ($applicant->type_applicants_id === 1)
                                Interno
                            @else
                                Órgão Público
                            @endif
                        </td>
                        <td class="text">
                            @if($applicant->type_applicants_id === 1)
                                {{ $applicant->prefixo_setor }}
                            @else
                                {{ $applicant->setor_externo }}
                            @endif
                        </td>
                        <td class="text">{{ $applicant->quantidade_autorizada }}</td>
                        <td>
                            <form action="/solicitantes/{{ $applicant->id }}" method="POST">
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
