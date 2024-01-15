<?php
$host = 'e-srv-lamp.univ-lemans.fr';
$user = 'e2304944';
$database = 'e2304944';
$password = 'Czt922oo';

$connection = new mysqli($host, $user, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

$sql = "SELECT SUM(Nombre) as total FROM birthdayguests";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "" . $row["total"] ;
    }
} else {
    echo "0";
}

$selectQuery = "SELECT * FROM birthdayguests";
$result = $connection->query($selectQuery);

while ($row = $result->fetch_assoc()) {
    echo "<br>";
    echo "" . $row["Nom"] . " avec " . $row["Nombre"]."      personnes" ;
    
}

$connection->close();
?>
