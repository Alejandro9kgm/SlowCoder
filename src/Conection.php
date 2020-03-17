<?php
namespace App;

final class Conection {
    public function linking ($servidor, $usuario, $password, $basededatos){
    
        $conexion = mysqli_connect($servidor, $usuario, $password, $basededatos);
        if (!$conexion) {
        die("Connection failed: " . mysqli_connect_error());
        }
        if($conexion){    
            $result = mysqli_query($conexion, "SELECT ID FROM listapersonas WHERE Estado= 'vivo'");
            $datos = array();
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    $datos [] = $row;
                }
                    $rand_id=array_rand($datos);
                    $mata= mysqli_query($conexion, "UPDATE listapersonas SET Estado = 'muerto' Where ID =$rand_id");
            } else {
                echo "0 results";
            }
            return 'connected';
        }
        mysqli_close($conexion);
    }   

}


/*
?>
<html>
 <head>
 </head>
 <body>
 <h1>PHP connect to MySQL</h1>

<?php
//Step2
$query = "SELECT * FROM vivos";
mysqli_query($conexion, $query) or die('Error querying database.');

//Step3
$result = mysqli_query($conexion, $query);
$row = mysqli_fetch_array($result);

while ($row = mysqli_fetch_array($result)) {
 echo $row['ID'] . ' ' . $row['Nombre'] . ': ' . $row['Apellido'] ."\n";
}
//Step 4
mysqli_close($db);
?>

</body>
</html>