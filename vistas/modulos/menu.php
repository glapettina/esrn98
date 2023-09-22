<aside class="main-sidebar">

	<section class="sidebar">

		<ul class="sidebar-menu">

			<li class="active">
				<a href="inicio">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>
			</li>

			<?php

			if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Secretario" || $_SESSION["perfil"] == "Directivo") {

					echo '<li class="treeview">
			          <a href="#">
			            <i class="fa fa-graduation-cap"></i>
			            <span>Alumnos</span>
			            <span class="pull-right-container">
			              <i class="fa fa-angle-left pull-right"></i>
			            </span>
			          </a>
			          <ul class="treeview-menu">
			            <li><a href="primero"><i class="fa fa-circle-o"></i> Primer Año</a></li>
			            <li><a href="segundo"><i class="fa fa-circle-o"></i> Segundo Año</a></li>
			            <li><a href="tercero"><i class="fa fa-circle-o"></i> Tercer Año</a></li>
			            <li><a href="cuarto"><i class="fa fa-circle-o"></i> Cuarto Año</a></li>
			            <li><a href="quinto"><i class="fa fa-circle-o"></i> Quinto Año</a></li>
			          </ul>
		    	    </li>';


    			}

    		?>

    		<li class="treeview">
            
                <a href="#">
                    <i class="fa fa-calendar" aria-hidden="true"></i> <span>Informes Cualitativos</span>
                    <!-- <span class="pull-right-container badge bg-blue"> -->
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                  
                </a>
               
               <?php
                 
                  if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Secretario" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Preceptor") {
  

             echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-file-pdf-o" aria-hidden="true"></i> <span>Emisión de Informes</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

                  <ul class="treeview-menu">
                      <li><a href="primero"><i class="fa fa-circle-o"></i> 1er. Año</a></li>
                      <li><a href="segundo"><i class="fa fa-circle-o"></i> 2º Año</a></li>
                      <li><a href="tercero"><i class="fa fa-circle-o"></i> 3er. Año</a></li>
                      <li><a href="cuarto"><i class="fa fa-circle-o"></i> 4º Año</a></li>             
                      <li><a href="quinto"><i class="fa fa-circle-o"></i> 5º Año</a></li>             
                  </ul>           
            </li>';

            }

        ?>
 
        <?php

        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Científica") {
           

 			echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Científica y Tecnológica</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">                
                  <li><a href="11tm-cientifica"><i class="fa fa-circle-o"></i> 1º 1ra. - TM</a></li>
                  <li><a href="12tm-cientifica"><i class="fa fa-circle-o"></i> 1º 2da. - TM</a></li>
                  <li><a href="11tt-cientifica"><i class="fa fa-circle-o"></i> 1º 1ra. - TT</a></li>
                  <li><a href="21tm-cientifica"><i class="fa fa-circle-o"></i> 2º 1ra. - TM</a></li>
                  <li><a href="21tt-cientifica"><i class="fa fa-circle-o"></i> 2º 1ra. - TT</a></li>
                  <li><a href="22tt-cientifica"><i class="fa fa-circle-o"></i> 2º 2da. - TT</a></li>
                  <li><a href="23tt-cientifica"><i class="fa fa-circle-o"></i> 2º 3ra. - TT</a></li>
                  <li><a href="31tm-cientifica"><i class="fa fa-circle-o"></i> 3º 1ra. - TM</a></li>
                  <li><a href="32tm-cientifica"><i class="fa fa-circle-o"></i> 3º 2da. - TM</a></li>
                  <li><a href="31tt-cientifica"><i class="fa fa-circle-o"></i> 3º 1ra. - TT</a></li>
                  <li><a href="41tm-cientifica"><i class="fa fa-circle-o"></i> 4º 1ra. - TM</a></li>
                  <li><a href="42tm-cientifica"><i class="fa fa-circle-o"></i> 4º 2da. - TM</a></li>
                  <li><a href="41tt-cientifica"><i class="fa fa-circle-o"></i> 4º 1ra. - TT</a></li>
                  <li><a href="42tt-cientifica"><i class="fa fa-circle-o"></i> 4º 2da. - TT</a></li>
                  <li><a href="51tm-cientifica"><i class="fa fa-circle-o"></i> 5º 1ra. - TM</a></li>
                  <li><a href="52tm-cientifica"><i class="fa fa-circle-o"></i> 5º 2da. - TM</a></li>
                  <li><a href="51tt-cientifica"><i class="fa fa-circle-o"></i> 5º 1ra. - TT</a></li>
                  <li><a href="52tt-cientifica"><i class="fa fa-circle-o"></i> 5º 2da. - TT</a></li>
              </ul>

           
            </li>';

             }

        ?>

        <?php

        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Sociales") {

            echo '<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Sociales y Humanidades</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">
                  <li><a href="11tm-sociales"><i class="fa fa-circle-o"></i> 1º 1ra. - TM</a></li>
                  <li><a href="12tm-sociales"><i class="fa fa-circle-o"></i> 1º 2da. - TM</a></li>
                  <li><a href="11tt-sociales"><i class="fa fa-circle-o"></i> 1º 1ra. - TT</a></li>
                  <li><a href="21tm-sociales"><i class="fa fa-circle-o"></i> 2º 1ra. - TM</a></li>
                  <li><a href="21tt-sociales"><i class="fa fa-circle-o"></i> 2º 1ra. - TT</a></li>
                  <li><a href="22tt-sociales"><i class="fa fa-circle-o"></i> 2º 2da. - TT</a></li>
                  <li><a href="23tt-sociales"><i class="fa fa-circle-o"></i> 2º 3ra. - TT</a></li>
                  <li><a href="31tm-sociales"><i class="fa fa-circle-o"></i> 3º 1ra. - TM</a></li>
                  <li><a href="32tm-sociales"><i class="fa fa-circle-o"></i> 3º 2da. - TM</a></li>
                  <li><a href="31tt-sociales"><i class="fa fa-circle-o"></i> 3º 1ra. - TT</a></li>
                  <li><a href="41tm-sociales"><i class="fa fa-circle-o"></i> 4º 1ra. - TM</a></li>
                  <li><a href="42tm-sociales"><i class="fa fa-circle-o"></i> 4º 2da. - TM</a></li>
                  <li><a href="41tt-sociales"><i class="fa fa-circle-o"></i> 4º 1ra. - TT</a></li>
                  <li><a href="42tt-sociales"><i class="fa fa-circle-o"></i> 4º 2da. - TT</a></li>
                  <li><a href="51tm-sociales"><i class="fa fa-circle-o"></i> 5º 1ra. - TM</a></li>
                  <li><a href="52tm-sociales"><i class="fa fa-circle-o"></i> 5º 2da. - TM</a></li>
                  <li><a href="51tt-sociales"><i class="fa fa-circle-o"></i> 5º 1ra. - TT</a></li>
                  <li><a href="52tt-sociales"><i class="fa fa-circle-o"></i> 5º 2da. - TT</a></li>     
              </ul>

           
            </li>';

            }

        ?>

        <?php


        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Lengua y Literatura") {



            echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Lengua y Literatura</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">
                  <li><a href="11tm-literatura"><i class="fa fa-circle-o"></i> 1º 1ra. - TM</a></li>
                  <li><a href="12tm-literatura"><i class="fa fa-circle-o"></i> 1º 2da. - TM</a></li>
                  <li><a href="11tt-literatura"><i class="fa fa-circle-o"></i> 1º 1ra. - TT</a></li>
                  <li><a href="21tm-literatura"><i class="fa fa-circle-o"></i> 2º 1ra. - TM</a></li>
                  <li><a href="21tt-literatura"><i class="fa fa-circle-o"></i> 2º 1ra. - TT</a></li>
                  <li><a href="22tt-literatura"><i class="fa fa-circle-o"></i> 2º 2da. - TT</a></li>
                  <li><a href="23tt-literatura"><i class="fa fa-circle-o"></i> 2º 3ra. - TT</a></li>
                  <li><a href="31tm-literatura"><i class="fa fa-circle-o"></i> 3º 1ra. - TM</a></li>
                  <li><a href="32tm-literatura"><i class="fa fa-circle-o"></i> 3º 2da. - TM</a></li>
                  <li><a href="31tt-literatura"><i class="fa fa-circle-o"></i> 3º 1ra. - TT</a></li>
                  <li><a href="41tm-literatura"><i class="fa fa-circle-o"></i> 4º 1ra. - TM</a></li>
                  <li><a href="42tm-literatura"><i class="fa fa-circle-o"></i> 4º 2da. - TM</a></li>
                  <li><a href="41tt-literatura"><i class="fa fa-circle-o"></i> 4º 1ra. - TT</a></li>
                  <li><a href="42tt-literatura"><i class="fa fa-circle-o"></i> 4º 2da. - TT</a></li>
                  <li><a href="51tm-literatura"><i class="fa fa-circle-o"></i> 5º 1ra. - TM</a></li>
                  <li><a href="52tm-literatura"><i class="fa fa-circle-o"></i> 5º 2da. - TM</a></li>
                  <li><a href="51tt-literatura"><i class="fa fa-circle-o"></i> 5º 1ra. - TT</a></li>
                  <li><a href="52tt-literatura"><i class="fa fa-circle-o"></i> 5º 2da. - TT</a></li>
              </ul>

           
            </li>';

            }

        ?>

        <?php

        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Matemática") {


            echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Matemática</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">
                  <li><a href="11tm-matematica"><i class="fa fa-circle-o"></i> 1º 1ra. - TM</a></li>
                  <li><a href="12tm-matematica"><i class="fa fa-circle-o"></i> 1º 2da. - TM</a></li>
                  <li><a href="11tt-matematica"><i class="fa fa-circle-o"></i> 1º 1ra. - TT</a></li>
                  <li><a href="21tm-matematica"><i class="fa fa-circle-o"></i> 2º 1ra. - TM</a></li>
                  <li><a href="21tt-matematica"><i class="fa fa-circle-o"></i> 2º 1ra. - TT</a></li>
                  <li><a href="22tt-matematica"><i class="fa fa-circle-o"></i> 2º 2da. - TT</a></li>
                  <li><a href="23tt-matematica"><i class="fa fa-circle-o"></i> 2º 3ra. - TT</a></li>
                  <li><a href="31tm-matematica"><i class="fa fa-circle-o"></i> 3º 1ra. - TM</a></li>
                  <li><a href="32tm-matematica"><i class="fa fa-circle-o"></i> 3º 2da. - TM</a></li>
                  <li><a href="31tt-matematica"><i class="fa fa-circle-o"></i> 3º 1ra. - TT</a></li>
                  <li><a href="41tm-matematica"><i class="fa fa-circle-o"></i> 4º 1ra. - TM</a></li>
                  <li><a href="42tm-matematica"><i class="fa fa-circle-o"></i> 4º 2da. - TM</a></li>
                  <li><a href="41tt-matematica"><i class="fa fa-circle-o"></i> 4º 1ra. - TT</a></li>
                  <li><a href="42tt-matematica"><i class="fa fa-circle-o"></i> 4º 2da. - TT</a></li>
                  <li><a href="51tm-matematica"><i class="fa fa-circle-o"></i> 5º 1ra. - TM</a></li>
                  <li><a href="52tm-matematica"><i class="fa fa-circle-o"></i> 5º 2da. - TM</a></li>
                  <li><a href="51tt-matematica"><i class="fa fa-circle-o"></i> 5º 1ra. - TT</a></li>
                  <li><a href="52tt-matematica"><i class="fa fa-circle-o"></i> 5º 2da. - TT</a></li>
              </ul>

           
            </li>';

            }

        ?>

        <?php

        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Segundas Lenguas") {

            echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Segundas Lenguas</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">
                  <li><a href="11tm-ingles"><i class="fa fa-circle-o"></i> 1º 1ra. - TM</a></li>
                  <li><a href="12tm-ingles"><i class="fa fa-circle-o"></i> 1º 2da. - TM</a></li>
                  <li><a href="11tt-ingles"><i class="fa fa-circle-o"></i> 1º 1ra. - TT</a></li>
                  <li><a href="21tm-ingles"><i class="fa fa-circle-o"></i> 2º 1ra. - TM</a></li>
                  <li><a href="21tt-ingles"><i class="fa fa-circle-o"></i> 2º 1ra. - TT</a></li>
                  <li><a href="22tt-ingles"><i class="fa fa-circle-o"></i> 2º 2da. - TT</a></li>
                  <li><a href="23tt-ingles"><i class="fa fa-circle-o"></i> 2º 3ra. - TT</a></li>
                  <li><a href="31tm-ingles"><i class="fa fa-circle-o"></i> 3º 1ra. - TM</a></li>
                  <li><a href="32tm-ingles"><i class="fa fa-circle-o"></i> 3º 2da. - TM</a></li>
                  <li><a href="31tt-ingles"><i class="fa fa-circle-o"></i> 3º 1ra. - TT</a></li>
                  <li><a href="41tm-ingles"><i class="fa fa-circle-o"></i> 4º 1ra. - TM</a></li>
                  <li><a href="42tm-ingles"><i class="fa fa-circle-o"></i> 4º 2da. - TM</a></li>
                  <li><a href="41tt-ingles"><i class="fa fa-circle-o"></i> 4º 1ra. - TT</a></li>
                  <li><a href="42tt-ingles"><i class="fa fa-circle-o"></i> 4º 2da. - TT</a></li>
                  <li><a href="51tm-ingles"><i class="fa fa-circle-o"></i> 5º 1ra. - TM</a></li>
                  <li><a href="52tm-ingles"><i class="fa fa-circle-o"></i> 5º 2da. - TM</a></li>
                  <li><a href="51tt-ingles"><i class="fa fa-circle-o"></i> 5º 1ra. - TT</a></li>
                  <li><a href="52tt-ingles"><i class="fa fa-circle-o"></i> 5º 2da. - TT</a></li>
              </ul>

           
            </li>';

            }

        ?>

        <?php

        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Educación Física") {


            echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Educación Física</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">
                  <li><a href="11tm-edfisica"><i class="fa fa-circle-o"></i> 1º 1ra. - TM</a></li>
                  <li><a href="12tm-edfisica"><i class="fa fa-circle-o"></i> 1º 2da. - TM</a></li>
                  <li><a href="11tt-edfisica"><i class="fa fa-circle-o"></i> 1º 1ra. - TT</a></li>
                  <li><a href="21tm-edfisica"><i class="fa fa-circle-o"></i> 2º 1ra. - TM</a></li>
                  <li><a href="21tt-edfisica"><i class="fa fa-circle-o"></i> 2º 1ra. - TT</a></li>
                  <li><a href="22tt-edfisica"><i class="fa fa-circle-o"></i> 2º 2da. - TT</a></li>
                  <li><a href="23tt-edfisica"><i class="fa fa-circle-o"></i> 2º 3ra. - TT</a></li>
                  <li><a href="31tm-edfisica"><i class="fa fa-circle-o"></i> 3º 1ra. - TM</a></li>
                  <li><a href="32tm-edfisica"><i class="fa fa-circle-o"></i> 3º 2da. - TM</a></li>
                  <li><a href="31tt-edfisica"><i class="fa fa-circle-o"></i> 3º 1ra. - TT</a></li>
                  <li><a href="41tm-edfisica"><i class="fa fa-circle-o"></i> 4º 1ra. - TM</a></li>
                  <li><a href="42tm-edfisica"><i class="fa fa-circle-o"></i> 4º 2da. - TM</a></li>
                  <li><a href="41tt-edfisica"><i class="fa fa-circle-o"></i> 4º 1ra. - TT</a></li>
                  <li><a href="42tt-edfisica"><i class="fa fa-circle-o"></i> 4º 2da. - TT</a></li>
                  <li><a href="51tm-edfisica"><i class="fa fa-circle-o"></i> 5º 1ra. - TM</a></li>
                  <li><a href="52tm-edfisica"><i class="fa fa-circle-o"></i> 5º 2da. - TM</a></li>
                  <li><a href="51tt-edfisica"><i class="fa fa-circle-o"></i> 5º 1ra. - TT</a></li>
                  <li><a href="52tt-edfisica"><i class="fa fa-circle-o"></i> 5º 2da. - TT</a></li>
              </ul>

           
            </li>';

            }

        ?>

        <?php


        if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Educación Artística") {


            echo'<li class="treeview">
                <a href="#">
                  <i class="fa fa-graduation-cap" aria-hidden="true"></i> <span>Lenguajes Artísticos</span>
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>

               <ul class="treeview-menu">
                  <li><a href="11tm-artistica"><i class="fa fa-circle-o"></i> 1º 1ra. - TM</a></li>
                  <li><a href="12tm-artistica"><i class="fa fa-circle-o"></i> 1º 2da. - TM</a></li>
                  <li><a href="11tt-artistica"><i class="fa fa-circle-o"></i> 1º 1ra. - TT</a></li>
                  <li><a href="21tm-artistica"><i class="fa fa-circle-o"></i> 2º 1ra. - TM</a></li>
                  <li><a href="21tt-artistica"><i class="fa fa-circle-o"></i> 2º 1ra. - TT</a></li>
                  <li><a href="22tt-artistica"><i class="fa fa-circle-o"></i> 2º 2da. - TT</a></li>
                  <li><a href="23tt-artistica"><i class="fa fa-circle-o"></i> 2º 3ra. - TT</a></li>
                  <li><a href="31tm-artistica"><i class="fa fa-circle-o"></i> 3º 1ra. - TM</a></li>
                  <li><a href="32tm-artistica"><i class="fa fa-circle-o"></i> 3º 2da. - TM</a></li>
                  <li><a href="31tt-artistica"><i class="fa fa-circle-o"></i> 3º 1ra. - TT</a></li>
                  <li><a href="41tm-artistica"><i class="fa fa-circle-o"></i> 4º 1ra. - TM</a></li>
                  <li><a href="42tm-artistica"><i class="fa fa-circle-o"></i> 4º 2da. - TM</a></li>
                  <li><a href="41tt-artistica"><i class="fa fa-circle-o"></i> 4º 1ra. - TT</a></li>
                  <li><a href="42tt-artistica"><i class="fa fa-circle-o"></i> 4º 2da. - TT</a></li>
                  <li><a href="51tm-artistica"><i class="fa fa-circle-o"></i> 5º 1ra. - TM</a></li>
                  <li><a href="52tm-artistica"><i class="fa fa-circle-o"></i> 5º 2da. - TM</a></li>
                  <li><a href="51tt-artistica"><i class="fa fa-circle-o"></i> 5º 1ra. - TT</a></li>
                  <li><a href="52tt-artistica"><i class="fa fa-circle-o"></i> 5º 2da. - TT</a></li>
              </ul>

           
            </li>';

               }

            ?>

            <?php

            if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Modalidad Turismo") {


                  echo'<li class="treeview">
                      <a href="#">
                          <i class="fa fa-graduation-cap"></i>  C.O. Turismo
                          <i class="fa fa-angle-left pull-right"></i>
                      </a>                            

                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-circle-o"></i>
                                    3er. Año
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>

                                <ul class="treeview-menu">
                                    <li class="treeview">
                                      <li>
                                            <a href="3-desarrollo-turismo">
                                            <i class="fa fa-check-circle-o"></i>
                                                Desarrollo Sustentable                          
                                            </a>
                                      </li>  
                                      <li>
                                            <a href="3-introduccion-turismo">
                                            <i class="fa fa-check-circle-o"></i>
                                                Introducción al Turismo                          
                                            </a>
                                      </li>  
                                  </li>
                              </li>
                          </ul>
                          </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-circle-o"></i>
                                    4º Año
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                            
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <li>
                                          <a href="4-ambiente-turismo">
                                          <i class="fa fa-check-circle-o"></i>
                                              Ambiente y Patrimonio                          
                                          </a>
                                    </li>
                                    <li>
                                          <a href="4-generacion-turismo">
                                          <i class="fa fa-check-circle-o"></i>
                                              Gen. Emprendimientos                          
                                          </a>
                                    </li>
                                    <li>
                                          <a href="4-produccion-turismo">
                                          <i class="fa fa-check-circle-o"></i>
                                              Prod. Servicios Turísticos                          
                                          </a>
                                    </li>
                                </li>
                            </ul>
                            </li>
                            </li>
                            <li class="treeview">
                                  <a href="#">
                                      <i class="fa fa-circle-o"></i>
                                      5º Año
                                      <i class="fa fa-angle-left pull-right"></i>
                                  </a>
                            
                            <ul class="treeview-menu">
                                <li class="treeview">
                                      <li>
                                          <a href="5-comunicacion-turismo">
                                          <i class="fa fa-check-circle-o"></i>
                                              Comunicación y Turismo                          
                                          </a>
                                      </li>
                                     <li>
                                          <a href="5-proyecto-turismo">
                                          <i class="fa fa-check-circle-o"></i>
                                              Int. Sociocomunitaria                          
                                          </a>
                                     </li>
                                     <li>
                                          <a href="5-taller-turismo">
                                          <i class="fa fa-check-circle-o"></i>
                                              Téc.Int. y A.Sociocultural                          
                                          </a>
                                      </li>                                      
                              </li>
                            </ul>
                            </li>

                      </ul>   
             </li>';

             }

            ?> 

            <?php

            if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo" || $_SESSION["perfil"] == "Docente Modalidad Arte-Música") {


                  echo'<li class="treeview">
                      <a href="#">
                          <i class="fa fa-graduation-cap"></i>  C.O. Arte-Música
                          <i class="fa fa-angle-left pull-right"></i>
                      </a>                            

                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-circle-o"></i>
                                    3er. Año
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>

                                <ul class="treeview-menu">
                                    <li class="treeview">
                                      <li>
                                            <a href="3-apreciacion-arte-musica">
                                            <i class="fa fa-check-circle-o"></i>
                                                Apreciación Musical                          
                                            </a>
                                      </li>  
                                      <li>
                                            <a href="3-lenguaje-arte-musica">
                                            <i class="fa fa-check-circle-o"></i>
                                                Leng.Musical y Prac.Inst.                          
                                            </a>
                                      </li>  
                                  </li>
                              </li>
                          </ul>
                          </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="fa fa-circle-o"></i>
                                    4º Año
                                    <i class="fa fa-angle-left pull-right"></i>
                                </a>
                            
                            <ul class="treeview-menu">
                                <li class="treeview">
                                    <li>
                                          <a href="4-lenguaje-arte-musica">
                                          <i class="fa fa-check-circle-o"></i>
                                              Leng.Musical y Prac.Inst.                          
                                          </a>
                                    </li>
                                    <li>
                                          <a href="4-conjunto-arte-musica">
                                          <i class="fa fa-check-circle-o"></i>
                                              Práctica de Conjunto                          
                                          </a>
                                    </li>
                                    <li>
                                          <a href="4-vocal-arte-musica">
                                          <i class="fa fa-check-circle-o"></i>
                                              Práctica Vocal                          
                                          </a>
                                    </li>
                                </li>
                            </ul>
                            </li>
                            </li>
                            <li class="treeview">
                                  <a href="#">
                                      <i class="fa fa-circle-o"></i>
                                      5º Año
                                      <i class="fa fa-angle-left pull-right"></i>
                                  </a>
                            
                            <ul class="treeview-menu">
                                <li class="treeview">
                                      <li>
                                          <a href="5-lenguaje-arte-musica">
                                          <i class="fa fa-check-circle-o"></i>
                                              Leng.Musical y Prac.Inst.                          
                                          </a>
                                      </li>
                                     <li>
                                          <a href="5-musica-arte-musica">
                                          <i class="fa fa-check-circle-o"></i>
                                              Mús.y Contexto Histórico Social                          
                                          </a>
                                     </li>
                                     <li>
                                          <a href="5-vocal-arte-musica">
                                          <i class="fa fa-check-circle-o"></i>
                                              Práctica Vocal                          
                                          </a>
                                      </li> 
                                      <li>
                                          <a href="5-tecnologia-arte-musica">
                                          <i class="fa fa-check-circle-o"></i>
                                              Tec.e Inf.Aplicada Prod.Musical                          
                                          </a>
                                      </li> 
                                      <li>
                                          <a href="5-conjunto-arte-musica">
                                          <i class="fa fa-check-circle-o"></i>
                                              Práctica de Conjunto                          
                                          </a>
                                      </li>                                        
                              </li>
                            </ul>
                            </li>

                      </ul>   
             </li>';

             }

            ?> 
                



