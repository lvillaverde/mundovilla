<? 
// Nombre del archivo de con el cual queremos que se guarde la base de datos 
$filename = "fichero.sql";  
// Cabeceras para forzar al navegador a guardar el archivo 
header("Pragma: no-cache"); 
header("Expires: 0"); 
header("Content-Transfer-Encoding: binary"); 
header("Content-type: application/force-download"); 
header("Content-Disposition: attachment; filename=$filename"); 
 
$usuario="development";  // Usuario de la base de datos, un ejemplo podria ser 'root' 
$passwd="development";  // Contraseña asignada al usuario 
$bd="villas";  // Nombre de la Base de Datos a exportar 
 
// Funciones para exportar la base de datos 
$executa = "/mysql/bin/mysqldump -u $usuario --password=$passwd --opt $bd"; 
system($executa, $resultado); 
 
// Comprobar si se ha realizado bien, si no es así, mostrará un mensaje de error 
if ($resultado) { echo "<H1>Error ejecutando comando: $executa</H1>\n"; } 
 
?> 