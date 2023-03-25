<?php include("../template/header.php"); ?>
<?php
$txtID=(isset($_POST['txtID']))?$_POST['txtID']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtDescription=(isset($_POST['txtDescription']))?$_POST['txtDescription']:"";
$txtUnidades=(isset($_POST['txtUnidades']))?$_POST['txtUnidades']:"";
$txtPrecioU=(isset($_POST['txtPrecioU']))?$_POST['txtPrecioU']:"";
$imagen=(isset($_FILES['imagen']['name']))?$_FILES['imagen']['name']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";

echo $txtID."<br/>";
echo $txtNombre."<br>";
echo $txtDescription."<br>";
echo $txtUnidades."<br>";
echo $txtPrecioU."<br>";
echo $imagen."<br>";
echo $accion."<br>";

switch($accion){
    case "agregar":
        echo "agregar";
        break;
    case "modificar":
        echo "modificar";
        break;
    case "cancelar":
        echo "cancelar";
        break;
};
?>

<div class="col-md-5 ">
    <div class="card">
        <div class="card-header">
            Datos del Producto
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="txtID">ID</label>
                    <input type="text" class="form-control" name="txtID" placeholder="ID">
                </div>
                <div class="form-group">
                    <label for="txtNombre">Nombre</label>
                    <input type="text" class="form-control" name="txtNombre" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label for="txtDescription">Descripción</label>
                    <input type="text" class="form-control" name="txtDescription" placeholder="Descripción">
                </div>
                <div class="form-group">
                    <label for="txtUnidades">Unidades</label>
                    <input type="text" class="form-control" name="txtUnidades" placeholder="Unidades">
                </div>
                <div class="form-group">
                    <label for="txtPrecioU">Precio Unitario</label>
                    <input type="text" class="form-control" name="txtPrecioU" placeholder="Precio Unitario">
                </div>
                <div class="form-group">
                    <label for="imagen">Imagen</label>
                    <input type="file" class="form-control" name="imagen" placeholder="Precio Unitario">
                </div> 
                <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
                <button type="submit" name="accion" value="modificar" class="btn btn-warning">Modificar</button>
                <button type="submit" name="accion" value="cancelar" class="btn btn-danger">Cancelar</button>
            </form>
        </div>
    </div>

</div>
<div class="col-md-7">
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Unidades</th>
                <th>Precio Unitario</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>8</th>
                <th>Mazapan</th>
                <th>dulce de cacahuate</th>
                <th>20</th>
                <th>5</th>
                <th>Imagen.jpg</th>
                <th>Seleccionar | Borrar</th>
            </tr>
        </tbody>
    </table>
</div>
<?php include("../template/footer.php"); ?>