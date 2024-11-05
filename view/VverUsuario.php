<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <header class="text-center p-4 bg-primary text-white">
        <h1>Usuarios</h1>
    </header>

    <div class="container mt-5">
        <!-- Tabla de usuarios -->
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Usuario</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?php echo $usuario['usu_id']; ?></td>
                            <td><?php echo $usuario['usu_nombres']; ?></td>
                            <td><?php echo $usuario['usu_apellidos']; ?></td>
                            <td><?php echo $usuario['usu_usuario']; ?></td>
                            <td><?php echo $usuario['usu_correo']; ?></td>
                            <td>
                                <a href="editar_usuario.php?id=<?php echo $usuario['usu_id']; ?>"
                                    class="btn btn-warning btn-sm">Editar</a>
                                <a href="eliminar_usuario.php?id=<?php echo $usuario['usu_id']; ?>"
                                    class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Está seguro de eliminar este usuario?');">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Formulario para registrar un nuevo usuario -->
        <div class="mt-5">
            <h2>Registrar nuevo usuario</h2>
            <form action="./controller/CinsertarUsuario.php" method="POST">
                <div class="form-group">
                    <label for="nombres">Nombres</label>
                    <input type="text" class="form-control" name="nombres" id="nombres"
                        placeholder="Ingrese los nombres" required>
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control" name="apellidos" id="apellidos"
                        placeholder="Ingrese los apellidos" required>
                </div>
                <div class="form-group">
                    <label for="usuario">Usuario</label>
                    <input type="text" class="form-control" name="usuario" id="usuario"
                        placeholder="Ingrese el nombre de usuario" required>
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="password"
                        placeholder="Ingrese la contraseña" required>
                </div>
                <div class="form-group">
                    <label for="correo">Correo</label>
                    <input type="email" class="form-control" name="correo" id="correo" placeholder="Ingrese el correo"
                        required>
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>