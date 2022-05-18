<!--grafico empresa-->
<script>
    var url = "{{ url('grafico/charts') }}";
    var municipios = new Array();
    var totals = new Array();
    $(document).ready(function() {
        $.get(url, function(response) {
            response.forEach(function(data) {
                municipios.push(data.municipio);
                totals.push(data.total);
            });
            const ctx = document.getElementById('grafico_empresa');
            const grafico_empresa = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: municipios,
                    datasets: [{
                        label: 'Número de empresas',
                        data: totals,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                    }]
                },
                options: {
                    responsive: true,
                    legend: {
                        position: 'bottom',
                    },
                }
            });
        });
    });
</script>
