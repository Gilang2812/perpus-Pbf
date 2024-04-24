<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <script src="{{ asset('/js/app.js') }}"></script>
    @vite('resources/css/app.css')
</head>
<body>
    <header class=" bg-gradient-to-r from-slate-900 to-teal-950 text-white py-2">
        <div class="text-left mx-12 ">
            <h1 class="pb-2 bg-gradient-to-r from-zinc-50 to-white bg-clip-text text-transparent text-3xl font-bold text-stroke-2 text-left  border-b-2 stroke-zinc-50 webkit border-gray-800">Sistem Pelayanan Perpustakaan LabGis</h1>
        </div>
    </header>
    <div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-r from-slate-900 to-teal-950">

        <div class=" max-w-xs">
            <div class="flex justify-center mb-8">
                <div class="relative">
                    <div
                        class="absolute inset-0 bg-gradient-to-r from-teal-400 to-blue-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-lg">
                    </div>
                    <div class="relative bg-white py-2 px-4 sm:rounded-lg shadow-lg">
                        <h3 class="text-lg text-gray-700 font-semibold">Selamat Datang!</h3>
                        <p class="text-gray-500">Silakan masukkan email Anda untuk melanjutkan.</p>
                    </div>
                </div>
            </div>
            <form action="/login" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                @if ($errors->any())
                    <div class="mb-4">
                        <div class="text-red-500 ">
                            @foreach ($errors->all() as $error)
                                <p class="before:content-['•  ']">{{ $error }}</p>
                            @endforeach
                        </div>
                    </div>
                @endif
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="email" name="email" type="text" placeholder="Email">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline"
                        id="password" name="password" type="password" placeholder="******************">
                </div>
                <div class="mb-4 flex justify-center">
                    <button type="submit"
                        class="bg-gradient-to-r from-purple-500 to-pink-500 hover:from-pink-500 hover:to-purple-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transform hover:scale-105 transition duration-500 ease-in-out">
                        Masuk
                    </button>
                </div>
                <div class="text-center mt-4">
                    <p class="text-gray-400">Belum punya akun?</p>
                    <a href="/register" class="text-green-500 hover:text-green-700">Daftar Sekarang</a>
                </div>
                <div class="flex items-center justify-center">
                    <a class="inline-block align-baseline font-bold text-sm text-green-500 hover:text-green-800 transition-transform transform hover:scale-105"
                        href="#">
                        Lupa Password?
                    </a>
                </div>
            </form>
            <p class="text-center text-gray-500 text-xs">
                &copy;{{ date('Y') }} Acme Corp. All rights reserved.
            </p>
        </div>
    </div>
</body>

</html>
