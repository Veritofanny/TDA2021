<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Lista</h1>
    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Crear
    </button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen-xl-down">
        <div class="modal-content mx-0">
                <form class="m-0">
                            <div class="pt-3 pb-2 mb-3 mx-2">
                            <h5 class="position-relative">Monitor</h5>
                            <button type="button" class="btn btn-sm btn-close btn-outline-secondary position-absolute top-0 end-0 m-1" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-label="Close">
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

<div class="container justify-content-center px-5">
<table id="example" class="display table table-light table-striped table-hover" style="width:100%">
        <thead class="bg-secondary">
            <tr class="table-dark">
                <th>Marca</th>
                <th>Modelo</th>
                <th>Procesador</th>
                <th>RAM</th>
                <th>Tarjeta de video</th>
                <th>Disco</th>
                <th>Disco</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>HP</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Asus</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Apple</td>
                <td>iMac</td>
                <td>ARM</td>
                <td>8GB</td>
                <td>AMD Radeon Pro 5600M</td>
                <td>SSD</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Dell</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Acer</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Alienware</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Toshiba</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Samsung</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>MSI</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Lenovo</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Toshiba</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Samsung</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>MSI</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
                <td>$320,800</td>
            </tr>
            
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
                <td>$320,800</td>
            </tr>
        </tfoot>
    </table>
</div>

