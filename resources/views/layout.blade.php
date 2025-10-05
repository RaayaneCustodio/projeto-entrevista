<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mural de Recados</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header></header>

    <main class="secao-principal">
        <div class="container">
             @yield('conteudo')
        </div>
    </main>

    <footer></footer>
</body>

</html>