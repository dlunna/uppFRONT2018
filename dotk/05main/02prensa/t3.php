<?php
// Variables

$matriz = array(

  array("https://pbs.twimg.com/media/D0RTRKzX4AAACyS.png",
        "Conferencia",
        "Conocer la diversidad cultural de nuestro estado nos permite, valorarnos y respetarnos con igualdad.",
        "https://twitter.com/UPPachuca/status/1100096266468499457")
  ,
  array("https://pbs.twimg.com/media/D0RP_0lW0AA8KnA.png",
        "Actitud UPPachuca",
        "El cultivo de la mente es tan necesario como la comida para el cuerpo.-Cicerón",
        "https://twitter.com/UPPachuca/status/1100092570934435840")
  ,
  array("https://pbs.twimg.com/media/D0NnyVZWsAAdp5l.jpg",
        "Nodo Binacional Universitario",
        "Es un gran orgullo que 5 de los equipos que conforman los finalistas de la edición 2018-2019 del Nodo Binacional Universitario son de escuelas de educación superior de Hidalgo.",
        "https://twitter.com/LamanCarranza/status/1099836864704466946")
  ,
  array("https://pbs.twimg.com/media/D0MALBiWsAEHM-H.jpg",
        "Día de la bandera",
        "La práctica de rendir honores a nuestros Símbolos Patrios en todas las escuelas refleja la forma en la que construimos nuestra identidad, por ello el Gobernador @omarfayad nos ha instruido brindar una educación de calidad a las y los hidalguenses. DíaDeLaBandera",
        "https://twitter.com/atilanorp/status/1099722944580907009")
  ,


  array("https://pbs.twimg.com/media/D0DpBHUX0AEzfNn.jpg",
        "Curso de inducción",
        "Finaliza el curso de inducción para docentes de nuevo ingreso. Nuestras compañeras y compañeros recibieron información sobre el modelo educativo, procesos administrativos y técnicas de enseñanza.",
        "https://twitter.com/UPPachuca/status/1099135446884458497")
  ,
  array("https://pbs.twimg.com/media/D0DS_HtX4AEUmhV.jpg",
        "Proyectos de investigación en salud",
        "Con el objetivo de dar mejores herramientas en la elaboración de proyectos de investigación, aplicación de metodología y análisis de resultados, da comienzo el Curso taller de elaboración de proyectos de investigación en salud",
        "https://twitter.com/UPPachuca/status/1099110840635195392")
  ,
  array("https://pbs.twimg.com/media/D0DPv5SWwAAHsuV.jpg",
        "Feria profesiográfica",
        "Visitamos el COBAEH Cuautepec para participar en su Feria profesiográfica en donde presentamos nuestra oferta educativa, gracias por la invitación. ",
        "https://twitter.com/UPPachuca/status/1099107077753110529")
  ,
  array("https://pbs.twimg.com/media/D0DLhJIWoAAvuVg.jpg",
        "Feria de Instituciones",
        "Agradecemos la invitación al COBAEH Actopan a la 9na Feria de Instituciones de Educación Superior, donde compartimos con las y los estudiantes nuestra oferta educativa.",
        "https://twitter.com/UPPachuca/status/1099103790081413120")
  ,


  array("https://pbs.twimg.com/media/D0C_9AyX4AcqV99.jpg",
        "SEP Hidalgo",
        "Con la finalidad de brindar un mejor servicio a la comunidad educativa tal como lo ha instruido el Gobernador @omarfayad, el secretario @atilanorp se reúne con enlaces de comunicación de educación media superior y superior así como OPD’s para fortalecer la articulación.",
        "https://twitter.com/SEPHidalgo/status/1099089370089488384")
  ,
  array("https://pbs.twimg.com/media/D0DCLsnXcAE8rx-.jpg",
        "FamiliaSEPH ",
        "Esta tarde me reuní con enlaces de comunicación social de la #FamiliaSEPH para impulsar la estrategia de difusión de las políticas educativas del Gobernador @omarfayad en beneficio de la educación de nuestra niñez y juventud.",
        "https://twitter.com/atilanorp/status/1099091821077114881")
  ,
  array("https://pbs.twimg.com/media/D0CD6e5XcAM51cT.jpg",
        "Tochito Life",
        "¡VEN, PARTICIPA Y DIVIÉRTETE!",
        "https://twitter.com/UPPachuca/status/1099023783808126976")
  ,
  array("https://pbs.twimg.com/media/D0B1FO0X0AEOeDs.png",
        "PotroResponsable",
        "Responsable soy y seguro voy Si voy a conducir, en mis cinco debo ir ¡Tú manejas tu vida!",
        "https://twitter.com/UPPachuca/status/1099007799256932352")
  ,










      );

?>


<div class="container">
  <div class="col-xs-12">
http://www.upp.edu.mx/main/
    <div class="page-header">
      <h1>Comunicación social, Prensa UPP</h1>
      <p>Actividades y eventos de la UPPachuca.</p>
    </div>

    <div id="eventosimpa" class="carousel slide" data-ride="carousel">
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
                      <img src=\"  ".$matriz[$contador][0]."  \" alt=\"  ".$matriz[$contador][1]."  \" class=\"img-thumbnail\">
                    </a>
                  </div>
                  <div class=\"caption\">
                    <hr />
                    <h3>  ".$matriz[$contador][1]."  </h3>
                    <p>  ".($contador+1).": ".$matriz[$contador][2]."  </p>
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
