<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Metas - Cristian Perez</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-indigo-900 via-blue-900 to-slate-900 text-white font-sans">

    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-5xl w-full bg-slate-950 bg-opacity-70 rounded-2xl shadow-2xl p-10 border border-blue-800 space-y-10">
            
            <!-- Título -->
            <h1 class="text-4xl md:text-5xl font-extrabold text-center text-blue-300">
                Mis Metas 🚀
            </h1>

            <p class="text-center text-lg text-blue-200">
                A lo largo de mi vida he tenido sueños y aspiraciones diferentes. 
                Algunos son parte de mi pasión personal, y otros representan mi futuro profesional.
            </p>

            <!-- Grid con dos tarjetas -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-8">
                
                <!-- Meta: Ingeniero principal / Dueño -->
                <div class="bg-gradient-to-b from-blue-800 to-blue-950 rounded-2xl p-8 shadow-lg border border-blue-700 hover:scale-105 transform transition">
                    <h2 class="text-2xl font-bold text-blue-200 mb-4">👨‍💻 Ingeniero & Líder</h2>
                    <p class="text-blue-100 leading-relaxed">
                        Mi prioridad es crecer como <span class="font-bold">Ingeniero de Sistemas</span>, 
                        y llegar a ser el <span class="italic">ingeniero principal</span> de una gran empresa tecnológica.  
                        No solo quiero desempeñar un rol clave, sino también <span class="font-bold">crear mi propia empresa</span> algún día y liderar equipos que desarrollen soluciones innovadoras.
                    </p>
                </div>

                <!-- Meta: Creador de contenido / Streamer -->
                <div class="bg-gradient-to-b from-purple-800 to-indigo-950 rounded-2xl p-8 shadow-lg border border-purple-700 hover:scale-105 transform transition">
                    <h2 class="text-2xl font-bold text-purple-200 mb-4">🎮 Creador de Contenido</h2>
                    <p class="text-purple-100 leading-relaxed">
                        Aunque es algo secundario, siempre he soñado con ser 
                        <span class="font-bold">creador de contenido y streamer de videojuegos</span>.  
                        Me apasiona compartir mis partidas, hablar, interactuar, mostrar lo que hago, hacer reír a la gente y conectar con una comunidad.  
                        Tal vez no sea mi meta principal, pero es una parte importante de lo que soy y quiero construir.
                    </p>
                </div>

            </div>

            <!-- Botón de regreso -->
            <div class="flex justify-center mt-8">
                <a href="{{ url('/') }}" 
                   class="px-6 py-3 rounded-xl bg-gray-700 text-white font-semibold hover:bg-gray-800 transition transform hover:scale-105">
                   🏠 Volver al inicio
                </a>
            </div>

        </div>
    </div>

</body>
</html>


