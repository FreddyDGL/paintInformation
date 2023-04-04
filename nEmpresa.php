<?php include("template/header.php"); ?>

<h1>Paint Information</h1>
<h5>Registra tu Empresa y Lleva la Administracion de esta de una Manera mas Facil, Rapida, Segura y Eficaz
</h5>

<div class="card">
    <div class="card-header">
        Datos de la Empresa
    </div>
    <div class="card-body">
        <form action="index.php" method="POST">
            <div class="form-group">
                <label>Nombre de la Empresa</label>
                <input type="text" class="form-control" name="" placeholder="Nombre de la Empresa">
            </div>
            <br>
            <div class="form-group">
                <label>Direccion</label>
                <input type="text" class="form-control" name="" placeholder="Direccion">
            </div>
            <br>
            <div class="form-group">
                <label>Telefono Empresarial (opcional)</label>
                <input type="text" class="form-control" name="" placeholder="Telefono Empresarial">
            </div>
            <br>
            <div class="form-group">
                <label>Descipcion de la Empresa</label>
                <input type="text" class="form-control" name="" placeholder="Descipcion de la Empresa">
            </div>
            <br>
            <h3>DATOS DEL ADMINISTRADOR</h3>
            <br>
            <div class="form-group">
                <label>Nombre(s)</label>
                <input type="text" class="form-control" name="" placeholder="Nombre(s)">
            </div>
            <br>
            <div class="form-group">
                <label>Apellido Paterno</label>
                <input type="text" class="form-control" name="" placeholder="Apellido Paterno">
            </div>
            <br>
            <div class="form-group">
                <label>Apellido Materno</label>
                <input type="text" class="form-control" name="" placeholder="Apellido Materno">
            </div>
            <br>
            <div class="form-group">
                <label>Telefono Personal (Opcional)</label>
                <input type="text" class="form-control" name="" placeholder="Telefono Personal">
            </div>
            
            <br>
            <div class="form-group">
                <label>Ingresa el Nombre de Usuario del Administrador</label>
                <p class="h6">Ten en cuenta que con este nombre iniciara sesion</p>
                <input type="text" class="form-control" name="" placeholder="Nombre de Usuario del Administrador">
            </div>
            <br>
            <div class="form-group">
                <label>Ingresa tu Correo</label>
                <input type="text" class="form-control" name="" placeholder="Ingresa tu Correo">
            </div>
            <br>
            <div class="form-group">
                <label>Contraseña</label>
                <input type="text" class="form-control" name="" placeholder="Contraseña">
            </div>
            <br>
            <button id="" name="entrar" onClick="confirmRespuesta()">Entrar</button>
        </form>
    </div>
</div>
<script>
    function confirmRespuesta() {
        var respuesta = confirm("¿Es seguro de que tus datos son los correctos?");

        if (respuesta == true) {
            alert("SUS DATOS SE HAN SUBIDO CORRECTAMENTE")
            return true;
        }
        else {
            return false;
        }
    }
</script>
<?php include("template/footer.php"); ?>