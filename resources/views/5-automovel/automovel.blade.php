@extends('layouts.main')
@section('title', 'Automóveis')
@section('content')

<div class="col-md-2 offset-md-1 dashboard-title-container" id="create-automovel-button">
    <a href="/criar-automovel" class="col-md-5 btn btn-info edit-btn">Criar<ion-icon name="add" style="vertical-align: middle; margin-left: .2rem"></ion-icon></a>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Tipo</th>
                <th scope="col" class="td-tabela text-center">Placa</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>I - VAN</td>
                <td class="text">OFL1P45</td>
            </tr>
            <tr>
                <td>III - CAMINHÃO</td>
                <td class="text">JSP-6189</td>
            </tr>
            <tr>
                <td>II - CARRO</td>
                <td class="text">PHA6U85</td>
            </tr>
            <tr>
                <td>IV - ÔNIBUS</td>
                <td class="text">JCW-5168</td>
            </tr>

        </tbody>
    </table>
</div>

@endsection
