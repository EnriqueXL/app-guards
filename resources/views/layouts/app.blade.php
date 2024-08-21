<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS 4.6 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    {{-- Bootstrap CSS 5.1.3 --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    {{-- FontAwesome --}}
    <script src="https://kit.fontawesome.com/e3b4af92a1.js" crossorigin="anonymous"></script>

    {{-- Tipografia --}}

    {{-- css custom global --}}
    <link rel="stylesheet" href="{{ asset('css/style-global.css') }}">

    {{-- css custom page --}}
    @yield('css')

    <title>
        @yield('title', 'Home')
    </title>
</head>

<body>



    <!--side bar-->
    <div class="sidebar" id="sidebar">
        <div class="row mt-3">
            <div class="col text-center">
                <div class="logo-details">
                    <div class="navbar-logo"> <img class="logo-nav"
                            src="{{ asset('img/logos/huella.png') }}" alt="Logo">
                    </div>
                </div>
                <div>
                    <div class="logo_name mt-1">SeguridadCorp</div>
                </div>
            </div>
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-home icon"></i>
                    <span class="label">Home</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                    aria-controls="collapseExample">
                    <i class="fas fa-user-friends icon"></i>

                    <span class="label">Empleados</span>
                    <i class="fas fa-caret-down icon-collapse"></i>
                </a>
                <div class="collapse collapse-div" id="collapseExample">
                    <div class="content-collapse">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employe.index') }}">
                                    <i class="fas fa-user-friends icon"></i>
                                    <span class="label">Listado</span>
                                </a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('employe.create') }}">
                                    <i class="fas fa-user-plus icon"></i>
                                    <span class="label">Agregar</span>
                                </a>

                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-chart-line icon"></i>
                    <span class="label">Statistics</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-user icon"></i>
                    <span class="label">Profile</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-envelope icon"></i>
                    <span class="label">Messages</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-cog icon"></i>
                    <span class="label">Settings</span>
                </a>
            </li>
        </ul>
    </div>
    <!--toggle button-->
    <div class="toggle-btn" id="toggle-btn">
        <i class="fas fa-bars"></i>
    </div>
    <div class="content">
        <!-- Contenido principal -->


        @yield('content')

        {{-- Footer --}}
        <footer class="footer text-center py-3">
            <div class="container">
                <p>&copy; 2024 SeguridadCorp. Todos los derechos reservados.</p>
                <p>Síguenos en:
                    <a href="#" class="text-dark ml-2"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-dark ml-2"><i class="fab fa-twitter"></i></a>
                </p>
            </div>
        </footer>
    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    {{-- Bootstrap JS 5.1.3 --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}

    {{-- js global --}}
    <script src="{{ asset('js/script-global.js') }}"></script>

    {{-- js custom page --}}
    @yield('js')

</body>

</html>
