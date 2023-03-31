<?php

    use App\Propiedad;
    use Intervention\Image\ImageManagerStatic as Image;

    require '../../includes/app.php';

    estaAutenticado();

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: /admin/index.php');
    }

    // Obtener los datos de la propiedad 
    $propiedad = Propiedad::find($id);

    // Consultar para obtener los vendedores
    $consulta = " SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo con mensajes de errores 
    $errores = Propiedad::getErrores();

    // ejecutar el código después de que el usuario envía el formulario 
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Asignar los atributos 
        $args = $_POST['propiedad'];

        $propiedad->sincronizar($args);

        // Validación 
        $errores = $propiedad->validar();

        // Subida de archivos
        // Generar un nombre único 
        $nombreImagen = md5( uniqid(rand(), true) ) . ".jpg";

        // Subida de archivos 
        if($_FILES['propiedad']['tmp_name']['imagen']) {
            $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800, 600);
            $propiedad->setImagen($nombreImagen);
        }

        // Revisar que el arreglo de errores este vacio 
        if (empty($errores)) {
            // Almacenar la imagen
            if ($_FILES['propiedad']['tmp_name']['imagen']) {
                $image->save(CARPETA_IMAGENES . $nombreImagen);
            }
            $propiedad->guardar();
        }
    }

   
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Actualizar Propiedad</h1>

        <a href="/admin/index.php" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php  endforeach; ?>

        <form method="POST" class="formulario" enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_propiedades.php';  ?>

            <input type="submit" value="Actualizar Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>