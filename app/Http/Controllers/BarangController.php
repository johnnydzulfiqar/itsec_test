<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;

class BarangController extends Controller
{
    public function index(Request $request)
    {
        $data = Barang::all();
        return view('barang.index', compact('data'));
    }
    public function create()
    {
        return view('barang.create');
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $barang = Barang::create($input);
        return redirect('barang.index')->with('success', 'Data Berhasil Disimpan');
    }
    public function edit(Barang $barang)
    {
        return view('barang.create');
    }
    public function update(Barang $barang, Request $request)
    {
        $input = $request->all();
        $barang->update($input);
        return redirect(to: 'barang.index')->with('success', 'Data Berhasil Diupdate');
    }
    public function destroy($id)
    {
        $data = Barang::find($id);
        $data->delete();
        return redirect('barang.index')->with('success', 'Data Berhasil Dihapus');
    }
}
