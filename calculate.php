<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculate</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>

    <div class="container">

      <?php

      // Si existe parametro en POST agrega a variable
      if (isset($_POST['lugar']))
        $lugar = $_POST['lugar'];

      if (isset($_POST['comida']))
        $comida = $_POST['comida'];

      if (isset($_POST['mudanza']))
        $mudanza = $_POST['mudanza'];

      if (isset($_POST['material_actividades']))
        $material_actividades = $_POST['material_actividades'];

      if (isset($_POST['material_general']))
        $material_general = $_POST['material_general'];

      if (isset($_POST['seguros']))
        $seguros = $_POST['seguros'];

      if (isset($_POST['playeras']))
        $playeras = $_POST['playeras'];

      if (isset($_POST['cocineras']))
        $cocineras = $_POST['cocineras'];

      if (isset($_POST['camiones']))
        $camiones = $_POST['camiones'];

      if (isset($_POST['paramedico']))
        $paramedico = $_POST['paramedico'];

      if (isset($_POST['extras']))
        $extras = $_POST['extras'];

      if (isset($_POST['becas']))
        $becas = $_POST['becas'];

      if (isset($_POST['vanguardia']))
        $vanguardia = $_POST['vanguardia'];

      if (isset($_POST['gente']))
        $gente = $_POST['gente'];

      if (isset($_POST['cobro']))
        $cobro = $_POST['cobro'];

      if (isset($_POST['min']) && $_POST['min'] != ""){
        $min = $_POST['min'];
      }

      if (isset($_POST['max']) && $_POST['max'] != ""){
        $max = $_POST['max'];
      }

      if (isset($_POST['escala']) && $_POST['escala'] != ""){
        $escala = $_POST['escala'];
      }

      echo "<h1 class='text-center'>Total de costo del camp. $".number_format($suma)."</h1><br>";
      //obteniento total de costo
      $total = $lugar+$comida+$mudanza+$material_actividades+$material_general+$seguros+$playeras+$cocineras+$camiones+$paramedico+$extras+$becas+$vanguardia;
      
      if($_POST['parametro'] == "gente"){
        //obteniendo ganancias a base de escala de cobro
        $posibles = array();
        for ($i=0; $i < 2000; $i+= $escala) {
          $ganancia = ($cobro*$gente)-$total;
          if($ganancia>$min && $ganancia < $max){
            array_push($posibles,$i);
          }
        }
        foreach ($posibles as $key => $value)
          echo "<div class='col-md-3'><p>Cobro: $".number_format($value).", Gano: $".number_format(($cobro*$gente)-$total)."</p></div>";

      } else if ($_POST['parametro'] == "cobro") {
        //obteniendo ganancia
        $posibles = array();
        for ($i=0; $i < 100 ; $i++) {
          $ganancia = ($cobro * $i)-$total;
          if($ganancia > $min && $ganancia<  $max){
            array_push($possibles, $i);
          }
        }
        foreach ($posibles as $key => $value)
          echo "<div class='col-md-3'><p>Gente: $".number_format($value).", Gano: $".number_format(($cobro*$i)-$total)."</p></div>";

      } else
        echo "<h2 class='text-center text-warning'>No se selecciono ninguna opcion para calular</h2>";

      ?>
    </div>


  </body>
</html>
