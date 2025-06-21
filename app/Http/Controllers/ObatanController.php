<?php

namespace App\Http\Controllers;
use App\Models\obatan;
use Illuminate\Http\Request;

class ObatanController extends Controller
{
    
    public function create()
    {
        return view ('obat.create');
    }
    public function store (request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ]);

        $obatan = obatan::create($validatedData);
        return redirect('/obat')->with('succes','obat sukses ditambahkan!');
    }
    public function edit($id)
    {
        $obatan = obatan::findOrFail($id);
        return view('obat.edit', compact('obatan'));
    }
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
             'nama' => 'required',
            'stok' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ]);
        obatan::whereId($id)->update( $validatedData);
        return redirect('/obat')->with('succes','Berhasil diedit!');
    }
    public function destroy($id)
    {
        $obatan = obatan::findOrFail($id);
        $obatan->delete();

        return redirect('/obat')->with('success', 'Berhasil dihapus!');
    }
    public function index(Request $request)
    {
        $keyword = $request->input('search');
        if ($keyword) {
        $obatan = obatan::where('nama', 'like', "%$keyword%")->get();
        } else {
        $obatan = obatan::all();
        }
    return view('Obat.index', compact('obatan'));
    }
    public function userIndex(Request $request)
    {
        $keyword = $request->input('search');
        if ($keyword) {
            $obatan = obatan::where('nama', 'like', "%$keyword%")->get();
        } else {
            $obatan = obatan::all();
        }
        return view('user.obat.index', compact('obatan'));
    }
}
