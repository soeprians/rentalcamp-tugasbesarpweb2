<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Transaksi;

use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        $transaksi = Transaksi::all();
        return view('transaksi.index',compact('barang','transaksi'));
    }
    public function create()
    {
        $barang = Barang::all();
        $transaksi = Transaksi::all();
        return view('transaksi.index',compact('transaksi','barang'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'namepenyewa' => 'required',
            'barang_id' => 'required',
            'no_wa' => 'required',
            'gmail' => 'required',
            'tgl_sewa' => 'required',
            'bukti' => 'required',
            'status' => 'required'
        ]);

        $transaksi = new Transaksi;
        $transaksi->namepenyewa = $request->namepenyewa;
        $transaksi->barang_id = $request->barang_id;
        $transaksi->no_wa = $request->no_wa;
        $transaksi->gmail = $request->gmail;
        $transaksi->tgl_sewa = $request->tgl_sewa;
        $transaksi->bukti = $request->bukti;
        $transaksi->status = $request->status;
        $transaksi->save();
        return redirect()->route('transaksi.index')->with('success', 'Data Berhasil Disimpan');
    }

    public function edit($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        return view('transaksi.edit',compact('transaksi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'namepenyewa' => 'required',
            'barang_id' => 'required',
            'no_wa' => 'required',
            'gmail' => 'required',
            'tgl_sewa' => 'required',
            'status' => 'required'
        ]);

        $transaksi = Transaksi::findOrFail($id);
        $transaksi->namepenyewa = $request->namepenyewa;
        $transaksi->barang_id = $request->barang_id;
        $transaksi->no_wa = $request->no_wa;
        $transaksi->gmail = $request->gmail;
        $transaksi->tgl_sewa = $request->tgl_sewa;
        $transaksi->status = $request->status;
        $transaksi->save();
        return redirect()->route('transaksi.index')->with('success', 'Data Berhasil Disimpan');
    }

    public function destroy($id)
    {
        $transaksi = Transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index');
    }
}
