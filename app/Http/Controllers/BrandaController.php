<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Type;

class BrandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // Mengambil data barang beserta tipe barangnya
        $barangs = Barang::with('type')->get();
        $types = Type::all();
       

        // Mengembalikan view dengan data barang dan tipe
        return view('branda', compact('barangs', 'types'));
        
    }


    public function filterByType($id_type)
    {
        $types = Type::all();
        $filteredBarangs = Barang::where('id_type', $id_type)->with('type')->get();
    
        return view('branda', compact('types', 'filteredBarangs', 'id_type'));
    }
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
