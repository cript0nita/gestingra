<?php
include('conexion.php');
$Conexion = new Connection();

$query = "SELECT * FROM sector";
$sectores = $Conexion->select($query);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // RECOGIDA DE DATOS DEL FORMULARIO
    $descripcion = $_REQUEST['descripcion'];
    $sector_id = $_REQUEST['sector'];
    $precio = $_REQUEST['precio'];


    // VALIDACION
    $errores = "";
    if (trim($descripcion) == "") {
        $errores .= "<li>Falta la descripcion</li>";
    }

    if (trim($sector_id) == "") {
        $errores .= "<li>Falta el sector</li>";
    }
    
    if (trim($precio) == "") {
        $errores .= "<li>Falta el precio</li>";
    }

    if (!$errores) {
        // INSERCION 
        $query = "INSERT INTO servicio (descripcion, sector_id, precio) VALUES ('$descripcion', '$sector_id', '$precio')";
        $consulta = $Conexion->query($query);

        if ($consulta == true) {
            $mensaje = "<li>Registro correcto</li>";
        }

    }
    
}

include('formularioservicio.html.php');