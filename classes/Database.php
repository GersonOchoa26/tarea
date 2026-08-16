<?php

class Database {
    private $host = 'localhost';
    private $db_name = 'biblioteca';
    private $username = 'root';
    private $password = 'root';
    public $conn;

    // Método para obtener la conexión a la base de datos
    public function getConnection() {
        $this->conn = null;
       try{
            $con = "mysql:host=$this->host;dbname=$this->db_name;charset=utf8mb4";
            $this->conn = new PDO($con, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Conexión a la base de datos exitosa :)";
        }
        catch(PDOException $e) {
            echo "Error de conexión BD :( : " . $e->getMessage();  
       }
       return $this->conn;
    }
}
?>