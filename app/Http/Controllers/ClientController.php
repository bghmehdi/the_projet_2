<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\commandeVente;
use Illuminate\Http\Request; 

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*  $client = Client::find(1);
        echo  $client;
        exit(); */

        $allclients = Client::all();
        $clients = Client::paginate(4);
        return view('clients.index', [ 'clients' => $clients , 'allclients' => $allclients ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
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
            'nom' => 'required', 
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'ville' => 'required',
            'adresse' => 'required'
            ]);
        Client::create($request->post());
        return redirect()->route('clients.index')
            ->with('success','Client created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('clients.show', ['client' => $client]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'ville' => 'required',
            'adresse' => 'required'
            ]);


            $client->fill($request->post())->save();
            return redirect()->route('clients.index')
                ->with('success','client edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')
            ->with('success','client deleted successfully');
    }
    
    public function search(){
        $search_text = $_GET['query'];
        $clients = Client::where('nom', 'LIKE', '%'.$search_text.'%')->get();

        return view('clients.search',compact('clients'));
    }
}
