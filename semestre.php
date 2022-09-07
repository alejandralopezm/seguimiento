<?php include "lib/conexion.php";?>
<?php include "lib/header.php";?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="agregar_semestre.php" method="POST">
                    <div class="form-group">
                    <input type="text" name="semestre" class="form-control" placeholder="Ingrese su semestre" autofocus>
                 </form>
                 </div> <!-- end card body -->
        </div><!-- end class md-4 -->
        <div class="col-md-8">
        <?php 
            $sql="SELECT * FROM semestre"; 
            $consulta=mysqli_query($conexion,$sql);
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Semestre</th>
                    <th>No.Docente</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($campos=mysqli_fetch_array($consulta)){
                 ?>
                <tr>
                    <td><?php echo $campos['idSemestre']; ?></td>
                    <td><?php echo $campos['nomSemestre']; ?></td>
                    <td><?php echo $campos['idDocente']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
           
            <tbody>
                <tr>
                    <td>2</td>
                    <td>tercero</td>
                    <td>2</td>
                </tr>
            </tbody>



        </div> <!-- end class md-8 -->
    </div> <!-- end row -->
</div> <!-- end container -->


<?php include "lib/footer.php";?>