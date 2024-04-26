@extends('adminLayout')
@section('title', 'Edit Buku')
@section('head', 'EDIT BUKU')
@section('contentAdmin')
    <div class="mx-20 text-left container p-8 bg-slate-100 mt-16 rounded-lg shadow-md">
        <form action="/update-buku/{{ $buku->id }}" method="POST" class="space-y-4" enctype="multipart/form-data">
            @csrf
            @method('PUT')  <!-- Untuk menggunakan metode HTTP PUT untuk update -->

            <!-- Field Nomor Buku -->
            <div>
                <label for="nomor_buku" class="text-lg font-semibold">Nomor Buku:</label>
                <input type="text" id="nomor_buku" name="nomor_buku" value="{{ $buku->nomor_buku }}" required
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <!-- Field Posisi -->
            <div>
                <label for="id_posisi" class="text-lg font-semibold">Posisi:</label>
                <select id="id_posisi" name="id_posisi" required
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
                    @foreach ($posisi as $pos)
                        <option value="{{ $pos->id_posisi }}" 
                                {{ $buku->id_posisi == $pos->id_posisi ? 'selected' : '' }}>
                            {{ $pos->nama_posisi }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Field Penerbit -->
            <div>
                <label for="id_penerbit" class="text-lg font-semibold">Penerbit:</label>
                <select id="id_penerbit" name="id_penerbit" required
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
                    @foreach ($penerbit as $pen)
                        <option value="{{ $pen->id_penerbit }}"
                                {{ $buku->id_penerbit == $pen->id_penerbit ? 'selected' : '' }}>
                            {{ $pen->nama_penerbit }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Field Judul Buku -->
            <div>
                <label for="judul_buku" class="text-lg font-semibold">Judul Buku:</label>
                <input type="text" id="judul_buku" name="judul_buku" value="{{ $buku->judul_buku }}" required
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <!-- Field Pengarang -->
            <div>
                <label for="pengarang" class="text-lg font-semibold">Pengarang:</label>
                <input type="text" id="pengarang" name="pengarang" value="{{ $buku->pengarang }}" required
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <!-- Field Ketersediaan -->
            <div>
                <label for="ketersediaan" class="text-lg font-semibold">Ketersediaan:</label>
                <input type="number" id="ketersediaan" name="ketersediaan" value="{{ $buku->ketersediaan }}" required
                    class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <!-- Field Gambar Buku -->
            <div class="">
                <p class="text-lg font-semibold py-3">Gambar Buku:</p>
                <label for="gambar_buku"
                    class="cursor-pointer text-lg font-semibold w-full px-3 py-2 border-2 bg-gradient-to-b from-white via-slate-100 to-zinc-100 rounded-lg  border-slate-200 focus:outline-none focus:ring focus:border-blue-300 hover:from-zinc-200 transition duration-300">
                    Pilih Gambar
                </label>
                <input type="file" id="gambar_buku" name="gambar_buku" class="hidden">
            </div>

            <!-- Tombol Simpan -->
            <button type="submit"
                class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded shadow-md transition duration-300 ease-in-out">Simpan</button>

            <!-- Tombol Hapus -->
            <a href="/delete-buku/{{ $buku->id }}" onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')"
                class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded shadow-md transition duration-300 ease-in-out">Hapus</a>
        </form>
    </div>

@endsection
