<?php
    require_once 'classes/Biblioteca.php';
    ?>
<body>
    <?php   
    //instanciar clase Biblioteca
    $biblioteca = new Biblioteca();
    //Verificar si se ha enviado el formulario de edición
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
        $id = $_POST['id'];
        $nuevosDatos = [
            'titulo' => $_POST['titulo'],
            'autor' => $_POST['autor'],
            'isbn' => $_POST['isbn'],
            'cantidad' => $_POST['cantidad']
        ];
        $biblioteca->editarLibro($id, $nuevosDatos);
        // Redirigir a la página principal después de editar
        header('Location: index.php');
        exit();
    }
    //mostrasr datos del libro a editar
    if (isset($_GET['action']) && $_GET['action'] === 'editar' && isset($_GET['id'])) {
        $id = $_GET['id'];
        $libro = $biblioteca->obtenerLibroPorId($id);
    }  
?>    
    <h2>Editar Libro</h2>
    <div class="container">
         <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <input type="hidden" name="id" value="<?php echo isset($libro) ? $libro['id'] : ''; ?>">
                    <label for="titulo">Título:</label>
                    <input type="text" id="titulo" name="titulo" value="<?php echo isset($libro) ? $libro['titulo'] : ''; ?>" required><br><br>
                    <label for="autor">Autor:</label>
                    <input type="text" id="autor" name="autor" value="<?php echo isset($libro) ? $libro['autor'] : ''; ?>" required><br><br>

                    <label for="isbn">ISBN:</label>
                    <input type="text" id="isbn" name="isbn" value="<?php echo isset($libro) ? $libro['isbn'] : ''; ?>" required><br><br>

                    <label for="cantidad">Cantidad:</label>
                    <input type="number" id="cantidad" name="cantidad" value="<?php echo isset($libro) ? $libro['cantidad'] : '1'; ?>" min="1"><br><br>

                    <button type="submit">Editar Libro</button>
                    <button type="button" onclick="window.location.href='index.php';">Cancelar</button>
                </form>
    </div>
</body>
</html>