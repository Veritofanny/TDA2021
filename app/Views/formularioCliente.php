
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Formulario</h1>
    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Pagar Aquí
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content mx-5">
        <div class="container">
            
        <form action="#" class="credit-card-div my-4">
        <div class="panel panel-default" >
        <div class="panel-heading">
        <div class="text-center">
        <h1 class="h3 mt-2 fw-bold">CODE 4</h1>
        <i class="fas fa-laptop-code display-4 my-4"></i>
        </div>

        <div class="row ">
              <div class="col-md-12">
              <label for="inputPassword" class="col-sm-6 col-form-label">Numero de Tarjeta</label>
                  <input type="text" class="form-control" placeholder="1471-1002-1000-8888" />
              </div>
          </div>
        <div class="row ">
              <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block" >Mes</span>
                  <input type="text" class="form-control" placeholder="MM" />
              </div>
         <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block" >Año</span>
                  <input type="text" class="form-control" placeholder="YY" />
              </div>
        <div class="col-md-3 col-sm-3 col-xs-3">
                  <span class="help-block" >CCV</span>
                  <input type="text" class="form-control" placeholder="CCV" />
              </div>
         <div class="col-md-3 col-sm-3 col-xs-3">
         <i class="far fa-credit-card display-6 mt-4"></i>         
         </div>
        </div>
        <div class="col-12">
                <label for="inputPassword5" class="form-label">Correo electrónico</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="far fa-envelope text-secondary"></i></span>
                    <input type="email" class="form-control" placeholder="E-mail" aria-describedby="addon-wrapping" required>
                </div>
            </div>
        <div class="row">
        <div class="col-md-12 pad-adjust">
        <div class="checkbox">
        <label>
        <input type="checkbox" checked class="text-muted">Terminos y condiciones*<a href="#"> Leer AHORA?</a>
        </label>
        </div>
        </div>
        </div>
       <div class="row ">
       <div class="col-12">
                <div class="input-group flex-nowrap">
                    <input type="submit"  class="btn btn-warning btn-block col-12" value="PAGAR" />
                </div>
            </div>
              <div class="d-flex justify-content-between">
              <i class="fab fa-cc-visa display-4 "></i>
              <i class="fab fa-cc-mastercard display-4 "></i>
              </div>
              
          </div>
     
                </div>
              </div>
        </form>
        </div>
        </div>
        </div>
        </div>
</div>


