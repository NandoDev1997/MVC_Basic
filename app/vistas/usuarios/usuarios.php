<?php include RUTA_APP.'/vistas/inc/header.php';?>

<!-- Main content -->
<section class="content container-fluid">

    <div class="container">
        <div class="row">
            <div class="col">
                <a href="<?php echo RUTA_URL?>/usuarios/agregar"><button type="button" class="btn btn-dark"><i class="fas fa-user-plus"></i> Añadir usuario</button></a>
                <br><br> 
                <table id="usuarios" class="table table-striped table-bordered" style="width:100%; font-size:15px;">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Imagen</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Puesto</th>
                            <th>Telefono</th>
                            <th>Fecha de Registro</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($datos['usuarios'] as $usuario) : ?>
                        <tr>
                            <td><?php echo $usuario->id; ?></td>
                            <td><img width="50px" height="50px" class="rounded" src="<?php echo RUTA_URL?>/img/usuarios/<?php echo $usuario->imagen; ?>" alt=""></td>
                            <td><?php echo $usuario->nombre; ?></td>
                            <td><?php echo $usuario->apellidos; ?></td>
                            <td><?php echo $usuario->puesto; ?></td>
                            <td><?php echo $usuario->telefono; ?></td>
                            <td><?php echo $usuario->fecharegistro; ?></td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-outline-warning"><i class="fas fa-user-edit"></i></button>
                                    <button type="button" class="btn btn-outline-danger"><i class="fas fa-user-minus"></i></button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br><br>
    </div>


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->   

<?php include RUTA_APP.'/vistas/inc/footer.php';?>
