@extends('layouts.main')
@section('title', 'Home')
@section('content')

<div class="col-md-2 offset-md-1 dashboard-title-container" id="create-button">
    <a href="/" class="col-md-5 btn btn-info edit-btn">Criar<ion-icon name="add" style="vertical-align: middle;" id="add-icon"></ion-icon></a>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">
    <table class="table table-bordered" id="home-table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col" class="td-status text-center">Status</th>
                <th scope="col" class="td-action"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1465654</td>
                <td class="text-enviado">Enviado</td>
                <td class="text-center">
                    <a href="details" class="btn"><ion-icon name="eye-outline"></ion-icon></a>
                </td>
            </tr>
            <tr>
                <td>1178264</td>
                <td class="text">Em espera</td>
                <td class="text-center">
                    <a href="details" class="btn"><ion-icon name="eye-outline"></ion-icon></a>
                </td>
            </tr>
            <tr>
                <td>1278699</td>
                <td class="text-processando">Processando</td>
                <td class="text-center">
                    <a href="details" class="btn"><ion-icon name="eye-outline"></ion-icon></a>
                </td>
            </tr>
            <tr>
                <td>1785687</td>
                <td class="text">Em espera</td>
                <td class="text-center">
                    <a href="details" class="btn"><ion-icon name="eye-outline"></ion-icon></a>
                </td>
            </tr>
            <tr>
                <td>1334564</td>
                <td class="text-processando">Processando</td>
                <td class="text-center">
                    <a href="details" class="btn"><ion-icon name="eye-outline"></ion-icon></a>
                </td>
            </tr>
            <tr>
                <td>1674589</td>
                <td class="text-enviado">Enviado</td>
                <td class="text-center">
                    <a href="details" class="btn"><ion-icon name="eye-outline"></ion-icon></a>
                </td>
            </tr>
            <tr>
                <td>1029835</td>
                <td class="text-enviado">Enviado</td>
                <td class="text-center">
                    <a href="details" class="btn"><ion-icon name="eye-outline"></ion-icon></a>
                </td>
            </tr>
            <tr>
                <td>1587463</td>
                <td class="text">Em Espera</td>
                <td class="text-center">
                    <a href="details" class="btn"><ion-icon name="eye-outline"></ion-icon></a>
                </td>
            </tr>
            <tr>
                <td>1531796</td>
                <td class="text-enviado">Enviado</td>
                <td class="text-center">
                    <a href="details" class="btn"><ion-icon name="eye-outline"></ion-icon></a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
