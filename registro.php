<?php
include('conecion.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $sexo = $_POST['sexo'];
    $direccion = $_POST['direccion'];

    // Verificar si la cédula ya existe
    $check_sql = "SELECT cedula FROM registro WHERE cedula = '$cedula'";
    $check_result = $conn->query($check_sql);

    if ($check_result->num_rows > 0) {
        echo "<script>alert('La cédula ya está registrada.'); window.location.href = 'index.php';</script>";
    } else {
        // Insertar los datos
        $sql = "INSERT INTO registro (cedula, nombre, apellido, edad, sexo, direccion) VALUES ('$cedula', '$nombre', '$apellido', '$edad', '$sexo', '$direccion')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Registro guardado exitosamente.'); window.location.href = 'index.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Mostrar informe
$sql = "SELECT * FROM registro";
$result = $conn->query($sql);

echo "<h1>Informe de Registros</h1>";

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Cédula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Dirección</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['cedula']}</td>
                <td>{$row['nombre']}</td>
                <td>{$row['apellido']}</td>
                <td>{$row['edad']}</td>
                <td>{$row['sexo']}</td>
                <td>{$row['direccion']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No hay registros.";
}

$conn->close();

echo '<br><br><a href="index.php">Volver al Formulario</a> | <button onclick="window.print()">Imprimir</button>';
?>

