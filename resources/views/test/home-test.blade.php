@extends('layouts.main')
@section('title', 'Ocorrências')
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Ocorrências Registradas</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($ocurrences) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tipo</th>
                <th scope="col">Nível de risco</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ocurrences as $ocurrence)
                <tr>
                    <td scropt="row">{{ $loop->index + 1 }}</td>
                    <td><a href="/ocurrences/{{ $ocurrence->id }}">{{ $ocurrence->type }}</a></td>
                    <td>{{ ($ocurrence->risk) }}</td>
                    <td>
                        <a href="/ocurrences/{{ $ocurrence->id }}" class="col-md-5 btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Marcar como concluída</a>
                        <form action="/ocurrences/{{ $ocurrence->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="col-md-5 btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p>Ainda não foram registradas ocorrências</p>
    @endif
</div>

@endsection
