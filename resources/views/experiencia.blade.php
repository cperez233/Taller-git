<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experiencia Laboral - Cristian Perez</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 via-cyan-100 to-blue-200 min-h-screen flex flex-col items-center justify-center text-gray-800">

    <div class="max-w-6xl w-full px-6 py-12">
        <h1 class="text-4xl md:text-5xl font-extrabold text-center mb-12 text-blue-700 tracking-wide">
            💼 Experiencia Laboral
        </h1>

        <!-- Grid de experiencias -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <!-- Experiencia 1 -->
            <div class="bg-white rounded-2xl shadow-xl p-6 hover:scale-105 transition">
                <h2 class="text-xl font-bold text-blue-600 mb-4">🌱 Trabajo en la finca</h2>
                <p>
                    Mi primera experiencia laboral fue trabajando con mi papá en la finca.  
                    Fue un trabajo pesado, lleno de esfuerzo físico, sudor y disciplina.  
                    Aprendí lo que significa el trabajo duro y el valor del sacrificio. 💪
                </p>
            </div>

  <!-- Experiencia 2 -->
  <div class="bg-white rounded-2xl shadow-xl p-6 hover:scale-105 transition">
                <h2 class="text-xl font-bold text-blue-600 mb-4">🏰 Disney - Quick Service Food & Beverage</h2>
                <p>
                    En 2025 tuve la oportunidad de trabajar en Disney World, Orlando,  
                    como parte del programa cultural.  
                    Estuve en el área de Quick Service Food & Beverage,  
                    desarrollando habilidades de servicio al cliente y trabajo en equipo, aparte de poder demostrar mi nivel de ingles. ✨
                </p>
            </div>

            <!-- Botón volver -->
        <div class="text-center mt-12">
            <a href="{{ url('/') }}" 
               class="px-8 py-4 bg-blue-600 text-white font-semibold rounded-xl shadow-md hover:bg-blue-700 transition">
                🏠 Volver al inicio
            </a>
        </div>
    </div>

</body>
</html>