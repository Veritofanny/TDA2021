<div class="container-fluid p-0">

<h1 class="h3 mb-3">Diseño de Formulario</h1>

<div class="row">
    <div class="col-12 col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Forma básica</h5>
                <h6 class="card-subtitle text-muted">Diseño de formulario de Bootstrap predeterminado.</h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Dirección de correo</label>
                        <input type="email" class="form-control" placeholder="Correo">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña</label>
                        <input type="password" class="form-control" placeholder="Contraseña">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Especialidad</label>
                        <textarea class="form-control" placeholder="Especialidad" rows="1"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label w-100">Entrada de archivo</label>
                        <input type="file">
                        <small class="form-text text-muted">Ejemplo de texto de ayuda a nivel de bloque aquí.</small>
                    </div>
                    <div class="mb-3">
                        <label class="form-check m-0">
<input type="checkbox" class="form-check-input">
<span class="form-check-label">Me echa un vistazo</span>
</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Forma horizontal</h5>
                <h6 class="card-subtitle text-muted">Diseño de Bootstrap horizontal.</h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-right">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-right">Contraseña</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-right">Especialidad</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" placeholder="Especialidad" rows="3"></textarea>
                        </div>
                    </div>
                    <fieldset class="mb-3">
                        <div class="row">
                            <label class="col-form-label col-sm-2 text-sm-right pt-sm-0">Radios</label>
                            <div class="col-sm-10">
                                <label class="form-check">
<input name="radio-3" type="radio" class="form-check-input" checked>
<span class="form-check-label">Default radio</span>
</label>
                                <label class="form-check">
<input name="radio-3" type="radio" class="form-check-input">
<span class="form-check-label">Second default radio</span>
</label>
                                <label class="form-check">
<input name="radio-3" type="radio" class="form-check-input" disabled>
<span class="form-check-label">Disabled radio</span>
</label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="mb-3 row">
                        <label class="col-form-label col-sm-2 text-sm-right pt-sm-0">Caja</label>
                        <div class="col-sm-10">
                            <label class="form-check m-0">
<input type="checkbox" class="form-check-input">
<span class="form-check-label">Me echa un vistazo</span>
</label>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-10 ml-sm-auto">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Fila del formulario</h5>
                <h6 class="card-subtitle text-muted">Diseño de columna de Bootstrap.</h6>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputPassword4">Contraseña</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="inputAddress">Dirección 1</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="inputAddress2">Dirección 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="inputCity">Ciudad</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label" for="inputState">Estado</label>
                            <select id="inputState" class="form-control">
<option selected>Elige...</option>
<option>...</option>
</select>
                        </div>
                        <div class="mb-3 col-md-2">
                            <label class="form-label" for="inputZip">Código postal</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" class="form-check m-0">
<input type="checkbox" class="form-check-input">
<span class="form-check-label">Me echa un vistazo</span>
</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Formulario en linea</h5>
                <h6 class="card-subtitle text-muted">Fila horizontal única</h6>
            </div>
            <div class="card-body">
                <form class="row row-cols-md-auto align-items-center">
                    <div class="col-12">
                        <label class="sr-only" for="inlineFormInputName2">Nombre</label>
                        <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Jane Doe">
                    </div>

                    <div class="col-12">
                        <label class="sr-only" for="inlineFormInputGroupUsername2">Nombre de Usuario</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <div class="input-group-text">@</div>
                            <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Nombre de Usuario">
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-check mb-1 mr-sm-2">
                            <input type="checkbox" class="form-check-input" id="customControlInline">
                            <label class="form-check-label" for="customControlInline">Recuérdame</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary mb-2">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>