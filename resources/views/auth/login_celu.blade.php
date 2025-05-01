<?php

/*
File: login_celu
Author: Leonardo G. Tellez Saucedo
Created on: 30 abr. de 2025 22:17:39
Email: leonardo616@gmail.com
*/
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar Participación</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-6 rounded-2xl shadow-md w-full max-w-md">
        <h1 class="text-2xl font-semibold text-center text-gray-800 mb-6">
            Ingresá tu número de celular
        </h1>

        <form action="{{ route('voto.store') }}" method="POST" class="space-y-4">
            @csrf

            <input
                type="text"
                name="username"
                required
                pattern="[0-9]{7,12}"
                placeholder="Ej: 70512345"
                class="w-full px-4 py-2 border rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-center text-lg"
            >

            <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-xl text-lg font-medium transition duration-200"
            >
                Aceptar
            </button>
        </form>
    </div>

</body>
</html>


