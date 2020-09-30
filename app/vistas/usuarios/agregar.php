<?php include RUTA_APP.'/vistas/inc/header.php';?>
<!-- Main content -->
<section class="content container-fluid">

    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6">
                <form action="<?php echo RUTA_URL; ?>/usuarios/agregar" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="imagen">Carga la imagen del usuario</label>
                    <input type="file" name="img" class="form-control-file" id="img" required>
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="nombre" name="nombre" class="form-control" id="nombre" placeholder="Ingresa el nombre"required>
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="apellidos" name="apellidos" class="form-control" id="apellidos" placeholder="Ingresa los apellidos"required>
                </div>
                <div class="form-group">
                    <label for="puesto">Puesto</label>
                    <input type="puesto" name="puesto" class="form-control" id="puesto" placeholder="Ingresa el puesto"required>
                </div>
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="usuario" name="usuario" class="form-control" id="usuario" placeholder="Ingresa el usuario"required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password"required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Ingresa el email"required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="telefono" name="telefono" class="form-control" id="telefono" placeholder="Ingresa el teléfono"required>
                </div>
                <div class="form-group">
                    <label for="nivel">Nivel</label>
                    <select class="form-control" name="nivel" id="nivel"required>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form><br><br>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->   
<?php include RUTA_APP.'/vistas/inc/footer.php';?>