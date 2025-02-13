<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Type;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barangs = Barang::with('type')->get();
        return view('admin.barang.index', compact('barangs'));
    }

    public function create()
    {
        $types = Type::all();
        return view('admin.barang.create', compact('types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'id_type' => 'required|exists:type,id',
            'harga_sewa' => 'required|numeric',
            'deskripsi' => 'nullable',
            'foto' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('images/barang', 'public');
        }

        Barang::create($data);

        return redirect()->route('barang.index')->with('success', 'Barang berhasil ditambahkan.');
    }

    public function edit(Barang $barang)
    {
        $types = Type::all();
        return view('admin.barang.edit', compact('barang', 'types'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang' => 'required',
            'id_type' => 'required|exists:type,id',
            'harga_sewa' => 'required|numeric',
            'deskripsi' => 'nullable',
            'foto' => 'nullable|image|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('images/barang', 'public');
        }

        $barang->update($data);

        return redirect()->route('barang.index')->with('success', 'Barang berhasil diupdate.');
    }

    public function destroy(Barang $barang)
    {
        if ($barang->foto) {
            \Storage::disk('public')->delete($barang->foto);
        }

        $barang->delete();

        return redirect()->route('barang.index')->with('success', 'Barang berhasil dihapus.');
    }
}
