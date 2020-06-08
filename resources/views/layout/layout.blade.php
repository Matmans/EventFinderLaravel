
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EventFinder</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> -->

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">
    </head>
    <body>

    <nav class="navbar navbar-expand-sm navbar-default justify-content-between mb-0">
      <a class="navbar-brand" href="/"><img id="logo" src="img/logo.png"></a>

      <div>
        <a class="nav-item nav-link">
            <button class="btn btn-warning mr-3">
          My Profile
        </button>

            <button class="btn btn-warning">
          Login
        </button>
            <button class="btn btn-warning">
          Logout
        </button>
        </a>
      </div>
    </nav>
    @yield('content')
</body>
</html>