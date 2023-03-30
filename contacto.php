<?php 
    require 'includes/app.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Contacto</h1>

        <img src="build/img/destacada3.jpg" alt="Imagen Destacada">

        <h2>Llene el formulario de Contacto</h2>

        <form class="formulario">
            <fieldset>
                <legend>Información Personal</legend>

                <label for="nombre">Nombre</label>
                <input type="text" placeholder="Tu Nombre" id="nombre">

                <label for="email">Correo</label>
                <input type="email" placeholder="Tu Email" id="email">

                <label for="telefono">Telefono</label>
                <input type="tel" placeholder="Tu teléfono" id="telefono">

                <label for="mensaje">Mensaje:</label>
                <textarea name="mensaje"></textarea>
            </fieldset>

            <fieldset>
                <legend>Información sobre la Propiedad</legend>

                <label for="opciones">Vende o Compra:</label>
                <select id="opciones">
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                <label for="presupuesto">Presupuesto o Precio:</label>
                <input type="number" placeholder="Tu presupuesto o precio" id="presupuesto">
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>
                
                <p>Como desea ser contactado</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input name="contacto" type="radio" value="telefono" id="contactar-telefono">

                    <label for="contactar-email">Correo</label>
                    <input name="contacto" type="radio" value="email" id="contactar-email">
                </div>

                <p>Si eligió teléfono, elija la fecha y la hora para ser contactado</p>

                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha">

                <label for="hora">Hora:</label>
                <input type="time" id="hora" min="09:00" max="18:00">

            </fieldset>

            <input type="submit" value="Enviar" class="boton boton-verde">
        </form>
    </main>

<?php 
    incluirTemplate('footer');
?>