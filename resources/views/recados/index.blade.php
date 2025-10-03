<h1> Mural de Recados</h1>
<a href="/recados/criar"> Deixe seu recado</a>

@foreach ($contatos as $contato)
    <h3>{{ $contato->nome }}</h3>
    <p>{{ $contato->mensagem }}</p>
    <hr>
@endforeach  {{-- <-- A linha que faltava para fechar o laço --}}