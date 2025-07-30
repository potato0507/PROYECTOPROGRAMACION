<!doctype html>
<html lang="en">

<head>
    <title>Calculadora</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/estilos.css">
<link rel="icon" href="img/ico.png" >
</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <?php include 'layout/nav.php' ?>
    </header>
    <main class="flex-fill">

        <<!-- CALCULADORA -->
            <div class="container py-5">
                <div class="card shadow-sm border-0 rounded-4 p-4">
                    <h2 class="mb-4 text-primary fw-bold text-center">Calculadora de Energía Renovable – Colombia</h2>

                    <form id="formularioEnergia" class="row g-4">
                        <div class="col-md-6">
                            <label for="anio" class="form-label">Año (1965 - 2021)</label>
                            <input type="number" class="form-control form-control-lg" id="anio" required placeholder="Ej: 2020" min="1965" max="2021">
                        </div>

                        <div class="col-md-6">
                            <label for="consumoTotal" class="form-label">Consumo eléctrico total (kWh)</label>
                            <input type="number" class="form-control form-control-lg" id="consumoTotal" required placeholder="Ej: 150000">
                        </div>

                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary btn-lg px-5">Calcular</button>
                        </div>
                    </form>

                    <!-- Resultado visual -->
                    <div class="mt-5" id="resultado"></div>
                </div>
            </div>

    </main>
    <footer>
        <?php include 'layout/footer.php' ?>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script
        src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>
    <script src="js/calculadora.js"></script>
</body>

</html>