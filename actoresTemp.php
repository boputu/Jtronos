<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Juego de Tronos / Actores por Temporada</title>
  </head>
  <body>
    <?php
    include 'jtronosbd.php';
    $jtronos=new jtronosbd();
      if ($jtronos->geterror()==false) {
        //echo "Funciona";

            ?>
            <h1> Actores por Temporada</h1>
            <h2> <a href="index.php"> Inicio </a> </h2>
            <table border="1px">
              <tr>
                <th align="center"> Name </th>
                <th align="center"> Episode </th>
                <th align="center"> Season </th>
              </tr>
          <?php
            //llamas a la funcion que tiene la consultas de actores
            $resultado3=$jtronos->ActoresTemp($_POST['capitulo']);
            while ($fila1=$resultado3->fetch_assoc()) {
              echo "<tr>";
                echo "<td>";
                  echo $fila1["name"];
                echo "</td>";
                echo "<td>";
                  echo $fila1["episode"];
                echo "</td>";
                echo "<td>";
                  echo $fila1["season"];
                echo "</td>";
              echo "</tr>";
            }
            }
              ?>
            </table>
  </body>
</html>
