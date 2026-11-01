<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Tickets | Frontend UI</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen p-8">
    <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Módulo de Registro de Entidad</h1>
        
        <!-- Formulario UI que coincide con los campos del ORM -->
        <form action="#" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Título / Nombre:</label>
                <input type="text" name="titulo" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Ingrese el título..." required>
            </div>

            <div>
                <label class="block text-sm font-medium text-gray-700">Descripción / Detalle:</label>
                <textarea name="descripcion" rows="3" class="mt-1 block w-full border border-gray-300 rounded-md p-2 shadow-sm focus:ring-blue-500 focus:border-blue-500" placeholder="Escriba el detalle..." required></textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition duration-150">
                    Guardar Registro
                </button>
            </div>
        </form>
    </div>
</body>
</html>