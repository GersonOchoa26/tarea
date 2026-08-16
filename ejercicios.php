<?php
/**
 * EJERCICIOS DE PHP  —  para completar en clase
 * =============================================
 *
 * Cómo se usa:
 *   1. php -S localhost:8000   y abrir  http://localhost:8000/ejercicios.php
 *   2. Completar cada ejercicio donde dice  // TODO
 *   3. Recargar el navegador: cada ejercicio se pone en verde cuando está bien.
 *
 * Al principio están TODOS en rojo. La meta es dejar la barra al 100%.
 */

// ============================================================
// BLOQUE 1 — TIPOS DE DATOS
// ============================================================

// 1.1  Crear una variable con tu nombre (string).
$nombre = "Gerson"; // TODO

// 1.2  Crear una variable con tu edad (int).
$edad = 32; // TODO

// 1.3  Crear una variable con el precio 19.99 (float).
$precio = 19.99; // TODO

// 1.4  Crear una variable booleana que valga verdadero.
$esEstudiante = true; // TODO

// 1.5  Crear un array indexado con estas 3 materias, en este orden:
//      "Matemática", "Historia", "Programación"
$materias = ["Matemática", "Historia", "Programación"]; // TODO

// 1.6  Crear un array asociativo con las claves:
//      "titulo" => "El Quijote", "anio" => 1605, "paginas" => 863
$libro = ["titulo"=>"El Quijote", "anio"=>1605, "paginas"=>863]; // TODO

// 1.7  Agregar la clave "autor" con el valor "Cervantes" al array $libro.
//      (Pista: $libro["autor"] = ...)
// TODO
$libro["autor"] = "Cervantes";

// 1.8  Convertir el string "25" a entero y guardarlo en $convertido.
//      El resultado debe ser el número 25, no el texto "25".
$textoNumero = "25";
$convertido  = (int)$textoNumero; // TODO

// 1.9  Usando interpolación de strings, armar la frase:
//      "Hola, me llamo <nombre> y tengo <edad> años"
//      (usar las variables $nombre y $edad, con comillas dobles)
$presentacion = "Hola, me llamo $nombre y tengo $edad años"; // TODO


// ============================================================
// BLOQUE 2 — ESTRUCTURAS DE CONTROL
// ============================================================

/**
 * 2.1  Devolver "mayor" si la edad es 18 o más, y "menor" si no.
 *      Usar if / else.
 */
function esMayorDeEdad(int $edad): string
{
    // TODO
    return "";
}

/**
 * 2.2  Devolver la nota en texto usando if / elseif / else:
 *        10 o más    -> "excelente"
 *        7 a 9       -> "aprobado"
 *        menos de 7  -> "desaprobado"
 */
function calificar(int $nota): string
{
    // TODO
    return "";
}

/**
 * 2.3  Devolver el nombre del día usando switch (o match):
 *        1 -> "Lunes", 2 -> "Martes", 3 -> "Miércoles"
 *        cualquier otro -> "Desconocido"
 */
function nombreDelDia(int $dia): string
{
    // TODO
    return "";
}

/**
 * 2.4  Devolver un array con los números del 1 al $hasta usando un for.
 *      contarHasta(5)  ->  [1, 2, 3, 4, 5]
 */
function contarHasta(int $hasta): array
{
    $resultado = [];
    // TODO
    return $resultado;
}

/**
 * 2.5  Devolver un array con la cuenta regresiva desde $desde hasta 1,
 *      usando un while.
 *      cuentaRegresiva(3)  ->  [3, 2, 1]
 */
function cuentaRegresiva(int $desde): array
{
    $resultado = [];
    // TODO
    return $resultado;
}

/**
 * 2.6  Recorrer el array con foreach y devolver todos los valores
 *      en MAYÚSCULAS.
 *      aMayusculas(["hola", "chau"])  ->  ["HOLA", "CHAU"]
 */
function aMayusculas(array $palabras): array
{
    $resultado = [];
    // TODO
    return $resultado;
}

/**
 * 2.7  Recorrer un array asociativo con foreach y devolver un array de
 *      strings con el formato "clave: valor".
 *      describir(["a" => 1, "b" => 2])  ->  ["a: 1", "b: 2"]
 */
