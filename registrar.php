<?php
$conexion = mysqli_connect ("localhost", "u636579772_andres", "Desarrollo1993**/", "u636579772_registros");


$nombres_d = $_POST["nombres_d"];
$apellidos_d = $_POST["apellidos_d"];
$telefono_d = $_POST["telefono_d"];
$correo_d = $_POST["correo_d"];
$pais_d = $_POST["pais_d"];
$fecha_reg = $_POST["fecha_reg"];

$registrarSQL = "INSERT INTO datos(nombres_d, apellidos_d, telefono_d, correo_d, pais_d, fecha_reg) VALUES ('$nombres_d', '$apellidos_d', '$telefono_d', '$correo_d', '$pais_d', '$fecha_reg')";
$resultado = mysqli_query($conexion, $registrarSQL);
if ($resultado) {
    echo "<script>alert('Se han enviado tus datos'); window.location='index.php'</script>";

} else {
    printf("Errormessage: %s\n", mysqli_error($conexion));
}