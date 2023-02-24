@extends('layouts.app')
@section('content')
    <h2> type Produits </h2>
                  <a class="link" href=" {{route('typeProduits.create')}} "><i class="fa-solid fa-plus"></i> {{ __('Add a type produits')}}</a>
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
                            <th>libelle</th>
                            <th>actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($typeProduits as $typeProduit)
                          <tr>
                            <th scope="row">{{ $typeProduit->id }}</th>
                            <td>{{ $typeProduit->libelle }}</td>
                            <td>
                            <div class="actions" style="display: inline-block"> <a href="{{route('typeProduits.edit',$typeProduit->id)}}">Modifier</a></div>
                            {{-- <div class="actions" style="display: inline-block"> <a href="{{route('typeProduits.show',$typeProduit->id)}}">show</a></div> --}}
                            <form class="actions" style="display: inline-block" action="{{ route('typeProduits.destroy', $typeProduit->id) }}" method="Post">
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