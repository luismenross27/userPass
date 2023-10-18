<?php
// Datos de conexión a la base de datos PostgreSQL
    $driver = 'pgsql';
    $host = getenv('app-855f4bb3-e2d9-4444-8e48-24249f7634ca-do-user-14712981-0.c.db.ondigitalocean.com');
    $port = getenv('25060');
    $dbname = getenv('db');
    $user =   getenv('db');
    $password = getenv('AVNS_238vNBoPAQLKbt7F2CY');

try {
    // Conexión a la base de datos
    $conn = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$password");

    $sql = "DROP TABLE IF EXISTS login";
    $conn->exec($sql);
    
    // Consulta SQL para crear una tabla
    $sql = "CREATE TABLE IF NOT EXISTS login (
    id serial PRIMARY KEY,
    correo varchar(123) NOT NULL,
    usuario varchar(100) NOT NULL,
    clave varchar(200) NOT NULL)";

    // Ejecutar la consulta SQL
    $conn->exec($sql);

    echo "Tabla creada con éxito.";
} catch (PDOException $e) {
    echo "Error al crear la tabla: " . $e->getMessage();
}

// Cerrar la conexión a la base de datos
$conn = null;
?>
