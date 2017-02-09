<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Juego de Tronos / Actores</title>
  </head>
  <body>
    <?php
    include 'jtronosbd.php';
    $jtronos=new jtronosbd();
      if ($jtronos->geterror()==false) {
        //echo "Funciona";

            ?>
            <h1> Actores </h1>
            <h2> <a href="index.php"> Inicio </a> </h2>
            <table border="1px">
          <?php
            //llamas a la funcion que tiene la consultas de actores
            $resultado2=$jtronos->Actores();
            while ($fila1=$resultado2->fetch_assoc()) {
              echo "<tr>";
                echo "<td>";
                  echo $fila1["name"];
                echo "</td>";
              echo "</tr>";
            }
            }
              ?>
            </table>
  </body>
</html>
