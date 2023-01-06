@extends('layouts.app')
@section('content')

              <fieldset>
                <legend>
                  <h2> commande {{$commandeVente->id }}</h2>
                </legend>
                  <div>
                    <a class="link" href="{{route('commandeVentes.index')}}"><i class="fa-solid fa-arrow-left"></i> back</a>
                  </div>
                  <div>
                    <div>
                      <strong>commande id :</strong>
                      {{$commandeVente->id}}
                    </div>
                    <div>
                      <strong>commande date com :</strong>
                      {{$commandeVente->dateCom}}
                    </div>
                    <div>
                      <strong>the client :</strong>
                      <a class="link" href="{{ route('clients.show', $commandeVente->client->id) }}">{{$commandeVente->client->nom}} {{$commandeVente->client->prenom}}</a></div>
                    </div>
                  </div>
              </fieldset>
              

@endsection