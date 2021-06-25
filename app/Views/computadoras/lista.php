<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Lista</h1>
    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Crear
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-xl-down">
        <div class="modal-content mx-0">
                <form class="m-0">
                            <div class="pt-3 pb-0 mb-0 mx-2">
                            <h5 class="position-relative">Monitor</h5>
                            <button type="button" class="btn btn-sm btn-close btn-outline-secondary position-absolute top-0 end-0 m-2" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-label="Close">
                            </button>
        
                            
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
                                <div class="col-6">
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
                                <div class="col-6">
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
                                <div class="col-6 pt-4 ">
                                    <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                    <label class="form-check-label" for="flexSwitchCheckDefault">Monitor curvo</label>
                                    </div>
                                </div>
                                <div class="col-6 pt-4 ">
                                <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                <label class="form-check-label" for="flexSwitchCheckDefault">Monitor tactil</label>
                                </div>
                            </div>
                            </div>
                        
                

                        
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
                                <div class="col-6">
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
                                <div class="col-6">
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
                            </div>
                            <div class="row px-4 mt-2">
                                <div class="col">
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
                                
                            </div>
                                <div class="row px-4 mt-2">
                                <div class="col-6">
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
                            <div class="col-6">
                                    <label class="form-label">Precio</label>
                                    <div class="input-group flex-nowrap">
                                        <input type="number" class="form-control border border-danger" placeholder="0.00" aria-label="First name" aria-describedby="addon-wrapping" required>
                                        <span class="input-group-text bg-transparent border-start-0 border border-danger" id="addon-wrapping"><i class="fas fa-dollar-sign text-danger"></i></span>
                                    </div>
                                </div>
                                </div>
                        
                    
                    <div class=" col-2 mx-auto my-2">
                        <button class="btn btn-info w-100 fw-bold text-light" type="submit">Guardar</button>
                    </div> 
                </form>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="container justify-content-center px-3 py-3">
