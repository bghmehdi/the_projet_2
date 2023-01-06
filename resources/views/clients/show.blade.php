@extends('layouts.app')
@section('content')
<style>
  ul{
    list-style:disc;
    display: inline-block
  }
  
</style>
                <fieldset>
                  <legend>
                    <h2>{{$client->nom }} {{$client->prenom }}</h2>
                  </legend>
                  <div>
                    <a class="link" href="{{route('clients.index')}}"><i class="fa-solid fa-arrow-left"></i> back</a>
                  </div>
                  <div >
                    <div >
                      <strong>nom :</strong>
                      {{$client->nom}}
                    </div>
                    <div >
                      <strong>prenom :</strong>
                      {{$client->prenom}}
                    </div>
                    <div >
                      <strong>telephone :</strong>
                      {{$client->telephone}}
                    </div>
                    <div >
                      <strong>email :</strong>
                      {{$client->email}}
                    </div>
                    <div >
                      <strong>adresse :</strong>
                      {{$client->adresse}}
                    </div>
                    <div >
                      <strong>ville :</strong>
                      {{$client->ville}}
                    </div>
                    <div >
                      <div><strong>les commandes :</strong></div>
                      <ul>
                        @if ($client->commandeVente->count() > 0)
                            @foreach ($client->commandeVente as $commande)
                                <li> <strong>id : </strong> <a class="link" href="{{route('commandeVentes.show',$commande->id)}}">{{$commande->id}}</a>  <strong>  date :</strong> {{ $commande->dateCom }}</li>
                            @endforeach
                        @else
                            <p>no commandes</p>
                        @endif
                    </ul>
                    </div>
                  </div>
                </fieldset>
              

@endsection