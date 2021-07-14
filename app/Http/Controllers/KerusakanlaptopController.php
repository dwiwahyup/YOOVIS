<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kerusakanlaptop;
use Illuminate\Support\Facades\DB;

class KerusakanlaptopController extends Controller
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
        $kerusakan_laptop = DB::table('kerusakan_laptop')->get();
      return view('backend/kerusakanlaptop.index', compact('kerusakan_laptop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        { 
            $kerusakan_laptop = null;
            $admin_lecturer = "Menambahkan";
            return view('backend/kerusakanlaptop.create', compact('kerusakan_laptop','admin_lecturer'));
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
        DB::table('kerusakan_laptop')->insert([
            'jenis_kerusakan' => $request->jenis_kerusakan,
            'harga' => $request->harga,
          ]);
          return redirect()->route('kerusakanlaptop.index')
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
            $kerusakan_laptop = Kerusakanlaptop::where('id', $id)->first();
            $admin_lecturer = "Mengubah";
            return view('backend/kerusakanlaptop.create', compact('kerusakan_laptop','admin_lecturer'));
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
        $kerusakan_laptop = Kerusakanlaptop::find($request->id);
        $kerusakan_laptop->jenis_kerusakan = $request->jenis_kerusakan;
        $kerusakan_laptop->harga = $request->harga;
        $kerusakan_laptop->save();
        return redirect()->route('kerusakanlaptop.index')
                        ->with('success','Data berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kerusakanlaptop $kerusakanlaptop)
    {
        $kerusakanlaptop->delete();
        return redirect()->route('kerusakanlaptop.index')
                        ->with('success','Data berhasil dihapus.');
    }
}
