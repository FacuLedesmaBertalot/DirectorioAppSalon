<h1 class="nombre-pagina">Recuperar Password</h1>
<p class="descripcion-pagina">Coloca Tu Nuevo Password a Continuación:</p>

<?php 
    include_once __DIR__ . "/../templates/alertas.php";
?>

<?php if($error) return; ?>

<form class="formulario" method="POST">
    <div class="campo">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" placeholder="Tu Nuevo Password">
    </div>
    <input type="submit" class="boton" value="Guardar Nuevo Password">

</form>

<div class="acciones">
    <a href="/">¿Ya Tienes Cuenta? Iniciar Sesión</a>
    <a href="/crear-cuenta">¿Aún No Tienes Cuenta? Obtener Una</a>
</div>