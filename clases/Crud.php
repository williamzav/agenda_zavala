<?php
    include "Conexion.php";

    class Crud extends Conexion{
        //metodo para insertar
        public function store($datos){
            $conn = parent::conectar();
            $sql = "INSERT INTO t_contactos (paterno,materno,nombre,telefono,correo,descripcion)
            VALUES ('". $datos["paterno"] ."',
                    '". $datos["materno"] ."',
                    '". $datos["nombre"] ."',
                    '". $datos["telefono"] ."',
                    '". $datos["correo"] ."',
                    '". $datos["descripcion"] ."')";
            $exec = mysqli_query($conn,$sql);
            $id_contacto = mysqli_insert_id($conn); //subir la imagen

            return $id_contacto;
        }
        //metodo para mostrar todos los registros
        public function show_all(){
            $conn = parent::conectar();
            $sql = "SELECT 
                c.id, 
                c.paterno, 
                c.materno, 
                c.nombre, 
                c.telefono, 
                c.correo, 
                c.descripcion, 
                f.ruta AS foto
            FROM 
                t_contactos c
            LEFT JOIN 
                t_fotos f ON c.id = f.id_contacto";
            $exec = mysqli_query($conn, $sql);
            $datos = array();
            while($row = mysqli_fetch_assoc($exec)){
            $datos[] = $row;
        }
        return $datos;
    }


        //metodo para eliminar un registro

        
        public function destroy($id){
            $conn= parent::conectar();
            $sql="DELETE FROM t_contactos WHERE id = '$id'";
            $exec = mysqli_query($conn,$sql);
            return $exec;
        }

        public function show($id){
            $conn = parent::conectar();
            $sql = "SELECT * FROM t_contactos WHERE id = '$id'";
            $exec = mysqli_query($conn, $sql);
            $datos = mysqli_fetch_assoc($exec);
            return $datos;
        }

        //metodo para editar un registro
        public function update($id, $datos){
            $conn= parent::conectar();
            $sql="UPDATE t_contactos SET 
                    paterno = '". $datos["paterno"] ."',
                    materno = '". $datos["materno"] ."',
                    nombre = '". $datos["nombre"] ."',
                    telefono = '". $datos["telefono"] ."',
                    correo = '". $datos["correo"] ."',
                    descripcion = '". $datos["descripcion"] ."'
                    WHERE id = '$id'";
            $exec = mysqli_query($conn,$sql);
            return $exec;
        }

        public function store_path($id_contacto, $nombre, $ruta){
            $conn = parent::conectar();
            $sql = "INSERT INTO t_fotos (id_contacto, nombre, ruta)
            VALUES ('$id_contacto', '$nombre', '$ruta')";
            $exec = mysqli_query($conn,$sql);
            return $exec;
        }

    }
?>