function describir(array $datos): array
{
    $resultado = [];
    // TODO
    return $resultado;
}

/**
 * 2.8  Devolver solo los números pares del array, usando foreach + continue.
 *      soloPares([1,2,3,4,5,6])  ->  [2, 4, 6]
 *      Ojo: el resultado tiene que estar reindexado desde 0.
 */
function soloPares(array $numeros): array
{
    $resultado = [];
    // TODO
    return $resultado;
}

/**
 * 2.9  Buscar la primera palabra que tenga más de 5 letras y devolverla.
 *      Cortar el bucle con break apenas la encuentre.
 *      Si no hay ninguna, devolver "".
 *      primeraLarga(["sol", "elefante", "casa"])  ->  "elefante"
 */
function primeraLarga(array $palabras): string
{
    // TODO
    return "";
}

/**
 * 2.10 Dividir $a entre $b. Si $b es 0, capturar el error con try/catch
 *      y devolver el string "no se puede dividir por cero".
 *      dividir(10, 2)  ->  5
 *      dividir(10, 0)  ->  "no se puede dividir por cero"
 *      (Pista: intdiv() lanza DivisionByZeroError)
 */
function dividir(int $a, int $b): int|string
{
    // TODO
    return 0;
}


// ============================================================
// BLOQUE 3 — FUNCIONES
// ============================================================

/**
 * 3.1  Devolver el saludo "¡Hola, <nombre>!".
 */
function saludo(string $nombre): string
{
    // TODO
    return "";
}

/**
 * 3.2  Calcular el precio final sumando el IVA.
 *      El parámetro $iva tiene que tener 0.21 como valor por defecto.
 *      conIva(100)        ->  121.0
 *      conIva(100, 0.10)  ->  110.0
 */
function conIva(float $precio /* TODO: agregar el 2do parámetro */): float
{
    // TODO
    return 0.0;
}

/**
 * 3.3  Sumar una cantidad indeterminada de números (función variádica).
 *      sumarTodos(1, 2, 3)  ->  6
 *      sumarTodos()         ->  0
 *      (Pista: function sumarTodos(int ...$numeros))
 */
function sumarTodos(/* TODO */): int
{
    // TODO
    return 0;
}

/**
 * 3.4  Recibir el contador POR REFERENCIA y sumarle 1.
 *      $c = 5; incrementar($c);  ->  $c ahora vale 6
 *      (Pista: el parámetro lleva & adelante)
 */
function incrementar(int $contador): void
{
    // TODO
}

/**
 * 3.5  Devolver el string invertido SIN usar strrev().
 *      Recorrerlo con un for de atrás para adelante.
 *      invertir("hola")  ->  "aloh"
 *      (Pista: strlen() y $texto[$i])
 */
function invertir(string $texto): string
{
    // TODO
    return "";
}

/**
 * 3.6  Devolver true si la palabra es un palíndromo (se lee igual al revés).
 *      esPalindromo("neuquen")  ->  true
 *      esPalindromo("hola")     ->  false
 *      (Se puede reutilizar invertir())
 */
function esPalindromo(string $palabra): bool
{
    // TODO
    return false;
}

/**
 * 3.7  Calcular el factorial de forma RECURSIVA (la función se llama a sí misma).
 *      factorialDe(5)  ->  120
 *      factorialDe(0)  ->  1
 */
function factorialDe(int $n): int
{
    // TODO
    return 0;
}

/**
 * 3.8  Devolver el promedio de un array de números, redondeado a 2 decimales.
 *      Si el array está vacío, devolver 0.0
 *      promedio([2, 4, 9])  ->  5.0
 *      (Pista: array_sum(), count(), round())
 */
function promedio(array $numeros): float
{
    // TODO
    return 0.0;
}

/**
 * 3.9  Completar la función anónima (closure) para que triplique el número.
 *      $triplicar(3)  ->  9
 */
$triplicar = function (int $n): int {
    // TODO
    return 0;
};

/**
 * 3.10 Completar la arrow function para que devuelva true si el número
 *      es negativo.
 *      $esNegativo(-4)  ->  true
 */
$esNegativo = fn(int $n): bool => false; // TODO

