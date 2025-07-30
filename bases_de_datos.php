<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bases de datos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/PapaParse/5.4.1/papaparse.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   <link rel="icon" href="img/ico.png" >
    <style>
    .file-card {
      border: 1px solid #ccc;
      border-radius: 12px;
      padding: 20px;
      text-align: center;
      cursor: pointer;
      transition: all 0.2s ease;
    }
    .file-card:hover {
      background-color: #f0f8ff;
      transform: scale(1.02);
    }
    .file-icon {
      font-size: 3rem;
      color: #0d6efd;
    }
    .file-label {
      margin-top: 10px;
      font-weight: 500;
    }
  </style>
</head>
<body class="d-flex flex-column min-vh-100">

 <header>
    <?php include 'layout/nav.php' ?>
  </header>
 <div class="container py-5">
    <h2 class="text-center mb-4 pt-5 text-primary">Archivos de Datos Energéticos</h2>

    <!-- Vista de íconos tipo archivo -->
    <div class="row g-4 mb-5" id="file-icons">
      <!-- Se insertan los íconos desde JS -->
    </div>

    <!-- Contenedor para la tabla de datos -->
    <div id="table-container" class="card shadow-sm p-3 d-none">
      <h4 id="table-title" class="mb-3"></h4>
      <div id="table-wrapper" class="table-responsive"></div>
    </div>
  </div>

  <footer>
    <?php include 'layout/footer.php' ?>
  </footer>
  <!-- JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/papaparse@5.4.1/papaparse.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="js/bases_de_datos.js"></script>
</body>
</html>
