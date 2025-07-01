<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="index.css">
    <title>Buscar Usuario</title>
    <style>
        body {
            background-color: #87CEFA;
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            margin: 100px auto;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
        }
        .btn {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Buscar Usuario</h2>
        <form action="buscar.php" method="post">
            <label for="cedula">Ingrese la Cédula:</label>
            <input type="text" name="cedula" required><br>
            <div class="buttons">
                <input type="submit" value="Buscar">
                <a href="index.php" class="btn">Volver</a>
            </div>
        </form>
    </div>

    <?php
    include('conecion.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $cedula = $_POST['cedula'];
        $sql = "SELECT * FROM registro WHERE cedula = '$cedula'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<div class='form-container'>";
            echo "<h2>Datos del Usuario</h2>";
            echo "<p>Cédula: " . $row['cedula'] . "</p>";
            echo "<p>Nombre: " . $row['nombre'] . "</p>";
            echo "<p>Apellido: " . $row['apellido'] . "</p>";
            echo "<p>Edad: " . $row['edad'] . "</p>";
            echo "<p>Sexo: " . $row['sexo'] . "</p>";
            echo "<p>Dirección: " . $row['direccion'] . "</p>";
            echo "<button onclick='window.print()'>Imprimir</button>";
            echo "</div>";
        } else {
            echo "<div class='form-container'><p>Usuario no registrado.</p></div>";
        }
    }
    $conn->close();
    ?>
</body>
</html>
