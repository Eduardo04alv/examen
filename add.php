<html>
    <form method="post">
        id : <input type="text" name="id"><br></br>
        Nombre : <input type="text" name="Nombre"><br></br>
        Apellido : <input type="text" name="Apellido"><br></br>
        Cedula : <input type="text" name="Cedula"><br></br>
        Edad : <input type="text" name="Edad"><br></br>
        Motivo : <input type="text" name="Motivo"><br></br>
        Fecha : <input type="date" name="Fecha"><br></br>
        <button type="submit">guardar</button>
    </form>
</html>
<?php 
include('objetos.php');
$x = new x;
$ruta = "datos/.json";
if($_POST){
$x->id = $_POST['id'];
$x->Nombre = $_POST['Nombre'];
$x->Apellido = $_POST['Apellido'];
$x->Cedula = $_POST['Cedula'];
$x->Edad = $_POST['Edad'];
$x->Motivo = $_POST['Motivo'];
$x->Fecha = $_POST['Fecha'];
if(file_exists($ruta)){
    $datos = json_decode(file_get_contents($ruta));
}else{
    $datos = [];
}
$datos = $x;
file_put_contents($ruta, json_encode($datos));

}
?>