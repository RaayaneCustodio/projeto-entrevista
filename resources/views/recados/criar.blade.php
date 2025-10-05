@extends('layout')

@section('conteudo')
<form class="form" method="POST" action="/recados">@csrf
    <label>Nome :</label>
    <input type="text" name="nome">
    <label>Mensagem :</label>
    <textarea name="mensagem" placeholder="Digite sua mensagem"></textarea>
    <button type="submit" class="btn-criar">Enviar</button>
</form>
<a href="/" class="btn-criar">← Voltar para a lista</a>
@endsection
