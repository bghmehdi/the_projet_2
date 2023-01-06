@extends('layouts.app')
@section('content')


<fieldset>
  <legend><h2>ADD a client</h2></legend>
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif
                    <form class="actions"  action="{{route('clients.store')}}" method="POST">
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
                      <div>
                        <label for="">nom</label>
                        <input type="text" name="nom"  id="" placeholder="nom">
                      </div>
                      <div>
                        <label for="" >prenom</label>
                        <input type="text" name="prenom"  id="" placeholder="prenom">
                      </div>
                      <div>
                        <label for="" >telephone</label>
                        <input type="text" name="telephone"  id="" placeholder="Telephone">
                      </div>
                    
                      <div>
                        <label for="" >email</label>
                        <input type="email" name="email"  id="" placeholder="email">
                      </div>
                      <div>
                        <label for="" >adresse</label>
                        <input type="text" name="adresse"  id="" placeholder="adresse">
                      </div>
                      <div>
                        <label for="" >ville</label>
                        <input type="text" name="ville"  id="" placeholder="adresse">
                      </div>
                    
                      <div>
                        <button type="submit">create</button>
                      </div>
                    
                    </form>
                  </fieldset>
@endsection