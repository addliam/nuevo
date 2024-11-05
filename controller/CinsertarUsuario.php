<?php
require '../model/UsuarioModel.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $correo = $_POST['correo'];

    $usuarioModel = new UsuarioModel();

    $usuarioModel->insertUsuario($nombres, $apellidos, $usuario, $password, $correo);

    header("Location: ../index.php");
    exit();
}
?>