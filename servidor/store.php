<?php
include "../clases/Crud.php";
$crud = new Crud();

$datos = [
    "paterno" => $_POST["paterno"],
    "materno" => $_POST["materno"],
    "nombre" => $_POST["nombre"],
    "telefono" => $_POST["telefono"],
    "correo" => $_POST["correo"],
    "descripcion" => $_POST["descripcion"]
];

$nombre_foto = $_FILES["foto"]["name"];
$origen = $_FILES["foto"]["tmp_name"];
$destino = "../public/upload/" . $nombre_foto;

if(($id_contacto = $crud->store($datos)) > 0){
    if($crud->store_path($id_contacto, $nombre_foto, $nombre_foto)){ // solo el nombre
        if(move_uploaded_file($origen, $destino)){
            header("location:../index.php");
        } else {
            echo "Fallo al mover imagen";
        }
    } else {
        echo "Fallo al guardar ruta";
    }
} else {
    echo "Fallo al agregar";
}
?>
