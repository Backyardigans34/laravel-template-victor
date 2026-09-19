@extends('layouts.app')

@section('title', 'Editar livro | Biblioteca MVC')

@section('content')
    <div class="page-heading"><h1>Editar livro</h1><a class="button button-secondary" href="{{ route('livros.index') }}">Voltar</a></div>
    <form class="form-card" action="{{ route('livros.update', $livro) }}" method="POST">
        @csrf
        @method('PUT')
        @include('livros._form', ['livro' => $livro])
        <button class="button" type="submit">Atualizar livro</button>
    </form>
@endsection
