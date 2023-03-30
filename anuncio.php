<?php 

    $id = $_GET['id'];
    $id = filter_var($id, FILTER_VALIDATE_INT);

    if(!$id) {
        header('Location: /index.php');
    }

    require 'includes/app.php';

    //Importar la conexión 
    $db = conectarDB();

    // Consultar 
    $query = "SELECT * FROM propiedades WHERE id = ${id} ";

    // Obtener un resultado
    $resultado = mysqli_query($db, $query);

    if(!$resultado->num_rows) {
        header('Location: /index.php');
    }

    $propiedad = mysqli_fetch_assoc($resultado);

    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1><?php echo $propiedad['titulo']; ?></h1>

        <img src="/imagenes/<?php echo $propiedad['imagen']; ?>" alt="Imagen de la Propiedad">


        <div class="resumen-propiedad">
            <p class="precio">$ <?php echo $propiedad['precio']; ?></p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="icono wc">
                    <p><?php echo $propiedad['wc']; ?></p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p><?php echo $propiedad['habitaciones']; ?></p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p><?php echo $propiedad['habitaciones']; ?></p>
                </li>
            </ul>

            <p><?php echo $propiedad['descripcion']; ?></p>
        </div>
    </main>

<?php 
    mysqli_close($db);
    incluirTemplate('footer');
?>