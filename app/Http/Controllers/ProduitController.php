<?php

namespace App\Http\Controllers;

use App\Models\produit;
use App\Models\typeProduit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Produits = produit::all();
        return view('produits.index', ['Produits' => $Produits]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeProduits = typeProduit::all();
        return view('produits.create', ['typeProduits' => $typeProduits]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'libelle' => 'required', 
            'type_produits_id' => 'required', 
            'prix' => 'required', 
            'qtStock' => 'required', 
            ]);
        $imageName = $request->image->hashName();

        $request->image->move(public_path('images'), $imageName);
        /* produit::create($request->post()); */
        $produit = new produit();
        $produit->image = $imageName;
        $produit->type_produits_id = $request->type_produits_id;
        $produit->libelle = $request->libelle;
        $produit->prix = $request->prix;
        $produit->qtStock = $request->qtStock;
        $produit->description = '$request->description';

        $produit->save();
        return redirect()->route('produits.index')
            ->with('success','produit created successfully');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(produit $Produit)
    {
        $Produit->delete();
        return redirect()->route('produits.index')
            ->with('success','produit deleted successfully');
    }
}
