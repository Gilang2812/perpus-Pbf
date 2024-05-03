@extends('layout')

@section('title', 'Katalog Buku')

@section('content')
    <div class="container py-20">
        <div class="     px-96 ">
            <div
                class=" justify-between items-center rounded-lg  w-full flex bg-[#7c68ee1f]  border-none shadow-[0_4px_4px_0px_rgba(0,0,0,0.25)]">
                <input
                    class="bg-transparent w-full h-full p-4 text-slate-500 rounded-lg  focus:outline-none focus:border-slate-400 focus:ring-2  focus:ring-slate-400"
                    type="text" id="search" placeholder="serach">
                <div class="px-4 r">
                    <label class=" cursor-pointer" for="search">
                        <svg width="36" height="28" viewBox="0 0 36 37" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M25.6458 23.0833H24.0329L23.4612 22.5321C25.4621 20.2046 26.6667 17.1829 26.6667 13.8958C26.6667 6.56625 20.7254 0.625 13.3958 0.625C6.06625 0.625 0.125 6.56625 0.125 13.8958C0.125 21.2254 6.06625 27.1667 13.3958 27.1667C16.6829 27.1667 19.7046 25.9621 22.0321 23.9612L22.5833 24.5329V26.1458L32.7917 36.3337L35.8337 33.2917L25.6458 23.0833ZM13.3958 23.0833C8.31208 23.0833 4.20833 18.9796 4.20833 13.8958C4.20833 8.81208 8.31208 4.70833 13.3958 4.70833C18.4796 4.70833 22.5833 8.81208 22.5833 13.8958C22.5833 18.9796 18.4796 23.0833 13.3958 23.0833Z"
                                fill="#6284F9" />
                        </svg>
                    </label>
                </div>

            </div>
        </div>

        <div class="pt-10 px-96">
            <div class="bg-white shadow-[0_4px_4px_0_rgba(0,0,0,0.25)] rounded-sm  p-3 flex space-x-6">
                <div class="w-44 px-3">
                    <img class="bg-slate-200 rounded-lg h-24" src="" alt="gambar buku">
                </div>
                <div class="w-full space-y-3">
                    <h1 class="text-2xl">Buku Matetmatika Erlangga</h1>
                    <h1 class="px-3 py-1 border w-fit rounded-2xl border-slate-300">Penulis</h1>
                    <div class="flex ">
                        <div class="px-4">
                            <h1>Penerbit</h1>
                            <h1>Pengarang</h1>
                        </div>
                        <div class="px-4 ">
                            <h1>: erlangga</h1>
                            <h1>: Gilang Kharisma</h1>
                        </div>
                    </div>
                </div>
                <div class="text-center ">
                    <div class="border border-slate-300 mb-2 p-2 px-8 rounded-md 00">
                        <h1>ketersediaan</h1>
                        <h1 class="text-3xl"><Strong>1</Strong></h1>
                    </div>
                    <a class="text-blue-500" href="">
                    <div class="py-2 px-8 border rounded-md border-blue-500">
                            Tampilkan
                            Detail
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
