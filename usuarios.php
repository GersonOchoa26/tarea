<?php 
    include 'header.php';
    require 'classes/Biblioteca.php';
    //instancias la clase Biblioteca
    $biblioteca = new Biblioteca();
    //Agregar usuarios
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $email = $_POST['email'] ?? '';
    $telefono = $_POST['telefono'] ?? '';
    $biblioteca->agregarUsuario(new Usuario($nombre, $email, $telefono));
}

//listar usuarios
$usuarios = $biblioteca->obtenerUsuarios();
?>
<body>
    <h3>Gestión de Usuarios</h3>
    <div>
        <form method="POST" action="usuarios.php">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br><br>
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required><br><br>
            <button type="submit" >Agregar Usuario</button>
        </form>
        </div>
        <div></div>
            <h4>Lista de Usuarios</h4>
            <table border="1" cellpadding="5" cellspacing="0">
                <thead >
                    <tr>
                        <th >ID</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                    <tbody>
                        <?php foreach($usuarios as $usuario): ?>
                        <tr>
                            <td><?php echo $usuario['id']; ?></td>
                            <td><?php echo $usuario['nombre']; ?></td>
                            <td><?php echo $usuario['email']; ?></td>
                            <td><?php echo $usuario['telefono']; ?></td>
                            <td>
                                <a href="editarUsuario.php?action=editar&id=<?php echo $usuario['id']; ?>">Editar</a>
                                <a href="eliminarUsuario.php?id=<?php echo $usuario['id']; ?>">Eliminar</a>
                                <!--a href="prestamos.php?id=<?php echo $usuario['id']; ?>">Registrar Prestamo</a>-->
                            </td>   
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
            </table> 
</body>
</html>