  

<?php 
require_once "controles/conexion.php";

  $conexion = conexion();
  $sql="SELECT id_lib,nom_libro,autor,inf_libro,rutaimg from libros";
  $result=mysqli_query($conexion,$sql);

 ?>

  <div class="container">
    <div class="row">
      <div class="col s6"></div>
      <div class="col s3"></div>
      <div class="col s3">
          <label>Browser Select</label>
          <select class="browser-default" id="buscadorvivo">
            <option value="0" >Seleccione </option>

            <?php while($mostrar=mysqli_fetch_row($result)): ?>
              
            
            <option value="<?php echo $mostrar[0] ?>"><?php echo $mostrar[1] ?></option>
           
            <?php endwhile ?>
          </select>
      </div>     
    </div>
  </div>

  <script>
    
    $(document).ready(function(){

      $('#buscadorvivo').select2();
      $('#buscadorvivo').change(function() {
                      $.ajax({
                        type:"post",
                        data:'valor=' + $('#buscadorvivo').val(),
                        url:'php/crearsession.php',
                        success:function(r){
                          $('#muestra').load('tablas/tablas.php');
                        }
                      });

              });
    });

  </script>