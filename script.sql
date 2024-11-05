CREATE DATABASE crud_examen;

USE crud_examen;

CREATE TABLE tb_usuario(
    usu_id INT AUTO_INCREMENT,
    usu_nombres VARCHAR(200) NOT NULL,
    usu_apellidos VARCHAR(200) NOT NULL,
    usu_usuario VARCHAR(200) NOT NULL,
    usu_password VARCHAR(200) NOT NULL,
    usu_correo VARCHAR(200) NOT NULL,
    PRIMARY KEY (usu_id)
);

INSERT INTO tb_usuario (usu_nombres, usu_apellidos, usu_usuario, usu_password, usu_correo) 
VALUES 
('Juan', 'Pérez', 'jperez', 'password123', 'jperez@gmail.com'),
('Ana', 'García', 'agarcia', 'pass456', 'agarcia@gmail.com'),
('Luis', 'Martínez', 'lmartinez', 'abc789', 'lmartinez@gmail.com');
