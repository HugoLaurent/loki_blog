<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- On appelle la section title créée dans les vues -->
    <title>@yield('title')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button data-mdb-collapse-init class="navbar-toggler" type="button"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                    LOKI
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Projects</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>


        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->

    <main class="container my-5 p-3">
        <!-- On appelle la section content créée dans les vues -->
        @yield('content')
    </main>

    <footer class="bg-body-tertiary text-center fixed-bottom">
        <!-- Grid container -->
        <div class="container p-4">
            <!-- Section: Images -->
            <section class="">
                <div class="row">
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div data-mdb-ripple-init class="bg-image hover-overlay shadow-1-strong rounded"
                            data-ripple-color="light">
                            <img src="https://random-cat-assets-r2.hats-land.com/api/v1/images" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div data-mdb-ripple-init class="bg-image hover-overlay shadow-1-strong rounded"
                            data-ripple-color="light">
                            <img src="https://random-cat-assets-r2.hats-land.com/api/v1/images" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div data-mdb-ripple-init class="bg-image hover-overlay shadow-1-strong rounded"
                            data-ripple-color="light">
                            <img src="https://random-cat-assets-r2.hats-land.com/api/v1/images" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div data-mdb-ripple-init class="bg-image hover-overlay shadow-1-strong rounded"
                            data-ripple-color="light">
                            <img src="https://random-cat-assets-r2.hats-land.com/api/v1/images" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div data-mdb-ripple-init class="bg-image hover-overlay shadow-1-strong rounded"
                            data-ripple-color="light">
                            <img src="https://random-cat-assets-r2.hats-land.com/api/v1/images" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                        <div data-mdb-ripple-init class="bg-image hover-overlay shadow-1-strong rounded"
                            data-ripple-color="light">
                            <img src="https://random-cat-assets-r2.hats-land.com/api/v1/images" class="w-100" />
                            <a href="#!">
                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section: Images -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2020 Copyright:
            <p class="text-body">CrazyCat</p>
        </div>
        <!-- Copyright -->
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
