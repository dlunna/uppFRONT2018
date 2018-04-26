<?php
// Variables

$matriz = array(

  array("./images/slidereventos/I2018-04-13.jpg",
        "Crecimiento Cristalino",
        "Primer Concurso de Exhibición y Crecimiento Cristalino UPP 2018 en la Universidad Politécnica de Pachuca ... ",
        "https://twitter.com/UPPachuca/status/984833484773609472"),

  array("./images/slidereventos/I2018-03-26.jpg",
        "Aldea Tecnológica",
        "5ta edición de Aldea Tecnológica donde alumnas y alumnos de nuestros programas educativos de Software, Telemática, Redes y Telecomunicaciones ...",
        "https://twitter.com/UPPachuca/status/978328823086436352"),

  array("./images/slidereventos/I2018-03-16.jpg",
        "#OrgulloUPPachuca",
        "Felicitamos a Shamanta Cruz por el 1er Lugar en 800 mts en Atletismo obtenido en el encuentro nacional Interpolitécnicas 2018 en León, Gto. ",
        "https://twitter.com/UPPachuca/status/974716516464775168"),


array("./images/slidereventos/I2018-03-15.jpg",
      "#OrgulloUPPachuca",
      "Felicitamos a Mariana Hernández por obtener 1er lugar en 200 mts libre y 50 mts pecho,  durante el encuentro de Interpolitécnicas 2018 en León, Gto. ",
      "https://twitter.com/UPPachuca/status/974435211730735104"),

  array("./images/slidereventos/V08.jpg",
        "Oferta educativa",
        "En el marco de nuestro aniversario, celebramos compartiendo nuestra #OfertaEducativa con las alumnas y alumnos del Cetis No. 26 de Atitalaquia.",
        "https://twitter.com/UPPachuca/status/964601172127637504"),

  array("./images/slidereventos/V07.jpg",
        "Semana de salud 2018",
        "En el marco de nuestro aniversario #NuestraRazónDeSerTú Por ello continuamos cuidando tu salud con la Primera semana de salud 2018",
        "https://twitter.com/UPPachuca/status/963875236826501120"),

  array("./images/slidereventos/V06.jpg",
        "CACEI",
        "Celebramos que el Programa de Ingeniería en Mecatrónica fue re certificado por parte del Consejo de Acreditación de la Enseñanza de la Ingeniería",
        "https://twitter.com/UPPachuca/status/963491583059484674"),

  array("./images/slidereventos/V05.jpg",
        "Activaciones físicas",
        "En el marco de nuestro aniversario damos la bienvenida deportiva y cultural a estudiantes de nuevo ingreso.",
        "https://twitter.com/UPPachuca/status/962375113508376582"),

  array("./images/slidereventos/V01.jpg",
        "CTE hidalgo",
        "Cierre de año de #CTEHidalgo en la #UPPachuca Nuestros primeros frutos de los trabajos coordinados en cada uno de los ejes temáticos. ",
        "https://twitter.com/UPPachuca/status/942804725640187904"),

  array("./images/slidereventos/V02.jpg",
        "Taller de proyectos de investigación",
        "Concluye el taller curso taller Elaboración de proyectos de investigación en salud",
        "https://twitter.com/UPPachuca/status/941809405200355331"),

  array("./images/slidereventos/V03.jpg",
        "Violencia es Violencia",
        "La sesión “Violencia es Violencia” a cargo del Mtro. Alexandro Vladimir Peña quien concientizo a nuestras alumn@s en temas de equidad de género ...",
        "https://twitter.com/UPPachuca/status/941397987049304069"),

  array("./images/slidereventos/V04.jpg",
        "4ta #CarreraAtlética #CreandoEsperanza",
        "La UPPachuca participa en la 4ta #CarreraAtlética #CreandoEsperanza para apoyar a niños con insuficiencia renal.",
        "https://www.facebook.com/UPPachuca/photos/pcb.1917785571806184/1917784778472930/?type=3GATITOtheater")



      );

?>


<div class="container">
  <div class="col-xs-12">

    <div class="page-header">
      <h1>Comunicación social, Prensa UPP</h1>
      <p>Actividades y eventos de la UPPachuca.</p>
    </div>

    <div id="eventosimpa" class="carousel slide" data-ride="carousel">
<!--
      <ol class="carousel-indicators">
        <li data-target="#eventosimpa" data-slide-to="0" class="active"></li>
        <li data-target="#eventosimpa" data-slide-to="1"></li>
        <li data-target="#eventosimpa" data-slide-to="2"></li>
      </ol>
-->
      <div class="carousel-inner">

        <?php

          $ban = 0;
          $contador = 0;

          for ($j=1;$j<=3;$j++)
          {
            echo "<!-- /Slide1 -->";
            if ($ban == 0){
              echo " <div class=\"carousel-item active\"> <!-- Class Bloque".$j." --> ";
              $ban=1;
            }
            else { echo " <div class=\"carousel-item\"> <!-- Class Bloque".$j." --> "; }
            echo "<div class=\"row\"> <!-- UL bloque de 4 -->";

            for ($k=1;$k<=4;$k++)
            {
              echo "
              <!-- #".$k." -->
              <div class=\"col-sm-3\">
                <div class=\"fff\">
                  <div class=\"thumbnail\">
                    <a href=\" ".$matriz[$contador][3]." \">
                      <img src=\"  ".$matriz[$contador][0]."  \" alt=\"  ".$matriz[$contador][1]."  \">
                    </a>
                  </div>
                  <div class=\"caption\">
                    <hr />
                    <h3>  ".$matriz[$contador][1]."  </h3>
                    <p>  ".($contador+1)." ".$matriz[$contador][2]."  </p>
                    <a class=\"btn btn-mini\" href=\"  ".$matriz[$contador][3]."  \">» Más información</a>
                  </div>
                </div> <!-- class fff -->
              </div>
              ";
              $contador ++;
            }

            echo "
                </div> <!-- fin primer bloque de 4 -->
              </div>  <!-- fin primer bloque de 4 -->
              <!-- /Slide -->
            ";

          }
        ?>

      </div> <!-- carousel inner -->

      <!-- Left and right controls -->
      <div class="container">
        <div class="row justify-content-md-center">

          <div class="col-md-auto">
            <a  href="#eventosimpa" data-slide="prev">
              <i class="fas fa-angle-double-left"></i>
            </a>
            <i class="far fa-caret-square-up"></i>
            <a  href="#eventosimpa" data-slide="next">
              <i class="fas fa-angle-double-right"></i>
            </a>
          </div>

        </div>
      </div>


    </div><!-- /#eventosimp -->


  </div><!-- /.col-xs-12 -->
</div><!-- /.container -->
