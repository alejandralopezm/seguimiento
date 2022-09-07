<?php include "lib/conexion.php";?>
<?php include "lib/header.php";?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="agregar_clase.php" method="POST">
                    <div class="form-group">
                    <input type="text" name="clase" class="form-control" placeholder="Ingrese clase" autofocus>
                 </form>
                 </div> <!-- end card body -->
        </div><!-- end class md-4 -->
        <div class="col-md-8">
        <?php 
            $sql="SELECT * FROM clase"; 
            $consulta=mysqli_query($conexion,$sql);
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Horario</th>
                    <th>Tema</th>
                    <th>observaciones</th>
                    <th>semana</th>
                    <th>No.Estrategia</th>
                    <th>No.Recurso</th>
                    <th>No.Evidencia</th>
                    <th>No.Semestre</th>
                    <th>No.Asignatura</th>
                    <th>No.Docente</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    while ($campos=mysqli_fetch_array($consulta)){
                 ?>
                <tr>
                    <td><?php echo $campos['idClase']; ?></td>
                    <td><?php echo $campos['horario']; ?></td>
                    <td><?php echo $campos['tema']; ?></td>
                    <td><?php echo $campos['observaciones']; ?></td>
                    <td><?php echo $campos['semana']; ?></td>
                    <td><?php echo $campos['idEstrategia']; ?></td>
                    <td><?php echo $campos['idRecurso']; ?></td>
                    <td><?php echo $campos['idEvidencia']; ?></td>
                    <td><?php echo $campos['idSemestre']; ?></td>
                    <td><?php echo $campos['idAsignatura']; ?></td>
                    <td><?php echo $campos['idDocente']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
           
            <tbody>
                <tr>
                    <td>2</td>
                    <td>3:00 a 5:00 pm</td>
                    <td>matematicas</td>
                    <td>ninguna</td>
                    <td>1</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>

                </tr>
            </tbody>



        </div> <!-- end class md-8 -->
    </div> <!-- end row -->
</div> <!-- end container -->


<?php include "lib/footer.php";?>