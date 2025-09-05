<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adolescencia - Cristian Perez</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white font-sans">

    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-4xl bg-gray-900 rounded-2xl shadow-2xl p-10 text-center space-y-10 border border-gray-700">
            
            <!-- Título -->
            <h1 class="text-4xl md:text-5xl font-extrabold text-purple-400">
                Mi Adolescencia
            </h1>

            <!-- Fotos con contraste -->
            <div class="flex flex-col md:flex-row justify-center items-center gap-6">
                <div>
                    <img src="{{ asset('images/adolescencia_gordo.jpg') }}" 
                         alt="Cristian Perez adolescente gordo" 
                         class="w-48 h-48 object-cover rounded-xl shadow-md border-4 border-red-500">
                    <p class="mt-2 text-sm text-gray-400">Yo en mis épocas de gordo</p>
                </div>

                <div>
                    <img src="{{ asset('images/adolescencia_flaco.jpg') }}" 
                         alt="Cristian Perez adolescente flaco" 
                         class="w-48 h-48 object-cover rounded-xl shadow-md border-4 border-green-500">
                    <p class="mt-2 text-sm text-gray-400">Cuando empecé a cambiar físicamente</p>
                </div>
            </div>

            <!-- Texto -->
            <p class="text-lg text-gray-300 leading-relaxed text-justify">
                Mi adolescencia estuvo aún más marcada por el computador y los videojuegos. Me volví bastante sedentario, 
                y eso trajo consigo muchas dificultades: recibí bullying en el colegio por ser gordo, y aunque lo superé, 
                me dejó traumas que me afectaron durante varios años.
            </p>

            <p class="text-lg text-gray-300 leading-relaxed text-justify">
                A pesar de todo, pude salir adelante gracias a la poca gente que pude considerar amigos, esas personas 
                que realmente estuvieron ahí para mí. Y siempre, sin importar qué pasara, los videojuegos y la tecnología 
                fueron mi lugar seguro, ese refugio donde podía ser yo mismo sin miedo a las críticas.
            </p>

            <!-- Botones navegación -->
<div class="mt-10 flex justify-center">
    <div class="grid grid-cols-3 gap-6">
        <a href="{{ url('/ninez') }}" 
           class="px-6 py-3 rounded-xl bg-blue-500 text-white font-semibold hover:bg-blue-600 transition transform hover:scale-105">
           ⬅ Niñez
        </a>

        <a href="{{ url('/') }}" 
           class="px-6 py-3 rounded-xl bg-gray-700 text-white font-semibold hover:bg-gray-800 transition transform hover:scale-105">
           🏠 Inicio
        </a>

        <a href="{{ url('/adultez') }}" 
           class="px-6 py-3 rounded-xl bg-pink-500 text-white font-semibold hover:bg-pink-600 transition transform hover:scale-105">
           ➡ Actualidad
        </a>
    </div>
</div>

        </div>
    </div>

</body>
</html>
