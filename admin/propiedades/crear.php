<?php
require '../../includes/funciones.php'; 

incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Titulo Página</h1>
        <a href="/admin/propiedades/index.php" class="boton boton-verde">Volver</a>

        <form class="formulario">
            <fieldset>
                <legend>Informacion general</legend>
                
                <label for="titulo"></label>
                <input type="text" id="titulo" placeholder="Titulo propiedad">

                <label for="precio"></label>
                <input type="number" id="precio" placeholder="Precio propiedad">

                <label for="imagen"></label>
                <input type="file" id="imagen" accept="image/jpeg">
                
                <label for="descripcion">Descripcion</label>
                <textarea name="" id="descripcion" cols="30" rows="10"></textarea>
            </fieldset>
            <fieldset>
                <legend>Informacion de la propiedad</legend>

                <label for="habitaciones">Habitaciones</label>
                <input type="number" id="habitaciones" placeholder="ej: 3" min="1" max="9">

                
                <label for="wc">Baños</label>
                <input type="number" id="wc" placeholder="ej: 3" min="1" max="9">

                
                <label for="estacionamiento">Estacionamiento</label>
                <input type="number" id="estacionamiento" placeholder="ej: 3" min="1" max="9">
            </fieldset>
            <fieldset>
                <legend>Vendedor</legend>
                        
                <select>
                    <option value="1">Ignacio</option>
                    <option value="2">Juan</option>
                </select>

                
            </fieldset>
            <input type="submit" class="boton  boton-verde" value="Crear Propiedad">
        </form>
    </main>

<?php incluirTemplate('footer'); ?>