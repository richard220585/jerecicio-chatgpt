<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Formulario Principal</title>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-3xl font-bold text-blue-500 text-center mb-6 animate-bounce">Mi primer ejercicio</h1>
        <h2 class="text-xl font-semibold text-gray-700 text-center mb-4">Llene el Formulario</h2>

        <form action="registro.php" method="post" class="space-y-4">
            <div>
                <label for="cedula" class="block text-gray-600">Cédula:</label>
                <input type="text" name="cedula" id="cedula" class="w-full p-2 border border-gray-300 rounded" required>
                <span id="cedula-error" class="text-red-500 text-sm"></span>
            </div>

            <div>
                <label for="nombre" class="block text-gray-600">Nombre:</label>
                <input type="text" name="nombre" id="nombre" class="w-full p-2 border border-gray-300 rounded" required>
            </div>

            <div>
                <label for="apellido" class="block text-gray-600">Apellido:</label>
                <input type="text" name="apellido" id="apellido" class="w-full p-2 border border-gray-300 rounded" required>
            </div>

            <div>
                <label for="edad" class="block text-gray-600">Edad:</label>
                <input type="text" name="edad" id="edad" class="w-full p-2 border border-gray-300 rounded" required>
            </div>

            <div>
                <label for="sexo" class="block text-gray-600">Sexo:</label>
                <select name="sexo" id="sexo" class="w-full p-2 border border-gray-300 rounded" required>
                    <option value="">Seleccione</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>

            <div>
                <label for="direccion" class="block text-gray-600">Dirección:</label>
                <input type="text" name="direccion" id="direccion" class="w-full p-2 border border-gray-300 rounded" required>
            </div>

            <div class="flex justify-between mt-4">
                <input type="reset" value="Limpiar" class="bg-gray-300 text-gray-700 px-4 py-2 rounded hover:bg-gray-400">
                <input type="submit" value="Guardar" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                <a href="registro.php" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">Informe</a>
                <a href="buscar.php" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Buscar</a>
            </div>
        </form>
    </div>
</body>
</html>



