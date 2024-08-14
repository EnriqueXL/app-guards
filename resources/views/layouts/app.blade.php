<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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
                    <div class="navbar-logo" href="/"> <img class="logo-nav" src="{{ asset('img/logos/huella.png') }}" alt="Logo"></div>
                </div>
                <div>
                    <div class="logo_name mt-1">SeguridadCorp</div>
                </div>
            </div>        
        </div>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-home icon"></i>
                    <span class="label">Home</span>
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

        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
               
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Inicio <span class="sr-only">(actual)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

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

    {{-- js global --}}
    <script src="{{ asset('js/script-global.js') }}"></script>

    {{-- js custom page --}}
    @yield('js')

</body>

</html>
