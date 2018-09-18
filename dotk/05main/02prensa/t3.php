<?php
// Variables

$matriz = array(

  array("https://pbs.twimg.com/media/DnVkgVoVAAAw_zt.jpg",
        "Egresados",
        "Reencuéntrate con tus amigas y amigos en una noche mexicana ",
        "https://twitter.com/UPPachuca/status/1041851858992726016"),

  array("https://pbs.twimg.com/media/DnVdR_7UYAA7me_.jpg",
        "UPPachuca",
        "Corre, trota o camina, pero actívate en nuestro 15 aniversario participando en la carrera Atlética 5K",
        "https://twitter.com/UPPachuca/status/1041845533973913601"),






  array("https://pbs.twimg.com/media/DnU4a0PU4AATpS9.jpg",
        "UPPachuca",
        "¿Te gusta cantar o bailar? Este es el momento de demostrar que además de ser un gran estudiante eres un #Talento UPPachuca",
        "https://twitter.com/UPPachuca/status/1041805006679289856"),

  array("https://pbs.twimg.com/media/DnUwc0lU4AAO7VD.jpg",
        "UPPachuca",
        "En la #UPPachuca llevamos #15 Años Construyendo Nuestra Historia y te invitamos a plasmarlo a través de un mural.",
        "https://twitter.com/UPPachuca/status/1041792577530421248"),

  array("https://pbs.twimg.com/media/DnT4zJIVYAE8Lyc.jpg",
        "UPPachuca",
        "En la #UPPachuca llevamos #15 Años Construyendo Nuestra Historia y lo celebramos promoviendo # Ambientes De Sana Convivencia con Deporte y Salud.",
        "https://twitter.com/UPPachuca/status/1041733766111260673"),

  array("https://pbs.twimg.com/media/DnAcwPxV4AAbk6r.jpg",
        "UPPachuca",
        "Tres días de actividades a favor de las salud de nuestra comunidad universitaria, conferencias, pláticas, vacunas y revisiones. ",
        "https://twitter.com/UPPachuca/status/1040365512428019712"),

  array("https://pbs.twimg.com/media/DnATQIZVAAA7sCS.jpg",
        "UPPachuca",
        "Ha sido un placer recibir a las niñas y los niños de las primarias Justo Sierra y Melchor Ocampo, esperamos que su visita les motive a seguir adelante",
        "https://twitter.com/UPPachuca/status/1040353862442536960"),

  array("https://pbs.twimg.com/media/Dm52FskWwAAtsn4.jpg",
        "15 Años",
        "Celebremos juntos 15 años de trabajo a favor de la educación, la ciencia y la tecnología.",
        "https://twitter.com/UPPachuca/status/1039898432297680896"),


  array("https://pbs.twimg.com/media/DmveZxqUwAICEbW.jpg",
        "15 Años",
        "15 Años Construyendo Nuestra Historia reflejan el compromiso de mujeres y hombres con y para la educación",
        "https://twitter.com/UPPachuca/status/1039168680351997957"),

  array("https://pbs.twimg.com/media/DmiCaVoUcAAm3ik.jpg",
        "Platica S.E.A.",
        "Agradecemos a la C.P.C Myrna Rocio Moncada, Pta del Comité de Participación Ciudadana del Sistema Estatal Anticorrupción, por impartir la plática ...",
        "https://twitter.com/UPPachuca/status/1038225367188860928"),

  array("https://pbs.twimg.com/media/Dmh6stnVAAAcvYl.jpg",
        "#2doInformeOmarFayad",
        "La rendición de cuentas del #TrabajoResponsable fortalece la confianza y estimula el compromiso de quienes formamos parte de la administración pública ",
        "https://twitter.com/UPPachuca/status/1038217903953379329"),


        array("./images/slidereventos/I2018-07-30.jpg",
              "Trata de personas",
              "En el marco del Día Mundial Contra La Trata De Personas la #UPPachuca se suma a esta lucha. #JuntosSomosMás",
              "https://twitter.com/UPPachuca/status/1023645032115363840")




      );

?>


<div class="container">
  <div class="col-xs-12">

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
