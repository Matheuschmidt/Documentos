<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/publicar.css') }}">
    <title>Cadastrar Livro</title>
</head>
<body>
    <h1>Cadastrar Livro</h1>

    <form action="{{ route('livros.store') }}" method="POST">
        @csrf <!-- Adiciona o campo _token automaticamente -->
        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo"><br>

        <label for="autor">Autor:</label><br>
        <input type="text" id="autor" name="autor"><br>

        <label for="valor">Valor:</label><br>
        <input type="text" id="valor" name="valor"><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
