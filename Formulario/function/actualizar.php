<?php

//print_r($_POST);

require("../connection/connection.php");

$id = $_POST[ 'id' ];
$nombre = $_POST[ 'nombre' ];
$email = $_POST[ 'email' ];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

$query = "UPDATE usuario SET nombre = '$nombre', email = '$email', asunto ='$asunto', mensaje ='$mensaje' WHERE id_usuario = $id";

$ejecutar = mysqli_query($connection, $query);

header("Location: ../index.php");

?>