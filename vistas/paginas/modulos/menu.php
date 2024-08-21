<aside class="main-sidebar sidebar-dark-primary elevation-4">

  <!--=====================================
              LOGO
  ======================================-->
  <a href="inicio" class="brand-link">
  
    <img src="vistas/img/plantilla/icon.jpg" class="brand-image img-circle elevation-3" style="opacity: .8">

    <span class="brand-text font-weight-light text-center" style="width: 150px">HOTEL GOLDEN</span>

  </a>

  <!--=====================================
                  MENÚ
  ======================================-->

  <div class="sidebar">

    <nav class="mt-2">
      
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <br>


        <!-- Botón página inicio -->

        <li class="nav-item">

          <a href="inicio" class="nav-link">

            <i class="nav-icon fas fa-home"></i>

            <p>INICIO</p>

          </a>

        </li>

        <!-- Botón página administradores -->  

        <?php if ($admin["perfil"] == "Administrador"): ?>
          
          <li class="nav-item">

            <a href="administradores" class="nav-link">

              <i class="nav-icon fas fa-users-cog"></i>

              <p>ADMINISTRADORES</p>

            </a>

          </li>

           <?php endif ?>


        <!-- Botón página planes -->

        <li class="nav-item">
          
          <a href="planes" class="nav-link">
            
            <i class="nav-icon fas fa-shopping-bag"></i>
            
            <p>SERVICIOS</p>
          
          </a>

        </li>

        

        <!-- Botón página habitaciones -->

        <li class="nav-item">

          <a href="categorias" class="nav-link">

            <i class="nav-icon fas fa-bed"></i>
            
            <p>HABITACIONES</p>

          </a>

        </li>

        <!-- Botón página reservas -->

         <?php if ($admin["perfil"] == "Administrador"): ?>

        <li class="nav-item">

          <a href="reservas" class="nav-link">

            <i class="nav-icon far fa-calendar-alt"></i>

            <p>RESERVAS</p>

          </a>

        </li>

          <?php endif ?>



        <!-- Botón página usuarios -->

         <?php if ($admin["perfil"] == "Administrador"): ?>

         <li class="nav-item">
          
          <a href="usuarios" class="nav-link">
            
            <i class="nav-icon fas fa-users"></i>
            
            <p> USUARIOS</p>

          </a>

        </li>

          <?php endif ?>


        <li class="nav-item">
          
          <a href="cerrar-sesion" class="nav-link">
            
            <i class="nav-icon  fa fa-power-off"></i>
            
            <p>SALIR DEL SISTEMA</p>

          </a>

        </li>

      </ul>

    </nav>
  
  </div>

</aside>