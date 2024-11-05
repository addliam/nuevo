<?php

require 'model/UsuarioModel.php';
$model = new UsuarioModel();
$usuarios = $model->getAllUsuarios();
require 'view/VverUsuario.php';

?>