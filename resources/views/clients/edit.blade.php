@extends('layouts.app')
@section('content')

 
  

  <fieldset>
    <legend><h2>{{$client->nom}} {{$client->prenom}}</h2></legend>
    <form class="actions" action="{{route('clients.update', $client->id)}}" method="post">
      @if (session('status'))
      <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
                      @if ( $errors->any() )
                                  <div class="alert alert-danger">
                                      <ul>
                                          @foreach($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                              @endforeach
                                            </ul>
                                          </div>
                                          @endif
                                          @csrf
                      <div>
                        <a class="link" href="{{route('clients.index')}}"><i class="fa-solid fa-arrow-left"></i> back</a>
                      </div>
                            <input type="hidden" name="_method" value="put">
                      <div>
                        <label for="" >nom</label>
                        <input type="text" name="nom"  id="" placeholder="nom" value="{{$client->nom}}">
                      </div>
                      <div>
                        <label for="" >prenom</label>
                        <input type="text" name="prenom"  id="" placeholder="prenom" value="{{$client->prenom}}">
                      </div>
                      <div>
                        <label for="" >telephone</label>
                        <input type="text" name="telephone"  id="" placeholder="telephone" value="{{$client->telephone}}">
                      </div>
    
                      <div>
                        <label for="" >email</label>
                        <input type="email" name="email"  id="" placeholder="email" value="{{$client->email}}">
                      </div>
                      <div>
                        <label for="" >adresse</label>
                        <input type="text" name="adresse"  id="" placeholder="adresse" value="{{$client->adresse}}">
                      </div>
                      <div>
                        <label for="" >ville</label>
                        <input type="text" name="ville"  id="" placeholder="ville" value="{{$client->ville}}">
                      </div>
    
                      <div>
                        <button type="submit"><i class="fa-solid fa-pen"></i> edit</button>
                      </div>
    
      
    </form>
  </fieldset>
@endsection