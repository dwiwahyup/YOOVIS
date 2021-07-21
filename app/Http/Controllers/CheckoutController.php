<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index($id)
    {
        $user_id = Auth::user()->id;

        $checkout = Checkout::where('transaction_id', $id)->first();
        $transaction = Transaction::where('id', $id)->get();

        $transaction_total = Transaction::where('id', $id)->first();

        return view('frontend.checkout', compact('checkout', 'transaction', 'transaction_total'));
    }

    public function update(Request $request, $id)
    {
        // $update = Checkout::where('id', $checkout->id);

        // $update->update([
        //     'bukti_pembayaran' => $imagePath,
        //     'status' => 'success'
        // ]);

        dd($request);

        $checkout = Checkout::find($id);

        //store foto
        if (!$request->hasFile('bukti_pembayaran')) {
            $checkout->bukti_pembayaran = $checkout->bukti_pembayaran;
        } else {
            if (file_exists($checkout->bukti_pembayaran)) {
                unlink($checkout->bukti_pembayaran);
            }
            $image = $request->bukti_pembayaran;
            $imageName = time() . $image->getClientOriginalName();
            $image->move('bukti_pembayaran/', $imageName);
            $imagePath = 'bukti_pembayaran/' . $imageName;
            $checkout->bukti_pembayaran = 'bukti_pembayaran/' . $imageName;
        }

        $checkout->save();

        if ($checkout) {
            # code...
            return redirect()->route('user.home')->with('message', 'Pesanan anda berhasil dibayar mohon ditungu :)');
        }
    }
}
