<?php

namespace App\Http\Controllers;

use App\Models\typeProduit;
use Illuminate\Http\Request;

class TypeProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $typeProduits = typeProduit::all();
        return view('typeProduits.index', ['typeProduits' => $typeProduits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {    
        return view('typeProduits.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, typeProduit $typeProduit)
    {
        $request->validate([
            'libelle' => 'required', 
            ]);
          $typeProduit->create($request->post())->save();
            return redirect()->route('typeProduits.index')
                ->with('success','type edited successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(typeProduit $typeProduit)
    {
        return view('typeProduits.edit', ['typeProduit' => $typeProduit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, typeProduit $typeProduit)
    {
        $request->validate([
            'libelle' => 'required', 
            ]);


            $typeProduit->fill($request->post())->save();
            return redirect()->route('typeProduits.index')
                ->with('success','type edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(typeProduit $typeProduit)
    {
        $typeProduit->delete();
        return redirect()->route('typeProduits.index')
            ->with('success','type deleted successfully');
    }
}
