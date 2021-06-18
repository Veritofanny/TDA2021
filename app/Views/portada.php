<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Usuarios</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                        <button type="button" class="btn btn-sm btn-outline-secondary">Compartir</button>
                        <button type="button" class="btn btn-sm btn-outline-secondary">Exportar</button>
                </div>
                <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                        <span data-feather="calendar"></span>
                        Esta semana
                </button>
        </div>


</div>

<div class="container">
<div class="row">
  <div class="col-sm-3">
    <div class="card text-white bg-success">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-light text-dark">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card text-white bg-danger">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-light text-dark">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card text-white bg-warning">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-light text-dark">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="card text-white bg-dark">
      <div class="card-body">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-light text-dark">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
</div>


<section>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 my-3">
                            <div class="card rounded-0">
                                <div class="card-header">
                                    <h6 class="font-weight-bold mb-0">Numero de usuarios</h6>
                                </div>
                                <div class="card-body">
                                    <div>
                                        <canvas id="grafica"></canvas>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-lg-4 my-3">
                                <div class="card rounded-0">
                                    <div class="card-header bg-light">
                                        <h6 class="font-weight-bold mb-0">Ventas Recientes</h6>
                                    </div>
                                    <div>
                                        <canvas id="graficar"></canvas>
                                    </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </section>


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

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.0/chart.min.js" integrity="sha512-yadYcDSJyQExcKhjKSQOkBKy2BLDoW6WnnGXCAkCoRlpHGpYuVuBqGObf3g/TdB86sSbss1AOP4YlGSb6EKQPg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var ctx = document.getElementById('graficar').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'polarArea',
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