<!--Esta es la parte de Clinton Armando Arias Chipana que aporta al dhasboard-->
<div id="content" class="bg-grey w-100">
              <section>
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-8 my-3">
                              <div class="card rounded-0">
                                  <div class="card-header bg-dark">
                                    <h6 class="font-weight-bold mb-0 text-light">Número de usuarios de paga</h6>
                                  </div>
                                  <div class="card-body">
                                    <canvas id="myChart1" width="300" height="150"></canvas>
                                  </div>
                              </div>
                          </div>
                     </div>
                  </div>
              </section>
              <section>
                  <div class="container">
                      <div class="row">
                          <div class="col-lg-8 my-3">
                              <div class="card rounded-0">
                                  <div class="card-header bg-dark">
                                    <h6 class="font-weight-bold mb-0 text-light">Número de usuarios de paga</h6>
                                  </div>
                                  <div class="card-body">
                                    <canvas id="myChart2" width="300" height="150"></canvas>
                                  </div>
                                  
                              </div>
                          </div>
                          
                      </div>
                  </div>
              </section>

              
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js" integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI=" crossorigin="anonymous"></script>
        <script>
            var ctx= document.getElementById("myChart1").getContext("2d");
            var myChart= new Chart(ctx,{
            type:"pie",
            data:{
                labels: ['Feb 2020', 'Mar 2020', 'Abr 2020', 'May 2020', 'Jun 2020'],
                    datasets:[{
                        label:'Num datos',
                        data:[50, 100, 150, 200, 300],
                        backgroundColor:[
                            '#ADADAD',  
                            '#ADADAD',
                            '#ADADAD',
                            '#ADADAD',
                            '#000000'
                        ]
                    }]
            },
            options:{
                scales:{
                    yAxes:[{
                            ticks:{
                                beginAtZero:true
                            }
                    }]
                }
            }
            });
            var ctx = document.getElementById('myChart2').getContext('2d');
            var myChart2 = new Chart(ctx, { 
                type: 'bar',
                data: {
                    labels: ['Feb 2020', 'Mar 2020', 'Abr 2020', 'May 2020'],
                    datasets: [{
                        label: 'Nuevos usuarios',
                        data: [50, 100, 150, 200],
                        backgroundColor: [
                            '#ADADAD',  
                            '#ADADAD',
                            '#ADADAD',
                            '#000000'
                        ],
                        maxBarThickness: 30,
                        maxBarLength: 2
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