@extends('layouts.app')
@section('content')

<h2>commande vente</h2>
                  <a class="link" href=" {{route('commandeVentes.create')}} "><i class="fa-solid fa-plus"></i> {{ __('Add a commande')}}</a>
                  <div class="container ms-0 ps-0">
                    @if($message = Session::get('success'))
                    <div class="text-success" role="alert">
                      {{$message}}
                    </div>
                  @endif
                    <table>
                      <thead>
                          <tr>
                            <th>ID</th>
                            <th>date commande</th>
                            <th>client</th>
                            {{-- <th>ville</th> --}}
                            <th>actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($commandeVentes as $commandeVente)
                          <tr>
                            <th scope="row">{{ $commandeVente->id }}</th>
                            <td>{{ $commandeVente->dateCom }}</td>
                            <td><a class="link" href="{{ route('clients.show', $commandeVente->client->id) }}">{{$commandeVente->client->nom}} {{$commandeVente->client->prenom}}</a></td>
                            {{-- <td>{{ $client->ville }}</td> --}}
                            <td>
                            <div class="actions" style="display: inline-block"> <a href="{{route('commandeVentes.edit',$commandeVente->id)}}">Modifier</a></div>
                            <div class="actions" style="display: inline-block"> <a href="{{route('commandeVentes.show',$commandeVente->id)}}">show</a></div>
                            <form class="actions" style="display: inline-block" action="{{ route('commandeVentes.destroy', $commandeVente->id) }}" method="Post">
                              @csrf
                              @method('DELETE')
                              <button id="delete" onclick="return confirm('do u really want to delete this commande?')" type="submit">Supprimer</button>
                            </form>
                          </td>
                          </tr>
                          @endforeach
                        </tbody>
                  </table>
                  <div>
                    {{ $commandeVentes->links() }}
                  </div>
                  </div>
                
@endsection