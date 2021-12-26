<?php

namespace App\Http\Controllers;
use App\Barang;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        // dd($kors);
        return view('barang.index',compact('barang'));
    }

    public function create()
    {
        $barang = Barang::all();
        return view('barang.index',compact('barang'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'harga' => 'required'
        ]);

        $barang = new Barang;
        $barang->name = $request->name;
        $barang->harga = $request->harga;
        $barang->save();
        return redirect()->route('barang.index')->with('success', 'Data Berhasil Disimpan');
    }

    public function edit($id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit',compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'harga' => 'required'
        ]);

        $barang = Barang::findOrFail($id);
        $barang->name = $request->name;
        $barang->harga = $request->harga;
        $barang->save();
        return redirect()->route('barang.index')->with('success', 'Data Berhasil Disimpan');
    }

    public function destroy($id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        return redirect()->route('barang.index');
    }
}
    