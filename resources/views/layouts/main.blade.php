<!DOCTYPE html>
<html lang="es">

<head>
    <title>Kaxper Lee</title>
    <meta charset="UTF-8">
    <meta name="title" content="Título de la WEB">
    <meta name="description" content="Descripción de la WEB">
    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/50de09d042.js" crossorigin="anonymous"></script>
    @vite(['resources/css/app.css','resources/css/estilos.css', 'resources/js/app.js'])
</head>

<body class="bg-dark">
    <nav class="navbar navbar-expand d-flex fixed-top align-items-center px-4 bg-dark" style="height: 100px;">

        <div class="me-auto logo bg-dark text-center" style="width:310px; border-bottom:0px solid red">
            <a class="navbar-brand link-secondary" href="#">KAXPER LEE</a>
        </div>
        @yield('menu')
    </nav>
    <div class="d-flex container-fluid m-0 px-4 bg-dark"
        style="height: 100vh;padding-top:100px; background-color: orange">
        <aside class="" style="min-width:310px;background-color: #111">
        @yield('sidebar')
        </aside>
        <section class="flex-fill" style="margin-left: 20px;border-top:0px solid #333">
            <div class="mb-4" style="border-bottom: 1px solid #333"></div>
            <article class="px-0">
            @yield('body')
            </article>
        </section>
    </div>
    <footer class="bg-dark navbar fixed-bottom navbar-expand-sm d-flex justify-content-between px-5">
        <div>Foot 1</div>
        <div>Foot 2</div>
        <div>Foot 3</div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
