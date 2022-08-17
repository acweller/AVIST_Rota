<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('layout.partials.head')
</head>
<body>
    @include('layout.partials.nav')
    <main role="main" class="container">
        <div class="row">
            @include('layout.partials.header')
            @yield('conteudo')
            @include('layout.partials.footer')
            @include('layout.partials.footer-scripts')
        </div>
    </main>
</body>
</html>
