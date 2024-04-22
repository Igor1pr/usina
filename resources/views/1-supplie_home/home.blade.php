@extends('layouts.main')
@section('title', 'Home')
@section('content')

<div class="col-md-2 offset-md-1 dashboard-title-container" id="create-button">
    <a href="/criar-solicitacao" class="col-md-5 btn btn-info edit-btn">Criar<ion-icon name="add" style="vertical-align: middle;" id="add-icon"></ion-icon></a>
</div>

<div class="col-md-10 offset-md-1 dashboard-events-container">
    <table class="table table-bordered" id="home-table">
        <thead>
            <tr class="cabeçalho">
                <th scope="col">Nº do SEI</th>
                <th scope="col" class="td-status text-center">Status</th>
                <th scope="col" class="td-action"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($supplies as $supplie)
                <tr>
                    <td style="vertical-align: middle">{{ $supplie->sei_number }}</td>
                    <td class="text" style="vertical-align: middle;
                        @if ($supplie->status->description === 'Enviado')
                            color: rgb(1, 173, 1);
                        @elseif ($supplie->status->description === 'Processando')
                            color: #003997;
                        @endif
                    ">
                    {{ $supplie->status->description }}</td>
                    <td class="text-center" style="vertical-align: middle">
                        <a href="{{ route('solicitacao.details', $supplie->id) }}" class="btn"><ion-icon name="eye-outline"></ion-icon></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
