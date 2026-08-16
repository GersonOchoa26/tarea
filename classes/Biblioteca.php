<?php
require_once 'Database.php';
require_once 'Libro.php';
require_once 'Usuario.php';
require_once 'Prestamo.php';

class Biblioteca {
    private $db;
    private $conn;

    public function __construct() {
        // TODO: Inicializar conexión a base de datos
        // Uso
        $this->db = new Database();
        $this->conn = $this->db->getConnection();    
    }

    // Gestión de Libros
    public function agregarLibro(Libro $libro) {
        // TODO: Insertar libro en base de datos
        try{
            $insertar = $this->conn->prepare(
                "INSERT INTO libros (titulo, autor, isbn, cantidad) VALUES(?,?,?,?)"

            );
            $insertar->execute([
                $libro->getTitulo(),
                $libro->getAutor(),
                $libro->getIsbn(),
                $libro->getCantidad()

            ]);
            return $this->conn->lastInsertId();
        }catch (PDOException $errorLibro){
            echo "Error al agregar libro: ".$errorLibro->getMessage();
            return null;
            
        }
    }

    public function editarLibro($id, $nuevosDatos) {
        // TODO: Actualizar libro en base de datos
        try{    
            $actualizar = $this->conn->prepare(
                "UPDATE libros SET titulo=?, autor=?, isbn=?, cantidad=? WHERE id=?"
            );
            $actualizar->execute([
                $nuevosDatos['titulo'],
                $nuevosDatos['autor'],
                $nuevosDatos['isbn'],
                $nuevosDatos['cantidad'],
                $id
            ]);
            return true;
        }catch (PDOException $e){
            echo "Error al editar libro: ".$e->getMessage();
            return false;   
            }
    }
    
    public function eliminarLibro($id) {
        // TODO: Eliminar libro de base de datos
        try{
            $eliminar = $this->conn->prepare("DELETE FROM libros WHERE id=?");
            $eliminar->execute([$id]);
            return true;
        }catch (PDOException $e){
            echo "Error al eliminar libro: ".$e->getMessage();
            return false;   
    }
    }

    public function obtenerLibros() {
        // TODO: Retornar lista de libros disponibles
        try{
            $consulta = $this->conn->query("SELECT * FROM libros");
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            echo "Error al obtener libros: ".$e->getMessage();
            return [];
        }
    }
    public function obtenerLibroPorId($id) {
    try {
        // Usamos una consulta preparada 
        $stmt = $this->conn->prepare("SELECT * FROM libros WHERE id = ?");
        $stmt->execute([$id]);
        // fetch() devuelve un solo registro (un arreglo simple con los campos del libro)
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $errorLibro) {
        echo "Error al obtener el libro: " . $errorLibro->getMessage();
        return false;
    }
}
    // Gestión de Usuarios
    public function agregarUsuario(Usuario $usuario) {
        // TODO: Insertar usuario en base de datos
        try{
            $insertar = $this->conn->prepare(
                "INSERT INTO usuarios (nombre, email, telefono) VALUES(?, ?, ?)"
            );
            $insertar->execute([
                $usuario->getNombre(),
                $usuario->getEmail(),
                $usuario->getTelefono() 
            ]);
            return $this->conn->lastInsertId();
        }catch (PDOException $usuarioError){
            echo "Error al agregar usuario: ".$usuarioError->getMessage();
            return null;  
        }
    }

    public function editarUsuario($id, $nuevosDatos) {
        // TODO: Actualizar usuario en base de datos
        try{
            $actualizar = $this->conn->prepare(
                "UPDATE usuarios SET nombre=?, email=?, telefono=? WHERE id=?"
            );
            $actualizar->execute([
                $nuevosDatos['nombre'],
                $nuevosDatos['email'],
                $nuevosDatos['telefono'],
                $id
            ]);
            return true;
        }catch (PDOException $e){
            echo "Error al editar usuario: ".$e->getMessage();  
        }
    }
    public function obtenerUsuarioPorId($id){
        //Obtener usuario por id para mostrar form editar
        try{
            $stmt = $this->conn->prepare("SELECT * FROM usuarios WHERE id = ? ORDER BY nombre ASC");
            $stmt->execute([$id]);
            // fetch() devuelve un solo registro
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }catch (PDOException $errorId) {
        echo "Error al obtener el Usuario : " . $errorId->getMessage();
        return false;
        }
    }

    public function eliminarUsuario($id) {
        // TODO: Eliminar usuario de base de datos
         try{
            $eliminarUsuario = $this->conn->prepare("DELETE FROM usuarios WHERE id=?");
            $eliminarUsuario->execute([$id]);
            return true;
        }catch (PDOException $errUsuario){
            echo "Error al eliminar Usuario ".$errUsuario->getMessage();
            return false;  
        } 
    }

    public function obtenerUsuarios() {
        // TODO: Retornar lista de usuarios
        try{
            $consulta = $this->conn->query("SELECT * FROM usuarios ORDER BY nombre ASC");
            return $consulta->fetchAll(PDO::FETCH_ASSOC);
        }catch (PDOException $e){
            echo "Error Al obtener usuario".$e->getMessage();
        }
    }
    // Gestión de Préstamos
    public function prestarLibro($libro_id, $usuario_id, $fecha_prestamo, $fecha_devolucion, $estado) {
        // TODO: Crear registro de préstamo y actualizar stock de libros

            $insertar = $this->conn->prepare(
                "INSERT INTO prestamos (libro_id, usuario_id, fecha_prestamo, fecha_devolucion, estado) VALUES(?,?,?,?,?)");
            $insertar->execute([
                $libro_id,
                $usuario_id,
                $fecha_prestamo,
                $fecha_devolucion,
                $estado
            ]);
            
            //Descontar el stock             
            $descontarStock = $this->conn->prepare("UPDATE libros SET cantidad = cantidad -1 WHERE id = ?");
            $descontarStock->execute([$libro_id]);
    }

    public function devolverLibro($prestamo_id) {
        // TODO: Actualizar fecha de devolución y estado del préstamo, actualizar stock
        //hacer un update de prestamo a devuelto
        var_dump($prestamo_id);
        $consulta = $this->conn->prepare("SELECT * FROM prestamos WHERE id = ?");
        $consulta->execute([$prestamo_id]);
        $prestamo = $consulta->fetch(PDO::FETCH_ASSOC);

        if($prestamo['estado'] == "activo") {
        $devolverLibro = $this->conn->prepare("UPDATE prestamos SET estado = 'devuelto' WHERE id= ?");
        $devolverLibro->execute([$prestamo_id]);

        //Sumar cantidad
        $sumarStock = $this->conn->prepare("UPDATE libros SET cantidad = cantidad +1 WHERE id = ?");
        $sumarStock->execute([$prestamo['libro_id']]);
        }
    }

    public function obtenerPrestamosActivos() {
        // TODO: Retornar lista de préstamos activos
        $consulta = $this->conn->query("SELECT
            p.id,
            u.nombre AS usuario,
            l.titulo AS libros,
            p.fecha_prestamo,
            p.fecha_devolucion,
            p.estado
         FROM prestamos p
         INNER JOIN usuarios u ON u.id = p.usuario_id
         INNER JOIN libros l ON l.id = p.libro_id");
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}
