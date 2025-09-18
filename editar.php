<?php
    include "header.php";
    include "clases/Crud.php";
    $crud = new Crud();
    $contacto = $crud->show($_GET["id"]);
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-lg rounded-3">
                <div class="card-body">
                    <h1 class="text-center mb-4">Actualizar contacto</h1>
                    <form action="servidor/update.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">

                        <div class="mb-3">
                            <input type="text" name="id"
                            value="<?php echo $contacto['id']; ?>"
                            hidden> 

                            <label for="paterno" class="form-label">Apellido paterno</label>
                            <input type="text" class="form-control" name="paterno" id="paterno"
                            value="<?php echo $contacto['paterno']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="materno" class="form-label">Apellido materno</label>
                            <input type="text" class="form-control" name="materno" id="materno"
                            value="<?php echo $contacto['materno']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre"
                            value="<?php echo $contacto['nombre']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label">Teléfono</label>
                            <input type="text" class="form-control" name="telefono" id="telefono"
                            value="<?php echo $contacto['telefono']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="correo" class="form-label">Correo</label>
                            <input type="email" class="form-control" name="correo" id="correo"
                            value="<?php echo $contacto['correo']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="descripcion" class="form-label">Descripción</label>
                            <input type="descripcion" class="form-control" name="descripcion" id="descripcion"
                            value="<?php echo $contacto['descripcion']; ?>">
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label">Agrega una foto</label>
                            <input type="foto" class="form-control" name="foto" id="foto">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "footer.php";
?>