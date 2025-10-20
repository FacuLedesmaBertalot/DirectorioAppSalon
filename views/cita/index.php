<h1 class="nombre-pagina">Crear Nueva Cita</h1>
<p class="descripcion-pagina">Elige tus Servicios y Coloca Tus Datos</p>

<div id="app">
    <div id="paso-1" class="seccion">
        <h2>Servicios</h2>
        <p>Elige tus servicios a Continuación</p>
        <div id="servicios" class="listado-servicios"></div>

    </div>

    <div id="paso-2" class="seccion">
        <h2>Tus Datos y Cita</h2>
        <p>Coloca tus Datos y Fecha de tu Cita</p>

        <form class="formulario">
            <div class="campo">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="Tu Nombre" value="<?php echo $nombre; ?>" disabled>
            </div>

            <div class="campo">
                <label for="fecha">Fecha</label>
                <input type="date" name="fecha" id="fecha">
            </div>

            <div class="campo">
                <label for="hora">Hora</label>
                <input type="time" name="hora" id="hora">
            </div>


        </form>

    </div>

    <div id="paso-3" class="seccion">
        <h2>Resumen</h2>
        <p>Verifica que la Información sea Correcta</p>

    </div>
</div>