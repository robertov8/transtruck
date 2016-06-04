<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link rel=icon href="img/road.gif" sizes="16x16" type="img/gif">
        <title> TransTruck - @yield('titulo') </title>
        <!--Import Google Icon Font-->
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">

        <style>
            body{
                display: flex;
                min-height: 100vh;
                flex-direction: column;
            }
            main{
                flex: 1 0 auto;
            }
            nav{
                background-color: #607d8b;
            }
            footer.page-footer{
                background-color: #607d8b;
            }
            .tabs .tab a {
                color: #607d8b;
            }
            .tabs .tab a:hover {
                color: #cfd8dc;
            }
            .tabs .indicator{
                background-color: #607d8b;
            }
            #form_delete{
                display: inline;
            }

        </style>

    </head>

    <body>
        <!-- start navbar -->
        <header>
            <nav>
                <div class="nav-wrapper">
                    <a href="{{ URL::route('usuario.index') }}" class="brand-logo">TransTruck</a>
                    <a href="#" data-activates="mobile-navbar" class="button-collapse"><i class="material-icons">menu</i></a>

                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                            {{-- <li><a href="collapsible.html">Entrar</a></li>
                            <li><a href="collapsible.html">Registrar</a></li> --}}
                        <li><a href="{{ URL::route('usuario.index') }}">Inicio</a></li>
                        <li><a href="#">Opções</a></li>
                        <li><a href="#">Perfil</a></li>
                        <li><a href="#">Ajuda</a></li>
                        <li><a href="{{ url('/logout') }}">Sair</a></li>
                    </ul>

                    <ul id="mobile-navbar" class="side-nav">
                            {{-- <li><a href="collapsible.html">Entrar</a></li>
                            <li><a href="collapsible.html">Registrar</a></li> --}}
                            <li><a href="{{ URL::route('usuario.index') }}">Inicio</a></li>
                            <li><a href="#">Opções</a></li>
                            <li><a href="#">Perfil</a></li>
                            <li><a href="#">Ajuda</a></li>
                            <li><a href="{{ url('/logout') }}">Sair</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <br />
        <!-- end navbar -->

        <!-- start main -->
        <main>
            <!--start linha  -->
            <div class="row">

                {{-- Inicio Logado --}}
                @if(!Auth::guest())
                    <!-- start table -->
                    <div class="col s12">
                        <ul class="tabs">
                            <li class="tab col s3"><a class="active" href="#usuarios">Usuários</a></li>
                            <li class="tab col s3"><a href="#caminhoneiro">Caminhoneiro</a></li>
                            <li class="tab col s3"><a href="#veiculo">Veículo</a></li>
                            <li class="tab col s3"><a href="#gps">Gps</a></li>
                        </ul>
                    </div>

                    <!-- tab 1 -->
                    <div id="usuarios" class="col s12">
                        <div class="container">
                            <br />
                            @yield('tab_usuario')
                        </div>
                    </div>
                    <!-- tab 1 -->

                    <!-- tab 2 -->
                    <div id="caminhoneiro" class="col s12">
                        <div class="container">
                            <br />
                            @yield('tab_caminhoneiro')
                        </div>
                    </div>
                    <!-- tab 2 -->

                    <!-- tab 3 -->
                    <div id="veiculo" class="col s12">
                        <div class="container">
                            <br />
                            @yield('tab_veiculo')
                        </div>
                    </div>
                    <!-- tab 3 -->

                    <!-- tab 4 -->
                    <div id="gps" class="col s12">
                        <div class="container">
                            <br />
                            @yield('tab_gps')
                        </div>
                    </div>
                    <!-- tab 4 -->
                    {{-- Fim Logado --}}
                @else
                    {{-- Inicio Deslogado --}}
                    {{-- Fim Deslogado --}}
                @endif

                <!-- end table  -->
            </div>
            <!-- end linha  -->

        </main>
        <!-- end main -->



        <!-- start footer -->
        <footer class="page-footer">
          <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Footer Content</h5>
                        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                    </div>

                    <div class="col l4 offset-l2 s12">
                        <h5 class="white-text">Links</h5>

                        <ul>
                            <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer-copyright">
                <div class="container">
                © 2016 Copyright Text <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </div>
            </div>
        </footer>
        <!-- end footer -->

        <!--Import jQuery before materialize.js-->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>


        <script>
            $( document ).ready(function(){
                $(".button-collapse").sideNav();
            });
        </script>
    </body>
</html>
