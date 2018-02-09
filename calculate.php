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
      {
        $lugar = $_POST['lugar'];
        $suma += $lugar;
      }

      if (isset($_POST['comida']))
      {
        $comida = $_POST['comida'];
        $suma += $comida;
      }

      if (isset($_POST['mudanza']))
      {
        $mudanza = $_POST['mudanza'];
        $suma += $mudanza;
      }

      if (isset($_POST['material_actividades']))
      {
        $material_actividades = $_POST['material_actividades'];
        $suma += $material_actividades;
      }

      if (isset($_POST['material_general']))
      {
        $material_general = $_POST['material_general'];
        $suma += $material_general;
      }

      if (isset($_POST['seguros'])){
        $seguros = $_POST['seguros'];
        $suma += $seguros;
      }


      if (isset($_POST['playeras']))
      {
        $playeras = $_POST['playeras'];
        $suma += $playeras;
      }

      if (isset($_POST['cocineras']))
      {
        $cocineras = $_POST['cocineras'];
        $suma += $cocineras;
      }

      if (isset($_POST['camiones']))
      {
        $camiones = $_POST['camiones'];
        $suma += $camiones;
      }

      if (isset($_POST['paramedico']))
      {
        $paramedico = $_POST['paramedico'];
        $suma += $paramedico;
      }

      if (isset($_POST['extras']))
      {
        $extras = $_POST['extras'];
        $suma += $extras;
      }

      if (isset($_POST['becas']))
      {
        $becas = $_POST['becas'];
        $suma += $becas;
      }

      if (isset($_POST['vanguardia']))
      {
        $vanguardia = $_POST['vanguardia'];
        $suma += $vanguardia;
      }

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

      if($_POST['parametro'] == "gente"){

        //$posibles = array();

        //foreach ($posibles as $key => $value)
          echo "<div class='col-md-3'><p>Cobro: $".number_format($suma/$gente).", Gano: $".number_format(($suma/$gente)-$suma)."</p></div>";

      } else if ($_POST['parametro'] == "cobro") {

        //$posibles = array();

        //foreach ($posibles as $key => $value)
          echo "<div class='col-md-3'><p>Gente: $".number_format($suma/$cobro).", Gano: $".number_format(($suma/$cobro)-$suma)."</p></div>";

      } else
        echo "<h2 class='text-center text-warning'>No se selecciono ninguna opcion para calcular</h2>";

      ?>
    </div>


  </body>
</html>
