<?php


if(isset($_POST['agregar-admin'])) {
    $usuario = $_POST['usuario'];
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

    $opciones = array(
        'cost' => 10
    );

    $password_hashed = password_hash($password_hashed, PASSWORD_BCRYPT, $opciones);

    echo $password_hashed;
}