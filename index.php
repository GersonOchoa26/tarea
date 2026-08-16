<?php
require_once 'classes/Biblioteca.php';
include 'header.php';

// TODO: Instanciar la clase Biblioteca
$biblioteca = new Biblioteca();

// TODO: Manejar lógica de enrutamiento o acciones (GET/POST)
    //Guardar Libro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'] ?? '';
    $autor = $_POST['autor'] ?? '';
    $isbn = $_POST['isbn'] ?? '';
    $cantidad = $_POST['cantidad'] ?? 1;
    $biblioteca->agregarLibro(new Libro($titulo, $autor, $isbn, $cantidad));
}

//Listar Libros
$libros = $biblioteca->obtenerLibros();

?>
<body>
        <div id="content">
            <!-- TODO: Mostrar contenido dinámico aquí dependiendo de la sección -->
            
            <h2>Sección Actual</h2>
            <p>Implementar la visualización de datos aquí.</p>

            <!--Guardar Libro-->
            <div class="formulario">
                <h3>Agregar Nuevo Libro</h3>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                    <label for="titulo">Título:</label>
                    <input type="text" id="titulo" name="titulo" required><br><br>

                    <label for="autor">Autor:</label>
                    <input type="text" id="autor" name="autor" required><br><br>

                    <label for="isbn">ISBN:</label>
                    <input type="text" id="isbn" name="isbn" required><br><br>

                    <label for="cantidad">Cantidad:</label>
                    <input type="number" id="cantidad" name="cantidad" value="1" min="1"><br><br>

                    <button type="submit">Agregar Libro</button>
                </form>
            </div>           
            
            <!-- Ejemplo de estructura para lista -->
             <h3>Lista de Libros</h3>
            <table border="1" cellpadding="5" cellspacing="0">
                <thead >
                    <tr>
                        <th >ID</th>
                        <th>Título</th>
                        <th>ISBN</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($libros as $l): ?>
                    <tr>
                        <td><?php echo $l['id']; ?></td>
                        <td><?php echo $l['titulo']; ?></td>
                        <td><?php echo $l['isbn']; ?></td>
                        <td><?php echo $l['cantidad']; ?></td>
                        <td>
                            <a href="editarLibro.php?action=editar&id=<?php echo $l['id']; ?>">Editar</a>
                            <a href="eliminarLibro.php?id=<?php echo $l['id']; ?>">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table> 
        </div>
    </div>
</body>
</html>
