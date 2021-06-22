<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
    <h1 class="h2">Registrar Computadora</h1>
</div>

<div class="container justify-content-center">
<form>
    <div class="row mb-1">
        <div class="col-md-8 shadow mx-auto py-3">
            <h5 class="border-bottom border-gray mx-2 mt-1 mb-2">Monitor</h5>
            <div class="row px-4 mt-2">
                <div class="col-6">
                    <label class="form-label">Marca</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text bg-transparent border-end-0 border border-primary" id="addon-wrapping"><i class="fas fa-signature text-primary"></i></span>
                        <input type="text" class="form-control border border-primary" placeholder="Marca" aria-label="First name" aria-describedby="addon-wrapping" required>
                    </div>
                </div>
                <div class="col-6">
                    <label class="form-label">Modelo    </label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text bg-transparent border-end-0 border border-success" id="addon-wrapping"><i class="fas fa-bullseye text-success"></i></span>
                        <input type="text" class="form-control border border-primary" placeholder="Modelo" aria-label="First name" aria-describedby="addon-wrapping" required>
                    </div>
                </div>
            </div>
            <div class="row px-4 mt-2">
                <div class="col-4">
                    <label for="inputPassword5" class="form-label">Tamaño</label>
                    <div class="input-group flex-nowrap">
                    <select class="form-select border border-danger" id="inputGroupSelect01" required>
                        <option selected disabled value="">Seleccionar tamaño...</option>
                        <option value="1">23</option>
                        <option value="2">24</option>
                        <option value="1">27</option>
                        <option value="2">32</option>
                    </select>
                    <span class="input-group-text bg-transparent border-start-0 border border-danger" id="addon-wrapping"><i class="fab fa-linkedin-in text-danger"></i></span>
                    </div>
                </div>
                <div class="col-4">
                    <label for="inputPassword5" class="form-label">Resolucion</label>
                    <div class="input-group flex-nowrap">
                    <span class="input-group-text bg-transparent border-end-0 border border-info" id="addon-wrapping"><i class="fas fa-seedling text-info"></i></span>
                    <select class="form-select border border-info" id="inputGroupSelect01" required>
                        <option selected disabled value="">.......</option>
                        <option value="1" >HD</option>
                        <option value="2">FHD</option>
                        <option value="2">4K</option>
                    </select>   
                    </div>
                </div>
                <div class="col-4 pt-4">
                
                    <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Monitor curvo</label>
                    </div>
                    <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Monitor tactil</label>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="row mt-2">
        <div class="col-md-8 shadow mx-auto py-3">
            <h5 class="border-bottom border-gray mx-2 mt-1 mb-2">PC</h5>
            <div class="row px-4 mt-2">
                <div class="col-6">
                    <label class="form-label">Marca</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text bg-transparent border-end-0 border border-danger" id="addon-wrapping"><i class="fas fa-signature text-danger"></i></span>
                        <input type="text" class="form-control border border-danger" placeholder="Marca" aria-label="First name" aria-describedby="addon-wrapping" required>
                    </div>
                </div>
                <div class="col-6">
                    <label class="form-label">Modelo    </label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text bg-transparent border-end-0 border border-primary" id="addon-wrapping"><i class="fas fa-bullseye text-primary"></i></span>
                        <input type="text" class="form-control border border-primary" placeholder="Modelo" aria-label="First name" aria-describedby="addon-wrapping" required>
                    </div>
                </div>
            </div>
            <div class="row px-4 mt-2">
                <div class="col-4">
                    <label for="inputPassword5" class="form-label">Procesador</label>
                    <div class="input-group flex-nowrap mt-2">
                    <span class="input-group-text bg-transparent  border-end-0 border border-success" id="addon-wrapping"><i class="fas fa-microchip text-success"></i></span>
                    <select class="form-select border-star-0 border-success" id="inputGroupSelect01" required>
                        <option selected disabled value="">Seleccionar prrocesador...</option>
                        <option value="1">Intel Core i3</option>
                        <option value="2">Intel Core i5</option>
                        <option value="3">Intel Core i7</option>
                        <option value="4">Intel Core i9</option>
                    </select>
                    </div>
                </div>
                <div class="col-4">
                    <label for="inputPassword5" class="form-label">Memoria RAM</label>
                    <div class="input-group flex-nowrap mt-2">
                    <span class="input-group-text bg-transparent border-end-0 border border-info" id="addon-wrapping"><i class="fas fa-memory text-info"></i></span>
                    <select class="form-select border-end-0 border-info" id="inputGroupSelect01" required>
                        <option selected disabled value="">RAM...</option>
                        <option value="1" >4</option>
                        <option value="2">8</option>
                        <option value="2">16</option>
                        <option value="2">32</option>
                    </select>
                    <span class="input-group-text bg-transparent border-start-0 border-info" id="addon-wrapping">GB</span>
                    </div>
                </div>
                <div class="col-4">
                    <label for="inputPassword5" class="form-label">Disco</label>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        SSD (Solid State Drive)
                    </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        HDD (Hard Drive Disk)
                    </label>
                    </div>
                </div>
            </div>
            <div class="row px-4 mt-2">
                <div class="col-8">
                    <label for="inputPassword5" class="form-label">Tarjeta de video</label>
                    <div class="input-group flex-nowrap">
                    <span class="input-group-text bg-transparent border-end-0 border border-primary" id="addon-wrapping"><i class="fas fa-digital-tachograph text-primary"></i></span>
                    <select class="form-select  border border-primary" id="inputGroupSelect01" required>
                        <option selected disabled value="">----------</option>
                        <option value="1" >Dedicado NVIDIA</option>
                        <option value="2">Integrado</option>
                    </select>
                    <select class="form-select border-end-0 border-primary" id="inputGroupSelect01" required>
                        <option selected disabled value="">Capacidad</option>
                        <option value="1" >4</option>
                        <option value="2">8</option>
                        <option value="2">16</option>
                        <option value="2">32</option>
                    </select>
                    <span class="input-group-text bg-transparent  border-start-0 border-primary" id="addon-wrapping">GB</span>
                    </div>
                </div>
                <div class="col-4">
                    <label class="form-label">Precio</label>
                    <div class="input-group flex-nowrap">
                        <input type="number" class="form-control border border-danger" placeholder="0.00" aria-label="First name" aria-describedby="addon-wrapping" required>
                        <span class="input-group-text bg-transparent border-start-0 border border-danger" id="addon-wrapping"><i class="fas fa-dollar-sign text-danger"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" col-2 mx-auto mt-2">
        <button class="btn btn-info w-100 fw-bold text-light" type="submit">Guardar</button>
    </div> 
    </form>
</div>