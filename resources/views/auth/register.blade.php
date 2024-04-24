<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <script src="{{ asset('js/app.js') }}"></script>
    @vite('resources/css/app.css')
</head>

<body >
    <header class=" bg-gradient-to-r from-slate-900 to-teal-950 text-white py-2">
        <div class="text-left mx-12 ">
            <h1 class="pb-2 bg-gradient-to-r from-zinc-50 to-white bg-clip-text text-transparent text-3xl font-bold text-stroke-2 text-left  border-b-2 stroke-zinc-50 webkit border-gray-800">Sistem Pelayanan Perpustakaan LabGis</h1>
        </div>
    </header>
    <div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-r from-slate-900 to-teal-950">
        <div class="w-full max-w-xs">

            <div class="flex justify-center mb-8">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-teal-400 to-blue-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-lg"></div>
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-teal-400 to-blue-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-lg">
                    </div>
                    <div class="relative bg-white py-2 px-4 sm:rounded-lg shadow-lg">
                        <h3 class="text-lg text-gray-700 font-semibold">Buat Akun Baru!</h3>
                        <p class="text-gray-500">Silakan masukkan data Anda untuk melanjutkan.</p>
                    </div>
                </div>
            </div>
            <div>
                <form action="/register" method="POST"
                    class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" style="animation: fadeIn 1s ease-in-out;">
                        @csrf
                        @if ($errors->any())
                            <div class="mb-4">
                                <div class="text-red-500">
                                    @foreach ($errors->all() as $error)
                                        <p class="before:content-['•']">&nbsp;{{ $error }}</p>
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                Nama
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="name" name="nama" type="text" placeholder="Nama Lengkap">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                Email
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="email" name="email" type="email" placeholder="Alamat Email">
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                Password
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                                id="password" name="password" type="password" placeholder="Password">
                        </div>
                        <div class="flex justify-center">
                            <button type="submit"
                            class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Daftar
                        </button>    
                    </div>
                        <div class="flex items-center justify-between mt-8">
                            <a class="inline-block align-baseline font-bold text-sm text-purple-500 hover:text-purple-800"
                                href="/login">
                                Sudah punya akun? Masuk disini
                            </a>
                        </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
