<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CronoSENA API</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="antialiased bg-gray-50 text-gray-800">

    <div class="min-h-screen flex flex-col justify-center items-center px-6">

        <div class="text-center max-w-2xl">

            <h1 class="text-5xl font-extrabold tracking-tight mb-4 text-gray-900">
                API Oficial de CronoSENA
            </h1>

            <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                Accede a datos estructurados sobre programas, competencias y otros recursos del ecosistema CronoSENA.
            </p>

            <div class="mb-10">
                <p class="text-md text-gray-700">
                    Contacto:
                    <a href="https://wa.me/573504152929"
                       class="text-blue-600 font-medium hover:underline">
                        +57 350 4152929
                    </a>
                </p>
            </div>

            <a href="{{ url('/admin') }}"
               class="px-8 py-3 bg-blue-600 text-white font-semibold rounded-xl shadow-md
                      hover:bg-blue-700 transition-all duration-200">
                Ir al Panel Administrativo
            </a>

        </div>

        <footer class="mt-16 text-center text-sm text-gray-500">
            Desarrollado por
            <a href="https://github.com/xenthrall"
               class="text-blue-600 hover:underline font-medium"
               target="_blank" rel="noopener noreferrer">
               xenthrall
            </a>
        </footer>

    </div>

</body>
</html>
