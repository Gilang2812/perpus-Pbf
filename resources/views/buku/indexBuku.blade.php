@extends('layout')

@section('title', 'Daftar Buku')
@section('content')

    <div class=" mx-20 mt-8 space-y-8">
        <a href="/buku/create"
            class="bg-purple-600 transition-colors ease-in-out duration-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded shadow-md flex items-center w-fit">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 2a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2h-6v6a1 1 0 1 1-2 0v-6H3a1 1 0 1 1 0-2h6V3a1 1 0 0 1 1-1z" />
            </svg>
            Tambah Buku
        </a>
        <table class="min-w-full divide-y divide-gray-200 mt-4">
            <thead>
                <tr class="text-center">
                    <th
                        class="px-6 py-3 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Nomor</th>
                    <th
                        class="px-6 py-3 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Nomor Buku</th>
                    <th
                        class="px-6 py-3 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Judul Buku</th>
                    <th
                        class="px-6 py-3 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Penerbit</th>
                    <th
                        class="px-6 py-3 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Pengarang</th>
                    <th
                        class="px-6 py-3 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Ketersediaan</th>
                    <th
                        class="px-6 py-3 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Image</th>
                    <th
                        class="px-6 py-3 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Posisi</th>
                    <th
                        class="px-6 py-3 bg-gray-50 text-center text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                        Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($buku as $buku)
                    <tr class="text-center">
                        <td>{{  $loop->iteration }}</td>
                        <td>{{ $buku->nomor_buku }}</td>
                        <td>{{ $buku->judul_buku }}</td>
                        <td>{{ $buku->penerbit?->nama_penerbit }}</td>
                        <td>{{ $buku->pengarang }}</td>
                        <td>{{ $buku->ketersediaan }}</td>
                        <td>{{ $buku->image }}</td>
                        <td>{{ $buku->posisi?->posisi }}</td>
                        <td>
                            <!-- Tambahkan tombol aksi -->
                            <a href="/buku/{{ $buku->nomor_buku }}/edit"
                                class="bg-blue-600 transition-colors m-2 ease-in-out duration-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded shadow-md flex items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M17.293 2.707a1 1 0 0 0-1.414 0l-9 9a1 1 0 0 0-.293.707V15h2.586a1 1 0 0 0 .707-.293l9-9a1 1 0 0 0 0-1.414l-1.586-1.586z" />
                                    <path d="M14 7a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V10a1 1 0 0 1 1-1h6z" />
                                </svg>
                                Edit
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
