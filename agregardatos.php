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
    // Conexión a la base de datos
    $servername = "localhost"; // Cambia si tu base de datos está en otro servidor
    $username = "root"; // Cambia si tienes un usuario diferente
    $password = ""; // Cambia si tienes una contraseña diferente
    $database = "plataformacursos"; // Cambia si tienes otro nombre de base de datos

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Si el formulario se ha enviado (verificando si se usan los métodos POST)
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibir datos del 
		$ID_Usuario= $_POST['ID_Usuario'];
        $Nombre = $_POST['nombre'];
        $Apellidos = $_POST['apellidos'];
        $Correo_Electronico = $_POST['correo_electronico'];
        $Usuario = $_POST['usuario'];
        $Contrasena = $_POST['contrasena'];
        $Rol_Usuarios = $_POST['Rol_Usuarios'];
		
		
// Consulta SQL para insertar datos Y Consultar usuarios
		$sql = "INSERT INTO usuarios (ID_Usuario, nombre, apellidos, correo_electronico, usuario, contrasena, Rol_Usuarios)VALUES ('$ID_Usuario', '$Nombre', '$Apellidos', '$Correo_Electronico', '$Usuario', '$Contrasena', '$Rol_Usuarios')";
		
		//$sql = "SELECT *FROM usuarios (rol_usuarios)VALUES ('$Rol_Usuarios')";

        // Ejecutar la consulta
        if ($conn->query($sql) === TRUE) {
            echo "Registro exitoso.";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Cerrar la conexión
    $conn->close();
    ?>
</body>
</html>
