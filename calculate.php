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

      if (isset($_POST['min']))
        $min = $_POST['min'];

      if (isset($_POST['max']))
        $max = $_POST['max'];

      if (isset($_POST['escala']))
        $escala = $_POST['escala'];

      //Imprime valor de cada variable
      // echo "Lugar = $".$lugar ."<br>";
      // echo "Comida = $".$comida."<br>";
      // echo "Mudanza = $".$mudanza."<br>";
      // echo "Material Actividades = $".$material_actividades."<br>";
      // echo "Material General= $".$material_general."<br>";
      // echo "Seguros = $".$seguros ."<br>";
      // echo "Playeras = $".$playeras."<br>";
      // echo "Cocineras = $".$cocineras."<br>";
      // echo "Camiones = $".$camiones."<br>";
      // echo "Paramedico = $".$paramedico."<br>";
      // echo "Extras = $".$extras."<br>";
      // echo "Becas = $".$becas."<br>";
      // echo "Vanguardia = $".$vanguardia."<br>";

      $suma = 0;

      foreach ($_POST as $key => $value) {
        // Solo sume el total de cotizacion
        if($key == "gente" || $key == "cobro" || $key == "min" || $key == "max" || $key == "escala"|| $key == "calcular" || $value == "parametro")
          continue;
        $suma += $value;
      }

      echo "<h4 class='text-center'>Total de costo del camp. $".number_format($suma)."</h4><br>";

      if($_POST['parametro'] == "gente"){

        $cobro = 0;
        $posibles = array();

        for($i = 0;$i<200;$i++){
          $actual = ($gente * $cobro) - $suma;
          if($actual > $min && $actual < $max){
            $posibles[$cobro] = $actual;
          }
          $cobro += $escala;
        }

        foreach ($posibles as $key => $value) {
          echo "Cobro: $".number_format($key).", Gano: $".number_format($value)."<br>";
        }

      } else if ($_POST['parametro'] == "cobro") {

        $gente = 0;
        $posibles = array();

        for($i = 0;$i<2000;$i++){
          $actual = ($i * $cobro) - $suma;
          if($actual > $min && $actual < $max){
            $posibles[$i] = $actual;
          }
        }

        foreach ($posibles as $key => $value) {
          echo "Gente: ".number_format($key).", Gano: $".number_format($value)."<br>";
        }

      } else {
        echo "<h2>No se selecciono ninguna opcion para calular</h2>";
      }

      ?>
    </div>


  </body>
</html>
