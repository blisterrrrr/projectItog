<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<style>
    .form-signin {
        max-width: 396px;
        padding: 15px;
    }
</style>
<body class="text-center">
<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('main') }}" class="nav-link px-2 text-secondary">Задачи</a></li>
                <li><a href="{{ route('create') }}" class="nav-link px-2 text-white">Создать задачу</a></li>
            </ul>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..."
                       aria-label="Search">
            </form>

            <div class="text-end">
                <button type="button" disabled class="btn btn-outline-light me-2"><a style="text-decoration: none; color: white" href="{{ route('login') }}">Login</a></button>
                <button type="button" class="btn btn-warning"><a style="text-decoration: none; color: black" href="{{ route('register') }}">Sign-up</a></button>
            </div>
        </div>
    </div>
</header>
<main class="form-signin w-100 m-auto">
    <form method="post" action="{{ route('post.log') }}">
        @csrf
        <h1 class="h3 mb-3 fw-normal mt-4" >Log-in</h1>

        <div class="form-floating mt-2">
            <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating mt-1">
            <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-warning mt-4" type="submit">Sign in</button>
    </form>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>
