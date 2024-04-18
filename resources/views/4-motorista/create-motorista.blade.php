@extends('layouts.main')
@section('title', 'Adicionar Motorista')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-events-container" id="motorista-form">
    <form action="/motoristas" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-collum">

            <div class="form-group col-md-4 mt-5">
                <input type="text" name="name" class="form-control" placeholder="Nome Completo">
            </div>

            <div class="form-group col-md-4">
                <select class="form-control" name="type_identities_id">
                    <option selected disabled>Tipo de Identidade</option>
                    @foreach ($typeIdentities as $typeIdentitie)
                        <option value="{{ $typeIdentitie->id }}">{{ $typeIdentitie->description }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-collum">
            <div class="form-group col-md-4">
                <input type="text" name="identity" class="form-control" maxlength="14" placeholder="Identidade">
            </div>
        </div>

        <div class="form-row" id="add-motorista-buttons">
            <div class="form-group">
                <button type="button" class="btn btn-secondary" onclick="window.history.back();">Voltar</button>
            </div>
            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary">Criar</button>
            </div>
        </div>
    </form>
</div>

@endsection
