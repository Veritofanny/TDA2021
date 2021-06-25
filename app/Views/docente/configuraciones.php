<div class="container-fluid p-0">

<h1 class="h3 mb-3">Configuraciones</h1>

<div class="row">
    <div class="col-md-3 col-xl-2">

        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Usuario</h5>
            </div>

            <div class="list-group list-group-flush" role="tablist">
                <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account" role="tab">
Cuenta
</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#password" role="tab">
Contraseña
</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
Seguridad y Privacidad
</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
Notificaciones de Correo
</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
Notificaciones Web
</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
Widgets
</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
Tus Datos
</a>
                <a class="list-group-item list-group-item-action" data-toggle="list" href="#" role="tab">
Eliminar Cuenta
</a>
            </div>
        </div>
    </div>

    <div class="col-md-9 col-xl-10">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="account" role="tabpanel">

                <div class="card">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Información Pública</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label class="form-label" for="inputUsername">Nombre de Usuario</label>
                                        <input type="text" class="form-control" id="inputUsername" placeholder="Nombre de usuario">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label" for="inputUsername">Biografía</label>
                                        <textarea rows="2" class="form-control" id="inputBio" placeholder="Escribe algo acerca de ti"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="text-center">
                                        <img alt="Charles Hall" src="<?php echo base_url('assets/img/avatars/avatar.jpg'); ?>" class="rounded-circle img-responsive mt-2" width="128" height="128" />
                                        <div class="mt-2">
                                            <span class="btn btn-primary"><i class="fas fa-upload"></i> Cargar</span>
                                        </div>
                                        <small>Para obtener los mejores resultados, use una imagen de al menos 128px por 128px en formato .jpg </small>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </form>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Información Privada</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="inputFirstName">Primer Nombre</label>
                                    <input type="text" class="form-control" id="inputFirstName" placeholder="Primer Nombre">
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="inputLastName">Apellidos</label>
                                    <input type="text" class="form-control" id="inputLastName" placeholder="Apellidos">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="inputAddress">Dirección</label>
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
<option selected>Elegir...</option>
<option>...</option>
</select>
                                </div>
                                <div class="mb-3 col-md-2">
                                    <label class="form-label" for="inputZip">Codigo Postal</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                        </form>

                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="password" role="tabpanel">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Password</h5>

                        <form>
                            <div class="mb-3">
                                <label class="form-label" for="inputPasswordCurrent">Current password</label>
                                <input type="password" class="form-control" id="inputPasswordCurrent">
                                <small><a href="#">Forgot your password?</a></small>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="inputPasswordNew">New password</label>
                                <input type="password" class="form-control" id="inputPasswordNew">
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="inputPasswordNew2">Verify password</label>
                                <input type="password" class="form-control" id="inputPasswordNew2">
                            </div>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>