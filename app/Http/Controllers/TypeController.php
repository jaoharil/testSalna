<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('admin.type.index', compact('types'));
      
    }

    public function create()
    {
        return view('type.create');
    }

    public function store(Request $request)
    {
        $request->validate(['nama_type' => 'required|unique:type,nama_type']);

        Type::create($request->all());

        return redirect()->route('type.index')->with('success', 'Type berhasil ditambahkan.');
    }

    public function edit(Type $type)
    {
        return view('type.edit', compact('type'));
    }

    public function update(Request $request, Type $type)
    {
        $request->validate(['nama_type' => 'required|unique:type,nama_type,' . $type->id]);

        $type->update($request->all());

        return redirect()->route('type.index')->with('success', 'Type berhasil diupdate.');
    }

    public function destroy(Type $type)
    {
        $type->delete();

        return redirect()->route('type.index')->with('success', 'Type berhasil dihapus.');
    }
}
