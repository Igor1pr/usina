@extends('layouts.main')
@section('title', 'Materiais')
@section('content')

<div class="col-md-2 offset-md-1 dashboard-title-container" id="create-materiais-button">
    <a href="/criar-materiais" class="col-md-5 btn btn-info edit-btn">Criar<ion-icon name="add" style="vertical-align: middle; margin-left: .2rem"></ion-icon></a>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" style="vertical-align: middle;">Nome</th>
                <th scope="col" class="td-tabela text-center" style="vertical-align: middle;">Peso</th>
                <th scope="col" class="td-tabela text-center" style="vertical-align: middle;">Preço Unitário</th>
                <th scope="col" class="td-tabela text-center">Quantidade em estoque</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>I - CBUQ</td>
                <td class="text">500 kg</td>
                <td class="text">R$ 175,00</td>
                <td class="text">16</td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
