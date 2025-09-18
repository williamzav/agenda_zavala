<?php
    include "header.php";
    include "clases/Crud.php";
    $crud=new Crud();
    $contactos=$crud->show_all();
?>
<div class="container mt-5">
    <div class="row justify-content-center">
           <div class="card-body">
                <h1 class="text-center">Lista de contactos</h1>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Apellido paterno</th>
                            <th scope="col">Apellido materno</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Descripcion</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Ediar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($contactos as $contacto):
                                $id=$contacto["id"];
                        ?>
                        <tr>
                            <th scope="row">1</th>
                            <td><?php echo $contacto["paterno"] ?></td>
                            <td><?php echo $contacto["materno"] ?></td>
                            <td><?php echo $contacto["nombre"] ?></td>
                            <td><?php echo $contacto["telefono"] ?></td>
                            <td><?php echo $contacto["correo"] ?></td>
                            <td><?php echo $contacto["descripcion"] ?></td>

                            <td class="text-center">
                            <img src="public/upload/<?php echo $contacto['foto'] ?>" width="20%" alt="">
                            </td>



                            <td>
                                <a href="editar.php?id=<?php echo $id; ?>">
                                    Editar
                                </a>
                            </td>
                            <td>
                                <a href="servidor/destroy.php?id=<?php echo $id;?>">Eliminar</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <p>
                    <a style="color: white;" href="create.php">Crear nuevo contacto</a>
                </p>
                </form>
            </div>
    </div>
</div>
<?php
include "footer.php";
?>