<div class="container pb-3 justify-content-center">
    <form class="justify-content-center">
        <div class="col-md-8 shadow mx-auto my-4 py-3">
            <h5 class="border-bottom border-gray mx-2 mt-1 mb-2">Datos generales</h5>
            <div class="row mx-3 mb-3">
            <div class="col-6">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Tipo</label>
                <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example">
                    <option selected>PERSONA</option>
                    <option value="1">Natural</option>
                    <option value="2">Jurídica</option>
                    </select>               
                </div>
                </div>
            </div>
            <div class="col-6">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Documento</label>
                <div class="col-sm-10 d-flex px-4">
                <select class="form-select mx-3" aria-label="Default select example">
                    <option selected>Doc.</option>
                    <option value="1">DNI</option>
                    <option value="2">RUC</option>
                </select>
                    <div class="col-sm-6">
                    <input type="text" class="form-control mx-2 " id="inputPassword" placeholder="1112223">
                    </div>               
                </div>
                </div>
            </div>
            
            <div class="col-6 my-2">
                <label class="form-label">Nombres</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Juan Jose" aria-label="First name" aria-describedby="addon-wrapping" required>
                </div>
            </div>
            <div class="col-6 my-2">
                <label class="form-label">Apellidos</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user"></i></span>
                    <input type="text" class="form-control" placeholder="Rubio Hernandez" aria-label="First name" aria-describedby="addon-wrapping" required>
                </div>
            </div>

            <div class="col-12">
                <label for="inputPassword5" class="form-label">Direccion</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-location-arrow"></i></span>
                    <input type="text" class="form-control" placeholder="Av. Los Claveles N° 312" aria-label="First name" aria-describedby="addon-wrapping" required>
                </div>
            </div>

            <div class="col-4 mt-4">
                <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Extranjero
                </label>
                </div>
            </div>

            <div class="col-4">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Estado Civil</label>
                <div class="col-sm-8 mx-3">
                <select class="form-select mt-3" aria-label="Default select example">
                    <option selected>ESTADO</option>
                    <option value="1">Soltero</option>
                    <option value="2">Casado</option>
                    </select>               
                </div>
                </div>
            </div>

            <div class="col-4 d-flex mt-3">
                <label for="inputPassword" class="col-sm-4 col-form-label">Sexo</label>
                <div class="col-sm-8">
                <select class="form-select " aria-label="Default select example">
                    <option selected>Sexo</option>
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>
                </select>
            </div>
            </div>

            <div class="col-4 mt-3">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Pais</label>
                <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecciona</option>
                    <option value="1">Chile</option>
                    <option value="2">Perú</option>
                    <option value="2">Ecuador</option>
                    <option value="2">Argentina</option>
                    <option value="2">Colombia</option>
                    <option value="2">Paraguay</option>
                    <option value="2">Uruguay</option>

                    </select>               
                </div>
                </div>
            </div>

            <div class="col-4 mt-3">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Región</label>
                <div class="col-sm-10 px-4">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecciona</option>
                    <option value="1">Arequipa</option>
                    <option value="2">Cusco</option>
                    <option value="2">Puno</option>
                    <option value="2">Tacna</option>
                    <option value="2">Madre de Dios</option>
                    <option value="2">Tumbes</option>
                    <option value="2">Ucayali</option>

                    </select>               
                </div>
                </div>
            </div>
            <div class="col-4 mt-3">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label px-3">Ciudad</label>
                <div class="col-sm-10 px-4">
                <select class="form-select mx-2" aria-label="Default select example">
                    <option selected>Selecciona</option>
                    <option value="1">Juliaca</option>
                    <option value="2">San Miguel</option>
                    <option value="2">Lampa</option>
                    <option value="2">Cabanillas</option>
                    <option value="2">Caracoto</option>

                    </select>               
                </div>
                </div>
            </div>

            </div>

            <div class="row mx-3">
            <div class="col-12">
                <label for="inputPassword5" class="form-label">Empresa</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-business-time"></i></span>
                    <input type="text" class="form-control" placeholder="Av. Los Claveles N° 312" aria-label="First name" aria-describedby="addon-wrapping" required>
                </div>
            </div>
            </div>
        </div>




        <div class="col-md-8 shadow mx-auto my-4 py-3">
            <h5 class="border-bottom border-gray mx-2 mt-1 mb-2">Datos Complementarios</h5>
            <div class="row mx-3 mb-3">
            <div class="col-6">
                <label for="inputPassword5" class="form-label">Correo electrónico</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="far fa-envelope"></i></span>
                    <input type="email" class="form-control" placeholder="@email.com" aria-describedby="addon-wrapping" required>
                </div>
            </div>
            <div class="col-6">
                <label for="inputPassword5" class="form-label">Pagina Web</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-at "></i></span>
                    <input type="text" class="form-control" placeholder="www.chartjs.org" aria-label="Username" aria-describedby="addon-wrapping" required>
                </div>
            </div>
            <div class="col-6">
                <label for="inputPassword5" class="form-label">Teléfono</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-mobile-alt"></i></span>
                    <input type="text" class="form-control" placeholder="Teléfono" aria-describedby="addon-wrapping" required>
                </div>
            </div>
            <div class="col-6">
                <label for="inputPassword5" class="form-label">Teléfono Fijo</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-phone"></i></span>
                    <input type="text" class="form-control" placeholder="Teléfono" aria-describedby="addon-wrapping" required>
                </div>
            </div>
            </div>
            <div class="row mx-3">
            <label for="inputPassword5" class="form-label">Observaciones</label>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                <label for="floatingTextarea">Hola</label>
                </div>
            </div>
        </div>
        <div class=" col-2 mx-auto">
            <button class="btn-lg btn-dark w-100" type="submit">Registrarse</button>
        </div>
        </form>
    </div>
</div>

</html>

