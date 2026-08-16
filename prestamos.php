<?php
require_once 'classes/Biblioteca.php';
include 'header.php';
?>
<?php
//instanciar la clase Biblioteca
$biblioteca = new Biblioteca();

//listar usuario
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    //$id = $_POST['id'];
    $libro_id = $_POST['libro_id'] ?? '';
    $usuario_id = $_POST['usuario_id'] ??'';
    $fecha_prestamo = $_POST['fecha_prestamo'] ??'';
    $fecha_devolucion = $_POST['fecha_devolucion'] ??'';
    $estado = $_POST['estado'] ?? 'activo';
    $biblioteca->prestarLibro($libro_id, $usuario_id, $fecha_prestamo, $fecha_devolucion, $estado);
    }

    //LISTAR PRESTAMOS
    $usuarios = $biblioteca->obtenerUsuarios();
    $libros = $biblioteca->obtenerLibros();
    $prestamos = $biblioteca->obtenerPrestamosActivos();

?>
<body>
    <div>
        <form action="prestamos.php" method="POST">
            <label for="usuario_id">Selecciona</label>
            <select id="usuario_id" name="usuario_id" >
                <option> Seleccionar Usuario</option>
                <?php foreach ($usuarios as $usuario): ?>
                <option value="<?php echo $usuario['id']; ?>">
                <?php echo htmlspecialchars($usuario['nombre']); ?>
                </option>
                <?php endforeach; ?>
            </select>
           <select id="libro_id" name="libro_id" >
                 <option>Seleccionar Libro</option>
                <?php foreach ($libros as $libro): ?>
                <option value="<?php echo $libro['id']; ?>">
                <?php echo htmlspecialchars($libro['titulo']); ?>
                </option>
                <?php endforeach; ?>
            </select><br><br>
            <label>Fecha de Prestamo</label>
            <input type="date" name="fecha_prestamo"><br><br>
            <label>Fecha de Devolucion</label>
            <input type="date" name="fecha_devolucion"><br><br>
            <button type="submit">Registrar</button>
        </form>
    </div>
    <div>
        <table border="1" cellpadding="1" cellspacing="0">
            <head>
                <tr>
                    <th>Id</th>
                    <th>Usuario</th>
                    <th>Libro</th>
                    <th>Estado</th>
                    <th>Fecha Prestamo</th>
                    <th>Acciones</th>
                </tr>

            </head>
            <tbody>
                <?php foreach($prestamos as $prestamo): ?>
                        <tr>
                            <td><?php echo $prestamo['id']; ?></td>
                            <td><?php echo $prestamo['usuario']; ?></td>
                            <td><?php echo $prestamo['libros']; ?></td>
                            <td><?php echo $prestamo['estado']; ?></td>
                            <td><?php echo $prestamo['fecha_prestamo']  ?></td>
                            <td>
                                <a href="devolverLibro.php?id=<?php echo $prestamo['id']; ?>">Devolver</a>
                            </td>   
                        </tr>
                        <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

