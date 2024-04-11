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

// Iniciar la sesión
session_start();

// Incluir la conexión a la base de datos
require 'database.php'; // Asegúrate de tener un archivo que incluya la conexión a la base de datos


// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Verificar si los datos del formulario están presentes en $_GET
    if (isset($_GET['Correo_Electronico']) && isset($_GET['Contrasena'])) {
        // Obtener los datos del formulario
        $Correo_Electronico = $_GET['Correo_Electronico'];
        $Contrasena = $_GET['Contrasena'];

        // Consulta a la base de datos para obtener el usuario por correo electrónico
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE Correo_Electronico = ?");
        $stmt->execute([$Correo_Electronico]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC); // Obtener el resultado como array asociativo

        // Verificar si el usuario existe y si la contraseña es correcta
        if ($user && password_verify($Contrasena, $user['Contrasena'])) {
            // Credenciales correctas, iniciar sesión
            $_SESSION['Correo_Electronico'] = $user['Correo_Electronico']; // Utiliza el valor correcto de `$user`

            // Redirigir al usuario a INICIO.html
            header('Location: INICIO.html');
            exit;
        } else {
            // Credenciales incorrectas
            echo 'Correo electrónico o contraseña incorrectos.';
        }
    } /*else {
        // Manejar el caso en que los datos no están presentes
        echo 'Faltan datos en el formulario.';
    }*/
}
