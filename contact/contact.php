<?php 
$validacion1=false; $validacion2=false; $validacion3=false; $correoenviado=false;

if (isset($_POST['nombre'])){
	//Comprobamos que el nombre no este en blanco
	if ($_POST['nombre']=='') $validacion1=true;
	//Comprobamos que el correo no este en blanco
	if ($_POST['correo']=='') $validacion2=true;
	//Comprobamos que el mensaje no este en blanco
	if ($_POST['mensaje']=='') $validacion3=true;
	//Si cumple las tres condiciones enviamos el formulario
	if ($validacion1==false && $validacion2==false && $validacion3==false){
		$correoenviado=true;
		//Descomentar esta linea para enviar el mail
		//mail ('destinatario','titulo','mensaje','cabeceras');
		}	
}
?>