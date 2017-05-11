<?php
    include "../FabricaConexion.php";

    $fabrica = new FabricaConexion("localhost","root","","exportaciones");
    $conn = $fabrica->CrearConexion();

    $nom = $_POST["nombre"];
    $total = $_POST["total"];
    $ano = $_POST["ano"];

    $sql = "insert into productos " .
            "(nombre,totalusd,ano)" . 
            "values ('$nom',$total, $ano)";

    $resultado = $conn->query($sql);

    if($resultado) {
        echo "Insercion Exitosa!";
        echo "<a href='../../index.php'>Volver</a>";
        exit;
    }

    echo "Fallo insercion <br>";
    echo "Error: " . $conn->error . "<br>";
    echo "<a href='../../index.php'>Volver</a>";
?>