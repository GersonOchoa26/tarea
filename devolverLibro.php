<?php   
require_once("classes/Biblioteca.php");

//Instanciamos la Clase
$biblioteca = new Biblioteca();
//obtener el ID con get
if($_SERVER["REQUEST_METHOD"] === "POST" && isset( $_POST['id'] )){
    $prestamo_id = $_POST['id'];
   // $estado = $_POST['estado']?? 'devuelto';
    //Si se ejecuto
    $biblioteca = $biblioteca->devolverLibro($prestamo_id);
    header('location:prestamos.php');
    exit();
}
?>
<h2>Devolver Libro</h2>
<div>
    <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
        <input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id'] : ''; ?>">
        <p>Estas Seguro de Devolver este Libro</p>
        <button type="submit">Devolver</button>
        <button type="button" onclick="window.location.href='prestamos.php';">Cancelcar</button>
    </form>
</div>