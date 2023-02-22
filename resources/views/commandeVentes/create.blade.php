@extends('layouts.app')
@section('content')


              
                <fieldset>
                  <legend><h3>ADD a commande</h3></legend>
                  <form class="actions" action="{{ route('commandeVentes.store')}}" method="POST">
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
                  <div > 
                    <label for="">select a client</label>
                    <select name="client_id" id="">
                      @foreach ($clients as $client) 
                        <option value="{{ $client->id }}">{{$client->nom}} {{ $client->prenom}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div >
                  <label for="">select a date</label>
                    <input type="datetime-local" name="dateCom" id="">
                  </div>
                  <div >
                    <button type="submit">create</button>
                  </div>
                                </form>
                </fieldset>
              

@endsection