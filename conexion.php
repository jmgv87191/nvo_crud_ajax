<?php

    $servername = "localhost";
    $user = "root";
    $password = "";
    $database = "";

    $conn = mysqli_connect( $servername, $user, $password, $database );

    if(!$conn){
        die( "conexion sin exito". mysqli_connect_error() );
    }

?>