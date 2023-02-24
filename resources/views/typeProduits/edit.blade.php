@extends('layouts.app')
@section('content')
    <fieldset> 
                <legend>
                  <h2>edite commande {{$typeProduit->id}}</h2>
                </legend>
                 
                  <form class="actions" action="{{ route('typeProduits.update', $typeProduit->id)}}" method="POST">
                    @if ( $errors->any() )
                                  <div class="pb-0 alert alert-danger">
                                      <ul>
                                          @foreach($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                  </div>
                              @endif
                      @csrf
                      <div >
                        <a class="link" href="{{route('typeProduits.index')}}"><i class="fa-solid fa-arrow-left"></i> back</a>
                      </div>
                      <input type="hidden" name="_method" value="put">
                      
                
                  <div >
                  <label for="" >libelle </label>
                    <input type="text" name="libelle" id="" value="{{ $typeProduit->libelle }}">
                  </div>
                  <div >
                    <button type="submit"><i class="fa-solid fa-pen"></i> edit</button>
                  </div>
                </form>
              </fieldset>
@endsection