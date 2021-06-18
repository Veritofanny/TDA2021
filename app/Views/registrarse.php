<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Registrarse</h1>
    <button type="button" class="btn btn-sm btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Iniciar sesión
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
                    <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Correo electrónico</label>
                    </div>
                    <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña">
                    <label for="floatingPassword">Contraseña</label>
                    </div>

                    <div class="form-check mb-3">
                    <label>
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">Recuérdame
                    </label>
                    <button class="w-100 btn btn-lg btn-dark shadow mt-3" type="submit" >Iniciar sesión</button>                    
                </form>
                </div>
                <div class="row justify-content-center mt-4">
                    <div class="col-2">
                        <a href="#" class="my-2"><i class="fab fa-facebook-f fs-2"></i></a>
                    </div>
                    <div class="col-2">
                        <a href="#" class="link-info my-2"><i class="fab fa-twitter fs-2"></i></a>
                    </div>
                    <div class="col-2">
                        <a href="#" class="link-danger my-2"><i class="fab fa-google fs-2"></i></a>
                    </div> 
                </div>    
                <p class="my-3 text-muted">&copy; 2021-2025</p>
            </main>
        </div>
        </div>
    </div>
    </div>
</div>

<div class="container pb-3 justify-content-center">
    <form class="justify-content-center">
        <div class="col-md-8 shadow mx-auto my-4 py-3">
            <h5 class="border-bottom border-gray mx-2 mt-1 mb-2">Perfil</h5>
            <div class="row mx-3 mb-3">
            <div class="col-6">
                <label class="form-label">Nombre</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-user text-secondary"></i></i></span>
                    <input type="text" class="form-control" placeholder="Primer nombre" aria-label="First name" aria-describedby="addon-wrapping" required>
                </div>
            </div>
            <div class="col-6">
                <label for="inputPassword5" class="form-label">Apellido</label>
                <input type="text" aria-label="Last name" class="form-control" placeholder="Apellido" required>
            </div>
            </div>
            <div class="row mx-3">
            <div class="col-6">
                <label for="inputPassword5" class="form-label">Nombre de usuario</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-at text-secondary"></i></span>
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping" required>
                </div>
            </div>
            <div class="col-6">
                <label for="inputPassword5" class="form-label">Teléfono</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-lock text-secondary"></i></span>
                    <input type="text" class="form-control" placeholder="Teléfono" aria-describedby="addon-wrapping" required>
                </div>
            </div>
            </div>
        </div>
        <div class="col-md-8 shadow mx-auto my-4 py-3">
            <h5 class="border-bottom border-gray mx-2 mt-1 mb-2">Cuenta</h5>
            <div class="row mx-3 mb-3">
            <div class="col-6">
                <label for="inputPassword5" class="form-label">Correo electrónico</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="far fa-envelope text-secondary"></i></span>
                    <input type="email" class="form-control" placeholder="E-mail" aria-describedby="addon-wrapping" required>
                </div>
            </div>
            <div class="col-6">
                <label for="inputPassword5" class="form-label">Contraseña</label>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="addon-wrapping"><i class="fas fa-lock text-secondary"></i></span>
                    <input type="password" class="form-control" placeholder="Contraseña" aria-describedby="passwordHelpBlock" required>
                </div>
            </div>
            </div>
            <div class="row mx-3">
            <div class="col-6">
                <label for="inputPassword5" class="form-label">País</label>
                <select class="form-select" id="inputGroupSelect01" required>
                    <option selected disabled value="">Seleccionar país...</option>
                    <option value="1">Perú</option>
                    <option value="2">Argentina</option>
                    <option value="3">Ecuador</option>
                    <option value="3">...</option>
                </select>
            </div>
            <div class="col-6">
                <label for="inputPassword5" class="form-label">Ciudad</label>
                <select class="form-select" id="inputGroupSelect01" required>
                    <option selected disabled value="">Seleccionar Ciudad...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            </div>
        </div>

        <div class="col-md-8 shadow mx-auto my-4 py-3">
            <h5 class="border-bottom border-gray mx-2 mt-1 mb-2">Privacidad</h5>
            <div class="d-md-flex justify-content-between align-items-center border-bottom pb-3 my-3">
                <div class="container">
                    <h4 class="mb-1 h5">Perfil público</h4>
                    <p class="mb-0 font-14">
                        Hacer que su perfil sea público significa que cualquiera puede ver su información.
                    </p>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                </div>
            </div>
            <div class="d-md-flex justify-content-between align-items-center mt-3">
                <div class="container">
                    <h4 class="mb-1 h5">Exponga su correo electrónico.</h4>
                    <p class="mb-0 font-14">
                        Esto permite que el usuario lo encuentre por su dirección de correo electrónico.
                    </p>
                </div> 
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                </div>
            </div>
        </div>
        <div class=" col-2 mx-auto">
            <button class="btn-lg btn-dark w-100" type="submit">Registrarse</button>
        </div>
        </form>
    </div>
</div>

