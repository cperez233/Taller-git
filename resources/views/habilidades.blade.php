<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habilidades - Cristian Perez</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 via-gray-800 to-black text-white font-sans">

    <div class="min-h-screen flex items-center justify-center px-6">
        <div class="max-w-5xl w-full space-y-12">

            <!-- Título -->
            <h1 class="text-5xl md:text-6xl font-extrabold text-center text-cyan-400">
                Mis Habilidades
            </h1>

            <!-- Grid de habilidades -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- Habilidades Sociales -->
                <div class="bg-gray-900 rounded-2xl shadow-2xl p-8 border border-cyan-600 hover:scale-105 transition transform text-center">
                    <div class="text-5xl mb-4">🤝</div>
                    <h2 class="text-2xl font-bold text-cyan-400 mb-3">Habilidades Sociales</h2>
                    <p class="text-gray-300 leading-relaxed">
                        Liderazgo, trabajo en equipo y amabilidad. Además, manejo del <b>inglés C1+</b>, 
                        comunicación efectiva y empatía en entornos diversos.
                    </p>
                </div>
 <!-- Habilidades Técnicas -->
            <div class="bg-gray-900 rounded-2xl shadow-2xl p-8 border border-green-600 hover:scale-105 transition transform text-center">
                    <div class="text-5xl mb-4">💻</div>
                    <h2 class="text-2xl font-bold text-green-400 mb-3">Habilidades Técnicas</h2>
                    <p class="text-gray-300 leading-relaxed">
                        Programación en <b>Python, PHP, Java, JavaScript</b>. 
                        Manejo de bases de datos SQL, frameworks como Laravel, 
                        y desarrollo de aplicaciones web.  
                        También con creatividad en la cocina 😅.
                    </p>
                </div>
                 <!-- Botón volver -->
            <div class="text-center">
                <a href="{{ url('/') }}" 
                   class="inline-block px-6 py-3 rounded-xl bg-cyan-500 text-white font-semibold hover:bg-cyan-600 transition">
                   🏠 Volver al inicio
                </a>
            </div>
        </div>
    </div>

</body>
</html>