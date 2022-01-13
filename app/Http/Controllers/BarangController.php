<?php

namespace App\Http\Controllers;
use App\Barang;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        // dd($kors);
        return view('barangs.index',compact('barangs'));
    }

    public function create()
    {
        $barangs = Barang::all();
        return view('barangs.index',compact('barangs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'harga' => 'required'
        ]);

        $barangs = new Barang;
        $barangs->name = $request->name;
        $barangs->harga = $request->harga;
        $barangs->save();
        return redirect()->route('barangs.index')->with('success', 'Data Berhasil Disimpan');
    }

    public function edit($id)
    {
        $barangs = Barang::findOrFail($id);
        return view('barangs.edit',compact('barangs'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'harga' => 'required'
        ]);

        $barangs = Barang::findOrFail($id);
        $barangs->name = $request->name;
        $barangs->harga = $request->harga;
        $barangs->save();
        return redirect()->route('barangs.index')->with('success', 'Data Berhasil Disimpan');
    }

    public function destroy($id)
    {
        $barangs = Barang::findOrFail($id);
        $barangs->delete();
        return redirect()->route('barangs.index');
    }
}
    