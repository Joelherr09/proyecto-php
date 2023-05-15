<header>
        <nav class="navbar navbar-expand-lg bg-primary  ">
            <div class="container-fluid" style="color: white;">
                <figure>
                    <img src="img/logofondoblanco-removebg-preview.png" alt="" style=" width: 60%;height: 70%;">
                </figure>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav" style="
                    color: white;">
                        <a class="nav-link active link-navbar" aria-current="page" href="perfil-trabajador.php"
                            style="margin-right: 60px;">Inicio</a>
                        <a class="nav-link active link-navbar" href="perfil-usuario.html">Perfil Usuario</a>
                        <a class="nav-link active link-navbar" href="epp.html">E.P.P</a>
                        <a class="nav-link active link-navbar" href="perfil-empresa.html">Perfil Cliente</a>
                        <a class="nav-link active link-navbar" href="lista-usuarios.html">Lista Usuarios</a>
                        <a class="nav-link active link-navbar" href="perfil-trabajador.html">Perfil Trabajador</a>
                        <a class="nav-link active link-navbar" href="perfil-apr.html">Perfil APR</a>
                        <a class="nav-link active link-navbar" href="perfil-epp.html">Perfil EPP</a>
                        <a class="nav-link">Bienvenido <b> <?php echo $_SESSION['usuario']."</b> con el perfil de <b>".$_SESSION['perfil']."</b>"; ?></a>
                        <a class="nav-link" href="salir.php">Cerrar sesión</a>
                        
                    </div>
                </div>
            </div>
        </nav>
    </header>