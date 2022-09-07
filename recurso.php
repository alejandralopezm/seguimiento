<?php include "lib/conexion.php";?>
<?php include "lib/header.php";?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-body">
                <form action="agregar_recurso.php" method="POST">
                    <div class="form-group">
                    <input type="text" name="recurso" class="form-control" placeholder="Ingrese recurso" autofocus>
                 </form>
                 </div> <!-- end card body -->
        </div><!-- end class md-4 -->
        <div class="col-md-8">
        <?php 
            $sql="SELECT * FROM recurso"; 
            $consulta=mysqli_query($conexion,$sql);
        ?>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Recurso</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    while ($campos=mysqli_fetch_array($consulta)){
                 ?>
                <tr>
                    <td><?php echo $campos['idRecurso']; ?></td>
                    <td><?php echo $campos['recurso']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
           
            <tbody>
                <tr>
                    <td>2</td>
                    <td>'Aula de Informatica 603-Maria Inmaculada</td>
                </tr>
            </tbody>



        </div> <!-- end class md-8 -->
    </div> <!-- end row -->
</div> <!-- end container -->


<?php include "lib/footer.php";?>