</ul>
</li>
</li>

    		<?php

	    		if ($_SESSION["perfil"] == "Administrador") {

		    	    echo '<li>
						<a href="cursos">

							<i class="fa fa-university"></i>
							<span>Cursos</span>

						</a>
					</li>';

			}

			?>

			<?php

				if ($_SESSION["perfil"] == "Administrador") {

				echo '<li>
					<a href="usuarios">

						<i class="fa fa-users"></i>
						<span>Usuarios</span>

					</a>
				</li>';

		}

		?>

		<!-- <?php

			if ($_SESSION["perfil"] == "Administrador") {

				echo '<li>
					<a href="ciudades">

						<i class="fa fa-building"></i>
						<span>Ciudades</span>

					</a>
				</li>';

			}

		?> -->

		<!-- <?php

			if ($_SESSION["movilidad"] == "1") {

				echo '<li class="treeview">
		          <a href="#">
		            <i class="fa fa-car"></i>
		            <span>Movilidad</span>
		            <span class="pull-right-container">
		              <i class="fa fa-angle-left pull-right"></i>
		            </span>
		          </a>
		          <ul class="treeview-menu">
		            <li><a href="movilidad"><i class="fa fa-circle-o"></i> Registro Movilidad</a></li>
		            <li><a href="movilidad-fecha"><i class="fa fa-circle-o"></i> Resumen x Fecha</a></li>
		          </ul>
	    	    </li>';

	    	}

    	?> -->


    	<!-- <?php

    		if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Secretario" || $_SESSION["perfil"] == "Directivo") {

	    	    echo '<li class="treeview">
		          <a href="#">
		            <i class="fa fa-car"></i>
		            <span>Resumen Movilidad</span>
		            <span class="pull-right-container">
		              <i class="fa fa-angle-left pull-right"></i>
		            </span>
		          </a>
		          <ul class="treeview-menu">
		            <li><a href="resumen-movilidad"><i class="fa fa-circle-o"></i> Informe Movilidad</a></li>
		            <li><a href="resumen-docente"><i class="fa fa-circle-o"></i> Resumen x Docente</a></li>
		          </ul>
	    	    </li>';

	    	}

    	?> -->

    	<!-- <?php

    		if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Directivo") {

	    	    echo '<li class="treeview">
		          <a href="#">
		            <i class="fa fa-laptop"></i>
		            <span>Conectar Igualdad</span>
		            <span class="pull-right-container">
		              <i class="fa fa-angle-left pull-right"></i>
		            </span>
		          </a>
		          <ul class="treeview-menu">
		            <li><a href="netbooks"><i class="fa fa-circle-o"></i> Netbooks</a></li>
		            <li><a href="servicios"><i class="fa fa-circle-o"></i> Servicio Técnico</a></li>
		            <li><a href="historial-servicios"><i class="fa fa-circle-o"></i> Historial</a></li>
		          </ul>
	    	    </li>';

	    	}

    	?>
 -->

		</ul>

	</section>

</aside>