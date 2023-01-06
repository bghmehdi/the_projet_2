<?php

namespace App\Http\Controllers;

 
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\commandeVente;

class CommandeVenteController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandeVentes = commandeVente::paginate(6);
        return view('commandeVentes.list', [ 'commandeVentes' => $commandeVentes ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all();
        return view('commandeVentes.create',[ 'clients' => $clients ]);
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
            'dateCom' => 'required', 
            'client_id' => 'required',
            ]);
        commandeVente::create($request->post());
        return redirect()->route('commandeVentes.index')
            ->with('success','commande created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(commandeVente $commandeVente)
    {
        return view('commandeVentes.show', ['commandeVente' => $commandeVente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(commandeVente $commandeVente)
    {   
        $commandeVentes = commandeVente::all();
        return view('commandeVentes.edit', ['commandeVente' => $commandeVente, 'commandeVentes' => $commandeVentes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, commandeVente $commandeVente)
    {
        $request->validate([
            'dateCom' => 'required', 
            'client_id' => 'required',
            ]);


            $commandeVente->fill($request->post())->save();
            return redirect()->route('commandeVentes.index')
                ->with('success','commande edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(commandeVente $commandeVente)
    {
        $commandeVente->delete();
        return redirect()->route('commandeVentes.index')
            ->with('success','commande deleted successfully');
    }
}
