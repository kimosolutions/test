<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Calculate</title>
  </head>
  <body>

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

    ?>

  </body>
</html>
