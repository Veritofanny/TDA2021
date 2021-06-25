<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Lista de clientes</h1>
        <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Formulario
    </button>
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-xl-down">
        <div class="modal-content mx-0">
                <form class="m-0">
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
                <label for="inputPassword" class="col-sm-2 col-form-label">DOC.</label>
                <div class="col-sm-10 d-flex">
                <select class="form-select mx-1" aria-label="Default select example">
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

            <div class="col-6 mt-4">
                <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                    Extranjero
                </label>
                </div>
            </div>

            <div class="col-md-6">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Estado Civil</label>
                <div class="col-sm-8 mx-3">
                <select class="form-select mt-3 mx-4" aria-label="Default select example">
                    <option selected>ESTADO</option>
                    <option value="1">Soltero</option>
                    <option value="2">Casado</option>
                    </select>               
                </div>
                </div>
            </div>

            <div class="col-6 d-flex mt-2">
                <label for="inputPassword" class="col-sm-4 col-form-label">Sexo</label>
                <div class="col-sm-8">
                <select class="form-select " aria-label="Default select example">
                    <option selected>Sexo</option>
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>
                </select>
            </div>
            </div>

            <div class="col-6 mt-2">
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

            <div class="col-6 mt-3">
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Región</label>
                <div class="col-sm-10 px-4">
                <select class="form-select mx-3" aria-label="Default select example">
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
            <div class="col-6 mt-3">
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

            <div class="col-12">
            <div class="row mx-3">
                <label for="inputPassword5" class="form-label">Empresa</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-business-time"></i></span>
                    <input type="text" class="form-control" placeholder="Av. Los Claveles N° 312" aria-label="First name" aria-describedby="addon-wrapping" required>
                </div>
            </div>
            </div>
                        
                    
                    <div class=" col-4 mx-auto my-3">
                        <button class="btn-lg btn-dark w-100" type="submit">Registrarme</button>
                    </div> 
                </form>
                </div>
    </div>
    </div>
</div>


