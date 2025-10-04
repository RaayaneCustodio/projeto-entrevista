@extends('layout')

@section('conteudo')
<form method="POST" action="/recados">@csrf
    <label>Nome :</label>
    <input type="text" name="nome">
    <label>Mensagem :</label>
    <textarea name="mensagem" placeholder="Digite sua mensagem"></textarea>
    <button type="submit">Enviar</button>
</form>
@endsection