/**
 * 3.11 Usar array_map() con la closure $triplicar para triplicar todo el array.
 *      triplicarTodos([1, 2, 3])  ->  [3, 6, 9]
 */
function triplicarTodos(array $numeros, callable $triplicar): array
{
    // TODO
    return [];
}


// ============================================================
// BLOQUE 4 — EJERCICIOS INTEGRADORES (usan todo lo anterior)
// ============================================================

/**
 * 4.1  FizzBuzz clásico. Devolver un array del 1 al $hasta donde:
 *        múltiplos de 3      -> "Fizz"
 *        múltiplos de 5      -> "Buzz"
 *        múltiplos de 3 y 5  -> "FizzBuzz"
 *        el resto            -> el número (como int)
 *      fizzBuzz(5)  ->  [1, 2, "Fizz", 4, "Buzz"]
 */
function fizzBuzz(int $hasta): array
{
    $resultado = [];
    // TODO
    return $resultado;
}

/**
 * 4.2  Carrito de compras. Recibe un array de productos, cada uno con
 *      "nombre", "precio" y "cantidad". Devolver el total a pagar.
 *
 *      totalCarrito([
 *          ["nombre" => "Café",  "precio" => 500.0, "cantidad" => 2],
 *          ["nombre" => "Yerba", "precio" => 800.0, "cantidad" => 1],
 *      ])  ->  1800.0
 */
function totalCarrito(array $productos): float
{
    $total = 0.0;
    // TODO
    return $total;
}

/**
 * 4.3  Contar cuántas veces aparece cada palabra en la frase.
 *      Devolver un array asociativo palabra => cantidad.
 *      contarPalabras("php es php")  ->  ["php" => 2, "es" => 1]
 *      (Pista: explode(" ", $frase) parte la frase en palabras)
 */
function contarPalabras(string $frase): array
{
    $conteo = [];
    // TODO
    return $conteo;
}


// ============================================================
//  ⬇⬇⬇  ZONA DEL CORRECTOR — NO HACE FALTA TOCAR NADA DE ACÁ ABAJO  ⬇⬇⬇
// ============================================================

$resultados = [];

/**
 * Ejecuta un ejercicio y compara el resultado obtenido con el esperado.
 */
function chequear(string $id, string $consigna, callable $ejercicio, mixed $esperado): void
{
    global $resultados;

    try {
        $obtenido = $ejercicio();
        $ok       = $obtenido === $esperado;
        $error    = null;
    } catch (Throwable $t) {
        $obtenido = null;
        $ok       = false;
        $error    = get_class($t) . ': ' . $t->getMessage();
    }

    $resultados[] = compact('id', 'consigna', 'ok', 'obtenido', 'esperado', 'error');
}

/** Muestra cualquier valor de forma legible. */
function mostrar(mixed $valor): string
{
    $texto = match (true) {
        is_bool($valor)  => $valor ? 'true' : 'false',
        is_null($valor)  => 'null',
        is_array($valor) => json_encode($valor, JSON_UNESCAPED_UNICODE),
        is_string($valor)=> '"' . $valor . '"',
        default          => (string) $valor,
    };

    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}

// --- Bloque 1 ---
chequear('1.1', 'Variable $nombre de tipo string',      fn() => is_string($nombre = $GLOBALS['nombre']) && $nombre !== '', true);
chequear('1.2', 'Variable $edad de tipo int',           fn() => is_int($GLOBALS['edad']), true);
chequear('1.3', 'Variable $precio vale 19.99 (float)',  fn() => $GLOBALS['precio'], 19.99);
chequear('1.4', 'Variable $esEstudiante vale true',     fn() => $GLOBALS['esEstudiante'], true);
chequear('1.5', 'Array $materias con las 3 materias',   fn() => $GLOBALS['materias'], ["Matemática", "Historia", "Programación"]);
chequear('1.6', 'Array asociativo $libro',              fn() => array_intersect_key($GLOBALS['libro'] ?? [], array_flip(['titulo','anio','paginas'])), ["titulo" => "El Quijote", "anio" => 1605, "paginas" => 863]);
chequear('1.7', 'Clave "autor" agregada a $libro',      fn() => $GLOBALS['libro']['autor'] ?? null, "Cervantes");
chequear('1.8', '"25" convertido a int',                fn() => $GLOBALS['convertido'], 25);
chequear('1.9', 'Frase $presentacion interpolada',      fn() => $GLOBALS['presentacion'], "Hola, me llamo {$nombre} y tengo {$edad} años");

