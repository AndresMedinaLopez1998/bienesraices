<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en Venta Frente al Bosque</h1>

        <img src="build/img/destacada.jpg" alt="Imagen de la Propiedad">


        <div class="resumen-propiedad">
            <p class="precio">$ 3,000,000.00</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul>

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab doloribus reiciendis, dolore sequi autem magnam quos facilis nostrum inventore molestiae dolorum omnis repudiandae, modi perferendis libero quas vitae sapiente, suscipit quidem. Facere quidem eaque, natus totam qui error tempora harum.</p>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat earum necessitatibus ducimus dolor, eaque vel tempore quis saepe, repellat, sunt enim? Quaerat molestias, veritatis harum delectus, nemo atque laudantium dignissimos quibusdam corporis natus aut ea repellendus unde illo molestiae iure.</p>
        </div>
    </main>

<?php 
    incluirTemplate('footer');
?>