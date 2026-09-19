<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Biblioteca')</title>
    <style>
        :root { --azul: #1f4f7a; --azul-escuro: #123552; --fundo: #f4f6f8; --texto: #24313d; --borda: #d7dde3; --perigo: #a52a2a; }
        * { box-sizing: border-box; }
        body { margin: 0; background: var(--fundo); color: var(--texto); font-family: Georgia, serif; }
        .container { width: min(100% - 2rem, 960px); margin: 0 auto; }
        main { min-height: calc(100vh - 142px); padding: 2rem 0; }
        h1 { margin-top: 0; color: var(--azul-escuro); }
        .page-heading { display: flex; align-items: center; justify-content: space-between; gap: 1rem; margin-bottom: 1.5rem; }
        .button { display: inline-block; border: 1px solid transparent; border-radius: 4px; padding: .55rem .9rem; background: var(--azul); color: #fff; cursor: pointer; font: inherit; text-decoration: none; }
        .button:hover { background: var(--azul-escuro); }
        .button-secondary { background: #6a737d; }
        .button-danger { background: var(--perigo); }
        .table-wrapper { overflow-x: auto; background: #fff; border: 1px solid var(--borda); }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: .85rem; border-bottom: 1px solid var(--borda); text-align: left; }
        th { background: #e8eef3; color: var(--azul-escuro); }
        .actions { display: flex; align-items: center; gap: .5rem; }
        .inline-form { display: inline; }
        .form-card { max-width: 680px; padding: 1.5rem; background: #fff; border: 1px solid var(--borda); }
        .field { margin-bottom: 1rem; }
        label { display: block; margin-bottom: .35rem; font-weight: bold; }
        input { width: 100%; padding: .6rem; border: 1px solid #9eabb6; border-radius: 3px; font: inherit; }
        .error { margin-top: .3rem; color: var(--perigo); font-size: .9rem; }
        .alert { margin-bottom: 1rem; padding: .8rem; border: 1px solid #83b589; background: #e7f4e8; color: #24552a; }
        .empty { padding: 2rem; background: #fff; border: 1px solid var(--borda); text-align: center; }
        @media (max-width: 600px) { .page-heading { align-items: flex-start; flex-direction: column; } .actions { flex-wrap: wrap; } }
    </style>
</head>
<body>
    @include('partials.header')
    <main class="container">
        @if (session('success'))
            <div class="alert">{{ session('success') }}</div>
        @endif
        @yield('content')
    </main>
    @include('partials.footer')
</body>
</html>