<table id="example" class="display table table-striped table-hover shadow" style="width:100%">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Procesador</th>
                <th>RAM</th>
                <th>Tarjeta de video</th>
                <th>Disco</th>
                <th>Precio</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>HP</td>
                <td>Spectre X360</td>
                <td>Intel® Core™ i5</td>
                <td>8GB</td>
                <td>Nvidia RTX 2070</td>
                <td>HDD</td>
                <td>$320,800</td>
                <td class="py-1">
                    <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-sm btn-outline-secondary px-1 fs-6"><i class="fas fa-pen"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger px-1 fs-5"><i class="far fa-trash-alt"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Asus</td>
                <td>ZenBook Duo</td>
                <td>Intel® Core™ i9</td>
                <td>16GB</td>
                <td>Nvidia GTX 1050 Ti 4GB</td>
                <td>SSD</td>
                <td>$420,000</td>
                <td class="py-1">
                    <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-sm btn-outline-secondary px-1 fs-6"><i class="fas fa-pen"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger px-1 fs-5"><i class="far fa-trash-alt"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Apple</td>
                <td>iMac</td>
                <td>ARM</td>
                <td>8GB</td>
                <td>AMD Radeon Pro 5600M</td>
                <td>SSD</td>
                <td>$650,800</td>
                <td class="py-1">
                    <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-sm btn-outline-secondary px-1 fs-6"><i class="fas fa-pen"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger px-1 fs-5"><i class="far fa-trash-alt"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Dell</td>
                <td>Inspiron 15.6</td>
                <td>Intel® Core™ i5</td>
                <td>4GB</td>
                <td>Integrada</td>
                <td>HDD</td>
                <td>$370,200</td>
                <td class="py-1">
                    <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-sm btn-outline-secondary px-1 fs-6"><i class="fas fa-pen"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger px-1 fs-5"><i class="far fa-trash-alt"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Acer</td>
                <td>Acer Aspire 3</td>
                <td>Intel® Core™ i3</td>
                <td>16GB</td>
                <td>Nvidia GTX 4GB</td>
                <td>SSD</td>
                <td>$520,200</td>
                <td class="py-1">
                    <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-sm btn-outline-secondary px-1 fs-6"><i class="fas fa-pen"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger px-1 fs-5"><i class="far fa-trash-alt"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Alienware</td>
                <td>Alienware 17 </td>
                <td>Intel® Core™ i9</td>
                <td>8GB</td>
                <td>Nvidia GTX 1060 6GB</td>
                <td>SSD</td>
                <td>$770,300</td>
                <td class="py-1">
                    <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-sm btn-outline-secondary px-1 fs-6"><i class="fas fa-pen"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger px-1 fs-5"><i class="far fa-trash-alt"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Toshiba</td>
                <td>Satellite Pro L500</td>
                <td>Intel® Core™ i7</td>
                <td>4GB</td>
                <td>Integrada</td>
                <td>HDD</td>
                <td>$320,000</td>
                <td class="py-1">
                    <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-sm btn-outline-secondary px-1 fs-6"><i class="fas fa-pen"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger px-1 fs-5"><i class="far fa-trash-alt"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Samsung</td>
                <td>Chromebook Plus V2</td>
                <td>Intel® Core™ i5</td>
                <td>8GB</td>
                <td>Nvidia GTX 1050 3GB</td>
                <td>HDD</td>
                <td>$420,700</td>
                <td class="py-1">
                    <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-sm btn-outline-secondary px-1 fs-6"><i class="fas fa-pen"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger px-1 fs-5"><i class="far fa-trash-alt"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>MSI</td>
                <td>GT Titan series</td>
                <td>Intel® Core™ i7</td>
                <td>16GB</td>
                <td>Nvidia RTX 3060 EAGLE OC 12 GB</td>
                <td>SSD</td>
                <td>$820,700</td>
                <td class="py-1">
                    <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-sm btn-outline-secondary px-1 fs-6"><i class="fas fa-pen"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger px-1 fs-5"><i class="far fa-trash-alt"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Lenovo</td>
                <td>Lenovo Legion Y540</td>
                <td>Intel® Core™ i5</td>
                <td>4GB</td>
                <td>Nvidia GTX 1650 4GB</td>
                <td>HDD</td>
                <td>$360,000</td>
                <td class="py-1">
                    <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-sm btn-outline-secondary px-1 fs-6"><i class="fas fa-pen"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger px-1 fs-5"><i class="far fa-trash-alt"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Toshiba</td>
                <td>Portégé X20W-E</td>
                <td>Intel® Core™ i5</td>
                <td>8GB</td>
                <td>Nvidia GTX 1050 Ti 4GB</td>
                <td>SSD</td>
                <td>$350,200</td>
                <td class="py-1">
                    <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-sm btn-outline-secondary px-1 fs-6"><i class="fas fa-pen"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger px-1 fs-5"><i class="far fa-trash-alt"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Samsung</td>
                <td>Galaxy Z Fold 2</td>
                <td>Intel® Core™ i3</td>
                <td>16GB</td>
                <td>Integrada</td>
                <td>HDD</td>
                <td>$420,900</td>
                <td class="py-1">
                    <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-sm btn-outline-secondary px-1 fs-6"><i class="fas fa-pen"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger px-1 fs-5"><i class="far fa-trash-alt"></i></button>
                    </div>
                </td>
            </tr>
            <tr>
                <td>MSI</td>
                <td>Serie GP Leopard</td>
                <td>Intel® Core™ i7</td>
                <td>8GB</td>
                <td>Nvidia GTX 2060</td>
                <td>SSD</td>
                <td>$700,800</td>
                <td class="py-1">
                    <div class="d-flex justify-content-around">
                        <button type="button" class="btn btn-sm btn-outline-secondary px-1 fs-6"><i class="fas fa-pen"></i></button>
                        <button type="button" class="btn btn-sm btn-outline-danger px-1 fs-5"><i class="far fa-trash-alt"></i></button>
                    </div>
                </td>
            </tr>
            
        </tbody>
        
    </table>
</div>

