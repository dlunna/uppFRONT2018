<div class="container-fluid">

  <h1>Noticias y avisos de la comunidad UPPachuca</h1>

  <div class="row">

    <div class="col-md-4">
      <h1>Publicaciones UPP</h1>
      <p>
        <a href="http://upp.edu.mx/rfront/">http://upp.edu.mx/rfront/</a>
      </p>
<!--
      <button type="button" class="btn btn-uppachuca btn-lg">
        <a href="http://www.upp.edu.mx/front">Blog UPP</a>
      </button>
-->
<!--
      <form action="http://www.upp.edu.mx/front" method="get">
         <button type="submit" class="btn btn-uppachuca btn-lg">Blog UPP</button>
      </form>
-->

      <?php
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL            => 'http://www.upp.edu.mx/rfront/?feed=rss2',
          CURLOPT_USERAGENT      => 'spider',
          CURLOPT_TIMEOUT        => 120,
          CURLOPT_CONNECTTIMEOUT => 30,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING       => 'UTF-8'
        ));
        $data = curl_exec($curl);
        curl_close($curl);
        $xml = simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOCDATA);
        $i=0;
        foreach ($xml->channel->item as $item) {
            if ($i < 5) {
                $creator = $item->children('dc', true);
                echo "<br />";
                echo '<hr />';
                echo "<h3>".$item->title."</h3>";
                $temporal = explode(" ",$item->pubDate);
                echo '<p>Publicado el: '.$temporal[1].' '.$temporal[2].'</p>';
                echo "<p>".$item->description."</p>";
                echo "<p>Categoría: ".$item->category."</p>";

                switch ($item->category) {
                  case "Convocatorias":
                    echo "
                             <a href=\"".$item->link."\" class=\"btn btn-warning\">
                               + información
                             </a>
                         ";
                    break;

                    case "Becas":
                      echo "
                             <a href=\"".$item->link."\" class=\"btn btn-success\">
                               + información
                             </a>
                           ";
                      break;

                      case "Noticias Académicas":
                        echo "
                               <a href=\"".$item->link."\" class=\"btn btn-info\">
                                 + información
                               </a>
                             ";
                        break;

                        case "Varios":
                          echo "
                                 <a href=\"".$item->link."\" class=\"btn btn-dark\">
                                   + información
                                 </a>
                               ";
                          break;

                  default:
                    echo "
                           <a href=\"".$item->link."\" class=\"btn btn-default\">
                             + información
                           </a>
                         ";
                    break;
                }
                $i++;
            }
        }

      ?>
    </div>

    <div class="col-md-4">
      <h1>Servicios escolares</h1>
      <p>
        <a href="http://upp.edu.mx/serviciosescolares">
          http://upp.edu.mx/serviciosescolares
        </a>
      </p>
      <!--
      <a href="http://www.upp.edu.mx/serviciosescolares">
      <button type="button" class="btn btn-uppachuca btn-lg">Servicios escolares</button>
      </a>
    -->

      <?php
      //echo "dentro del php";
      /*
      $handler = curl_init("http://www.upp.edu.mx/front/?feed=rss2");
      $response = curl_exec ($handler);
      curl_close($handler);
      echo $response;
      */

      $curl = curl_init();
      curl_setopt_array($curl, array(
          CURLOPT_URL            => 'http://www.upp.edu.mx/serviciosescolares/?feed=rss2',
          CURLOPT_USERAGENT      => 'spider',
          CURLOPT_TIMEOUT        => 120,
          CURLOPT_CONNECTTIMEOUT => 30,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING       => 'UTF-8'
      ));
      $data = curl_exec($curl);
      curl_close($curl);
      $xml = simplexml_load_string($data, 'SimpleXMLElement', LIBXML_NOCDATA);
      //die('<pre>' . print_r($xml], TRUE) . '</pre>');

        $i=0;
        foreach ($xml->channel->item as $item) {
            if ($i < 5) {
                $creator = $item->children('dc', true);
                echo '<br />';
                echo '<hr />';
                echo '<h3>' . $item->title . '</h3>';
                //echo '<p>Publicado el: ' . $item->pubDate . '</p>';
                $temporal = explode(" ",$item->pubDate);
                echo '<p>Publicado el: '.$temporal[1].' '.$temporal[2].'</p>';
                //echo "xxx:".$temporal[1];
                //echo '<p>Author: ' . $creator . '</p>';
                echo '<p>' . $item->description . '</p>';
                //echo '<p><a href="' . $item->link . '">Leer más: ' . $item->title . '</a></p>';
                echo "
                       <a href=\"".$item->link."\" class=\"btn btn-primary\">
                         + información
                       </a>
                     ";
                $i++;
            }
            //echo $i;
        }

      ?>
    </div>

    <div class="col-md-4">
      <h1>Recomendaciones</h1>
      <!--
      <button type="button" class="btn btn-uppachuca btn-lg">Recomendaciones</button>
    -->

      <br />
      <hr />
      <h3>Revista INMENIO</h3>
      <a href="https://issuu.com/inmenio/docs/inmenio_no_8">
        <img src="http://www.upp.edu.mx/front/ligas/rev/INMENIO-2017-08sm.jpg" class="featurette-image img-responsive" alt="Revista INMENIO" />
      </a>
    </div>
  </div> <!--fin de ROW -->
</div> <!-- fin de container -->
