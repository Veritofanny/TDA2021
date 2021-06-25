<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <div>
        <h4>
            Formulario de productos:
        </h4>
    </div>
</div>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
   
           
            <form class="row g-3">
            <div class="col-md-4">
                <label for="validationDefault01" class="form-label"><i class="fab fa-slack-hash"></i> Nombre</label>
                <input type="text" class="form-control" id="validationDefault01" placeholder="Gaseosa" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefault02" class="form-label"><i class="far fa-registered"></i> Marca </label>
                <input type="text" class="form-control" id="validationDefault02" placeholder="Coca Cola" required>
            </div>
            <div class="col-md-4">
                <label for="validationDefaultUsername" class="form-label"><i class="fas fa-hourglass-end"></i> Contacto</label>
                <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2">@</span>
                <input type="text" class="form-control" id="validationDefaultUsername" placeholder="ejmplo@gmail.com" aria-describedby="inputGroupPrepend2" required>
                </div>
            </div>
            <div class="col-md-3">
                <label for="validationDefault03" class="form-label"><i class="fab fa-slack-hash"></i> Precio (S/.)</label>
                <input type="text" class="form-control" id="validationDefault03" required placeholder=1,00">
            </div>
            <div class="col-md-3">
                <label for="validationDefault03" class="form-label"><i class="fas fa-truck-loading"></i> Cantidad</label>
                <input type="text" class="form-control" id="validationDefault03" required placeholder="100 ml - 6 Unidades">
            </div>
            <div class="col-md-3">
                <label for="validationDefault05" class="form-label"><i class="fas fa-hourglass-start"></i> Fecha de emision</label>
                <input type="text" class="form-control" id="validationDefault05" required placeholder="12-12-12">
            </div>
            <div class="col-md-3">
                <label for="validationDefault05" class="form-label"> <i class="fas fa-hourglass-end"></i> Fecha de vencimiento</label>
                <input type="text" class="form-control" id="validationDefault05" required placeholder="11-11-11">
            </div>
            <div class="col-12">
                <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                    Marcar como exclusivo
                </label>
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-dark" type="submit">Guardar producto</button>
            </div>
            </form>
</div>
