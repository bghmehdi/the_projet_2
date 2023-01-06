@extends('layouts.app')
@section('content')

              <fieldset> 
                <legend>
                  <h2>edite commande {{$commandeVente->id}}</h2>
                </legend>
                
                  <form class="actions" action="{{ route('commandeVentes.update', $commandeVente->id)}}" method="POST">
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
                        <a class="link" href="{{route('commandeVentes.index')}}"><i class="fa-solid fa-arrow-left"></i> back</a>
                      </div>
                      <input type="hidden" name="_method" value="put">
                    <div >
                      <label for="" >select a client</label>
                      <select name="client_id" id="">
                        @foreach ($commandeVentes as $commandeVente)
                          <option value="{{ $commandeVente->client->id }}">{{$commandeVente->client->nom}} {{ $commandeVente->client->prenom}}</option>
                        @endforeach
                        {{-- @foreach ($clients as $client)
                          <option value="{{ $client->id }}">{{$client->nom}} {{ $client->prenom}}</option>
                        @endforeach --}}
                        </select>
                  </div>
                  <div >
                  <label for="" >select a date</label>
                    <input type="datetime-local" name="dateCom" id="" value="{{ $commandeVente->dateCom }}">
                  </div>
                  <div >
                    <button type="submit"><i class="fa-solid fa-pen"></i> edit</button>
                  </div>
                </form>
              </fieldset>
            
@endsection