@yield('menu')
<nav class="navbar navbar-dark bg-dark
 fixed-top">
        <div class="container">



          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Controle de Viaturas</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="offcanvas-body">

              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{route('contas.index')}}">Home</a>
                </li>
                <li>
                    <a href="{{ route('contas.index') }}" class="nav-link active px-2 text-white">Contas</a>
                </li>
                <li>
                    <a href="{{ route('workshops.create') }}" class="nav-link active px-2 text-white">Oficinas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>



                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button"
                  data-bs-toggle="dropdown" aria-expanded="false"><span class=""></span>
                    Oficinas
                  </a>
                 
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><span class=""></span>
                      Veículos
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" role="menu">
                      <li><a href=""></a></li>
                      <li><a class="dropdown-item" href="{{route( 'workshops.create')}}":active="request()->routeIs('workshops.create')">{{ __('Cadastrar Veículo') }}</a></li>

                      <li><a class="dropdown-item" href="{{route('workshops.index')}}" :active="request()->routeIs('workshops.index')">{{ __('Lista de Veículos') }}</a></li>



                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>


                  {{--
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false"><span class=""></span>
                      Usuarios
                    </a>

                    <ul class="dropdown-menu dropdown-menu-dark" role="menu">
                      <li><a href=""></a></li>
                      <li><a class="dropdown-item" href="{{route( 'users.create')}}":active="request()->routeIs('users.create')">{{ __('Cadastrar Usuario') }}</a></li>

                      <li><a class="dropdown-item" href="{{route('users.index')}}" :active="request()->routeIs('users.index')">{{ __('Lista de Usuarios') }}</a></li>



                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#"></a></li>
                    </ul>
                  </li>--}}

              </ul>

            </ul>




            </div>
          </div>
        </div>
      </nav>
