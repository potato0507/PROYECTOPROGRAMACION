document.addEventListener("DOMContentLoaded", () => {
  cargarGraficoHidroBarras();
  cargarGraficoHidroTorta();
  cargarGraficoAreaRenovable();
  cargarGraficoEolicaMexico();
});

// 1. Gráfico de Barras: Producción Hidroeléctrica (TWh)
function cargarGraficoHidroBarras() {
  Papa.parse("datos/05_hydropower-consumption.csv", {
    download: true,
    header: true,
    complete: function (results) {
      const datosColombia = results.data.filter(row => row.Entity === "Colombia");
      const anios = datosColombia.map(row => row.Year);
      const valores = datosColombia.map(row => parseFloat(row["Electricity from hydro (TWh)"]));

      new Chart(document.getElementById("graficoHidroBarras"), {
        type: "bar",
        data: {
          labels: anios,
          datasets: [{
            label: "TWh",
            data: valores,
            backgroundColor: "#4CAF50"
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: { display: false }
          },
          scales: {
            y: { beginAtZero: true }
          }
        }
      });
    }
  });
}

// 2. Gráfico de Torta: Participación Hidroeléctrica en 2021
function cargarGraficoHidroTorta() {
  Papa.parse("datos/07_share-electricity-hydro.csv", {
    download: true,
    header: true,
    complete: function (results) {
      const datosColombia = results.data.find(row => row.Entity === "Colombia" && row.Year === "2021");

      if (datosColombia) {
        const porcentajeHidro = parseFloat(datosColombia["Hydro (% electricity)"]);
        const porcentajeOtro = 100 - porcentajeHidro;

        new Chart(document.getElementById("graficoHidroTorta"), {
          type: "pie",
          data: {
            labels: ["Hidroeléctrica", "Otras fuentes"],
            datasets: [{
              data: [porcentajeHidro, porcentajeOtro],
              backgroundColor: ["#2196F3", "#FFC107"]
            }]
          },
          options: {
            responsive: true,
            plugins: {
              legend: {
                position: 'bottom'
              }
            }
          }
        });
      }
    }
  });
}

// 3. Gráfico de Área: Consumo Energía Renovable
function cargarGraficoAreaRenovable() {
  Papa.parse("datos/02_modern-renewable-energy-consumption.csv", {
    download: true,
    header: true,
    complete: function (results) {
      const datosColombia = results.data.filter(row => row.Entity === "Colombia");

      const anios = datosColombia.map(row => row.Year);
      const solar = datosColombia.map(row => parseFloat(row["Solar Generation - TWh"] || 0));
      const viento = datosColombia.map(row => parseFloat(row["Wind Generation - TWh"] || 0));
      const hidro = datosColombia.map(row => parseFloat(row["Hydro Generation - TWh"] || 0));

      new Chart(document.getElementById("graficoAreaRenovable"), {
        type: "line",
        data: {
          labels: anios,
          datasets: [
            {
              label: "Solar",
              data: solar,
              borderColor: "#fbc02d",
              backgroundColor: "rgba(251,192,45,0.2)",
              fill: true
            },
            {
              label: "Eólica",
              data: viento,
              borderColor: "#0288d1",
              backgroundColor: "rgba(2,136,209,0.2)",
              fill: true
            },
            {
              label: "Hidro",
              data: hidro,
              borderColor: "#388e3c",
              backgroundColor: "rgba(56,142,60,0.2)",
              fill: true
            }
          ]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'bottom'
            }
          },
          scales: {
            y: {
              beginAtZero: true,
              title: { display: true, text: "TWh" }
            }
          }
        }
      });
    }
  });
}
// 4. Gráfico de Línea: Energía Eólica en México
function cargarGraficoEolicaMexico() {
  Papa.parse("datos/09_cumulative-installed-wind-energy-capacity-gigawatts.csv", {
    download: true,
    header: true,
    complete: function (results) {
      const datosMexico = results.data.filter(row => row.Entity === "Mexico");

      if (!datosMexico.length) {
        console.error("No se encontraron datos para México en el archivo CSV.");
        return;
      }

      const anios = datosMexico.map(row => row.Year);
      const valores = datosMexico.map(row => parseFloat(row["Wind capacity (GW)"]));

      new Chart(document.getElementById("graficoEolicaMexico"), {
        type: "line",
        data: {
          labels: anios,
          datasets: [{
            label: "Capacidad Eólica (GW)",
            data: valores,
            borderColor: "#e91e63",
            backgroundColor: "rgba(233,30,99,0.2)",
            fill: true,
            tension: 0.3
          }]
        },
        options: {
          responsive: true,
          plugins: {
            legend: {
              position: 'bottom'
            }
          },
          scales: {
            y: {
              beginAtZero: true,
              title: { display: true, text: "GW" }
            },
            x: {
              title: { display: true, text: "Año" }
            }
          }
        }
      });
    }
  });
}
