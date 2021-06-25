<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">REGISTRO DE MUEBLES</h1>
</div>

<div class="container pb-3 justify-content-center">
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

            <div class="col-6">
                <div class="mb-3 row py-4 ">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Estado:</label>
                    <div class="col-sm-10">
                        <select class="form-select border border-dark" aria-label="Default select example">
                            <option selected>Estado</option>
                            <option value="1">Yes</option>
                            <option value="2">Not</option>
                        </select>               
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="mb-3 row py-4">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Cantidad:</label>
                    <div class="col-sm-10">
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