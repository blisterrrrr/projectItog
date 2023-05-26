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
<body>
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
                @guest()
                    <button type="button" class="btn btn-outline-light me-2"><a
                            style="text-decoration: none; color: white" href="{{ route('login') }}">Login</a></button>
                    <button type="button" class="btn btn-warning"><a style="text-decoration: none; color: black"
                                                                     href="{{ route('register') }}">Sign-up</a></button>
                @endguest
                @auth()
                    <button type="button" class="btn btn-outline-light me-2"><a style="text-decoration: none; color: white" >{{ auth()->user()->name }}</a></button>
                    <button type="button" class="btn btn-warning"><a style="text-decoration: none; color: black" href="{{ route('logout') }}">Log out</a></button>
                    @endauth
            </div>
        </div>
    </div>
</header>
<main>

    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
                @foreach($tasks as $task)
                    <div class="col">
                        <div class="card shadow-sm">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                 xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                 preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title>
                                <rect width="100%" height="100%" fill="#55595c"></rect>
                                <text x="50%" y="50%" fill="#eceeef" dy=".3em"> {{ $task->name }} </text>
                            </svg>
                            <div class="card-body">
                                <p class="card-text">{{ $task->desc }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        @if($task->user != auth()->user())
                                            <button type="button"
                                                    class="btn btn-sm btn-outline-secondary">{{ $task->user->name }}</button>
                                        @endif
                                        @if($task->user->email == auth()->user()->email)
                                                <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        @endif

                                    </div>
                                    <small
                                        class="text-body-secondary">{{ new \Carbon\Carbon($task->created_at) }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    {{$tasks->links()}}
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>
