<?php
require_once 'classes/Biblioteca.php';
?>
    <?php
    //instanciar clase Biblioteca
    $biblioteca = new Biblioteca();
    //Verificar si se ha enviado el formulario de eliminación
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
        $id = $_POST['id'];
        $biblioteca->eliminarLibro($id);
        // Redirigir a la página principal después de eliminar
        header('Location: index.php');
        exit();
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST'&& isset($_POST['id']))

    ?>
    <h2>Eliminar Libro</h2>
    <div>
        <form action="eliminarLibro.php" method="POST">
            <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
            <p>¿Está seguro de que desea eliminar este libro?</p>
            <button type="submit">Sí, eliminar</button>
            <button type="button" onclick="window.location.href='index.php';">Cancelar</button>
        </form>

    </div>
    
</body>
</html>