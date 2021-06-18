<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>
<body>
<div class="d-md-flex p-2 bd-highlight">
        <div class="container">
                <div class="card rounded-0">
                    <div class="card-header">GRAFICO</div>
                        <div>
                            <canvas id="grafica"></canvas>
                        </div>
                </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.0/chart.min.js" integrity="sha512-yadYcDSJyQExcKhjKSQOkBKy2BLDoW6WnnGXCAkCoRlpHGpYuVuBqGObf3g/TdB86sSbss1AOP4YlGSb6EKQPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var ctx = document.getElementById('grafica').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado','Domingo'],
        datasets: [{
            label: 'Balance Diario',
            data: [12, 19, 3, 5, 2, 3, 10],
            backgroundColor: [
                '#00F146',
                '#00FFC5 ',
                '#FF0000 ',
                '#FFE71D ',
                '#002BFF ',
                '#7D00FA',
                '#71290C'
            ],
            borderColor: [
                '#00F146',
                '#00FFC5 ',
                '#FF0000 ',
                '#FFE71D ',
                '#002BFF ',
                '#7D00FA',
                '#71290C'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
    </script>   
</body>

</html>