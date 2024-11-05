<?php
require '../model/UsuarioModel.php';

if (isset($_GET['id'])) {
    $usu_id = $_GET['id'];
    $usuarioModel = new UsuarioModel();
    $usuarioModel->deleteUsuario($usu_id);
    header("Location: ../index.php");
    exit();
} else {
    header("Location: ../index.php");
    exit();
}
?>