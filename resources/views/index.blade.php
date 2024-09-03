<!DOCTYPE html>
<html>
<head>
    <title>Indicators Dashboard</title>
</head>
<body>
    <h1>Indicadores Calidad</h1>

    <!--<img class="holi" src="https://belver.clavijero.edu.mx/cursos/nme/semestre5/probyest_1/s2/contenidos/07.png">-->
    
    <style>

        .holi {
            max-width: 200px;
            max-height: 200px;
        }

        #myDoughnutChart{
          float: center;
            max-width: 200px;
            max-height: 200px;
           
        }
        #chart1,
        #chart2,
        #chart3,
        #chart4 {
            max-width: 200px;
            max-height: 200px;
        }
    </style>

    <!-- Gráfico Doughnut -->
     <center>
    <canvas id="myDoughnutChart"></canvas>
 
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.min.js"></script>

    <script>
        var ctx = document.getElementById('myDoughnutChart').getContext('2d');
        var myDoughnutChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: [
                    @foreach($indicators as $indicator)
                        '{{ $indicator->period }}',
                    @endforeach
                ],
                datasets: [{
                    label: 'Indicators',
                    data: [
                        @foreach($indicators as $indicator)
                            {{ $indicator->result }},
                        @endforeach
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });
    </script>
 </center>
    <div style="display: flex; justify-content: space-around; margin-top: 50px;">
    <center> 
       
        <h6>KAPI'S FORJAS</h6>
        <canvas id="chart1"></canvas>
        <canvas id="chart2"></canvas>
        <canvas id="chart3"></canvas>
        <canvas id="chart4"></canvas>
    </div>

    <script>
        var ctx1 = document.getElementById('chart1').getContext('2d');
        var chart1 = new Chart(ctx1, {
            type: 'doughnut',
            data: {
                labels: ['Promedio', 'Meta', 'Resultado'],
                datasets: [{
                    data: [70, 20, 30],
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                }]
            }
        });

        var ctx2 = document.getElementById('chart2').getContext('2d');
        var chart2 = new Chart(ctx2, {
            type: 'doughnut',
            data: {
                labels: ['Periodo', 'Meta', 'Resultado'],
                datasets: [{
                    data: [60, 25, 40],
                    backgroundColor: ['#4BC0C0', '#9966FF', '#FF9F40'],
                }]
            }
        });
        var ctx3 = document.getElementById('chart3').getContext('2d');
        var chart3 = new Chart(ctx3, {
            type: 'doughnut',
            data: {
                labels: ['Periodo', 'Meta', 'Resultado'],
                datasets: [{
                    data: [20, 30, 50],
                    backgroundColor: ['#AAAAAA', '#00BCD4', '#E91E63'],
                }]
            }
        });

        var ctx4 = document.getElementById('chart4').getContext('2d');
        var chart4 = new Chart(ctx4, {
            type: 'doughnut',
            data: {
                labels: ['Periodo', 'Meta', 'Resultado'],
                datasets: [{
                    data: [12, 22, 32],
                    backgroundColor: ['#FFC0CB', '#008080', '#C0FF33'],
                }]
            }
        });
    </script>
</center>

</body>
</html>
