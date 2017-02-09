<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Juego de Tronos</title>
  </head>
  <body>

        <a href="actores.php">Actores</a>
        <br>
<p> Actores por temporada:</p>
        <form action="actoresTemp.php" method="post">
          <select name="capitulo">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
          </select>

        <input type="submit" value="Enviar">
        <br>
        <input type="reset" value="Reestablecer">

        </form>




    <?php
    include 'jtronosbd.php';
    $jtronos=new jtronosbd();
      if ($jtronos->geterror()==false) {
        //echo "Funciona";

            ?>
          <?php
            echo "<h1>Game of Thrones</h1>";
            echo "<hr>";
            //llamas a la funcion que tiene la consultas de resumen
            $resultado=$jtronos->Resumen();
            while ($fila1=$resultado->fetch_assoc()) {
              echo "<h2>RESUMEN:</h2> ".$fila1["plot"];
              echo "<br>";
            }
            }
              ?>
  </body>
</html>
