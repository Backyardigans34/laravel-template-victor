<div class="field">
    <label for="titulo">Titulo</label>
    <input id="titulo" name="titulo" type="text" value="{{ old('titulo', isset($livro) ? $livro->titulo : '') }}" required>
    @error('titulo')<div class="error">{{ $message }}</div>@enderror
</div>
<div class="field">
    <label for="autor">Autor</label>
    <input id="autor" name="autor" type="text" value="{{ old('autor', isset($livro) ? $livro->autor : '') }}" required>
    @error('autor')<div class="error">{{ $message }}</div>@enderror
</div>
<div class="field">
    <label for="ano_publicacao">Ano de publicacao</label>
    <input id="ano_publicacao" name="ano_publicacao" type="number" min="1000" max="{{ now()->year }}" value="{{ old('ano_publicacao', isset($livro) ? $livro->ano_publicacao : '') }}" required>
    @error('ano_publicacao')<div class="error">{{ $message }}</div>@enderror
</div>
<div class="field">
    <label for="isbn">ISBN</label>
    <input id="isbn" name="isbn" type="text" value="{{ old('isbn', isset($livro) ? $livro->isbn : '') }}">
    @error('isbn')<div class="error">{{ $message }}</div>@enderror
</div>
