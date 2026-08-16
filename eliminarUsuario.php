<?php
require_once 'classes/Biblioteca.php';

//pasar el ID a Eliminar
$biblioteca = new Biblioteca();
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])){
    $id = $_POST['id'];
    $biblioteca->eliminarUsuario($id);
    header('Location: usuarios.php');
    exit();
}

?>
<div>
    <h3>Elimnar Usuarios</h3>
    <div>
        <form action="eliminarUsuario.php" method="POST">
            <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id']:''; ?>"
            <p>¿Está seguro de que desea eliminar este usuario?</p>
            <button type="submit">Sí, eliminar</button>
            <button type="button" onclick="window.location.href='usuarios.php';">Cancelar</button>
        </form>
    </div>
</div>
