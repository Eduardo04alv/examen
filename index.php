<html>
    <h1>este es el examen de eduardo</h1>
    <a href="add.php">agregar</a>
    <h1></h1>
    <table border="1" class = "table">
        <thead>
            <th>id</th>
            <th>nombre</th>
            <th>apellido</th>
            <th>edad</th>
            <th>cedula</th>
            <th>motivo</th>
            <th>fecha</th>
        </thead>
        <tbody>
            <?php 
            include('objetos.php');
            $x = new x;
            $ruta = "datos/.json";
            if(file_exists($ruta)){
                $x = json_decode(file_get_contents($ruta));
                foreach($x as $datos){
                    echo"<tr>";
                    echo"<td>{$x->id}</td>";
                    echo"<td>{$x->Nombre}</td>";
                    echo"<td>{$x->Apellido}</td>";
                    echo"<td>{$x->Edad}</td>";
                    echo"<td>{$x->Cedula}</td>";
                    echo"<td>{$x->Motivo}</td>";
                    echo"<td>{$x->Fecha}</td>";
                    echo"</tr>";
                }
            }
            ?>
        </tbody>
    </table>
</html>