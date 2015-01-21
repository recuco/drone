<?php include 'php/header.php' ?>

<script type="text/javascript">
$(document).ready(function(){
    $("body").addClass("fondo_contacto");
});
</script>

<section class="img_inicio"></section>
<section class="img_inicio"></section>

<section class="contacto">
    <ul class="redes">
        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
    </ul>
    <form>
        <ul>
        <li>
            <i class="fa fa-user"></i>
            <input name="nombre" type="text" placeholder="Nombre">
        </li>
        <li>
            <i class="fa fa-envelope"></i>
            <input name="email" type="text" placeholder="Correo">
        </li>
        <li>
            <i class="fa fa-map-marker"></i>
            <input name="ciudad" type="text" placeholder="Ciudad">
        </li>
        <li>
            <i class="fa fa-phone"></i>
            <input name="telefono" type="text" placeholder="Teléfono">
        </li>
        <li>
            <i class="fa fa-comment"></i>
            <input name="comentarios" type="text" placeholder="Comentarios">
        </li>
        </ul>
        <button class="btn" type="submit" name="enviar"><i class="fa fa-paper-plane"></i> ENVIAR</button>
        <p>Llena el presente formulario y a la brevedad nos comunicaremos contigo, o si prefieres, llámanos <span>044 449 13 68 20</span></p>
    </form>    
</section>

<?php include 'php/footer.php' ?>