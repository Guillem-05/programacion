<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Publicaciones</title>
</head>
<body>
    <h1>Gestión de Publicaciones</h1>
    <form method="POST">
        <h2>Añadir Publicación</h2>
        <select name="tipo">
            <option value="libro">Libro</option>
            <option value="revista">Revista</option>
        </select>
        <input type="text" name="titulo" placeholder="Título" required>
        <input type="text" name="autor" placeholder="Autor" required>
        <input type="number" name="anio" placeholder="Año" required>
        <div id="extraFields">
            <input type="number" name="numeroPaginas" placeholder="Número de Páginas">
            <input type="text" name="tematica" placeholder="Temática">
        </div>
        <button type="submit">Añadir</button>
    </form>

    <h2>Lista de Publicaciones</h2>
    <ul>
        <?php
        foreach ($publicaciones as $index => $publicacion) {
            echo "<li>";
            echo "Título: " . $publicacion->getTitulo() . ", Autor: " . $publicacion->getAutor() . ", Año: " . $publicacion->getAnio();
            if ($publicacion instanceof Libro) {
                echo ", Número de Páginas: " . $publicacion->getNumeroPaginas();
            } elseif ($publicacion instanceof Revista) {
                echo ", Temática: " . $publicacion->getTematica();
            }
            echo " <a href='?delete=$index'>Eliminar</a>";
            echo "</li>";
        }
        ?>
    </ul>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $tipo = $_POST['tipo'];
        $titulo = $_POST['titulo'];
        $autor = $_POST['autor'];
        $anio = $_POST['anio'];

        if ($tipo === 'libro') {
            $numeroPaginas = $_POST['numeroPaginas'];
            $manager->addPublicacion(new Libro($titulo, $autor, $anio, $numeroPaginas));
        } else {
            $tematica = $_POST['tematica'];
            $manager->addPublicacion(new Revista($titulo, $autor, $anio, $tematica));
        }
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }

    if (isset($_GET['delete'])) {
        $manager->deletePublicacion($_GET['delete']);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit;
    }
    ?>
</body>
</html>