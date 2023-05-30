<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('Acceuil') }}">Acceuil</a>
            </li>
           <li class="nav-item">
              <a class="nav-link active" href="{{ route('Ajouter') }}">Ajouter un event's</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('Liste') }}">listes des event's</a>
            </li>
            
          </ul>
        </div>
      </nav>
      

    </header>
    <main>
        @yield('content')
    </main>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>