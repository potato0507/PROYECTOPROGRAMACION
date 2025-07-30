<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   <link rel="stylesheet" href="css/estilos.css">
   <link rel="icon" href="img/ico.png" >
</head>

<body class="bg-light">

  <header>
    <?php include 'layout/nav.php' ?>
  </header>


    <!-- Gráfico de Barras -->
   <div class="bg-light seccion-contenido py-5">
  <div class="container py-5">
    <h1 class="text-center mb-5 fw-bold display-6 text-primary">
      Dashboard de Energías Renovables – Colombia.
    </h1>

    <div class="row g-4">
      <!-- Gráfico 1: Barras -->
      <div class="col-12 col-md-6">
        <section class="p-4 bg-white rounded-4 shadow-sm h-100">
          <h5 class="text-center mb-3 text-success-emphasis">Producción Hidroeléctrica (TWh)</h5>
          <canvas id="graficoHidroBarras" height="250"></canvas>
        </section>
      </div>

      <!-- Gráfico 2: Torta -->
      <div class="col-12 col-md-6">
        <section class="p-4 bg-white rounded-4 shadow-sm h-100">
          <h5 class="text-center mb-3 text-primary-emphasis">Participación Hidroeléctrica en el Mix Eléctrico (2021)</h5>
          <canvas id="graficoHidroTorta" height="250"></canvas>
        </section>
      </div>

      <!-- Gráfico 3: Área -->
      <div class="col-12 col-md-6">
        <section class="p-4 bg-white rounded-4 shadow-sm h-100">
          <h5 class="text-center mb-3 text-warning-emphasis">Consumo Energía Renovable (TWh)</h5>
          <canvas id="graficoAreaRenovable" height="250"></canvas>
        </section>
      </div>

      <!-- Gráfico 4: Líneas -->
      <div class="col-12 col-md-6">
        <section class="p-4 bg-white rounded-4 shadow-sm h-100">
          <h5 class="text-center mb-3 text-info-emphasis">Tendencia Capacidad Eólica – México (GW)</h5>
          <canvas id="graficoEolicaMexico" height="250"></canvas>
        </section>
      </div>
    </div>
  </div>
</div>
<footer>

<?php include 'layout/footer.php' ?>
</footer>

    <!-- JS -->
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/papaparse@5.4.1/papaparse.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="js/chart.js"></script>
</body>

</html>