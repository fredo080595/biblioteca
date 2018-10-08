<div class="row">
  <div class="container">
<table>
        <thead>
          <tr>
              <th data-field="id">Nombre</th>
              <th data-field="name">Autor</th>
              <th data-field="name">Informacion Adicional</th>
              <th data-field="price">Libro</th>
          </tr>
        </thead>
  <?php
  session_start();
  include "../controles/conexion.php";
  $conexion=conexion();
  

 if (isset($_SESSION['consulta'])) {
    if ($_SESSION['consulta'] > 0) {
        $idl= $_SESSION['consulta'];
       $sql="SELECT id_lib,nom_libro,autor,inf_libro,rutaimg from libros where id_lib = '$idl'";
      
    }else{
      $sql="SELECT id_lib,nom_libro,autor,inf_libro,rutaimg from libros";
    }

 }else{
   $sql="SELECT id_lib,nom_libro,autor,inf_libro,rutaimg from libros";
 }

  $result=mysqli_query($conexion,$sql);

  while ($mostrar=mysqli_fetch_row($result)) {
   
  

   ?>
        <tbody>
          <tr>
            <td><a href="contenido.php?id_lib=<?php print $mostrar[0] ?>"><?php print $mostrar[1] ?></a></td>
            <td><?php print $mostrar[2] ?></td>
            <td><?php print $mostrar[3] ?></td>      
            <td><img src="../imglib/<?php print $mostrar[4] ?>" width="150px" height="227px"></td>
          </tr>
        </tbody>
        <?php } ?>
                
      </table>
      </div>
      </div>
