<?php
require '../model/UsuarioModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usu_id = $_POST['usu_id'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $usuarioModel = new UsuarioModel();

    $usuarioModel->updateUsuario($usu_id, $nombres, $apellidos, $usuario, $correo, $password);

    header("Location: ../index.php");
    exit();
} else {
    header("Location: ../index.php");
    exit();
}
?>