<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">LISTA DE MUEBLES REGISTRADOS</h1>
    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Registrar muebles
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-xl-down">
        <div class="modal-content mx-0">
        <form class="justify-content-center">
        <div class="col-md-10 shadow mx-auto my-3 py-3">
            <h4 class="border-bottom border-dark mx-3 mt-3 mb-3">Datos del mueble</h4>
            <div class="row mx-3 mb-3">
            <div class="col-6">
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Tipo:</label>
                    <div class="col-sm-10">
                        <select class="form-select border border-dark" aria-label="Default select example">
                            <option selected>Televisor Trinitron de Sony</option>
                            <option value="1">Cámara fotográfica</option>
                            <option value="2">Tablet</option>
                            <option value="2">Horno microondas</option>
                            <option value="2">Guitarra eléctrica</option>
                        </select>               
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-5 col-form-label">Numero de serie:</label>
                    <div class="col-sm-7 d-flex px-4">
                        <div class="col-sm-12">
                            <input type="text" class="form-control mx-2 border border-dark" id="inputPassword" placeholder="1112223">
                        </div>               
                    </div>
                </div>
            </div>
            
            

            <div class="col-8">
                <label for="inputPassword5" class="form-label">Precio:</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text  border border-dark" id="addon-wrapping"><i class="fas fa-copyright"></i></span>
                    <input type="text" class="form-control  border border-dark" placeholder="$590,800" aria-label="First name" aria-describedby="addon-wrapping" required>
                </div>
            </div>
            <div class="col-4">
                <label for="inputPassword5" class="form-label">Marca:</label>
                <div class="input-group flex-nowrap">
                    <select class="form-select border border-dark" id="inputGroupSelect01" required>
                        <option selected disabled value="">Seleccionar</option>
                        <option value="1">LG</option>
                        <option value="2">SONY</option>
                        <option value="3">PANASONIC</option>
                        <option value="4">LENOVO</option>
                    </select>
                    <span class="input-group-text bg-transparent border-start-0 border border-dark" id="addon-wrapping"><i class="fas fa-copyright"></i></span>
                </div>
            </div>

            <div class="col-6 my-2">
                    <label for="inputPassword" class="form-label">Estado:</label>
                    <div class="col-sm-12">
                        <select class="form-select border border-dark" aria-label="Default select example">
                            <option selected>Estado</option>
                            <option value="1">Yes</option>
                            <option value="2">Not</option>
                        </select>               
                    </div>
            </div>
            <div class="col-6 my-2">
                    <label for="inputPassword" class="form-label">Cantidad:</label>
                    <div class="col-sm-12">
                        <select class="form-select border border-dark" aria-label="Default select example">
                            <option selected>1</option>
                            <option value="1">2</option>
                            <option value="2">3</option>
                            <option value="3">4</option>
                            <option value="4">5</option>
                        </select>               
                    </div>
            </div>

            </div>

            
        </div>




        <div class="col-md-10 shadow mx-auto my-4 py-3">
            <h4 class="border-bottom border-dark mx-2 mt-1 mb-2">Datos del Usuario</h4>
            <div class="row mx-3 mb-3">
                <div class="col-6 my-2">
                    <label class="form-label">Nombres</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text border border-dark" id="addon-wrapping"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control border border-dark" placeholder="Clinton" aria-label="First name" aria-describedby="addon-wrapping" required>
                    </div>
                </div>
                <div class="col-6 my-2">
                    <label class="form-label">Apellidos</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text border border-dark" id="addon-wrapping"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control border border-dark" placeholder="Arias" aria-label="First name" aria-describedby="addon-wrapping" required>
                    </div>
                </div>
                <div class="col-6">
                    <label for="inputPassword5" class="form-label">Correo electrónico</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text border border-dark" id="addon-wrapping"><i class="far fa-envelope"></i></span>
                        <input type="email" class="form-control border border-dark" placeholder="@email.com" aria-describedby="addon-wrapping" required>
                    </div>
                </div>
                <div class="col-6">
                    <label for="inputPassword5" class="form-label">Teléfono</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text border border-dark" id="addon-wrapping"><i class="fas fa-mobile-alt"></i></span>
                        <input type="text" class="form-control border border-dark" placeholder="Teléfono" aria-describedby="addon-wrapping" required>
                    </div>
                </div>
                <div class="col-12">
                    <label for="inputPassword5" class="form-label">Empresa</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text  border border-dark" id="addon-wrapping"><i class="fas fa-business-time"></i></span>
                        <input type="text" class="form-control border border-dark" placeholder="UBISOFT" aria-label="First name" aria-describedby="addon-wrapping" required>
                    </div>
                </div>
            </div>
            <div class="row mx-3">
                <label for="inputPassword5" class="form-label">Observaciones</label>
                    <div class="form-floating ">
                    <textarea class="form-control border border-dark" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                </div>
            </div>
        </div>
        <div class=" col-2 mx-auto">
            <button class="btn-lg btn-dark w-100" type="submit">Registrarse</button>
        </div>
        </form>
        
        </div>
    </div>
    </div>
