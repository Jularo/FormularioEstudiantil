<?php

include_once('../config/config.php');
include('../config/Database.php');

class estudiante{
    
    public $conexion;
    
    function __construct()
    {
        $db = new Database();
        $this->conexion = $db->connectToDatabase();
    } 

    function save($params){
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $edad = $params['edad'];
        $telefono = $params['telefono'];
        $email = $params['email'];
        $imagen = $params['imagen'];
        
        $insert = "INSERT INTO estudiantes VALUES (NULL, '$nombres', '$apellidos', '$edad', $telefono, '$email', '$imagen') ";
        return mysqli_query($this->conexion, $insert);
    }


    function getAll(){
        $sql = "SELECT * FROM estudiantes";
        return mysqli_query($this->conexion, $sql);

    }

    function getOne($id)
    {
        $sql ="SELECT *FROM estudiantes WHERE id = $id";
        return mysqli_query($this->conexion, $sql);
    }
    
    function update($params){
        $nombres = $params['nombres'];
        $apellidos = $params['apellidos'];
        $edad = $params['edad'];
        $telefono = $params['telefono'];
        $email = $params['email'];
        $imagen = $params['imagen'];
        $id = $params['id'];

        $update = "UPDATE estudiantes SET nombres='$nombres', apellidos='$apellidos', edad='$edad', telefono=$telefono, email='$email', imagen='$imagen' WHERE id = $id ";
        return mysqli_query($this->conexion, $update);
    
     }

     function delete($id){
        $delete = " DELETE FROM estudiantes WHERE id = $id ";
        return mysqli_query($this->conexion, $delete);

     }

    }

?>