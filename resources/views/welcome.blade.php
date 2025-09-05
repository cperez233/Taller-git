<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biografía - Cristian Perez</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white font-sans">

    <!-- Contenedor principal -->
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="text-center space-y-10">

            <!-- Nombre -->
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-wide bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-600 animate-pulse">
                Cristian Perez
            </h1>

            <!-- Subtítulo -->
            <p class="text-xl md:text-2xl text-gray-300">
                Bienvenido a mi biografía
            </p>

            <!-- Botones organizados -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-2xl mx-auto">
                <a href="{{ url('/ninez') }}" 
                   class="px-6 py-4 rounded-xl bg-blue-500 text-white font-semibold hover:bg-blue-600 transition transform hover:scale-105">
                   🎮 Niñez
                </a>

                <a href="{{ url('/adolescencia') }}" 
                   class="px-6 py-4 rounded-xl bg-purple-500 text-white font-semibold hover:bg-purple-600 transition transform hover:scale-105">
                   🎭 Adolescencia
                </a>

                <a href="{{ url('/adultez') }}" 
                   class="px-6 py-4 rounded-xl bg-pink-500 text-white font-semibold hover:bg-pink-600 transition transform hover:scale-105">
                   🌍 Actualidad
                </a>
            </div>

            <!-- Decoración -->
            <div class="flex justify-center space-x-3">
                <div class="w-3 h-3 rounded-full bg-blue-400 animate-bounce"></div>
                <div class="w-3 h-3 rounded-full bg-purple-500 animate-bounce delay-150"></div>
                <div class="w-3 h-3 rounded-full bg-pink-500 animate-bounce delay-300"></div>
            </div>
        </div>
    </div>

</body>
</html>
