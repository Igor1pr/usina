@extends('layouts.main')
@section('title', 'Automóveis')
@section('content')

<div class="col-md-2 offset-md-1 dashboard-title-container" id="create-automovel-button">
    <a href="/criar-automovel" class="col-md-5 btn btn-info edit-btn">Criar<ion-icon name="add" style="vertical-align: middle; margin-left: .2rem"></ion-icon></a>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">
    <table class="table table-bordered">
        <thead>
            <tr class="cabeçalho">
                <th scope="col">Tipo</th>
                <th scope="col" class="td-tabela text-center">Placa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($automobiles as $automobile)
                <tr>
                    <td>{{ $automobile->automobile_type }}</td>
                    <td class="text">{{ $automobile->placa }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
