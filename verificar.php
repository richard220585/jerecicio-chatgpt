<?php
include('conecion.php');

if (isset($_POST['cedula'])) {
    $cedula = $_POST['cedula'];
    $sql = "SELECT cedula FROM registro WHERE cedula = '$cedula'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo 'La cédula ya está registrada.';
    } else {
        echo '';
    }
}

$conn->close();
?>

