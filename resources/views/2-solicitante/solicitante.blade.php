@extends('layouts.main')
@section('title', 'Solicitante')
@section('content')

<div class="col-md-2 offset-md-1 dashboard-title-container" id="create-solicitante-button">
    <a href="/criar-solicitante" class="col-md-5 btn btn-info edit-btn">Criar<ion-icon name="add" style="vertical-align: middle; margin-left: .2rem"></ion-icon></a>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    <table class="table table-bordered" id="solicitante-table">
        <thead>
            <tr>
                <th scope="col">Tipo</th>
                <th scope="col" class="td-tabela text-center">Setor</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>II - DE</td>
                <td class="text">DICOR</td>
            </tr>
            <tr>
                <td>III - DU</td>
                <td class="text">DEINFRA</td>
            </tr>
            <tr>
                <td>III - DU</td>
                <td class="text">DIPROJ</td>
            </tr>

        </tbody>
    </table>
</div>

@endsection