// --- Bloque 2 ---
chequear('2.1', 'esMayorDeEdad(20) y esMayorDeEdad(15)', fn() => [esMayorDeEdad(20), esMayorDeEdad(15)], ["mayor", "menor"]);
chequear('2.2', 'calificar(10), calificar(8), calificar(4)', fn() => [calificar(10), calificar(8), calificar(4)], ["excelente", "aprobado", "desaprobado"]);
chequear('2.3', 'nombreDelDia(1), (3) y (9)',            fn() => [nombreDelDia(1), nombreDelDia(3), nombreDelDia(9)], ["Lunes", "Miércoles", "Desconocido"]);
chequear('2.4', 'contarHasta(5)',                        fn() => contarHasta(5), [1, 2, 3, 4, 5]);
chequear('2.5', 'cuentaRegresiva(3)',                    fn() => cuentaRegresiva(3), [3, 2, 1]);
chequear('2.6', 'aMayusculas(["hola", "chau"])',         fn() => aMayusculas(["hola", "chau"]), ["HOLA", "CHAU"]);
chequear('2.7', 'describir(["a" => 1, "b" => 2])',       fn() => describir(["a" => 1, "b" => 2]), ["a: 1", "b: 2"]);
chequear('2.8', 'soloPares([1,2,3,4,5,6])',              fn() => soloPares([1,2,3,4,5,6]), [2, 4, 6]);
chequear('2.9', 'primeraLarga(["sol","elefante","casa"])', fn() => primeraLarga(["sol", "elefante", "casa"]), "elefante");
chequear('2.10','dividir(10,2) y dividir(10,0)',         fn() => [dividir(10, 2), dividir(10, 0)], [5, "no se puede dividir por cero"]);

// --- Bloque 3 ---
chequear('3.1', 'saludo("Ana")',                         fn() => saludo("Ana"), "¡Hola, Ana!");
chequear('3.2', 'conIva(100) y conIva(100, 0.10)',       fn() => [round(conIva(100), 2), round(conIva(100, 0.10), 2)], [121.0, 110.0]);
chequear('3.3', 'sumarTodos(1,2,3) y sumarTodos()',      fn() => [sumarTodos(1, 2, 3), sumarTodos()], [6, 0]);
chequear('3.4', 'incrementar($c) con $c = 5',            function () { $c = 5; incrementar($c); return $c; }, 6);
chequear('3.5', 'invertir("hola")',                      fn() => invertir("hola"), "aloh");
chequear('3.6', 'esPalindromo("neuquen") y ("hola")',    fn() => [esPalindromo("neuquen"), esPalindromo("hola")], [true, false]);
chequear('3.7', 'factorialDe(5) y factorialDe(0)',       fn() => [factorialDe(5), factorialDe(0)], [120, 1]);
chequear('3.8', 'promedio([2,4,9]) y promedio([])',      fn() => [promedio([2, 4, 9]), promedio([])], [5.0, 0.0]);
chequear('3.9', '$triplicar(3)',                         fn() => $GLOBALS['triplicar'](3), 9);
chequear('3.10','$esNegativo(-4) y $esNegativo(4)',      fn() => [$GLOBALS['esNegativo'](-4), $GLOBALS['esNegativo'](4)], [true, false]);
chequear('3.11','triplicarTodos([1,2,3])',               fn() => triplicarTodos([1, 2, 3], $GLOBALS['triplicar']), [3, 6, 9]);

// --- Bloque 4 ---
chequear('4.1', 'fizzBuzz(15)',                          fn() => fizzBuzz(15), [1, 2, "Fizz", 4, "Buzz", "Fizz", 7, 8, "Fizz", "Buzz", 11, "Fizz", 13, 14, "FizzBuzz"]);
chequear('4.2', 'totalCarrito(...)',                     fn() => totalCarrito([
                                                                    ["nombre" => "Café",  "precio" => 500.0, "cantidad" => 2],
                                                                    ["nombre" => "Yerba", "precio" => 800.0, "cantidad" => 1],
                                                                ]), 1800.0);
