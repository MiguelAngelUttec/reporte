<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="estilos/output.css" rel="stylesheet" />
</head>

<body class="bg-slate-200">
    <!-- component -->
    <!-- This is an example component -->
    <div class="max-w-2xl mx-auto bg-white p-16">
        <div class="mb-5 text-white font-semibold ">
            <button class="bg-green-400 border-2 border-green-500 p-2 rounded-md">Volver</button>
        </div>
        <div class="grid gap-6 mb-6 lg:grid-cols-2">
            <input type="search" class="w-full pl-10 pr-4 py-2 rounded-lg shadow focus:outline-none focus:shadow-outline text-gray-600 font-medium" placeholder="Buscar">
            <select name="cars" id="cars" form="carform">
                <option selected>Selecciona</option>
                <option value="opel">Cobaem 19</option>
                <option value="audi">Cobaem 35</option>
            </select>

        </div>


        <form method="post" enctype="multipart/form-data">
            <div class="grid gap-6 mb-6 lg:grid-cols-2">
                <div>
                    <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre de la escuela</label>
                    <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" required>
                </div>
                <div>
                    <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre director@</label>
                    <input type="text" id="last_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" required>
                </div>
                <div>
                    <label for="company" class="block mb-2 text-sm font-medium text-gray-900 ">CCT</label>
                    <input type="text" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" required>
                </div>
                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 ">Dirección</label>
                    <input type="tel" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                </div>

            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Correo Electrónico</label>
                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Descripción</label>
                <textarea cols="30" rows="10" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Escribe Aquí" required></textarea>
            </div>

            <div class="flex items-start mb-6">
                <label for="remembera" class="ml-2 text-sm font-medium text-gray-900 ">Subir la primera imagen.</label>
                <div class="flex items-center h-5">
                    <input id="remembera" type="file" accept="image/png, image/jpeg" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 " required>
                </div>
            </div>
            <div class="flex items-start mb-6">
                <label for="remember" class="ml-2 text-sm font-medium text-gray-900 ">Subir la segunda imagen.</label>
                <div class="flex items-center h-5">
                    <input id="remember" type="file" accept="image/png, image/jpeg" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 " required>
                </div>

            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center ">Generar reporte</button>
        </form>


    </div>
</body>

</html>