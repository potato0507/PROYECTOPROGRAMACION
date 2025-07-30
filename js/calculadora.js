document.getElementById("formularioEnergia").addEventListener("submit", function (e) {
  e.preventDefault();

  let anio = parseInt(document.getElementById("anio").value);
  let consumo = parseFloat(document.getElementById("consumoTotal").value);

  // Usar fetch para obtener el JSON de Colombia
  fetch('./colombia.json')
    .then(response => response.json())
    .then(data => {
      // Buscar el año ingresado
      let registro = data.find(d => d.Year === anio);

      if (registro) {
        let porcentajeRenovable = registro["Renewables (% equivalent primary energy)"];
        let consumoRenovable = (porcentajeRenovable / 100) * consumo;

        let resultado = `
  <div class="alert alert-success shadow-sm rounded-3 p-4">
    <h4 class="alert-heading mb-3">Resultado del Análisis</h4>
    <p><strong>Año:</strong> ${anio}</p>
    <p><strong>Porcentaje de energía renovable:</strong> ${porcentajeRenovable.toFixed(2)}%</p>
    <p><strong>Consumo total:</strong> ${consumo.toLocaleString()} kWh</p>
    <p><strong>Consumo renovable estimado:</strong> ${consumoRenovable.toLocaleString()} kWh</p>
  </div>
`;

        document.getElementById("resultado").innerHTML = resultado;
      } else {
        document.getElementById("resultado").innerHTML = `No hay datos para el año ${anio}.`;
      }
    })
    .catch(error => {
      console.error('Error al cargar los datos:', error);
      document.getElementById("resultado").innerHTML = "Ocurrió un error al cargar los datos.";
    });
});

