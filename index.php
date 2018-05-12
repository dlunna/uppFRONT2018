<!DOCTYPE html>
<html lang="es">

<head>
  <?php include ('./coreFRONTx/head/cabecera.html'); ?>
  <?php include ('./coreFRONTx/head/estilos.html'); ?>
  <?php include ('./coreFRONTx/head/java.html'); ?>
</head>

<body>

  <header>

    <!-- Logos e imagen de hidalgo -->
    <?php include ('./seph/hf/header.html'); ?>

    <nav>
      <!-- Menu principal superior -->
      <?php include ('./coreFRONTx/header/nav/menu-superior/menu.html'); ?>
    </nav>

    <!-- Slider principal -->
    <?php include ('./coreFRONTx/header/carousel-principal/carousel.html'); ?>

  </header>

  <main>
    <div class="container marketing">

      <br />
      <?php include ('./coreFRONTx/main/iconos/marketing.html'); ?>

      <hr class="featurette-divider">

      <?php include ('./coreFRONTx/main/prensa/t3.php'); ?>

      <hr class="featurette-divider">

      <!-- comunidad upp y egresados -->
      <?php include ('./coreFRONTx/main/rcomunidad/comunidadupp.html'); ?>
      <?php include ('./coreFRONTx/main/rcomunidad/egresados.html'); ?>

      <hr class="featurette-divider">

      <!-- Calendario de google -->
      <?php include ('./coreFRONTx/main/rGL/gcalendar.html'); ?>

      <hr class="featurette-divider">

      <?php include ('./coreFRONTx/main/sentradas/nuevo.php'); ?>
      <!-- Alfredo redes sociales y sitios de interes -->
      <?php //include ('./coreFRONTx/main/sowl/tabs.html'); ?>

      <hr class="featurette-divider">

      <?php include ('./coreFRONTx/main/prensa/iconosfooter.php'); ?>

      <a id="mapadesitio"></a>
      <hr class="featurette-divider">

      <!-- Menu con todos los sitios y mini sitios de la página -->
      <?php include ('./coreFRONTx/main/tmenu-footer/menufooter.php'); ?>

    </div>

  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php include ('./seph/hf/footer.html'); ?>
  </footer>

  <!-- Para dar movimiento al slider de las noticias politicas -->
  <script src="./coreFRONTx/main/prensa/XXXrmbc.js"></script>

  <!-- Script para dar la animacion al boton flotante que lleva arriba -->
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="./coreFRONTx/xefectos/boton-arriba/script.js"></script>

</body>

</html>
