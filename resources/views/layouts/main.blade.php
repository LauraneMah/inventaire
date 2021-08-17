<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Inventory</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">

                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link"  href="rooms" role="button" aria-haspopup="true" aria-expanded="false">Rooms</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  href="materials" role="button" aria-haspopup="true" aria-expanded="false">Material</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="people" role="button" aria-haspopup="true" aria-expanded="false">Persons</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="material_rooms" role="button" aria-haspopup="true" aria-expanded="false">Material rooms</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link" href="material_people" role="button" aria-haspopup="true" aria-expanded="false">Material People</a>

                </li>
            </ul>
        </div>
    </div>
</nav>

@yield('content')

<footer class="mastfoot mt-auto">
    <div class="inner">
        <p>Copyright : Laurane Mahieu - 3ème INFO</p>
    </div>
</footer>
</body>
</html>


