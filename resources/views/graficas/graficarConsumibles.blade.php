<body>
<div id="container"></div>
</body>
<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">

    var consumabls = <?php echo json_encode($consumabls) ?>;
    Highcharts.chart('container', {
        title: {
            text: 'Consumibles registrados en el sistema'
        },
        subtitle: {
            text: 'Gráfica'
        },
        xAxis: {
            categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic']
        },
        yAxis: {
            title: {
                text: 'Nuevos consumibles'
            }
        },

        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [
            {
                name: 'Nuevos consumibles',
                data: consumabls
            }],

        resposive: {
            rules: [
                {
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
        }
    });
</script>