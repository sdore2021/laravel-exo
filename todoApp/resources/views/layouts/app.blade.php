<html>
    <head>
        <title>ma page </title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" crossorigin="anonymous">
    </head>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/todos">Todos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/todo-create">Todo-create</a>
      </li>
    </ul>
   
  </div>
</nav>
        <div class="container my-5">
          @if(session()->has('success'))
            <div class="alert alert-success">
                {{session()->get('success')}}
            </div>
          @endif
            @yield('content');
        </div>
    </body>
</html>