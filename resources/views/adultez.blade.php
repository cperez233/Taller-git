<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualidad - Cristian Perez</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-900 via-blue-800 to-cyan-900 text-white font-sans">

    <div class="min-h-screen flex items-center justify-center p-6">
        <div class="max-w-4xl bg-blue-950 rounded-2xl shadow-2xl p-10 text-center space-y-10 border border-blue-700">
            
            <!-- Título -->
            <h1 class="text-4xl md:text-5xl font-extrabold text-cyan-400">
                Mi Actualidad
            </h1>

            <!-- Foto -->
            <div class="flex justify-center">
                <div>
                    <img src="{{ asset('images/adultez.jpg') }}" 
                         alt="Cristian Perez adulto" 
                         class="w-64 h-64 object-cover rounded-2xl shadow-md border-4 border-cyan-400">
                    <p class="mt-2 text-sm text-gray-400">Un nuevo capítulo en mi vida ✨</p>
                </div>
            </div>

            <!-- Texto -->
            <p class="text-lg text-gray-300 leading-relaxed text-justify">
                Mi adultez ha sido un proceso de mucha reflexión y crecimiento personal. Aunque sigo cargando con 
                algunas cicatrices de lo vivido en mi niñez y adolescencia, he aprendido a sanar poco a poco, a ser 
                más fuerte y a valorar el camino recorrido.
            </p>

            <p class="text-lg text-gray-300 leading-relaxed text-justify">
                Empecé a entrenar, a salir más de casa y a conocer nuevas personas que han hecho mi vida más rica 
                y significativa. Aun así, nunca he dejado de lado mi pasión por los videojuegos y la tecnología, 
                que siempre han sido parte de mi identidad y mi refugio.
            </p>

            <p class="text-lg text-gray-300 leading-relaxed text-justify">
                Además, descubrí un nuevo amor: viajar 🌍✈️. Conocer diferentes lugares, culturas y experiencias 
                me ha permitido abrir la mente y crecer aún más como persona. Hoy me siento en un camino de 
                superación, disfrutando lo que soy y lo que quiero llegar a ser.
            </p>

            <p class="text-lg text-gray-300 leading-relaxed text-justify">
                Por último, debo decir que me siento muy agradecido de haber llegado hasta aquí, de haber superado 
                todas las adversidades y de haber llegado a ser alguien que hoy me siento orgulloso de ser. A pesar de todo lo que viví, sigo con ganas de seguir creciendo, aprendiendo y superando desafíos.

            </p>

            <!-- Botones navegación -->
<div class="mt-10 flex justify-center">
    <div class="grid grid-cols-2 gap-6">
        <a href="{{ url('/adolescencia') }}" 
           class="px-6 py-3 rounded-xl bg-purple-500 text-white font-semibold hover:bg-purple-600 transition transform hover:scale-105">
           ⬅ Adolescencia
        </a>

        <a href="{{ url('/') }}" 
           class="px-6 py-3 rounded-xl bg-gray-700 text-white font-semibold hover:bg-gray-800 transition transform hover:scale-105">
           🏠 Inicio
        </a>
    </div>
</div>

            </div>
        </div>
    </div>

</body>
</html>
