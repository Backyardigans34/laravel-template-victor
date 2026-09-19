@extends('layouts.app')

@section('title', 'Cadastrar livro | Biblioteca MVC')

@section('content')
    <div class="page-heading"><h1>Cadastrar livro</h1><a class="button button-secondary" href="{{ route('livros.index') }}">Voltar</a></div>
    <form class="form-card" action="{{ route('livros.store') }}" method="POST">
        @csrf
        @include('livros._form')
        <button class="button" type="submit">Salvar livro</button>
    </form>
@endsection
