<?php

if(!empty($_POST["ingresar"])){
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $comentarios = $_POST["comentarios"];
    
    $sql = $conexion->prepare("INSERT INTO registro_contacto (nombre, email,telefono,comentarios) VALUES (?, ?, ?, ?)");
    $sql->bind_param("ssss", $nombre, $email,$telefono,$comentarios);
    
    if($sql->execute()){
        echo "<p class='w-full bg-blue-500 rounded-md text-center font-semibold text-white p-2'>Se registró correctamente</p>";
    }else{
        echo "<p class='w-full bg-red-500 rounded-md text-center font-semibold text-white p-2'>No entraste sopla monda</p>";
    }   

    $sql->close();
}

?>
