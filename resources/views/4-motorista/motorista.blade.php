@extends('layouts.main')
@section('title', 'Motoristas')
@section('content')

<div class="col-md-2 offset-md-1 dashboard-title-container" id="create-motorista-button">
    <a href="/criar-motorista" class="col-md-5 btn btn-info edit-btn">Criar<ion-icon name="add" style="vertical-align: middle; margin-left: .2rem"></ion-icon></a>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">
    <table class="table table-bordered">
        <thead>
            <tr class="cabeçalho">
                <th scope="col">Nome</th>
                <th scope="col" class="td-tabela text-center">Tipo de Identidade</th>
                <th scope="col" class="td-tabela text-center">Identidade</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($drivers as $driver)
                <tr>
                    <td>{{ $driver->name }}</td>
                    <td class="text">
                        @if ($driver->type_identities_id == 1)
                            CPF
                        @else
                            Nº da CNH
                        @endif
                    </td>
                    <td class="text">{{ $driver->identity }}</td>
                </tr>
            @endforeach

        </tbody>
    </table>
</div>

@endsection
