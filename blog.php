<?php 
    require 'includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Nuestro Blog</h1>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="build/img/blog1.jpg" alt="Imagen de Entreada de Blog">
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu Casa</h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/2023</span> por: <span>Admin</span> </p>
                    <p>Consejos para construir una terraza en el techo de tu casa cons los mejores materiales y ahorrando dinero </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="build/img/blog2.jpg" alt="Imagen de Entreada de Blog">
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la decoración de tu Hogar</h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/2023</span> por: <span>Admin</span> </p>
                    <p>Maximiza el espacio en tu hogar con esta gui, aprende a combinar muebles y colores para darle vida a tu espacio </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="build/img/blog3.jpg" alt="Imagen de Entreada de Blog">
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu Casa</h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/2023</span> por: <span>Admin</span> </p>
                    <p>Consejos para construir una terraza en el techo de tu casa cons los mejores materiales y ahorrando dinero </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <img src="build/img/blog4.jpg" alt="Imagen de Entreada de Blog">
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guía para la decoración de tu Hogar</h4>
                    <p class="informacion-meta">Escrito el: <span>20/10/2023</span> por: <span>Admin</span> </p>
                    <p>Maximiza el espacio en tu hogar con esta gui, aprende a combinar muebles y colores para darle vida a tu espacio </p>
                </a>
            </div>
        </article>
    </main>

<?php 
    include './includes/templates/footer.php';
?>