<!DOCTYPE html>
<html lang="es">

<head>
  <?php include ('./dotk/00head/analitycs.html'); ?>
  <?php include ('./dotk/00head/cabecera.html'); ?>
  <?php include ('./dotk/00head/estilos.html'); ?>

  <style>
  /**CSS**/
     .bgimgdr {
        background: url('./images/bgimgr.png') center no-repeat;
     }
     .displaybg{
       text-align:justify;
       color:#000000;
       font-size: 10pt;
      }
  </style>


</head>

<body>


  <a id="arriba"></a>
  <header>

    <!-- Logos e imagen de hidalgo -->
    <?php include ('../lib18/seph/hf/header.html'); ?>

    <nav>
      <!-- Menu principal superior -->
      <?php include ('../lib18/coreFRONTx/01header/nav/menu-superior/menu.html'); ?>
    </nav>

    <!-- Slider principal -->
    <?php include ('./dotk/01header/01carousel-principal/carousel.html'); ?>

  </header>

  <?php include ('./dotk/01header/02begajoso/menu-pegajoso.html'); ?>

  <main>
    <div class="container marketing">

      <br />
      <?php include ('./dotk/05main/01iconos/marketing.html'); ?>

      <a id="prensa"></a>
      <hr class="featurette-divider">
      <?php include ('./dotk/05main/02prensa/t3.php'); ?>

      <a id="comunidad"></a>
      <hr class="featurette-divider">
      <!-- comunidad upp y egresados -->

      <?php include ('./dotk/05main/03comunidad/aspirantes.html'); ?>

      <hr class="featurette-divider">


      <?php include ('./dotk/05main/03comunidad/comunidadupp.html'); ?>
      <?php include ('./dotk/05main/03comunidad/egresados.html'); ?>

      <a id="calendario"></a>
      <hr class="featurette-divider">
      <!-- Calendario de google -->
      <?php include ('./dotk/05main/04gool/gcalendar.html'); ?>

      <a id="noticias"></a>
      <hr class="featurette-divider">
      <?php include ('./dotk/05main/05entradas/nuevo.php'); ?>

      <a id="redessociales"></a>
      <hr class="featurette-divider">
      <!-- Alfredo redes sociales y sitios de interes -->
      <?php include ('./dotk/05main/06owl/tabs.html'); ?>

      <hr class="featurette-divider">
      <?php include ('./dotk/05main/07ligasdint/iconosfooter.php'); ?>

      <a id="mapadesitio"></a>
      <hr class="featurette-divider">
      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('../lib18/coreFRONTx/main/tmenu-footer/menufooter.php'); ?>

    </div>

  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php include ('../lib18/seph/hf/footer.html'); ?>
  </footer>

  <?php include ('../lib18/coreFRONTx/09js/java.html'); ?>

  <!-- Script para dar la animacion al boton flotante que lleva arriba -->
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="../lib18/coreFRONTx/10boton-arriba/script.js"></script>

</body>

</html>
