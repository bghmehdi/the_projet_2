<?php

namespace App\Http\Controllers;

use App\Models\produit;
use Illuminate\Http\Request;
use App\Models\commandeVente;
use App\Models\ligneCommandeVente;

class LigneCommandeVenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
        // return('hi');
        $commandeVente = $request->cId;
        $produits = produit::all();
        
        return view('ligneCommandeVente.create', ['commandeVente' => $commandeVente, 'produits' => $produits]);
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
            'commande_ventes_id' => 'required', 
            'produit_id' => 'required',
            'qt' => 'required',
            ]);
            ligneCommandeVente::create($request->post());
        return redirect()->route('commandeVentes.show' , ['commandeVente' => $request->commande_ventes_id])
            ->with('success','produit added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ligneCommandeVente $ligneCommandeVente, Request $request)
    {
      
        $ligneCommandeVente->delete();
        return redirect()->route('commandeVentes.show', ["commandeVente" => $request->commandeVente])
            ->with('success','produit deleted successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ligneCommandeVente $ligneCommandeVente, Request $request)
    {
        return("I'm working");
        /* $ligneCommandeVente->delete();
        return redirect()->route('commandeVentes.show')
            ->with('success','produit deleted successfully'); */
    }
}
