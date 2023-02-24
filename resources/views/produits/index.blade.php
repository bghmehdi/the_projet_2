@extends('layouts.app')
@section('content')
    <h2>Produits </h2>
                  <a class="link" href=" {{route('produits.create')}} "><i class="fa-solid fa-plus"></i> {{ __('Add produit')}}</a>
                  <div class="container ms-0 ps-0">
                    @if($message = Session::get('success'))
                    <div class="text-success" role="alert">
                      {{$message}}
                    </div>
                  @endif
                    <table>
                      <thead>
                          <tr>
                            <th>libelle</th>
                            <th>type</th>
                            <th>prix</th>
                            <th>quantite de stock</th>
                            <th>image</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($Produits as $Produit)
                          <tr>
                            <td>{{ $Produit->libelle }}</td>
                            <td>{{-- {{ $Produit->typeProduit->id }} --}}</td>
                            <td>{{ $Produit->prix }}</td>
                            <td>{{ $Produit->qtStock }}</td>
                            <td> <img style="width: 150px" src="{{ url('images/'.$Produit->image  ) }}" alt="dd"></td>
                            <td>
                            <div class="actions" style="display: inline-block"> <a href="{{route('produits.edit',$Produit->id)}}">Modifier</a></div>
                            {{-- <div class="actions" style="display: inline-block"> <a href="{{route('produits.show',$Produit->id)}}">show</a></div> --}}
                            <form class="actions" style="display: inline-block" action="{{ route('produits.destroy', $Produit->id) }}" method="Post">
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
                    
                  </div>
                  </div>
@endsection