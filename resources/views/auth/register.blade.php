<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <link rel="stylesheet" href="{{ asset('assets/estilos.css')}}">
    </head>

    <body>
       
        <section class="h-100 gradient-form" style="background-color: #eee;">
            <div class="container py-5 h-100">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                  <div class="card rounded-3 text-black">
                    <div class="row g-0">
                      <div class="col-lg-6">
                        <div class="card-body p-md-5 mx-md-4">
          
                          <div class="text-center">
                            <img src="{{asset('assets/imagenes/logo.png')}}"
                              style="width: 185px;" alt="logo">
                            <h4 class="mt-1 mb-5 pb-1">Login</h4>
                          </div>
          
                          <form action="{{route('register')}}" method="post">
                          @csrf
                            <p>Iniciar Sesión</p>

                            <label class="form-label" for="form2Example11">Nombre</label>
                            <div data-mdb-input-init class="form-outline mb-4">
                              <input type="tex" name="name" id="form2Example11" class="form-control"
                                placeholder="Ingresar nombre" />
                            </div>

                            <label class="form-label" for="form2Example11">Correo Email</label>
                            <div data-mdb-input-init class="form-outline mb-4">
                              <input type="email" name="email" id="form2Example11" class="form-control"
                                placeholder="Ingresa tu correo" />
                            </div>

                            <label class="form-label" for="form2Example22">Contraseña</label>
                            <div data-mdb-input-init class="form-outline mb-4">
                              <input type="password" name="password" id="form2Example22" class="form-control" placeholder="Ingresar Contraseña"/>
                            </div>

                            <label class="form-label" for="form2Example22"> Confirmar Contraseña</label>
                            <div data-mdb-input-init class="form-outline mb-4">
                              <input type="password" name="password_confirmation" id="form2Example22" class="form-control" placeholder="Ingresar Contraseña"/>
                            </div>
          
                            <div class="text-center pt-1 mb-5 pb-1">
                              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Registrarse
                                </button>
                            </div>
          
                            <div class="d-flex align-items-center justify-content-center pb-4">
                              <p class="mb-0 me-2">Ir a logion</p>
                              <a href="{{route('login')}}" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger">login</a>
                            </div>
          
                          </form>
          
                        </div>
                      </div>
                       <!--lado lateral -->
                      <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                        Quasi itaque dicta ipsum suscipit consectetur quisquam dolor aliquam distinctio,
                         esse facilis temporibus excepturi veniam voluptate, saepe nihil culpa. Praesentium, dicta necessitatibus?
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>



        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
