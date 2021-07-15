<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kerusakanhp;
use Illuminate\Support\Facades\DB;

class KerusakanhpController extends Controller
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
        $kerusakan_hp = DB::table('kerusakan_hp')->get();
        return view('backend/kerusakanhp.index', compact('kerusakan_hp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { {
            $kerusakan_hp = null;
            $admin_lecturer = "Menambahkan";
            return view('backend/kerusakanhp.create', compact('kerusakan_hp', 'admin_lecturer'));
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
        DB::table('kerusakan_hp')->insert([
            'jenis_kerusakan' => $request->jenis_kerusakan,
            'harga' => $request->harga,
        ]);
        return redirect()->route('admin.kerusakanhp.index')
            ->with('success', 'Data berhasil ditambahkan.');
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
        $kerusakan_hp = Kerusakanhp::where('id', $id)->first();
        $admin_lecturer = "Mengubah";
        return view('backend/kerusakanhp.create', compact('kerusakan_hp', 'admin_lecturer'));
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
        $kerusakan_hp = Kerusakanhp::find($request->id);
        $kerusakan_hp->jenis_kerusakan = $request->jenis_kerusakan;
        $kerusakan_hp->harga = $request->harga;
        $kerusakan_hp->save();
        return redirect()->route('admin.kerusakanhp.index')
            ->with('success', 'Data berhasil diperbaharui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kerusakanhp $kerusakanhp)
    {
        $kerusakanhp->delete();
        return redirect()->route('admin.kerusakanhp.index')
            ->with('success', 'Data berhasil dihapus.');
    }
}
