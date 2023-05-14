<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function create()
    {
        return view('pembayaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pembayaran' => 'required',
            'nominal_pembayaran' => 'required|numeric|min:1',
        ]);

        $pembayaran = Pembayaran::create([
            'id_pembayaran' => $request->input('id_pembayaran'),
            'nominal_pembayaran' => $request->input('nominal_pembayaran'),
        ]);

        return redirect('/pembayaran')->with('success', 'Pembayaran sukses!');
    }
}
