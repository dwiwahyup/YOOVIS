<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Kerusakan;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = Transaction::all();

        return view('backend.transaction.index', compact('transaction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        $transaction->delete();
        return redirect()->route('admin.transaction.index')
            ->with('success', 'Data Barang berhasil dihapus.');
    }

    public function serviceHp()
    {
        # code...
        $category = Category::where('name', 'Smartphone')->first();
        $kerusakan = Kerusakan::where('category_id', $category->id)->get();

        return view('frontend.service-smartphone', compact('category', 'kerusakan'));
    }

    public function transactionHp(Request $request)
    {
        # code...

        $category_id = $request->category_id;

        //save to DB
        $transaction = Transaction::create([
            'category_id'   => $category_id,
            'merk' => $request->merk,
            'type'         => $request->type,
            // 'kerusakan_id' => implode(",", $request['kerusakan']),
            'kerusakan_id'         => $request->kerusakan,
            'tanggal'         => $request->tanggal,
            'waktu'         => $request->waktu,
            'alamat'         => $request->alamat,
            'promo'         => null,
            'total'         => $request->total,

        ]);

        if ($transaction) {
            //redirect dengan pesan sukses
            return redirect()->back()->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            //redirect dengan pesan error
            return redirect()->back()->with(['error' => 'Data Gagal Disimpan!']);
        }
    }
}