</div>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3" >
    <table id="example" class="table table-striped table-bordered " style="width:100% ">
        <thead class="thead-light">
            <tr>
                <th>ID</th>
                <th>NOMBRE DEL MUEBLE</th>
                <th>PRECIO DEL MUEBLE</th>
                <th>UNIDAD</th>
                <th>NUMERO DE SERIE</th>
                <th>YES</th>
                <th>NO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>001</th>
                <td>Televisor Trinitron de Sony</td>
                <td>$520,800</td>
                <td>2</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>002</th>
                <td>Cámara fotográfica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>003</th>
                <td>Tablet</td>
                <td>$480,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>004</th>
                <td>Horno microondas</td>
                <td>$590,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>005</th>
                <td>Cámara fotográfica</td>
                <td>$580,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>006</th>
                <td>Guitarra eléctrica</td>
                <td>$520,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>007</th>
                <td>Tablet</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>008</th>
                <td>Televisor Trinitron de Sony</td>
                <td>$480,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>009</th>
                <td>Televisor Trinitron de Sony</td>
                <td>$480,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>010</th>
                <td>Tablet</td>
                <td>$690,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>011</th>
                <td>Televisor Trinitron de Sony</td>
                <td>$520,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>012</th>
                <td>Cámara fotográfica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>013</th>
                <td>Horno microondas</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>014</th>
                <td>Televisor Trinitron de Sony</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>015</th>
                <td>Guitarra eléctrica</td>
                <td>$480,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>016</th>
                <td>Televisor Trinitron de Sony</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>017</th>
                <td>Cámara fotográfica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>018</th>
                <td>Guitarra eléctrica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>019</th>
                <td>Horno microondas</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>020</th>
                <td>Televisor Trinitron de Sony</td>
                <td>$480,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>021</th>
                <td>Guitarra eléctrica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>022</th>
                <td>Tablet</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>023</th>
                <td>Horno microondas</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>024</th>
                <td>Televisor Trinitron de Sony</td>
                <td>$480,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>025</th>
                <td>Cámara fotográfica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>026</th>
                <td>Tablet</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>027</th>
                <td>Horno microondas</td>
                <td>$480,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>028</th>
                <td>Guitarra eléctrica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>029</th>
                <td>Cámara fotográfica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>030</th>
                <td>Televisor Trinitron de Sony</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>031</th>
                <td>Guitarra eléctrica</td>
                <td>$480,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>032</th>
                <td>Cámara fotográfica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>033</th>
                <td>Horno microondas</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>034</th>
                <td>Tablet</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>035</th>
                <td>Guitarra eléctrica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>036</th>
                <td>Cámara fotográfica</td>
                <td>$480,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>037</th>
                <td>Televisor Trinitron de Sony</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>038</th>
                <td>Horno microondas</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>039</th>
                <td>Guitarra eléctrica</td>
                <td>$480,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>040</th>
                <td>Cámara fotográfica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>041</th>
                <td>Televisor Trinitron de Sony</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>042</th>
                <td>Tablet</td>
                <td>$480,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>043</th>
                <td>Horno microondas</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>044</th>
                <td>Guitarra eléctrica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>045</th>
                <td>Cámara fotográfica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>046</th>
                <td>Televisor Trinitron de Sony</td>
                <td>$480,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>047</th>
                <td>Horno microondas</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>048</th>
                <td>Televisor Trinitron de Sony</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>049</th>
                <td>Tablet</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>050</th>
                <td>Cámara fotográfica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>051</th>
                <td>Televisor Trinitron de Sony</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>052</th>
                <td>Guitarra eléctrica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>053</th>
                <td>Horno microondas</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>054</th>
                <td>Tablet</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>055</th>
                <td>Cámara fotográfica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>056</th>
                <td>Televisor Trinitron de Sony</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>057</th>
                <td>Horno microondas</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>058</th>
                <td>Tablet</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>059</th>
                <td>Cámara fotográfica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>060</th>
                <td>Guitarra eléctrica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>061</th>
                <td>Horno microondas</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>062</th>
                <td>Televisor Trinitron de Sony</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>063</th>
                <td>Tablet</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>064</th>
                <td>Cámara fotográfica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>065</th>
                <td>Guitarra eléctrica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>066</th>
                <td>Televisor Trinitron de Sony</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>067</th>
                <td>Tablet</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>068</th>
                <td>Guitarra eléctrica</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>069</th>
                <td>Horno microondas</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
            <tr>
                <th>070</th>
                <td>Tablet</td>
                <td>$320,800</td>
                <td>4</td>
                <td>1000000</td>
                <td><i class="fas fa-check"></i></td>
                <td><i class="far fa-trash-alt"></i></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>PRECIO</th>
                <th>UNIDAD</th>
                <th>CODIGO</th>
                <th>YES</th>
                <th>NO</th>
            </tr>
        </tfoot>
    </table>
</div>



<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );

</script>