<?php
class UsuarioModel
{
    private $host = 'localhost';
    private $dbname = 'crud_examen';
    private $username = 'root';
    private $password = '';
    private $conn;

    public function __construct()
    {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Conexión fallida: " . $this->conn->connect_error);
        }
    }

    public function executeQuery($query)
    {
        return $this->conn->query($query);
    }

    public function getAllUsuarios()
    {
        $result = $this->executeQuery("SELECT * FROM tb_usuario");
        return $result->fetch_all(MYSQLI_ASSOC);
    }


    public function getUsuarioById($usu_id)
    {
        $stmt = $this->conn->prepare("SELECT * FROM tb_usuario WHERE usu_id = ?");
        $stmt->bind_param("i", $usu_id);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }


    public function insertUsuario($nombres, $apellidos, $usuario, $password, $correo)
    {
        $stmt = $this->conn->prepare("INSERT INTO tb_usuario (usu_nombres, usu_apellidos, usu_usuario, usu_password, usu_correo) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $nombres, $apellidos, $usuario, $password, $correo);
        return $stmt->execute();
    }


    public function updateUsuario($usu_id, $nombres, $apellidos, $usuario, $password, $correo)
    {
        $stmt = $this->conn->prepare("UPDATE tb_usuario SET usu_nombres = ?, usu_apellidos = ?, usu_usuario = ?, usu_password = ?, usu_correo = ? WHERE usu_id = ?");
        $stmt->bind_param("sssssi", $nombres, $apellidos, $usuario, $password, $correo, $usu_id);
        return $stmt->execute();
    }


    public function deleteUsuario($usu_id)
    {
        $stmt = $this->conn->prepare("DELETE FROM tb_usuario WHERE usu_id = ?");
        $stmt->bind_param("i", $usu_id);
        return $stmt->execute();
    }
}
?>