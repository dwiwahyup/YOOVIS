<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $barang = DB::table('barang')->get();
        return view('backend/barang.index', compact('barang'));
    }

    public function create()
    {
        $barang = null;
        $admin_lecturer = "Menambahkan";
        return view('backend/barang.create', compact('barang', 'admin_lecturer'));
    }

    public function store(Request $request)
    {
        DB::table('barang')->insert([
            'nama_barang' => $request->nama,
        ]);
        return redirect()->route('admin.barang.index')
            ->with('success', 'Data Pengalaman Kerja berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $barang = barang::where('id_barang', $id)->first();
        $admin_lecturer = "Mengubah";
        return view('backend/barang.create', compact('barang', 'admin_lecturer'));
    }

    public function update(Request $request)
    {
        $barang = Barang::find($request->id);
        $barang->nama_barang = $request->nama;
        $barang->save();
        return redirect()->route('admin.barang.index')
            ->with('success', 'Data Barang berhasil diperbaharui.');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('admin.barang.index')
            ->with('success', 'Data Barang berhasil dihapus.');
    }
}
