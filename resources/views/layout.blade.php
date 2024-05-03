<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LGIS | @yield('title')</title>
    <link rel="icon" type="image/webp" href="/logoGis.png">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')
</head>
<body>
    <header class="w-full flex justify-between px-12 items-center bg-gradient-to-r from-gray-800 to-gray-900 text-white py-2">
        <div class="flex gap-10 text-right font-sans ">
            <div class="flex items-center mt-4 h-12 w-12 bg-white rounded-full ring-2 ring-gray-300 justify-center">
                <img src="/logoGis.png" alt="Logo Aplikasi" class="h-12">
            </div>
            <div>
                <h1 class="text-2xl text-wrap font-medium font-serif text-left">Sistem </h1>
                <h1 class="text-2xl text-wrap font-medium font-serif text-left">Pelayanan</h1>
                <h1 class="text-2xl text-wrap font-medium font-serif text-left">Perpustakaan</h1>
            </div>
        </div>
        <nav>
            <a href="">Home</a>
            <a href="">Buku</a>
            <a href="">Peminjaman</a>
            <a href="">Pengguna</a>
        </nav>
    </header>
    <main class="bg-[#FAFBFC]">
        @yield('content')
    </main>
</body>
</html>

