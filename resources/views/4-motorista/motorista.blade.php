@extends('layouts.main')
@section('title', 'Solicitante')
@section('content')

<div class="col-md-2 offset-md-1 dashboard-title-container" id="create-motorista-button">
    <a href="/criar-motorista" class="col-md-5 btn btn-info edit-btn">Criar<ion-icon name="add" style="vertical-align: middle; margin-left: .2rem"></ion-icon></a>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col" class="td-tabela text-center">Identidade</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>Marcos Freitas</td>
                <td class="text">123.456.789-01</td>
            </tr>

            <tr>
                <td>João Pedro</td>
                <td class="text">4.567.891</td>
            </tr>

            <tr>
                <td>Abílio José</td>
                <td class="text">789.123.456-78</td>
            </tr>

        </tbody>
    </table>
</div>

@endsection
