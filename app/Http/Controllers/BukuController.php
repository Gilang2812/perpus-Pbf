<?php

namespace App\Http\Controllers;

use App\Models\penerbitModel;
use App\Models\posisiModel;
use App\Models\bukuModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator; // Tambahkan use statement untuk Validator

class BukuController extends Controller
{

    public function index()
    {
        $buku = bukuModel::all();
        return view('buku.indexBuku', compact('buku'));
    }

    public function create()
    {
        $posisi = posisiModel::all();
        $penerbit = penerbitModel::all();
        return view('buku.createBuku', compact('posisi', 'penerbit'));
    }

    public function insert(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nomor_buku' => 'required',
            'judul_buku' => 'required',
            'ketersediaan' => 'required'
        ], [
            'required' => 'Kolom :attribute wajib diisi.'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $buku = new bukuModel();
        $buku->nomor_buku = $request->nomor_buku;
        $buku->id_posisi = $request->id_posisi;
        $buku->judul_buku = $request->judul_buku;
        $buku->id_penerbit = $request->id_penerbit;
        $buku->pengarang = $request->pengarang;
        $buku->ketersediaan = $request->ketersediaan;
        
        $buku->save();

        return redirect('/buku');
    }

    public function edit($id)
    {
        $buku = bukuModel::find($id);
        $posisi = posisiModel::all();
        $penerbit = penerbitModel::all();
        return view('buku.editBuku', compact('buku', 'posisi', 'penerbit'));
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nomor_buku' => 'required',
            'judul_buku' => 'required',
            'ketersediaan' => 'required'
        ], [
            'required' => 'Kolom :attribute wajib diisi.'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $buku = bukuModel::find($id);
        $buku->nomor_buku = $request->nomor_buku;
        $buku->id_posisi = $request->id_posisi;
        $buku->judul_buku = $request->judul_buku;
        $buku->id_penerbit = $request->id_penerbit;
        $buku->pengarang = $request->pengarang;
        $buku->ketersediaan = $request->ketersediaan;
        
        $buku->save();

        return redirect('/buku');
    }
}