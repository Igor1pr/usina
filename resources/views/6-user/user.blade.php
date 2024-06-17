@extends('layouts.main')
@section('title', 'Usuário')
@section('content')

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }
    .container {
        max-width: 1000px;
        height: 530px;
        margin: 20px auto;
        padding: 80px;
        background-color: #0954aa3b;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1 {
        color: #333;
        text-align: center;
        font-size: 20px
    }
    .user-info {
        text-align: center;
        margin-bottom: 20px;
    }
    .user-info img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 10px;
    }
    .user-info p {
        margin: 0;
        font-size: 18px;
    }
    .button-container {
        text-align: center;
        display: flex;
        flex-direction: row;
        justify-content: center;
        margin-top: 48px;
    }
    .btn-user {
        display: inline-block;
        padding: 10px 20px;
        margin: 5px;
        background-color: #007bff;
        color: #fff;
        text-decoration: none;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        max-height: 46px
    }
    .btn-user:hover {
        background-color: #0056b3;
        color: #fff;
        text-decoration-line: none;
        transition-duration: 0.3s;
        transition-timing-function: ease-in-out;
    }
</style>

<div class="container">
    <h1>Setor: DEINF</h1>
    <h1>Autorização: Admin</h1>
    <div class="user-info">
        <img src="../../.././img/user.jpg" alt="Foto do Usuário">
        <br>
        <p>Usuário</p>
        <p>teste123@gmail.com</p>
    </div>
    <div class="button-container">
        <a href="" class="btn-user">Editar Perfil</a>
        <a href="" class="btn-user">Alterar Senha</a>
        <form action="/logout" method="POST">
            @csrf
            <a href="/logout" class="btn-user" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
        </form>
    </div>
</div>

@endsection
