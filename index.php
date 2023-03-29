<?php 
    require 'includes/funciones.php';
    incluirTemplate('header', $inicio = true);
?>

    <main class="contenedor seccion">
        <h1>Más Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="Icono Seguridad">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero eos odit reprehenderit doloribus impedit optio voluptas, iusto ab, molestias reiciendis recusandae possimus maiores? Tempora repellat labore eaque expedita, dolorum eum deleniti! Eveniet ex quae dignissimos culpa dicta labore id minus.</p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="Icono Precio">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero eos odit reprehenderit doloribus impedit optio voluptas, iusto ab, molestias reiciendis recusandae possimus maiores? Tempora repellat labore eaque expedita, dolorum eum deleniti! Eveniet ex quae dignissimos culpa dicta labore id minus.</p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="Icono Tiempo">
                <h3>A Tiempo</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero eos odit reprehenderit doloribus impedit optio voluptas, iusto ab, molestias reiciendis recusandae possimus maiores? Tempora repellat labore eaque expedita, dolorum eum deleniti! Eveniet ex quae dignissimos culpa dicta labore id minus.</p>
            </div>
        </div>
    </main>

    <section class="seccion contenedor">
        <h2>Casas y Depas en Venta</h2>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <img src="build/img/anuncio1.jpg" alt="Imagen Propiedad Anuncio">

                <div class="contenido-anuncio">
                    <h3>Casa de Lujo en el Lago</h3>
                    <p>Casa en el lago con excelente vista, acabados de lujo a un excelente precio</p>
                    <p class="precio">$3,000,000.00</p>

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

                    <a class="boton boton-amarillo-block" href="anuncio.php">Ver Propiedad</a>
                </div>
            </div>

            <div class="anuncio">
                <img src="build/img/anuncio2.jpg" alt="Imagen Propiedad Anuncio">

                <div class="contenido-anuncio">
                    <h3>Casa Terminados de Lujo</h3>
                    <p>Casa con diseño moderno, así como tecnología inteligente y amueblada</p>
                    <p class="precio">$2,000,000.00</p>

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

                    <a class="boton boton-amarillo-block" href="anuncio.php">Ver Propiedad</a>
                </div>
            </div>

            <div class="anuncio">
                <img src="build/img/anuncio3.jpg" alt="Imagen Propiedad Anuncio">

                <div class="contenido-anuncio">
                    <h3>Casa con Alberca</h3>
                    <p>Casa con alberca y acabados de lujo en la ciudad, excelente oportunidad</p>
                    <p class="precio">$3,000,000.00</p>

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

                    <a class="boton boton-amarillo-block" href="anuncio.php">Ver Propiedad</a>
                </div>
            </div>
        </div>

        <div class="alinear-derecha">
            <a href="anuncios.php" class="boton boton-verde">Ver Todas</a>
        </div>
    </section>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad.</p>
        <a href="contacto.php" class=" boton boton-amarillo">Contactános</a>
    </section>

    <div class="contenedor seccion seccion-inferior">
        <section class="blog">
            <h3>Nuestro Blog</h3>

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
        </section>

        <section class="testimoniales">
            <h3>Testimoniales</h3>

            <div class="testimonial">
                <blockquote>El personal se comportó de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.</blockquote>
                <p>- Andrés Medina López</p>
            </div>
        </section>
    </div>

<?php 
    incluirTemplate('footer');
?>
