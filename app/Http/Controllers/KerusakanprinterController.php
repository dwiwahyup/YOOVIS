<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kerusakanprinter;
use Illuminate\Support\Facades\DB;

class KerusakanprinterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kerusakan_printer = DB::table('kerusakan_printer')->get();
        return view('backend/kerusakanprinter.index', compact('kerusakan_printer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        { 
            $kerusakan_printer = null;
            $admin_lecturer = "Menambahkan";
            return view('backend/kerusakanprinter.create', compact('kerusakan_printer','admin_lecturer'));
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('kerusakan_printer')->insert([
            'jenis_kerusakan' => $request->jenis_kerusakan,
            'harga' => $request->harga,
        ]);
        return redirect()->route('kerusakanprinter.index')
            ->with('success','Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $kerusakan_printer = Kerusakanprinter::where('id', $id)->first();
            $admin_lecturer = "Mengubah";
            return view('backend/kerusakanprinter.create', compact('kerusakan_printer','admin_lecturer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $kerusakan_printer = Kerusakanprinter::find($request->id);
        $kerusakan_printer->jenis_kerusakan = $request->jenis_kerusakan;
        $kerusakan_printer->harga = $request->harga;
        $kerusakan_printer->save();
        return redirect()->route('kerusakanprinter.index')
                        ->with('success','Data berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kerusakanprinter $kerusakanprinter)
    {
        $kerusakanprinter->delete();
        return redirect()->route('kerusakanprinter.index')
                        ->with('success','Data berhasil dihapus.');
    }
}
