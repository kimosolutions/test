<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
    <title>Calculadora</title>
  </head>
  <body>
    <div class="container">
      <center><h1>Calculadora de precios para Campamentos</h1></center>
      <form class="form-group" action="calculate.php" method="post">
        <div class="row">
          <h3 class="text-center">Cotizacion</h3>
          <div class="col-md-3">
            <label for="" class="label">Lugar</label>
            <input type="number" name="lugar" value="" class="entrada form-control">
          </div>
          <div class="col-md-3">
            <label for="" class="label">Comida</label>
            <input type="number" name="comida" value="" class="entrada form-control">
          </div>
          <div class="col-md-3">
            <label for="" class="label">Mudanza</label>
            <input type="number" name="mudanza" value="" class="entrada form-control">
          </div>
          <div class="col-md-3">
            <label for="" class="label">Material Actividades</label>
            <input type="number" name="material_actividades" value="" class="entrada form-control">
          </div>
          <div class="col-md-3">
            <label for="" class="label">Material General</label>
            <input type="number" name="material_general" value="" class="entrada form-control">
          </div>
          <div class="col-md-3">
            <label for="" class="label">Seguros</label>
            <input type="number" name="seguros" value="" class="entrada form-control">
          </div>
          <div class="col-md-3">
            <label for="" class="label">Playeras</label>
            <input type="number" name="playeras" value="" class="entrada form-control">
          </div>
          <div class="col-md-3">
            <label for="" class="label">Publicidad</label>
            <input type="number" name="publicidad" value="" class="entrada form-control">
          </div>
          <div class="col-md-3">
            <label for="" class="label">Cocineras</label>
            <input type="number" name="cocineras" value="" class="entrada form-control">
          </div>
          <div class="col-md-3">
            <label for="" class="label">Camiones</label>
            <input type="number" name="camiones" value="" class="entrada form-control">
          </div>
          <div class="col-md-3">
            <label for="" class="label">Paramedico</label>
            <input type="number" name="paramedico" value="" class="entrada form-control">
          </div>
          <div class="col-md-3">
            <label for="" class="label">Extras</label>
            <input type="number" name="extras" value="" class="entrada form-control">
          </div>
          <div class="col-md-6">
            <label for="" class="label">Becas</label>
            <input type="number" name="becas" value="" class="entrada form-control">
          </div>
          <div class="col-md-6">
            <label for="" class="label">Vanguardia</label>
            <input type="number" name="vanguardia" value="" class="entrada form-control">
          </div>
        </div>
        <div class="row">
          <h3 class="text-center">Parametros</h3>
          <div class="col-md-3">
            <input type="radio" name="parametro" value="gente" id="radioG">
            <label for="gente">&nbsp;¿Cuanta gente esperas?</label>
            <input type="number" name="gente" value="" class="entrada form-control" id="gente">
          </div>
          <div class="col-md-3">
            <input type="radio" name="parametro" value="cobro" id="radioC">
            <label for="cobro">&nbsp;¿Cuanto quieres cobrar?</label>
            <input type="number" name="cobro" value="" class="entrada form-control" id="cobro">
          </div>
          <div class="col-md-2">
            <label for="min">¿Min. ganancias?</label>
            <input type="number" name="min" value="" class="entrada form-control" placeholder="Default $10,000">
          </div>
          <div class="col-md-2">
            <label for="max">¿Max. ganancias?</label>
            <input type="number" name="max" value="" class="entrada form-control" placeholder="Default $15,000">
          </div>
          <div class="col-md-2">
            <label for="escala">¿Diferencia precios?</label>
            <input type="number" name="escala" value="" class="entrada form-control" placeholder="Default $50">
          </div>
        </div>
        <div class="col-md-12">
          <center>
            <hr>
            <input class="btn btn-primary" type="submit" name="Calcular" value="Calcular">
          </center>
        </div>
      </form>
    </div>

    <script>
      $(document).ready(function(){
        $('#gente').click(function(){
          $('#radioG').prop('checked', true);
        });

        $('#cobro').click(function(){
          $('#radioC').prop('checked', true);
        });
      });
    </script>

  </body>
</html>
