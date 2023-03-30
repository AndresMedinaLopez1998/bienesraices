<?php 

    require 'includes/app.php';
    $db = conectarDB();

    $errores = [];

    // Autenticar el usuario 
    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if(!$email) {
            $errores[] = "El email es obligatorio o no es válido";
        }

        if(!$password) {
            $errores[] = "El password es obligatorio o no es válido";
        }

        if(empty($errores)) {

            // Revisar si el usuario existe
            $query = "SELECT * FROM usuarios WHERE email = '${email}' ";
            $resultado = mysqli_query($db, $query);

            if($resultado->num_rows) {
                // Revisar si el password esta correcto 
                $usuario = mysqli_fetch_assoc($resultado);

                // Verificar si el password es correcto o no 
                $auth = password_verify($password, $usuario['password']);

                if($auth) {
                    // El usuario esta autenticado
                    session_start();

                    // Llenar el arreglo de la sesion 
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;

                    header('Location: /admin/index.php');

                } else {
                    $errores[] = 'El password es incorrecto';
                }

            } else {
                $errores[] = "El usuario no existe";
            }
        }
    }


    // Incluye el header
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Sesión</h1>

        <?php foreach($errores as $error): ?>
            <div class="alerta error">
                <?php echo $error; ?>
            </div>
            
        <?php endforeach; ?>

        <form method="POST" class="formulario" novalidate>
            <fieldset>
                <legend>Email y Password</legend>

                <label for="email">Correo:</label>
                <input name="email" type="email" placeholder="Tu Email" id="email" >

                <label for="password">Contraseña:</label>
                <input name="password" type="password" placeholder="Tu Contraseña" id="password" >
            </fieldset>

            <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
        </form>

    </main>

<?php 
    incluirTemplate('footer');
?>