<table id="example" class="table table-responsive table-bordered shadow table-hover">
    <thead>
        <tr>
            <th></th>
            <th></th>
            <th>ID</th>
            <th>RAZON SOCIAL <a href="#"><i class="fas fa-angle-double-up mx-2"></i></a></th>
            <th>TIPO <a href="#"><i class="fas fa-angle-double-down mx-2"></i></a> </th>
            <th>DOCUMENTO <a href=""><i class="fas fa-angle-double-up mx-2"></i></a></th>
            <th>NRO. DOCUMENTO <a href=""><i class="fas fa-angle-double-up mx-2"></i></a> </th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td><a href="#"><i class="fas fa-times-circle"></i></a></td>
            <td>245</td>
            <td>ECO SAC</td>
            <td>EMPRESA</td>
            <td>RUC</td>
            <td>202129012902190</td>
        </tr>
        <tr>
            <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td><a href="#"><i class="fas fa-times-circle"></i></a></td>
            <td>244</td>
            <td>Jose Luis Sanchez Mendoza</td>
            <td>EMPRESA</td>
            <td>DNI</td>
            <td>20212903</td>
        </tr>
        <tr>
            <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td><a href="#"><i class="fas fa-times-circle"></i></a></td>
            <td>243</td>
            <td>SODEXO</td>
            <td>EMPRESA</td>
            <td>RUC</td>
            <td>20212901453654</td>

        </tr>
        <tr>
            <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td><a href="#"><i class="fas fa-times-circle"></i></a></td>
            <td>242</td>
            <td>Ronaldo Quispe Gutierrez</td>
            <td>PERSONA</td>
            <td>DNI</td>
            <td>68352418</td>
        </tr>
        <tr>
            <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td><a href="#"><i class="fas fa-times-circle"></i></a></td>
            <td>241</td>
            <td>RETMOL</td>
            <td>EMPRESA</td>
            <td>RUC</td>
            <td>20212901243424</td>
        </tr>
        <tr>
            <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td><a href="#"><i class="fas fa-times-circle"></i></a></td>
            <td>240</td>
            <td>Berny Alzamora</td>
            <td>PERSONA</td>
            <td>DNI</td>
            <td>02346577</td>

        </tr>
        <tr>
            <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td><a href="#"><i class="fas fa-times-circle"></i></a></td>
            <td>239</td>
            <td>FIO SAC</td>
            <td>EMPRESA</td>
            <td>RUC</td>
            <td>2021290342523</td>
        </tr>
        <tr>
            <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td><a href="#"><i class="fas fa-times-circle"></i></a></td>
            <td>238</td>
            <td>LION SAC</td>
            <td>EMPRESA</td>
            <td>RUC</td>
            <td>4654745747454</td>
        </tr>
        <tr>
            <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td><a href="#"><i class="fas fa-times-circle"></i></a></td>
            <td>237</td>
            <td>Pepe Rodriguez Hurtado</td>
            <td>PERSONA</td>
            <td>DNI</td>
            <td>70127834</td>

        </tr>
        <tr>
            <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td><a href="#"><i class="fas fa-times-circle"></i></a></td>
            <td>236</td>
            <td>LIMO SAC</td>
            <td>EMPRESA</td>
            <td>RUC</td>
            <td>2452352102190</td>
        </tr>
        <tr>
            <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td><a href="#"><i class="fas fa-times-circle"></i></a></td>
            <td>235</td>
            <td>CALI SAC</td>
            <td>EMPRESA</td>
            <td>RUC</td>
            <td>7647472902190</td>
        </tr>
        <tr>
            <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td><a href="#"><i class="fas fa-times-circle"></i></a></td>
            <td>237</td>
            <td>Franco Nemesio Portales Cuevas</td>
            <td>PERSONA</td>
            <td>DNI</td>
            <td>40127834</td>

        </tr>
        <tr>
            <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td><a href="#"><i class="fas fa-times-circle"></i></a></td>
            <td>237</td>
            <td>Mauricio Esquivias Roman</td>
            <td>PERSONA</td>
            <td>DNI</td>
            <td>01427834</td>

        </tr>
        <tr>
            <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td><a href="#"><i class="fas fa-times-circle"></i></a></td>
            <td>237</td>
            <td>Jose Miguel Chavez Basurco</td>
            <td>PERSONA</td>
            <td>DNI</td>
            <td>77127834</td>

        </tr>
        <tr>
            <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td><a href="#"><i class="fas fa-times-circle"></i></a></td>
            <td>245</td>
            <td>CELL SAC</td>
            <td>EMPRESA</td>
            <td>RUC</td>
            <td>65429012902190</td>
        </tr>
        <tr>
            <td><a href="#"><i class="fas fa-pencil-alt"></i></a></td>
            <td><a href="#"><i class="fas fa-times-circle"></i></a></td>
            <td>245</td>
            <td>CALOR SAC</td>
            <td>EMPRESA</td>
            <td>RUC</td>
            <td>099999012902190</td>

        </tr>
        
    </tbody>
</table>


<!-- BOTON PARA BUSCAR CLIENTE
<button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Buscar Cliente
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content mx-5">
        <div class="container">
            
            <main class="form-signin text-center position-relative">
            <button type="button" class="btn-close position-absolute top-0 start-100 translate-middle" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class = "my-4">
                <i class="fas fa-laptop-code display-1"></i>
                <h1 class="h3 mt-2 fw-bold">CODE 4</h1>
                </div>
                <form>
                <label for="floatingInput">RAZON SOCIAL</label>
                    <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Razón social</label>
                    </div>
                    <div class="form-floating mb-3">
                <div class="col-sm-12">
                <label for="inputPassword" class="col-sm-2 col-form-label">TIPO</label>
                <select class="form-select display-inline" aria-label="Default select example">
                    <option selected>PERSONA</option>
                    <option value="1">EMPRESA</option>
                    <option value="2">PERSONA</option>
                    </select>
                    </div>
                    <div class="col-sm-12">
                <label for="inputPassword" class="col-sm-2 col-form-label">PAIS</label>
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
                    <button class="w-100 btn btn-lg btn-dark shadow mt-3" type="submit" >Reporte</button>                    
                </form>
              
                </div>    
                </main>
        </div>
        </div>
    </div>
    </div>
    -->

