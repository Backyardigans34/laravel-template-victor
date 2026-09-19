@extends('layouts.app')

@section('title', 'Livros | Biblioteca MVC')

@section('content')
    <div class="page-heading">
        <div><h1>Livros cadastrados</h1><p>Gerencie o acervo da biblioteca.</p></div>
        <a class="button" href="{{ route('livros.create') }}">Cadastrar livro</a>
    </div>

    @forelse ($livros as $livro)
        @if ($loop->first)
            <div class="table-wrapper"><table><thead><tr><th>Titulo</th><th>Autor</th><th>Ano</th><th>ISBN</th><th>Acoes</th></tr></thead><tbody>
        @endif
        <tr>
            <td>{{ $livro->titulo }}</td><td>{{ $livro->autor }}</td><td>{{ $livro->ano_publicacao }}</td><td>{{ $livro->isbn ?: '-' }}</td>
            <td><div class="actions">
                <a class="button button-secondary" href="{{ route('livros.edit', $livro) }}">Editar</a>
                <form class="inline-form" action="{{ route('livros.destroy', $livro) }}" method="POST" onsubmit="return confirm('Deseja excluir este livro?');">
                    @csrf
                    @method('DELETE')
                    <button class="button button-danger" type="submit">Excluir</button>
                </form>
            </div></td>
        </tr>
        @if ($loop->last)
            </tbody></table></div>
        @endif
    @empty
        <div class="empty"><p>Nenhum livro cadastrado.</p><a class="button" href="{{ route('livros.create') }}">Cadastrar o primeiro livro</a></div>
    @endforelse
@endsection
