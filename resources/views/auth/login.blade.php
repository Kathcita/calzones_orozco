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

         <link rel="stylesheet" href="{{ asset('Stilos.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/estilos.css')}}">
        <style>
          .custom-gradient {
           background: linear-gradient(90deg, rgb(247, 146, 216) 0%, rgb(211, 158, 79) 35%, rgb(247, 146, 216) 100%);
           }
          .custom-gradient {
           background-color: #ff0000; /* Rojo */
           }

        </style>
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
          
                          <form action="{{route('login')}}" method="post">
                          @csrf
                            <p>Iniciar Sesión</p>

                            <label class="form-label" for="form2Example11">Usuario</label>
                            <div data-mdb-input-init class="form-outline mb-4">
                              <input type="text" name="usuario" id="form2Example11" class="form-control"
                                placeholder="Ingresa tu Usuario" />
                            </div>

                            <label class="form-label" for="form2Example22">Contraseña</label>
                            <div data-mdb-input-init class="form-outline mb-4">
                              <input type="password" name="password" id="form2Example22" class="form-control" placeholder="Ingresar Contraseña"/>
                            </div>
          
                            <div class="text-center pt-1 mb-5 pb-1">
                              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Ingresar
                                </button>
                              <a class="text-muted" href="#!">Olvido su contraseña?</a>
                            </div>
                          </form>
                            
                          <!-- Mensaje de usuarios no registrados -->
                          @if ($errors->any())
                           <div class="alert alert-danger">
                           <ul>
                             @foreach ($errors->all() as $error)
                             <li>{{ $error }}</li>
                             @endforeach
                            </ul>
                           </div>
                         
                           <!-- Mensaje de usuarios inactivos -->
                         @endif
                         @if (session('error'))
                          <div class="alert alert-danger">
                            
                            {{ session ('error') }}
                          </div>
                          @endif
                        </div>
                      </div>
                       <!--lado lateral -->
                       <div class="col-lg-6 d-flex align-items-center custom-gradient justify-content-center">
                          <div id="imagenlogin"><img src="{{asset('assets/imagenes/img.jpg')}}" alt=""></div>
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