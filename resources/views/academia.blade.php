<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia - Cristian Perez</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white font-sans">

    <!-- Contenedor principal -->
    <div class="min-h-screen flex flex-col items-center px-6 py-12">

        <!-- Título -->
        <h1 class="text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-600 mb-12 text-center">
            📚 Academia
        </h1>

        <!-- Línea de tiempo -->
        <div class="relative max-w-3xl w-full">

            <!-- Línea central -->
            <div class="absolute left-1/2 transform -translate-x-1/2 h-full border-l-4 border-purple-600"></div>

            <!-- Colegio -->
            <div class="mb-12 flex items-center w-full">
                <div class="w-1/2 pr-8 text-right">
                    <h2 class="text-2xl font-bold text-pink-400">ASPAEN Colegio El Rosario</h2>
                    <p class="text-gray-300 mt-3 leading-relaxed">
                        Estudié toda mi vida en el <span class="font-semibold">ASPAEN Colegio El Rosario</span>, 
                        desde preescolar hasta grado 11. Allí formé mis valores, disciplina y bases académicas sólidas.
                    </p>
                </div>
                <div class="z-10">
                    <div class="w-6 h-6 rounded-full bg-pink-500 border-4 border-gray-900"></div>
                </div>
                <div class="w-1/2"></div>
            </div>

        <!-- Botón de regreso -->
        <div class="mt-10">
            <a href="{{ url('/') }}" 
               class="px-6 py-3 rounded-xl bg-indigo-500 text-white font-semibold hover:bg-indigo-600 transition transform hover:scale-105">
               🏠 Volver al inicio
            </a>
        </div>
    </div>

</body>
</html>
