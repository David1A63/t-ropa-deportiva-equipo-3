<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Recursos-->
    <!--Es necesario que haya una linea de vite que indica al motor que está es una plantila que debemos actualizar--->
    @yield('head')

    <!--Icono de página-->
    <link rel="icon" href="{{ asset('img/sport.png')}}" />
    <!--Librerias de bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
</head>

<body class="bg-dark">
    <!--Barra de navegación-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a id="1" class="navbar-brand fw-bold text-primary" style="font-size: 30px;" href="/">Fit Sport</a>
            <!--Toggler Button Responsive-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light fw-bold" style="font-size: 20px;" href="/">Ropa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light fw-bold" style="font-size: 20px;" href="/">Calzado</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light fw-bold" href="#" role="button" style="font-size: 20px;" data-bs-toggle="dropdown" aria-expanded="false">Link</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/">Action</a></li>
                            <li><a class="dropdown-item" href="/">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <!--Revisar la manera de incluir una barra de búsqueda-->
                <!------<div class="container-fluid" style="justify-content: center; width: 60%;">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" style="" type="search" placeholder="Buscar..." aria-label="Search">
                        <button class="btn btn-outline-light fw-bold bg-primary" type="submit"><i class="fa-sharp fa-solid fa-magnifying-glass" style="color: #f7f7f7;"></i></button>
                    </form>
                </div>--------->
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light fw-bold" style="font-size: 20px;" href="/">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light fw-bold" style="font-size: 20px;" href="/">Registro</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('contenidoPrincipal')

    <!--Pie de página-->
    <footer class="bg-dark" style="justify-content: center; margin-bottom: 2%;">
        <p class="text-light fw-bold" style="margin-left: 46%">©Fit Sport 2023</p>
    </footer>

    @yield('contenidoJs')
    <!--Scripts de la página-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
