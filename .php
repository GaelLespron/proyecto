<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"] ?? "";
    $email = $_POST["email"] ?? "";
    $edad = $_POST["edad"] ?? "";
    $genero = $_POST["genero"] ?? "";
    $mensaje = $_POST["mensaje"] ?? "";

    echo json_encode([
        "nombre" => $nombre,
        "email" => $email,
        "edad" => $edad,
        "genero" => $genero,
        "mensaje" => $mensaje
    ]);
}
?>