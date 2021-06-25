<div class="container-fluid px-6 py-4">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-12">
            <!-- Page header -->
            <div>
              <div class="border-bottom pb-4 mb-4 d-flex align-items-center
                  justify-content-between">
                <div class="mb-2 mb-lg-0">
                  <h3 class="mb-0 fw-bold">DOCENTE</h3>
                </div>
                <div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Iniciar Sesión en otra Cuenta
                    </button>

                    

                    


                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content mx-5">
        <div class="container">
            
        <form action="#" class="credit-card-div my-4">
        <!-- Username -->
        <div class="mb-3">
                <label for="username" class="form-label">Nombre de Usuario</label>
                <input type="text" id="username" class="form-control" name="username" placeholder="Nombre de usuario" required="">
              </div>
              <!-- Email -->
              <div class="mb-3">
                <label for="email" class="form-label">Dirección de Correo Electrónico</label>
                <input type="email" id="email" class="form-control" name="email" placeholder="Dirección de Correo Electrónico aquí" required="">
              </div>
              <!-- Password -->
              <div class="mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" id="password" class="form-control" name="password" placeholder="**************" required="">
              </div>
              
              <!-- Checkbox -->
              <div class="mb-3">
                <div class="form-check custom-checkbox">
                  <input type="checkbox" class="form-check-input" id="agreeCheck">
                  <label class="form-check-label" for="agreeCheck"><span
                        class="fs-5">Recordarme </span></label>
                </div>
              </div>
              <div>
                <!-- Button -->
                <div class="d-grid">
                  <button type="submit" class="btn btn-primary">
                    Iniciar Sesión
                  </button>
                </div>

                <div class="d-md-flex justify-content-between mt-4">
                  
                  <div>
                    <a href="forget-password.html" class="text-inherit
                        fs-5">¿Olvidaste tu contraseña?</a>
                  </div>

                </div>
              </div>
        </form>
        </div>
        </div>
        </div>
        </div>







                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-8">
          <div class="col-xl-3 col-lg-4 col-md-12 col-12">
            <div class="mb-4 mb-lg-0">
              <h4 class="mb-1">Configuración General</h4>
              <p class="mb-0 fs-5 text-muted">Ajustes de configuración de perfil </p>
            </div>

          </div>

          <div class="col-xl-9 col-lg-8 col-md-12 col-12">
            <!-- card -->
            <div class="card">
              <!-- card body -->
              <div class="card-body">
                <div class=" mb-6">
                  <h4 class="mb-1">Configuración General</h4>

                </div>
                <div class="row align-items-center mb-8">
                  <div class="col-md-3 mb-3 mb-md-0">
                    <h5 class="mb-0">Avatar</h5>
                  </div>
                  <div class="col-md-9">
                    <div class="d-flex align-items-center">
                      <div class="me-3">
                        <img src="<?php echo base_url('assets/img/avatar-5.jpg'); ?>" class="rounded-circle avatar avatar-lg" alt="">
                      </div>
                      <div>
                        <button type="submit" class="btn btn-outline-white
                            me-1">Cambiar</button>
                        <button type="submit" class="btn btn-outline-white">Remover</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- col -->
                <div class="row mb-8">
                  <div class="col-md-3 mb-3 mb-md-0">
                    <!-- heading -->
                    <h5 class="mb-0">Foto de Portada</h5>
                  </div>
                  <div class="col-md-9">
                    <!-- dropzone input -->
                    <div>
                      <form action="#" class="dropzone mb-3 border-dashed">
                        <div class="fallback">
                          <input name="file" type="file" multiple />
                        </div>
                      </form>
                      <button type="submit" class="btn btn-outline-white">Cambiar</button>
                    </div>
                  </div>
                </div>
                <div>
                  <!-- border -->
                  <div class="mb-6">
                    <h4 class="mb-1">Información Básica</h4>

                  </div>
                  <form>
                    <!-- row -->

                    <div class="mb-3 row">
                      <label for="fullName" class="col-sm-4 col-form-label
                          form-label">Nombre Completo</label>
                      <div class="col-sm-4 mb-3 mb-lg-0">
                        <input type="text" class="form-control" placeholder="Nombres" id="fullName" required>
                      </div>
                      <div class="col-sm-4">
                        <input type="text" class="form-control" placeholder="Apellidos" id="lastName" required>
                      </div>
                    </div>

                    <!-- row -->
                    <div class="mb-3 row">
                      <label for="email" class="col-sm-4 col-form-label
                          form-label">Correo Electrónico</label>
                      <div class="col-md-8 col-12">
                        <input type="email" class="form-control" placeholder="Correo Electrónico" id="email" required>
                      </div>
                    </div>
                    <!-- row -->
                    <div class="mb-3 row">
                      <label for="phone" class="col-sm-4 col-form-label
                          form-label">Teléfono <span class="text-muted">(Opcional)</span></label>
                      <div class="col-md-8 col-12">
                        <input type="text" class="form-control" placeholder="Teléfono" id="phone" required>
                      </div>
                    </div>
                    <!-- row -->
                    <div class="mb-3 row">
                      <label for="location" class="col-sm-4 col-form-label
                          form-label">Localidad</label>

                      <div class="col-md-8 col-12">
                        <select class="form-select" id="location">
                            <option selected>Seleccione el País</option>
                            <option value="1">Perú</option>
                            <option value="2">Brasil</option>
                            <option value="3">Argentina</option>
                          </select>
                      </div>
                    </div>



                    <!-- row -->
                    <div class="mb-3 row">
                      <label for="location" class="col-sm-4 col-form-label
                          form-label">Universidad</label>

                      <div class="col-md-8 col-12">
                        <select class="form-select" id="location">
                            <option selected>Seleccione la universidad donde se graduó</option>
                            <option value="1">Universidad Nacional del Altiplano</option>
                            <option value="2">Universidad de Sao Pablo</option>
                            <option value="3">Universidad de Buenos Aires</option>
                          </select>
                      </div>
                    </div>





                    <!-- row -->
                    <div class="mb-3 row">
                      <label for="addressLine" class="col-sm-4 col-form-label
                          form-label">Especialidad</label>


                      <div class="col-md-8 col-12">
                        <input type="text" class="form-control" placeholder="Escriba su especialidad" id="addressLine" required>
                      </div>
                    </div>
                    <!-- row -->
                    <div class="mb-3 row">
                      <label for="addressLineTwo" class="col-sm-4
                          col-form-label form-label">Especialidad 2</label>
                      <div class="col-md-8 col-12">
                        <input type="text" class="form-control" placeholder="Escriba su especialidad 2 si la tiene" id="addressLineTwo" required>
                      </div>
                    </div>
                    <!-- row -->
                    <div class="row align-items-center">
                      <label for="zipcode" class="col-sm-4 col-form-label
                          form-label">Años de Servicio <i data-feather="info"
                            class="me-2 icon-xs"></i></label>

                      <div class="col-md-8 col-12">
                        <input type="text" class="form-control" placeholder="Años de Servicio" id="zipcode" required>
                      </div>
                      <div class="offset-md-4 col-md-8 mt-4">
                        <button type="submit" class="btn btn-primary"> Guardar Cambios</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="row mb-8">
          <div class="col-xl-3 col-lg-4 col-md-12 col-12">
            <div class="mb-4 mb-lg-0">
              <h4 class="mb-1">Configuraciones de Correo Electrónico</h4>
              <p class="mb-0 fs-5 text-muted">Agregar una configuración de correo electrónico al perfil </p>
            </div>

          </div>

          <div class="col-xl-9 col-lg-8 col-md-12 col-12">
            <!-- card -->
            <div class="card" id="edit">
              <!-- card body -->
              <div class="card-body">
                <div class="mb-6">
                  <h4 class="mb-1">Correo Electrónico</h4>

                </div>
                <form>
                  <!-- row -->
                  <div class="mb-3 row">
                    <!-- label -->
                    <label for="newEmailAddress" class="col-sm-4
                        col-form-label form-label">Nuevo Correo Electrónico</label>
                    <div class="col-md-8 col-12">
                      <!-- input -->
                      <input type="email" class="form-control" placeholder="Ingrese su Dirección de Correo Electrónico" id="newEmailAddress" required>
                    </div>
                    <!-- button -->
                    <div class="offset-md-4 col-md-8 col-12 mt-3">
                      <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                  </div>
                </form>

                <div class="mb-6 mt-6">
                  <h4 class="mb-1">Cambia tu contraseña</h4>

                </div>
                <form>
                  <!-- row -->
                  <div class="mb-3 row">
                    <label for="currentPassword" class="col-sm-4
                        col-form-label form-label">Contraseña actual</label>

                    <div class="col-md-8 col-12">
                      <input type="password" class="form-control" placeholder="Ingrese su contraseña actual" id="currentPassword" required>
                    </div>
                  </div>
                  <!-- row -->
                  <div class="mb-3 row">
                    <label for="currentNewPassword" class="col-sm-4
                        col-form-label form-label">Nueva contraseña</label>

                    <div class="col-md-8 col-12">
                      <input type="password" class="form-control" placeholder="Ingrese su nueva contraseña" id="currentNewPassword" required>
                    </div>
                  </div>
                  <!-- row -->
                  <div class="row align-items-center">
                    <label for="confirmNewpassword" class="col-sm-4
                        col-form-label form-label">Confirme su nueva contraseña</label>
                    <div class="col-md-8 col-12 mb-2 mb-lg-0">
                      <input type="password" class="form-control" placeholder="Confirme su nueva contraseña" id="confirmNewpassword" required>
                    </div>
                    <!-- list -->
                    <div class="offset-md-4 col-md-8 col-12 mt-4">
                      <h6 class="mb-1">Requisitos de la contraseña:</h6>
                      <p>Asegúrese de que se cumplen estos requisitos:</p>
                      <ul>
                        <li> Mínimo 8 caracteres, cuantos más, mejor</li>
                        <li>Al menos un carácter en minúscula</li>
                        <li>Al menos un carácter en mayúscula</li>
                        <li>Al menos un número, símbolo o carácter de espacio en blanco
                        </li>
                      </ul>
                      <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="row mb-8">
          <div class="col-xl-3 col-lg-4 col-md-12 col-12">
            <div class="mb-4 mb-lg-0">
              <h4 class="mb-1">Preferencias</h4>
              <p class="mb-0 fs-5 text-muted">Configure sus preferencias </p>
            </div>

          </div>

          <div class="col-xl-9 col-lg-8 col-md-12 col-12">
            <div class="card" id="preferences">
              <div class="card-body">
                <div class="mb-6">
                  <h4 class="mb-1">Preferencias</h4>

                </div>
                <form>
                  <!-- row -->
                  <div class="mb-3 row">
                    <label for="langauge" class="col-sm-4 col-form-label
                        form-label">Idioma</label>

                    <div class="col-md-8 col-12">
                      <select class="form-select" id="langauge">
                          <option selected>Español</option>
                          <option value="1">English</option>
                          <option value="2">Portugués</option>
                          <option value="3">Chino </option>
                        </select>
                    </div>
                  </div>
                  <!-- row -->
                  <div class="mb-3 row">
                    <label for="timeZone" class="col-sm-4 col-form-label
                        form-label">Zona horaria</label>

                    <div class="col-md-8 col-12">
                      <select class="form-select" id="timeZone">
                          <option selected>GMT +5.30</option>
                          <option value="1">GMT +5.30</option>
                          <option value="2">GMT +5.30</option>
                          <option value="3">GMT +5.30 </option>
                        </select>
                    </div>
                  </div>
                  <!-- row -->
                  <div class="mb-3 row">
                    <label for="dateFormat" class="col-sm-4 col-form-label
                        form-label">Informe de Errores</label>

                    <div class="col-md-8 col-12">
                      <select class="form-select" id="dateFormat">
                          <option selected>No enviar</option>
                          <option value="Preference">Enviar</option>
                        </select>
                    </div>
                  </div>

                  <!-- row -->
                  <div class="mb-3 row">
                    <label class="col-sm-4 col-form-label form-label">Herramientas Interactivas</label>
                    <div class="col-md-8 col-12">
                      <div class="form-check custom-radio
                          form-check-inline">
                        <input type="radio" id="customRadioInlineOn" name="customRadioInline" class="form-check-input">
                        <label class="form-check-label" for="customRadioInlineOn">Habilitado
                          </label>
                      </div>
                      <div class="form-check custom-radio
                          form-check-inline">
                        <input type="radio" id="customRadioInlineOff" name="customRadioInline" class="form-check-input">
                        <label class="form-check-label" for="customRadioInlineOff">Deshabilitado</label>
                      </div>
                    </div>
                  </div>
                  <!-- row -->
                  <div class="mb-3 row">
                    <div class="col-md-4 col-12">
                      <label class="mb-0 form-label">Generar sondeo de asistencia</label>
                    </div>
                    <div class="col-md-8 col-12">
                      <div class="form-check  mb-2">
                        <input type="checkbox" class="form-check-input" id="customChecktellMe">
                        <label class="form-check-label" for="customChecktellMe">Al inicio</label>
                      </div>
                      <div class="form-check  mb-2">
                        <input type="checkbox" class="form-check-input" id="customCheckemail">
                        <label class="form-check-label" for="customCheckemail">Durante</label>
                      </div>
                      <div class="form-check  mb-2">
                        <input type="checkbox" class="form-check-input" id="customCheckemailTwo" checked>
                        <label class="form-check-label" for="customCheckemailTwo">Al final</label>
                      </div>
                    </div>
                  </div>

                
                <!-- row -->
                <div class="mb-3 row">
                    <label class="col-sm-4 col-form-label form-label">Duración de Sondeo</label>
                    <div class="col-md-8 col-12">
                      <div class="form-check custom-radio
                          form-check-inline">
                        <input type="radio" id="customRadioInlineOn" name="customRadioInline" class="form-check-input">
                        <label class="form-check-label" for="customRadioInlineOn">5 minutos
                          </label>
                      </div>
                      <div class="form-check custom-radio
                          form-check-inline">
                        <input type="radio" id="customRadioInlineOff" name="customRadioInline" class="form-check-input">
                        <label class="form-check-label" for="customRadioInlineOff">10 minutos</label>
                      </div>
                    </div>
                    <div class="offset-md-4 col-md-8 col-12 mt-2">
                      <button type="submit" class="btn btn-primary">Save
                          Changes</button>
                    </div>
                </div>


                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row mb-8">
          <div class="col-xl-3 col-lg-4 col-md-12 col-12">
            <div class="mb-4 mb-lg-0">
              <h4 class="mb-1">Notificaciones</h4>
              <p class="mb-0 fs-5 text-muted">Cambiar Configuraciones de Notificaciones </p>
            </div>

          </div>

          <div class="col-xl-9 col-lg-8 col-md-12 col-12">
            <!-- card -->

            <div class="card">
              <!-- card body -->
              <div class="card-body">
                <div class="mb-6">
                  <h4 class="mb-1">Notificación por correo electrónico, móvil y Slack</h4>
                </div>
                <div class="mb-4">
                  <!-- alert -->
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  Para comenzar a usar Slack para notificaciones personales, primero debe conectar Slack.
                    <button type="submit" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

        </button>
                  </div>
                </div>
                <!-- table -->
                <div class="table-responsive mb-3">
                  <table class="table text-nowrap">
                    <thead class="table-light">
                      <tr>
                        <th class="w-75">ACTIVIDAD Y CONVERSACIÓN</th>
                        <th><i data-feather="smartphone" class="icon-sm me-2"></i></th>
                        <th><i data-feather="slack" class="icon-sm me-2"></i></th>
                        <th><i data-feather="mail" class="icon-sm me-2"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>

                        <td class="border-top-0">

                        </td>
                        <td class="border-top-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckOne">
                            <label class="form-check-label" for="customCheckOne"></label>
                          </div>
                        </td>
                        <td class="border-top-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckTwo">
                            <label class="form-check-label" for="customCheckTwo"></label>
                          </div>
                        </td>
                        <td class="border-top-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckThree">
                            <label class="form-check-label" for="customCheckThree"></label>
                          </div>
                        </td>
                      </tr>
                      <tr>

                        <td class="border-top-0">
                            Cuando un archivo se comparte con un equipo
                        </td>
                        <td class="border-top-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckFour">
                            <label class="form-check-label" for="customCheckFour"></label>
                          </div>
                        </td>
                        <td class="border-top-0">
                          <i data-feather="minus" class="text-muted icon-sm"></i>
                        </td>
                        <td class="border-top-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckFive">
                            <label class="form-check-label" for="customCheckFive"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>

                        <td class="border-top-0">
                            Cuando alguien solicita acceso a mi diseño
                        </td>
                        <td class="border-top-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckSix">
                            <label class="form-check-label" for="customCheckSix"></label>
                          </div>
                        </td>
                        <td class="border-top-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckSeven">
                            <label class="form-check-label" for="customCheckSeven"></label>
                          </div>
                        </td>
                        <td class="border-top-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckEight">
                            <label class="form-check-label" for="customCheckEight"></label>
                          </div>
                        </td>
                      </tr>
                      <tr>

                        <td class="border-top-0">
                            Cuando alguien comenta en los hilos que sigo
                        </td>
                        <td class="border-top-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckNine">
                            <label class="form-check-label" for="customCheckNine"></label>
                          </div>
                        </td>
                        <td class="border-top-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckTen">
                            <label class="form-check-label" for="customCheckTen"></label>
                          </div>
                        </td>
                        <td class="border-top-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckEleven">
                            <label class="form-check-label" for="customCheckEleven"></label>
                          </div>
                        </td>
                      </tr>
                      <tr>

                        <td class="border-top-0">
                            Cuando alguien me @menciona en algún comentario
                        </td>
                        <td class="border-top-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckTwelve">
                            <label class="form-check-label" for="customCheckTwelve"></label>
                          </div>
                        </td>
                        <td class="border-top-0">
                          <i class="text-muted icon-sm" data-feather="minus"></i>
                        </td>
                        <td class="border-top-0">
                          <i class="text-muted icon-sm" data-feather="minus"></i>
                        </td>
                      </tr>

                    </tbody>
                  </table>
                </div>
                <div class="table-responsive mb-3">
                  <table class="table text-nowrap">
                    <thead class="table-light">
                      <tr>
                        <th class="w-75">Actividades de Proyecto</th>
                        <th><i data-feather="smartphone" class="me-2 icon-sm"></i></th>
                        <th><i data-feather="slack" class="me-2 icon-sm"></i></th>
                        <th><i data-feather="mail" class="me-2 icon-sm"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>

                        <td class="border-top-0">
                            Cuando alguien me agrega a un proyecto
                        </td>
                        <td class="border-top-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckThirteen">
                            <label class="form-check-label" for="customCheckThirteen"></label>
                          </div>
                        </td>
                        <td class="border-top-0">
                          <i class="text-muted icon-sm" data-feather="minus"></i>
                        </td>
                        <td class="border-top-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckFourteen">
                            <label class="form-check-label" for="customCheckFourteen"></label>
                          </div>
                        </td>
                      </tr>


                    </tbody>
                  </table>
                </div>
                <div class="table-responsive">
                  <table class="table mb-0 text-nowrap">
                    <thead class="table-light">
                      <tr>
                        <th class="w-75">ACTIVIDAD DE EQUIPO
                        </th>
                        <th><i data-feather="smartphone" class="me-2 icon-sm"></i></th>
                        <th><i data-feather="slack" class="me-2 icon-sm"></i></th>
                        <th><i data-feather="mail" class="me-2 icon-sm"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>

                        <td class="border-top-0">
                            Cuando mis estudiantes se registren
                        </td>
                        <td class="border-top-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckSixteen">
                            <label class="form-check-label" for="customCheckSixteen"></label>
                          </div>
                        </td>
                        <td class="border-top-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckSeventeen">
                            <label class="form-check-label" for="customCheckSeventeen"></label>
                          </div>
                        </td>
                        <td class="border-top-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckEighteen">
                            <label class="form-check-label" for="customCheckEighteen"></label>
                          </div>
                        </td>
                      </tr>
                      <tr>

                        <td class="border-top-0">
                            Cuando alguien solicita acceso a mi equipo
                        </td>
                        <td class="border-top-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckNineteen">
                            <label class="form-check-label" for="customCheckNineteen"></label>
                          </div>
                        </td>
                        <td class="border-top-0">
                          <i data-feather="minus" class="text-muted icon-sm"></i>
                        </td>
                        <td class="border-top-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckTwenty">
                            <label class="form-check-label" for="customCheckTwenty"></label>
                          </div>
                        </td>
                      </tr>

                      <tr>

                        <td class="border-bottom-0">
                            Cuando alguien me invita a un equipo
                        </td>
                        <td class="border-bottom-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckTwentyone">
                            <label class="form-check-label" for="customCheckTwentyone"></label>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckTwentytwo">
                            <label class="form-check-label" for="customCheckTwentytwo"></label>
                          </div>
                        </td>
                        <td class="border-bottom-0">
                          <div class="form-check ">
                            <input type="checkbox" class="form-check-input" id="customCheckTwentythree">
                            <label class="form-check-label" for="customCheckTwentythree"></label>
                          </div>
                        </td>
                      </tr>


                    </tbody>
                  </table>
                </div>
                <hr class="my-6">
                <div class="row">
                  <div class="col-xl-6 col-md-12 mb-3">
                    <label for="notification" class="form-label">¿Cuándo deberíamos enviarte notificaciones?</label>
                    <select class="form-select" id="notification">
          <option selected>Siempre</option>
          <option value="1">Interdiario</option>
          <option value="2">Semanal</option>
          <option value="3">No recibir notificaciones</option>
        </select>
                  </div>
                  <div class="col-xl-3 col-md-6 mb-3">
                    <label for="dailyDigest" class="form-label">Resumen Diario
        </label>
                    <select class="form-select" id="dailyDigest">
          <option selected>Cada día</option>
          <option value="1">Resumen semanal</option>
          <option value="2">Resumen mensual</option>
          <option value="3">No envíar resumenes diarios</option>
        </select>
                  </div>
                  <div class="col-xl-3 col-md-6 mb-3">
                    <label for="time" class="form-label">Hora</label>
                    <select class="form-select" id="time">
          <option selected>2PM
          </option>
          <option value="1">7AM</option>
          <option value="2">5PM</option>
          <option value="3">9PM</option>
        </select>
                  </div>
                  <div class="col-xl-3 col-md-12 ">
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                  </div>
                </div>


              </div>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-xl-3 col-lg-4 col-md-12 col-12">
            <div class="mb-4 mb-lg-0">
              <h4 class="mb-1">Eliminar Cuenta</h4>
              <p class="mb-0 fs-5 text-muted">Esta acción no se puede revertir</p>
            </div>

          </div>

          <div class="col-xl-9 col-lg-8 col-md-12 col-12">
            <!-- card -->

            <div class="card mb-6">
              <!-- card body -->
              <div class="card-body">
                <div class="mb-6">
                  <h4 class="mb-1">Zona Peligrosa </h4>

                </div>
                <div>
                  <!-- text -->
                  <p>Elimine todo el contenido que tenga, como artículos, comentarios, su lista de lectura o mensajes de chat. Permita que su nombre de usuario esté disponible para cualquier persona.</p>
                  <a href="#" class="btn btn-danger">Eliminar Cuenta</a>
                  <p class="small mb-0 mt-3">No dude en ponerse en contacto con <a href="#">ejemplo@ejemplo.com</a> para más información.
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>