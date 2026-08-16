<?php 
    require_once 'classes/Biblioteca.php';
    include 'header.php';


    //Instanciamos la Clase
    $biblioteca = new Biblioteca();
    //Validar Datos que vienen
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])){
        $id = $_POST['id'];
        $nuevosDatos = [
            'nombre' => $_POST['nombre'],
            'email' => $_POST['email'],
            'telefono' => $_POST['telefono']
        ];
        $biblioteca->editarUsuario($id, $nuevosDatos);
        Header('Location:usuarios.php');
        exit();        
    }
     //mostrasr datos del Usuario a editar
    if (isset($_GET['action']) && $_GET['action'] === 'editar' && isset($_GET['id'])) {
        $id = $_GET['id'];
        $usuario = $biblioteca->obtenerUsuarioPorId($id);
    }
?>
<h3>Actualizar Usuarios</h3>
    <div>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <input type="hidden" name="id" value="<?php echo isset($usuario) ? $usuario['id'] : ''; ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo isset ($usuario) ? $usuario ['nombre'] : ''; ?>" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo isset($usuario) ? $usuario['email'] : ''; ?>" required><br><br>
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" value="<?php echo isset($usuario) ? $usuario['telefono'] : ''; ?>" required><br><br>
            <button type="submit" >Actualizar Usuario</button>
        </form>
    </div>