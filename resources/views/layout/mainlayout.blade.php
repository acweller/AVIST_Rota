<!--
    https://5balloons.info/integrating-bootstrap-4-layout-to-laravel-project/
    https://www.cloudways.com/blog/laravel-bootstrap-template-integration/
 -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    @include('layout.partials.head')
</head>
<body>
    @include('layout.partials.nav')
    @include('layout.partials.header')
    @yield('conteudo')
    @include('layout.partials.footer')
    <div class="container">
    </div>
    @include('layout.partials.footer-scripts')
</body>
</html>
