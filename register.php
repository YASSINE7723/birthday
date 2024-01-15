<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $nombre = $_POST["nombre"];

    
    $host = 'e-srv-lamp.univ-lemans.fr';
    $user = 'e2304944';
    $database = 'e2304944';
    $password = 'Czt922oo';
    $connection= new mysqli($host,$user,$password,$database);

    if ($connection->connect_error) {
        die("Connection failed: " . $connection->connect_error);
    }

    $sql = "INSERT INTO birthdayguests (Nom, Nombre) VALUES ('$nom', '$nombre')";

    if ($connection->query($sql) === TRUE) {
        echo "Enregistrement réussi! <br> veulliez retourner vers la page précedente et l'actualiser pour voir les modifications";
    } else {
        echo "Erreur: " . $sql . "<br>" . $connection->error;
    }

    $connection->close();
}
?>
