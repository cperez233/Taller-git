<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mí - Cristian Perez</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-900 via-blue-800 to-blue-600 text-white font-sans">

    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-3xl bg-blue-950 bg-opacity-80 rounded-2xl shadow-2xl p-10 text-center space-y-10 border border-blue-700">
            
            <!-- Título -->
            <h1 class="text-4xl md:text-5xl font-extrabold text-blue-300">
                Sobre mí
            </h1>

            <!-- Texto principal -->
            <p class="text-lg text-blue-100 leading-relaxed text-justify">
                Hola, mi nombre es <span class="font-bold">Cristian Perez</span>, tengo 20 años y soy de 
                <span class="italic">Barrancabermeja, Colombia</span>.  
                Actualmente estudio <span class="font-bold">Ingeniería de Sistemas</span> en la UNAB, una carrera que escogí
                porque desde niño siempre me apasionaron los videojuegos, el computador y la tecnología. Tengo 2 hermanas y 2 hermanos, 
                cuyos nombres son <span class="font-bold">Luisa</span>, <span class="font-bold">Karina</span>, <span class="font-bold">John</span>, y <span class="font-bold">Javier</span>. 
                Mis padres se llaman <span class="font-bold">Jairo</span> y <span class="font-bold">Paola</span>.
            </p>

            <p class="text-lg text-blue-100 leading-relaxed text-justify">
                Me considero una persona en constante aprendizaje, con ganas de crecer tanto a nivel personal como profesional. 
                Soy alguien que disfruta compartir con los demás, viajar, entrenar, pero que nunca deja de lado ese amor por 
                los videojuegos y la tecnología que me acompañan desde siempre.
            </p>

<!-- Foto familiar -->
<div class="flex justify-center">
                <div>
                    <img src="{{ asset('images/familia.jpg') }}" 
                         alt="Foto familiar de Cristian Perez" 
                         class="w-72 h-72 object-cover rounded-2xl shadow-lg border-4 border-blue-400">
                    <p class="mt-3 text-sm text-blue-200">Un momento especial con mi familia 💙</p>
                </div>
            </div>

            <!-- Botones -->
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
