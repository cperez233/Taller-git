<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niñez - Cristian Perez</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-amber-200 via-yellow-100 to-orange-200 text-gray-900 font-sans">

    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-3xl bg-white rounded-2xl shadow-lg p-8 text-center space-y-8">
            
            <!-- Título -->
            <h1 class="text-4xl md:text-5xl font-extrabold text-amber-600">
                Mi Niñez
            </h1>

            <!-- Foto -->
            <div class="flex justify-center">
                <img src="{{ asset('images/ninez.jpg') }}" 
                     alt="Cristian Perez de niño" 
                     class="w-48 h-48 object-cover rounded-full shadow-md border-4 border-amber-400">
            </div>

            <!-- Texto -->
            <p class="text-lg text-gray-700 leading-relaxed text-justify">
                En mi niñez fui un pelado lleno de curiosidad, siempre con ganas de explorar, aprender y meterme en 
                problemas de esos que hacen reír después. Desde pequeño me encantaba jugar videojuegos, pasar horas 
                pegado al computador y descubrir cómo funcionaban las cosas. Eso fue lo que más tarde me llevó a 
                decantarme por la Ingeniería de Sistemas, porque además siempre fui piloso para el estudio y me 
                gustaba entender lo que otros no podían.
            </p>

            <p class="text-lg text-gray-700 leading-relaxed text-justify">
                Recuerdo que podía estar toda la tarde jugando, pero también era responsable con el colegio, lo que 
                me permitió crecer con un balance entre la diversión y el aprendizaje. Esa mezcla de curiosidad, 
                amor por la tecnología y disciplina en el estudio marcó mi camino desde bien pequeño.
            </p>

            <!-- Botones navegación -->
<div class="mt-10 flex justify-center">
    <div class="grid grid-cols-2 gap-6">
        <a href="{{ url('/') }}" 
           class="px-6 py-3 rounded-xl bg-gray-700 text-white font-semibold hover:bg-gray-800 transition transform hover:scale-105">
           🏠 Inicio
        </a>

        <a href="{{ url('/adolescencia') }}" 
           class="px-6 py-3 rounded-xl bg-purple-500 text-white font-semibold hover:bg-purple-600 transition transform hover:scale-105">
           ➡ Adolescencia
        </a>
    </div>
</div>

        </div>
    </div>

</body>
</html>
