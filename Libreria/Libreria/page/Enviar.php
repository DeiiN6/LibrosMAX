<?php

require_once "conectcontact.php";

$id = $_POST['id'];
$Fecha= $_POST['Fecha'];
$Correo = $_POST['Correo'];
$Nombre = $_POST['Nombre'];
$Asunto = $_POST['Asunto'];
$Comentario = $_POST['Comentario'];

$consulta = $pdo->prepare("INSERT INTO contacto(ID,FECHA,CORREO,NOMBRE,ASUNTO,COMENTARIO)VALUES(:id,:Fecha,:Correo,:Nombre,:Asunto,:Comentario)");


$consulta->bindParam(':id',$id);
$consulta->bindParam(':Fecha',$Fecha);
$consulta->bindParam(':Correo',$Correo);
$consulta->bindParam(':Nombre',$Nombre);
$consulta->bindParam(':Asunto',$Asunto);
$consulta->bindParam(':Comentario',$Comentario);

if($consulta->execute()){
    echo "Datos guardados perfectamente...";
}else{
    echo "No se guardadron los Datos...";
}
?>