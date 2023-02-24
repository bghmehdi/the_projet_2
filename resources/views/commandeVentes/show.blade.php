@extends('layouts.app')
@section('content')

              <fieldset class="hehe">
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
                    <div>
                      <table>
                        <strong>produits :</strong> <br>
                        @if($message = Session::get('success'))
                          <div class="text-success" role="alert">
                            {{$message}}
                          </div>
                        @endif
                         <a class="link" href=" {{route('ligneCommandeVente.create', ['cId' => $commandeVente->id ])}} "><i class="fa-solid fa-plus"></i> {{ __('Add a produit')}}</a>
                        <tr>
                          <th>quantite</th>
                          <th>libelle</th>
                          <th>Actions</th>
                        </tr>
                        @foreach($commandeVente->produit as $produit)
                          <tr>
                            <th> {{$produit->pivot->qt}}</td>
                            <td> {{$produit->libelle}}</td>
                            <td>
                              {{-- <div class="actions" style="display: inline-block"><a  >Modifier</a></div>
                              <div class="actions" style="display: inline-block"><a >show</a></div> --}}
                              <form class="actions" style="display: inline-block" action=" {{route('ligneCommandeVente.destroy', $produit->pivot->id)}} ">
                                @csrf
                                @method('DELETE')
                                <button id="delete" onclick="return confirm('do u really want to delete this produit?')" type="submit">Supprimer</button>
                                <input type="hidden" name="commandeVente" value="{{$commandeVente->id}}">
                              </form>
                            </td>
                          </tr>
                        @endforeach
                      </table>
                    </div>
                  </div>
              </fieldset>
              

@endsection