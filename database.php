<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
</body>
</html>

<?php

// Configuración de la base de datos
$host = 'enlacesplataforma';  // Cambia por el nombre de tu servidor
$dbname = 'plataformacursos';  // Cambia por el nombre de tu base de datos
$user = 'root';  // Cambia por el nombre de usuario de tu base de datos
$password = '';  // Cambia por la contraseña de tu base de datos

try {
   // Crear una instancia de PDO para conectarse a la base de datos
	$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";
	$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Modo de error de PDO
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Modo de obtención predeterminado
    PDO::ATTR_EMULATE_PREPARES => false, // Usar consultas preparadas nativas
];
	$pdo = new PDO($dsn, $user, $password, $options);


    // Si la conexión es exitosa, puedes agregar aquí más lógica si lo necesitas

} catch (PDOException $e) {
    // Manejo de errores de conexión a la base de datos
    die('Error de conexión a la base de datos: ' . $e->getMessage());
}

?>
