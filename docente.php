<?php include "lib/conexion.php";?>
<?php include "lib/header.php";?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="agregar_docente.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nombres" class="form-control" placeholder="Ingrese nombres" autofocus>
                    </div><br>
                    <div class="form-group">
                    <input type="text" name="apellidos" class="form-control" placeholder="Ingrese apellidos">
                    </div><br>
                    <div class="form-group">
                    <input type="text" name="cedula" class="form-control" placeholder="Ingrese cedula">
                    </div><br>
                    <div class="form-group">
                    <input type="text" name="celular" class="form-control" placeholder="Ingrese celular">
                    </div><br>
                    <div class="form-group">
                    <input type="password" name="contrasena" class="form-control" placeholder="Ingrese contraseña">
                    </div><br>
                    <input type="submit" class="btn btn-success btn-block" name="save_task" value="Guardar">
                    
                </form>
            
                        
            </div> <!-- end card body -->
        </div><!-- end class md-4 -->
        <div class="col-md-8">
        <?php 
            $sql="SELECT * FROM docente"; 
            $consulta=mysqli_query($conexion,$sql);
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Cedula</th>
                    <th>Celular</th>
                    <th>Contrasena</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($campos=mysqli_fetch_array($consulta)){
                 ?>
                <tr>
                    <td><?php echo $campos['idDocente']; ?></td>
                    <td><?php echo $campos['nombre']; ?></td>
                    <td><?php echo $campos['apellido']; ?></td>
                    <td><?php echo $campos['cedula']; ?></td>
                    <td><?php echo $campos['celular']; ?></td>
                    <td><?php echo $campos['contrasena']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
           
            <tbody>
                <tr>
                    <td>2</td>
                    <td>Alejandra</td>
                    <td>Lopez</td>
                    <td>1193470140</td>
                    <td>3168067141</td>
                    <td>11111</td>
                </tr>
            </tbody>



        </div> <!-- end class md-8 -->
    </div> <!-- end row -->
</div> <!-- end container -->


<?php include "lib/footer.php";?>