<?php
require '../model/UsuarioModel.php';

if (isset($_GET['id'])) {
    $usu_id = $_GET['id'];
    $usuarioModel = new UsuarioModel();
    $usuario = $usuarioModel->getUsuarioById($usu_id);

    if (!$usuario) {
        header("Location: ../index.php");
        exit();
    }
} else {
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Editar Usuario</h2>
        <form action="../controller/CeditarUsuario.php" method="POST">
            <input type="hidden" name="usu_id" value="<?php echo $usuario['usu_id']; ?>">

            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" name="nombres" id="nombres"
                    value="<?php echo $usuario['usu_nombres']; ?>" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" name="apellidos" id="apellidos"
                    value="<?php echo $usuario['usu_apellidos']; ?>" required>
            </div>
            <div class="form-group">
                <label for="usuario">Usuario</label>
                <input type="text" class="form-control" name="usuario" id="usuario"
                    value="<?php echo $usuario['usu_usuario']; ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="text" class="form-control" name="password" id="password"
                    value="<?php echo $usuario['usu_password']; ?>" required>

            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" name="correo" id="correo"
                    value="<?php echo $usuario['usu_correo']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="../index.php" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>