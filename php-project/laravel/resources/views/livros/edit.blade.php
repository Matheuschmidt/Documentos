<!-- resources/views/livros/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro</title>
</head>
<body>
    <h1>Editar Livro</h1>
    <form action="{{ route('livros.update', $livro->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" value="{{ $livro->titulo }}"><br><br>
        <label for="autor">Autor:</label>
        <input type="text" name="autor" id="autor" value="{{ $livro->autor }}"><br><br>
        <label for="valor">Valor:</label>
        <input type="number" name="valor" id="valor" value="{{ $livro->valor }}"><br><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>
