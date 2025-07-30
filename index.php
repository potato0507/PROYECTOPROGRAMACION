<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
   <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
  <header>
    <?php include 'layout/nav.php' ?>
  </header>
  <main>

   <!-- SECCIÓN CON VIDEO DE FONDO Y TEXTO ENCIMA -->
<section class="seccion1 position-relative">
  <video autoplay muted loop playsinline class="fondo-video">
      <source src="videos/represa.mp4" type="video/mp4">
      Tu navegador no admite videos en HTML5.
      </video>

  <!-- Texto centrado sobre el video -->
  <div class="texto-encima text-center text-white">
    <h1>Energía Hidroeléctrica</h1>
    <p>El poder del agua para un futuro sostenible</p>
  </div>


</section>

<!-- SECCIÓN: ¿Qué es la energía hidráulica? -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="row g-5 align-items-center">
      
      <!-- Texto -->
      <div class="col-lg-6">
        <h2 class="fw-bold mb-4 text-primary">¿Qué es la energía hidráulica?</h2>
        <p>
          La energía hidráulica es un tipo de energía que aprovecha el movimiento del agua. También llamada energía hídrica, permite obtener electricidad gracias al aprovechamiento de la energía cinética y potencial de las corrientes o saltos de agua.
        </p>
        <p>
          Se trata de una energía limpia y renovable que utiliza la fuerza de arroyos, ríos y saltos de agua. Comúnmente, se asocia con las centrales hidroeléctricas ubicadas en presas o embalses.
        </p>
      </div>

      <!-- Imágenes -->
      <div class="col-lg-6">
        <div class="row g-3">
          <div class="col-6">
            <img src="img/1.jpg" alt="Imagen 1" class="img-fluid rounded shadow-sm w-100 h-100">
          </div>
          <div class="col-6">
            <img src="img/2.jpg" alt="Imagen 2" class="img-fluid rounded shadow-sm w-100">
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- SECCIÓN: Explicación técnica -->
<section class="py-5">
  <div class="container">
    <div class="row g-5 align-items-center">
      
      <!-- Texto -->
      <div class="col-lg-6">
        <h3 class="fw-semibold mb-4 text-primary">¿Cómo funciona una central hidroeléctrica?</h3>
        <p>
          La energía hidroeléctrica tiene dos aliados simples pero fundamentales: el agua y la gravedad. 
          Todas las centrales utilizan <strong>la fuerza de la gravedad</strong> para acelerar el agua y liberar su energía potencial.
        </p>
        <p>
          El agua se almacena en un embalse creado por una presa. Desde ahí, grandes tuberías dirigen el flujo hacia las turbinas ubicadas aguas abajo. 
        </p>
        <p>
          El desnivel generado acelera el agua, que al llegar a las turbinas las hace girar. Estas están conectadas a un alternador que produce electricidad, 
          la cual pasa por un transformador que ajusta el voltaje para enviarla a la red eléctrica.
        </p>
      </div>

      <!-- Imagen esquema -->
      <div class="col-lg-6 text-center">
        <img src="videos/central hidroelectrica.jpg" alt="Esquema Central Hidroeléctrica" class="img-fluid rounded shadow w-100" style="max-height: 400px; object-fit: cover;">
      </div>

    </div>
  </div>
</section>



  </main>
  <footer>
    <?php include 'layout/footer.php' ?>
  </footer>


</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
  integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
  integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>
