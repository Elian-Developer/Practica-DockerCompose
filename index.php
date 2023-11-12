<!DOCTYPE html>
<html>
<head>
    <title>Practica de Docker Compose</title>
</head>
<body>
    <h1>Esta es mi practica de Docker Compose<h1>
    <h2>Nombre: Elian Javier Baez Estepan</h2>
    <h3>Matricula: 2021-1945</h3>
    
    <?php
        $servername = getenv("MYSQL_HOST");
        $username = getenv("MYSQL_USER");
        $password = getenv("MYSQL_PASSWORD");
        $database = getenv("MYSQL_DATABASE");

        $conn = new mysqli($servername, $username, $password, $database);

        if ($conn->connect_error) {
            die("Conexión a MySQL fallida: " . $conn->connect_error);
        } else {
            echo "Conexión a MySQL exitosa!";
        }
    ?>
</body>
</html>