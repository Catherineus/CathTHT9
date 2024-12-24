<!DOCTYPE html>
<html>
<head>
    <title>Cath Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand ms-3" href="{{ route('home') }}">Cath Store</a>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{ route('product.lipstick') }}">Lipstick</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('product.cushion') }}">Cushion</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('product.blushOn') }}">Blush On</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('blog') }}">Blog</a></li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
