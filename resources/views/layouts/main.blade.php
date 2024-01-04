<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ $title }} </title>
    <link rel="stylesheet" href="<?= URL::to('/'); ?>/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="/" class="navbar-brand">Books</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="/" class="nav-link {{ ($title === 'Home') ? 'active' : '' }} ">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/categories" class="nav-link {{ ($title === 'Category') ? 'active' : '' }}">Category</a>
                    </li>
                    <li class="nav-item">
                        <a href="/books" class="nav-link {{ ($title === 'Books' ? 'active' : '') }}">Books</a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link {{ ($title === 'About') ? 'active' : '' }}">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="<?= URL::to('/'); ?>/js/bootstrap.min.js"></script>
</body>
</html>