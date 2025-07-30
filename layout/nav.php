<nav class="navbar navbar-expand-lg fixed-top shadow-lg" style="background-color: #0369A1;">
  <div class="container-fluid">
    <a class="navbar-brand d-flex align-items-center text-white fw-bold" href="index.php">
      <img src="img/ico.png" alt="Logo" width="44" height="44" class="me-2"> HidroEnergía
    </a>

    <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto text-center">
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php">Inicio</a>
        </li>

        <!-- Dropdown Fundamentos con fondo azul y letras blancas -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="fundamentosDropdown" role="button"
            data-bs-toggle="dropdown" aria-expanded="false">
            Fundamentos
          </a>
          <ul class="dropdown-menu text-center" aria-labelledby="fundamentosDropdown" style="background-color: #0369A1; border: none;">
            <li>
              <a class="dropdown-item text-white fw-semibold" href="historia.php"
                style="transition: background-color 0.3s;"
                onmouseover="this.style.backgroundColor='#0284C7'"
                onmouseout="this.style.backgroundColor='transparent'">
                Historia
              </a>
            </li>
            <li>
              <a class="dropdown-item text-white fw-semibold" href="funcionamiento.php"
                style="transition: background-color 0.3s;"
                onmouseover="this.style.backgroundColor='#0284C7'"
                onmouseout="this.style.backgroundColor='transparent'">
                Funcionamiento
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-item"><a class="nav-link text-white" href="beneficios.php">Beneficios</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="impacto_ambiental.php">Impacto ambiental</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="dashboard.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="calculadora.php">Calculadora</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="bases_de_datos.php">Bases de datos</a></li>
        <li class="nav-item"><a class="nav-link text-white" href="sobre_nosotros.php">Sobre nosotros</a></li>
      </ul>
    </div>
  </div>
</nav>