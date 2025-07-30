const datasets = [
      {
        label: '01 - Energía Renovable',
        file: 'datos/01_renewable-share-energy.csv',
        columns: ['Entity', 'Code', 'Year', 'Renewables (% equivalent primary energy)'],
        entity: 'Colombia'
      },
      {
        label: '02 - Renovables Modernas',
        file: 'datos/02_modern-renewable-energy-consumption.csv',
        columns: ['Entity', 'Code', 'Year', 'Geo Biomass Other - TWh', 'Solar Generation - TWh', 'Wind Generation - TWh', 'Hydro Generation - TWh'],
        entity: 'Colombia'
      },
      {
        label: '05 - Hidroeléctrica (TWh)',
        file: 'datos/05_hydropower-consumption.csv',
        columns: ['Entity', 'Code', 'Year', 'Electricity from hydro (TWh)'],
        entity: 'Colombia'
      },
      {
        label: '07 - Electricidad Hidro',
        file: 'datos/07_share-electricity-hydro.csv',
        columns: ['Entity', 'Code', 'Year', 'Hydro (% electricity)'],
        entity: 'Colombia'
      },
      {
        label: '09 - Eólica Instalada (GW)',
        file: 'datos/09_cumulative-installed-wind-energy-capacity-gigawatts.csv',
        columns: ['Entity', 'Code', 'Year', 'Wind capacity (GW)'],
        entity: 'Mexico' // Porque no hay datos de Colombia
      }
    ];

    function renderFileIcons() {
      const container = document.getElementById('file-icons');
      datasets.forEach((ds, index) => {
        const col = document.createElement('div');
        col.className = 'col-md-3 col-sm-6';

        col.innerHTML = `
          <div class="file-card" onclick="loadCSV(${index})">
            <div class="file-icon">📄</div>
            <div class="file-label">${ds.label}</div>
          </div>
        `;
        container.appendChild(col);
      });
    }

    function loadCSV(index) {
      const ds = datasets[index];
      Papa.parse(ds.file, {
        header: true,
        download: true,
        complete: function (results) {
          const data = results.data.filter(row => row.Entity === ds.entity);
          const tableId = 'csv-table';

          let tableHtml = `<table id="${tableId}" class="table table-bordered table-striped w-100"><thead><tr>`;
          ds.columns.forEach(col => {
            tableHtml += `<th>${col}</th>`;
          });
          tableHtml += '</tr></thead><tbody>';

          data.forEach(row => {
            tableHtml += '<tr>';
            ds.columns.forEach(col => {
              tableHtml += `<td>${row[col] || ''}</td>`;
            });
            tableHtml += '</tr>';
          });

          tableHtml += '</tbody></table>';

          document.getElementById('table-title').textContent = ds.label;
          document.getElementById('table-wrapper').innerHTML = tableHtml;
          document.getElementById('table-container').classList.remove('d-none');

          setTimeout(() => {
            $(`#${tableId}`).DataTable({
              pageLength: 10,
              language: {
                url: "//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json"
              }
            });
          }, 100);
        },
        error: function (err) {
          console.error('Error al cargar CSV:', err);
        }
      });
    }

    renderFileIcons();