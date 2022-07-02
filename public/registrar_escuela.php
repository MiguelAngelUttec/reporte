<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="estilos/output.css" rel="stylesheet" />
</head>

<body>
    <!-- component -->
    <!-- Create by joker banny -->
    <div class="h-screen bg-indigo-100 flex justify-center items-center">
        <div class="lg:w-2/5 md:w-1/2 w-2/3">
            <form class="bg-white p-10 rounded-lg shadow-lg min-w-full">
                <h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Registrar nueva escuela</h1>
                <h2 class="text-center text-xl mb-6 text-gray-600 font-semibold font-sans">Datos de la escuela</h2>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="username">Nombre</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="username" id="username" placeholder="nombre" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="email">Nivel</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="email" id="email" placeholder="nivel" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="password">CCT</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="password" id="password" placeholder="centro de trabajo" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="password">Dirección</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="password" id="password" placeholder="direccion" />
                </div>

                <h2 class="text-center text-xl mb-6 text-gray-600 font-semibold font-sans">Datos del director</h2>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Nombre</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="confirm" id="confirm" placeholder="nombre" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Cargo</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="confirm" id="confirm" placeholder="cargo" />
                </div>
                <div>
                    <label class="text-gray-800 font-semibold block my-3 text-md" for="confirm">Teléfono</label>
                    <input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" type="text" name="confirm" id="confirm" placeholder="telefono" />
                </div>

                <button type="submit" class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Register</button>
                <button type="submit" class="w-full mt-6 mb-3 bg-indigo-100 rounded-lg px-4 py-2 text-lg text-gray-800 tracking-wide font-semibold font-sans">Login</button>
            </form>
        </div>
    </div>
</body>

</html>