chequear('4.3', 'contarPalabras("php es php")',          fn() => contarPalabras("php es php"), ["php" => 2, "es" => 1]);

$total     = count($resultados);
$correctos = count(array_filter($resultados, fn($r) => $r['ok']));
$porcentaje = $total > 0 ? round($correctos / $total * 100) : 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicios de PHP</title>
    <style>
        body       { font-family: system-ui, sans-serif; max-width: 900px; margin: 2rem auto; padding: 0 1rem; line-height: 1.5; color: #1a1a1a; }
        h1         { border-bottom: 3px solid #8892bf; padding-bottom: .3rem; margin-bottom: .3rem; }
        .ayuda     { color: #666; font-size: .9rem; }
        .barra     { background: #eee; border-radius: 999px; height: 22px; overflow: hidden; margin: 1rem 0 2rem; }
        .barra div { background: linear-gradient(90deg, #4F5B93, #8892bf); height: 100%; color: #fff; font-size: .75rem;
                     display: flex; align-items: center; justify-content: flex-end; padding-right: .6rem; transition: width .3s; }
        h2         { margin-top: 2rem; color: #4F5B93; font-size: 1.1rem; }
        .ej        { border: 1px solid #e3e3e8; border-left: 5px solid #d33; border-radius: 6px; padding: .6rem .9rem; margin-bottom: .6rem; background: #fff; }
        .ej.ok     { border-left-color: #2a9d3f; background: #f6fbf7; }
        .cab       { display: flex; gap: .6rem; align-items: baseline; }
        .id        { font-weight: 700; color: #4F5B93; min-width: 2.6rem; }
        .estado    { margin-left: auto; font-size: .8rem; font-weight: 700; color: #d33; }
        .ej.ok .estado { color: #2a9d3f; }
        .detalle   { font-size: .82rem; color: #555; margin-top: .4rem; font-family: ui-monospace, monospace; }
        .detalle b { color: #333; }
        .err       { color: #b00; }
    </style>
</head>
<body>

<h1>Ejercicios de PHP</h1>
<p class="ayuda">
    Completá cada <code>// TODO</code> en <b>ejercicios.php</b> y recargá esta página.
    Cuando el ejercicio esté bien, se pone en verde.
</p>

<div class="barra">
    <div style="width: <?= max($porcentaje, 8) ?>%"><?= $correctos ?> / <?= $total ?> (<?= $porcentaje ?>%)</div>
</div>

<?php
$bloques = [
    '1' => 'Bloque 1 — Tipos de datos',
    '2' => 'Bloque 2 — Estructuras de control',
    '3' => 'Bloque 3 — Funciones',
    '4' => 'Bloque 4 — Integradores',
];

foreach ($bloques as $prefijo => $titulo):
    $delBloque = array_filter($resultados, fn($r) => str_starts_with($r['id'], $prefijo . '.'));
    ?>
    <h2><?= htmlspecialchars($titulo) ?></h2>

    <?php foreach ($delBloque as $r): ?>
        <div class="ej <?= $r['ok'] ? 'ok' : '' ?>">
            <div class="cab">
                <span class="id"><?= htmlspecialchars($r['id']) ?></span>
                <span><?= htmlspecialchars($r['consigna']) ?></span>
                <span class="estado"><?= $r['ok'] ? '✔ OK' : '✘ falta' ?></span>
            </div>

            <?php if (!$r['ok']): ?>
                <div class="detalle">
                    <b>esperado:</b> <?= mostrar($r['esperado']) ?><br>
                    <b>obtenido:</b> <?= mostrar($r['obtenido']) ?>
                    <?php if ($r['error']): ?>
                        <br><span class="err"><b>error:</b> <?= htmlspecialchars($r['error']) ?></span>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endforeach; ?>
<?php endforeach; ?>

<p class="ayuda" style="margin-top:2rem">
    ¿Dudas con la sintaxis? Está la teoría en <a href="index.php">index.php</a>
    y las respuestas comentadas en <a href="soluciones.php">soluciones.php</a>.
</p>

</body>
</html>
