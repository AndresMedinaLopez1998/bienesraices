<?php 

    require '../../includes/app.php';

    use App\Propiedad;
    use Intervention\Image\ImageManagerStatic as Image;

    estaAutenticado();
    
    // Base de datos 
    $db = conectarDB();

    $propiedad = new Propiedad;

    // Consultar para obtener los vendedores
    $consulta = " SELECT * FROM vendedores";
    $resultado = mysqli_query($db, $consulta);

    // Arreglo con mensajes de errores 
    $errores = Propiedad::getErrores();

    // ejecutar el código después de que el usuario envía el formulario 
    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        // Crea una nueva instancia 
        $propiedad = new Propiedad($_POST['propiedad']);

        // Generar un nombre único 
        $nombreImagen = md5( uniqid(rand(), true) ) . ".jpg";

        // Setear la imagen 
        // Realiza un resize a la imagen con Intervention 
        if($_FILES['propiedad']['tmp_name']['imagen']) {
            $image = Image::make($_FILES['propiedad']['tmp_name']['imagen'])->fit(800, 600);
            $propiedad->setImagen($nombreImagen);
        }
        
        // Validar
        $errores = $propiedad->validar();

        // Revisar que el arreglo de errores este vacio 
        if(empty($errores)) {
            // Crear Carpeta 
            if(!is_dir(CARPETA_IMAGENES)) {
                mkdir(CARPETA_IMAGENES);
            }
     
            // Guarda la imagen en el servidor 
            $image->save(CARPETA_IMAGENES . $nombreImagen);

            // Guarda en la base de datos 
            $propiedad->guardar();
        }
    }

    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Crear</h1>

        <a href="/admin/index.php" class="boton boton-verde">Volver</a>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
        <?php  endforeach; ?>

        <form method="POST" action="/admin/propiedades/crear.php" class="formulario" enctype="multipart/form-data">
            <?php include '../../includes/templates/formulario_propiedades.php';  ?>

            <input type="submit" value="Crear Propiedad" class="boton boton-verde">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>