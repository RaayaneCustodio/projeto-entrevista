@extends('layout')

@section('conteudo')
<h1> Mural de Recados</h1>
<a href="/recados/criar" class="btn-criar">Deixe seu recado</a>

@foreach ($contatos as $contato)
<div class="recado">
    
        <h3>{{ $contato->nome }}</h3>
        <p>{{ $contato->mensagem }}</p>

</div>
@endforeach  {{--  --}}
@endsection